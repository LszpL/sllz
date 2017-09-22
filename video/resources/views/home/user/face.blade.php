@extends('home.user.layouts')

@section('content')

    <div class="security-right">
        <!-- 提示信息 -->
        <div style="display:none;">
            @if(session('info'))
                <p id="session">{{session('info')}}</p>
            @endif
        </div>

        <form   action="{{url('home/user/myface')}}"   method="post"  enctype="multipart/form-data" >
            {{csrf_field()}}
        <div class="sr-t">
            <span class="tit-b"></span><span class="acc-sec">我的头像</span>
        </div>
        <div class="sr-b">
            @foreach(  $faceimg   as  $item)
            <div class="face-g-preview">
                <a href=""   id="face-g-change" class="face-g-action"><p  style="top:20px;"  class="line-1">更换头像</p><input  type='file'   id="inp"   style=" width:80px; height:80px;    filter:Alpha(opacity=30); opacity: .0;" name='face'   ></a>
                <span id="face-g-takedown" class="face-g-action disabled"><p class="line-1">卸下</p><p class="line-2">挂件</p></span>
                <img src="{{url("uploads/$item->face")}}" id="face-g-avatar">
                <img id="face-g-g">
            </div>
            @endforeach
            <div class="sb-line"></div>
            <input type="submit"    class="sb-save" value="保存" style="position: absolute;bottom:80px;display: block;">
        </form>
            <div class="tabs-mk2 clearfix">
                <a href="http://www.bilibili.com/html/help.html#p" class="tab-mk2 tab-mk2-r" target="_blank">头像挂件相关帮助 &gt;</a>
                <a href="face.html" class="tab-mk2 allpendants active">您也可以选择一下精美头像做头像</a>
            </div>
            <div class="face-g-list" data-api="/pendant/all">

                <div class="face-g-group" name="梗系列" style="display: block;">
                    <div class="face-g-more" collapsed="true">展开</div>
                    <div class="face-g-content clearfix">

                        <div class="face-g-item" data-id="113" data-point-price="250" data-bcoin-price="5" data-coin-price="0" data-name="FFF团" data-img="//i1.hdslb.com/bfs/face/6b8ac176f96ce8fa151d9a44a6ed0c296c9be1bd.png" data-expire="0">
                            <img src="{{url("uploads/15058247031794437.jpg")}}" class="face-g-avatar">
                            <img src="{{url("uploads/15058247031794437.jpg")}}" href="javascript:;"  onclick="jpg1(this)"  value="15058247031794437.jpg"   class="face-g-g">
                            <p class="face-g-name">二次元</p>
                        </div>

                        <div class="face-g-item" data-id="115" data-point-price="250" data-bcoin-price="5" data-coin-price="0" data-name="幕后交易" data-img="//i1.hdslb.com/bfs/face/7c5eead6c95bfd83ce6d4e8609def46b46c14c91.png" data-expire="0">
                            <img src="{{url("uploads/15057435054762689.jpg")}}" class="face-g-avatar">
                            <img src="{{url("uploads/15057435054762689.jpg")}}"   href="javascript:;"  onclick="jpg2(this)"     value="15057435054762689.jpg" class="face-g-g">
                            <p class="face-g-name">美女</p>
                        </div>

                        <div class="face-g-item" data-id="114" data-point-price="250" data-bcoin-price="5" data-coin-price="0" data-name="美术馆女神" data-img="//i1.hdslb.com/bfs/face/60cd1b77a6f1851b847c215615caabf586546f60.png" data-expire="0">
                            <img src="{{url("uploads/201704255898.png")}}" class="face-g-avatar">
                            <img src="{{url("uploads/201704255898.png")}}"   href="javascript:;"  onclick="jpg3(this)"  value="201704255898.png" class="face-g-g">
                            <p class="face-g-name">帅哥</p>
                        </div>
                        <div class="face-g-item" data-id="114" data-point-price="250" data-bcoin-price="5" data-coin-price="0" data-name="美术馆女神" data-img="//i1.hdslb.com/bfs/face/60cd1b77a6f1851b847c215615caabf586546f60.png" data-expire="0">
                            <img src="{{url("uploads/201709171231284548.jpg")}}" class="face-g-avatar">
                            <img src="{{url("uploads/201709171231284548.jpg")}}"   href="javascript:;"  onclick="jpg4(this)"   value="201709171231284548.jpg"   class="face-g-g">
                            <p class="face-g-name">动漫</p>
                        </div>
                        <div class="face-g-item" data-id="114" data-point-price="250" data-bcoin-price="5" data-coin-price="0" data-name="美术馆女神" data-img="//i1.hdslb.com/bfs/face/60cd1b77a6f1851b847c215615caabf586546f60.png" data-expire="0">
                            <img src="{{url("uploads/201709182247042469.jpg")}}" class="face-g-avatar">
                            <img src="{{url("uploads/201709182247042469.jpg")}}"    href="javascript:;"  onclick="jpg5(this)"  value="201709182247042469.jpg" class="face-g-g">
                            <p class="face-g-name">影视</p>
                        </div>
                        <div class="face-g-item" data-id="114" data-point-price="250" data-bcoin-price="5" data-coin-price="0" data-name="美术馆女神" data-img="//i1.hdslb.com/bfs/face/60cd1b77a6f1851b847c215615caabf586546f60.png" data-expire="0">
                            <img src="{{url("uploads/15057934827706908.jpg")}}" class="face-g-avatar">
                            <img src="{{url("uploads/15057934827706908.jpg")}}"   href="javascript:;"  onclick="jpg6(this)"    value="15057934827706908.jpg"  class="face-g-g">
                            <p class="face-g-name">小清新</p>
                        </div>

                        <div class="face-g-item" data-id="114" data-point-price="250" data-bcoin-price="5" data-coin-price="0" data-name="美术馆女神" data-img="//i1.hdslb.com/bfs/face/60cd1b77a6f1851b847c215615caabf586546f60.png" data-expire="0">
                            <img src="{{url("uploads/15059846044474.jpg")}}"     class="face-g-avatar">
                            <img src="{{url("uploads/15059846044474.jpg")}}"    href="javascript:;"  onclick="jpg7(this)"    value='15059846044474.jpg'   class="face-g-g">
                            <p class="face-g-name">体育</p>
                        </div>

                        <div class="face-g-item" data-id="114" data-point-price="250" data-bcoin-price="5" data-coin-price="0" data-name="美术馆女神" data-img="//i1.hdslb.com/bfs/face/60cd1b77a6f1851b847c215615caabf586546f60.png" data-expire="0">
                            <img src="{{url("uploads/201709158888.jpg")}}      " class="face-g-avatar">
                            <img src="{{url("uploads/201709158888.jpg")}}"    href="javascript:;"  onclick="jpg8(this)"     value='201709158888.jpg'  class="face-g-g">
                            <p class="face-g-name">山水</p>
                        </div>
                    </div>
                </div>
                    </div>
                </div>
    <script type="text/javascript">

        //提示信息
        if(typeof($('#session').html()) == 'string' &&  $('#session').html()  )
        {
            layer.alert($('#session').html(), {icon: 8});
        }
//图片1-8js特效
        function jpg1(img1){

            $.ajax({
                        type: "post",
                        url: "/home/user/imgs",
                        data: { img1: $(img1).attr('value')},
                success:function (jsondata) {
                    if(jsondata.success==true)
                    {
                        alert("success");
                    }else{

                     alert('failed');
                     return false;
                    }},
                error:function (err){

                            alert("提交失败");
                }
            });

        }

        function jpg2(img2){

            console.log( $(img2).attr('value'));
        }

        function jpg3(img3){

            console.log( $(img3).attr('value'));
        }

        function jpg4(img4){

            console.log( $(img4).attr('value'));
        }

        function jpg5(img5){

            console.log( $(img5).attr('value'));
        }

        function jpg6(img6){

            console.log( $(img6).attr('value'));
        }

        function jpg7(img7){

            console.log( $(img7).attr('value'));
        }

        function jpg8(img8){

            console.log( $(img8).attr('value'));
        }





    </script>
@endsection