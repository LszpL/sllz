<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PlayController extends Controller
{
    public function index($video_id)

    {   
       
        
        $user_id=session('user')->login_id;

        $user_vip=\DB::table('users_vip')->where('vip_id',$user_id)->first();

        //视频详细信息
        $video=\DB::table('videos_data')
        ->leftJoin('videos_type', 'videos_data.type_id', '=', 'videos_type.type_id')
        ->leftJoin('users_upload', 'videos_data.video_desc', '=', 'users_upload.content')
        ->where('video_id',$video_id)->first();


        $video_vip=$video->video_vip;
        
        $play = 1;

        if( empty($user_vip) && $video_vip =='付费'){

            $play=2;
        }

        //播放加1
        $count=\DB::table('videos_data')->where('video_id',$video_id)->increment('video_count');

        //历史记录
        $history=\DB::table('watchs_history')->insert([
            'users_id'=>session('user')->users_id,
            'videos_id'=>$video_id,
            'last_time'=>date('Y-m-d H:i:s')
            ]);  
        //标签组
        $label=unserialize($video->video_labels);

        //相关推荐
        
        $videos =\DB::table('videos_data')->orderby('created_at','desc')->limit(4)->get();
        if(!isset($videos['0'])){
            $videos =\DB::table('videos_data')->where('type_id',$video->type_id)->orderby('video_count','desc')->limit(4)->get();
        }
        
        //发布人信息
        
        $up =\DB::table('users_upload')->leftJoin('users_message', 'users_upload.users_id', '=', 'users_message.users_id')->where('upload_id',$video->upload_id)->first();
        
        
        
        

        

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

        return view('home.index.play')->with(['title'=>'芭拉芭拉-播放页','one'=>$one,'two'=>$two,'num'=>$num,'play'=>$play,'video'=>$video,'label'=>$label,'videos'=>$videos,'video_id'=>$video_id,'up'=>$up]);

    }

    public function gun()
    {
        return view('home.index.gun')->with(['title'=>'会员充值']);
    }
    public function collect(Request $request)
    {

        $id=$request->input('id');

        $res=\DB::table('videos_data')->where('video_id',$id)->increment('video_collect');
        
        if($res){
            echo '收藏成功';
        }else{
            echo '收仓失败';
        }

    }
    public function comment(Request $request)
    {


        $msg = $request->except('_token');

           
        $comment=\DB::table('videos_data')->where('video_id', $msg['video_id'])->increment('video_comments');


        $datas = [];
        $datas['users_name'] =  session('user')->pet_name;
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
        $datas['users_name'] =  session('user')->pet_name;
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
