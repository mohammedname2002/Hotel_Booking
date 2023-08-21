<?php
    $team = App\Models\Team::latest()->get();
?>

<div class="team-area-three pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <span class="sp-color">TEAM</span>
            <h2>Let's Meet Up With Our Special Team Members</h2>
        </div>
        <div class="team-slider-two owl-carousel owl-theme pt-45">
            
            <?php $__currentLoopData = $team; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
            <div class="team-item">
                <a href="team.html">
                    <img src="<?php echo e(asset($item->image)); ?>" alt="Images">
                </a>
                <div class="content">
                    <h3><a href="team.html"><?php echo e($item->name); ?></a></h3>
                    <span><?php echo e($item->postion); ?></span>
                    <ul class="social-link">
                        <li>
                            <a href="<?php echo e($item->facebook); ?>" target="_blank"><i class='bx bxl-facebook'></i></a>
                        </li> 
                        <li>
                            <a href="#" target="_blank"><i class='bx bxl-twitter'></i></a>
                        </li> 
                        <li>
                            <a href="#" target="_blank"><i class='bx bxl-instagram'></i></a>
                        </li> 
                        <li>
                            <a href="#" target="_blank"><i class='bx bxl-pinterest-alt'></i></a>
                        </li> 
                    </ul>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             
        </div>
    </div>
</div><?php /**PATH G:\xampp\htdocs\hotelReservation\resources\views/frontend/home/team.blade.php ENDPATH**/ ?>