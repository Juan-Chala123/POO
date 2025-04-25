public abstract class salary {
    private final int identifity;
    private final String name;
    private final String lastName;
    private int salario;

    public salary(int identifity, String name, String lastName, int salario){
        this.identifity = identifity;
        this.name = name;
        this.lastName = lastName;
        this.salario = salario;
    }
    public int getIdentifity(){
        return this.identifity;
    }
    public String getName(){
        return this.name;
    }
    public String getLastName(){
        return this.lastName;
    }
    public int getSalario(){
        return this.salario;
    }

    public abstract double payTotal();


    public void salarios(){
        if(salario < (2 * 1423500)){
            this.salario = this.salario + 200000;
        }else{
            this.salario = this.salario + 0;
        }
    }
}