<?php $__env->startSection('content'); ?>
    <div class="tpl-content-wrapper">
            <div class="tpl-content-page-title">
                视频 分类组件
            </div>
            <ol class="am-breadcrumb">
                <li><a href="#" class="am-icon-home">首页</a></li>
                <li><a href="#">分类</a></li>
                <li class="am-active">内容</li>
            </ol>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>