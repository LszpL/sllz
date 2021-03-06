﻿@extends('home/user/layouts')
@section('title')
	<title>芭拉芭拉-个人中心</title>
@endsection



@section('content')
	<html>
	<head></head>
	<body>
	<div class="security-right">
		<div class="home-right">
			@foreach( $res   as  $item)
			<div class="home-info">
				<div class="home-head">
					<img src="{{url("uploads/$item->face")}}" />
					<div title="大会员" class="titlevipicon"></div>
					<div rec-linkid="account_index_face_click" class="home-head-mask" style="display: none;">
						个人空间
					</div>
				</div>
				<div class="home-info-right">
					<div class="h-div">

						<span class="h-name">{{$item->pet_name}}</span>
						<span class="h-userstatus">注册会员</span>
						<span class="h-nameplate"></span>
					</div>
					@endforeach
					<div class="h-level">
						<span class="h-level-all"><span style="background-position: -264px -916px;color:#99a2aa" class="h-level-head">LV<i style="font-weight: bold;color:#99a2aa" class="get-level">0</i></span><span class="h-level-up">进度条</span></span>
						<a href="https://account.bilibili.com/answer/base" target="_blank" rec-linkid="account_index_answer_click" class="h-level-tips">注册会员享受更多特权</a>
						<div class="h-level-mask" style="display: none;">
							<span class="h-level-maskv"></span>
							<p>作为<i class="h-m-tips">Lv0</i>，你无法享受特权</p>
							<p>成为正式会员你可以：</p>
							<p>1、发射个性弹幕</p>
							<p>2、参与视频评论</p>
							<p>3、登录获得硬币</p>
							<p>4、投稿成为偶像</p>
							<a href="http://www.bilibili.com/html/help.html#k" target="_blank">会员等级相关说明</a>
						</div>
						<span class="h-level-number"><i style="color:#222;">0</i><i style="margin:0 2px;">/</i>200</span>
						<a href="{{url('home/user/message')}}" rec-linkid="account_index_setting_click" class="h-level-update">修改资料</a>
						<i class="m-arrow"></i>
					</div>
					<div class="h-bp">
						<a href="https://pay.bilibili.com/bb_balance.html" target="_blank" title="B币" style="background-position: -150px -534px" rec-linkid="account_index_BB_click"></a>
						<span style="margin-right: 12px;">0</span>
						<a href="/site/coin" title="硬币" style="background-position: -150px -470px" rec-linkid="account_index_coin_click"></a>
						<span>0</span>
					</div>
				</div>
			</div>
			<div class="home-reward">
				<span class="h-reward-icon"></span>
				<span class="h-reward-info">每日奖励</span>
				<span class="h-reward-tips">成为正式会员才能获得每日奖励哦</span>
				<div class="re-exp">
					<div class="re-exp-block">
						<div class="re-exp-icon">
							<i style="color:#fff;font-size: 24px;font-weight: bold;">5</i>
							<i style="color:#fff;font-size: 12px;">EXP</i>
						</div>
						<p class="re-exp-info">每日登录</p>
						<p class="re-exp-none">未完成</p>
						<div class="h-line"></div>
					</div>
					<div class="re-exp-block">
						<div class="re-exp-icon">
							<i style="color:#fff;font-size: 24px;font-weight: bold;">5</i>
							<i style="color:#fff;font-size: 12px;">EXP</i>
						</div>
						<p class="re-exp-info">每日观看视频</p>
						<p class="re-exp-none">未完成</p>
						<div class="h-line"></div>
					</div>
					<div class="re-exp-block">
						<!-- 每日视频投币-->
						<div class="re-exp-icon">
							<i style="color:#fff;font-size: 24px;font-weight: bold;">50</i>
							<i style="color:#fff;font-size: 12px;">EXP</i>
						</div>
						<p class="re-exp-info">每日视频投币</p>
						<p class="re-exp-none">已获得<i style="font-weight: bold;">0/50</i></p>
						<div class="h-line"></div>
					</div>
					<div class="re-exp-block">
						<!-- 每日分享视频-->
						<div class="re-exp-icon">
							<i style="color:#fff;font-size: 24px;font-weight: bold;">5</i>
							<i style="color:#fff;font-size: 12px;">EXP</i>
						</div>
						<p class="re-exp-info">每日分享视频（客户端）</p>
						<p class="re-exp-none">未完成</p>
					</div>
				</div>
			</div>
			<div class="home-mp">
				<span style="background-position: -145px -82px" class="h-reward-icon"></span>
				<span class="h-reward-info">成就勋章</span>
				<div class="h-content-list">
					<div class="h-mp-none">
						<div class="h-none-icon"></div>
						<div class="h-none-info">
							<p class="h-none-msg">你还没有领取过勋章哦！</p>
							<a href="/site/nameplate" rec-linkid="account_index_nameplateDetail_click" class="h-none-btn">查看勋章详情</a>
						</div>
					</div>
				</div>
			</div>
			<div class="home-safe">
				<span style="background-position: -145px -146px" class="h-reward-icon"></span>
				<span class="h-reward-info">账号安全</span>
				<a href="https://passport.bilibili.com/site" rec-linkid="account_index_allSecurity_click" class="h-mp-space">更多账号安全<i class="m-arrow"></i></a>
				<div class="h-content-safe">
					<div class="h-safe-list">
						<div style="background-position: -386px -2px" class="h-safe-icon"></div>
						<div class="h-safe-msg">
							<p class="h-safe-title">我的邮箱</p>
							<p class="h-safe-desc">绑定邮箱后即可使用邮箱登录</p>
							<a href="https://passport.bilibili.com/member/checkoldmailchangemail.html?type=mailbox" rec-linkid="account_index_changeMail_click" id="account_index_changeMail_show" class="h-change-btn">更换邮箱 </a>
						</div>
					</div>
					<div class="h-safe-list">
						<div style="background-position: -257px -130px" class="h-safe-icon"></div>
						<div class="h-safe-msg">
							<p class="h-safe-title">首次绑定手机，获得100经验值</p>
							<p class="h-safe-desc">绑定手机后即可使用手机号登录</p>
							<a href="https://passport.bilibili.com/member/hasmailcheckmail.html" rec-linkid="account_index_bindPhone_click" id="account_index_bindPhone_show" class="h-safe-btn">去绑定</a>
						</div>
					</div>
					<div class="h-safe-list">
						<div style="background-position: -257px -258px" class="h-safe-icon"></div>
						<div class="h-safe-msg">
							<p class="h-safe-title">首次设置密保，获得30经验值</p>
							<p class="h-safe-desc">设置密保，账号更安全</p>
							<a href="/site" rec-linkid="account_index_questionSetting_click" id="account_index_questionSetting_show" class="h-safe-btn">立即设置</a>
						</div>
					</div>
					<div class="h-safe-list">
						<div style="background-position: -257px -386px" class="h-safe-icon"></div>
						<div class="h-safe-msg">
							<p class="h-safe-title">首次实名认证，获得50经验值</p>
							<p class="h-safe-desc">实名认证成功后，可享受开通直播间等服务</p>
							<a href="https://account.bilibili.com/site/identification" rec-linkid="account_index_identification_click" id="account_index_identification_show" class="h-safe-btn">去认证</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</body>
	</html>
@endsection