public class valueTotal {
    public static void main(String[] args) {
        calculateTotal premium = new premium(10);
        calculateTotal half = new half(10);
        calculateTotal essential = new essential(10);

        System.out.println("Nuestros Servicios: ");
        System.out.println(premium.getNameSpanish() + ": $" + String.format("%,d", premium.calculateTotal1()).replace(",", "."));
        System.out.println(half.getNameSpanish() + ": $" + String.format("%,d", half.calculateTotal1()).replace(",", "."));
        System.out.println(essential.getNameSpanish() + ": $" + String.format("%,d", essential.calculateTotal1()).replace(",", ".") + "\n");

        person cliente = new cliente();
        System.out.println("Cliente: " + cliente.getName() + " " + cliente.getLastName());
        System.out.println("Identidad: " + cliente.getIdentifity());
        System.out.println("Peso: " + cliente.getWeight());
        System.out.println("Estatura: " + cliente.getStature());
    }
}