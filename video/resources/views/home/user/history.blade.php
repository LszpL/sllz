@extends('home.layouts')

@section('content')

    <div id="app">
        <div class="history-wrap">
            <div class="newlist_info">
                <div class="b-head clearfix">
                    <div class="b-head-c">
                        <i class="b-icon b-icon-history"></i>
                        <span class="b-head-t">播放历史</span>
                    </div>
                    <div class="history-btn">
                        <a href="#" class="btn">暂停记录历史</a>
                        <a href="#" class="btn cleanhsbtn">清空历史</a>
                    </div>
                </div>
            </div>
            <div style="display: none;">
                <div class="warn">
                    <p class="txt">历史功能暂停中，就算看不可描述的视频也不会被记录下来了</p>
                    <a href="#" class="btn">继续记录历史</a>
                </div>
            </div>
            <div class="list-contain" style="position:relative">
                <div class="label-contain" style="display: none;">
                    <div class="time-label todaylabel active" style="position: absolute; top: 18px; bottom: inherit;"> 今天 </div>
                    <div class="time-label lastdaylabel" style="display: none;"> 昨天 </div>
                    <div class="time-label lastweeklabel active" style="position: absolute; top: 1986px; bottom: 70px;"> 近1周 </div>
                    <div class="time-label lastmonthlabel active" style="position: absolute; top: 3954px; bottom: 20px;"> 1周前 </div>
                    <div class="time-label lastthreemonthlabel" style="display: none;"> 1个月前 </div>
                </div>
                <ul class="history-list" id="history_list">
                    @foreach($data as $item)
                    <li class="history-record todayitem">
                        <div class="l-info">
                            <div class="lastplay-time">
                                <i class="history-red-round"></i>
                                <span class="lastplay-t">{{$item->last_time}}</span>
                            </div>
                        </div>
                        <div class="r-info clearfix">
                            <div class="cover-contain">
                                <a class="preview">
                                    <img src="{{url('$item->video_img')}}">
                                </a>
                                <div class="info"> </div>
                                <div class="progress-c">
                                    <div class="progress radius-set" style="width: 160px;"></div>
                                </div>
                            </div>
                            <div class="r-txt">
                                <a class="title">{{$item->video_name}}</a>
                                <p class="subtitle">  <span></span>  </p>
                                <div class="w-info">
                                    <div class="time-wrap">
                                        <i class="device-i phone"></i>
                                        <span class="pro-txt">已看完</span>
                                    </div>
                                    <a>
                                        <i class="userpic" style="background-image: url(&quot;//i2.hdslb.com/bfs/face/627ec7bbae0b4b8453fdde408f1c5b503717a140.jpg@20w_20h.webp&quot;);"></i>
                                        <span class="username">{{$item->admin_name}}</span>
                                    </a>
                                </div>
                                <i class="history-delete"></i>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="nodata-contain" style="display: none;">
                    <img src="//s1.hdslb.com/bfs/static/history-record/./img/nodata.png" alt="" class="nodata">
                    <div class="txt">
                        <p>好像最近没有看过视频呢</p>
                    </div>
                </div>
            </div>
            <div class="dlg-contain" style="display: none;">
                <div class="hsmask"> </div>
                <div class="history-dlg">
                    <p class="dlg-txt">清空之后就什么都没有了哦~</p>
                    <div class="hsbtn clearfix">
                        <a href="#" class="sure">确定清空</a>
                        <a href="#" class="cancel">取消</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')

@endsection