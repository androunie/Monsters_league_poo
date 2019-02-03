<?php

require __DIR__ . '/functions.php';
require __DIR__ . '/monster.php';

$monsters = getMonstersBDD();
?>



<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Monsters League</title>

        <!-- CSS files -->
        <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Monsters League</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                </ul>

                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>

        <div class="jumbotron">
            <h1 class="display-4">Fight against Monsters!</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <hr class="my-4">
        </div>

        <div class="container">
            <table class="table table-hover">
                <caption><i class="fas fa-info"></i> Members of the monster league</caption>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Weight</th>
                        <th>Bio</th>
                       <th>Strength</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($monsters as $monster) { ?>
                        <tr>
                            <td><?php echo $monster->getName(); ?></td>
                            <td><?php echo $monster->getAge();?></td>
                            <td><?php echo $monster->getWeight(); ?></td>
                            <td><?php echo $monster->getBio(); ?></td>
                           <td><?php echo $monster->getStrength(); ?></td>


                        </tr>
                    <?php } ?>
                </tbody>
            </table>

            <div class="row border p-3">
                <div class="form-group col-md-6 offset-md-3">
                    <form method="POST" action="fight.php">
                        <h2 class="text-center">The battle</h2>
                        <select class=" form-control" name="first_monster_name">
                            <option value="">Choose a Monster</option>
                            <?php foreach ($monsters as $key => $monster) { ?>
                                <option value="<?php echo $key; ?>"><?php echo $monster->getName(); ?></option>
                            <?php } ?>
                        </select>
                        <br>
                        <p class="text-center">AGAINST</p>
                        <br>
                        <select class="form-control" name="second_monster_name">
                            <option value="">Choose a Monster</option>
                            <?php foreach ($monsters as $key => $monster) { ?>
                                <option value="<?php echo $key; ?>"><?php echo $monster->getName(); ?></option>
                            <?php } ?>
                        </select>
                        <br>
                        <button class="btn btn-md btn-danger center-block" type="submit">Fight!</button>
                    </form>
                </div>
            </div>
        </div>

                        

                        <h2 class="text-center"> Manage your database: </h2>

<!-- J'ai créer ici 2 moyens de modifier la bdd: ajout et suppression d'un monstre
    -> le premier permet d'ajouter un monstre à la bdd, clicker sur ce lien permettra d'accéder au formulaire specifique à l'ajout d'un monstre ('NewpageAjoutMonstre.php')
    -> le 2ème reprend le même principe, sauf que la page du formulaire est différente (ici on nous renverra à 'pageSupMonstre.php')
 -->
<li>
     <a class="nav-link" href="NewpageAjoutMonstre.php">Add a Monster<span class="sr-only">(current)</span></a>
                    </li>

                    <li>
     <a class="nav-link" href="pageSupMonstre.php">Delete a Monster<span class="sr-only">(current)</span></a>
                    </li>


        <footer>
            <div class="container">
                <p>Copyright © 2019 Monsters League</p>
            </div>
        </footer>


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
    </body>
</html>