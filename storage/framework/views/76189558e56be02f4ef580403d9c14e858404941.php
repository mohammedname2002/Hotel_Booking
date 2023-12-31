<?php
    $room = App\Models\Room::latest()->limit(4)->get();
?>
<div class="room-area pt-100 pb-70 section-bg" style="background-color:#ffffff">
    <div class="container">
        <div class="section-title text-center">
            <span class="sp-color">ROOMS</span>
            <h2>Our Rooms & Rates</h2>
        </div>
        <div class="row pt-45">

            <?php $__currentLoopData = $room; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-6">
                <div class="room-card-two">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-4 p-0">
                            <div class="room-card-img">
                                <a href="<?php echo e(url('room/details/'.$item->id)); ?>">
                                    <img src="<?php echo e(asset( 'upload/roomimg/'.$item->image )); ?>" alt="Images">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-7 col-md-8 p-0">
                            <div class="room-card-content">
                                 <h3>
                                     <a href="<?php echo e(url('room/details/'.$item->id)); ?>"><?php echo e($item['type']['name']); ?></a>
                                </h3>
                                <span><?php echo e($item->price); ?> / Per Night </span>
                                <div class="rating">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </div>
                                <p><?php echo e($item->short_desc); ?></p>
                                <ul>
                   <li><i class='bx bx-user'></i> <?php echo e($item->room_capacity); ?> Person</li>
                   <li><i class='bx bx-expand'></i> <?php echo e($item->size); ?>ft2</li>
                                </ul>

                                <ul>
        <li><i class='bx bx-show-alt'></i><?php echo e($item->view); ?></li>
        <li><i class='bx bxs-hotel'></i> <?php echo e($item->bed_style); ?></li>
                                </ul>
                                
                                <a href="room-details.html" class="book-more-btn">
                                    Book Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
 
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            


        </div>
    </div>
</div><?php /**PATH G:\xampp\htdocs\hotelReservation\resources\views/frontend/home/room_area.blade.php ENDPATH**/ ?>