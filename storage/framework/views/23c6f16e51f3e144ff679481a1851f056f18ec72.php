
<?php $__env->startSection('header_scripts'); ?>
<link href="<?php echo e(CSS); ?>ajax-datatables.css" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>


<div id="page-wrapper">
			<div class="container-fluid">
				<!-- Page Heading -->
				<div class="row">
					<div class="col-lg-12">
						<ol class="breadcrumb">
							<li><a href="<?php echo e(PREFIX); ?>"><i class="mdi mdi-home"></i></a> </li>
							<li><?php echo e($title); ?></li>
						</ol>
					</div>
				</div>
								
				<!-- /.row -->
				<div class="panel panel-custom">
					<div class="panel-heading">
						
						
						<h1><?php echo e($title); ?></h1>
					</div>
					<div class="panel-body packages">
						<div> 
						<table class="table table-striped table-bordered datatable" cellspacing="0" width="100%">
							<thead>
								<tr>
									 
									<th><b><?php echo e(getPhrase('Type')); ?></b></th>
									<th><b><?php echo e(getPhrase('description')); ?></b></th>
									<th><b><?php echo e(getPhrase('Status')); ?></b></th>
									<th><b><?php echo e(getPhrase('action')); ?></b></th>
								  
								</tr>
							</thead>
							<tbody>
								<?php $__currentLoopData = $exam_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr>
									<td><?php echo e($type->title); ?></td>
									<td><?php echo e($type->description); ?></td>
									<?php if($type->status == 1): ?>
									<td><span class="label label-success">Active</span></td>
									<?php else: ?>
									<td><span class="label label-info">In Active</span></td>
									<?php endif; ?>
									<td><a href="<?php echo e(URL_EDIT_EXAM_TYPE.$type->code); ?>" class="btn btn-primary btn-sm"><?php echo e(getPhrase('edit')); ?></a></td>
								</tr>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</tbody>
							 
						</table>
						</div>

					</div>
				</div>
			</div>
			<!-- /.container-fluid -->
		</div>
<?php $__env->stopSection(); ?>
 



<?php echo $__env->make('layouts.admin.adminlayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>