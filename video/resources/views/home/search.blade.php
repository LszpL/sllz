<!DOCTYPE html>
<html>
  <head>
    <script>
      window.startTime = new Date().getTime();
    </script>
    <title>{{$title}}</title>
    <meta charset="utf-8">

    <link rel="stylesheet" href="{{asset('home/searchs/css/page-core.css')}}">

    <link rel="stylesheet" href="{{asset('home/searchs/css/search-10fdccf082.css')}}">

    <!-- <link rel="shortcut icon" href="//static.hdslb.com/images/favicon.ico"> -->
    <script>
    window.rec_rp = window.rec_rp || function() {(rec_rp.q = rec_rp.q || []).push(arguments)};
    var imgLdTime = '', imgStartTime = new Date().getTime();
    var loadImgSucc = function(){
      return function(){        
        if(imgLdTime){
          imgLdTime +=',' + (new Date().getTime() - imgStartTime);
        }else{
          imgLdTime += (new Date().getTime() - imgStartTime);
        }
      }()
    }
    var loadImgErr = function(){
      return function(){        
        if(imgLdTime){
          imgLdTime += ',-1';
        }else{
          imgLdTime += '-1';
        }
      }()
    }
    </script>
    
  </head>
  <body class="report-wrap-module old-ver"    data-cur_page="1" data-num_pages="50" data-total="1000+" data-keyword="nide" data-seid="2207704946077636877" data-errcode="" data-listType="false" data-trackid_special="2207704946077636877" data-trackid="2207704946077636877">
    		<div class="z_top_container">
			<div class="z_top">
				<div class="z_header">
					<div class="z_top_nav">
						<ul>
	<li class="home">
		<a class="i-link" href="//www.bilibili.com/index.html"><span>主站</span></a>
	</li>
		<li class="hbili"><a class="i-link" href="http://h.bilibili.com/" title="画友">画友</a></li>
	<li class="b-gc" hasframe="true">
		<a class="i-link" href="//game.bilibili.com/" title="游戏中心">游戏中心</a>
		<div class="i_div game" data-frame="game"></div>
	</li>
		<li class="live" hasframe="true">
		<a class="i-link" target="_blank" href="//live.bilibili.com" title="直播">直播</a>
		<div class="i_div stream" data-frame="stream"></div>
	</li>
  <li class="b-ml"><a class="i-link" target="_blank" href="//show.bilibili.com/platform/home.html" title="会员购">会员购</a></li>
	<li class="b-zb"><a class="i-link" target="_blank" href="//bmall.bilibili.com/#!/" title="周边">周边</a></li>
  <li class="shouji">
		<a class="i-link" target="_blank" href="//app.bilibili.com" title="移动端">移动端</a>
		<div class="mobile-p-box"><div class="mobile-p-qrcode"></div></div>
	</li>
	<li class="b-mz"  hasframe="true">
	  <a class="i-link" target="_blank" href="//bangumi.bilibili.com/moe/2017/index" title="萌战">萌战</a>
		<i class="new"></i>
		<i class="dot"></i>
		<div class="i_div mz" data-frame="mz"></div>
	</li>
</ul>

					</div>
					<div class="uns_box">
	<ul class="menu">
		<li id="i_menu_profile_btn" guest="no" class="u-i i_user" i_menu="#i_menu_profile">
			<a class="i-link" href="//space.bilibili.com/" target="_blank">
				<img class="i_face">
			</a>
			<div id="i_menu_profile" class="i_menu">
				<div class="i_menu_bg_t"></div>
				<div class="info clearfix"><div class="uname"></div><div class="coin"></div></div>
				<div class="member-menu-wrp">
					<ul class="member-menu">
						<li><a href="https://account.bilibili.com/site/home" target="_blank" class="account"><i class="b-icon b-icon-p-account"></i>个人中心</a></li>
						<li><a href="//member.bilibili.com/v/#!/article" target="_blank" class="member"><i class="b-icon b-icon-p-member"></i>投稿管理</a></li>
						<li><a href="https://pay.bilibili.com/" target="_blank" class="wallet"><i class="b-icon b-icon-p-wallet"></i>B币钱包</a></li>
						<li><a href="//link.bilibili.com/p/center/index" target="_blank" class="live"><i class="b-icon b-icon-p-live"></i>直播中心</a></li>
						<li><a href="//show.bilibili.com/platform/home.html" target="_blank" class="ticket"><i class="b-icon b-icon-p-ticket"></i>会员购订单</a></li>
					</ul>
				</div>
				<div class="member-bottom">
					<a class="logout" href="https://account.bilibili.com/login?act=exit">退出</a>
				</div>
			</div>
		</li>
		<li id="i_menu_become_vip" guest="no" i_menu="become_vip" class="u-i">
			<a class="i-link" href="//big.bilibili.com/site/big.html" target="_blank">成为大会员</a>
		</li>
		<li id="i_menu_community_msg_btn" guest="no" i_menu="community_msg" class="u-i">
            <a class="i-link" href="//message.bilibili.com" target="_blank">消息</a>
        </li>
		<li id="i_menu_msg_btn" guest="no" i_menu="#dyn_wnd" class="u-i">
			<div class="num" id="dynamic_num_total"></div>
			<a class="i-link" href="//www.bilibili.com/account/dynamic" target="_blank">动态</a>
		</li>
    <li id="i_menu_watchLater_btn" guest="no" class="u-i" style="display:list-item">
      <a class="i-link" href="//www.bilibili.com/watchlater/#/list" target="_blank">稍后再看</a>
    </li>
		<li id="i_menu_fav_btn" guest="no" i_menu="#i_menu_fav" class="u-i">
			<a class="i-link" href="//space.bilibili.com/#!/favlist" target="_blank">收藏夹</a>
		</li>
		<li id="i_menu_login_reg"  class="u-i">
			<a id="i_menu_login_btn" class="i-link login" href="https://account.bilibili.com/login"><span>登录</span></a><i class="s-line"></i><a id="i_menu_register_btn" class="i-link reg" href="https://www.bilibili.com/register"><span>注册</span></a>
		</li>

		<li class="u-i b-post">
			<a class="i-link" href="//member.bilibili.com/v/video/submit.html" target="_blank">投 稿</a>
			<ul class="s-menu">
        <li class="article"><a href="//member.bilibili.com/v/#/text-apply" target="_blank"><i class="b-icon b-icon-art"></i><em>专栏投稿</em></a></li>
        <li class="music-up"><a href="//www.bilibili.com/audio/submit/" target="_blank"><i class="b-icon b-icon-music"></i><em>音频投稿</em></a></li>
				<li><a href="//member.bilibili.com/v/video/submit.html" target="_blank"><i class="b-icon b-icon-vp"></i><em>视频投稿</em></a></li>
				<li><a href="//member.bilibili.com/v/#/article" target="_blank"><i class="b-icon b-icon-vm"></i><em>投稿管理</em></a></li>
				<li><a href="//member.bilibili.com/v/" target="_blank"><i class="b-icon b-icon-vc"></i><em>创作中心</em></a></li>
			</ul>
		</li>
	</ul>
</div>

				</div>
			</div>
		</div>

      
      <div style="height:44px;" class="js-search-wrap">
      
      <div id="search-wrap">
        <div id="header-search">
          <div class="logo-input">
            <a href="//search.bilibili.com" id="logo" class="search-logo" se-linkid='s-logo'>
              <span class="ir" se-linkid='s-btn-top'>balabala | 搜索</span>
            </a>
            <form action="{{url('/home/search')}}" method="get">
            <div id="search-block">
              <i class="loupe" se-linkid='s-btn-loupe'></i>
              <div class="input-wrap">
                <input type="text" value="{{$keywords}}" id="search-keyword" name="keywords" autocomplete="off">
              </div>
      
              <div id="search-button">
                <button><i class="icon-search-white"></i>
                <span>搜索</span></button>
              </div>
            </div>
            </form>
          </div>
        </div>
      </div>
      
      </div>
      
      
      
      <div class="filter-block"> 
   <a href="javascript:;" class="fold" se-linkid="filter-bold">收起筛选&nbsp;<i class="arrow-up"></i></a> 
   <ul id="order" style="display: block;">
    <li  class="filter-item" data-val="totalrank" data-level="1.1" onclick="most(this)" id="px" data-sub="" se-linkid="order-totalrank"><a href="javascript:;"  >综合排序</a></li>
    <li class="filter-item" data-val="pubdate" data-level="1.3" onclick="most(this)" id="fb" data-sub="" se-linkid="order-pubdate"><a href="javascript:;"  >最新发布</a></li>
    <li class="filter-item" data-val="click" data-level="1.2" data-sub="" onclick="most(this)"  id="dj" se-linkid="order-click"><a href="javascript:;"   class="a">最多点击</a></li>
    
    <li class="filter-item" data-val="dm" data-level="1.4" id="pl" data-sub="" onclick="most(this)" id="pl"se-linkid="order-dm"><a href="javascript:;"  >最多评论</a></li>
    <li class="filter-item" data-val="stow" data-level="1.5" id="sc" data-sub="" onclick="most(this)" se-linkid="order-stow"
    id="sc"><a href="javascript:;"  >最多收藏</a></li>
   </ul>
   <ul id="duration" style="display: block;">
    <li class="filter-item " onclick="most(this)" id="qb" data-val="" data-level="2.1" data-sub="" se-linkid="duration-0"><a href="javascript:;" >全部时长</a></li>
    <li class="filter-item" onclick="most(this)" id="ten" data-val="1" data-level="2.2" data-sub="" se-linkid="duration-1"><a href="javascript:;" >10分钟以下</a></li>
    <li class="filter-item" onclick="most(this)" id="three" data-val="2" data-level="2.3" data-sub="" se-linkid="duration-2"><a href="javascript:;" >10-20分钟</a></li>
    <li class="filter-item" onclick="most(this)" id="six" data-val="3" data-level="2.4" data-sub="" se-linkid="duration-3"><a href="javascript:;" >20-40分钟</a></li>
    <li class="filter-item" onclick="most(this)" id="ls" data-val="4" data-level="2.5" data-sub="" se-linkid="duration-4"><a href="javascript:;" >40分钟以上</a></li>
   </ul>
   <!-- <ul id="tids_1" style="display: block;">
    <li class="filter-item active" data-val="" data-level="3.1" data-sub="tids_2" se-linkid="tids_1-0"><a href="javascript:;">全部分区</a></li>
    @foreach($video as $k=>$v)
    <li class="filter-item" data-val="1" data-level="3.2" data-sub="tids_2" se-linkid="tids_1-1"><a href="javascript:;">{{$v->type_name}}</a></li>
    @endforeach
   </ul> -->
  </div>
      

      
      
      
      
      <div class="vague-tag">
      
      </div>
    <!--  -->
    
    <div class="so-wrap" style="position:relative;">
	<div class="so-info no-num">
		<div class="switch">
			<span class="aver js-video-switch active" se-linkid='switch-matrix'>
				<i class="icon-aver "></i>
			</span>
			<span class="imgleft js-video-switch " se-linkid='switch-list'>
				<i class="icon-imgleft"></i>
			</span>
		</div>
	</div>
	 	<div class="all-other ">
				<div class="synthetical-episode">
				@foreach($data as $k=>$v)
					<li class="movie-item">
					<a href="{{url($v->video_url)}}" target="_blank" class="left-img" se-linkid="movie_img_1" lnk-type="movie" title="{{$v->video_name}}">
						<img src="{{url($v->video_img)}}"  >
						<span class="duration">{{$v->video_time}}</span>
					</a>
					<div class="right-info">
						<div class="headline">
							<a href="{{url($v->video_url)}}" target="_blank" class="title" se-linkid="movie_title_1" lnk-type="movie" title="{{$v->video_name}}">{{$v->video_name}}</a>
							<span class="screen-time">{{$v->created_at}}</span>
						</div>
						<div class="area">时间：{{$v->video_time}}</div>

						
						<div class="detail ">{{$v->video_desc}}...</div>
						<ul class="so-episode">
					
							<a  class="list mid " disabled target="_blank" se-linkid='bangumi_3_eplist_1' title='剧场版2'>
								<span class="bgm-list-title">{{$v->type_name}}</span>
							</a>
						</ul>
					</div>
				</li>
					@endforeach
					
							<div class="bangumi-more">

								
							</div>
				</div>
	</div>
	
		
</div>       
	{!! $data->appends($request)->render() !!}





    <div class="no-result" style="display:none;">
    	<p class="text">
    		
    	</p>
    </div>
    
    
    <div class="paging-wrap" style="display:none;">
    	<div class="s-paging">
    		<ul id="video-paging">
    		</ul>
    	</div>
    </div>    
    <div class="rocket-con">
      <div class="so-rocket">
        <i class="rocket-icon"></i>
      </div>      
    </div>
    <div class="footer">
	<div class="footer-wrp">
		<div class="footer-cnt clearfix">
			<ul class="boston-postcards">
				<li>
					<div class="tips">bilibili</div>
					<div class="cards"><a target="_blank" href="//www.bilibili.com/blackboard/aboutUs.html">关于我们</a></div>
					<div class="cards"><a target="_blank" href="//www.bilibili.com/blackboard/friends-links.html">友情链接</a></div>
					<div class="cards"><a target="_blank" href="//bmall.bilibili.com/#!/">哔哩哔哩周边</a></div>
					<div class="cards"><a target="_blank" href="//www.bilibili.com/blackboard/contact.html">联系我们</a></div>
					<div class="cards"><a target="_blank" href="//www.bilibili.com/blackboard/join.html">加入我们</a></div>
					<div class="cards"><a target="_blank" href="https://account.bilibili.com/site/ident.html">官方认证</a></div>
				</li>
				<li>
					<div class="tips">传送门</div>
					<div class="cards"><a target="_blank" href="//www.bilibili.com/blackboard/help.html">帮助中心</a></div>
					<div class="cards"><a target="_blank" href="//www.bilibili.com/video/av120040/">高级弹幕</a></div>
					<div class="cards"><a target="_blank" href="//www.bilibili.com/blackboard/activity_list.html">活动专题页</a></div>
					<div class="cards"><a target="_blank" href="//www.bilibili.com/blackboard/copyright.html">侵权申诉</a></div>
					<div class="cards"><a target="_blank" href="https://account.bilibili.com/answer/addq">分院帽计划</a></div>
					<div class="cards"><a target="_blank" href="//activity.bilibili.com/">活动中心</a></div>
          <div class="cards"><a target="_blank" href="http://link.acg.tv">用户反馈论坛</a></div>
					<div class="cards"><a target="_blank" href="http://h.bilibili.com/wallpaper?action=list">壁纸站</a></div>
					<div class="cards"><a target="_blank" href="http://www.bilibili.com/html/cele.html">名人堂</a></div>
				</li>
				<li>
					<div class="block right">
						<a target="_blank" href="//app.bilibili.com/">
							<div class="phone">
								<div class="pic"></div>
								<em>手机端下载</em>
								<div class="qrcode-box-wrp">
									<div class="qrcode-box qrcode-app">
										<div class="qrcode-box-arrow">
										</div>
									</div>
								</div>
							</div>
						</a>
						<a target="_blank" href="http://weibo.com/bilibiliweb">
							<div class="weibo">
								<div class="pic"></div>
								<em>新浪微博</em>
								<div class="qrcode-box-wrp">
									<div class="qrcode-box qrcode-weibo">
										<div class="qrcode-box-arrow">
										</div>
									</div>
								</div>
							</div>
						</a>
						<a id="weixin">
							<div class="weixin">
								<div class="pic"></div>
								<em>官方微信</em>
								<div class="qrcode-box-wrp bigvip-qrcode">
									<div class="qrcode-box qrcode-weixin">
										<div class="qrcode-box-arrow">
										</div>
									</div>
								</div>
							</div>
						</a>
					</div>
				</li>
			</ul>
			<div class="partner">
          <div class="block left" style="padding-top: 0px;">
              <div class="partner-banner"></div>
          </div>
          <div class="block left" style="margin: 0px 68px 0 115px;line-height:24px;float: none;">
            <p>广播电视节目制作经营许可证：<span>（沪）字第1248号 </span> | 网络文化经营许可证：<span>沪网文[2013]0480-056号</span> | 信息网络传播视听节目许可证：<span>0910417</span> | 互联网ICP备案：<span>沪ICP备13002172号-3</span> 沪ICP证：<span>沪B2-20100043</span> | 违法不良信息举报邮箱：help@bilibili.com | 违法不良信息举报电话：4000233233转3</p>
            <p><a href="http://www.shjbzx.cn" target="_blank"><i class="icons-footer icons-footer-report"></i><span> 上海互联网举报中心</span></a> | <a href="http://jb.ccm.gov.cn/" target="_blank">12318 全国文化市场举报网站</a> | <a target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=31011502001911"><img src="picture/beiantubiao.png" style="vertical-align: top;"> 沪公网安备 31011502001911号</a> | <a href="mailto:userreport@bilibili.com">儿童色情信息举报专区</a></p>
            <p><a href="http://report.12377.cn:13225/toreportinputNormal_anis.do" target="_blank">网上有害信息举报专区：<img src="picture/12377.png" width="16" height="16" style="vertical-align: sub;"> 中国互联网违法和不良信息举报中心</a></p>
          </div>
      </div>
		</div>
	</div>
</div>

    <script src="{{asset('home/searchs/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('home/searchs/js/base.core.js')}}"></script>  

    <script src="{{asset('js/search-a26e65a4a7.js')}}"></script>
    <script src="{{asset('js/bili_quick_login.js')}}" ></script>
    <!-- <script>
      // 新统计上报
      window.reportMsgObj = {}
      window.reportConfig = {
        sample : 1,
        errorTracker : false ,
        resourceTracker: false ,
        scrollTracker: false,
        msgObjects : 'reportMsgObj'
      }
      var reportScript = document.createElement('script');
      reportScript.src = "//s1.hdslb.com/bfs/static/log/report/search-log-reporter.js";
      document.getElementsByTagName('body')[0].appendChild(reportScript);
    </script> -->
    <script>
      
      // function most(obj){
      // 	// alert($);
      // 	var most=$(obj).attr('value');
      // 	var keywords=$('#search-keyword').val();
      // 	// alert(most);
      // 	var url = "{{url('/xsearch')}}"+'?most='+most;
      // 	$.post(url,{'most':most,'_token':"{{csrf_token()}}"},function(data){
      // 		// alert(keywords);
      // 		 // location.href = '/home/search?keywords='+keywords+'&most='+most;
      		 
      // 	});
      // }


      // 当点击选择分类
function most(obj){
	// alert(111);
	// 获取当前元素的id
	var id = obj.id;
	var keywords=$('#search-keyword').val();
	switch(id){
		case 'px':var most = 'px';var type = 0;break;
		case 'fb':var most = 'fb';var type = 0;break;
		case 'dj':var most = 'dj';var type = 0;break;
		case 'pl':var most = 'pl';var type = 0;break;
		case 'sc':var most = 'sc';var type = 0;break;
		default:var time = id;var type = 1;
	}

	// 判断浏览器是否携带参数
	var urlmost =  getQueryString('most');
	var urltime = getQueryString('time');
	// 判断当前type值 获取的是那个参数
	if(type == 0){
		// 如果当前选择的是性别 判断浏览器是否有类别
		if(urltime != null){
			var urltype = '&most='+most+'&time='+urltime;
		}else{
			var urltype = '&most='+most;
		}
	}else{
		// 如果选择的是类别 判断浏览器参数是否有性别
		if(urlmost != null){
			var urltype = '&most='+urlmost+'&time='+time;
		}else{
			var urltype = '&time='+time;
		}
}
	window.location.href='/home/search?keywords='+keywords+urltype;
}


// 判断浏览器参数 赋值颜色
var urlmost =  getQueryString('most');
var urltime = getQueryString('time');
	if(urlmost == null || urlmost == 0){
	$('#px').attr('class','active');
	// alert(111);
}else{
	$('#'+urlmost).addClass('active');
}

if(urltime == null || urltime == 0){
	$('#qb').addClass('active');
}else{
	$('#'+urltime).addClass('active');
}



// js获取浏览器参数
 function getQueryString(name) {
  var reg = new RegExp('(^|&)' + name + '=([^&]*)(&|$)', 'i');
  var r = window.location.search.substr(1).match(reg);
  if (r != null) {
    return unescape(r[2]);
  }
  return null;
}
    </script>
  </body>
</html>
