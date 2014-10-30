<!DOCTYPE html>
<html>
    <head>
        <title>Pass</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap.min.css">
        <link rel="stylesheet" href="style.css">

        <script type="text/javascript">
            function goBack() {
                // window.location.href = "http://localhost/pass";
                window.location.replace("http://localhost/pass");
            }
        </script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-8 col-md-offset-2">
                    <div class="account-wall">
                        <h1 class="text-center login-title">Password:  <?php
                            if ($_POST['meth'] == "md5") {
                                echo '<br><br>' . md5($_POST['pass']);
                            } else if ($_POST['meth'] == "sha256") {
                                echo '<br><br>' . hash('sha256', $_POST['pass']);
                            } else {
                                echo '<br><br>'.$_POST['pass'];
                            }
                            ?> </h1>
                        <div class="form-signin">
                            <button class="btn btn-lg btn-primary btn-block" type="button" onclick="goBack()">
                                Back</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
