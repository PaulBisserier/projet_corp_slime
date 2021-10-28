<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CDN Fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <!-- CDN Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous"> <!-- css-->
    <link rel="stylesheet" href="css/style.css">
    <title>Projet SLIME CORP</title>
</head>

<body>
    <?php require_once 'header.php' ?>
    <main class="container">
        <h1 class="text-center py-3 text-success">Ajouter un partenaire</h1>
        <div class="row">
            <div class="col-lg-5"></div>
            <form class="text-center">
                <div class="form-group">
                    <label for="formGroupExampleInput">Nom du partenaire</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nom du partenaire">
                </div>
                <button id="envoyer" class="btn btn-success d-block mx-auto mt-3">Ajouter un partenaire</button>
            </form>
        </div>
    </main>
    <?php require_once 'footer.php' ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    <script src="js/formulaire.js"></script>
    <script src="js/projets.js"></script>
</body>

</html>