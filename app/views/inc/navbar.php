<header>
    <div class="px-3 py-2 bg-dark text-white">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="<?php echo URLROOT; ?>" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
                    <?php echo SITENAME; ?>
                </a>

                <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
                    <li>
                        <a href="<?php echo URLROOT; ?>" class="nav-link text-secondary">
                            <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                                <use xlink:href="#home" />
                            </svg>
                            Home
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo URLROOT; ?>/pages/about" class="nav-link text-white">
                            <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                                <use xlink:href="#table" />
                            </svg>
                            About
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    <div class="px-3 py-2 border-bottom mb-3">
        <div class="container d-flex flex-wrap justify-content-center">
            <form class="col-12 col-lg-auto mb-2 mb-lg-0 me-lg-auto">
                <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
            </form>

            <div class="text-end">
                <a href="<?php echo URLROOT; ?>/user/login" type="button" class="btn btn-light text-dark me-2">Login</a>
                <a href="<?php echo URLROOT; ?>/user/register" type="button" class="btn btn-primary">Register</a>
            </div>
        </div>
    </div>
</header>