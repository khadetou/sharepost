<header class="p-3 bg-dark text-white mb-5">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="<?php echo URLROOT; ?>" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <?php echo SITENAME; ?>
            </a>

            <ul class="nav col-12 col-lg-auto ms-auto mb-2 justify-content-center mb-md-0">
                <li><a href="<?php echo URLROOT; ?>" class="nav-link px-2 text-secondary">Home</a></li>
                <li><a href="<?php echo URLROOT; ?>/pages/about" class="nav-link px-2 text-white">About</a></li>
            </ul>

            <div class="text-end ms-lg-auto">
                <?php if (isset($_SESSION['user_id'])) : ?>
                    <a href="<?php echo URLROOT; ?>/users/logout" type="button" class="btn btn-success">LogOut</a>
                <?php else : ?>
                    <a href="<?php echo URLROOT; ?>/users/login" type="button" class="btn btn-outline-light me-2">Login</a>
                    <a href="<?php echo URLROOT; ?>/users/register" type="button" class="btn btn-success">Register</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</header>