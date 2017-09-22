@extends('home/user/layouts')
@section('content')
			<div class="security-right">
				<div class="sr-t">
					<span class="tit-b"></span><span class="acc-sec">我的信息</span>
				</div>
				<!-- 提示信息 -->
				<div style="display:none;">
					@if(session('info'))
						<p id="session">{{session('info')}}</p>
					@endif
				</div>

				<div class="sr-b">
					<ul>
						<form action="{{url('home/user/domessage')}}"   method="post">
							{{csrf_field()}}
							@foreach($message as $item)
						<input type="hidden"   name="user_id"   value="{{$res[0]}}" >
						<input type="hidden"   name="message_id"   value="{{$item->message_id}}" >
						<li>
							<div class="sb-info">
								<p class="sbi-l">昵称：</p>
								<div class="sbi-m">
									<span><input class="user-id" type="text" name="pet_name" value="{{$item->pet_name}}"></span>
								</div>
								<p class="sbi-r">注：修改一次昵称需要消耗6个硬币</p>
							</div>
						</li>

						<li>
							<div class="sb-info">
								<p class="sbi-l">用户名：</p>
								<div class="sbi-m">
									<span readonly  name="user_name"    >{{$res[1]}}</span>
								</div>
								<p class="sbi-r">注：用户名为本人手机号,不可修改</p>

							</div>
						</li>
						<li>
							<div class="sb-info">
								<p class="sbi-l">性别：</p>
								<input type="hidden" name="sex" id="select_sex"
									   value="保密" />
								<div class="sbi-m">
									<ul class="sex" id="sex_ul">

										<input  type="radio"   style="width:55px;height:12px;"  name="sex" value="男"   @if($item->sex=='男') checked="checked"
												@endif >男
										<input  type="radio"   style="width:55px;height:12px;"   name="sex"  value="女"    @if($item->sex=='女') checked="checked"
												@endif>女
										<input  type="radio"   style="width:55px;height:12px;"   name="sex"  value="保密"   @if($item->sex=='保密') checked="checked"
												@endif>保密

									</ul>
								</div>
							</div>
						</li>
						<li>
							<div class="sb-info">
								<p class="sbi-l">我的签名：</p>
								<div class="sbi-m">
									<input name="content" id="" cols="30" rows="10" value="{{$item->content}}"    class="my-sign">
								</div>
							</div>
						</li>

						<li>
							<div class="sb-info">
								<p class="sbi-l">兴趣爱好：</p>
								<div class="sbi-m">
									<input name="hobby" id="" cols="30" rows="10"  value="{{$item->hobby}}"   class="my-sign">
								</div>
							</div>
						</li>
					
						<li>
							<div class="sb-info">
								<p class="sbi-l">喜欢电影类型：</p>
								<div class="sbi-m">
									<div >
										<select  style="width:120px" name="like" >
											<option value="所有类型都喜欢" @if($item->like=='所有类型都喜欢') selected="selected"
													@endif    >所有类型都喜欢</option>
											<option value="动作"  @if($item->like=='动作') selected="selected"
													@endif>动作</option>
											<option value="喜剧"  @if($item->like=='喜剧') selected="selected"
													@endif>喜剧</option>
											<option value="爱情"  @if($item->like=='爱情') selected="selected"
													@endif>爱情</option>
											<option value="冒险"  @if($item->like=='冒险') selected="selected"
													@endif>冒险</option>
											<option value="恐怖" @if($item->like=='恐怖') selected="selected"
													@endif>恐怖</option>
										</select>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
				@endforeach
				<div class="sb-line"></div>
			<input type="submit"    class="sb-save" value="保存" style="position: absolute;bottom:80px;display: block;">
			</div>


	</form>
	{{--前台页面引入js--}}
	<script type="text/javascript"  src="{{asset('home/user/style/js/alertplate.js')}}"    ></script>
	<script type="text/javascript"  src="{{asset('home/user/style/js/jquery.min.js')}}"    ></script>
	<script type="text/javascript"  src="{{asset('home/user/style/js/sea.config.js')}}"    ></script>
	<script type="text/javascript"  src="{{asset('home/user/style/js/sea.js')}}"    ></script>
	<script type="text/javascript"  src="{{asset('home/user/style/js/txv.core.js')}}"    ></script>
	<script type="text/javascript"  src="{{asset('home/user/style/js/tvu.uploader.js')}}"    ></script>
	<script type="text/javascript"  src="{{asset('home/user/style/js/txv.sea.js')}}"    ></script>
	<script type="text/javascript"  src="{{asset('home/user/style/js/uploader.min.js')}}"    ></script>
	<script type="text/javascript"  src="{{asset('home/user/style/js/uploadExtend.min.js')}}"    ></script>
			<script type="text/javascript">


                //提示信息
                if(typeof($('#session').html()) == 'string' &&  $('#session').html()  )
                {
                    layer.alert($('#session').html(), {icon: 8});
                }


			</script>




@endsection




