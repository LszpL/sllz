<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //
	public function index(){

		//查询分类
		$type = \DB::table('videos_type')->select('*',\DB::raw("concat(path,',',type_id) AS sort_path"))->orderBy('sort_path')->get();


		//数组处理!
       $arr=[]; 
       foreach($type as $k=>$v){
       	$arr[$k]=
       	[ 	
       		'path'=>$v->sort_path,
	       	'pid'=>$v->parent_id,
	       	'type_id'=>$v->type_id,
	       	'type_name'=>$v->type_name
	       	
       	];	
       }
		
		$r=array();	
		foreach($arr as $v){

			$p=&$r;
			 foreach(explode(',',array_shift($v)) as $k) {
			    if(! isset($p[$k])) 
			    $p[$k] = array();
			    $p = & $p[$k];
			  }
			  $p['value'] = $v; //if $v['']
			}
		$types=[];	
		$types=$r[0];

		 //注册人数
		$man =\DB::table('users_message')->count();
		//一天前
		$day_1=date('Y-m-d H:i:s',strtotime('-1day'));
		//最新投稿
		
		$new_video=\DB::table('videos_data')->where('created_at',$day_1)->count();

		//三天前
		$day_3=date('Y-m-d H:i:s',strtotime('-3day'));
		//查询视频
		//有新动态
		$data_1=\DB::table('videos_data')->leftJoin('videos_type', 'videos_data.type_id', '=', 'videos_type.type_id')->where('parent_id','0')->where('videos_data.created_at','>',$day_3)->orderBy('video_count','desc')->get();
		//最新动态
		$data_2=\DB::table('videos_data')->leftJoin('videos_type', 'videos_data.type_id', '=', 'videos_type.type_id')->where('parent_id','0')->orderBy('videos_data.created_at','desc')->get();
		 

		 //排行
		 
		 //播放
		$play_data=\DB::table('videos_data')->leftJoin('videos_type', 'videos_data.type_id', '=', 'videos_type.type_id')->where('parent_id','0')->orderBy('video_count','desc')->get();
		
		//评论
		$comment_data=\DB::table('videos_data')->leftJoin('videos_type', 'videos_data.type_id', '=', 'videos_type.type_id')->where('parent_id','0')->orderBy('video_comments','desc')->get();

		 // echo '<pre>';
	  //    print_r($play_data);
	  //    echo '</pre>';

	  //    echo '<pre>';
	  //    print_r($comment_data);
	  //    echo '</pre>';
	  //    die;
		 //轮播图视频
		$video_1=\DB::table('generalizes')->leftJoin('videos_data','generalizes.video_id','=','videos_data.video_id')->leftJoin('positions','generalizes.position_id','=','positions.position_id')->where('positions.position_name','轮播图位')->limit(4)->get();	
		 //轮播图侧边位
		$video_2=\DB::table('generalizes')
		  ->leftJoin('videos_data','generalizes.video_id','=','videos_data.video_id')
		  ->leftJoin('positions','generalizes.position_id','=','positions.position_id')
		  ->leftJoin('videos_type', 'videos_data.type_id', '=', 'videos_type.type_id')
		  ->where('positions.position_name','轮播图侧边位')->limit(6)->get();	
		 //首页推广位
		$video_3=\DB::table('generalizes')
		  ->leftJoin('videos_data','generalizes.video_id','=','videos_data.video_id')
		  ->leftJoin('positions','generalizes.position_id','=','positions.position_id')
		  ->leftJoin('videos_type', 'videos_data.type_id', '=', 'videos_type.type_id')
		  ->where('positions.position_name','首页推广位')->limit(6)->get();
			
		 //更多 视频显示数
		 
		 // if(!isset($_GET['a'])){
		 // 	$_GET['a']=2;
		 // }elseif($_GET['a']=2){
		 // 	$_GET['a']=4;
		 // }elseif($_GET['a']=4){
		 // 	$_GET['a']=2;
		 // }
		 

		    // $data=[]; 

	     //   foreach($res as $k=>$v){
	     //   	$data[$k]=
	     //   	[ 	
	       		
	       		
		    //    	'pid'=>$v->parent_id,
		    //    	'type_id'=>$v->type_id,
		    //    	'type_name'=>$v->type_name,
		    //    	'video_id'=>$v->video_id,
		    //    	'video_name'=>$v->video_name,
		    //    	'video_time'=>$v->video_time,
		    //    	'video_img'=>$v->video_img,
		    //    	'created_at'=>$v->created_at,
		    //    	'created_at'=>$v->video_count 
		       	
	     //   	];	
	     //   }

	       
	        // echo '<pre>';
	        // print_r($data_1);
	        // echo '</pre>';
	        // echo '<pre>';
	        // print_r($data_2);
	        // echo '</pre>';

	        // foreach($types as $k=>$v)
	        // {


	        // 	 foreach($data as $kk=>$vv)
	        // 	 {	
	        	 		
 	       //             if($vv->type_id==$k)
 	       //             {
	        // 	 				echo'1';
 	       //             		echo $vv->video_name;
 	       //             }
	        	 	  

	        // 	 }

	        // }
	     	
		return view('home.index.index',['title'=>'视频首页'])
		->with(['title'=>'首页','types'=>$types,'data_1'=>$data_1,'data_2'=>$data_2,'video_1'=>$video_1,'video_2'=>$video_2,'video_3'=>$video_3,'man'=>$man,'new_video'=>$new_video,'play_data'=>$play_data,'comment_data'=>$comment_data]);

	} 


	
}
