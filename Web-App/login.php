<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/fonts.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body>
    <div class="container">
        <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
                <div class="auth-form-light text-left p-5">
                    <h4>Halo.. Selamat datang</h4>
                    <form action="dashboard.php?page=login_proses" method="post" class="pt-3">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg" name="username" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control form-control-lg" name="pass" placeholder="Password">
                        </div>
                        <div class="mt-3">
                            <input type="submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" value="SIGN IN">
                        </div>
                    </form>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
</body>

</html>