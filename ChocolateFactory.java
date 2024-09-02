mport java.util.HashMap;
import java.util.Map;

public class ChocolateFactory {
    public int calculateMinimumBreaks(int N, int[] firstBar, int[] secondBar) {
        Map<Integer, Integer> firstBarMap = new HashMap<>();
        Map<Integer, Integer> secondBarMap = new HashMap<>();

        // Create maps to store the indices of each confectioner in both bars
        for (int i = 0; i < N; i++) {
            firstBarMap.put(firstBar[i], i);
            secondBarMap.put(secondBar[i], i);
        }

        // Calculate the number of breaks by counting the non-matching indices
        int breaks = 0;
        for (int i = 0; i < N; i++) {
            if (firstBarMap.get(secondBar[i]) != i) {
                breaks++;
            }
        }

        return breaks;
    }
}