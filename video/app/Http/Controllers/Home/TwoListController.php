<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TwoListController extends Controller
{
    //

	public function twolist($name,$id)
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

		
		
		//一类别
		$type_1=\DB::table('videos_type')->where('type_id',$id)->first();


		//二类别
		$type_2=\DB::table('videos_type')->where('parent_id',$type_1->parent_id)->get();
		
		//二类别
		$label_video=\DB::table('videos_type')
		  ->leftJoin('videos_data','videos_type.type_id','=','videos_data.type_id')
		  ->where('parent_id',$type_1->parent_id)->get();
		
		// dd($label_video);
	    $brr=[]; 
       foreach($label_video as $k=>$v){
       	if(!empty($v->video_id)){
	       	$brr[$k]=
	       	[ 	
	       		
		       	// 'pid'=>$v->parent_id,
		       	// 'type_id'=>$v->type_id,
		       	// 'type_name'=>$v->type_name
		       	'labels'=>$v->video_labels
	       	];	
       	  }
       }

      	if(empty($brr['0']['labels'])){
      		return;
      	}
      	
       	$crr=[];
        foreach($brr as $k=>$v){

        	$crr[$k]= unserialize($v['labels']);
        }

		$label=[];

		
		foreach($crr as $k=>$v){

			 foreach($v as $m)
			 {	


			 	if(!in_array($m,$label))
			 	{
			 		$label[]=$m;
			 	}
			 	
			 }

		}
		
		//一周前
		$day_7=date('Y-m-d H:i:s',strtotime('-7day'));

		//标签值判断
		
		

		
		//最新动态一周较火
		$new_video=\DB::table('videos_data')->leftJoin('videos_type', 'videos_data.type_id', '=', 'videos_type.type_id')->where('videos_data.type_id',$id)->where('videos_data.created_at','>',$day_7)->where('video_status','上线')->orderBy('video_count','desc')->limit(4)->get();
		//全部视频
		$all_video=\DB::table('videos_data')->where('type_id',$id)->where('video_status','上线')->orderBy('created_at','desc')->paginate(10);
		
		//全部视频排行前三
		$up_video1=\DB::table('videos_data')->leftJoin('videos_type', 'videos_data.type_id', '=', 'videos_type.type_id')->where('videos_data.type_id',$id)->where('video_status','上线')->orderBy('video_count','desc')->limit(3)->get();
		//全部视频三到七
		$up_video2=\DB::table('videos_data')->leftJoin('videos_type', 'videos_data.type_id', '=', 'videos_type.type_id')->where('videos_data.type_id',$id)->where('video_status','上线')->orderBy('video_count','desc')->offset(3)->limit(7)->get();
		 
		 return view('home.index.twolist')->with(['title'=>$name,'id'=>$id,'type'=>$type,'type_1'=>$type_1,'type_2'=>$type_2,'label'=>$label,'new_video'=>$new_video,'all_video'=>$all_video,'up_video1'=>$up_video1,'up_video2'=>$up_video2]);


	}

	public function labelTwolist($name,$id,$labelv)
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

		
		
		//一类别
		$type_1=\DB::table('videos_type')->where('type_id',$id)->first();


		//二类别
		$type_2=\DB::table('videos_type')->where('parent_id',$type_1->parent_id)->get();
		
		//二类别
		$label_video=\DB::table('videos_type')
		  ->leftJoin('videos_data','videos_type.type_id','=','videos_data.type_id')
		  ->where('parent_id',$type_1->parent_id)->get();
		
		$brr=[]; 
       foreach($label_video as $k=>$v){
       		if(!empty($v->video_id)){
	       	$brr[$k]=
	       	[ 	
	       		
		       	// 'pid'=>$v->parent_id,
		       	// 'type_id'=>$v->type_id,
		       	// 'type_name'=>$v->type_name
		       	'labels'=>$v->video_labels
	       	];	
       	  }
       }
       	$crr=[];
        foreach($brr as $k=>$v){

        	$crr[$k]= unserialize($v['labels']);
        }

		$label=[];

		foreach($crr as $k=>$v){

			 foreach($v as $m)
			 {	


			 	if(!in_array($m,$label))
			 	{
			 		$label[]=$m;
			 	}
			 	
			 }

		}
		
		//一周前
		$day_7=date('Y-m-d H:i:s',strtotime('-7day'));

		//标签值判断
		
		

		
		//最新动态
		$new_video=\DB::table('videos_data')->leftJoin('videos_type', 'videos_data.type_id', '=', 'videos_type.type_id')->where('videos_data.type_id',$id)->where('videos_data.created_at','>',$day_7)->where('video_labels','like','%'.$labelv.'%')->orderBy('video_count','desc')->where('video_status','上线')->limit(4)->get();
		
		//全部视频
		$all_video=\DB::table('videos_data')->where('type_id',$id)->where('video_status','上线')->orderBy('created_at','desc')->paginate(10);
		//全部视频排行前三
		$up_video1=\DB::table('videos_data')->leftJoin('videos_type', 'videos_data.type_id', '=', 'videos_type.type_id')->where('videos_data.type_id',$id)->where('video_labels','like','%'.$labelv.'%')->where('video_status','上线')->orderBy('video_count','desc')->limit(3)->get();
		//全部视频排行三到七
		$up_video2=\DB::table('videos_data')->leftJoin('videos_type', 'videos_data.type_id', '=', 'videos_type.type_id')->where('videos_data.type_id',$id)->where('video_labels','like','%'.$labelv.'%')->where('video_status','上线')->orderBy('video_count','desc')->offset(3)->limit(7)->get();	

		 return view('home.index.twolist')->with(['title'=>'芭拉芭拉-'.$name,'id'=>$id,'type'=>$type,'type_1'=>$type_1,'type_2'=>$type_2,'label'=>$label,'new_video'=>$new_video,'all_video'=>$all_video,'up_video1'=>$up_video1,'up_video2'=>$up_video2]);

	}

}
