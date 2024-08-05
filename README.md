function checkArray($tableau) {
    // Compter les occurrences de chaque valeur
    $compteur = array_count_values($tableau);
    
    // Initialiser les indicateurs pour les conditions
    $contientTrois = false;
    $contientDeux = false;
    
    // Vérifier les occurrences
    foreach ($compteur as $valeur => $nombre) {
        if ($nombre == 3) {
            $contientTrois = true;
        } elseif ($nombre == 2) {
            $contientDeux = true;
        }
    }
    
}

