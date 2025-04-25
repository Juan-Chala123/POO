public abstract class person {
    private final int identifity;
    private final String name;
    private final String lastName;
    private final String address;
    private final String telephone;
    private final String rh;
    private final String licence;

    public person(int identifity, String name, String lastName, String address, String telephone, String rh, String licence) {
        this.identifity = identifity;
        this.name = name;
        this.lastName = lastName;
        this.address = address;
        this.telephone = telephone;
        this.rh = rh;
        this.licence = licence;
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
    public String getAddress() {
        return this.address;
    }
    public String getTelephone() {
        return this.telephone;
    }
    public String getRh() {
        return this.rh;
    }
    public String getLicence() {
        return this.licence;
    }
}