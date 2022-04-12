/*
EJERCICIO 2
1. Modificar la comision de los vendedores y ponerla al 0.5% cuando ganan mas de 80,000
*/

UPDATE vendedores SET comision=0.5 WHERE sueldo >= 80000;