public class Square extends FigureGeometric{
    private final double side;
    private double calculate;
 
    public Square(double side){
        super("Square", "cuadrado");
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
