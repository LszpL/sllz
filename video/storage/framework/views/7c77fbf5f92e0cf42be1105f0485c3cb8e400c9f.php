<?php $__env->startSection('content'); ?>
<div class="tpl-content-wrapper">
            <div class="tpl-content-page-title">
                管理员管理
            </div>
            <ol class="am-breadcrumb">
                <li><a href="#" class="am-icon-home">首页</a></li>
                <li><a href="#">用户管理</a></li>
                <li class="am-active">列表</li>
            </ol>
</div>
            <div class="tpl-portlet-components">
                <div class="portlet-title">
                    <div class="caption font-green bold">
                     列表
                    </div>
                </div>
               <!-- 提示信息 -->
                                <div style="display:none;">
                                    <?php if(session('info')): ?>
                                    <p id="session"><?php echo e(session('info')); ?></p>
                                    <?php endif; ?>
                                </div> 
                                <!-- 验证信息 -->
                                <?php if(count($errors) > 0): ?>
                                    <div class="alert alert-danger" style="display:none;">
                                        <ul>
                                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li class= "info" ><?php echo e($error); ?></li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </div>
                                <?php endif; ?>
                <div class="tpl-block">
                    <div class="am-g">
                        <div class="am-u-sm-12 am-u-md-6">
                         
                        </div>
                        <form class="am-form" action="<?php echo e(url('admin/user/index')); ?>" method="get">
                        <div class="am-u-sm-12 am-u-md-3">
                            <div class="am-form-group">
                                <select  name="auth">
	                                <option value=""
	                                <?php if($input==''): ?>
										selected="selected"
									<?php endif; ?>
			                    	>全部</option>
						            <option value="普通用户" 
				                    <?php if($input=='普通用户'): ?>
										selected="selected"
									<?php endif; ?>
			                    	>普通用户</option>
						            <option value="会员用户" 
				                    <?php if($input=='会员用户'): ?>
										selected="selected"
									<?php endif; ?>
			                    	>会员用户</option>
					            </select>
                            </div>
                        </div>
                        <div class="am-u-sm-12 am-u-md-3">
                            <div class="am-input-group am-input-group-sm">
                                <input type="text" class="am-form-field" placeholder="用户名称" name="keywords" value="<?php echo e($keywords); ?>">
                                <span class="am-input-group-btn">
            					<button class="am-btn  am-btn-default am-btn-success tpl-am-btn-success am-icon-search" type="submit"></button>
          						</span>
                            </div>
                        </div>
                        </form>
                    </div>
                    <div class="am-g">
                        <div class="am-u-sm-12">
                            
                                <table class="am-table am-table-striped am-table-hover table-main">
                                    <thead>
                                        <tr>
                                            <th class="table-id">ID</th>
                                            <th class="table-title">登录名</th>
                                            <th class="table-type">权限</th>
                                            <th class="table-author am-hide-sm-only">状态</th>
                                            <th class="table-date am-hide-sm-only">注册日期</th>
                                            <th class="table-date am-hide-sm-only">IP地址</th>
                                            <th class="table-set">操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($v->login_id); ?></td>
                                            <td><?php echo e($v->login_name); ?></td>
                                            <td><?php echo e($v->login_auth); ?></td>
                                            <td><?php echo e($v->login_status); ?></td>
                                            <td><?php echo e($v->login_time); ?></td>
                                            <td><?php echo e($v->login_ip); ?></td>
                                            <td>
                                                <div class="am-btn-toolbar">
                                                    <div class="am-btn-group am-btn-group-xs">
                                                    <?php if($v->login_auth=='普通用户'): ?>
                                                    	<!-- <a href="<?php echo e(url('/admin/user/sq')); ?>/<?php echo e($v->login_id); ?>/<?php echo e($v->login_auth); ?>"> -->
                                                        <a href="javascript:;" onclick="sq(<?php echo e($v->login_id); ?>)">
                                                        <button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span>开通会员</button></a>
                                                    <?php else: ?>
                                                        <a href="javascript:;" onclick="sq(<?php echo e($v->login_id); ?>)">
                                                        <button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span>普通用户</button></a>
                                                    <?php endif; ?>
                                                    <?php if($v->login_status=='正常登录'): ?>
                                                        <!-- <a href="<?php echo e(url('/admin/user/fh')); ?>/<?php echo e($v->login_id); ?>/<?php echo e($v->login_status); ?>" onclick="return confirm('确定要停封此号吗?')"> -->
                                                        <a href="javascript:;" onclick="fh(<?php echo e($v->login_id); ?>)">
                                                        <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span>封号</button></a>
                                                    <?php else: ?>
                                                        <a href="javascript:;" onclick="fh(<?php echo e($v->login_id); ?>)">
                                                        <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span>解封</button></a>
                                                    <?php endif; ?>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                                <?php echo $data->appends($request)->render(); ?>

                        </div>

                    </div>
                </div>
                <div class="tpl-alert"></div>
            </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script type="text/javascript">
        function sq(admin_id){
            //询问框
            layer.confirm('是否确认执行此操作？', {
                btn: ['确定','取消'] //按钮
            }, function(){
                $.post("<?php echo e(url('admin/user/sq')); ?>/"+admin_id,{'_token':"<?php echo e(csrf_token()); ?>"},function(data){
                    console.log(data);
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
        function fh(admin_id){
            //询问框
            layer.confirm('是否确认执行此操作？', {
                btn: ['确定','取消'] //按钮
            }, function(){
                $.post("<?php echo e(url('admin/user/fh')); ?>/"+admin_id,{'_token':"<?php echo e(csrf_token()); ?>"},function(data){
                    console.log(data);
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>