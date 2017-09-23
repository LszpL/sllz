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
  
   <div class="tpl-portlet-components" style="height:1064px" >
                <div class="portlet-title">
                    <div class="caption font-green bold">
                        <span class="am-icon-code"></span> 分类添加
                    </div>
                    <div class="tpl-portlet-input tpl-fz-ml">
                        <div class="portlet-input input-small input-inline">
                            <div class="input-icon right">
                                <i class="am-icon-search"></i>
                                <input type="text" class="form-control form-control-solid" placeholder="搜索...">
                            </div>
                        </div>
                    </div>


                </div>
                <div class="tpl-block ">

                    <div class="am-g tpl-amazeui-form">

						
                        <div class="am-u-sm-12 am-u-md-9">
                            
                            <form class="am-form am-form-horizontal" action="<?php echo e(url('admin/type/doadd')); ?>" method="post">
								<?php echo e(csrf_field()); ?>

								<div class="am-form-group">
	                               
                           		</div>

                                <div class="am-form-group">
                                    <label for="user-name" class="am-u-sm-3 am-form-label">视频 / 父类</label>
                                    <div class="am-u-sm-9">
                                        <select data-am-selected="{btnSize: 'sm'}" name="parent_id"  >
                                          <option value="0">根类</option>	
                                        
                                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		                                  <option value="<?php echo e($item->type_id); ?>" 

                                        <?php if($item->type_id == old('parent_id')): ?>
                                                
                                            selected == selected
                                        <?php endif; ?>

                                          ><?php echo e($item->type_name); ?></option>
                                           
		                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

		                                </select>
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-email" class="am-u-sm-3 am-form-label">添加 / 类别</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" name="type_name" placeholder="输入你要添加的类别 " value="<?php echo e(old('type_name')); ?>">
                                       
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-intro" class="am-u-sm-3 am-form-label">类别 / 描述</label>
                                    <div class="am-u-sm-9">
                                        <textarea class="" rows="5" id="user-intro"  name="type_desc" value="<?php echo e(old('type_desc')); ?>"	 placeholder="输入分类描述"></textarea>
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <div class="am-u-sm-9 am-u-sm-push-3">
                                        <button type="submit" class="am-btn am-btn-primary">更新提交</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
##parent-placeholder-93f8bb0eb2c659b85694486c41717eaf0fe23cd4##    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>