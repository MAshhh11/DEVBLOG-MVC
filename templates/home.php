
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
    <div class="row mt-5">
    <?php
        
        foreach ($articles as $article) {
            ?>
    <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <h2><?= $article->getTitle(); ?></h2>
                </div>
                <div class="card-body " style="height: 200px;">
                    <p><?= $article->getContent(); ?></p>
                    <p><?= $article->getAuthor(); ?></p>
                    <p><?= $article->getCreatedAt(); ?></p>
                </div>
                <div class="card-footer">
                    <a class="btn btn-info" href="../public/index.php?route=article&articleId=<?= $article->getId(); ?>">Voir</a>
                </div>
            </div>
    </div>
    
    <?php
        }
    ?>
    </div>
    </div>

</body>

</html>