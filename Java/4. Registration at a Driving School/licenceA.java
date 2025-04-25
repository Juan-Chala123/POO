public class licenceA extends licenses {
    private final int value;

    public licenceA(int value) {
        super("Licencia A");
        this.value = value;
    }

    @Override
    public int calculateValue() {
        return this.value;
    }
}
