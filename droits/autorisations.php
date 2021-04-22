<?php
require ("./../config/config.inc.php");
require (WAY . "includes/head.inc.php");

?>

<div class="row">
    <div class="header">
        <h3>Autorisations</h3>
    </div>
</div>
<div class="panel panel-primary">
    <div class="panel-heading">
        Ajouter une autorisation
    </div>


    <div class="panel-body">
        <form id="autorisation_form" action="check.php" method="post">
            <div class="form-group row">
                <label for="nom_aut" class="col-sm-2 col-form-label">Nom</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nom_aut" name="nom_aut" placeholder="Nom de l'autorisation">
                </div>
            </div>

            <div class="form-group row">
                <label for="code_aut" class="col-sm-2 col-form-label">Code de l'autorisation</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="code_aut" name="code_aut" placeholder="XXX">
                </div>
            </div>

            <div class="form-group row">
                <label for="desc_adm_aut" class="col-sm-2 col-form-label">Description de l'autorisation pour un administrateur</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="desc_adm_aut" name="desc_adm_aut" placeholder="Description"></textarea>
                </div>
            </div>

            <div class="form-group row">
                <label for="desc_usr_aut" class="col-sm-2 col-form-label">Description de l'autorisation pour un utilisateur</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="desc_usr_aut" name="desc_usr_aut" placeholder="Description"></textarea>
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
    <script src="./js/autorisations.js"></script>
</div>
</div>

