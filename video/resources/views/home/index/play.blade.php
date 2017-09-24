@extends('home.layouts')

@section('content')
    <link rel="stylesheet" href="{{asset('home_temp/play/css/page-core.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('home_temp/play/css/tag-index2.0.css')}}" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{asset('home_temp/play/css/comment.min.css')}}" />


    <style>
        /* Code tidied up by ScrapBook */
        .player-wrapper { position: relative; }
        .bgray-btn-wrap { position: absolute; top: 10px; left: 50%; margin-left: 490px; width: 70px; height: 200px; }
        .widescreen .bgray-btn-wrap { margin-left: 580px; }
        .bgray-btn { transition: all 0.3s ease 0s; cursor: pointer; margin: 10px 0px 10px 10px; background-color: rgb(255, 255, 255); text-align: center; padding: 7px 5px; display: block; left: 100%; font-size: 12px; line-height: 14px; width: 20px; height: 58px; border-radius: 4px; border: 1px solid rgb(229, 233, 239); color: rgb(153, 162, 170); }
        .bgray-btn:hover { color: rgb(109, 117, 122); border-color: rgb(109, 117, 122); }
        .bgray-btn { display: none; }
        .bgray-btn.show { display: block; }
        @media screen and (min-width: 1400px) {
            .bgray-btn-wrap { margin-left: 580px; }
        }
    </style>
    <style type="text/css" media="screen">
        /* Code tidied up by ScrapBook */
        /*#player_placeholder { visibility: hidden; }*/
    </style>

<div class="b-page-body">
    <div class="main-inner" style="width: 1160px;">
        <div id="heimu"></div>
        <div class="viewbox report-scroll-module report-wrap-module" id="viewbox_report">
            <div class="info">
                <div class="v-title">
                    <h1 title="【陈奕迅/浮夸】这可能是陈奕迅唱的最好的一次浮夸了吧">【陈奕迅/浮夸】这可能是陈奕迅唱的最好的一次浮夸了吧</h1>
                </div>
                <div class="arcrank"></div>
                <div class="tminfo" xmlns:v="//rdf.data-vocabulary.org/#">
                    <a href="https://www.bilibili.com/" rel="v:url" property="v:title">主页</a> &gt;
                    <span typeof="v:Breadcrumb"><a href="https://www.bilibili.com/video/music.html" rel="v:url" property="v:title">音乐</a></span> &gt;
                    <span typeof="v:Breadcrumb"><a href="https://www.bilibili.com/video/music-coordinate-1.html" class="on" rel="v:url" property="v:title">三次元音乐</a></span>
                    <time itemprop="startDate" datetime="2017-05-30T17:51"><i>2017-05-30 17:51</i></time>
                    <a class="charge-appeal-init">稿件投诉</a>
                </div>
                <div class="v-title-info" title="投硬币枚数1086">
                    <div class="v-title-line" title="总播放数133236">
                        <i class="b-icon b-icon-a b-icon-play"></i>
                        <span id="dianji">13.3万</span>
                    </div>
                    <div class="v-title-line" title="总弹幕数815">
                        <i class="b-icon b-icon-a b-icon-danmaku"></i>
                        <span id="dm_count">815</span>
                    </div>
                    <div class="v-title-line v-rank" title="本日日排行数据过期后，再纳入本稿件的历史排行数据进行对比得出">
                        <!-- 排行数据 -->
                    </div>
                    <div class="v-title-line v-coin coin_btn" title="投硬币枚数1086">
                        <i class="b-icon b-icon-a b-icon-coin" style="display: block; background-image: url({{asset('home_temp/play/images/anim-coin-small.png')}}); width: 60px; height: 60px; background-position: 0px 0px;"></i>
                        <span class="coin-status">硬币</span>
                        <span id="v_ctimes">1086</span>
                    </div>
                    <div class="v-title-line v-stow fav_btn" title="收藏人数5654">
                        <i class="b-icon b-icon-a b-icon-stow" style="display: block; background-image: url({{asset('home_temp/play/images/anim-collect.png')}}); width: 60px; height: 60px; background-position: 0px 0px;"></i>
                        <span class="stow-status">收藏</span>
                        <span id="stow_count">5654</span>
                    </div>
                </div>
            </div>
            <div class="upinfo">
                <div class="u-face" id="r-info-rank">
                    <a href="https://space.bilibili.com/34160092" card="二次元萝莉守护者" mid="34160092" title="二次元萝莉守护者" > <img src="{{asset('home_temp/play/images/d405bcf24592e2d080fdc575fa09959434abf0d5.jpg_68x68.jpg')}}" alt="二次元萝莉守护者" /> </a>
                </div>
                <div class="r-info">
                    <div class="usname">
                        <a class="name" href="https://space.bilibili.com/34160092" mid="34160092" card="二次元萝莉守护者" title="二次元萝莉守护者" >二次元萝莉守护者</a>
                        <a mid="34160092" href="https://message.bilibili.com/#whisper/mid34160092"  class="message">私信</a>
                    </div>
                    <div class="sign"></div>
                    <script type="text/javascript">/* Code removed by ScrapBook */</script>
                    <div class="up-video-message">
                        <div class="archiveCount" title="投稿数2">
                            投稿：2
                        </div>
                        <div title="粉丝数121">
                            粉丝：121
                        </div>
                    </div>
                    <div mid="34160092" class="b-btn f">
                        + 关注
                    </div>
                    <div class="b-btn elec hide">
                        充电
                    </div>
                </div>
            </div>
        </div>
        <div class="ad-f">
            <div class="left ad-fl" b-stat="arc.ad-fl" b-stat-v="http://e.cn.miaozhen.com/r/k=2036531&amp;p=74YBq&amp;dx=__IPDX__&amp;rt=2&amp;ns=__IP__&amp;ni=__IESID__&amp;v=__LOC__&amp;xa=__ADPLATFORM__&amp;mo=__OS__&amp;m0=__OPENUDID__&amp;m0a=__DUID__&amp;m1=__ANDROIDID1__&amp;m1a=__ANDROIDID__&amp;m2=__IMEI__&amp;m4=__AAID__&amp;m5=__IDFA__&amp;m6=__MAC1__&amp;m6a=__MAC__&amp;o=http://www.bilibili.com/blackboard/activity-ml0915.html" style="overflow: hidden; position: relative; height: auto; visibility: visible;">
                <a id="a_ds_51" data-id="" data-loc-id="124" href="https://cm.bilibili.com/cm/api/fees/pc/sync/v2?msg=a%7C125%2Cb%7Cbilibili%2Cc%7C1%2Cd%7C1%2Ce%7CCMUgEAAY5wkgACgAMAI4fUIeMTUwNTk1NTM1NTk1NHExNzJhMThhNjFhMTM4cTg4SLK6vI%2FqK1IJ5YyX5Lqs5biCWgnljJfkuqzluIJiBuS4reWbvWgAcAF4yAGAAQCIAbsFkgEOMTA2LjEyMS42NS4xMjGaAQdkZWZhdWx0oAEAqAEAsgEgEB8z%2FL8Q0gd8U6wd2eKv2%2BslE9TGsx6L2hmcY5ogBUK6AbECaHR0cDovL2UuY24ubWlhb3poZW4uY29tL3Ivaz0yMDM2NTMxJnA9NzRZQnEmZHg9X19JUERYX18mcnQ9MiZucz1fX0lQX18mbmk9X19JRVNJRF9fJnY9X19MT0NfXyZ4YT1fX0FEUExBVEZPUk1fXyZtbz1fX09TX18mbTA9X19PUEVOVURJRF9fJm0wYT1fX0RVSURfXyZtMT1fX0FORFJPSURJRDFfXyZtMWE9X19BTkRST0lESURfXyZtMj1fX0lNRUlfXyZtND1fX0FBSURfXyZtNT1fX0lERkFfXyZtNj1fX01BQzFfXyZtNmE9X19NQUNfXyZvPWh0dHA6Ly93d3cuYmlsaWJpbGkuY29tL2JsYWNrYm9hcmQvYWN0aXZpdHktbWwwOTE1Lmh0bWw%3D%2Cf%7Cclick_sync_3%2Cg%7C1%2Ch%7C1%2Ci%7C%2Cj%7C%2Ck%7C1505955357444%2Cl%7C124%2Cm%7C1505955355839%2Cn%7C1%2Co%7C&amp;ts=1505955357445" data-target-url="http://e.cn.miaozhen.com/r/k=2036531&amp;p=74YBq&amp;dx=__IPDX__&amp;rt=2&amp;ns=__IP__&amp;ni=__IESID__&amp;v=__LOC__&amp;xa=__ADPLATFORM__&amp;mo=__OS__&amp;m0=__OPENUDID__&amp;m0a=__DUID__&amp;m1=__ANDROIDID1__&amp;m1a=__ANDROIDID__&amp;m2=__IMEI__&amp;m4=__AAID__&amp;m5=__IDFA__&amp;m6=__MAC1__&amp;m6a=__MAC__&amp;o=http://www.bilibili.com/blackboard/activity-ml0915.html"  style="display: block; position: relative;"><img src="{{asset('home_temp/play/images/c5cf68509cc8d92c20c8c3a80c558dd2.jpg')}}" width="468" border="0" height="60" /><img img-ad="" src="{{asset('home_temp/play/images/web_banner_logo.png')}}" style="width: 32px; height: 20px; position: absolute; left: 2px; bottom: 2px;" width="468" height="60" /></a>
            </div>
            <div class="right ad-fr" b-stat="arc.ad-fr" b-stat-v="" style="overflow: hidden; position: relative; height: 1px; visibility: hidden;">
                <a id="a_ds_46" data-id="" data-loc-id="126" data-target-url=""  style="display: block; position: relative;"><img src="{{asset('home_temp/play/images/transparent.gif')}}" width="468" border="0" height="1" /></a>
            </div>
        </div>
    </div>
    <div class="player-wrapper">
        <div class="bgray-btn-wrap">
            <div class="bgray-btn">
                Flash
                <br />播放器
            </div>
            <div class="bgray-btn">
                HTML5
                <br />播放器
            </div>
            <div class="bgray-btn show">
                意见
                <br />反馈
            </div>
        </div>
        <div class="main-inner">
            <div class="v-plist">
                <div id="plist">
                </div>
            </div>
        </div>
        <div class="arc-toolbar report-scroll-module report-wrap-module" id="arc_toolbar_report">
            <div class="share-tool-bar">
                <div class="drawer">
                    <span class="title">分享</span>
                    <span class="num" title="分享人数1555">1555</span>
                    <span class="arrow"></span>
                    <div class="share-box" id="share_list" style="display: none;">
                        <div class="share-left">
                            <div class="share-time">
                                <label><input name="has_start_time" type="checkbox" />开始时间</label>
                                <input name="video_start_time" value="0:00" type="text" />
                            </div>
                            <div class="share-head">
                                将视频贴到博客或论坛
                            </div>
                            <ul class="share-address-list">
                                <li class="share-address"> <label>视频地址</label> <input id="link0" name="video_address" readonly="" value="" type="text" /> <span class="address-copy">复制</span> </li>
                                <li class="share-address"> <label>Flash地址</label> <input id="link1" name="flash_address" readonly="" value="" type="text" /> <span class="address-copy">复制</span> </li>
                                <li class="share-address last"> <label>Html地址</label> <input id="link2" name="html_address" readonly="" value="" type="text" /> <span class="address-copy">复制</span> </li>
                            </ul>
                        </div>
                        <div class="share-right">
                            <div class="share-head">
                                微信扫一扫分享
                            </div>
                            <div class="share-btn" id="btn_weixin" title="扫一扫 分享到微信">
                                <div class="share-weixin">
                                    <div class="qr-code" style="height: 110px;">
                                        <canvas width="110" height="110"></canvas>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="share-btn-bar">
                    <div class="g-share-btn weibo" data-id="btn_weibo" title="分享到新浪微博"></div>
                    <div class="g-share-btn qzone" data-id="btn_qqzone" title="分享到QQ空间"></div>
                    <div class="g-share-btn qq" data-id="btn_qq" title="分享到QQ"></div>
                    <div class="g-share-btn tieba" data-id="btn_baidu" title="分享到百度贴吧"></div>
                </div>
            </div>
            <div class="block fav">
                <span class="t fav_btn" href="//www.bilibili.com/m/stow?aid=10945180" title="收藏人数5654"> <i class="b-icon b-icon-a b-icon-anim-fav" style="display: block; background-image: url({{asset('home_temp/play/images/anim-fav.png')}}); width: 80px; height: 80px; background-position: 0px 0px;"></i>
                    <div class="t-right" title="收藏人数5654">
                        <span class="t-right-top">收藏</span>
                        <span class="t-right-bottom stow_count">5654</span>
                    </div> </span>
            </div>
            <div class="block coin" arctype="Copy" style="display: block;">
                <span class="t" title="投硬币枚数1086"> <i class="b-icon b-icon-a b-icon-anim-coin" style="display: block; background-image: url({{asset('home_temp/play/images/anim-coin-small.png')}}); width: 80px; height: 80px; background-position: 0px 0px;"></i>
                    <div class="t-right" title="投硬币枚数1086">
                        <span class="t-right-top">硬币</span>
                        <span class="t-right-bottom v_ctimes">1086</span>
                    </div> </span>
            </div>
            <div class="block watch-later" aid="10945180" title="稍后看">
                <span class="t"> <i class="b-icon b-icon-a b-icon-anim-watch-later" style="display: block; background-image: url({{asset('home_temp/play/images/anim-watch-later.png')}}); width: 80px; height: 80px; background-position: 0px 0px;"></i>
                    <div class="t-right">
                        <span class="t-right-top">稍后看</span>
                        <span class="t-right-bottom">马克一下~</span>
                    </div> </span>
            </div>
            <div class="block app initialized" id="app_qrcode_box" title="用手机看">
                <span class="t"> <i class="b-icon b-icon-a b-icon-anim-app" style="display: block; background-image: url({{asset('home_temp/play/images/anim-app.png')}}); width: 80px; height: 80px; background-position: 0px 0px;"></i>
                    <div class="t-right">
                        <span class="t-right-top">用手机看</span>
                        <span class="t-right-bottom">离线看更方便</span>
                    </div> </span>
                <div class="qr-code-box report-wrap-module" id="video-report-appdownload">
                    <div class="qr-code-box-inner">
                        <div class="qr-code" id="qr_code">
                            <canvas width="100" height="100">
                            </canvas>

                        </div>
                        <div class="qr-info">
                            <div class="qr-info-head">
                                【陈奕迅/浮夸】这可能是陈奕迅唱的最好的一次浮夸了吧
                            </div>
                            <div class="qr-info-description" id="qr_description"></div>
                        </div>
                        <div class="qr-bottom">
                            用
                            <a href="https://app.bilibili.com/" >哔哩哔哩客户端</a>或其他应用扫描二维码
                        </div>
                    </div>
                </div>
            </div>
            <div class="block zan">
                <span class="t"> <i class="b-icon b-icon-a b-icon-anim-zan" title="点赞"></i>
                    <div class="t-right">
                        <span class="t-right-top middle">点赞</span>
                        <span class="t-right-bottom"></span>
                    </div> </span>
            </div>
        </div>
    </div>
    <div class="main-inner" style="width: 1160px;">
        <div class="v_small">
            <div class="v-live-recommend">
                <div class="b-head">
                    <span class="b-head-t">大家围观的直播</span>
                </div>
                <ul class="v-list-live">
                    <li>
                        <div class="lv-item">
                            <a class="lv-preview" href="https://live.bilibili.com/1313082"  title="拥有嗜睡症的人怎么可能睡的醒"> <img data-img="" src="{{asset('home_temp/play/images/e2c16cb81703066af2f97a5e30fa93355a1d3915.jpg')}}" loaded="loaded" alt="拥有嗜睡症的人怎么可能睡的醒" style="opacity: 1;" />
                                <div class="lv-mask"></div>
                                <div class="b-icon-live-play">
                                    <i class="lv-onair-dot"></i>
                                    <span class="lv-onair-txt">LIVE</span>
                                </div> </a>
                            <a href="https://live.bilibili.com/1313082" >
                                <div class="lv-room">
                                    <div class="lv-face">
                                        <img data-img="" src="{{asset('home_temp/play/images/9c39b46bd02f75bb15fcd18d264785cef61c81a7.jpg')}}" loaded="loaded" style="opacity: 1;" />
                                    </div>
                                    <div class="lv-t" title="拥有嗜睡症的人怎么可能睡的醒">
                                        拥有嗜睡症的人怎么可能睡的醒
                                    </div>
                                </div>
                                <div class="lv-info">
                                    <div class="lv-host" title="倾城家主">
                                        <i class="b-icon b-icon-live-host"></i>倾城家主
                                    </div>
                                    <div class="lv-online">
                                        <i class="b-icon b-icon-live-online"></i>1.2万
                                    </div>
                                </div>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="v_large" style="width: 870px;">
            <div class="v_info">
                <div class="s_tag report-scroll-module report-wrap-module" id="tag_report">
                    <ul class="tag-area clearfix">
                        <li class="tag" data-index="4" data-tagid="25885"> <a href="https://search.bilibili.com/all?keyword=%E9%99%88%E5%A5%95%E8%BF%85&amp;from_source=video_tag" >陈奕迅</a> </li>
                        <li class="tag" data-index="3" data-tagid="499"> <a href="https://search.bilibili.com/all?keyword=%E9%9F%B3%E4%B9%90&amp;from_source=video_tag" >音乐</a> </li>
                        <li class="tag" data-index="2" data-tagid="25886"> <a href="https://search.bilibili.com/all?keyword=%E6%B5%AE%E5%A4%B8&amp;from_source=video_tag" >浮夸</a> </li>
                        <li class="tag" data-index="1" data-tagid="1794"> <a href="https://search.bilibili.com/all?keyword=%E6%BC%94%E5%94%B1%E4%BC%9A&amp;from_source=video_tag" >演唱会</a> </li>
                        <li class="tag" data-index="0" data-tagid="38511"> <a href="https://search.bilibili.com/all?keyword=%E5%AE%8C%E7%BE%8E%E6%BC%94%E7%BB%8E&amp;from_source=video_tag" >完美演绎</a> </li>
                        <div class="nothing" style="display: none;">
                            快来成为第一个添加标签的人吧~
                        </div>
                        <a class="btn-add"><span class="one"></span><span class="two"></span></a>
                        <div class="ipt">
                            <input placeholder="按回车键完成输入" type="text" />
                            <a class="btn-close"></a>
                            <div class="tips">
                                标签字数超出限制
                            </div>
                        </div>
                    </ul>
                    <span id="newtag"></span>
                    <div class="btn-view-tag">
                        <a class="btn-view-mod" href="https://www.bilibili.com/taglog#aid=10945180&amp;title=%E3%80%90%E9%99%88%E5%A5%95%E8%BF%85/%E6%B5%AE%E5%A4%B8%E3%80%91%E8%BF%99%E5%8F%AF%E8%83%BD%E6%98%AF%E9%99%88%E5%A5%95%E8%BF%85%E5%94%B1%E7%9A%84%E6%9C%80%E5%A5%BD%E7%9A%84%E4%B8%80%E6%AC%A1%E6%B5%AE%E5%A4%B8%E4%BA%86%E5%90%A7" >查看标签修改记录</a>
                        <span>|</span>
                        <a class="btn-view-user" href="https://www.bilibili.com/html/help.html#s" >查看标签使用说明</a>
                    </div>
                </div>
                <div class="intro">
                    <div class="v_desc report-scroll-module report-wrap-module" id="v_desc" data-desc="0">陈奕迅2010年DUO演唱会时唱的浮夸，那时的歇斯底里完美演绎了这首《浮夸》。<br>陈奕迅2010年DUO演唱会完整高清视频：<a href="http://acg.tv/av2585075" class="arcinfo_link" >av2585075<img _src="http://info.acg.tv/av2585075" /></a>
                    </div>
                </div>
            </div>
            <div class="v-content">
                <div class="ad ad-e1" b-stat="arc.ad-e1" b-stat-v="" style="overflow: hidden; position: relative; height: 1px; visibility: hidden; display: block;">
                    <a id="a_ds_3" data-id="" data-loc-id="130" data-target-url=""  style="display: block; position: relative;"> <img src="{{asset('home_temp/play/images/transparent.gif')}}" width="870" border="0" height="1" /> </a>
                </div>
                <div class="ad ad-e2"></div>
            </div>
            <!--评论-->
            <div class="recommend-area report-scroll-module" id="recommend_report">
                <div class="b-head">
                    <span class="b-head-t">看过该视频的还喜欢</span>
                </div>
                <div class="rm-list-wrp">
                    <ul class="rm-list" style="width: 3520px;">
                        <li>
                            <div class="v">
                                <a class="preview" href="https://www.bilibili.com/video/av12873848/"  title="陈奕迅【十年】全程走音，真的没一个字在调上【当MV去掉BGM后之十年】">
                                    <div class="medal"></div>
                                    <div class="original"></div>
                                    <div class="border"></div> <img data-img="" src="{{asset('home_temp/play/images/2fbb63f83b4141f13c71d01578f64e121df1ef5e.jpg')}}" loaded="loaded" alt="陈奕迅【十年】全程走音，真的没一个字在调上【当MV去掉BGM后之十年】" style="opacity: 1;" /> </a>
                                <i class="watch-later" aid="12873848"></i>
                                <a href="https://www.bilibili.com/video/av12873848/"  title="陈奕迅【十年】全程走音，真的没一个字在调上【当MV去掉BGM后之十年】">
                                    <div class="t">
                                        陈奕迅【十年】全程走音，真的没一个字在调上【当MV去掉BGM后之十年】
                                    </div>
                                    <div class="i">
                                        <span><i class="b-icon b-icon-v-play"></i>7.9万</span>
                                        <span><i class="b-icon b-icon-v-dm"></i>387</span>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="v">
                                <a class="preview" href="https://www.bilibili.com/video/av12860575/"  title="笑死我了，超级歌声模仿秀一个比一个像！">
                                    <div class="medal">
                                    </div>
                                    <div class="original"></div>
                                    <div class="border"></div> <img data-img="" src="{{asset('home_temp/play/images/fcaf455133e8782430de4af1276e7dd50d6df90a.jpg')}}" loaded="loaded" alt="笑死我了，超级歌声模仿秀一个比一个像！" style="opacity: 1;" /> </a>
                                <i class="watch-later" aid="12860575"></i>
                                <a href="https://www.bilibili.com/video/av12860575/"  title="笑死我了，超级歌声模仿秀一个比一个像！">
                                    <div class="t">
                                        笑死我了，超级歌声模仿秀一个比一个像！
                                    </div>
                                    <div class="i">
                                        <span><i class="b-icon b-icon-v-play"></i>1.6万</span>
                                        <span><i class="b-icon b-icon-v-dm"></i>133</span>
                                    </div> </a>
                            </div> </li>
                        <li>
                            <div class="v">
                                <a class="preview" href="https://www.bilibili.com/video/av4443282/"  title="盘点那些哭的一塌糊涂的演唱会现场">
                                    <div class="medal"></div>
                                    <div class="original"></div>
                                    <div class="border"></div> <img data-img="" src="{{asset('home_temp/play/images/048d63d2cc04db3c401a7544af44608384249a1c.jpg')}}" loaded="loaded" alt="盘点那些哭的一塌糊涂的演唱会现场" style="opacity: 1;" /> </a>
                                <i class="watch-later" aid="4443282"></i>
                                <a href="https://www.bilibili.com/video/av4443282/"  title="盘点那些哭的一塌糊涂的演唱会现场">
                                    <div class="t">
                                        盘点那些哭的一塌糊涂的演唱会现场
                                    </div>
                                    <div class="i">
                                        <span><i class="b-icon b-icon-v-play"></i>26.8万</span>
                                        <span><i class="b-icon b-icon-v-dm"></i>8194</span>
                                    </div> </a>
                            </div> </li>
                        <li>
                            <div class="v">
                                <a class="preview" href="https://www.bilibili.com/video/av788591/"  title="豆瓣音乐评分9.9！我是哭着听完的">
                                    <div class="medal"></div>
                                    <div class="original"></div>
                                    <div class="border"></div> <img data-img="" src="{{asset('home_temp/play/images/60dc222ef56dd337715fbfe6354d43990911d7c6.jpg')}}" loaded="loaded" alt="豆瓣音乐评分9.9！我是哭着听完的" style="opacity: 1;" /> </a>
                                <i class="watch-later" aid="788591"></i>
                                <a href="https://www.bilibili.com/video/av788591/"  title="豆瓣音乐评分9.9！我是哭着听完的">
                                    <div class="t">
                                        豆瓣音乐评分9.9！我是哭着听完的
                                    </div>
                                    <div class="i">
                                        <span><i class="b-icon b-icon-v-play"></i>171.4万</span>
                                        <span><i class="b-icon b-icon-v-dm"></i>2.4万</span>
                                    </div> </a>
                            </div> </li>
                        <li>
                            <div class="v">
                                <a class="preview" href="https://www.bilibili.com/video/av11612902/"  title="【田馥甄】《痒》把导师都唱酥掉了 听完好痒~">
                                    <div class="medal"></div>
                                    <div class="original"></div>
                                    <div class="border"></div> <img data-img="" src="{{asset('home_temp/play/images/31c5d2e96fa14e839679f6fbafe7dfc2eda8fea6.jpg')}}" loaded="loaded" alt="【田馥甄】《痒》把导师都唱酥掉了 听完好痒~" style="opacity: 1;" /> </a>
                                <i class="watch-later" aid="11612902"></i>
                                <a href="https://www.bilibili.com/video/av11612902/"  title="【田馥甄】《痒》把导师都唱酥掉了 听完好痒~">
                                    <div class="t">【田馥甄】《痒》把导师都唱酥掉了 听完好痒~</div>
                                    <div class="i">
                                        <span><i class="b-icon b-icon-v-play"></i>17.3万</span>
                                        <span><i class="b-icon b-icon-v-dm"></i>658</span>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="v">
                                <a class="preview" href="https://www.bilibili.com/video/av14218245/"  title="新歌声差点就就剩三位导师 陈奕迅竟被那英淘汰？">
                                    <div class="medal"></div>
                                    <div class="original"></div>
                                    <div class="border"></div> <img data-img="" src="{{asset('home_temp/play/images/3a9cd1382faaf35771ec419cdc9a67d8403b99d3.jpg')}}" loaded="loaded" alt="新歌声差点就就剩三位导师 陈奕迅竟被那英淘汰？" style="opacity: 1;" /> </a>
                                <i class="watch-later" aid="14218245"></i>
                                <a href="https://www.bilibili.com/video/av14218245/"  title="新歌声差点就就剩三位导师 陈奕迅竟被那英淘汰？">
                                    <div class="t">
                                        新歌声差点就就剩三位导师 陈奕迅竟被那英淘汰？
                                    </div>
                                    <div class="i">
                                        <span><i class="b-icon b-icon-v-play"></i>3.6万</span>
                                        <span><i class="b-icon b-icon-v-dm"></i>60</span>
                                    </div> </a>
                            </div> </li>
                        <li>
                            <div class="v">
                                <a class="preview" href="https://www.bilibili.com/video/av11493851/"  title="陈奕迅Eason - 浮夸  唱哭韩国粉丝 1440P 超清HD">
                                    <div class="medal"></div>
                                    <div class="original"></div>
                                    <div class="border"></div> <img data-img="" src="{{asset('home_temp/play/images/e28e0c3c589bb2fe843afdc5bb6324e7b596b444.jpg')}}" loaded="loaded" alt="陈奕迅Eason - 浮夸  唱哭韩国粉丝 1440P 超清HD" style="opacity: 1;" /> </a>
                                <i class="watch-later" aid="11493851"></i>
                                <a href="https://www.bilibili.com/video/av11493851/"  title="陈奕迅Eason - 浮夸  唱哭韩国粉丝 1440P 超清HD">
                                    <div class="t">
                                        陈奕迅Eason - 浮夸 唱哭韩国粉丝 1440P 超清HD
                                    </div>
                                    <div class="i">
                                        <span><i class="b-icon b-icon-v-play"></i>27.8万</span>
                                        <span><i class="b-icon b-icon-v-dm"></i>1562</span>
                                    </div> </a>
                            </div> </li>
                        <li>
                            <div class="v">
                                <a class="preview" href="https://www.bilibili.com/video/av14125205/"  title="全开麦燃炸了！！现场吞cd！！全程高能还有香槟！实力服气！！！">
                                    <div class="medal"></div>
                                    <div class="original"></div>
                                    <div class="border"></div> <img data-img="" src="{{asset('home_temp/play/images/6328d05b2535462b17e65aeb9a2ac17f8ab3ccf1.jpg')}}" loaded="loaded" alt="全开麦燃炸了！！现场吞cd！！全程高能还有香槟！实力服气！！！" style="opacity: 1;" /> </a>
                                <i class="watch-later" aid="14125205"></i>
                                <a href="https://www.bilibili.com/video/av14125205/"  title="全开麦燃炸了！！现场吞cd！！全程高能还有香槟！实力服气！！！">
                                    <div class="t">
                                        全开麦燃炸了！！现场吞cd！！全程高能还有香槟！实力服气！！！
                                    </div>
                                    <div class="i">
                                        <span><i class="b-icon b-icon-v-play"></i>7.5万</span>
                                        <span><i class="b-icon b-icon-v-dm"></i>638</span>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="v">
                                <a class="preview" href="https://www.bilibili.com/video/av2556035/"  title=" 这么多年，第一次听懂陈奕迅的《你的背包》">
                                    <div class="medal"></div>
                                    <div class="original"></div>
                                    <div class="border"></div> <img data-img="" src="{{asset('home_temp/play/images/a367f3086cc482de522136c7cfba0572ab4a6164.jpg')}}" loaded="loaded" alt=" 这么多年，第一次听懂陈奕迅的《你的背包》" style="opacity: 1;" /> </a>
                                <i class="watch-later" aid="2556035"></i>
                                <a href="https://www.bilibili.com/video/av2556035/"  title=" 这么多年，第一次听懂陈奕迅的《你的背包》">
                                    <div class="t">
                                        这么多年，第一次听懂陈奕迅的《你的背包》
                                    </div>
                                    <div class="i">
                                        <span><i class="b-icon b-icon-v-play"></i>10.9万</span>
                                        <span><i class="b-icon b-icon-v-dm"></i>775</span>
                                    </div> </a>
                            </div> </li>
                    </ul>
                    <div class="page next no-select">
                        <span class="icon"></span>
                    </div>
                    <div class="page prev no-select" style="display: none;">
                        <span class="icon"></span>
                    </div>
                </div>
            </div>
            <div class="common report-scroll-module report-wrap-module" id="common_report">
                <div class="b-head">
                    <span class="b-head-t results" style="display: inline;">{{$num}}</span>
                    <span class="b-head-t">评论</span>
                </div>
                <div class="comm" id="bbComment" style="position: relative;">
                    <div class="bb-comment ">
                        <div class="reply-notice"></div>
                        <div class="comment-header clearfix">
                            <div class="tabs-order">
                                <ul class="clearfix">
                                    <li class="on" data-sort="0">全部评论</li>
                                </ul>
                            </div>
                        </div>
                        @if(empty(session('user')))
                            <div class="comment-send no_login">
                        @else
                            <div class="comment-send">
                        @endif
                            <div class="user-face">
                                @if(empty(session('user')))
                                    <img class="user-head" src="/uploads/default.jpg" />
                                @else
                                    <img class="user-head" src="/uploads/{{session('user')->face}}" />
                                @endif
                            </div>
                            <div class="textarea-container">
                                <div class="baffle">请先<a class="b-btn btn-open-mini-Login">登录</a>后发表评论 (・ω・)</div>
                                <i class="ipt-arrow"></i>
                                <textarea cols="80" name="msg" rows="5" placeholder="请自觉遵守互联网相关的政策法规，严禁发布色情、暴力、反动的言论。" class="ipt-txt"></textarea>
                                <button class="comment-submit">发表评论</button>
                            </div>
                            <div class="comment-emoji">
                                <i class="face"></i>
                                <span class="text">表情</span>
                            </div>
                        </div>
                        <div class="comment-list">
                            @if($one !== 1)
                            @foreach($one as $item)
                            <div class="list-item reply-wrap " data-id="274921321" data-index="{{$item->comments_id}}">
                                <div class="user-face" data-usercard-mid="2658385">
                                    <a href="javascrypt:;" ><img src="/uploads/{{$item->users_face}}" alt="" /></a>
                                </div>
                                <div class="con">
                                    <div class="user">
                                        <a data-usercard-mid="2658385" href="javascrypt:;"  class="name ">{{$item->users_name}}</a>
                                    </div>
                                    <p class="text">{{$item->comment}}</p>
                                    <div class="info">
                                        <span class="floor"></span>
                                        <span class="plad">&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                        <span class="time">{{$item->comment_time}}</span>
                                        <span class="reply btn-hover btn-highlight">回复</span>
                                    </div>
                                    <div class="reply-box">
                                        @foreach($two as $items)
                                            @if($items->pid == $item->comments_id)
                                        <div class="reply-item reply-wrap" data-id="275050462" data-index="{{$items->comments_id}}">
                                            <a href="javascrypt:;" data-usercard-mid="41384804"  class="reply-face"><img src="/uploads/{{$items->users_face}}" alt="" /></a>
                                            <div class="reply-con">
                                                <div class="user">
                                                    <a href="javascrypt:;"  data-usercard-mid="41384804" class="name">{{$items->users_name}}</a>
                                                    <span class="text-con">{{$items->comment}}</span>
                                                </div>
                                                <div class="info">
                                                    <span class="time">{{$items->comment_time}}</span>
                                                </div>
                                            </div>
                                        </div>
                                            @endif
                                        @endforeach
                                    </div>
                                    <div class="paging-box"></div>
                                </div>
                            </div>
                            @endforeach
                            @else
                                <div class="no-more-reply">没有更多信息</div>
                            @endif
                        </div>
                    </div>
                    <div class="emoji-box" style="display: none;left: 86px; top: 176.8px;">
                        <div class="emoji-title">
                            <span>颜文字</span>
                        </div>
                        <div class="emoji-wrap">
                            <a class="emoji-list emoji-text" data-emoji-text="(⌒▽⌒)">(⌒▽⌒)</a>
                            <a class="emoji-list emoji-text" data-emoji-text="（￣▽￣）">（￣▽￣）</a>
                            <a class="emoji-list emoji-text" data-emoji-text="(=・ω・=)">(=・ω・=)</a>
                            <a class="emoji-list emoji-text" data-emoji-text="(｀・ω・&acute;)">(｀・ω・&acute;)</a>
                            <a class="emoji-list emoji-text" data-emoji-text="(〜￣△￣)〜">(〜￣△￣)〜</a>
                            <a class="emoji-list emoji-text" data-emoji-text="(･∀･)">(･∀･)</a>
                            <a class="emoji-list emoji-text" data-emoji-text="(&deg;∀&deg;)ﾉ">(&deg;∀&deg;)ﾉ</a>
                            <a class="emoji-list emoji-text" data-emoji-text="(￣3￣)">(￣3￣)</a>
                            <a class="emoji-list emoji-text" data-emoji-text="╮(￣▽￣)╭">╮(￣▽￣)╭</a>
                            <a class="emoji-list emoji-text" data-emoji-text="( &acute;_ゝ｀)">( &acute;_ゝ｀)</a>
                            <a class="emoji-list emoji-text" data-emoji-text="←_←">←_←</a>
                            <a class="emoji-list emoji-text" data-emoji-text="→_→">→_→</a>
                            <a class="emoji-list emoji-text" data-emoji-text="(&lt;_&lt;)">(&lt;_&lt;)</a>
                            <a class="emoji-list emoji-text" data-emoji-text="(&gt;_&gt;)">(&gt;_&gt;)</a>
                            <a class="emoji-list emoji-text" data-emoji-text="(;&not;_&not;)">(;&not;_&not;)</a>
                            <a class="emoji-list emoji-text" data-emoji-text="(&quot;▔□▔)/">(&quot;▔□▔)/</a>
                            <a class="emoji-list emoji-text" data-emoji-text="(ﾟДﾟ≡ﾟдﾟ)!?">(ﾟДﾟ≡ﾟдﾟ)!?</a>
                            <a class="emoji-list emoji-text" data-emoji-text="Σ(ﾟдﾟ;)">Σ(ﾟдﾟ;)</a>
                            <a class="emoji-list emoji-text" data-emoji-text="Σ( ￣□￣||)">Σ( ￣□￣||)</a>
                            <a class="emoji-list emoji-text" data-emoji-text="(&acute;；ω；`)">(&acute;；ω；`)</a>
                            <a class="emoji-list emoji-text" data-emoji-text="（/TДT)/">（/TДT)/</a>
                            <a class="emoji-list emoji-text" data-emoji-text="(^・ω・^ )">(^・ω・^ )</a>
                            <a class="emoji-list emoji-text" data-emoji-text="(｡･ω･｡)">(｡･ω･｡)</a>
                            <a class="emoji-list emoji-text" data-emoji-text="(●￣(ｴ)￣●)">(●￣(ｴ)￣●)</a>
                            <a class="emoji-list emoji-text" data-emoji-text="ε=ε=(ノ≧∇≦)ノ">ε=ε=(ノ≧∇≦)ノ</a>
                            <a class="emoji-list emoji-text" data-emoji-text="(&acute;･_･`)">(&acute;･_･`)</a>
                            <a class="emoji-list emoji-text" data-emoji-text="(-_-#)">(-_-#)</a>
                            <a class="emoji-list emoji-text" data-emoji-text="（￣へ￣）">（￣へ￣）</a>
                            <a class="emoji-list emoji-text" data-emoji-text="(￣ε(#￣) Σ">(￣ε(#￣) Σ</a>
                            <a class="emoji-list emoji-text" data-emoji-text="ヽ(`Д&acute;)ﾉ">ヽ(`Д&acute;)ﾉ</a>
                            <a class="emoji-list emoji-text" data-emoji-text="(╯&deg;口&deg;)╯(┴—┴">(╯&deg;口&deg;)╯(┴—┴</a>
                            <a class="emoji-list emoji-text" data-emoji-text="（#-_-)┯━┯">（#-_-)┯━┯</a>
                            <a class="emoji-list emoji-text" data-emoji-text="_(:3」∠)_">_(:3」∠)_</a>
                            <a class="emoji-list emoji-text" data-emoji-text="(笑)">(笑)</a>
                            <a class="emoji-list emoji-text" data-emoji-text="(汗)">(汗)</a>
                            <a class="emoji-list emoji-text" data-emoji-text="(泣)">(泣)</a>
                            <a class="emoji-list emoji-text" data-emoji-text="(苦笑)">(苦笑)</a>
                        </div>
                        <div class="emoji-tabs">
                            <div class="emoji-container">
                                <div class="emoji-tab-wrap clearfix" style="width: 46px; left: 0px;">
                                    <a class="tab-link on" data-index="0"><img src="{{asset('home_temp/play/images/emoji-tab-default.png')}}" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div itemprop="video" itemscope="" itemtype="//schema.org/VideoObject" style="display: none;">
            <meta itemprop="name" property="media:title" content="【陈奕迅/浮夸】这可能是陈奕迅唱的最好的一次浮夸了吧" />
            <span property="media:type" content="application/x-shockwave-flash">
                <meta itemprop="duration" content="T4M37S" />
                <meta itemprop="thumbnailUrl" rel="media:thumbnail" content="http://i1.hdslb.com/bfs/archive/86fa18e6c15c47b64d3aa0011e9392e787ba8824.jpg" />
                <meta itemprop="embedURL" content="//static.hdslb.com/miniloader.swf?aid=10945180&amp;page=1" />
                <meta itemprop="uploadDate" content="2017-05-30T17:51" /> </span>
        </div>
    </div>
</div>
    <!-- 评论模板 -->
    <div id="comment" class="comment-list" style="display: none;">
        <div class="list-item reply-wrap " data-id="274921321" data-index="">
            <div class="user-face" data-usercard-mid="2658385">
                @if(session('user'))
                    <a href="javascrypt:;" ><img src="/uploads/{{session('user')->face}}" alt="" /></a>
                @else
                    <a href="javascrypt:;" ><img src="/uploads/default.jpg" alt="" /></a>
                @endif
            </div>
            <div class="con ">
                <div class="user">
                    <a data-usercard-mid="2658385" href="javascrypt:;"  class="name"></a>
                </div>
                <p class="text"></p>
                <div class="info">
                    <span class="floor"></span>
                    <span class="plad"><a href="" >&nbsp;&nbsp;&nbsp;&nbsp;</a></span>
                    <span class="time"></span>
                    <span class="reply btn-hover btn-highlight"></span>
                </div>
                <div class="paging-box"></div>
            </div>
        </div>
    </div>
    <!-- 输入框模板 -->
    <div id="textarea" class="comment-send" style="display: none;">
        <div class="user-face">
            @if(empty(session('user')))
                <img class="user-head" src="/uploads/default.jpg}}" />
            @else
                <img class="user-head" src="/uploads/{{session('user')->face}}" />
            @endif
        </div>
        <div class="textarea-container">
            <i class="ipt-arrow"></i>
            <textarea cols="80" name="msg" rows="5" placeholder="请自觉遵守互联网相关的政策法规，严禁发布色情、暴力、反动的言论。" class="ipt-txt"></textarea>
            <button class="comment-submit">发表评论</button>
        </div>
    </div>
    <!-- 回复模板 -->
    <div id="reply" class="reply-item reply-wrap" data-id="275050462" data-index="" style="display: none">
        <a href="javascrypt:;" data-usercard-mid="41384804"  class="reply-face"><img src="" alt="" /></a>
        <div class="reply-con">
            <div class="user">
                <a href="javascrypt:;"  data-usercard-mid="41384804" class="name "></a>
                <span class="text-con"></span>
            </div>
            <div class="info">
                <span class="time"></span>
            </div>
        </div>
    </div>
@endsection


@section('js')
        <script>
            var flag =1;
            var rel = 1;
            // 表情框弹出与收起
            $(".comment-emoji").on('click',function () {
//                alert(11);
                if(flag == 1){
                    $(".emoji-box").css('display','block');
                    flag = 0;
                }else{
                    $(".emoji-box").css('display','none');
                    flag = 1;
                }

            });
            // 表情追加到文本框
            $(".emoji-text").on('click',function () {
                var str = $(".ipt-txt").val();
                $(".ipt-txt").val(str+$(this).text());
                $(".emoji-box").css('display','none');
            });

                var id = {{$video_id}};
                // 发表一级评论
                $(".comment-submit").on('click',function () {
                    var msg = $("textarea").val();
                    if(msg == ''){
                        $("textarea").attr({'placeholder':'评论内容不能为空哦(⌒▽⌒)'});
                    } else{
                        // 发送评论内容
                        $.ajax({
                            type:'post',
                            url:'/home/play/comment',
                            data:{comment:msg,video_id:id,_token:'{{csrf_token()}}'},
                            success:function(data){
//                            alert($(".ipt-txt").val());
//                        console.log(data);
                                if(data !== 1){
                                    var str = $("#comment").clone();
                                    str.css('display','block');
                                    $(".comment-list").children().first().before(str);
                                    str.children("div.list-item").attr('data-index',data.comments_id);
                                    str.children("div.user").children().first("a").html(data.users_name);
//                                str.children("p.text").html($(".ipt-txt").val());
                                    str.children("div.list-item").children("div.con").children("p.text").html($(".ipt-txt").val());
                                    str.children("div.list-item").children("div.con").children("div.info").children("span.time").html(data.comment_time);
                                    $("textarea").val('');
                                }else{
                                    layer.msg('评论失败');
                                }
                            },
                            dataType:'json'
                        });
                    }
                });
                // 回复单击事件
                var inp = $("#textarea").clone();
                $(".btn-highlight").on('click',function () {
                    var pid = $(this).parent("div.info").parent("div.con").parent("div.list-item").attr('data-index')
                    if(rel == 1){
                        var n = parseInt(10*Math.random());
                        inp.attr("id","reply-"+n);
                        $(this).parent("div.info").siblings("div.reply-box").before(inp);
                        inp.attr("style","display:block");
                        // 单击回复发送ajax
                        inp.children("div.textarea-container").children("button").on('click',function () {

                            var reply = inp.children("div.textarea-container").children("textarea").val();
                            var m = parseInt(10*Math.random());
//                       alert(reply);
                            if($("#reply-"+n+" textarea").val() == ''){
                                $("#reply-"+n+" textarea").attr({'placeholder':'评论内容不能为空哦(⌒▽⌒)'});
                            } else {
                                // 发送回复数据
                                $.ajax({
                                    type: 'post',
                                    url: '/home/play/reply',
                                    data: {comment: reply, pid: pid, video_id: id, _token: '{{csrf_token()}}'},
                                    success: function (data) {
//                                console.log(data);
                                        if (data !== 1) {
                                            var lab = $("#reply").clone();
                                            lab.attr("id", "reply-" + m);
                                            lab.css('display', 'block');
                                            inp.next().prepend(lab);
                                            lab.attr('data-index', data.comments_id);
                                            $("#reply-" + m + " img").attr('src', '/uploads/' + data.users_face);
                                            $("#reply-" + m + " .name").html(data.users_name);
                                            $("#reply-" + m + " .text-con").html(data.comment);
                                            $("#reply-" + m + " .time").html(data.comment_time);
                                            $("#reply-"+n+" textarea").val('');
                                            $("#reply-"+n).remove();

                                        } else {
                                            layer.msg('回复失败');
                                        }
                                    },
                                    dataType: 'json'
                                });
                            }
                        });
                        rel = 0;
                    }else{
                        inp.remove();
                        rel = 1;
                    }





                });



        </script>
        <script src="{{asset('layer/layer.js')}}"></script>
@endsection