public class essential extends calculateTotal {
    private final int hour;
    private int value;
    private int calculate;

    public essential(int hour) {
        super("Essential", "Basico");
        this.hour = hour;
        this.value = 20000;
    }

    public int getHour() {
        return this.hour;
    }
    public int getValue() {
        return this.value;
    }

    @Override
    public int calculateTotal1() {
        this.calculate = this.hour * this.value;
        return this.calculate;
    }
}