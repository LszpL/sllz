@extends('home/user/layouts')
@section('content')
    <div class="security-right">
        <div class="sr-t">
            <span class="tit-b"></span><span class="acc-sec">上传管理</span>
        </div>
        <table class="table-normal table-styleW">
            <thead>
            <tr>
                <td style="width: 26.7%;"><div>标题</div></td>
                <td style="width: 29.3%;"><div>内容</div></td>
                <td style="width: 29.3%;"><div>视频</div></td>
                <td style="width: 14.7%;"><div>状态</div></td>
                <td style="width: 14.7%;"><div>操作</div></td>
            </tr>
            </thead>
                @foreach($res as $item )

                <tbody class="list_js">
                 <form>
                <tr>
                    <td><div>{{$item->title}}</div></td>
                    <td><div>{{$item->content}}</div></td>
                    <td><div><a href=""><img  src="{{url("$item->video_img")}}"   style="width:60px; height:40px;"></a></div></td>
                    <td><div>{{$item->status}}</div></td>
                    <td><a href="javascript:;" onclick="del({{$item->upload_id}})"><div>删除</div></a></td>
                </tr>
                    </form>
                </tbody>

                <br>
                @endforeach
        </table>

    </div>
    <script>
        function del(upload_id){
//询问框
            layer.confirm('是否确认删除？', {
                btn: ['确定','取消'] //按钮
            }, function(){
//        $.post(url,data,function(){});
                $.post("{{url('home/user/setedit')}}/"+upload_id,{'_method':'post','_token':"{{csrf_token()}}"},function(data){
                    // console.log(data.status);
                    if(data.status == 0){

                        layer.msg(data.msg, {icon: 6});
                        location.href = location.href;
                    }else{
                        layer.msg(data.msg, {icon: 5});
                        location.href = location.href;
                    }
                });
            }, function(){
            });


        }



    </script>

@endsection








