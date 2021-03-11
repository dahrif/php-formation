<?php 
// La structure if… else
// $age = 12;
 
// if ($age > 18) 
// {
//     echo "Bienvenu";
//     $autorisation_entrer = "Oui <br>";
// }
// else 
// {
//     echo "Ceci est un site pour majeur, vous ne pourrais pas y acceder !<br />";
//     $autorisation_entrer = "Non <br>";
// }
 
// echo "Avez-vous l'autorisation d'entrer ? <br> La réponse est : $autorisation_entrer ";

// // boolien
// $autorisation_entrer = true;

// if ($autorisation_entrer == false)
// {
//     echo "Bienvenue petit nouveau. :o)";
// }
// elseif ($autorisation_entrer == true)
// {
//     echo "T'as pas le droit d'entrer ! <br>";
// }


$autorisation_entrer = true;

if ( $autorisation_entrer)
{
    echo "Bienvenue mon ami ";
}
else

    echo "tu n'as pas le droit d y acceder petit ami !";


// le point dexclamation ( ! )
// $autorisation_entrer = false;

// if (! $autorisation_entrer)
// {
//     echo "T'as pas le droit d'entrer !!!!!!";
// }

// Des conditions multiples

// EX1
// $age = 8;
// $langue = "anglais";


// if ($age <= 12 AND $langue == "français")
// {
//     echo "Bienvenue sur mon site !";
// }
// elseif ($age <= 12 && $langue == "anglais")
// {
//     echo "Welcome to my website!";
// }

// EX2
// $pays = "France";

// if ($pays == "France" or $pays == "Belgique")
// {
//     echo "Bienvenue sur notre site !";
// }
// else
// {
//     echo "Désolés, notre service n'est pas encore disponible dans votre pays !";
// }

// switch
// $note = 10;

// switch ($note) // on indique sur quelle variable on travaille
// { 
//     case 0: // dans le cas où $note vaut 0
//         echo "Tu es vraiment un gros nul !!!";
//     break;
    
//     case 5: // dans le cas où $note vaut 5
//         echo "Tu es très mauvais";
//     break;
    
//     case 7: // dans le cas où $note vaut 7
//         echo "Tu es mauvais";
//     break;
    
//     case 10: // etc. etc.
//         echo "Tu as pile poil la moyenne, c'est un peu juste…";
//     break;
    
//     case 12:
//         echo "Tu es assez bon";
//     break;
    
//     case 16:
//         echo "Tu te débrouilles très bien !";
//     break;
    
//     case 20:
//         echo "Excellent travail, c'est parfait !";
//     break;
    
//     default:
//         echo "Désolé, je n'ai pas de message à afficher pour cette note";
// }

// Les ternaires : des conditions condensées
// $age = 24;

// if ($age >= 18)
// {
// 	$majeur = "Yes";
// }
// else
// {
// 	$majeur = "No";
// }
// echo $majeur;
// $majeur = ($age >= 40) ? "true" : "No";
// echo $majeur;

// Une boucle simple : while
// $nombre_de_lignes = 1;

// while ($nombre_de_lignes <= 100)
// {
//     echo 'Je ne dois pas regarder les mouches voler quand j\'apprends le PHP.<br />';
//     $nombre_de_lignes++; // $nombre_de_lignes = $nombre_de_lignes + 1
// }

// $nombre_de_lignes = 1;

// while ($nombre_de_lignes <= 100)
// {
//     echo 'Ceci est la ligne n°' . $nombre_de_lignes . '<br />';
//     $nombre_de_lignes++;
// }

// for ($nombre_de_lignes = 1; $nombre_de_lignes <= 100; $nombre_de_lignes++)
// {
//     echo 'Ceci est la ligne n°' . $nombre_de_lignes . '<br />';
// }
?>