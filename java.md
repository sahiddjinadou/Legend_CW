import java.util.HashMap;
import java.util.Map;

public class ChocolateBar {

    public static int chocolate(int N, int[] firstBar, int[] secondBar) {
        // Créer un mappage des indices de secondBar
        Map<Integer, Integer> indexMap = new HashMap<>();
        for (int i = 0; i < N; i++) {
            indexMap.put(secondBar[i], i);
        }

        // Transformer firstBar en indices basés sur secondBar
        int prevIndex = indexMap.get(firstBar[0]);
        int segments = 1;

        for (int i = 1; i < N; i++) {
            int currentIndex = indexMap.get(firstBar[i]);
            if (currentIndex < prevIndex) {
                segments++;
            }
            prevIndex = currentIndex;
        }

        return segments;
    }

    public static void main(String[] args) {
        int N = 5;
        int[] firstBar = {4, 3, 2, 5, 1};
        int[] secondBar = {1, 2, 5, 3, 4};
        System.out.println(chocolate(N, firstBar, secondBar)); // => 3
    }
}



Mappage des Indices : Le mappage des indices de secondBar est créé de la même manière pour retrouver rapidement la position de chaque élément de firstBar dans secondBar.

Transformation et Comptage des Segments :

Nous transformons firstBar en indices basés sur secondBar en utilisant le mappage.
Nous parcourons firstBar pour vérifier combien de segments croissants existent en comparant chaque indice avec le précédent.
Affichage du Résultat : Nous affichons le nombre de segments, ce qui correspond au nombre minimum de cassures nécessaires.




Ici nous avons le second code war que nous traitons!
Exercice2

import java.util.Arrays;

public class Matrix<T> {
    private final Object[][] matrix;
    private final int rows;
    private final int columns;

    // Constructeur de la classe Matrix
    public Matrix(int rows, int columns) {
        this.rows = rows;
        this.columns = columns;
        this.matrix = new Object[rows][columns];
        // Initialisation des valeurs à null (optionnelle, par défaut déjà null)
    }

    // Méthode pour obtenir un élément de la matrice
    public T get(int i, int j) {
        checkIndices(i, j);
        return (T) matrix[i - 1][j - 1];
    }

    // Méthode pour définir un élément de la matrice
    public void set(int i, int j, T value) {
        checkIndices(i, j);
        matrix[i - 1][j - 1] = value;
    }

    // Méthode pour définir une ligne entière
    public void setRow(int i, T... values) {
        if (i < 1 || i > rows) {
            throw new IndexOutOfBoundsException("Invalid row index.");
        }
        if (values.length != columns) {
            throw new IllegalArgumentException("The length of the row does not match the number of columns.");
        }
        matrix[i - 1] = values;
    }

    // Méthode pour échanger deux éléments
    public void swap(int i1, int j1, int i2, int j2) {
        checkIndices(i1, j1);
        checkIndices(i2, j2);
        T temp = get(i1, j1);
        set(i1, j1, get(i2, j2));
        set(i2, j2, temp);
    }

    // Méthode pour convertir la matrice en tableau bidimensionnel de chaînes
    public String[][] toArray() {
        String[][] array = new String[rows][columns];
        for (int i = 0; i < rows; i++) {
            for (int j = 0; j < columns; j++) {
                array[i][j] = (matrix[i][j] == null) ? "null" : matrix[i][j].toString();
            }
        }
        return array;
    }

    // Méthode pour vérifier les indices
    private void checkIndices(int i, int j) {
        if (i < 1 || i > rows || j < 1 || j > columns) {
            throw new IndexOutOfBoundsException("Invalid indices.");
        }
    }
}
//Les commentaires:
Constructeur : Crée une matrice vide de taille rows × columns où chaque élément est initialisé à null.

Méthodes get et set :

get(int i, int j): Retourne l'élément à la position (i, j) après vérification des indices.
set(int i, int j, T value): Définit un élément à la position (i, j).
Méthode setRow :

Remplace le contenu de la ligne i avec les valeurs données.
Assure que le tableau des valeurs a la bonne longueur.
Méthode swap : Échange les valeurs entre deux positions spécifiées.

Méthode toArray : Convertit la matrice en un tableau bidimensionnel de chaînes, représentant chaque élément de la matrice.

Méthode checkIndices : Vérifie que les indices (i, j) sont valides pour éviter des exceptions en dehors des limites de la matrice.


