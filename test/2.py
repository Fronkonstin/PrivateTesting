class Entrega_Paquetes:
    def __init__(self, codigo, nif_destinatario, calle, poblacion, cod_postal):
        self.codigo = codigo
        self.nif_destinatario = nif_destinatario
        self.calle = calle
        self.poblacion = poblacion
        self.cod_postal = cod_postal

entregas = []

def introducir_entrega():
    codigo = input("Introduce el código de la entrega: ")
    nif_destinatario = input("Introduce el NIF del destinatario: ")
    calle = input("Introduce la calle: ")
    poblacion = input("Introduce la población: ")
    cod_postal = input("Introduce el código postal: ")
    entrega = Entrega_Paquetes(codigo, nif_destinatario, calle, poblacion, cod_postal)
    entregas.append(entrega)

def consultar_paquetes():
    nif = input("Introduce el NIF del destinatario para consultar los paquetes: ")
    paquetes = [entrega for entrega in entregas if entrega.nif_destinatario == nif]
    for paquete in paquetes:
        print("Código:", paquete.codigo)
        print("Calle:", paquete.calle)
        print("Población:", paquete.poblacion)
        print("Código Postal:", paquete.cod_postal)

while True:
    print("1.- Introducir entrega de paquetes.")
    print("2.- Consultar paquetes de un destinatario.")
    print("3.- Salir.")
    opcion = input("Elige una opción: ")
    if opcion == "1":
        introducir_entrega()
    elif opcion == "2":
        consultar_paquetes()
    elif opcion == "3":
        break
    else:
        print("Opción no válida. Por favor, elige una opción válida.")