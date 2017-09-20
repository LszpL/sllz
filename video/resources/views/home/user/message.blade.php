@extends('home/user/layouts')

<script type="text/javascript"  src="{{asset('home/user/style/js/alertplate.js')}}"    ></script>
<script type="text/javascript"  src="{{asset('home/user/style/js/jquery.min.js')}}"    ></script>
<script type="text/javascript"  src="{{asset('home/user/style/js/sea.config.js')}}"    ></script>
<script type="text/javascript"  src="{{asset('home/user/style/js/sea.js')}}"    ></script>
<script type="text/javascript"  src="{{asset('home/user/style/js/txv.core.js')}}"    ></script>
<script type="text/javascript"  src="{{asset('home/user/style/js/tvu.uploader.js')}}"    ></script>
<script type="text/javascript"  src="{{asset('home/user/style/js/txv.sea.js')}}"    ></script>
<script type="text/javascript"  src="{{asset('home/user/style/js/uploader.min.js')}}"    ></script>
<script type="text/javascript"  src="{{asset('home/user/style/js/uploadExtend.min.js')}}"    ></script>


{{--日期引入插件--}}
<link rel="stylesheet" href="{{asset('home/user/style/css/ion.calendar.css')}}">
<script src="http://www.jq22.com/jquery/jquery-1.10.2.js"></script>
<script type="text/javascript"  src="{{asset('home/user/style/js/ion.calendar.min.js')}}"></script>
<script type="text/javascript"  src="{{asset('home/user/style/js/moment.zh-cn.js')}}"></script>
<script type="text/javascript"  src="{{asset('home/user/style/js/moment.min.js')}}"></script>
@section('content')
	<form onsubmit="return false;">
		@foreach($message as $item)


		<div class="security-right">
			<div class="sr-t">
				<span class="tit-b"></span><span class="acc-sec">我的信息</span>
			</div>
			<div class="sr-b">
				<ul>
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
								<span>{{$item->tel}}</span>
							</div>
							<p class="sbi-r">注：用户名为本人手机号无法修改</p>

						</div>
					</li>
					<li>
						<div class="sb-info">
							<p class="sbi-l">我的签名：</p>
							<div class="sbi-m">
								<textarea name="content" id="" cols="30" rows="10"  class="my-sign">{{$item->content}}</textarea>
							</div>
						</div>
					</li>
					<li>
						<div class="sb-info">
							<p class="sbi-l">性别：</p>
							<input type="hidden" name="sex" id="select_sex"
								   value="保密" />
							<div class="sbi-m">
								<ul class="sex" id="sex_ul">

									<input  type="radio"   style="width:60px;height:15px;"  name="sex" value="男"   @if($item->sex=='男') checked="checked"
											@endif >男
									<input  type="radio"   style="width:60px;height:15px;"   name="sex"  value="女"    @if($item->sex=='女') checked="checked"
												@endif>女
									<input  type="radio"   style="width:60px;height:15px;"   name="sex"  value="保密"   @if($item->sex=='保密') checked="checked"
												@endif>保密

								</ul>
							</div>
						</div>
					</li>
					<li>
						<div class="sb-info">
							<p class="sbi-l">出生日期：</p>
							<div class="sbi-m">
								<div class="jq22">
									<input type="text" class="date" data-lang="zh-cn" data-years="10" data-format="YYYY.MM.DD" data-sundayfirst="false" placeholder="请选择日期">
								</div>
							</div>
						</div>
					</li>

					<li>
						<div class="sb-info">
							<p class="sbi-l">感情状况：</p>
							<div class="sbi-m">
								<div class="control-btn-select">
									<span>--请选择--</span> <em></em>
									<select name='marital' id='marital' class='enumselect'>
										<option value='0' selected='selected'>--请选择--</option>
										<option value='1'>未婚</option>
										<option value='2' selected='selected'>已婚</option>
										<option value='3'>离异</option>
										<option value='4'>丧偶</option>
									</select>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="sb-info">
							<p class="sbi-l">交友目的：</p>
							<div class="sbi-m">
								<div class="control-btn-select">
									<span>--请选择--</span> <em></em>
									<select name='datingtype' id='datingtype' class='enumselect'>
										<option value='0' selected='selected'>--请选择--</option>
										<option value='1' selected='selected'>网友</option>
										<option value='2'>恋人</option>
										<option value='3'>玩伴</option>
										<option value='4'>共同兴趣</option>
										<option value='5'>男性朋友</option>
										<option value='6'>女性朋友</option>
									</select>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="sb-line"></div>
			<input type="submit" class="sb-save" value="保存" style="position: absolute;bottom:80px;display: block;">
		</div>
		@endforeach
	</form>
	<script>
        $(function(){
            $('.date').each(function(){
                $(this).ionDatePicker();
            });
        });
	</script>
@endsection
