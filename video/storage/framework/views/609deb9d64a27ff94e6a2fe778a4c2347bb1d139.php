<?php $__env->startSection('content'); ?>
    <div class="tpl-content-wrapper">
        <div class="tpl-content-page-title">
            Amaze UI 评论模块
        </div>
        <ol class="am-breadcrumb">
            <li><a href="#" class="am-icon-home">首页</a></li>
            <li><a href="#">评论模块</a></li>
            <li class="am-active">评论列表</li>
        </ol>
        <div class="tpl-portlet-components">
            <div class="portlet-title">
                <div class="caption font-green bold">
                    <span class="am-icon-code"></span> 评论列表
                </div>


            </div>
            <div class="tpl-block">
                <div class="am-g">

                    <div class="am-u-sm-12 am-u-md-12">
                        <form action="<?php echo e(url('admin/position/push/index')); ?>" method="get">
                            <div class="am-u-sm-12 am-u-md-12">
                                <div class="am-form-group">
                                    <select data-am-selected="{btnSize: 'sm'}" name="position_id" style="display: none;">
                                        <option value="0">所有推荐位</option>
                                        <?php $__currentLoopData = $position; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $po): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option <?php if($po->position_id == $request['position_id']): ?> selected <?php endif; ?>  value="<?php echo e($po->position_id); ?>"><?php echo e($po->position_name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <button type="submit" class="am-btn am-btn-primary tpl-btn-bg-color-success ">提交</button>
                                </div>

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
                                    <th class="table-title">推荐位</th>
                                    <th class="table-type">视频名</th>
                                    <th class="table-type">播放量</th>
                                    <th class="table-type">评论数</th>
                                    <th class="table-author am-hide-sm-only">添加时间</th>
                                    <th class="table-set">操作</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><a href="#"><?php echo e($item->push_id); ?></a></td>
                                        <td class="am-hide-sm-only"><?php echo e($item->position_name); ?></td>
                                        <td class="am-hide-sm-only"><?php echo e($item->video_name); ?></td>
                                        <td class="am-hide-sm-only"><?php echo e($item->video_count); ?></td>
                                        <td class="am-hide-sm-only"><?php echo e($item->video_comments); ?></td>
                                        <td><?php echo e($item->created_at); ?></td>
                                        <td>
                                            <div class="am-btn-toolbar">
                                                <div class="am-btn-group am-btn-group-xs">
                                                    <a id="del" class="am-btn am-btn-default am-btn-xs am-text-secondary" href="<?php echo e(url('/admin/position/push/edit\/')); ?><?php echo e($item->push_id); ?>/<?php echo e($item->position_name); ?>"><span class="am-icon-pencil-square-o"></span> 编辑</a>
                                                    <a class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" href="javascript:;" onclick="del(<?php echo e($item->push_id,$data); ?>);"><span class="am-icon-trash-o"></span> 删除</a>
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
                $.post('<?php echo e(url('admin/position/push/delete')); ?>/'+id,{'_token':'<?php echo e(csrf_token()); ?>','_method':'post'},function(data){
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
        //验证信息
        var str = '';
        if(typeof($('.info').html()) == 'string' && $('.info').html() !== null    ){
            $('.info').each(function(i,n){
                str += $(n).html()+'<br>';
                layer.alert(str, {icon: 8});
            });
        }

        //提示信息
        if(typeof($('#session').html()) == 'string' &&  $('#session').html()  )
        {
            layer.alert($('#session').html(), {icon: 8});
        }
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>