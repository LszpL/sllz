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
                        <span class="am-icon-code"></span> 视频添加
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
							

                            <form class="am-form am-form-horizontal" action="<?php echo e(url('admin/video/doadd')); ?>" id="art_form" method="post" enctype="mulitpart/form-data">
								
								<?php echo e(csrf_field()); ?>

								
								<div class="am-form-group">
	                               
                           		</div>
	
                                <div class="am-form-group">
                                    <label for="user-name" class="am-u-sm-3 am-form-label">视频 / 分类</label>
                                    <div class="am-u-sm-9" >
                                        <select data-am-selected="{btnSize: 'sm'}" name="type_id"  >
                                          <option value="0" disabled >全部</option>	

                                        <?php $__currentLoopData = $type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		                                  <option value="<?php echo e($item->type_id); ?>" ><?php echo e($item->type_name); ?></option>

		                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		                                </select>
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-email" class="am-u-sm-3 am-form-label">视频 / 名称</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" name="video_name" placeholder="输入你要添加的视频名称 " value="">
                                       
                                    </div>
                                </div>

									
								<div class="am-form-group">
                                    <label for="user-email" class="am-u-sm-3 am-form-label">视频 / 路径 </label>
                                    <div class="am-u-sm-9">
                                        <input type="text" name="video_url" placeholder="输入视频的url地址 " value="">
                                        <small>请在云仓库复制外链</small>
                                    </div>
                                </div>
                               
                                 <div class="am-form-group">
                                    <label for="user-phone" class="am-u-sm-3 am-form-label">发布人 <span class="tpl-form-line-small-title">Author</span></label>
                                    <div class="am-u-sm-9">
                                        <select data-am-selected="{searchBox: 1}" name="admin_name">
                                         
                                          <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>	
                                          <option > <?php echo e($item->admin_name); ?></option>
                                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        
                                        </select>
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-email" class="am-u-sm-3 am-form-label">视频 / 时长</label>
                                    <div class="am-u-sm-9">
                                 		<input type="time" name="video_time" placeholder="输入你要添加的类别 " value="" style="width:120px" >
                                    </div>
                                </div>

                               	<div class="am-form-group">
                                    <label for="user-email" class="am-u-sm-3 am-form-label">视频 / 标签</label>
                                    <div class="am-u-sm-9"  style="width:544px; color: #999;font-weight: normal;">
                                 		
											<?php $__currentLoopData = $label; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<label style="height:28px;"  ><input type="checkbox" name="video_labels[]" value="<?php echo e($item->label_name); ?>" > <font class="am-form-label" ><?php echo e($item->label_name); ?></font> </label>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
                                 		
                                    </div>
                                </div>


                                <div class="am-form-group">
                                    <label for="user-email" class="am-u-sm-3 am-form-label">发布时间 <span class="tpl-form-line-small-title">Time</span></label>
                                    <div class="am-u-sm-9">
                                        <input type="text" class="am-form-field tpl-form-no-bg" placeholder="发布时间" data-am-datepicker="" readonly/>
                                        
                                    </div>
                                </div>
								
                                <div class="am-form-group">
                                    <label for="user-intro" class="am-u-sm-3 am-form-label">上线 / 下线</label>
                                    <div class="am-u-sm-9">
                                        <div class="tpl-switch">
                                          
                                            <input type="checkbox" id="one"   name="video_status" class="ios-switch bigswitch tpl-switch-btn" checked=""  value="上线"	 style="width:150px" >
                                            
                                            <div class="tpl-switch-btn-view">
                                                <div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                 <div class="am-form-group">
                                    <label for="user-weibo" class="am-u-sm-3 am-form-label">封面图 <span class="tpl-form-line-small-title">Images</span></label>
                                    <div class="am-u-sm-9">
                                        <div class="am-form-group am-form-file">
                                            
                                            <button type="button" class="am-btn am-btn-danger am-btn-sm">
    										<i class="am-icon-cloud-upload"></i> 添加视频图片</button><br>
                                           
                                           <input id="file_upload" name="file_upload" type="file" multiple="true">

                                           <input type="text" size="50" name="video_img" id="art_thumb"><br>
                                           <div class="tpl-form-file-img">
                                                <img  id="img1"  src="<?php echo e(asset('admin_temp/assets/img/a5.png')); ?>" alt="点我选择" style="height:175px">
                                           </div>
									       <!-- <input id="file_upload" name="file_upload" type="file" multiple="true">
									       <p><img id="img1" alt="上传后显示图片"  style="max-width:350px;max-height:100px;" /></p> -->
									    
                                        </div>

                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-intro" class="am-u-sm-3 am-form-label">视频 / 描述</label>
                                    <div class="am-u-sm-9">
                                        <textarea class="" rows="5" id="user-intro"  name="video_desc" value=""	 placeholder="输入分类描述"></textarea>
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
	<script type="text/javascript">



		$('#one').on('click',function(){

			if($('#one').val() == '上线'){
				$('#one').val('下线');
				
			}else{
				$('#one').val('上线');
			}
		});
		//
		//
		
            $("#file_upload").change(function () {
            	
                uploadImage();
            })
       		
       		function uploadImage() {

        //  判断是否有选择上传文件
            var imgPath = $("#file_upload").val();
            if (imgPath == "") {
                alert("请选择上传图片！");
                return;
            }
            //判断上传文件的后缀名
            var strExtension = imgPath.substr(imgPath.lastIndexOf('.') + 1);
            if (strExtension != 'jpg' && strExtension != 'gif'
                && strExtension != 'png' && strExtension != 'bmp') {
                alert("请选择图片文件");
                return;
            }
            var formData = new FormData($('#art_form')[0]);
            $.ajax({
                type: "post",
                url: "/admin/upload",
                data: formData, 
                contentType: false,
                processData: false,
                success: function(data) {
                	
                    $('#img1').attr('src','/'+data);
                    $('#art_thumb').val(data);
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    alert("上传失败，请检查网络后重试");
                }
            });
        }

        
	</script>	

<?php $__env->stopSection(); ?>



<?php echo $__env->make('admin.layouts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>