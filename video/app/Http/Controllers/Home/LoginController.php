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
		if(!$user||decrypt($user->login_pwd) != $input['login_pwd']){
            return back()->with(['info'=>'用户名或密码错误'])->withInput();
        }
        //        判断验证码
        if(session('code') != $input['code']){
            return back()->with(['info'=>'验证码错误'])->withInput();
        }
        //         4 如果验证通过，将用户信息写入session,作为用户登录标志
        session(['user'=>$user]);
        // 5 跳转到后台首页
        return redirect('home/index');       
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
        if($request->input('pwd')!=$request->input('repwd')){
            $data='两次密码不一致';    
        }else{
        $data='验证码发送成功';
    	$name="兄弟连";
    	$num = rand(000000,999999);
        
    	$a=['number'=>"$num"];
    	$content=json_encode($a);
    	$code='SMS_75835101';
        $result=$this->sms->send("$phone","$name","$content","$code");
        session(['code'=>$num]);
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

        if(session('code') != $request->input('code')){
            return back()->with(['info'=>'验证码错误'])->withInput();
        }else{
        $data=$request->except('_token','re_pwd','code');

        //密码处理
        $data['login_pwd']=encrypt($data['login_pwd']);
        $time = date('Y-m-d H:i:s',time());
        $data['login_time'] = $time;
        $data['login_ip'] = $_SERVER['REMOTE_ADDR'];
        $res = \DB::table('users_login')->insert($data);
        if($res){
            return redirect('/home/login')->with(['info'=>'注册成功']);
        }else{
            return back()->with(['info'=>'注册失败']);
        }
        }

    }

}
