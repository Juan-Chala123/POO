public class premium extends calculateTotal {
    private final int hour;
    private int coach;
    private int humidArea;
    private int value;
    private int calculate;

    public premium(int hour) {
        super("Premium", "Premium");
        this.hour = hour;
        this.coach = 50000;
        this.humidArea = 70000;
        this.value = 40000;
    }

    public int getHour() {
        return this.hour;
    }
    public int getValue() {
        return this.value;
    }
    public int getCoach() {
        return this.coach;
    }
    public int getHumidArea() {
        return this.humidArea;
    }

    @Override
    public int calculateTotal1() {
        this.calculate = this.hour * this.value + this.coach + this.humidArea;
        return this.calculate;
    }
}