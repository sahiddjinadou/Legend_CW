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

