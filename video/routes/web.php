<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// ====================================================后台==============================================
Route::get('admin/auth',function(){
    return view('admin.auth',['title'=>'权限限制']);
});


Route::get('admin/login','Admin\LoginController@login');

//验证码
Route::get('/code/captcha/{tmp}', 'Admin\LoginController@captcha');

Route::post('admin/dologin','Admin\LoginController@doLogin');

// ====================中间件============================
Route::group(['prefix'=>'admin','namespace'=>'Admin','middleware'=>['Login','Auths']],function(){
	//后台首页的路由
Route::get('index','IndexController@index');

//管理员管理模块
Route::get('admin/add','AdminController@add');
Route::post('admin/insert','AdminController@insert');
Route::get('admin/edit/{id}','AdminController@edit');
Route::post('admin/update','AdminController@update');
Route::post('admin/delete/{id}','AdminController@delete');
Route::get('admin/index','AdminController@index');
Route::get('admin/mima','AdminController@mima');
Route::post('admin/upmima','AdminController@upmima');
Route::post('admin/upload','AdminController@upload');

//用户管理模块
Route::get('user/index','UserController@index');
//会员状态
Route::post('user/sq/{id}','UserController@sq');
//账号状态
Route::post('user/fh/{id}','UserController@fh');




 //分类模块
 Route::get('type/add','TypeController@add');
 Route::post('type/doadd','TypeController@doadd');
 Route::get('type/index','TypeController@index');
 Route::get('type/edit/{id}','TypeController@edit');
 Route::post('type/update/{id}','TypeController@update');
 Route::get('type/add_son/{id}','TypeController@add_son');	 
 Route::post('type/doadd_son','TypeController@doadd_son');
 Route::get('type/delete/{id}','TypeController@delete');	


 //标签模板
Route::get('label/add','LabelController@add');
Route::post('label/doadd','LabelController@doadd');
Route::get('label/index','LabelController@index');
Route::post('label/update','LabelController@update');
Route::post('label/delete','LabelController@delete');
Route::post('label/index','LabelController@index');

//视频模块

Route::get('video/add','VideoController@add');
Route::post('video/doadd','VideoController@doadd');
Route::post('upload','VideoController@upload');
Route::get('video/index','VideoController@index');
Route::post('video/index','VideoController@index');
Route::get('video/detail/{id}','VideoController@detail');
Route::post('video/online','VideoController@online');
Route::post('video/offline','VideoController@offline');

Route::post('video/pay','VideoController@pay');
Route::post('video/free','VideoController@free');

Route::get('video/edit/{id}','VideoController@edit');
Route::post('video/update/{id}','VideoController@update');
Route::get('video/delete/{id}','VideoController@delete');


//推荐位
Route::resource('position','PositionController');

//个人用户视频上传列表
Route::get('upload/index','UploadController@index');
Route::get('upload/finish/{id}','UploadController@finish');
Route::get('upload/defeated/{id}','UploadController@defeated');
Route::get('upload/delete/{id}','UploadController@delete');
//个人用户用户视频添加
Route::get('upload/add','UploadController@add');
Route::post('upload/video','UploadController@video');
Route::post('upload/insert','UploadController@insert');

//网站配置模块的路由
Route::resource('config','ConfigController');



 //评论列表路由
Route::get('comment','CommentController@index');
 // 评论删除路由
Route::post('comment/delete/{id}','CommentController@delete');

// vip用户列表路由
Route::get('user/vip','VipController@index');

Route::post('user/vip/delete/{id}','VipController@delete');

// 友情链接
// 连接列表
Route::get('link','LinkController@index');

// 更新信息
Route::post('link/update','LinkController@update');
// 删除
Route::post('link/delete/{id}','LinkController@delete');

// 添加
Route::get('link/add','LinkController@add');
Route::post('link/insert','LinkController@insert');

// 推广
Route::get('position/push/index','PushController@index');
Route::get('position/push/add/{id}','PushController@add');
Route::post('position/push/insert','PushController@insert');
Route::post('position/push/delete/{id}','PushController@delete');
Route::get('position/push/edit/{id}/{name}','PushController@edit');
Route::post('position/push/update','PushController@update');
});


// 退出
Route::get('/admin/logout','Admin\LoginController@logout');


// ===========================================前台======================================================
// 登录
Route::get('home/login','Home\LoginController@login');

//验证码
Route::get('/code/captcha/{tmp}', 'Home\LoginController@captcha');

Route::post('home/dologin','Home\LoginController@dologin');

Route::get('home/zhuce','Home\LoginController@zhuce');


Route::post('home/dozhuce','Home\LoginController@dozhuce');

//注册手机验证码
Route::post('phone','Home\LoginController@index');

//忘记密码
Route::get('home/forget','Home\LoginController@forget');
//忘记密码验证码
Route::post('fphone','Home\LoginController@findex');



Route::post('home/doforget','Home\LoginController@doforget');


//搜索

Route::get('home/search','home\LoginController@search');


// 退出
Route::get('home/tuichu','home\LoginController@tuichu');

// Route::get('xsearch','Home\LoginController@xsearch');
//前台首页
Route::get('/home/index/index','home\IndexController@index');
 // Route::get('/home/index/more','home\IndexController@more');
 
Route::get('/home/index/onelist/{name}/{id}','home\OneListController@onelist');
Route::get('/home/index/twolist/{name}/{id}','home\TwoListController@twolist');
Route::get('/home/index/twolist/{name}/{id}/{label}','home\TwoListController@labelTwolist');


Route::get('home/search','home\LoginController@search');

// Route::get('xsearch','Home\LoginController@xsearch');

Route::get('/home/index/index','home\IndexController@index');
 // Route::get('/home/index/more','home\IndexController@more');
 
Route::get('/home/index/onelist/{name}/{id}','home\OneListController@onelist');
Route::get('/home/index/twolist/{name}/{id}','home\TwoListController@twolist');
Route::get('/home/index/twolist/{name}/{id}/{label}','home\TwoListController@labelTwolist');





// 前台

Route::get('/home/play/index','Home\PlayController@index');
Route::post('/home/play/comment','Home\PlayController@comment');

//
//
Route::group(['prefix'=>'home','namespace'=>'Home','middleware'=>['User']],function(){
	Route::get('user/history','UserController@history');
	Route::post('user/history/delhistory','UserController@delhistory');
	//前台用户个人中心
	//前台个人首页
	Route::get('user/home','UserController@home');
	//首页个人信息
	Route::get('user/message','UserController@message');
	//首页个人信息更新
	Route::post('user/domessage','UserController@domessage');
	//首页上传
	Route::get('user/add','UserController@add');
	Route::post('user/video','UploadController@video');
	Route::post('user/upload','UploadController@upload');
	Route::get('user/myupload','UploadController@myupload');
	//用户首页头像
	Route::get('user/face','UserController@face');
	Route::post('user/myface','UserController@myface');
	Route::post('user/imgs','UserController@imgs');
	//用户上传管理
	Route::get('user/set','UserController@set');
	Route::post('user/setedit/{id}','UserController@setedit');
});


