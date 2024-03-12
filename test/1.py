number_list = []

def is_prime(n):
    if n <= 1:
        return False
    for i in range(2, int(n**0.5) + 1):
        if n % i == 0:
            return False
    return True

def sum_individual_digits(number):
    if '.' in number:
        number = number.replace('.', '')
    return sum(int(digit) for digit in number)

while True:
    number = input("Introduce un número decimal: ")
    number_list.append(number)
    print("Números en la lista:", number_list)
    individual_sum = sum_individual_digits(number)
    print("Suma de las cifras del número:", individual_sum)
    if is_prime(individual_sum):
        print("La suma de las cifras es un número primo. El programa se detiene.")
        break