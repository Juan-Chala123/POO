public class force extends forces {
    private final int mass;
    private final int acceleration;
    private int force;

    public force(int mass, int acceleration) {
        super("Force", "Fuerza");
        this.mass = mass;
        this.acceleration = acceleration;
    }
    public int getMass() {
        return this.mass;
    }
    public int getAcceleration() {
        return this.acceleration;
    }

    @Override
    public int calculateForce() {
        this.force = this.mass * this.acceleration;
        return this.force;
    }
}
