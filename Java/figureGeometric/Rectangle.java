public class Rectangle extends FigureGeometric{
    private final double side;
    private double calculate;
 
    public Rectangle(double side){
        super("Rectangle", "Rectangulo");
        this.side=side;
    }

    public double getSide(){
        return this.side;
    }
    @Override
    public double calculateArea(){
        this.calculate=this.getSide() * this.getSide();
        return this.calculate;
    }
}
