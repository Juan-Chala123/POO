public class Triangle extends FigureGeometric{
    private final double side;
    private double calculate;
 
    public Triangle(double side){
        super("Triangle", "Triangulo");
        this.side=side;
    }

    public double getSide(){
        return this.side;
    }
    @Override
    public double calculateArea(){
        this.calculate=(this.getSide() * this.getSide()) / 2;
        return this.calculate;
    }
}
