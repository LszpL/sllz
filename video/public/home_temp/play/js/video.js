/**
 * 播放器JS
 * Created by liguanlin on 2016/6/6.
 */
 //定义setTimeout执行方法 
var TimeFn = null; 
var video=document.getElementById("video");
// 加载页面时候加载数据
window.onload = function () {
    video.ontimeupdate;
};

 $(function(){
    //绑定拖动元素对象
    bindvideoDrag(document.getElementById('video-prog-point'),document.getElementById('video-prog'),document.getElementById('v-prog'));
    bindvolumeDrag(document.getElementById('volume-prog-point'),document.getElementById('volume-prog'),document.getElementById('vol-prog'));
});

//播放进度条 动作
function bindvideoDrag(el,l,prog){
    var left;
    var w=l.offsetWidth;
    var progs=prog.style;
    var els = el.style,x = 0;
    $(el).mousedown(function(e){
        x = e.clientX - el.offsetLeft;
        el.setCapture && el.setCapture();
        $(document).bind('mousemove',mouseMove).bind('mouseup',mouseUp);
    });
    //点击进度条
    $(l).click(function(e){
        var durTime=Math.floor(document.getElementById("video").duration);
        var clickwidth=parseFloat( (e.pageX  - $('.video-prog').offset().left ) / w ).toFixed(2) * 100
        els.left = clickwidth+'%';
        progs.width = clickwidth+'%';
        var curTime = clickwidth * durTime / 100;
        seekVideo(curTime);
    })
    //移动进度
    function mouseMove(e){
        left= parseFloat((e.clientX - x )/(w )).toFixed(2)*100;
        if (left<0||left>100){
            return;
        } else{
            els.left = left+'%';
            progs.width = left+'%';
        }

    }
    //移动进度 鼠标松开，进行计算
    function mouseUp(){
        el.releaseCapture && el.releaseCapture();
        $(document).unbind('mousemove',mouseMove).unbind('mouseup',mouseUp);
        var curTime = left / 100;
        seekVideo(curTime);
    }
}
//声音进度条 动作
function bindvolumeDrag(el,l,prog){
    var left;
    var w=l.offsetWidth;
    var progs=prog.style;
    var els = el.style,x = 0;
    $(el).mousedown(function(e){
        x = e.clientX - el.offsetLeft;
        el.setCapture && el.setCapture();
        $(document).bind('mousemove',mouseMove).bind('mouseup',mouseUp);
    });
    //点击进度条
    $(l).click(function(e){
        var clickwidth=parseFloat( (e.pageX  - $('#volume-prog').offset().left ) / w ).toFixed(2) * 100
        els.left = clickwidth+'%';
        progs.width = clickwidth+'%';
        var curTime = clickwidth  / 100;
        seekVolume(curTime);
    })
    //移动进度
    function mouseMove(e){
        left= parseFloat((e.clientX - x )/(w )).toFixed(2)*100;
        if (left<0||left>100){
            return;
        } else{
            els.left = left+'%';
            progs.width = left+'%';
            var curTime = left / 100;
            seekVolume(curTime);
        }

    }
    //移动进度 鼠标松开，进行计算
    function mouseUp(){
        el.releaseCapture && el.releaseCapture();
        $(document).unbind('mousemove',mouseMove).unbind('mouseup',mouseUp);
    }
}
// 设置进度
function seekVideo(curTime) {
    video.currentTime = curTime;
}
// 设置声音
function seekVolume(curVol){
    video.volume = curVol;
}

// 监听事件 监听video对象
video.ontimeupdate = function(){    
    var durTime=Math.floor(document.getElementById("video").duration);
    $('.video-allTime').html(formatSeconds(durTime));
    $('.video-currentTime').html(formatSeconds(Math.floor(video.currentTime))) ;    // 取得当前播放的时间，由于 currentTime 返回的是个浮点数，所以要向下取整
    var progs=document.getElementById('v-prog').style;
    var els = document.getElementById('video-prog-point').style;
    w=Math.floor(video.currentTime)/Math.floor(video.duration)*100;
    els.left = w+'%';
    progs.width = w+'%';
}
//单击按钮或者屏幕  进行播放、暂停
$('#play,#screenPause').click(function playPause(){
    // 取消上次延时未执行的方法 
    clearTimeout(TimeFn); 
    //执行延时 
    TimeFn = setTimeout(function(){
        if (video.paused){
            video.play();
            $('.pauseIcon').css({'opacity': '0','transform': 'scale(2.5)'});
            $('.video-play').html('&#xe655;');
        }
        else{
            video.pause();
            $('.pauseIcon').css({'opacity': '1','transform': 'scale(1)'});
            $('.video-play').html('&#xe64f;');
        }
    },300); 
    
})
// 双击屏幕 进行全屏
$('#screenPause').dblclick(function(){
    // 取消上次延时未执行的方法
    clearTimeout(TimeFn); 
    launchFullscreen(document.getElementById('box'));
    //判断浏览器是否处于全屏
    if(invokeFieldOrMethod(document,'FullScreen') || invokeFieldOrMethod(document,'IsFullScreen') || document.IsFullScreen)
    {
        exitFullscreen();
    }
})

//声音、静音
$('#playMuted').click(function(){
    if (video.muted){
        video.muted=false;
        $('.video-volume-logo').html('&#xe654;');
        $('#vol-prog').show();
    }
    else{
        video.muted=true;
        $('.video-volume-logo').html('&#xe651;');
        $('#vol-prog').hide();
    }
})
// 格式化播放时间
function formatSeconds(value) {
    var theTime = parseInt(value);// 秒
    var theTime1 = 0;// 分
    var theTime2 = 0;// 小时
    if(theTime > 60) {
        theTime1 = parseInt(theTime/60);
        theTime = parseInt(theTime%60).toString();
        if(theTime1 > 60) {
            theTime2 = parseInt(theTime1/60);
            theTime1 = parseInt(theTime1%60);
        }
    }
    if(theTime<10){
        theTime="0" + theTime;
    }
    var result = ""+theTime;
    if(theTime1 >= 0) {
        result = ""+parseInt(theTime1)+":"+result;
    }
    if(theTime2 > 0) {
        result = ""+parseInt(theTime2)+":"+result;
    }
    return result;
}


