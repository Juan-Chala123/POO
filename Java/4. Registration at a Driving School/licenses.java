public abstract class licenses {
    private final String name;

    public licenses(String name) {
        this.name = name;
    }
    public String getName() {
        return this.name;
    }

    public abstract int calculateValue();
}