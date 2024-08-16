
# Explication de la solution pas à pas

## Introduction
L'objectif de cette solution est de créer une fonction en PHP qui prend deux tableaux en entrée et renvoie un tableau contenant les éléments du premier tableau qui ne sont pas présents dans le second tableau.

## Partie 1 : Création d'un tableau vide pour le résultat
```php
$result = [];
```
- On commence par initialiser un tableau vide nommé `$result`.
- Ce tableau va contenir les éléments filtrés, c’est-à-dire ceux qui ne sont **pas** présents dans `$b`.

## Partie 2 : Parcourir chaque élément du tableau `$a`
```php
foreach ($a as $value) {
```
- On utilise une boucle `foreach` pour parcourir chaque élément de `$a`.
- À chaque itération, la valeur actuelle est stockée dans la variable `$value`.

## Partie 3 : Vérification si l'élément n'est pas dans `$b`
```php
if (!in_array($value, $b)) {
```
- La fonction `in_array($value, $b)` vérifie si la valeur actuelle (`$value`) est présente dans `$b`.
- On utilise `!` pour inverser le résultat. Cela signifie que l'on vérifie si la valeur **n'est pas** dans `$b`.

## Partie 4 : Ajouter l'élément au résultat si la condition est remplie
```php
$result[] = $value;
```
- Si la valeur n'est pas dans `$b`, on l'ajoute au tableau `$result` en utilisant `$result[] = $value;`.

## Partie 5 : Retourner le tableau `$result`
```php
return $result;
```
- Après avoir parcouru tous les éléments de `$a`, on retourne le tableau `$result` qui contient les éléments filtrés.

## Exemple d'utilisation
Cet exemple montre comment utiliser la fonction. On attend que `[1, 3]` soit affiché, car tous les `2` présents dans `$a` sont également dans `$b` et doivent donc être retirés.

