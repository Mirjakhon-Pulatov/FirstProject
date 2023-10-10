<!-- Navbar Start -->
<div class="container-fluid bg-white position-relative" id="navbar">
    <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0" >
        <a href="<?php echo e(route('index')); ?>" class="navbar-brand text-secondary">
            <img src="<?php echo e(asset('user/assets/img/Bizzone.png')); ?>" style="width: 250px; height: 100%" alt="">
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ml-auto py-0 pr-3 border-right">
                <a href="<?php echo e(route('index')); ?>" style="color: <?php echo e(request()->is('/') ? 'orange' : ''); ?>" class="nav-item nav-link text-uppercase">Главная</a>
                <a href="<?php echo e(route('about')); ?>" style="color: <?php echo e(request()->is('about') ? 'orange' : ''); ?>" class="nav-item nav-link">О нас</a>
                <a href="<?php echo e(route('service')); ?>" style="color: <?php echo e(request()->is('service') ? 'orange' : ''); ?>" class="nav-item nav-link">Услуги</a>
                <a href="<?php echo e(route('project')); ?>" style="color: <?php echo e(request()->is('project') ? 'orange' : ''); ?>" class="nav-item nav-link">Наши Работы</a>
                <a href="<?php echo e(route('contact')); ?>" style="color: <?php echo e(request()->is('contact') ? 'orange' : ''); ?>" class="nav-item nav-link">Контакты</a>
            </div>
            <div class="d-none d-lg-flex align-items-center pl-4">
                <i class="fa-beat-fade fa-3x fa fa-mobile-alt text-primary mr-3"></i>
                <div>
                    <h6 class="text-body text-uppercase text-center mb-1"><small>Позвонить</small></h6>
                    <h6 class="m-0"><a href="tel: +998 (99) 700-83-60">+998 (99) 700-83-60</a></h6>
                </div>
            </div>
        </div>
    </nav>
</div>
<!-- Navbar End -->

<?php /**PATH D:\OSPanel\domains\FirstProject\resources\views/user/partials/navbar.blade.php ENDPATH**/ ?>