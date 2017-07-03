<?php
include "../admin/configuracion.php";
include "../admin/captcha.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Robinson Coello">
        <title><?php echo "$config_nombre_web"; ?> Admin</title>
        <link href="../includes/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="estilo.css" rel="stylesheet">


    </head>

    <body>

        <div class="container">
            <div class="header clearfix">
                <nav>
                    <ul class="nav nav-pills pull-right">                        
                        <li role="presentation"><a href="<?php echo "$config_url"; ?>">Web</a></li>
                        <li role="presentation" class="active"><a href="#">Admin</a></li>
                        <li role="presentation"><a href="http://www.jiholabo.com/sitefrench/contact.html">Contact</a></li>
                    </ul>
                </nav>
                <h3 class="text-muted"><?php echo "$config_nombre_web"; ?></h3>
            </div>
            
           
            

            <div class="media text-center" >
                <img src="../imagenes/labo.png" class="img-rounded" alt="" width="304" height="236"> 
            </div>

            <div class="row marketing">
                <div class="col-sm-12 col-md-6 col-lg-61"> <!-- 3 -->          

                    <h2>Login </h2>                    

                    <form class="form-signin" name="" method="post" action="z_login.php">

                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input autofocus type="email" class="form-control" id="email" name="username" placeholder="Email">
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        </div>                        

                        <?php 
                                  //  captcha_html();
                        ?>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>




                </div>

                <div class="col-sm-12 col-md-6 col-lg-6"> <!-- 3 -->          

                    <h2><?php echo "$config_nombre_web"; ?></h2>
                    <h3>Contact us</h3>                    
                    <p><?php echo "$config_direccion"; ?></p>
                    <p><span class="glyphicon glyphicon-earphone"></span> <?php echo "$config_tel"; ?></p>




                </div>
            </div>

            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <footer class="footer">
                <!--<p>&copy; Powered by <a href="http://www.facturas.be">facturas.be</a></p>-->
            </footer>
        </div> <!-- /container -->
    </body>
</html>

















