<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Cidisi - Games</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="header">
                    <h3>Inscription</h3>
                </div>
            </div>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Inscription au portail de jeux
                </div>


                <div class="panel-body">
                    <form id="inscription_form" action="check.php" method="post">
                        <div class="form-group row">
                            <label for="nom_per" class="col-sm-2 col-form-label">Nom</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nom_per" name="nom_per" placeholder="votre nom">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="prenom_per" class="col-sm-2 col-form-label">Prenom</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="prenom_per" name="prenom_per" placeholder="votre prénom">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email_per" class="col-sm-2 col-form-label">E-mail</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email_per" name="email_per" placeholder="votre adresse e-mail">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-sm-2 col-form-label">Mot de passe</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="password" name="password" placeholder="votre mot de passe">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password_conf" class="col-sm-2 col-form-label">Password (confirmation)</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="password_conf" name="password_conf" placeholder="Saisissez votre mot de passe une seconde fois">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-offset-2">
                                <input type="checkbox" id="news_letter" name="news_letter" value="1">
                                <label for="news_letter">La formation d'informaticien m'intéresse</label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-offset-10">
                                <input type="submit" class="btn btn-primary" id="submit_conf" name="submit_conf" value="S'inscrire">
                                <input type="reset" class="btn btn-warning" id="reset_conf" name="reset_conf" value="Annuler">
                            </div>
                        </div>
                    </form>
                </div>

                <div class="panel-footer">

                </div>
            </div>
        </div>
    </body>
</html>