<?php
session_start();
require("./../config/config.inc.php");
require_once(WAY . "/includes/head.inc.php");

//TODO: à retirer
$per = new Personne();
$tab_per = $per->getAll();
$fnc = new Fonction();
$tab_fnc = $fnc->getAll();
$tab_fnc_per = $fnc->getTabPerAllFnc();
//print_r($tab_fnc_per);
?>
<div class="row">
    <div class="header">
        <h3>Attribuer les fonctions aux utilisateurs</h3>
    </div>
</div>
<div class="col-md-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            Ajouter une autorisation
        </div>
        <div class="panel-body">
            <table class="table table-bordered">
                <tr>
                    <th>Nom, prénom</th>
                    <?php foreach ($tab_fnc as $fnc): ?>
                        <td><?= $fnc['nom_fnc'] ?></td>
                    <?php endforeach ?>
                </tr>
                <?php foreach ($tab_per as $per): ?>
                <tr>
                    <td><?= $per['nom_per'] . " " . $per['prenom_per'] ?> </td>
                    <?php foreach ($tab_fnc as $fnc) :?>
                        <td><input type="checkbox" class="auth"
                                <?php if(isset($tab_fnc_per[$fnc['id_fnc']][$per['id_per']])): ?>
                                checked="checked"
                                <?php endif ?>
                                   id_per="<?=$per['id_per']?>"
                                   id_fnc="<?=$fnc['id_fnc']?>"
                                   value="1"></td>
                    <?php endforeach?>
                </tr>
                <?php endforeach ?>
                </table>
        </div>
    </div>
</div>
<script src="./js/attribution_fnc.js"></script>
</body>
</html>