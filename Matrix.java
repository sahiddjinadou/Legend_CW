public class Matrix<T> {
    private T[][] data;

    public Matrix(int rows, int columns) {
        data = (T[][]) new Object[rows][columns];
    }

    public T get(int row, int column) {
        return data[row - 1][column - 1];
    }

    public void set(int row, int column, T value) {
        data[row - 1][column - 1] = value;
    }

    public void setRow(int row, T... values) {
        System.arraycopy(values, 0, data[row - 1], 0, values.length);
    }

    public void swap(int row1, int column1, int row2, int column2) {
        T temp = data[row1 - 1][column1 - 1];
        data[row1 - 1][column1 - 1] = data[row2 - 1][column2 - 1];
        data[row2 - 1][column2 - 1] = temp;
    }

    public String[][] toArray() {
        String[][] result = new String[data.length][data[0].length];
        for (int i = 0; i < data.length; i++) {
            for (int j = 0; j < data[i].length; j++) {
                result[i][j] = String.valueOf(data[i][j]);
            }
        }
        return result;
    }
}