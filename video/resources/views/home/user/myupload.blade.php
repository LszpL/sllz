@extends('home.user.layouts')
@section('content')
    <!-- 提示信息 -->
    <div style="display:none;">
        @if(session('info'))
            <p id="session">{{session('info')}}</p>
        @endif
    </div>
    <div class="security-right">
        <div class="sr-t">
            <span class="tit-b"></span><span class="acc-sec">我的上传</span>
        </div>
        <table class="table-normal table-styleW">
            <thead>
                <tr>
                    <td style="width: 26.7%;"><div>标题</div></td>
                    <td style="width: 29.3%;"><div>内容</div></td>
                    <td style="width: 29.3%;"><div>视频</div></td>
                    <td style="width: 14.7%;"><div>状态</div></td>
                </tr>
            </thead>
            @foreach($users as $item)
            <tbody class="list_js">
                <form>
                <tr>
                    <td><div>{{$item->title}}</div></td>
                    <td><div>{{$item->content}}</div></td>
                    <td><div><a href=""><img src="{{url("$item->video_img")}}"  style="width:60px; height:40px;"></a></div></td>
                    <td><div>{{$item->status}}</div></td>
                </tr>
                </form>

            </tbody>
             @endforeach
        </table>

    </div>

    <script type="text/javascript">

        //提示信息
        if(typeof($('#session').html()) == 'string' &&  $('#session').html()  )
        {
            layer.alert($('#session').html(), {icon: 8});
        }
    </script>

@endsection

