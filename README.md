# Calcular Impuesto - PHP

### En este programa utilizamos:

- `array_key_exists`
- `try - catch`
- `number_format`

### Dependencias:

- `impuestos.json`

Esta función va a recibir parametros, el precio a pagar y la llave del impuesto a calcular.

En el desarrollo del programa se utilizo una funcion llamada:

- `calcularImpuesto`: a esta funcion se le asignaron los siguientes parametros los cuales fueron `($precio, $impuesto)`.

Luego abrimos los que es try - catch para el manejo de errores.

Luego tomamos y llamamos lo que es el archivo `impuestos.json` y que este tenia los impuestos a implementar.

Dentro de la funcion introducimos la condicional if la cual permitio usar la funcion nativa de php como es:

- `array_key_exists`: Esta lo que hara que nos devuelva true si la key existe en el arreglo.

Luego para ir finalizando creamos la varible llamada:

- `$resultado`: y esta nos ayudara a imprimir la multiplicacion de las dos variable ya mencionadas que son `$precio` e `$impuesto`.

Utilizamos lo que es:

- `number_format`: Para darde formato de nuemero flotante al resultado a imprimir.

Y por ultimo pedimos que nos retorne el resultado
y luego lo imprimimos llamando la funcion con los parametro a calcular.
