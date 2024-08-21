
# Explication de la solution : Compter le nombre de doublons

## Objectif
L'objectif est de créer une fonction qui renvoie le nombre de caractères alphabétiques distincts ou de chiffres qui apparaissent plusieurs fois dans une chaîne d'entrée. Cette fonction doit être insensible à la casse (c’est-à-dire, 'a' et 'A' sont considérés comme identiques).

## Étapes de la solution

1. **Convertir la chaîne en minuscules :**
    - Pour ignorer la casse, on convertit tous les caractères de la chaîne en minuscules. Cela permet de traiter les lettres majuscules et minuscules comme étant identiques (par exemple, 'a' et 'A').

2. **Créer un tableau pour stocker la fréquence de chaque caractère :**
    - Un tableau associatif (ou dictionnaire) est utilisé pour garder une trace du nombre de fois que chaque caractère apparaît dans la chaîne.

3. **Compter la fréquence de chaque caractère :**
    - On parcourt chaque caractère de la chaîne.
    - Si le caractère est déjà présent dans le tableau des fréquences, on incrémente son compteur.
    - Sinon, on initialise son compteur à 1.

4. **Compter le nombre de caractères qui apparaissent plus d'une fois :**
    - On parcourt les valeurs du tableau des fréquences.
    - Si un caractère apparaît plus d'une fois, on incrémente un compteur de doublons.

5. **Renvoyer le nombre total de doublons :**
    - Le nombre final de caractères qui apparaissent plus d'une fois est renvoyé.

## Exemple d'application

- Pour la chaîne `"abcde"`, aucun caractère ne se répète plus d'une fois, donc le résultat est `0`.
- Pour la chaîne `"aabbcde"`, les caractères `'a'` et `'b'` apparaissent chacun deux fois, donc le résultat est `2`.
- Pour la chaîne `"aabBcde"`, les caractères `'a'` et `'b'` apparaissent plus d'une fois (en ignorant la casse), donc le résultat est `2`.
- Pour la chaîne `"indivisibilité"`, le caractère `'i'` apparaît six fois, donc le résultat est `1`.
- Pour la chaîne `"Indivisibilités"`, les caractères `'i'` et `'s'` apparaissent plusieurs fois, donc le résultat est `2`.


