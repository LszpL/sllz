/**
 * 播放器JS 全屏方法监听
 * Created by liguanlin on 2016/6/15.
 */

//反射调用
var invokeFieldOrMethod = function(element, method)
{
    var usablePrefixMethod;
    ["webkit", "moz", "ms", "o", ""].forEach(function(prefix) {
        if (usablePrefixMethod) return;
        if (prefix === "") {
            // 无前缀，方法首字母小写
            method = method.slice(0,1).toLowerCase() + method.slice(1);
        }
        var typePrefixMethod = typeof element[prefix + method];
        if (typePrefixMethod + "" !== "undefined") {
            if (typePrefixMethod === "function") {
                usablePrefixMethod = element[prefix + method]();
            } else {
                usablePrefixMethod = element[prefix + method];
            }
        }
    });

    return usablePrefixMethod;
};

//进入全屏方法
function launchFullscreen(element)
{   
    var boxs=element.style;
    boxs.height='100%';
    boxs.width='100%';
    //改变全屏按钮样式
    $('.video-full').html('&#xe653;');
    //此方法不可以在异步中执行，否则火狐无法全屏
    if(element.requestFullscreen) {
        element.requestFullscreen();
    } else if(element.mozRequestFullScreen) {
        element.mozRequestFullScreen();
    } else if(element.msRequestFullscreen){
        element.msRequestFullscreen();
    } else if(element.oRequestFullscreen){
        element.oRequestFullscreen();
    }
    else if(element.webkitRequestFullscreen)
    {
        element.webkitRequestFullScreen();
    }else{

        var docHtml  = document.documentElement;
        var docBody  = document.body;
        var videobox  = document.getElementById('box');
        var  cssText = 'width:100%;height:100%;overflow:hidden;';
        docHtml.style.cssText = cssText;
        docBody.style.cssText = cssText;
        videobox.style.cssText = cssText+';'+'margin:0px;padding:0px;';
        document.IsFullScreen = true;

    }
}
//退出全屏
function exitFullscreen()
{
    var boxs=document.getElementById('box').style;
    boxs.height='50%';
    boxs.width='50%';
    //改变全屏按钮样式
    $('.video-full').html('&#xe652;');
    if (document.exitFullscreen) {
        document.exitFullscreen();
    } else if (document.msExitFullscreen) {
        document.msExitFullscreen();
    } else if (document.mozCancelFullScreen) {
        document.mozCancelFullScreen();
    } else if(document.oRequestFullscreen){
        document.oCancelFullScreen();
    }else if (document.webkitExitFullscreen){
        document.webkitExitFullscreen();
    }else{
        var docHtml  = document.documentElement;
        var docBody  = document.body;
        var videobox  = document.getElementById('box');
        docHtml.style.cssText = "";
        docBody.style.cssText = "";
        videobox.style.cssText = "";
        document.IsFullScreen = false;
    }
}
//全屏按钮点击事件
document.getElementById('fullScreenBtn').addEventListener('click',function(){
    launchFullscreen(document.getElementById('box'));
    //判断浏览器是否处于全屏
    if(invokeFieldOrMethod(document,'FullScreen') || invokeFieldOrMethod(document,'IsFullScreen') || document.IsFullScreen)
    {
        exitFullscreen();
    }

},false);
// 监听正常视频全屏改变，方法内判断，如果是全屏切换消失，则还原容器高度
document.addEventListener("fullscreenchange", function (e) {
    if(!e.currentTarget.IsFullScreen){
        var boxs=document.getElementById('box').style;
        boxs.height='50%';
        boxs.width='50%';
    }
}, false);
// 监听moz视频全屏改变，方法内判断，如果是全屏切换消失，则还原容器高度
document.addEventListener("mozfullscreenchange", function (e) {
    if(!e.currentTarget.mozIsFullScreen){
        var boxs=document.getElementById('box').style;
        boxs.height='50%';
        boxs.width='50%';
    }
}, false);
// 监听webkit视频全屏改变，方法内判断，如果是全屏切换消失，则还原容器高度
document.addEventListener("webkitfullscreenchange", function (e) {
    if(!e.currentTarget.webkitIsFullScreen){
        var boxs=document.getElementById('box').style;
        boxs.height='50%';
        boxs.width='50%';
    }
}, false);

