public class extras extends salary {
    private int dayTime;
    private int nightTime;
    private int holiDays;
    private double extrass;

    public extras(int dayTime, int nightTime, int holiDays, int salario) {
        super(1080292891, "Juan", "Chala", salario);
        this.dayTime = dayTime;
        this.nightTime = nightTime;
        this.holiDays = holiDays;
    }
    public double getDayTime() {
        return this.dayTime;
    }
    public double getNightTime() {
        return this.nightTime;
    }
    public double getHoliDays() {
        return this.holiDays;
    }

    @Override
    public double payTotal(){
        this.extrass = (0.125 * (this.dayTime * this.getSalario())) + (0.175* (this.getSalario() * this.nightTime)) + (0.200 * (this.getSalario() * this.holiDays));
        return this.extrass;
    }
}