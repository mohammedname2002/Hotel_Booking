<?php
    $bookarea = App\Models\BookArea::find(1);
?>

<div class="book-area-two pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="book-content-two">
                    <div class="section-title">
                        <?php if($bookarea): ?>

                        <span class="sp-color"><?php echo e($bookarea->short_title); ?></span>

                        <h2><?php echo e($bookarea->main_title); ?></h2>
                        <p>
                            <?php echo e($bookarea->short_desc); ?>

                        </p>
                    </div>
                    <a href="<?php echo e($bookarea->link_url); ?>" class="default-btn btn-bg-three">Quick Booking</a>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="book-img-2">
                    <img src="<?php echo e(asset($bookarea->image)); ?>" alt="Images">
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
</div>
<?php /**PATH G:\xampp\htdocs\hotelReservation\resources\views/frontend/home/room_area_two.blade.php ENDPATH**/ ?>