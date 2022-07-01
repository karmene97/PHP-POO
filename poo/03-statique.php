<!doctype html>
<html lang="fr">

<head>
    <title>- Cours programmation oreintée objet</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>

<body>

    <div class="p-5 bg-light">
        <div class="container">
            <H1 class="display-3 text-center">POO : La programmation orientée objet</H1>
            <p class="lead mt-3">La Visibilité</p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">

                <h2>Que sont Introduction</h2>

                <p>La visibilité représente la portée de nos propriétées et de nos méthodes ,elle definie a quel moment  on pourra y accéder et a quel moment  cela nous sera impossible</p>
                <h3 class="text-secondary text-center">La visibilité public </h3>
                <p>la visibilité public est celle que l'on utilise par defaut au sein de nos classes.
                    Elle va permettre de definir qu'une propriété ou une méthode  est accessible dans la classe en faissant 
                    <code>$this</code>mais aussi sur une page externe lorque l'on fait un require de notre classe,
                    comme on a pu le faire pour accéder a mes différent fichiers
                </p>

                <h3 class="text-secondary text-center">La visibilité <code>private</code> </h3>
                <p>la visibilité privé  ou <code>private</code>signifie que la propriétées est accessible dans la classes
                mais pas en dehoors on ne pourra pas  faire appel directement a notre propriété dans une page externe
                 c'est pour cette  raison que 
                </p>

                <h3 class="text-secondary text-center">La visibilité <code>protected</code> </h3>
                <p>Lorsqu'une variable a la visibilité "protégé" ou <code>protected</code>on a 
            a peu près le meme champs d'action qu'une  visibilité private.
        En revanche cette visibilité est legerement moins stricte car on peut reutilisé
    la propriété protégé lorsque l'on herite de la classe sur laquelle elle est declarée.Nous verrons la notion d'hritage un peu plus tard</p> 

    <div class="col-12">
    <h2 class="text-center"> Mais pourquoi choisir autre chose que  public </h2>
    <p>Les notions de public,privéé et protégée ne sont pas necéssaire a 100% LORsque on travaille  seul 
        ce pendant si votre code a vocation d'etre vu par d'autres dev , ou si l'on a besoin d'etre debuger , il faudra
        bien definir les propriétés pour que les personnes  qui passent derrière 
        comprennent ce qui peut etre modifié ou pas 
    </p>
    <p>Généralement dans les codes destinés  a la relecture par autres ,on trouveras tout les propriétés en private
        et getters et setters pour y acceder.
        de la mm façon q'un getters récupère une information (ex:le nom, la vie ou encore des points d'attaque )
        un setter permet de donner ou modifier une valeur . 
        les getters et les setters serviront de garde fou pour eviter les modifications imtempestives du code . 
    </p>
    </div><!-- fin de la col-12 -->

               

            </div><!-- fin de la col-12 -->

          
            
        </div>
        
    </div>


    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>
</html>