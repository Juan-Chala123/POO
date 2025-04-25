public class figure {
    public static void main(String[] args){
        FigureGeometric Square= new Square(3);
        FigureGeometric Circle= new Circle(4);
        FigureGeometric Rectangle= new Rectangle(5);
        FigureGeometric Triangle= new Triangle(6);

        System.out.println("Area of square: "+Square.getNameSpanish()+ "::"+Square.calculateArea());
        System.out.println("Area of circle: "+Circle.getNameSpanish()+ "::"+Circle.calculateArea());
        System.out.println("Area of rectangle: "+Rectangle.getNameSpanish()+ "::"+Rectangle.calculateArea());
        System.out.println("Area of triangle: "+Triangle.getNameSpanish()+ "::"+Triangle.calculateArea());
    }
}