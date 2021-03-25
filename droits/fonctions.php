<?php
require ("./../config/config.inc.php");
require (WAY . "includes/head.inc.php");

?>

<div class="row">
    <div class="header">
        <h3>Fonctions</h3>
    </div>
</div>
<div class="panel panel-primary">
    <div class="panel-heading">
        Ajouter une fonction
    </div>


    <div class="panel-body">
        <form id="fonction_form" action="check.php" method="post">
            <div class="form-group row">
                <label for="nom_fnc" class="col-sm-2 col-form-label">Nom</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nom_fnc" name="nom_fnc" placeholder="Nom de la fonction">
                </div>
            </div>

            <div class="form-group row">
                <label for="abr_fnc" class="col-sm-2 col-form-label">Abreviation de la fonction</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="abr_fnc" name="abr_fnc" placeholder="Abreviation">
                </div>
            </div>

            <div class="form-group row">
                <label for="desc_fnc" class="col-sm-2 col-form-label">Description de la fonction</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="desc_fnc" name="desc_fnc" placeholder="Description"></textarea>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-offset-10">
                    <input type="submit" class="btn btn-primary" id="submit_conf" name="submit_conf" value="Ajouter">
                    <input type="reset" class="btn btn-warning" id="reset_conf" name="reset_conf" value="Annuler">
                </div>
            </div>
        </form>
    </div>
    <script src="./js/fonctions.js"></script>
</div>
</div>

