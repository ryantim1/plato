 
<?php $__env->startSection('content'); ?>

<div id="page-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<ol class="breadcrumb">
							 
							<li><?php echo e($title); ?></li>
						</ol>
					</div>
				</div>
				 <div class="row">
			
 
		 			<div class="col-md-4 col-sm-6">
 		<div class="media state-media box-ws">
 			<div class="media-left">
 				<a href="<?php echo e(URL_STUDENT_EXAM_CATEGORIES); ?>"><div class="state-icn bg-icon-info"><i class="fa fa-list-alt"></i></div></a>
 			</div>
 			<div class="media-body">
 				<h4 class="card-title"><?php echo e(count(App\User::getUserSeleted('categories'))); ?></h4>
				<a href="<?php echo e(URL_STUDENT_EXAM_CATEGORIES); ?>"><?php echo e(getPhrase('quiz_categories')); ?></a>
 			</div>
 		</div>
 	</div>    
 	<div class="col-md-4 col-sm-6">
 		<div class="media state-media box-ws">
 			<div class="media-left">
 				<a href="<?php echo e(URL_STUDENT_EXAM_ALL); ?>"><div class="state-icn bg-icon-pink"><i class="fa fa-desktop"></i></div></a>
 			</div>
 			<div class="media-body">
 				<h4 class="card-title"><?php echo e(App\User::getUserSeleted('quizzes')); ?></h4>
				<a href="<?php echo e(URL_STUDENT_EXAM_ALL); ?>"><?php echo e(getPhrase('quizzes')); ?></a>
 			</div>
 		</div>
 	</div> 
 	<div class="col-md-4 col-sm-6">
 		<div class="media state-media box-ws">
 			<div class="media-left">
 				<a href="<?php echo e(URL_PARENT_CHILDREN); ?>"><div class="state-icn bg-icon-purple"><i class="fa fa-user-circle"></i></div></a>
 			</div>
 			<div class="media-body">
 				<h4 class="card-title"><?php echo e(App\User::where('parent_id', '=', $user->id)->get()->count()); ?></h4>
				<a href="<?php echo e(URL_PARENT_CHILDREN); ?>"><?php echo e(getPhrase('children')); ?></a>
 			</div>
 		</div>
 	</div>
 	

				 
				</div>
				<div class="row">
					<div class="col-md-6">
					     <div class="panel panel-custom">
					      <div class="panel-heading"><?php echo e(getPhrase('latest_quizzes')); ?></div>
					      <?php if(!count($latest_quizzes)): ?>
					      <br>
					 		 <p> &nbsp;&nbsp;&nbsp;<?php echo e(getPhrase('no_quizzes_available')); ?></p>
					 		 <p> &nbsp;&nbsp;&nbsp; <a href="<?php echo e(URL_USERS_SETTINGS.Auth::user()->slug); ?>"><?php echo e(getPhrase('click_here')); ?></a> <?php echo e(getPhrase('to_change_your_settings')); ?></p>
					 	 <?php else: ?>

					    	<table class="table">	
					    	<thead>
					    		<tr>
					    			<th><?php echo e(getPhrase('title')); ?></th>
					    			<th><?php echo e(getPhrase('type')); ?></th>
					    			<th><?php echo e(getPhrase('Action')); ?></th>
					    		</tr>
					    	</thead>
					    	<tbody>
					    	<?php $__currentLoopData = $latest_quizzes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $quiz): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					 			<tr>
					 				<td><?php echo e($quiz->title); ?></td>
					 				<td>
					 				<?php if($quiz->is_paid): ?>
					 					<span class="label label-danger"><?php echo e(getPhrase('paid')); ?>

					 					</span>
				 					<?php else: ?>
				 					<span class="label label-success"><?php echo e(getPhrase('free')); ?>

					 					</span>
				 					<?php endif; ?>
					 				</td>
					 				<td>
					 				<?php if($quiz->is_paid): ?>
					 					<a class="btn btn-smoke" href="<?php echo e(URL_PAYMENTS_CHECKOUT.'exam/'.$quiz->slug); ?>"><?php echo e(getPhrase('buy_now')); ?></a> 
				 					<?php else: ?>
				 					-
				 					<?php endif; ?>
					 				</td>
					 			</tr>
					 		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

					    	</tbody>
					    	</table>  
					    <?php endif; ?>
					     
					    </div>
					 
					 	
					 
					</div>

						<div class="col-md-6">
					     <div class="panel panel-custom">
					      <div class="panel-heading"><?php echo e(getPhrase('latest')); ?> LMS <?php echo e(getPhrase('series')); ?></div>
					      <?php if(!count($latest_series)): ?>
					      <br>
					 		 <p> &nbsp;&nbsp;&nbsp;<?php echo e(getPhrase('no_series_available')); ?></p>
					 		 <p> &nbsp;&nbsp;&nbsp; <a href="<?php echo e(URL_USERS_SETTINGS.Auth::user()->slug); ?>"><?php echo e(getPhrase('click_here')); ?></a> <?php echo e(getPhrase('to_change_your_settings')); ?></p>
					 	 <?php else: ?>

					    	<table class="table">	
					    	<thead>
					    		<tr>
					    			<th><?php echo e(getPhrase('title')); ?></th>
					    			<th><?php echo e(getPhrase('type')); ?></th>
					    			<th><?php echo e(getPhrase('Action')); ?></th>
					    		</tr>
					    	</thead>
					    	<tbody>
					    	<?php $__currentLoopData = $latest_series; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $series): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					 			<tr>
					 				<td><?php echo e($series->title); ?></td>
					 				<td>
					 				<?php if($series->is_paid): ?>
					 					<span class="label label-danger"><?php echo e(getPhrase('paid')); ?>

					 					</span>
				 					<?php else: ?>
				 					<span class="label label-success"><?php echo e(getPhrase('free')); ?>

					 					</span>
				 					<?php endif; ?>
					 				</td>
					 				<td>
					 				<?php if($series->is_paid): ?>
					 					<a class="btn btn-smoke" href="<?php echo e(URL_PAYMENTS_CHECKOUT.'lms/'.$series->slug); ?>"><?php echo e(getPhrase('buy_now')); ?></a> 
				 					<?php else: ?>
				 					-
				 					<?php endif; ?>
					 				</td>
					 			</tr>
					 		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

					    	</tbody>
					    	</table>  
					    <?php endif; ?>
					     
					    </div>
					 
					 	
					 
					</div>

					 

				 
				</div>
				 
			 
			</div>
			<!-- /.container-fluid -->
</div>
		<!-- /#page-wrapper -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer_scripts'); ?>
  
<?php $__env->stopSection(); ?>
<?php echo $__env->make($layout, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>