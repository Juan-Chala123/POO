public class total {
    public static void main(String[] args){
        salary discount = new discount(0.04, 0.04, 0.20, 1000000);
        salary extras = new extras(5, 6, 7, 1000000);

        System.out.println("Identificacion: " + discount.getIdentifity());
        System.out.println("Nombre: " + discount.getName() + " " + discount.getLastName() + "\n");

        System.out.println("Salario Base: " + discount.getSalario());
        discount.salarios();
        System.out.println("Salario mas el susidio: " + discount.getSalario());
        System.out.println("Descuento: " + discount.payTotal());
        System.out.println("Extras: " + extras.payTotal());

        System.out.println("Total Sueldo: " + (discount.getSalario() + extras.payTotal() - discount.payTotal()));
    }
}
