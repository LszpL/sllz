<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gregwar\Captcha\CaptchaBuilder; 
use Gregwar\Captcha\PhraseBuilder;


use iscms\Alisms\SendsmsPusher as Sms; //aliyun



class LoginController extends Controller
{
    public function login(){
        // dd(111);
        return view('home.login',['title'=>'芭拉芭拉-登录界面']);
    }
    // 验证码生成
    public function captcha($tmp)
    {
        $phrase = new PhraseBuilder;
        // 设置验证码位数
        $code = $phrase->build(4);
        // 生成验证码图片的Builder对象，配置相应属性
        $builder = new CaptchaBuilder($code, $phrase);
        // 设置背景颜色
        $builder->setBackgroundColor(255,250,250);
        $builder->setMaxAngle(25);
        $builder->setMaxBehindLines(0);
        $builder->setMaxFrontLines(0);
        // 可以设置图片宽高及字体
        $builder->build($width = 100, $height = 42, $font = null);
        // 获取验证码的内容
        $phrase = $builder->getPhrase();
        // 把内容存入session
        \Session::flash('code', $phrase);
        // 生成图片
        header("Cache-Control: no-cache, must-revalidate");
        header("Content-Type:image/jpeg");
        $builder->output();
    }
    public function dologin(Request $request){
        // dd($request->all());
        $input = $request->except('_token');
        $rule = [
            'login_name'=>'required',
            'login_pwd'=>'required',
            'code'=>'required',
        ];
        $msg = [
            'login_name.required'=>'用户名必须输入',
            'login_pwd.required'=>'密码必须输入',
            'code.required'=>'验证码必须输入',
        ];

		$validator = \Validator::make($input,$rule,$msg);
		//如果验证失败
		if($validator->fails()){
			return redirect('home/login')
				->withErrors($validator)
				->withInput();
		}
		// dd($input);
		$user = \DB::table('users_login')->where('login_name',$input['login_name'])->first();
		// dd($user);
        if($user->login_status=='封号'){
            return back()->with(['info'=>'该用户已被停封'])->withInput();
        }   
		if(!$user||decrypt($user->login_pwd) != $input['login_pwd']){

            return back()->with(['info'=>'用户名或密码错误'])->withInput();
        }
        //        判断验证码
        if(session('code') != $input['code']){
            return back()->with(['info'=>'验证码错误'])->withInput();
        }
        $data = \DB::table('users_message')->where('users_id',$user->login_id)->first();
        // dd($data);
        //         4 如果验证通过，将用户信息写入session,作为用户登录标志
        session(['user'=>$data]);
        session('user')->login_id = $user->login_id;
        session('user')->login_name = $user->login_name;
        // dd(session('user'));
        // 5 跳转到后台首页
        return redirect('/home/index/index');       
    }

    public function zhuce(){
        return view('home.zhuce',['title'=>'芭拉芭拉-注册页面']);
    }

    public function __construct(Sms $sms)
    {
       $this->sms=$sms;
    }

    public function index(Request $request)
    {
        // dd(111);
        $phone = $request->input('phone');
        $user = \DB::table('users_login')->where('login_name',$phone)->first();
        if($user){
            $data='用户名已存在';
        }else{
            if(!empty($request->input('pwd'))||!empty($request->input('repwd'))){
                if($request->input('pwd')!=$request->input('repwd')){
                    $data='两次密码不一致';    
                }else{
                    $data='验证码发送成功';
                    $name="兄弟连";
                    $num = rand(100000,999999);
                    
                    $a=['number'=>"$num"];
                    $content=json_encode($a);
                    $code='SMS_75835101';
                    $result=$this->sms->send("$phone","$name","$content","$code");
                    session(['codep'=>$num]);
                }
            }else{
                $data='请先确定密码哟';
            }
        }
        return $data;
    }

    public function dozhuce(Request $request){
        // dd($request->all());
        //表单验证
        $this->validate($request,[
            'login_name' => 'required|digits:11|regex:/^1[35678]\d{9}$/',
            'login_pwd' => 'required|between:6,18',
            're_pwd' => 'required|same:login_pwd',
            'code' => 'required|between:6,6',
            ],[
            'login_name.required'=>'手机号不能为空',
            'login_name.digits'=>'手机号必须为11位',
            'login_name.regex'=>'手机号不合法',
            'login_pwd.required'=>'密码不能为空',
            'login_pwd.between'=>'密码必须在6-18位之间',
            're_pwd.required'=>'确认密码不能为空',
            're_pwd.same'=>'确认密码不一致',
            'code.required'=>'验证码必须输入',
            'code.between'=>'验证码必须是6位',
            ]);

        $user = \DB::table('users_login')->where('login_name',$request->input('login_name'))->first();
        if($user){
            return back()->with(['info'=>'用户名已存在'])->withInput();
        }

        if(session('codep') != $request->input('code')){
            return back()->with(['info'=>'验证码错误'])->withInput();
        }else{
        $data=$request->except('_token','re_pwd','code');

        //密码处理
        $data['login_pwd']=encrypt($data['login_pwd']);
        $time = date('Y-m-d H:i:s',time());
        $data['login_time'] = $time;
        $data['login_ip'] = $_SERVER['REMOTE_ADDR'];
        // dd($data);
        $res = \DB::table('users_login')->insertGetId($data);
        // dd($res);
         \DB::table('users_message')->insert(['users_id'=>$res,'users_name'=>$data['login_name']]);
        if($res){
            return redirect('/home/login')->with(['info'=>'注册成功']);
        }else{
            return back()->with(['info'=>'注册失败']);
        }
        }

    }

    //忘记密码
    public function forget(){
        return view('home.forget',['title'=>'芭拉芭拉-忘记密码']);
    }

    public function findex(Request $request)
    {
        // dd(111);
        $phone = $request->input('phone');
        $user = \DB::table('users_login')->where('login_name',$phone)->first();
        if(!$user){
            $data='该手机号还没有注册,请去注册!';
        }else{

            if(!empty($request->input('pwd'))||!empty($request->input('repwd'))){
                if($request->input('pwd')!=$request->input('repwd')){
                    $data='两次密码不一致';    
                }else{
                    $pwd=decrypt($user->login_pwd);
                    if($request['pwd']==$pwd){
                        $data='密码不能与原密码一致';
                    }else{
                    $data='验证码发送成功';
                    $name="兄弟连";
                    $num = rand(100000,999999);
                    
                    $a=['number'=>"$num"];
                    $content=json_encode($a);
                    $code='SMS_75835101';
                    $result=$this->sms->send("$phone","$name","$content","$code");
                    session(['codec'=>$num]);
                    }
                }
            }else{
                $data='请先确定密码哟';
            }
        }
        return $data;
    }

    public function doforget(Request $request){
        // dd(111);
         //表单验证
        $this->validate($request,[
            'login_name' => 'required|digits:11|regex:/^1[35678]\d{9}$/',
            'login_pwd' => 'required|between:6,18',
            're_pwd' => 'required|same:login_pwd',
            'code' => 'required|between:6,6',
            ],[
            'login_name.required'=>'手机号不能为空',
            'login_name.digits'=>'手机号必须为11位',
            'login_name.regex'=>'手机号不合法',
            'login_pwd.required'=>'密码不能为空',
            'login_pwd.between'=>'密码必须在6-18位之间',
            're_pwd.required'=>'确认密码不能为空',
            're_pwd.same'=>'确认密码不一致',
            'code.required'=>'验证码必须输入',
            'code.between'=>'验证码必须是6位',
            ]);

        if(session('codec') != $request->input('code')){
            return back()->with(['info'=>'验证码错误'])->withInput();
        }else{
        $data=$request->except('_token','re_pwd','code','login_name');

        //密码处理
        $data['login_pwd']=encrypt($data['login_pwd']);
        // $time = date('Y-m-d H:i:s',time());
        // $data['login_time'] = $time;
        // $data['login_ip'] = $_SERVER['REMOTE_ADDR'];
        $res = \DB::table('users_login')->update($data);
        if($res){
            return redirect('/home/login')->with(['info'=>'重置密码成功']);
        }else{
            return back()->with(['info'=>'重置密码失败']);
        }
        }
    }

    //搜索
    public function search(Request $request){
        $video = \DB::table('videos_type')->where('parent_id',0)->get();
        $keywords =  $request->input('keywords')?$request->input('keywords'):'';
        // dd($video);
        if(!empty($_GET['most'])){
            $most=$_GET['most'];
        }else{
            $most = 'px';
        }  
        if(!empty($_GET['time'])){
            $time=$_GET['time'];
        }else{
            $time = 'qb';
        }
        if($most=='fb'){
            $data = \DB::table('videos_type')->rightJoin('videos_data','videos_type.type_id','=','videos_data.type_id')
            ->orderby('videos_data.created_at','desc')->paginate(5);
        }
            // return view('home.search',['data'=>$data,'video'=>$video,'title'=>'芭拉芭拉-搜索页','request'=>$request->all(),'keywords'=>$keywords]);
        if($most=='dj'){
            $data = \DB::table('videos_type')->rightJoin('videos_data','videos_type.type_id','=','videos_data.type_id')
            ->orderby('videos_data.video_count','desc')->paginate(5);
        }
        if($most=='pl'){
            $data = \DB::table('videos_type')->rightJoin('videos_data','videos_type.type_id','=','videos_data.type_id')
            ->orderby('videos_data.video_comments','desc')->paginate(5);
        }
        if($most=='sc'){
            $data = \DB::table('videos_type')->rightJoin('videos_data','videos_type.type_id','=','videos_data.type_id')
            ->orderby('videos_data.video_collect','desc')->paginate(5);
        }
        if($time=='ten'){
            $data = \DB::table('videos_type')->rightJoin('videos_data','videos_type.type_id','=','videos_data.type_id')
            ->where('videos_data.video_time','<',10)->paginate(5);
        }
        if($time=='three'){
            $data = \DB::table('videos_type')->rightJoin('videos_data','videos_type.type_id','=','videos_data.type_id')
            ->where('videos_data.video_time','>',10)->where('videos_data.video_time','<',20)
            ->paginate(5);
        }
        if($time=='six'){
            $data = \DB::table('videos_type')->rightJoin('videos_data','videos_type.type_id','=','videos_data.type_id')
            ->where('videos_data.video_time','>',20)->where('videos_data.video_time','<',40)
            ->paginate(5);
        }
        if($time=='ls'){
            $data = \DB::table('videos_type')->rightJoin('videos_data','videos_type.type_id','=','videos_data.type_id')
            ->where('videos_data.video_time','>',40)
            ->paginate(5);
        }
        if($most=='px'&&$time=='qb'){
        $data = \DB::table('videos_type')
                ->rightJoin('videos_data','videos_type.type_id','=','videos_data.type_id')
                ->where('video_name','like','%'.$keywords.'%')
                ->orwhere('video_desc','like','%'.$keywords.'%')->paginate(5);
            }
        // dd($data);
        return view('home.search',['data'=>$data,'video'=>$video,'title'=>'芭拉芭拉-搜索页','request'=>$request->all(),'keywords'=>$keywords]);
    }

    public function xsearch(Request $request ){
        $video = \DB::table('videos_type')->where('parent_id',0)->get();
        $keywords =  $request->input('keywords')?$request->input('keywords'):'';
        $most=$_GET['most']?$_GET['most']:0;
        if($most=='1'){
            $data = \DB::table('videos_type')->rightJoin('videos_data','videos_type.type_id','=','videos_data.type_id')
            ->orderby('videos_data.created_at','desc')->paginate(5);
        }
            return view('home.search',['data'=>$data,'video'=>$video,'title'=>'芭拉芭拉-搜索页','request'=>$request->all(),'keywords'=>$keywords]);
    }

    public function tuichu(Request $request){
        $request->session()->forget('user');
        \Session::forget('user');
        //跳转
        return redirect('/home/index/index')->with(['info'=>'登出成功']);
    }

}
