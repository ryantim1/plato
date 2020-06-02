<?php
    $answers = json_decode($question->answers);
    $i=1;
 ?>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 select-answer select-option">

    <div style="margin-left: 15px;color:black;">
        <p><span class="language_l1" ><?php echo $question->second_question; ?></span></p>
         <?php if($question->right_question_file): ?>
           <p> <img src="<?php echo e($image_path.$question->right_question_file); ?>"></p>
            <?php endif; ?>
      </div>

    <ul class="row list-style-none">

         <?php $index = 0;?>

        <?php $__currentLoopData = $answers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $answer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
        <li class="col-md-12">
            <input id="<?php echo e($answer->option_value); ?><?php echo e($question->id); ?><?php echo e($i); ?>" value="<?php echo e($i); ?>" name="<?php echo e($question->id); ?>[]" 
              <?php if(isset($previous_answers) && count($previous_answers)): ?>
                <?php if(isset($previous_answers[$index])): ?>
                    <?php if($previous_answers[$index]=='true'): ?>
                        checked
                    <?php endif; ?>
                <?php endif; ?>
            <?php endif; ?>
            type="radio"/>
            
            <label for="<?php echo e($answer->option_value); ?><?php echo e($question->id); ?><?php echo e($i++); ?>">
                <span class="fa-stack radio-button">
                    <i class="mdi mdi-check active">
                    </i>
                </span>
                <span class="language_l1"><?php echo $answer->option_value; ?></span>

                <?php if(isset($answer->optionl2_value)): ?>
                <span class="language_l2" style="display: none;"><?php echo $answer->optionl2_value; ?></span>
                <?php else: ?>
                <span class="language_l2" style="display: none;"><?php echo $answer->option_value; ?></span>

                <?php endif; ?>

            </label>

            <?php if($answer->has_file): ?>
            <img src="<?php echo e($image_path.$answer->file_name); ?>" style="height: 200px !important; width: 200px !important;">
            <?php endif; ?>

        </li>

         <?php $index++;?>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </ul>
 
</div>
