public class action extends forces {
    private final int action;
    private int reaction;
    //private int calculate;

    public action(int action, int reaction) {
        super("Action and Reaction", "Accion y Reaccion");
        this.action = action;
        this.reaction = reaction;
    }
    public int getAction() {
        return this.action;
    }
    public int getReaction() {
        return this.reaction;
    }

    @Override
    public int calculateForce() {
        this.reaction = -this.action;
        return this.reaction;
    }
}