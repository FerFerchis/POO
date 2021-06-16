package Java;
class Main{
    public static void main(String[] args) {
        System.out.println("HOLA MUNDO");
        UberX uberX = new UberX("AMQ123", new Account("Amdres Herrera", "AND123"),"Chevrolet","Sonic");
        uberX.setPassenger(4);
        uberX.printDataCar();

        UberVan uberVan = new UberVan("FGH123", new Account("Amdres Herrera", "AND123"));
        uberVan.setPassenger(6);
/*
        Car car2 = new Car("QWE123", new Account("Amdrea Herrera", "ANDA876"));
        car2.passenger = 3;
        car2.printDataCar();
        */
    }
}