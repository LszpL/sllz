<?php $__env->startSection('content'); ?>
        
	 <div class="tpl-content-wrapper">
            <div class="tpl-content-page-title">
                视频 分类列表
            </div>
            <ol class="am-breadcrumb">
                <li><a href="#" class="am-icon-home">首页</a></li>
                <li><a href="#">分类</a></li>
                <li class="am-active">内容</li>
            </ol>
    </div>


    <div class="tpl-portlet-components">
                <div class="portlet-title">
                    <div class="caption font-green bold">
                        <span class="am-icon-code"></span>分类列表
                    </div>
                    


                </div>
                <div class="tpl-block">
                    <div class="am-g">
                        
                        <div class="am-u-sm-12 am-u-md-3">
                            <div class="am-form-group">
                               <select data-am-selected="{btnSize: 'sm'}" name="parent_id"  >
                                          <option value="0">根类</option> 

                                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <option value="<?php echo e($item->type_id); ?>" ><?php echo e($item->type_name); ?></option>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                            </div>
                        </div>
                        <div class="am-u-sm-12 am-u-md-3">
                            <div class="am-input-group am-input-group-sm">
                              <input type="text" class="am-form-field">
                                <span class="am-input-group-btn">
                                    <button class="am-btn  am-btn-default am-btn-success tpl-am-btn-success am-icon-search" type="button"></button>
                                  </span>
                            </div>
                        </div>
                    </div>
                    <div class="am-g">
                        <div class="am-u-sm-12">
                            <form class="am-form">
                                <table class="am-table am-table-striped am-table-hover table-main">
                                    <thead>
                                        <tr>
                                            
                                            <th class="table-id">分类ID</th>
                                            <th class="table-id">父类ID</th>
                                            <th class="table-title">分类名称</th>
                                            <th class="table-type">分类描述</th>
                                            <th class="table-author am-hide-sm-only">分类路径</th>
                                            <th class="table-date am-hide-sm-only">添加日期</th>
                                            <th class="table-set">操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <tr>
                                            
                                            <td><?php echo e($item->type_id); ?></td>
                                            <td><?php echo e($item->parent_id); ?></td>
                                            <td><?php echo e($item->type_name); ?></td>
                                            <td><?php echo e($item->type_desc); ?></td>
                                            <td class="am-hide-sm-only"><?php echo e($item->path); ?></td>
                                            <td class="am-hide-sm-only"><?php echo e($item->created_at); ?></td>
                                            <td>
                                                <div class="am-btn-toolbar">
                                                    <div class="am-btn-group am-btn-group-xs">
                                                       
                                                            <button  class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> <a href="<?php echo e(url('admin/type/edit')); ?>/<?php echo e($item->type_id); ?>"> 编辑</a></button>
                                                        
                                                        
                                                            <button  class="am-btn am-btn-default am-btn-xs am-hi de-sm-only"><span class="am-icon-copy"></span><a  href="<?php echo e(url('admin/type/add_son')); ?>/<?php echo e($item->type_id); ?>"> 加类</a></button>
                                                       
                                                        <a href="<?php echo e(url('admin/type/delete')); ?>/<?php echo e($item->type_id); ?>">
                                                            <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span><a  href="<?php echo e(url('admin/type/delete')); ?>/<?php echo e($item->type_id); ?>"> 删除</button>
                                                          
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
                                    </tbody>
                                </table>
                            </form>
                        </div>

                    </div>
                </div>
                <div class="tpl-alert"></div>
            </div>
            <!-- 信息 -->
              
 <?php $__env->stopSection(); ?>
 <?php $__env->startSection('js'); ?>
 ##parent-placeholder-93f8bb0eb2c659b85694486c41717eaf0fe23cd4##
 
 <?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>