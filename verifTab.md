function verifTab($tab) {
    $counter = array_count_values($tab);
    return (in_array(3, $counter) && in_array(2, $counter))
}