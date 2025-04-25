public class licenceB extends licenses{
    private final int value;

    public licenceB(int value) {
        super("Licencia B");
        this.value = value;
    }

    public int calculateValue() {
        return this.value;
    }
}
