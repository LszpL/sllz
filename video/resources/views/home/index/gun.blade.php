@extends('home.layouts')

@section('content')
    <link rel="stylesheet" href="{{asset('home_temp/history/css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('home_temp/history/css/common.css')}}">
    <link rel="stylesheet" href="{{asset('home_temp/history/css/index.css')}}">
  
    <script src="{{asset('home_temp/history/js/vendor_34cd10da.js')}}"></script>
    <script src="{{asset('home_temp/history/js/app_34cd10da.js')}}"></script>

    <div id="app">
        <div class="history-wrap">
            <div class="newlist_info">
                <div class="b-head clearfix">
                    <div class="b-head-c">
                        <i class="b-icon b-icon-history"></i>
                        <span class="b-head-t">非会员</span>
                    </div>
                    <div class="history-btn">
                        <a href="#" class="btn">充值会员</a>
                        <a href="/home/index/index" class="btn cleanhsbtn">返回首页</a>
                    </div>
                </div>
            </div>
           
                <div class="nodata-contain">
                    <img src="//s1.hdslb.com/bfs/static/history-record/./img/nodata.png" alt="" class="nodata">
                    <div class="txt">
                        <p>对不起亲,本视频为VIP视频哟!</p>
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