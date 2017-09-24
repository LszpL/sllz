@extends('home.layouts')


@section('content')
  <meta name="description" content="bilibili是国内知名的视频弹幕网站，这里有最及时的动漫新番，最棒的ACG氛围，最有创意的Up主。大家可以在这里找到许多欢乐。" /> 
  <meta name="keywords" content="B站,弹幕,字幕,AMV,MAD,MTV,ANIME,动漫,动漫音乐,游戏,游戏解说,ACG,galgame,动画,番组,新番,初音,洛天依,vocaloid" /> 
  <meta name="renderer" content="webkit" /> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  

  <link rel="stylesheet" href="{{asset('/home/two/css/jquery-ui.css')}}" type="text/css" /> 
  <link rel="stylesheet" href="{{asset('/home/two/css/page-core.css')}}" type="text/css" /> 
  <link type="text/css" href="{{asset('/home/two/css/page-tag.css')}}" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="{{asset('/bs/css/bootstrap.min.css')}}">
  <script type="text/javascript" src="{{asset('/bs/js/bootstrap.min.js')}}"></script>
  <meta name="spm_prefix" content="333.339" /> 

  <script src="{{asset('admin/assets/js/jquery.min.js')}}"></script>
  <style>
/* Code tidied up by ScrapBook */
</style>
 </head> 
 <body data-cover-preview="true"> 
  <!-- 2017-09-05 19:11:06 --> 
  <script type="text/javascript">/* Code removed by ScrapBook */</script> 
  <div class="float_window">
   <div class="close"></div>
   <div id="float_window"></div>
  </div> 
 

   <nav id="nav">
    <div class="page-width clearfix">
      <ul class="nav-list">
        <li class="item item-home">
          <a href="{{asset('/home/index/index')}}" class="link">首页</a>
        </li>

        @foreach($type as $k=> $v)

        <li class="item">
          <a href="{{url('home/index/onelist')}}/{{$v['value']['type_name']}}/{{$v['value']['type_id']}}" class="link">
            <div class="num"><i>887</i></div>
           
               {{$v['value']['type_name']}}
              
          </a>
          <ul class="nav-item__hover">
                @foreach($v as $kk=>$vv)
                <li>
                  
                    @if($kk != 'value')
                    <a href="{{url('home/index/twolist')}}/{{$vv['value']['type_name']}}/{{$vv['value']['type_id']}}">
                    <em>{{$vv['value']['type_name']}}<i></i></em>
                      
                    @endif  
                  </a>
                </li>
                @endforeach
           
          </ul>
        </li>
        @endforeach

        
        <li class="item item-square">
          <a href="#" class="link">广场</a>
          <div class="nav-square__hover">
            <ul>
              <li><a href="#"><i class="icon-activity"></i>活动中心</a></li>
              <li><a href="#"><i class="icon-game"></i>游戏中心</a></li>
              <li><a href="#"><i class="icon-news"></i>新闻中心</a></li>
              <li><a href="#"><i class="icon-friend"></i>画友</a></li>
              <li><a href="#"><i class="icon-tv"></i>芒果TV</a></li>
            </ul><!-- 
            <a href="#" class="activity"><img src="{{asset('home_temp/images/cont/nav-square__img.jpg')}}" alt="#"></a> -->
          </div>
        </li>
        <li class="item item-live">
          <a href="#" class="link">直播</a>
          <ul class="nav-item__hover">
            <li>
              <a href="#">
                <em>推荐主播<i></i></em>
              </a>
            </li>
            <li>
              <a href="#">
                <em>手机直播<i></i></em>
              </a>
            </li>
            <li>
              <a href="#">
                <em>绘画专区<i></i></em>
              </a>
            </li>
            <li>
              <a href="#">
                <em>唱见舞见<i></i></em>
              </a>
            </li>
            <li>
              <a href="#">
                <em>御宅文化<i></i></em>
              </a>
            </li>
            <li>
              <a href="#">
                <em>单机联机<i></i></em>
              </a>
            </li>
            <li>
              <a href="#">
                <em>网络游戏<i></i></em>
              </a>
            </li>
            <li>
              <a href="#">
                <em>电子竞技<i></i></em>
              </a>
            </li>
            <li>
              <a href="#">
                <em>手游直播<i></i></em>
              </a>
            </li>
            <li>
              <a href="#">
                <em>放映厅<i></i></em>
              </a>
            </li>
          </ul>
        </li>
        <li class="item item-room">
          <a href="#" class="link">小黑屋</a>
        </li>
      </ul>
      <div class="nav-gif"><img src="{{asset('home_temp/images/cont/nav_img.gif')}}" alt="求领养"></div>
    </div>
  </nav>


  <!-- 截取 -->
 
  <div class="b-page-body"> 
    
   <div class="main-inner"> 
    <div class="fcname"> 
     <ul class="n_num"> 
      <!-- Layer 1 --> 
      <li desc="" tid="1"><a href="{{asset('/home/index/onelist')}}/{{$type_1->type_name}}/{{$type_1->type_id}}">全部</a></li> 
      @foreach($type_2 as $k=>$v )
      <li desc="具有一定制作程度的动画或静画的二次创作视频" tid="24" class="on"><a href="{{asset('/home/index/twolist')}}/{{$v->type_name}}/{{$v->type_id}}">{{$v->type_name}}</a></li> 
      @endforeach
      <!-- Layer 1 end --> 
      
     </ul>

    </div> 
    <div class="container-body"> 
     <div class="list-custom-wrp "> 
      <div class="tag-list-wrp"> 
       <div class="b-head">
        <span class="b-head-i"></span>
        <span class="b-head-t">热门标签</span>
        <span class="b-head-s">区标签的相关内容</span> 
       </div> 
       <div style="height: 68px;" class="tag-list-cnt" id="tag_list"> 
        <ul style="margin-top: 0px;" class="tag-list">
        @foreach($label as $v)
         <li row="1" style="padding-left: 16px; padding-right: 16px;" tag-id="" title="全部标签" class="tag-item"><span ><a href="{{asset('home/index/twolist')}}/{{$title}}/{{$id}}/{{$v}}">{{$v}}</a></span></li>
         @endforeach
        </ul> 
       </div>
       <img alt="" src="https://i0.hdslb.com/bfs/sycp/tmaterial/201709/b17f7c21a4084186b0080c1b59cb9d67.png">

      
      </div> 
      <!--左--> 
      <div class="b-page-large b-f-left"> 
       <div class="vl-dyn-wrp"> 
        <div class="b-head" id="vl_dyn_hd">
         <span class="b-head-i"></span>
         <span class="b-head-t">最新动态</span> 
         <div b-stat-v="24" b-stat="tag_dyn" class="read-push">
          <span class="icon-refresh"></span>
          <span class="info" onclick="location.href=location.href" >换一换</span>
         </div>
        </div> 
        <div class="vl-dyn-cnt"> 
         <ul class="v-list" id="vl_dyn_list">
          @foreach($new_video as $v)
          
          <li>
           <div class="v" gk="undefined" sc="undefined" pl="undefined" dm="undefined" up="undefined" subtitle="undefined" lm="undefined" tg="undefined" yb="undefined">
            <a class="preview cover-preview" href="{{url('home/play/index')}}/{{$v->video_id}}" target="_blank">
             <div class="medal"></div>
             <div class="original"></div>
             <div class="border"></div><img style="opacity: 1;" loaded="loaded" src="/{{$v->video_img}}" data-img="" />
             <div class="back">
              <div></div>
             </div>
             <div class="fore">
              <span></span>
              <div class="bar">
               <div></div>
              </div>
             </div>
             <div class="x">
              <b class="x2">{{$v->video_time}}</b>
             </div></a>
            <a href="https://www.bilibili.com/video/av11546863/" target="_blank" title="【{{$v->type_name}}】【{{substr($v->created_at,5,2)}}月】{{$v->video_name}}">
             <div class="t">
              【{{substr($v->created_at,5,2)}}月】【{{$v->type_name}}】{{$v->video_name}}
             </div>
             <div class="i">
              <span><i class="b-icon b-icon-v-play"></i><em number="{{$v->video_count}}">播放:{{$v->video_count}}&nbsp;&nbsp;评论:{{$v->video_comments}}      </em></span>
              
             </div></a>
           </div><i class="watch-later" aid="11546863"></i>
           </li>
          
          @endforeach
         
          
         </ul> 
        </div> 
       </div> 
       <div class="video-list list-c"> 
        <div class="vl-hd clearfix"> 
         <div class="left"> 
          <ul class="vl-tab" id="tab_list_order"> 
           <li class="tab-i on" id="list_order_default" order="default">投稿时间排序</li> 
           <li class="tab-i" id="list_order_hot" order="hot">视频热度排序</li> 
          </ul> 
         </div> 
         <div class="right"> 
          <ul class="b-slt-tab s-origin" id="tab_list_type"> 
           <li class="tab-i on" id="all" type="all">全部</li> 
           <li class="tab-i" id="origin" type="origin">原创</li> 
          </ul> 
          <span class="s-line"></span> 
          <ul class="b-slt-tab" id="tab_list_mode"> 
           <li class="tab-i" id="mode_1" mode="1"></li> 
           <li class="tab-i on" id="mode_2" mode="2"></li> 
           <li class="tab-i" id="mode_3" mode="3"></li> 
          </ul> 
         </div> 
         <div style="display: none;" class="vl-hd-sub"> 
          <div class="selector-block"> 
           <div style="display: none;" id="select_list_order" class="b-slt">
            <span class="txt">播放数</span> 
            <div class="b-slt-arrow"></div> 
            <ul class="list"> 
             <li class="b-state-selected" selected="selected" val="hot">播放数</li> 
             <li val="review">评论数</li> 
             <li val="stow">收藏数</li> 
             <li val="promote">硬币数</li> 
             <li val="damku">弹幕数</li> 
            </ul> 
           </div> 
          </div> 
          <div class="selector-block"> 
           <div style="display: none;" id="list_tag_days" class="b-slt">
            <span class="txt">一个月</span> 
            <div class="b-slt-arrow"></div> 
            <ul class="list"> 
             <li class="" val="7">一周</li> 
             <li class="b-state-selected" selected="selected" val="30">一个月</li> 
             <li val="90">三个月</li> 
            </ul> 
           </div> 
          </div> 
          <div class="selector-block"> 
           <div style="display: none;" id="date_select" class="date-select"> 
            <span>2017-08-29 ~ 2017-09-05</span>
           </div> 
           <div id="selet_datebox_none" style="display: none;"> 
            <div class="selet-datebox"> 
             <h3>日期选择</h3> 
             <div class="inpt"> 
              <input value="2017-08-29" class="range_start" id="range_start" type="text" /> - 
              <input value="2017-09-05" class="range_end" id="range_end" type="text" /> 
              <a class="b-btn" id="range_select">确定</a> 
             </div> 
             <h4>按月份快速选择</h4> 
             <div class="sse clearfix"></div> 
            </div> 
           </div> 
          </div> 
          <span class="s-line"></span> 
         </div> 
        </div> 
        <div class="vd-list-cnt loaded">
         <ul class="vd-list l2">
          @foreach($all_video as $v)
          <li>
           <div class="l-item">
            <div class="l-l">
             <a href="{{url('home/play/index')}}/{{$v->video_id}}" target="_blank" class="preview cover-preview"><img  alt="『你的名字/AMV』只想这样来见你" loaded="loaded" src="/{{$v->video_img}}" data-img="" />
              <div class="back">
               <div></div>
              </div>
              <div class="fore">
               <span></span>
               <div class="bar">
                <div></div>
               </div>
              </div>
              <div class="x">
               <b class="x2">{{$v->video_time}}</b>
              </div></a>
             <i class="watch-later" aid="14196552"></i>
             <a href="https://www.bilibili.com/video/av14196552" target="_blank" class="title" title="『你的名字/AMV』只想这样来见你">『{{$v->video_name}}』{{substr($v->created_at,5,11)}}</a>
            </div>
            <div class="l-r">
             <div class="v-desc">
              {{$v->video_desc}}
             </div>
             <div class="v-info">
              <span class="v-info-i gk"><i class="b-icon b-icon-v-play" title="观看"></i>播放:<span class="">{{$v->video_count}}</span></span>
              <span class="v-info-i dm"><i class="b-icon b-icon-v-dm" title="弹幕"></i>评论:<span number="0">{{$v->video_comments}}</span></span>
              <span class="v-info-i sc"><i class="b-icon b-icon-v-fav" title="收藏"></i><span number="0">0</span></span>
             </div>
             <div class="up-info">
              <a class="v-author" href="https://space.bilibili.com/3510978" target="_blank" title="{{$v->admin_name}}">{{$v->admin_name}}</a>
              <span class="v-date" title="日期">{{$v->created_at}}</span>
             </div>
            </div>
           </div></li>
           @endforeach
          

         </ul>
        </div>
        <div class="pagelistbox">
           {{ $all_video->links() }}
         <div class="custom-right">
          
        
         </div>
        </div> 
       </div> 
       <script type="text/javascript">/* Code removed by ScrapBook */</script> 
      </div> 
      <!--左--> 
      <!--右--> 
      <div class="b-page-small b-f-right"> 
       <div class="b-head"> 
        <span class="b-head-t">热门</span> 
       </div> 
       <div class="rlist-wrp"> 
        <ul class="rlist loaded">
          
          @foreach($up_video1 as $k=>$v)
         <li class="on" data-yb="11426" data-txt="个人微博：http://www.weibo.com/owl1110
在做这个片子之前，没看过末日时相关的MAD和小说，本来完全不怎么知道这部番的存在，后来很多人推荐给我看，最近有空去补了一下。
确实是一部挺不错的动画，原声音乐也很好听，不过剪辑的时候怕原声带被用烂了，就用了自己更加喜欢的一首歌，泽野弘之很早以前写的s-AVE，希望大家能喜欢~
BGM：s-AVE-aimer
动画：末日时在做什么？有没有空？可以来拯救吗？
封面P站ID13155904" data-tg="2017-08-31 18:07" data-lm="MAD&middot;AMV" data-subtitle="" data-up="暗猫の祝福" data-dm="1655" data-pl="1951" data-sc="7837" data-gk="62600"><i class="number n2">{{$k+1}}</i>
          <div class="preview">
           <a href="{{url('home/play/index')}}/{{$v->video_id}}" title="【暗猫】末日时AMV「再见了，世界上最幸福的女孩。」" target="_blank"><img  src="/{{$v->video_img}}" data-img="" /></a>
           <i class="watch-later" aid="14029900"></i>
          </div><a class="rl-info" href="{{url('home/play/index')}}/{{$v->video_id}}" title="【暗猫】末日时AMV「再见了，世界上最幸福的女孩。」" target="_blank">
           <div class="title t">
            【】{{$v->video_name}} {{$v->video_desc}}
           </div>
           <div class="i">
            <b class="pts" title="综合评分：13.7万">播放次数：<em number="136618">{{$v->video_count}}</em></b>
           </div></a>
           </li>
           @endforeach 
         
          @foreach($up_video2 as $k=>$v)
         <li ><i class="number">{{$k+4}}</i>
          <div class="preview">
           <a href="{{url('home/play/index')}}/{{$v->video_id}}" title="【银魂】只要有你想要保护的东西，那就拔剑好了！" target="_blank">
           <img alt="【银魂】只要有你想要保护的东西，那就拔剑好了！" loaded="loaded" style="opacity: 1;" src="/{{$v->video_img}}" data-img="" /></a>
           <i class="watch-later" aid="14124402"></i>
          </div><a class="rl-info" href="{{url('home/play/index')}}/{{$v->video_id}}" title="【银魂】只要有你想要保护的东西，那就拔剑好了！" target="_blank">
           <div class="title t">
            【{{$v->type_name}}】{{$v->video_name}} {{$v->video_desc}}
           </div>
           <div class="i">
            <b class="pts" title="综合评分：6.8万">综合评分：<em number="67974">6.8万</em></b>
           </div></a>
           </li>
           @endforeach
         
        </ul> 
       </div> 
       <div class="mobile-link-l">
        <a href="https://app.bilibili.com/" target="_blank"></a>
       </div> 
      </div> 
      <!--右--> 
     </div> 
    </div> 
   </div> 
 
  </div> 
   <!--  尾部-->
  @endsection

