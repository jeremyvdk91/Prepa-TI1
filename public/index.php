<?php

if(isset($_GET['p'])){

    // création d'un switch qui va vérifier la variable get p
    switch($_GET['p']){
        case "accueil":
            include "../templates/accueilView.php";
            break;
        case "aboutme":
            include "../templates/aproposView.php";
            break;
         case "history":
            include "../templates/histoireView.php";
            break;
        case "contact":
            include "../templates/contactView.php";
            break;
  
        // variable p pas dans le switch
        default:
            include "../templates/erreur404View.php";
       
    }

// sinon nous sommes sur l'accueil    
}else{
    // Appel de la vue
    include "../templates/accueilView.php";
}