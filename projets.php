<?php require_once 'header.php' ?>

<main class="container">
    <h1 id="titre" class="text-center py-3 text-success">Nos projets</h1>
    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-5 p-2 mx-2 text-center">
            <h2 class="text-success text-center p-5">Nos partenaires</h2>
            <div id="partenaire"></div>
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
    <button id="ajout" class="btn btn-success d-block mx-auto mt-3">Ajouter un partenaire</button>
    <div id="formulaire"></div>
</main>

<?php require_once 'footer.php' ?>