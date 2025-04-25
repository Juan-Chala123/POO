public class half extends calculateTotal {
    private final int hour;
    private int guidedClasses;
    private int value;
    private int calculate;

    public half(int hour) {
        super("Half", "Medio");
        this.hour = hour;
        this.guidedClasses = 40000;
        this.value = 30000;
    }

    public int getHour() {
        return this.hour;
    }
    public int getValue() {
        return this.value;
    }
    public int getGuidedClasses() {
        return this.guidedClasses;
    }

    @Override
    public int calculateTotal1() {
        this.calculate = this.hour * this.value + this.guidedClasses;
        return this.calculate;
    }
}