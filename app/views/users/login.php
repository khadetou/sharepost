<?php require  APPROOT . '/views/inc/header.php'; ?>
<div class="row mb-5">
    <div class="col-md-6 mx-auto">
        <div class="card card-body bg-light mt-5">
            <h2>Create an Account</h2>
            <p>Please fill out this form to register with us</p>
            <form action="<?php echo URLROOT; ?>/users/login" method="post">
                <h1 class="h3 mb-3 fw-normal text-center">Login</h1>

                <div class="form-floating mb-3">
                    <input type="email" name="email" class="form-control <?php echo (!empty($data["email_err"])) ? 'is-invalid' : '' ?>" id="floatingInput" placeholder="name@example.com" value="<?php echo $data["email"] ?>">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" name="password" class="form-control <?php echo (!empty($data["password_err"])) ? 'is-invalid' : '' ?>" id="floatingPassword" placeholder="Password" value="<?php echo $data["password"] ?>">
                    <label for="floatingPassword">Password</label>
                </div>

                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <div class="row">
                    <div class="col mx-auto"><input type="submit" value="Login" class="btn btn-success w-100"></div>
                    <div class="col mx-auto"><a href="<?php echo URLROOT ?>/users/register" class="btn btn-light w-100">Don't Have an Account ? Register</a></div>
                </div>


            </form>
        </div>
    </div>
</div>
<?php require  APPROOT . '/views/inc/footer.php'; ?>