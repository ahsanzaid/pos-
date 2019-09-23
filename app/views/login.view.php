<?php require 'partials/_header.php'; ?>

<div class="sufee-login d-flex align-content-center flex-wrap">
    <div class="container">
        <div class="login-content">
            <div class="login-logo">
                <a href="index.html">
                    <img class="align-content" src="public/images/logo.png" alt="">
                </a>
            </div>
            <div class="login-form">
                <form action="account/loginSubmit" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username"class="form-control" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="checkbox">
                        <label class="pull-right">
                            <a href="account/forget">Forgotten Password?</a>
                        </label>

                    </div>
                    <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Login in</button>
                    <div class="register-link m-t-15 text-center">
                        <p>Don't have account ? <a href="account/register"> Register Here</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php require 'partials/_footer.php'; ?>