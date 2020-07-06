<?php 
    if (isset($_SESSION['id']) && $_SESSION['id']== TRUE) {
        echo 'admin.php';
    }
    
    $extensions = array ('.jpg', '.jpeg', '.png');
    $extension = strrchr($_FILES['avatar']['name'],'.');
    if(!in_array($extension, $extensions)) {
        $erreur = "Erreur : Veuillez utiliser une extension de type jpg, jpeg, png";
    }

    $taille_maxi = 2097152;
    $taille = filesize ($_FILES['avatar']['tmp_name']);
    if ($taille>$taille_maxi) {
        $erreur = "Erreur : Veuillez utiliser un fichier moins lourd (taille maxi : 2mo)";
    }
    

?> 