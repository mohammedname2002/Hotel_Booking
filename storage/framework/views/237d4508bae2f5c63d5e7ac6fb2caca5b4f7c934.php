<!doctype html>
<html lang="zxx">
    <head>
        <!-- Required Meta Tags -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
        <!-- Bootstrap CSS --> 
        <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/bootstrap.min.css')); ?>">
        <!-- Animate Min CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/animate.min.css')); ?>">
        <!-- Flaticon CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/fonts/flaticon.css')); ?>">
        <!-- Boxicons CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/boxicons.min.css')); ?>">
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/magnific-popup.css')); ?>">
        <!-- Owl Carousel Min CSS --> 
        <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/owl.carousel.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/owl.theme.default.min.css')); ?>">
        <!-- Nice Select Min CSS --> 
        <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/nice-select.min.css')); ?>">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/meanmenu.css')); ?>">
        <!-- Jquery Ui CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/jquery-ui.css')); ?>">
        <!-- Style CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/style.css')); ?>">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/responsive.css')); ?>">
        <!-- Theme Dark CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/theme-dark.css')); ?>">

        <!-- Favicon -->
        <link rel="icon" type="image/png" href="<?php echo e(asset('frontend/assets/img/favicon.png')); ?>">

        	<!-- toastr CSS -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
    <!-- toastr CSS -->

        <title>Easy Hotel </title>
    </head>
    <body>

        <!-- PreLoader Start -->
        <div class="preloader">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="sk-cube-area">
                        <div class="sk-cube1 sk-cube"></div>
                        <div class="sk-cube2 sk-cube"></div>
                        <div class="sk-cube4 sk-cube"></div>
                        <div class="sk-cube3 sk-cube"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- PreLoader End -->

        <!-- Top Header Start -->
        <?php echo $__env->make('frontend.body.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Top Header End -->

        <!-- Start Navbar Area -->
        <?php echo $__env->make('frontend.body.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- End Navbar Area -->

        <?php echo $__env->yieldContent('main'); ?>

        <!-- Footer Area -->
        <?php echo $__env->make('frontend.body.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Footer Area End -->


        <!-- Jquery Min JS -->
        <script src="<?php echo e(asset('frontend/assets/js/jquery.min.js')); ?>"></script>
        <!-- Bootstrap Bundle Min JS -->
        <script src="<?php echo e(asset('frontend/assets/js/bootstrap.bundle.min.js')); ?>"></script>
        <!-- Magnific Popup Min JS -->
        <script src="<?php echo e(asset('frontend/assets/js/jquery.magnific-popup.min.js')); ?>"></script>
        <!-- Owl Carousel Min JS -->
        <script src="<?php echo e(asset('frontend/assets/js/owl.carousel.min.js')); ?>"></script>
        <!-- Nice Select Min JS -->
        <script src="<?php echo e(asset('frontend/assets/js/jquery.nice-select.min.js')); ?>"></script>
        <!-- Wow Min JS -->
        <script src="<?php echo e(asset('frontend/assets/js/wow.min.js')); ?>"></script>
        <!-- Jquery Ui JS -->
        <script src="<?php echo e(asset('frontend/assets/js/jquery-ui.js')); ?>"></script>
        <!-- Meanmenu JS -->
        <script src="<?php echo e(asset('frontend/assets/js/meanmenu.js')); ?>"></script>
        <!-- Ajaxchimp Min JS -->
        <script src="<?php echo e(asset('frontend/assets/js/jquery.ajaxchimp.min.js')); ?>"></script>
        <!-- Form Validator Min JS -->
        <script src="<?php echo e(asset('frontend/assets/js/form-validator.min.js')); ?>"></script>
        <!-- Contact Form JS -->
        <script src="<?php echo e(asset('frontend/assets/js/contact-form-script.js')); ?>"></script>
        <!-- Custom JS -->
        <script src="<?php echo e(asset('frontend/assets/js/custom.js')); ?>"></script>
        
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
 <?php if(Session::has('message')): ?>
 var type = "<?php echo e(Session::get('alert-type','info')); ?>"
 switch(type){
    case 'info':
    toastr.info(" <?php echo e(Session::get('message')); ?> ");
    break;

    case 'success':
    toastr.success(" <?php echo e(Session::get('message')); ?> ");
    break;

    case 'warning':
    toastr.warning(" <?php echo e(Session::get('message')); ?> ");
    break;

    case 'error':
    toastr.error(" <?php echo e(Session::get('message')); ?> ");
    break; 
 }
 <?php endif; ?> 
</script>


    </body>
</html><?php /**PATH G:\xampp\htdocs\hotelReservation\resources\views/frontend/main_master.blade.php ENDPATH**/ ?>