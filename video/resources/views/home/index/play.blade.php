@extends('home.layouts')


@section('content')

    <link rel="stylesheet" href="{{asset('/home_temp/play/css/jquery-ui.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('/home_temp/play/css/page-core.css') }}" type="text/css" />

    <script type="text/javascript" src="{{ asset('/home_temp/play/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/home_temp/play/js/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/home_temp/play/js/base.core.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/home_temp/play/js/seed.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('/home_temp/play/css/tag-index2.0.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/home_temp/play/css/elec.css') }}">
    <link rel="stylesheet" href="{{ asset('/home_temp/play/css/chart.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/home_temp/play/css/comment.min.css') }}">

    <!-- add by liqian -->
    <!-- 视频详情页增加一个投诉入�?番剧详情页无需增加这个入口 -->
    <link rel="stylesheet" href="{{ asset('/home_temp/play/css/appeal.css')}}" type="text/css">

    <!-- end -->

    <script type="text/javascript" src="{{ asset('/home_temp/play/js/jquery.qrcode.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/home_temp/play/js/swfobject.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/home_temp/play/js/page.arc.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/home_temp/play/js/video.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/home_temp/play/js/jquery.zclip.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/home_temp/play/js/jquery.xdomainrequest.min.js') }}"></script>
    <div class="b-page-body">


        <script>
            $('.header .num .m-i[data-tid=129]').addClass('on');
            var topid = '129';
        </script>
        <script type="text/javascript"> var token = "d41d8cd98f00b204e9800998ecf8427e"; </script>
        <div class="main-inner">
            <div id="heimu"></div>
            <div class="viewbox report-scroll-module report-wrap-module" id="viewbox_report">
                <div class="info">
                    <div class="v-title"><h1 title="【千岁】俗世呀">【千岁】俗世呀</h1></div><div class="arcrank"></div>
                    <div class="tminfo" xmlns:v="//rdf.data-vocabulary.org/#"><a href="/" rel="v:url" property="v:title">主页</a> &gt; <span typeof="v:Breadcrumb"><a href='/video/dance.html'  rel="v:url" property="v:title">舞蹈</a></span> &gt; <span typeof="v:Breadcrumb"><a href="/video/three-dimension-dance-1.html" class="on" rel="v:url" property="v:title">三次元舞蹈</a></span>
                        <time itemprop="startDate" datetime="2017-09-18T20:36"><i>2017-09-18 20:36</i></time>
                    </div>
                    <div class="v-title-info">
                        <div class="v-title-line" title="总播放数"><i class="b-icon b-icon-a b-icon-play"></i><span id="dianji"></span></div>
                        <div class="v-title-line" title="总弹幕数"><i class="b-icon b-icon-a b-icon-danmaku"></i><span id="dm_count"></span></div>
                        <div class="v-title-line v-rank" title="本日日排行数据过期后，再纳入本稿件的历史排行数据进行对比得出"><!-- 排行数据 --></div>
                        <div class="v-title-line v-coin coin_btn" title="投币个数"><i class="b-icon b-icon-a b-icon-coin"></i><span class="coin-status">硬币</span><span id="v_ctimes"></span></div>
                        <div class="v-title-line v-stow fav_btn" title="收藏人数"><i class="b-icon b-icon-a b-icon-stow"></i><span class="stow-status">收藏</span><span id="stow_count"></span></div>
                    </div>

                </div>

                <div class="upinfo">
                    <div class="u-face" id="r-info-rank"><a href="//space.bilibili.com/20827413" card="花岐千岁" mid="20827413" title="花岐千岁" target="_blank"><img data-fn-size="68" data-fn-src="http://i2.hdslb.com/bfs/face/f8f333f077cb24c61aefc952349d4fd8947b680f.jpg" src="//static.hdslb.com/images/member/noface.gif" alt="花岐千岁" /></a></div>
                    <div class="r-info">
                        <div class="usname"><a class="name" href="//space.bilibili.com/20827413" mid="20827413" card="花岐千岁" title="花岐千岁" target="_blank">花岐千岁</a><a mid="20827413" href="//message.bilibili.com/#whisper/mid20827413" target="_blank" class="message">私信</a>
                        </div>
                        <div class="sign">
                        </div>
                            <div class="up-video-message">
                                <div class="archiveCount">投稿17</div>
                                <div>粉丝6.1万</div>
                            </div>
                            <div mid="20827413" class="b-btn f hide">+ 关注</div>
                            <div class="b-btn elec hide">充电</div>

                        </div>
                    </div>

                </div>
                <div class="ad-f">
                    <div class="left ad-fl"></div>
                    <div class="right ad-fr"></div>
                </div>
            </div>

            <div class="player-wrapper">
                <div class="main-inner">
                    <div class="v-plist">
                        <div id="plist">
                            <select id='dedepagetitles' onchange='location.href=this.options[this.selectedIndex].value;'>
                                <option value='/video/av14587312/index_1.html' cid='23784771'>1、调色</option>
                                <option value='/video/av14587312/index_2.html' cid='23784774'>2、千岁 俗世 花絮1</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="scontent" id="bofqi">
                    '<div id='player_placeholder' class='player'></div><script type='text/javascript'>EmbedPlayer('player', "//static.hdslb.com/play.swf", "cid=23784771&aid=14587312&pre_ad=0");</script>
                </div>
                <div class="arc-toolbar report-scroll-module report-wrap-module" id="arc_toolbar_report">
                    <div class="share-tool-bar">
                        <div class="drawer">
                            <span class="title">分享</span><span class="num" title="分享次数"></span><span class="arrow"></span>
                            <div class="share-box" id="share_list" style="display: none;">
                                <div class="share-left">
                                    <div class="share-time">
                                        <label><input name="has_start_time" type="checkbox">开始时�?</label>
                                        <input name="video_start_time" type="text" value="0:00">
                                    </div>
                                    <div class="share-head">
                                        将视频贴到博客或论坛
                                    </div>
                                    <ul class="share-address-list">
                                        <li class="share-address"><label>视频地址</label><input id="link0" name="video_address" readonly type="text" value=""><span class="address-copy">复制</span></li>
                                        <li class="share-address"><label>Flash地址</label><input id="link1" name="flash_address" readonly type="text" value=""><span class="address-copy">复制</span></li>
                                        <li class="share-address last"><label>Html地址</label><input id="link2" name="html_address" readonly type="text" value=""><span class="address-copy">复制</span></li>
                                    </ul>
                                </div>
                                <div class="share-right">
                                    <div class="share-head">
                                    </div>
                                    <div class="share-btn" id="btn_weixin" title="扫一�?分享到微�">
                            <div class="share-weixin">
                                    <div class="qr-code" style="height: 110px;">
                                        <canvas height="110" width="110"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="share-btn-bar">
                    <div class="g-share-btn weibo" data-id="btn_weibo" title="分享到新浪微"></div>
                <div class="g-share-btn qzone" data-id="btn_qqzone" title="分享到QQ空间"></div>
                <div class="g-share-btn qq" data-id="btn_qq" title="分享到QQ"></div>
                <div class="g-share-btn tieba" data-id="btn_baidu" title="分享到百度贴"></div>
            </div>
        </div>


        <div class="block fav">
                <span class="t fav_btn" href="//www.bilibili.com/m/stow?aid=14587312">
                <i class="b-icon b-icon-a b-icon-anim-fav"></i>
                <div class="t-right">
                    <span class="t-right-top">收藏</span>
                    <span class="t-right-bottom stow_count"></span>
                </div>
            </span>
            </div>
            <div class="block coin" arctype="Original">
            <span class="t">
                <i class="b-icon b-icon-a b-icon-anim-coin"></i>
                <div class="t-right">
                    <span class="t-right-top">硬币</span>
                    <span class="t-right-bottom v_ctimes">-</span>
                </div>
            </span>
            </div>
            <div class="block watch-later" aid="14587312" title="稍后�?">
            <span class="t">
            <i class="b-icon b-icon-a b-icon-anim-watch-later"></i>
            <div class="t-right">
                    <span class="t-right-top">稍后�?</span>
                    <span class="t-right-bottom">马克一下~</span>
            </div>
            </span>
        </div>
        <div class="block app" id="app_qrcode_box" title="用手机看">
            <span class="t">
                <i class="b-icon b-icon-a b-icon-anim-app"></i>
                <div class="t-right">
                    <span class="t-right-top">用手机看</span>
                    <span class="t-right-bottom">离线看更方便</span>
                </div>
            </span>
            <div class="qr-code-box report-wrap-module" id="video-report-appdownload">
                <div class="qr-code-box-inner">
                    <div class="qr-code" id="qr_code"></div>
                    <div class="qr-info">
                        <div class="qr-info-head">【千岁】俗世呀</div>
                        <div class="qr-info-description" id="qr_description"></div>
                    </div>
                    <div class="qr-bottom">�?a href="//app.bilibili.com/" target="_blank">哔哩哔哩客户�?</a>或其他应用扫描二维码</div>
                </div>
            </div>
        </div>
        <div class="block zan">
            <span class="t">
                <i class="b-icon b-icon-a b-icon-anim-zan" title="点赞"></i>
                <div class="t-right">
                    <span class="t-right-top middle">点赞</span>
                    <span class="t-right-bottom"></span>
                </div>
            </span>
        </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript" src="{{ asset('/home_temp/play/js/online.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/home_temp/play/js/tag.index2.0.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/home_temp/play/js/elec.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/home_temp/play/js/comment.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/home_temp/play/js/chart.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/home_temp/play/js/moxie.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/home_temp/play/js/plupload.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/home_temp/play/js/appeal.js') }}"></script>
    <script src="{{ asset('/home_temp/play/js/page.count.js') }}" type="text/javascript" language="javascript"></script>
    <script type="text/javascript">
    </script>

@endsection