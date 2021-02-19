<!DOCTYPE html>
<html lang="fr">

<head>
    <title>LiveQuestion</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="ques-rep.css">
    <script src="script.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="../index.php">Livequestion</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor03">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="hConnexion.php">Les questions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#questionModal">Poser une question</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../EspaceMembre/espacemembre.php">Mon profil</a>
                </li>
            </ul>
        </div>
    </nav>
    <section>
        <div class="container">
            <h3><a href="ques-rep.php">Titre de la question</a></h3>
            <!-- TOAST -->
            <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <strong class="mr-auto"><a href="../EspaceMembre/espacemembre.php"><i class="fas fa-user-circle"></i> NomUtilisateur</a> | nbr avis récoltés | Catégories | <i class="far fa-heart"></i></strong>
                    <small>Date de la question</small>
                </div>
                <div class="toast-body">
                    Question ?
                </div>
            </div>
            <!-- MODAL -->
            <div class="modal fade" id="questionModal" tabindex="-1" aria-labelledby="questionModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="questionModalLabel">Posez une question <i class="fas fa-pen"></i></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="hConnexion.php" method="post">
                                <label for="categorie">Choisissez une catégorie :</label>
                                <select name="categorie" id="categorie">
                                    <option value="musique">Musique</option>
                                    <option value="sport">Sport</option>
                                    <option value="cinema">Cinéma</option>
                                </select><br>
                                <label for="question">Contenu de la question :</label>
                                <textarea id="question" name="question" rows="5" cols="62" maxlength="255"></textarea>
                                <input type="submit" value="Ajouter une question" class="btn btn-primary">
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Annuler</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h3><span class="roselq">Nbr</span> Réponses</h3>
                    <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="toast-header">
                            <strong class="mr-auto"><a href="../EspaceMembre/espacemembre.php"><i class="fas fa-user-circle"></i> NomUtilisateur</a> | <i class="far fa-heart"></i></strong>
                            <small>Date de la réponse</small>
                        </div>
                        <div class="toast-body">
                            Réponse !
                        </div>
                    </div>
                    <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="toast-header">
                            <strong class="mr-auto"><a href="../EspaceMembre/espacemembre.php"><i class="fas fa-user-circle"></i> NomUtilisateur</a> | <i class="far fa-heart"></i></strong>
                            <small>Date de la réponse</small>
                        </div>
                        <div class="toast-body">
                            Réponse !
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h3>Répondre à la question</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <form action="ques-rep.php" method="post">
                                <label for="pseudo">Votre pseudo</label><br>
                                <input type="text" id="pseudo" name="pseudo"><br>
                                <label for="avatar">Lien web vers votre avatar</label><br>
                                <input type="text" id="avatar" name="avatar"><br>
                                <label for="reponse">Votre réponse</label><br>
                                <textarea id="reponse" name="reponse"></textarea>
                                <br>
                                <input type="submit" class="rosebutton">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>