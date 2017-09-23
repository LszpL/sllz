<?php $__env->startSection('content'); ?>
<div class="tpl-content-wrapper">
            <div class="tpl-content-page-title">
                推荐位管理
            </div>
            <ol class="am-breadcrumb">
                <li><a href="#" class="am-icon-home">首页</a></li>
                <li><a href="#">推荐位管理</a></li>
                <li class="am-active">添加</li>
            </ol>
</div>
            <div class="tpl-portlet-components">
                <div class="portlet-title">
                    <div class="caption font-green bold">
                         添加推荐位
                    </div>
                   <!--  <div class="tpl-portlet-input tpl-fz-ml">
                        <div class="portlet-input input-small input-inline">
                            <div class="input-icon right">
                                <i class="am-icon-search"></i>
                                <input type="text" class="form-control form-control-solid" placeholder="搜索..."> </div>
                        </div>
                    </div> -->


                </div>
                <div class="tpl-block ">

                    <div class="am-g tpl-amazeui-form">


                        <div class="am-u-sm-12 am-u-md-9">
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
                            <form class="am-form am-form-horizontal" action="<?php echo e(url('/admin/position')); ?>" method="post" enctype="multipart/form-data">
                                <?php echo e(csrf_field()); ?>

                                <div class="am-form-group">
                                    <label  class="am-u-sm-3 am-form-label">推荐位置名称</label>
                                    <div class="am-u-sm-9">
                                        <input type="text"  placeholder="名称" name="position_name">
                                    </div>
                                </div>
                                <div class="am-form-group">
                                    <div class="am-u-sm-9 am-u-sm-push-3">
                                        <button type="submit" class="am-btn am-btn-primary">提交</button>
                                        <!-- <button type="button" class="am-btn am-btn-primary" onclick="window.history.back();location.reload();">返回</button> -->
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>