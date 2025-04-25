public class value {
    public static void main(String[] args) {

        licenses licenseA = new licenceA(227500);
        licenses licenseB = new licenceB(273900);
        licenses licenseC = new licenceC(273900);
        person student = new student();

        System.out.println(licenseA.getName() + " value: " + String.format("%,d", (int) Math.floor(licenseA.calculateValue())).replace(",", "."));
        System.out.println(licenseB.getName() + " value: " + String.format("%,d", (int) Math.floor(licenseB.calculateValue())).replace(",", "."));
        System.out.println(licenseC.getName() + " value: " + String.format("%,d", (int) Math.floor(licenseC.calculateValue())).replace(",", ".") + "\n");

        System.out.println("Name: " + student.getName() + " " + student.getLastName());
        System.out.println("Identifity: " + student.getIdentifity());
        System.out.println("Address: " + student.getAddress());
        System.out.println("Telephone: " + student.getTelephone());
        System.out.println("Rh: " + student.getRh());
        System.out.println("Licence: " + student.getLicence());
    }
}
