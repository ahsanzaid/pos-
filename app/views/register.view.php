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
                <form action="/Account/registerSubmit" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="email" name="username" class="form-control" placeholder="Username" required>
                    </div>
                    <div class="form-group">
                        <label>Email address</label>
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                    </div>

                    <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Register</button>

                    <div class="register-link m-t-15 text-center">
                        <p>Already have account ? <a href="/Account/Login"> Log in</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php require 'partials/_footer.php'; ?>