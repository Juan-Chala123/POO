public class laws {
    public static void main(String[] args) {
        // Create instances of each class
        forces force = new force(10, 2);
        forces inertia = new inertia(5);
        forces action = new action(3, 0);

        // Calculate forces
        System.out.println(inertia.getNameSpanish() + ": " + inertia.calculateForce() + "\n");
        System.out.println(force.getNameSpanish() + ": \n" + ((force) force).getMass() + " x " + ((force) force).getAcceleration() + ": " + force.calculateForce() + "\n");
        System.out.println(action.getNameSpanish() + ": "  + action.calculateForce() + "\n Action: " + ((action) action).getAction() + "\n Reaction: " + ((action) action).getReaction());
    }
}
