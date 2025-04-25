public class licenceC extends licenses {
    private final int value;

    public licenceC(int value) {
        super("Licencia C");
        this.value = value;
    }

    @Override
    public int calculateValue() {
        return this.value;
    }
}
