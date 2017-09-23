<?php $__env->startSection('content'); ?>

<div class="tpl-content-wrapper">

            <div class="tpl-content-page-title">
                管理员管理
            </div>
            <ol class="am-breadcrumb">
                <li><a href="#" class="am-icon-home">首页</a></li>
                <li><a href="#">管理员管理</a></li>
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
                        <form class="am-form" action="<?php echo e(url('admin/admin/index')); ?>" method="get">
                        <div class="am-u-sm-12 am-u-md-3">
                            <div class="am-form-group">
                                <select  name="auth">
	                                <option value=""
	                                <?php if($input==''): ?>
										selected="selected"
									<?php endif; ?>
			                    	>所有管理员</option>
						            <option value="超级管理员" 
				                    <?php if($input=='超级管理员'): ?>
										selected="selected"
									<?php endif; ?>
			                    	>超级管理员</option>
						            <option value="普通管理员" 
				                    <?php if($input=='普通管理员'): ?>
										selected="selected"
									<?php endif; ?>
			                    	>普通管理员</option>
					            </select>
                            </div>
                        </div>
                        <div class="am-u-sm-12 am-u-md-3">
                            <div class="am-input-group am-input-group-sm">
                                <input type="text" class="am-form-field" placeholder="管理员名称" name="keywords" value="<?php echo e($keywords); ?>">
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
                                            <th class="table-title">姓名</th>
                                            <th class="table-type">权限</th>
                                            <th class="table-author am-hide-sm-only">头像</th>
                                            <th class="table-date am-hide-sm-only">修改日期</th>
                                            <th class="table-set">操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($v->admin_id); ?></td>
                                            <td><?php echo e($v->admin_name); ?></td>
                                            <td><?php echo e($v->admin_auth); ?></td>
                                            <?php if(empty($v->admin_face)): ?>
                                            <td><img src="<?php echo e(asset('/admin/assets/img/user01.png')); ?>" width="40" height="40"></td>
                                            <?php else: ?>
                                            <td><img src="<?php echo e(url('/uploads')); ?>/<?php echo e($v->admin_face); ?>" width="40" height="40" /></td>
                                            <?php endif; ?>
                                            <td><?php echo e($v->admin_time); ?></td>
                                            <td>
                                                <div class="am-btn-toolbar">
                                                    <div class="am-btn-group am-btn-group-xs">
                                                    	<a href="<?php echo e(url('/admin/admin/edit')); ?>/<?php echo e($v->admin_id); ?>?page=<?php echo e($request['page']); ?>">
                                                        <button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span>编辑</button></a>
                                                        <?php if($v->admin_name!=session('user')->admin_name): ?>
                                                        <!-- <a href="<?php echo e(url('/admin/admin/delete')); ?>/<?php echo e($v->admin_id); ?>" onclick="return confirm('确定要删除吗?')"> -->
                                                        <a href="javascript:;" onclick="del(<?php echo e($v->admin_id); ?>)">
                                                        <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span>删除</button></a>
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
function del(admin_id){
     //询问框
            layer.confirm('是否确认删除？', {
                btn: ['确定','取消'] //按钮
            }, function(){
//        $.post(url,data,function(){});
                $.post("<?php echo e(url('admin/admin/delete')); ?>/"+admin_id,{'_method':'post','_token':"<?php echo e(csrf_token()); ?>"},function(data){
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>