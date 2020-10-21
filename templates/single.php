
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>DevBlog Fullstack 2020</title>
</head>

<body>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h1>DevBlog Fullstack 2020</h1>
                </div>
                <div class="card-body">
                    <h5>Engineered at Talis Business School</h5>
                    <p>En construction</p>
                </div>
            </div>
        </div>
    </div>

    <a href="../public/index.php" class="btn btn-info mt-4 mb-4">Retour à l'accueil</a>
    <?php
        
        $a_m=$articles->fetch();
            ?>
    <div class="card">

        <h2 class="card-header"><?= $a_m->title ; ?>
        </h2>
        <div class="card-body">
        <p><?= $a_m->content ; ?>
        </p>
        <p><?= $a_m->author ; ?>
        </p>
        <p><?= $a_m->createdAt ; ?>
        </p>
        </div>
    </div>
    <?php
        $articles->closeCursor();
    ?>
    <div class="card mt-3" id="comments">
        <h3 class="card-header">Commentaires</h3>
        <div class="card-body">
        <?php
            
            while ($comment = $comments->fetch()) {
                ?>
        <h4><?= $comment->id_user ?>
        </h4>
        <p><?= $comment->content ?>
        </p>
        <p><?= $comment->createdAt ?>
        </p>
        <?php
            }
            $comments->closeCursor();
        ?>
        </div>
    </div>
</body>

</html>