public abstract class person {
    private final int identification;
    private final String name;
    private final String lastName;

    public person(int identification, String name, String lastName) {
        this.identification = identification;
        this.name = name;
        this.lastName = lastName;
    }

    public int getIdentification() {
        return this.identification;
    }

    public String getName() {
        return this.name;
    }

    public String getLastName() {
        return this.lastName;
    }

    public abstract double calculateSalary();
}