public class administrador extends person {
    private int salary;
    private int subsidy;
    private int numberDay;
    private int valueDay;
    private double health;
    private double pension;
    private double arl;
    private double discount;
    private double total;

    public administrador(int subsidy, int numberDay, int valueDay) {
        super(239843902, "Pablo", "Guzman");
        this.subsidy = subsidy;
        this.numberDay = numberDay;
        this.valueDay = valueDay;
    }
    public int getSubsidy() {
        return this.subsidy;
    }
    public int getNumberDay() {
        return this.numberDay;
    }
    public int getValueDay() {
        return this.valueDay;
    }
    public double getHealth() {
        return this.health;
    }
    public double getPension() {
        return this.pension;
    }
    public double getArl() {
        return this.arl;
    }

    @Override
    public double calculateSalary() {
        this.salary = (this.numberDay * this.valueDay) + this.subsidy;
        this.health = this.salary * 0.05;
        this.pension = this.salary * 0.04;
        this.arl = this.salary * 0.02;
        this.discount = this.health + this.pension + this.arl;
        this.total = this.salary - this.discount;
        return this.total;
    }
}