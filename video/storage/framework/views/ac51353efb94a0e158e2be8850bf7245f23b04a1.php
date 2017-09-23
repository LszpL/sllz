<?php $__env->startSection('content'); ?>
    <div class="tpl-content-wrapper">
        <div class="tpl-content-page-title">
            Amaze UI 用户模块
        </div>
        <ol class="am-breadcrumb">
            <li><a href="#" class="am-icon-home">首页</a></li>
            <li><a href="#">用户模块</a></li>
            <li class="am-active">会员列表</li>
        </ol>
        <div class="tpl-portlet-components">
            <div class="portlet-title">
                <div class="caption font-green bold">
                    <span class="am-icon-code"></span> 会员列表
                </div>


            </div>
            <div class="tpl-block">
                <div class="am-g">
                    <div class="am-u-sm-12 am-u-md-6" style="height: 33px;">
                        <?php if(session('info')): ?>
                            <div id="alertError" class="am-u-sm-12 alert bg-success alert-danger alert-dismissible" style="padding:0;height: 100%;line-height: 33px;">
                                <?php echo e(session('info')); ?>

                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="am-u-sm-12 am-u-md-3">
                        <form action="<?php echo e(url('admin/user/vip')); ?>" method="get">

                            <div class="am-input-group am-input-group-sm">
                                <input type="text" class="am-form-field" name="keywords" placeholder="通过用户名搜索" value="<?php if(!empty($request['keywords'])): ?><?php echo e($request['keywords']); ?><?php endif; ?>">
                                <span class="am-input-group-btn">
            <button class="am-btn  am-btn-default am-btn-success tpl-am-btn-success am-icon-search" type="submit"></button>
          </span>
                            </div>
                        </form>

                    </div>
                </div>
                <div class="am-g">
                    <div class="am-u-sm-12">
                        <form class="am-form">
                            <table class="am-table am-table-striped am-table-hover table-main">
                                <thead>
                                <tr>
                                    <th class="table-id">ID</th>
                                    <th class="table-title">用户名</th>
                                    <th class="table-type">开通时间</th>
                                    <th class="table-author am-hide-sm-only">到期时间</th>
                                    <th class="table-set">操作</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($item->vip_id); ?></td>
                                    <td><a href="#"><?php echo e($item->users_name); ?></a></td>
                                    <td><?php echo e($item->begin_time); ?></td>
                                    <td class="am-hide-sm-only"><?php echo e($item->end_time); ?></td>
                                    <td>
                                        <div class="am-btn-toolbar">
                                            <div class="am-btn-group am-btn-group-xs">
                                                <a id="del" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" href="javascript:;" onclick="del('<?php echo e($item->vip_id); ?>');"><span class="am-icon-trash-o"></span> 删除</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                            <div class="page_list">
                                <?php echo e($data->appends($request)->render()); ?>

                            </div>
                        </form>
                    </div>

                </div>
            </div>
            <div class="tpl-alert"></div>
        </div>
    </div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script>
        $("#alertError").fadeOut(3000);
        function del(id) {
                swal({
                    title: "您确定要删除吗？",
                    text: "您确定要删除这条数据？",
                    type: "warning",
                    showCancelButton: true,
                    closeOnConfirm: false,
                    confirmButtonText: "是的，我要删除",
                    confirmButtonColor: "#ec6c62"
                }, function() {
                    $.post('<?php echo e(url('admin/user/vip/delete')); ?>/'+id,{'_token':'<?php echo e(csrf_token()); ?>','_method':'post'},function(data){
                        if(data.state == 0){
                            swal("操作成功!", "已成功删除数据！", "success");
                            $('.confirm').on('click',function(){
                                location.href = location.href;
                            })
                        }else{
                            swal("OMG", "删除操作失败了!", "error");
                            $('.confirm').on('click',function(){
                                location.href = location.href;
                            })
                        }

                    })
                },function(){

                });
        }

    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>