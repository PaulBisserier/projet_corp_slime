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
        <h1 id="titre" class="text-center py-3 text-success">Nos projets</h1>
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-5 p-2 mx-2 text-center">
                <h2 class="text-success text-center p-5">Nos partenaires</h2>
                <div id="partenaire"></div>
                <button id="ajout" class="btn btn-success d-block mx-auto mt-3">Ajouter un partenaire</button>
                <!-- <div class="form-check">
                        <input type="checkbox">
                        <a href="#">Partenaire 1</a>
                        <br>
                        <input type="checkbox">
                        <a href="#">Partenaire 2</a>
                        <br>
                        <input type="checkbox">
                        <a href="#">Partenaire 3</a>
                    </div> -->
            </div>
            <div class="col-lg-5 p-2 mx-2">
                <h2 class="text-center text-success p-5">Soutenez-nous</h2>
                <div class="input-group">
                    <div class="input-group-prepend mx-auto">
                        <label class="input-group-text" for="inputGroupSelect01">Votre don</label>

                        <select class="custom-selec" disabled=true id="inputGroupSelect01">
                            <option selected>Choisissez votre montant</option>
                            <option value="5">5€</option>
                            <option value="10">10€</option>
                            <option value="15">15€</option>
                            <option value="20">20€</option>
                            <option value="25">25€</option>
                        </select>
                    </div>
                    <div class="form-check mx-auto pt-3">
                        <input id="don-checkbox" type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Veuillez accepter pour valider votre don</label>
                    </div>
                </div>
                <button id="don" class="btn btn-success d-block mx-auto mt-3 disabled">Valider</button>
            </div>
        </div>
    </main>

    <?php require_once 'footer.php' ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    <script src="js/projets.js"></script>
</body>

</html>