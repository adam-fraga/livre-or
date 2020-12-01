<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Header</title>
</head>
<body>
<?php require 'header.php'; ?>
    <section class=" flex">
        <h1 class="text-center my-5">Livre d'or</h1>
        <div class="flex-column container col-6 col-sm-8  p-5 ">
            <article class="card text-white bg-primary col-sm-8 mb-3 rounded mr-5" >
                <h4 class="card-header">Login</h4>
                <div class="card-body">
                    <small>Date:</small>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </article>

            <article class="card text-white bg-secondary mb-3 col-sm-8 rounded ml-5" ">
                <h4 class="card-header">Login</h4>
                <div class="card-body">
                    <small>Date:</small>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the
                        card's content.</p>
                </div>
            </article>
        </div>
    </section>

<?php require 'footer.php'; ?>
</body>
</html>