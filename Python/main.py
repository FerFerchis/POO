from car import Car
from account import Account

if __name__ == "__main__":
    print("Hola mundo")
    car = Car("AMS234",Account("Andres Herrera","ANDA876"))
    print(vars(car))
    print(vars(car.driver))

    car2 = Car("QWE567",Account("Martha","AND3876"))
    print(vars(car2))
    print(vars(car2.driver))