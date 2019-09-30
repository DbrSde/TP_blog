<?php $title = 'Ajout d\'un article'; ?>
<?php ob_start(); ?>

    <div class="jumbotron">
        <h1 class="display-4">Ajout Article</h1>
        <form name="postAdd" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="postTitre">Titre</label>
                <input type="text" class="form-control" id="postTitre" name="postTitre" placeholder="titre de l'article">
            </div>

            <div class="form-group">
                <label for="postDescription">Description</label>
                <textarea class="form-control" id="postDescription" name="postDescription" rows="3" placeholder="Description de l'article"></textarea>
            </div>

            <div class="form-group">
                <label for="postAuteur">Auteur</label>
                <select class="form-control" id="postAuteur" name="postAuteur">
                    <option value="Brice">Brice</option>
                    <option value="Bruno">Bruno</option>
                    <option value="Fabien">Fabien</option>
                    <option value="Marion">Marion</option>
                </select>
            </div>
            <div class="form-group">
                <label for="postDate">Date de l'article</label>
                <input type="date" class="form-control" id="postDate" name="postDate" >
            </div>
            <div class="form-group">
                <label for="postImage">fichier Image</label>
                <input type="file" class="form-control" id="postImage" name="postImage" >
            </div>
            <button type="submit" class="btn btn-primary">Valider</button>
        </form>
    </div>

<?php $content = ob_get_clean(); ?>

<?php require($_SERVER['DOCUMENT_ROOT'].'/../templates/base.admin.html.php'); ?>