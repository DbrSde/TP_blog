<?php $title = 'Detail de l\'article'; ?>
<?php ob_start(); ?>

    <form method="post">
        <div class="card border-primary rounded-0">
            <div class="card-header p-0">
                <div class="bg-info text-white text-center py-2">
                    <h3><i class="fa fa-envelope"></i> Formulaire de contact</h3>
                    <p class="m-0">Veuillez renseigner les champs suivants :</p>
                </div>
            </div>
            <div class="card-body p-3">

                <!--Body-->
                <div class="form-group">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                        </div>
                        <input type="text" class="form-control" id="nombre" name="nom" placeholder="Votre nom" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                        </div>
                        <input type="email" class="form-control" id="nombre" name="email" placeholder="ejemplo@gmail.com" required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                        </div>
                        <textarea class="form-control" placeholder="Votre message" required name="message"></textarea>
                    </div>
                </div>

                <div class="text-center">
                    <input type="submit" value="Envoyer" class="btn btn-info btn-block rounded-0 py-2">
                </div>
            </div>

        </div>
    </form>


<?php $content = ob_get_clean(); ?>

<?php require($_SERVER['DOCUMENT_ROOT'].'/../templates/base.html.php'); ?>