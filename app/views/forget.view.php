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
                <form action="/Account/forgetSubmit" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Email address</label>
                        <input type="email" name="email" class="form-control" placeholder="Email">
                    </div>
                    <button type="submit" class="btn btn-primary btn-flat m-b-15">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php require 'partials/_footer.php'; ?>