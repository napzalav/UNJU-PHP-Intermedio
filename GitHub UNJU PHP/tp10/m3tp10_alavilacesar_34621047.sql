-- TP 10
--detalle a tener en cuenta con relación a ***las backsticks (``)*** parece no tener impacto si en las consultas llevan o no backsticks en los nombre de las tablas

--Punto 1 : Descargue e importe la Base de Datos llamada miempresa.sql. Luego realice las siguientes consultas y muestre los resultados obtenidos

--a. Obtener los datos completos de los empleados.
SELECT * FROM `empleados`;


--b. Obtener los datos completos de los departamentos.
SELECT * FROM `departamentos`;


--c. Obtener los datos de los empleados con cargo ‘Secretaria’.
SELECT * FROM empleados WHERE cargo = 'secretaria';


--d. Obtener el nombre y salario de los empleados.
SELECT nombre, salario FROM empleados;


--e. Obtener los datos de los empleados vendedores, ordenados por nombre.
SELECT * FROM empleados WHERE cargo = 'vendedor' ORDER BY nombre;


--f. Listar el nombre de los departamentos.
SELECT nombre FROM departamentos; --en este caso me trae todos los nombres que existe en la base de datos

SELECT DISTINCT nombre FROM departamentos; --si quiero que los nombres de los departamentos no se repitan uso DISTINCT


--g. Obtener el nombre y cargo de todos los empleados, ordenado por salario.
SELECT nombre, cargo FROM empleados ORDER BY salario;


--h. Listar los salarios y comisiones de los empleados del departamento 2000, ordenado por comisión.
SELECT salario, comision FROM empleados WHERE codigo_dpto = 2000 ORDER BY comision;


--i. Listar todas las comisiones.
SELECT comision FROM empleados; --trae todas las comisiones cargadas en la base de datos

SELECT DISTINCT comision FROM empleados; --si quiero el las comisiones de los empleados no se repitan uso DISTINCT


--j. Obtener la lista de los empleados que ganan una comisión superior a su sueldo.
SELECT * FROM empleados WHERE comision > salario;


--k. Listar los empleados cuya comisión es menor o igual que el 30% de su sueldo.
SELECT * FROM empleados WHERE comision <= salario * 0.3;


--l. Hallar el salario y la comisión de aquellos empleados cuyo número de documento de identidad es superior al ‘19.709.802’.
SELECT salario, comision FROM empleados WHERE dni > '19.709.802';


--m. Muestra los empleados cuyo nombre empiece entre las letras J y Z (rango). Liste estos empleados y su cargo por orden alfabético.
SELECT nombre, cargo FROM empleados WHERE nombre >= 'J' AND nombre <= 'Z' ORDER BY nombre;


--n. Listar el salario, la comisión, el salario total (salario + comisión), documento de identidad y nombre de aquellos empleados que tienen comisión superior a $1.000.000, ordenar el informe por el número del documento de identidad.
SELECT salario, comision, (salario + comision), dni, nombre FROM empleados WHERE comision >= 1000000 ORDER BY fecha_incorporacion;


--o. Obtener un listado similar al anterior, pero de aquellos que NO tienen comisión.
SELECT salario, comision, dni, nombre FROM empleados WHERE comision = 0 ORDER BY fecha_incorporacion;


--p. Hallar los empleados cuyo nombre no contiene la cadena “MA”.
SELECT * FROM empleados WHERE nombre NOT LIKE '%MA%';


--q. Obtener los nombres de los departamentos que no sean “INVESTIGACIÓN”, ni “VENTAS”, ni ‘MANTENIMIENTO’.
SELECT nombre FROM departamentos WHERE nombre NOT LIKE '%INVESTIGACION%' AND nombre NOT LIKE '%VENTAS%' AND nombre NOT LIKE '%MANTENIMIENTO%';


--r. Obtener el nombre y el departamento de los empleados con cargo ‘Secretaria’ o ‘Vendedor’, que no trabajan en el departamento de “PRODUCCIÓN”, cuyo salario es superior a $1.000.000, ordenados por fecha de incorporación.
SELECT nombre, codigo_dpto FROM empleados WHERE (cargo = 'Secretaria' OR cargo = 'Vendedor') AND codigo_dpto != 1500 AND salario > 1000000 ORDER BY fecha_incorporacion;


--s. Obtener información de los empleados cuyo nombre tiene exactamente 11 caracteres.
SELECT * FROM empleados WHERE LENGTH(nombre) = 11;


--t. Listar los datos de los empleados cuyo nombre inicia por la letra ‘M’, su salario es mayor a $800.000 o reciben comisión, y trabajan en el departamento ‘VENTAS’
SELECT * FROM empleados WHERE nombre LIKE 'M%' AND (salario > 800000 OR comision > 0) AND cargo = 'Vendedor';


--u. Mostrar el salario más alto de la empresa.
SELECT MAX(salario) FROM empleados;

SELECT MAX(salario) AS salario_maximo FROM empleados; --si quiero que me devuelva como resultado una columna con el nombre "salario_maximo"


--v. Mostrar cada una de las comisiones y el número de empleados que las reciben. Solo si tiene comisión.
SELECT comision, COUNT(*) AS num_empleados FROM empleados WHERE comision > 0 GROUP BY comision;


--w. Mostrar el nombre del último empleado de la lista por orden alfabético.
SELECT nombre from empleados ORDER BY nombre DESC LIMIT 1;


--x. Hallar el salario más alto, el más bajo y la diferencia entre ellos.
SELECT MAX(salario), MIN(salario), (MAX(salario) - MIN(salario)) from empleados;

SELECT MAX(salario), MIN(salario), (MAX(salario) - MIN(salario)) AS diferencia from empleados; --si quiero que el resultado se guarde en una nueva columna llamada "diferencia"


--y. Mostrar el número de empleados de sexo femenino y de sexo masculino, por departamento.
SELECT codigo_dpto,
COUNT(CASE WHEN sexo = 'F' THEN 1 END) AS num_femenino,
COUNT(CASE WHEN sexo = 'M' THEN 1 END) AS num_masculino
FROM empleados
GROUP BY codigo_dpto;


--z. Hallar el salario promedio por departamento.
SELECT codigo_dpto, AVG(salario) AS salario_promedio FROM empleados GROUP BY codigo_dpto;


--aa. Mostrar la lista de los empleados cuyo salario es mayor o igual que el promedio de la empresa. Ordenarlo por departamento.
SELECT * FROM empleados WHERE salario >= (SELECT AVG (salario) FROM empleados) ORDER BY codigo_dpto;


--bb. Hallar los departamentos que tienen más de tres empleados. Mostrar el número de empleados de esos departamentos.
SELECT codigo_dpto, COUNT(*) AS num_empleados
FROM empleados
GROUP BY codigo_dpto
HAVING COUNT(*) > 3;


--cc. Mostrar el código y nombre de cada jefe, junto al número de empleados que dirige. Solo los que tengan más de un empleado.
SELECT e1.jefe_id AS codigo_jefe, e2.nombre AS nombre_jefe, COUNT(*) AS num_empleados_dirigidos --seleccionamos "e1.jefe_id" como el codigo del jefe, "e2.nombre" como el nombre del jefe y utilizamos la función de agregación COUNT para contar el numero de empleados que estan dirigidos por cada jefe
FROM empleados e1
INNER JOIN empleados e2 ON e1.jefe_id = e2.dni --hacemos un INNER JOIN con la tabla empleados dos veces, una vez como e1 para representar los empleados que tienen jefe (jefe_id no es nulo) y otra vez como e2 para representar los jefes (se relacionan mediante jefe_id = dni).
GROUP BY e1.jefe_id, e2.nombre --usamos GROUP BY para agrupar los resultados por el código del jefe (e1.jefe_id) y el nombre del jefe (e2.nombre).
HAVING COUNT(*) > 1; --filtramos aquellos jefes que tienen más de un empleado a su cargo


--dd. Hallar los departamentos que no tienen empleados.
SELECT d.codigo_dpto, d.nombre
FROM departamentos d
LEFT JOIN empleados e ON d.codigo_dpto = e.codigo_dpto
WHERE e.dni IS NULL;
--*******visualizar la cantidad de empleados que tiene cada departamento:****
--SELECT d.codigo_dpto, d.nombre, COUNT(*) AS num_empleados FROM departamentos d JOIN empleados e ON d.codigo_dpto = e.codigo_dpto GROUP BY d.codigo_dpto, d.nombre;

--ee. Mostrar el nombre del departamento cuya suma de salarios sea la más alta, indicando el valor de la suma.
SELECT d.nombre AS nombre_departamento, SUM(e.salario) AS suma_salarios FROM departamentos d JOIN empleados e ON d.codigo_dpto = e.codigo_dpto GROUP BY d.codigo_dpto, d.nombre ORDER BY suma_salarios DESC LIMIT 1;