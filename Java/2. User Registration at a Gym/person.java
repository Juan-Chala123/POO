public abstract class person {
    private final int identifity;
    private final String name;
    private final String lastName;
    private final double weight;
    private final double stature;
    
    public person(int identifity, String name, String lastName, double weight, double stature) {
        this.identifity = identifity;
        this.name = name;
        this.lastName = lastName;
        this.weight = weight;
        this.stature = stature;
    }

    public int getIdentifity() {
        return this.identifity;
    }
    public String getName() {
        return this.name;
    }
    public String getLastName() {
        return this.lastName;
    }
    public double getWeight() {
        return this.weight;
    }
    public double getStature() {
        return this.stature;
    }
}