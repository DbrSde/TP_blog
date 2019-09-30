<?php $title = 'Login'; ?>
<?php ob_start(); ?>

    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h5 class="card-title text-center">Login</h5>
                    <?php
                    if(isset($_SESSION['errorlogin'])){
                        echo '<div class="alert alert-danger" role="alert">'.$_SESSION['errorlogin'].'</div>';
                    }
                    ?>
                    <form class="form-signin" name="authentification" action="/Login/Check" method="POST">
                        <div class="form-label-group">
                            <input type="text" name="login" id="inputLogin" class="form-control" placeholder="Identifiant" required autofocus value="<?= $arrayRememberMe[0] ?>">
                            <label for="inputLogin">Votre Identifiant</label>
                        </div>

                        <div class="form-label-group">
                            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required value="<?= $arrayRememberMe[1] ?>">
                            <label for="inputPassword">Password</label>
                        </div>

                        <div class="custom-control custom-checkbox mb-3">
                            <?php
                                $checked ="";
                                if($arrayRememberMe[0] <> '') {$checked = "checked";};
                            ?>
                            <input type="checkbox" checked="checked" class="custom-control-input" name ="remember" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">Remember password</label>
                        </div>
                        <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


<?php $content = ob_get_clean(); ?>

<?php require($_SERVER['DOCUMENT_ROOT'].'/../templates/base.html.php'); ?>
