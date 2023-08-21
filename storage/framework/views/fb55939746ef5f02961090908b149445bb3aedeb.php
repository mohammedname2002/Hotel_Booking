<?php
    $testimonial = App\Models\Testimonial::latest()->get();
?>
<div class="testimonials-area-three pb-70">
    <div class="container">
        <div class="section-title text-center">
            <span class="sp-color">TESTIMONIAL</span>
            <h2>Our Latest Testimonials and What Our Client Says</h2>
        </div>
        <div class="row align-items-center pt-45">
            <div class="col-lg-6 col-md-6">
                <div class="testimonials-img-two">
                    <img src="<?php echo e(asset('frontend/assets/img/testimonials/testimonials-img5.jpg')); ?>" alt="Images">
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="testimonials-slider-area owl-carousel owl-theme">
                    
                    <?php $__currentLoopData = $testimonial; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                    <div class="testimonials-slider-content">
                        <i class="flaticon-left-quote"></i>
                        <p>
                            <?php echo e($item->message); ?>

                        </p>
                        <ul>
                            <li>
                                <img src="<?php echo e(asset($item->image)); ?>" alt="Images">
                                <h3><?php echo e($item->name); ?></h3>
                                <span><?php echo e($item->city); ?></span>
                            </li>
                        </ul>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     
                </div>
            </div>
        </div>
    </div>
</div><?php /**PATH G:\xampp\htdocs\hotelReservation\resources\views/frontend/home/testimonials.blade.php ENDPATH**/ ?>