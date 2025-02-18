<?php

if(isset($_GET['p'])){

    // création d'un switch qui va vérifier la variable get p
    switch($_GET['p']){
        case "accueil":
            $title ="Accueil";
            include "../templates/accueilView.php";
            break;
        case "aboutme":
            $title="A propos";
            include "../templates/aproposView.php";
            break;
         case "history":
            $title="Histoire";
            include "../templates/histoireView.php";
            break;
        case "contact":
            $title="Contact";
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