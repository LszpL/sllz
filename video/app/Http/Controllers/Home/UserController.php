<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    //个人用户主页
    public function home()
    {
        $data = session('user');
        $id= $data->login_id;
        $res=\DB::table('users_message')->where('users_id',$id)->get();
        return view('home.user.home',compact('res'));

    }

//用户个人信息页
    public function message()
    {
        $data = session('user');
        $res[] = $data->login_id;
        $res[] = $data->login_name;
        $message = $users = \DB::table('users_message')->where('users_id', '=', $res[0])->get();

        return view('home.user.message', compact('message', 'res'));


    }

//用户个人信息插入
    public function domessage(Request $request)
    {

        $data = $request->except('_token');

        $id = $data['message_id'];
        $time = date('Y-m-d H:i:s', time());
        $data['update_time'] = $time;
//                //插入数据库
        $res = \DB::table('users_message')->where('message_id', $id)->update($data);
        if ($res) {
            return back()->with(['info' => '修改成功']);
        } else {

            return back()->with(['info' => '修改失败']);
        }

    }

    //用户视频增加
    public function add()
    {

        //引入视频分类
        $type = \DB::table('videos_type')->get();
        $type = \DB::table('videos_type')->select('*', \DB::raw("concat(path,',',type_id) AS sort_path"))->orderBy('sort_path')->get();
        foreach ($type as $key => $value) {
            $num = substr_count($value->path, ',');
            $type[$key]->type_name = str_repeat('|| - ', $num) . $value->type_name;


        }
        //引入标签分类
        $label = \DB::table('videos_label')->get();
        return view('home.user.add', ['title' => '用户视频添加'], compact('type', 'label'));


    }

//用户头像插入
    public function face()
    {
        $fc = session('user');
        $id=$fc->login_id;
// 查询数据库,如果有头像获取头像
        $faceimg = $users = \DB::table('users_message')->where('users_id', '=', $id)->get();
        return view('home.user.face',compact('faceimg'));

    }
//头像执行插入
    public function myface(Request $request)
    {

        //图片上传验证
        $data = $request->except('_token');
        $rule = [

             'face' => 'required',
        ];
        $msg = [
            'file_name.required' => '请上传图片格式',

        ];
        $validator = Validator::make($data, $rule, $msg);
        if ($validator->fails()) {
            return redirect('home/user/face')
                ->withErrors($validator)
                ->withInput();
        }
        //判断是否有上传
        //获取上传的文件对象
        $file = Input::file('face');
        if ($request->hasFile("face")) {
            //确认上传的文件是否成功
            if ($request->file('face')->isValid()) {
                $ext = $request->file('face')->getClientOriginalExtension();
                //执行移动上传文件
                $filename = time() . rand(1000, 9999) . "." . $ext;
                $request->file('face')->move("./uploads", $filename);
                //\Storage::disk('qiniu')->writeStream('uploads/'.$filename, fopen($file->getRealPath(), 'r'));
                //修改文件数据
                $data['face'] = $filename;
            }
        }

    //更新插入数据库
        $uid = session('user');
        $id= $uid->login_id;
        //插入数据库
        $res = \DB::table('users_message')->where('users_id', $id)->update($data);
        if ($res) {
            return back()->with(['info' => '修改成功']);
        } else {

            return back()->with(['info' => '修改失败']);
        }
    }

    public function  imgs(Request $request){

    }




    public function comment()
    {
        return view('home.user.comment')->with('title', '我的评论');
    }

    public function history()
    {

        $data = \DB::table('watchs_history')->leftJoin('videos_data', 'watchs_history.videos_id', '=', 'videos_data.video_id')->where('users_id','1')->paginate(10);
//        dd($data);
        return view('home.user.history')->with(['title'=>'观看历史','data'=>$data]);
    }

    public function delhistory(Request $request)
    {
        $id = $request->only('id');
        $res = \DB::table('watchs_history')->where('watchs_id',$id)->delete();
        if($res)
        {
            $data = [
                'state'=>1
            ];
        }else{
            $data = [
                'state'=>0
            ];
        }
        return $data;
    }

}




