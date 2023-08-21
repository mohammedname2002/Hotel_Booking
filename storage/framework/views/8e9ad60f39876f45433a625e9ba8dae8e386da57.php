<?php
    $blog = App\Models\BlogPost::latest()->limit(3)->get();
?>
<div class="blog-area pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <span class="sp-color">BLOGS</span>
            <h2>Our Latest Blogs to the Intranational Journal at a Glance</h2>
        </div>
        <div class="row pt-45">

            <?php $__currentLoopData = $blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
          
            <div class="col-lg-4 col-md-6">
                <div class="blog-item">
                    <a href="<?php echo e(url('blog/details/'.$item->post_slug)); ?>">
                        <img src="<?php echo e(asset($item->post_image)); ?>" alt="Images">
                    </a>
                    <div class="content">
                        <ul>
                            <li><?php echo e($item->created_at->format('M d Y')); ?></li>
                            <li><i class='bx bx-user'></i>29K</li>
                            <li><i class='bx bx-message-alt-dots'></i>15K</li>
                        </ul>
                        <h3>
                            <a href="<?php echo e(url('blog/details/'.$item->post_slug)); ?>"><?php echo e($item->post_titile); ?></a>
                        </h3>
                        <p><?php echo e($item->short_descp); ?></p>
                        <a href="<?php echo e(url('blog/details/'.$item->post_slug)); ?>" class="read-btn">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            
        </div>
    </div>
</div><?php /**PATH G:\xampp\htdocs\hotelReservation\resources\views/frontend/home/blog.blade.php ENDPATH**/ ?>