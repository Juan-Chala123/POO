public class inertia extends forces {
    private int inertia;
    private final int mass;

    public inertia(int mass) {
        super("Inertia", "Inercia");
        this.mass = mass;
        this.inertia = mass;
    }
    public int getMass() {
        return this.mass;
    }
    public int getInertia() {
        return this.inertia;
    }

    @Override
    public int calculateForce() {
        this.inertia = this.mass;
        return this.inertia;
    }
}