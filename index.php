<?php

/* Se necesita una función que calcule el impuesto de un producto, basado en una lista de impuestos. 
Esta función va a recibir dos parametros, el precio total y la llave del impuesto a calcular.
 La lista de impuestos estará en un archivo json en la misma ruta del directorio.
 Si el impuesto ingresado no existe debe hacer throw de un Exception y si el precio es menor a 0, debe hacer thrown de un error.
  Si el resultado es correcto, debe retornarlo como un valor flotante en formato de la moneda de peso dominicano
*/

/*
* @param float $precio
* @param string $impuesto (key)
* @return string
*/
function calcularImpuesto($precio, $impuesto)
{
    try {
        $impuestos = json_decode(file_get_contents('./impuestos.json'), true);
        if (!array_key_exists($impuesto, $impuestos)) {
            throw new Exception('El impuesto no existe');
        }
        if ($precio <= 0) {
            throw new Exception('El precio no puede ser menor o igual a 0');
        }
        $resultado = $precio * $impuestos[$impuesto];
        $resultado = number_format($resultado, 2, '.', '');
        $resultado = '$' . $resultado . ' DOP';
        return $resultado;
    } catch (Exception $e) {
        echo 'Error', $e->getMessage(), "/n";
    }
}
echo (calcularImpuesto(2000, 'itbis'));
