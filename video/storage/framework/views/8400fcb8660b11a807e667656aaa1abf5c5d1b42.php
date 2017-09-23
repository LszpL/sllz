<?php $__env->startSection('content'); ?>

<div class="tpl-content-wrapper">

            <div class="tpl-content-page-title">
                推荐位管理
            </div>
            <ol class="am-breadcrumb">
                <li><a href="#" class="am-icon-home">首页</a></li>
                <li><a href="#">推荐位管理</a></li>
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
                    </div>
                    <div class="am-g">
                        <div class="am-u-sm-12">
                            
                                <table class="am-table am-table-striped am-table-hover table-main">
                                    <thead>
                                        <tr>
                                            <th class="table-id">ID</th>
                                            <th class="table-title">推荐位名称</th>
                                            <th class="table-type">创建时间</th>
                                            <th class="table-type">修改时间</th>
                                            <th class="table-type">操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($v->position_id); ?></td>
                                            <td><?php echo e($v->position_name); ?></td>
                                            <td><?php echo e($v->created_at); ?></td>
                                            <td><?php echo e($v->update_at); ?></td>
                                            <td>
                                                <div class="am-btn-toolbar">
                                                    <div class="am-btn-group am-btn-group-xs">
                                                    	<a href="javascript:;" onclick="edit(<?php echo e($v->position_id); ?>)">
                                                        <button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span>编辑</button></a>
                                                        <a href="javascript:;" onclick="del(<?php echo e($v->position_id); ?>)">
                                                        <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span>删除</button></a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                        </div>

                    </div>
                </div>
                <div class="tpl-alert"></div>
            </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script type="text/javascript">

function edit(id){
            layer.prompt({title: '标签修改', formType: 0},function(val, index){
                //console.log(val);
            $.ajax({
                type:'post',
                data:{id:id,name:val,_token:'<?php echo e(csrf_token()); ?>','_method':'put' },

                url:'/admin/position/'+id,
                success:function(data){
                   layer.msg(data,{icon: 6});
                 location.href = location.href;
                 
                },
                dateType:'json'
            });    
            layer.close(index);
            
          
            });

        }
function del(position_id){
     //询问框
            layer.confirm('是否确认删除？', {
                btn: ['确定','取消'] //按钮
            }, function(){
//        $.post(url,data,function(){});
                $.post("<?php echo e(url('admin/position')); ?>/"+position_id,{'_method':'delete','_token':"<?php echo e(csrf_token()); ?>"},function(data){
                   // console.log(data.status);
                    if(data.status == 0){
                       
                        layer.msg(data.msg, {icon: 5});
                        location.href = location.href;
                    }else{
                        layer.msg(data.msg, {icon: 6});
                        location.href = location.href;
                    }
                });
            }, function(){
            });
}
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>