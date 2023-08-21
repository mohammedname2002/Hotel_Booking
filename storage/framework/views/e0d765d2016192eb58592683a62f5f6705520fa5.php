
<?php
    $setting = App\Models\SiteSetting::find(1);
?>

<header class="top-header top-header-bg">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-2 pr-0">
                <div class="language-list">
                    <select class="language-list-item">
                        <option>English</option>
                        <option>العربيّة</option>
                        <option>Deutsch</option>
                        <option>Português</option>
                        <option>简体中文</option>
                    </select>	
                </div>
            </div>

            <div class="col-lg-9 col-md-10">
                <div class="header-right">
                    <ul>
                        <li>
                            <i class='bx bx-home-alt'></i>
                            <a href="#"><?php echo e($setting->address); ?></a>
                        </li>
                        <li>
                            <i class='bx bx-phone-call'></i>
                            <a href="tel:<?php echo e($setting->phone); ?>"><?php echo e($setting->phone); ?></a>
                        </li>
  
  <?php if(auth()->guard()->check()): ?>

  <li>
    <i class='bx bxs-user-pin'></i>
    <a href="<?php echo e(route('dashboard')); ?>">Dashboard</a>
</li>

<li>
    <i class='bx bxs-user-rectangle'></i>
    <a href="<?php echo e(route('user.logout')); ?>">Logout</a>
</li>

  <?php else: ?>

  <li>
    <i class='bx bxs-user-pin'></i>
    <a href="<?php echo e(route('login')); ?>">Login</a>
</li>

<li>
    <i class='bx bxs-user-rectangle'></i>
    <a href="<?php echo e(route('register')); ?>">Register</a>
</li>
      
  <?php endif; ?>
                       

                    </ul>
                </div>
            </div>
        </div>
    </div>
</header><?php /**PATH G:\xampp\htdocs\hotelReservation\resources\views/frontend/body/header.blade.php ENDPATH**/ ?>