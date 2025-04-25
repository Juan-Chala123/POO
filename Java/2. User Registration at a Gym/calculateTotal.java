public abstract class calculateTotal {
    private final String name;
    private final String nameSpanish;

    public calculateTotal(String name, String nameSpanish) {
        this.nameSpanish = nameSpanish;
        this.name = name;
    }

    public String getName() {
        return this.name;
    }
    public String getNameSpanish() {
        return this.nameSpanish;
    }

    public abstract int calculateTotal1();
}