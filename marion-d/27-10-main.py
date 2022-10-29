from sympy import *

x, a, b, c, d = symbols('x a b c d')
def f(x):
    return a*x**3 + b*x**2 + c*x + d

print(solve([f(-1) - 2, f(1) - 8, f(2) - 32], [a, b, c, d]))

solutions = []
for d in range(0, 5):
    if(d % 2 == 0):
        solutions.append([d/2 + 1, 5 - d, 2 - d/2, d])

print(solutions)
