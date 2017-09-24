<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PlayController extends Controller
{
    public function index($video_id)
    {
        // 获取用户信息
//        $id = session('user')->login_id;
//        $user = \DB::table('users_message')->where('users_id',$id)->first();
//        session(['uinfo'=>$user]);
        // 获取该视频所有评论
        $data = \DB::table('videos_comment')->where('videos_id',$video_id)->get();
        //一级分类
        $one = array();
        // 二级分类
        $two = array();
        foreach($data as $k=>$v){
            // 获取一级评论
            if($v->pid == 0){
                $one[$k] = $v;
            }
            foreach($one as $m=>$n){
                if($v->pid == $n->comments_id){
                    $two[$k] = $v;
                }
            }
        }
//        dd($one);
        $num = count($one);
        $num = $num + count($two);
//        dd(session('user'));
        return view('home.index.play')->with(['one'=>$one,'two'=>$two,'num'=>$num,'video_id'=>$video_id]);
    }

    public function comment(Request $request)
    {

        $msg = $request->except('_token');
        $datas = [];
        $datas['users_name'] =  session('user')->users_name;
        $datas['users_face'] =  session('user')->face;
        $datas['videos_id']  =  $msg['video_id'];
        $datas['comment']    =  $msg['comment'];
        $datas['pid'] = 0;
        $datas['comment_time']= date('Y-m-d H:i:s',time());
        $res = \DB::table('videos_comment')->insertGetId($datas);
        $datas['comments_id'] = $res;
        if($res){
            return $datas;
        }else{
            return 1;
        }
//        return  response()->json($res);
    }

    public function reply(Request $request)
    {
        $msg = $request->except('_token');

        $datas = [];
        $datas['users_name'] =  session('user')->users_name;
        $datas['users_face'] =  session('user')->face;
        $datas['videos_id']  =  $msg['video_id'];
        $datas['comment']    =  $msg['comment'];
        $datas['pid']        =  $msg['pid'];
        $datas['comment_time']= date('Y-m-d H:i:s',time());
        $res = \DB::table('videos_comment')->insertGetId($datas);
        $datas['comments_id'] = $res;
        if($res){
            return $datas;
        }else{
            return 1;
        }
    }

}
