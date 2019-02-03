<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Monsters League</title>

        <!-- CSS files -->
        <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="bootstrap-4.1.3-dist/css/inscription.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">Monsters League</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li>
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
					
					<li class="nav-item active">
                        <a class="nav-link" href="index.php">Add Monster <span class="sr-only">(current)</span></a>
                    </li>

                </ul>

                <form class="form-inline my-2 my-lg-0">
					
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
		
		<!-- Cette page contient un formulaire, l'utilisateur doit remplir le formulaire avec les attributs de l'objet Monstre afin de le supprimer de la bdd
			Ce formulaire une fois remplie supprimera l'élement en appellant ma fonction créer dans le fichier 'supFromBDD.php'
		 -->
		
		
		<div class="jumbotron">
            <h1 class="display-4">Fight against Monsters!</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <hr class="my-4">
        </div>
		
		<div class="inscription">
			<form method="POST" action="supFromBDD.php">
			
				<h2 class="text-center">Delete a monster from the BDD</h2> <br />
				<label for="Name">Name</label> <br />
				<input type="text" name="name"> <br /> <br />
				
				<label for="age">Age</label> <br />
				<input type="text" name="age"> <br /> <br />
				
				<label for="weight">weight</label> <br />
				<input type="text" name="weight"> <br /> <br />
				
				<label for="bio">bio</label> <br />
				<input type="text" name="bio"> <br /> <br />

				<label for="strength">Strength</label> <br />
				<input type="text" name="strength"> <br /> <br />
				
				<button class="btn-submit" id="btn-a" type="submit">Submit</button>
				<button class="btn-cancel"><a href="connexion.php" id="btn-a"> Cancel </a> </button>
			</form>
		</div>
		
	</body>
</html>

	