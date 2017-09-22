<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use  Illuminate\Support\Facades\Validator;
class UploadController extends Controller
{
    //  public function  video(){
//
//      //  获取上传的文件对象
//        $file = Input::file('file_name');
//
//        //判断文件是否有效
//        if($file->isValid()){
//            $entension = $file->getClientOriginalExtension();//上传文件的后缀名
////            新文件名
//            $newName = date('YmdHis').mt_rand(1000,9999).'.'.$entension;
////            上传到自己的服务器上
//           // $path = $file->move(public_path().'/uploads',$newName);
////            上传到七牛云上
//            \Storage::disk('qiniu')->writeStream('uploads/'.$newName, fopen($file->getRealPath(), 'r'));
////            上传到阿里OSS
//            //OSS::upload('uploads/'.$newName, $file->getRealPath());
//            $filepath = 'uploads/'.$newName;
//            //返回文件的路径
//            return  $filepath;
    // }
//
//
    // }
    public function upload(Request $request){


        //表单验证
        $data = $request->except('_token');

        $rule = [
            'title' => 'required|min:2|max:15',
            'type_name' => 'required',
            'label' => 'required|min:1|max:16',
            'content' => 'required|min:10|max:30',
            'file_name' => 'required',
            'video_img' => 'required',
            'video_time' => 'required|max:120',
        ];
        $msg = [
            'file_name.required' => '请先上传文件',
            'title.required' => '标题不能为空',
            'title.min' => '标题最小1位',
            'title.max' => '标题最大不能超过15位',
            'type_name.required' => '类型不能为空',
            'label.required' => '标签不能为空',
            'label.min' => '标签最小2位',
            'label.max' => '标签最大16位',
            'content.required' => '内容不能为空',
            'content.min' => '内容最小为10位',
            'content.max' => '内容最大为30位',
            'video_img.required' => '请上传图片',
            'video_time.required' => '时长不能为空',
            'video_time.max' => '时长最大不能超过120分钟',
        ];
        $validator = Validator::make($data, $rule, $msg);
        if ($validator->fails()) {
            return redirect('home/user/add')
                ->withErrors($validator)
                ->withInput();
        }
        //判断是否有上传
        //获取上传的文件对象
        $file = Input::file('file_name');
        if($request->hasFile("file_name")) {
            //确认上传的文件是否成功
            if ($request->file('file_name')->isValid()) {
                $ext = $request->file('file_name')->getClientOriginalExtension();
                //执行移动上传文件
                $filename = time().rand(1000,9999).".".$ext;
                //$request->file('file_name')->move("./uploads",$filename);
                \Storage::disk('qiniu')->writeStream('uploads/'.$filename, fopen($file->getRealPath(), 'r'));
                //修改文件数据
                $data['file_name'] = $filename;
                $data['upload_address'] = 'http://ow44tz416.bkt.clouddn.com/uploads/' . $filename;
                //$filepath = 'uploads/'.$filename;
//                //返回文件的路径
                //return  $filepath;

            }
        }


        //判断是否有图片上传
        //获取上传的文件对象
        $file = Input::file('video_img');
        if($request->hasFile("video_img")) {
            //确认上传的文件是否成功
            if ($request->file('video_img')->isValid()) {
                $ext = $request->file('video_img')->getClientOriginalExtension();
                //执行移动上传文件
                $fileimg = time().rand(10000,99999).".".$ext;
                $request->file('video_img')->move("./uploads",$fileimg);
                //\Storage::disk('qiniu')->writeStream('uploads/'.$filename, fopen($file->getRealPath(), 'r'));
                //修改文件数据
                $data['video_img'] = 'uploads/'.$fileimg;
//                $data['upload_address'] = 'http://ow44tz416.bkt.clouddn.com/uploads/' . $filename;
                //$filepath = 'uploads/'.$filename;
//                //返回文件的路径
                //return  $filepath;

            }
        }
        $res=session('user');
        $user[] = $res->login_id;
        $user[] = $res->login_name;
        $data['user_id'] = $user[0];
        $data['user_name']=$user[1];
        $time = date('Y-m-d H:i:s', time());
        $data['upload_time'] = $time;
        $data['label']= serialize($data['label']);
//                //插入数据库
        $res = \DB::table('users_upload')->insert($data);
        if ($res) {
            return redirect('/home/user/myupload')->with(['info' => '添加成功']);
//
        } else {

            return back()->with(['info' => '添加失败']);
        }
    }


    public function myupload(){
        $res=session('user');
        $user = $res->login_id;
        $id = $user;
        $users = \DB::table('users_upload')->where('user_id', '=', $id)->get();
        return view('home.user.myupload',compact('users'));
    }

}

