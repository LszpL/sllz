<?php

namespace App\Http\Middleware;

use Closure;

class Auths
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
       $route = \Route::current()->getActionName();
       // dd($route);
       if(session('admin')->admin_auth=='超级管理员'){
            $arr=['App\Http\Controllers\Admin\IndexController@index',
            'App\Http\Controllers\Admin\AdminController@add',
            'App\Http\Controllers\Admin\AdminController@insert',
            'App\Http\Controllers\Admin\AdminController@index',
            'App\Http\Controllers\Admin\AdminController@edit',
            'App\Http\Controllers\Admin\AdminController@update',
            'App\Http\Controllers\Admin\AdminController@delete',
            'App\Http\Controllers\Admin\AdminController@mima',
            'App\Http\Controllers\Admin\AdminController@upmima',
            'App\Http\Controllers\Admin\AdminController@upload',
            'App\Http\Controllers\Admin\UserController@index',
            'App\Http\Controllers\Admin\UserController@sq',
            'App\Http\Controllers\Admin\UserController@fh',
            'App\Http\Controllers\Admin\TypeController@add',
            'App\Http\Controllers\Admin\TypeController@doadd',
            'App\Http\Controllers\Admin\TypeController@index',
            'App\Http\Controllers\Admin\TypeController@edit',
            'App\Http\Controllers\Admin\TypeController@update',
            'App\Http\Controllers\Admin\TypeController@add_son',
            'App\Http\Controllers\Admin\TypeController@doadd_son',
            'App\Http\Controllers\Admin\TypeController@delete',
            'App\Http\Controllers\Admin\LabelController@add',
            'App\Http\Controllers\Admin\LabelController@doadd',
            'App\Http\Controllers\Admin\LabelController@index',
            'App\Http\Controllers\Admin\LabelController@update',
            'App\Http\Controllers\Admin\LabelController@delete',
            'App\Http\Controllers\Admin\LabelController@index',
            'App\Http\Controllers\Admin\VideoController@add',
            'App\Http\Controllers\Admin\VideoController@doadd',
            'App\Http\Controllers\Admin\VideoController@upload',
            'App\Http\Controllers\Admin\VideoController@index',
            'App\Http\Controllers\Admin\VideoController@index',
            'App\Http\Controllers\Admin\VideoController@detail',
            'App\Http\Controllers\Admin\VideoController@online',
            'App\Http\Controllers\Admin\VideoController@offline',
            'App\Http\Controllers\Admin\VideoController@pay',
            'App\Http\Controllers\Admin\VideoController@free',
            'App\Http\Controllers\Admin\VideoController@edit',
            'App\Http\Controllers\Admin\VideoController@update',
            'App\Http\Controllers\Admin\VideoController@delete',
            'App\Http\Controllers\Admin\UploadController@index',
            'App\Http\Controllers\Admin\UploadController@finish',
            'App\Http\Controllers\Admin\UploadController@defeated',
            'App\Http\Controllers\Admin\UploadController@delete',
            'App\Http\Controllers\Admin\UploadController@add',
            'App\Http\Controllers\Admin\UploadController@video',
            'App\Http\Controllers\Admin\UploadController@insert',
            'App\Http\Controllers\Admin\CommentController@index',
            'App\Http\Controllers\Admin\CommentController@delete',
            'App\Http\Controllers\Admin\VipController@index',
            'App\Http\Controllers\Admin\VipController@delete',
            'App\Http\Controllers\Admin\LinkController@index',
            'App\Http\Controllers\Admin\LinkController@update',
            'App\Http\Controllers\Admin\LinkController@delete',
            'App\Http\Controllers\Admin\LinkController@add',
            'App\Http\Controllers\Admin\LinkController@insert',
            'App\Http\Controllers\Admin\PushController@index',
            'App\Http\Controllers\Admin\PushController@add',
            'App\Http\Controllers\Admin\PushController@insert',
            'App\Http\Controllers\Admin\PushController@delete',
            'App\Http\Controllers\Admin\PushController@edit',
            'App\Http\Controllers\Admin\PushController@update',
            'App\Http\Controllers\Admin\PositionController@create',
            'App\Http\Controllers\Admin\PositionController@index',
            'App\Http\Controllers\Admin\PositionController@store',
            'App\Http\Controllers\Admin\PositionController@update',
            'App\Http\Controllers\Admin\PositionController@destroy',
            'App\Http\Controllers\Admin\ConfigController@create',
            'App\Http\Controllers\Admin\ConfigController@index',
            'App\Http\Controllers\Admin\ConfigController@store'
            ];
       }else{
            $arr = ['App\Http\Controllers\Admin\TypeController@add',
            'App\Http\Controllers\Admin\TypeController@doadd',
            'App\Http\Controllers\Admin\TypeController@index',
            'App\Http\Controllers\Admin\TypeController@edit',
            'App\Http\Controllers\Admin\TypeController@update',
            'App\Http\Controllers\Admin\TypeController@add_son',
            'App\Http\Controllers\Admin\TypeController@doadd_son',
            'App\Http\Controllers\Admin\TypeController@delete',
            'App\Http\Controllers\Admin\LabelController@add',
            'App\Http\Controllers\Admin\LabelController@doadd',
            'App\Http\Controllers\Admin\LabelController@index',
            'App\Http\Controllers\Admin\LabelController@update',
            'App\Http\Controllers\Admin\LabelController@delete',
            'App\Http\Controllers\Admin\LabelController@index',
            'App\Http\Controllers\Admin\VideoController@add',
            'App\Http\Controllers\Admin\VideoController@doadd',
            'App\Http\Controllers\Admin\VideoController@upload',
            'App\Http\Controllers\Admin\VideoController@index',
            'App\Http\Controllers\Admin\VideoController@index',
            'App\Http\Controllers\Admin\VideoController@detail',
            'App\Http\Controllers\Admin\VideoController@online',
            'App\Http\Controllers\Admin\VideoController@offline',
            'App\Http\Controllers\Admin\VideoController@pay',
            'App\Http\Controllers\Admin\VideoController@free',
            'App\Http\Controllers\Admin\VideoController@edit',
            'App\Http\Controllers\Admin\VideoController@update',
            'App\Http\Controllers\Admin\VideoController@delete',
            'App\Http\Controllers\Admin\UploadController@index',
            'App\Http\Controllers\Admin\UploadController@finish',
            'App\Http\Controllers\Admin\UploadController@defeated',
            'App\Http\Controllers\Admin\UploadController@delete',
            'App\Http\Controllers\Admin\UploadController@add',
            'App\Http\Controllers\Admin\UploadController@video',
            'App\Http\Controllers\Admin\UploadController@insert',
            'App\Http\Controllers\Admin\CommentController@index',
            'App\Http\Controllers\Admin\CommentController@delete',
            ];
       }
       $user = \DB::table('users_admin')->where('admin_id',session('admin')->admin_id)->first()->admin_auth;
       session('admin')->admin_auth=$user;
       if(in_array($route,$arr)){
             return $next($request);
         }else{
             //        四  如果用户没有权限，返回一个提示没有权限的页面
             return redirect('admin/auth');
         }
        return $next($request);
    }
}
