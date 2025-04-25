public class total {
    public static void main(String[] args) {
        person administrador = new administrador(200000, 20, 40000);
        person coach = new coach(200000, 20, 30000);
        person supervisor = new supervisor(200000, 20, 50000);

        System.out.println("Administrador: " + administrador.getName() + " " + administrador.getLastName());
        System.out.println("Identificacion: " + administrador.getIdentification());
        System.out.println("Salary: " + administrador.calculateSalary() + "\n");
        
        System.out.println("Coach: " + coach.getName() + " " + coach.getLastName());
        System.out.println("Identificacion: " + coach.getIdentification());
        System.out.println("Salary: " + coach.calculateSalary() + "\n");

        System.out.println("Supervisor: " + supervisor.getName() + " " + supervisor.getLastName());
        System.out.println("Identificacion: " + supervisor.getIdentification());
        System.out.println("Salary: " + supervisor.calculateSalary() + "\n");
    }
}
