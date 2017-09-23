<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PlayController extends Controller
{
    public function index()
    {
        // 获取用户信息
        $id = session('user')->login_id;
        $user = \DB::table('users_message')->where('users_id',$id)->first();
        session(['uinfo'=>$user]);
        // 获取该视频所有评论
        $data = \DB::table('videos_comment')->where('videos_id',9)->get();
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
        $num = count($one);
        $num = $num + count($two);
        return view('home.index.play')->with(['one'=>$one,'two'=>$two,'num'=>$num]);
    }

    public function comment(Request $request)
    {

        $msg = $request->except('_token');
        $id = session('user')->login_id;
//        dd($msg);
//        $id=15;
        $user = \DB::table('users_message')->where('users_id',$id)->first();
//        $user = json_encode($user);
//        dd($user);
//        $user = $user[0];
        $datas = [];
        $datas['users_name'] =  $user->users_name;
        $datas['users_face'] =  $user->face;
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

}
