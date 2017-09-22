<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OneListController extends Controller
{
    //

	public function onelist($name,$id)
	{	
		//菜单栏
		$type = \DB::table('videos_type')->select('*',\DB::raw("concat(path,',',type_id) AS sort_path"))
		                                 ->orderBy('sort_path')
		                                 ->get();

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
		$type=[];	
		$type=$r[0];


		$types = \DB::table('videos_type')->select('*',\DB::raw("concat(path,',',type_id) AS sort_path"))
										 ->where('parent_id',$id)
		                                 ->orderBy('sort_path')
		                                 ->get();
		//数组处理!
       $brr=[]; 
       foreach($types as $k=>$v){
       	$brr[$k]=
       	[ 	
       		'path'=>$v->sort_path,
	       	'pid'=>$v->parent_id,
	       	'type_id'=>$v->type_id,
	       	'type_name'=>$v->type_name
	       	
       	];	
       }
		
		$m=array();	

		foreach($brr as $v){

			$n=&$m;
			 foreach(explode(',',array_shift($v)) as $k) {
			    if(! isset($n[$k])) 
			    $n[$k] = array();
			    $n = & $n[$k];
			  }
			  $n['value'] =$v; //if $v['']
			}
		$types=[];	
		$types=$m[0];
		$types=$types[$id];
		
	 //        foreach($types as $k=>$v)
	 //        {
	 //        		//echo  $v['value']['type_name'];

	 //        	 foreach($data as $kk=>$vv)
	 //        	 {	
	        	 			
 	//                    if($vv->type_id==$k)
 	//                    { 
 	//                    		echo '<br>',$vv->video_name;
 	//                    }
	        	 	  

	 //        	 }

	 //        }


		// echo '<pre>';
		// print_r($types);
		// echo '</pre>';
		
		
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
		$data_1=\DB::table('videos_data')->leftJoin('videos_type', 'videos_data.type_id', '=', 'videos_type.type_id')->where('parent_id',$id)->where('videos_data.created_at','>',$day_3)->orderBy('video_count','desc')->get();
		//最新动态
		$data_2=\DB::table('videos_data')->leftJoin('videos_type', 'videos_data.type_id', '=', 'videos_type.type_id')->where('parent_id',$id)->orderBy('videos_data.created_at','desc')->get();
		 

		 //排行
		 
		 //播放
		$play_data=\DB::table('videos_data')->leftJoin('videos_type', 'videos_data.type_id', '=', 'videos_type.type_id')->where('parent_id',$id)->orderBy('video_count','desc')->get();
		
		//评论
		$comment_data=\DB::table('videos_data')->leftJoin('videos_type', 'videos_data.type_id', '=', 'videos_type.type_id')->where('parent_id',$id)->orderBy('video_comments','desc')->get();

		
	     

		 //轮播图视频
		$video_1=\DB::table('generalizes')->leftJoin('videos_data','generalizes.video_id','=','videos_data.video_id')->leftJoin('positions','generalizes.position_id','=','positions.position_id')->where('positions.position_name','一级列表轮播图位')->limit(4)->get();	
		 //轮播图侧边位
		$video_2=\DB::table('generalizes')
		  ->leftJoin('videos_data','generalizes.video_id','=','videos_data.video_id')
		  ->leftJoin('positions','generalizes.position_id','=','positions.position_id')
		  ->leftJoin('videos_type', 'videos_data.type_id', '=', 'videos_type.type_id')
		  ->where('positions.position_name','一级列表轮播图侧边位')->limit(6)->get();	
		 //首页推广位
		$video_3=\DB::table('generalizes')
		  ->leftJoin('videos_data','generalizes.video_id','=','videos_data.video_id')
		  ->leftJoin('positions','generalizes.position_id','=','positions.position_id')
		  ->leftJoin('videos_type', 'videos_data.type_id', '=', 'videos_type.type_id')
		  ->where('positions.position_name','一级列表推广位')->limit(6)->get();
		

		return view('home/index/onelist')->with(['title'=>'一级列表','name'=>$name,'type'=>$type,'types'=>$types,'data_1'=>$data_1,'data_2'=>$data_2,'video_1'=>$video_1,'video_2'=>$video_2,'video_3'=>$video_3,'man'=>$man,'new_video'=>$new_video,'play_data'=>$play_data,'comment_data'=>$comment_data]);
	}

}
