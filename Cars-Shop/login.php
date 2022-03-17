<html>
    <head>
        <title>User Login And Registration </title>
        <link rel="stylesheet" type="text/css" href="login.css">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" >

    </head>
    <body>
        <div class="container">
            <div class="login-box">
            <div class="row">
                <div class="col-md-6 login-left">
                    <h2>login here</h2>
                    <form action="validation.php" method="post">
                        <div class="form-group">
                            <label>user name</label>
                            <input type="text" name="user" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                        
                </div>
                <div class="col-md-6 login-right">
                    <h2>sign up here</h2>
                    <form action="signup.php" method="post">
                        <div class="form-group">
                            <label>user name</label>
                            <input type="text" name="user" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">signup</button>
                    </form>
                        
                </div>


            </div>
            </div>
        </div>
    </body>
</html>