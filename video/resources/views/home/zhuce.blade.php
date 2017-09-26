<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>{{$title}}</title>


  <link rel="shortcut icon" href="{{asset('home_temp/favicons/favicon.ico')}}">
  <link rel="stylesheet" href="{{asset('home_temp/css/reset.css')}}">
  <link rel="stylesheet" href="{{asset('home_temp/css/common.css')}}">
  <link rel="stylesheet" href="{{asset('home_temp/css/index.css')}}">

<link href="{{asset('home/logins/css/style.css')}}" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="{{asset('home/logins/js/jquery-1.7.2.js')}}"></script>
<script type="text/javascript" src="{{asset('home/layer/layer.js')}}"></script>

</head>
<body>
<script type="text/javascript">
var FancyForm=function(){
  return{
    inputs:".reg-form input",
    setup:function(){
      var a=this;
      this.inputs=$(this.inputs);
      a.inputs.each(function(){
        var c=$(this);
        a.checkVal(c)
      });
      a.inputs.live("keyup blur",function(){
        var c=$(this);
        a.checkVal(c);
      });
    },checkVal:function(a){
      a.val().length>0?a.parent("div").addClass("val"):a.parent("div").removeClass("val")
    }
  }
}();
</script>


<!-- 头部 -->
  <header id="header" style="z-index: 0;background: transparent;">
    <div id="page_top">
      <div class="bg-wrap">
        <div class="bg"></div>
        <div class="mask"></div>
      </div>
      <div class="header-top">
        <div class="page-width clearfix">
          <div class="header-top__nav">
            <ul>
              <li class="item item-home">
                <a href="{{url('/home/index/index')}}">主站</a>
              </li>
              <li class="item"><a href="#">画友</a></li>
              <li class="item">
                <a href="#">游戏中心</a>
                <!-- <div class="game-center header-hover"> -->
<!--                   <div class="c clearfix">
                    <div class="fl">
                      <div class="imgbox">
                        <a href="#">
                          <img src="{{asset('home_temp/images/cont/game-center__img1.jpg')}}" alt="#">
                          <span>命运-冠位指定（Fate/GO）</span>
                        </a>
                      </div>
                      <div class="game-img">
                        <a href="#">
                          <img src="{{asset('home_temp/images/cont/game_img1.png')}}" alt="#">
                          <span>刀剑乱舞</span>
                        </a>
                        <a href="#">
                          <img src="{{asset('home_temp/images/cont/game_img2.png')}}" alt="#">
                          <span>刀剑乱舞</span>
                        </a>
                        <a href="#">
                          <img src="{{asset('home_temp/images/cont/game_img3.jpg')}}" alt="#">
                          <span>刀剑乱舞</span>
                        </a>
                      </div>
                    </div>
                    <div class="fr">
                      <div class="game-list">
                        <div class="title">
                          <i></i>
                          <a href="#">游戏论坛</a>
                        </div>
                        <div class="all">
                          <a href="#">仙剑奇侠传幻璃镜</a>
                          <a href="#">魔法禁书目录</a>
                          <a href="#">萌王EX</a>
                          <a href="#">妖精的衣橱</a>
                          <a href="#">神代梦华谭</a>
                          <a href="#">碧蓝航线</a>
                          <a href="#">光明大陆</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="gameImg"></div> -->
                <!-- </div> -->
              </li>
              <li class="item">
                <a href="#">直播</a>
                <!-- <div class="live-box header-hover"> -->
<!--                   <div class="live-box__c">
                    <div class="fl">
                      <div class="title">热门直播:</div>
                      <div class="cont">
                        <a href="#">
                        <a href="#">
                          <img src="{{asset('home_temp/images/cont/live-box__img2.jpg')}}" alt="#">
                          <i>LIVE</i>
                          <p>大角虫漫画</p>
                        </a>
                        <a href="#">
                          <img src="{{asset('home_temp/images/cont/live-box__img3.jpg')}}" alt="#">
                          <i>LIVE</i>
                          <p>木本青</p>
                        </a>
                        <a href="#">
                          <img src="{{asset('home_temp/images/cont/live-box__img4.gif')}}" alt="#">
                          <i>LIVE</i>
                          <p>一只小鹿噜噜噜</p>
                        </a>

                        <a href="#">
                          <img src="{{asset('home_temp/images/cont/live-box__img6.jpg')}}" alt="#">
                          <i>LIVE</i>
                          <p>污污_永远的魔法师_</p>
                        </a>
                      </div>
                    </div>
                    <div class="fl">
                      <div class="title">热门直播:</div>
                    </div>
                  </div> -->
                <!-- </div> -->
              </li>
              <li class="item"><a href="#">周边</a></li>
              <li class="item">
                <a href="#">移动端</a>
                <!-- <div class="header-app header-hover">
                  <i></i>
                </div> -->
              </li>
            </ul>
          </div>
          <div class="header-top__user">
            <div class="login-box">
              <a href="{{url('/home/login')}}">登录</a>
              <span></span>
              <a href="{{url('/home/zhuce')}}">注册</a>
            </div>
            <div class="user-post">
              <a href="#" class="link">投 稿</a>
              <div class="user-post__hover header-hover">
                <a href="#" class="post">视频投稿</a>
                <a href="#" class="manage">投稿管理</a>
                <a href="#" class="create">创作中心</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </header>
  <!-- 头部 -->
  <div class="container" >
    <div class="register-box" style="position:absolute;top:-726px;right:290px;">
      <div class="reg-slogan">
        用户注册</div>
      <div class="reg-form" id="js-form-mobile">
      <form action="{{url('/home/dozhuce')}}" method="post" >
      <!-- 提示信息 -->
        <div style="display: none">

            @if(session('info'))
            <p id="session">{{session('info')}}</p>
            @endif
        </div>
        <!-- 验证信息 -->
        @if (count($errors) > 0)

            <div class="alert alert-danger" style="display: none">

                <ul>
                    @foreach ($errors->all() as $error)
                        <li class= "info" >{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
      {{csrf_field()}}
        <br>
        <br>

        <div class="cell" >
          <label for="js-mobile_ipt">请输入手机号码</label>
          <input type="text" name="login_name" id="js-mobile_ipt" class="text"  value="{{old('login_name')}}" onclick="layer.tips('请输入11位手机号码','.text',{tips:[2,'#92afed'],time:5000});" />
        </div>
        <div class="cell">
          <label for="js-mobile_pwd_ipt">请输入密码</label>
          <input type="password" name="login_pwd" id="js-mobile_pwd_ipt" class="text lp" value="" onclick="layer.tips('密码长度应在6-18个字符之间','.lp',{tips:[2,'#92afed'],time:5000});" />
        </div>
        <div class="cell">
          <label for="js-mail_ipt">请确认密码</label>
          <input type="password" name="re_pwd" id="js-mail_ipt" class="text rp" value="" onclick="layer.tips('确认密码长度应在6-18个字符之间','.rp',{tips:[2,'#92afed'],time:5000});" />
        </div>
        <!-- !短信验证码 -->
        <div class="cell vcode">
          <label for="js-mobile_vcode_ipt" >输入手机验证码</label>

          <input type="text" name="code" id="js-mobile_vcode_ipt" class="text cd" maxlength="6"  onclick="layer.tips('请输入手机验证码','.cd',{tips:[4,'#92afed'],time:5000});" />
             <!--        <a onclick="javascript:re_captcha();">  
            <img src="{{ URL('/code/captcha/1') }}" id="127ddf0de5a04167a9e427d883690ff6" >  
            </a> -->
          <button type="button" onclick="phone()" id="js-get_mobile_vcode"  class="button btn-disabled">

          获取验证码</button>
          </div>
          <button type="submit" id="js-mobile_btn"  class="button btn-white1" style="padding:0 146px;">
          注册</button>

        </form>
        <a href="{{url('home/login')}}" style="position:absolute;bottom:27px;right: 33px;">已有账号,直接登录></a>
      </div>
  </div>
</div>



   <footer id="footer" style="position:absolute;top: 502px;">
    <div class="page-width">
      <ul class="footer-c clearfix">
         <li>
           <h6>balabala</h6>
           <a href="#" class="card">关于我们</a>
           <a href="#" class="card">友情链接</a>
           <a href="#" class="card">周边</a>
           <a href="#" class="card">联系我们</a>
           <a href="#" class="card">加入我们</a>
           <a href="#" class="card">官方认证</a>
         </li>
         <li class="middle">
           <h6>传送门</h6>
           <a href="#" class="card">帮助中心</a>
           <a href="#" class="card">高级弹幕</a>
           <a href="#" class="card">活动专题页</a>
           <a href="#" class="card">侵权申诉</a>
           <a href="#" class="card">分院帽计划</a>
           <a href="#" class="card">活动中心</a>
           <a href="#" class="card">用户反馈论坛</a>
           <a href="#" class="card">壁纸站</a>
           <a href="#" class="card">名人堂</a>
         </li>
         <li class="footer-icon">
           <div class="cont">
             <a href="#" class="app">
               <i></i>
               <em>手机端下载</em>
               <img src="{{asset('home_temp/images/app-qrcode.png')}}" alt="#">
             </a>
             <a href="#" class="weibo">
               <i></i>
               <em>新浪微博</em>
               <img src="{{asset('home_temp/images/weibo-qrcode.png')}}" alt="#">
             </a>
             <a href="#" class="weixin">
               <i></i>
               <em>官方微信</em>
               <img src="{{asset('home_temp/images/weixin-arcode.gif')}}" alt="#">
             </a>
           </div>
         </li>
      </ul>
    </div>
  </footer>




<script type="text/javascript">
$(document).ready(function() {
  FancyForm.setup();
});
function phone(){
  var pwd = $('#js-mobile_pwd_ipt').val();
  var repwd = $('#js-mail_ipt').val();
  // alert(111);
  var phone = $('#js-mobile_ipt').val();
  var reg = /^1[35678]\d{9}$/;
  var res =reg.test(phone);
  if(res){
  $.post("{{url('/phone')}}",{'_token':"{{csrf_token()}}",'phone':phone,'pwd':pwd,'repwd':repwd},function(data){
    layer.msg(data);
    if(data=='验证码发送成功'){
    function invokeSettime(obj){
    var countdown=60;
    settime(obj);
    function settime(obj) {
        if (countdown == 0) {
            $(obj).attr("disabled",false);
            $(obj).text("获取验证码");
            countdown = 60;
            return;
        } else {
            $(obj).attr("disabled",true);
            $(obj).text( countdown + " s 重新发送");
            countdown--;
        }
        setTimeout(function() {
                    settime(obj) }
                ,1000)
    }
  }
  new invokeSettime("#js-get_mobile_vcode");
  }
  });
  }else{
    layer.msg('手机号码不存在');

  }
}


//验证信息
var str = '';
        if(typeof($('.info').html()) == 'string' && $('.info').html() !== null    ){
               $('.info').each(function(i,n){
                 str += $(n).html()+'<br>'; 
                 layer.msg(str, {time:3000});   
            });
        }

        //提示信息
         if(typeof($('#session').html()) == 'string' &&  $('#session').html()  )
      {
            layer.msg($('#session').html(), {time:3000});
      }

</script>

</body>
</html>
