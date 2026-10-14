<?php
/**
 * Módulo de Calculadora de Precios en PHP.
 * 
 * Permite calcular el IVA, aplicar descuentos y obtener el precio final de venta.
 * 
 * @package CalculadoraPrecios
 * @author Antonio
 * @version 1.0
 */

/**
 * Calcula el precio aplicando el porcentaje de IVA.
 *
 * @param float $precio Precio base del producto.
 * @param float $porcentajeIva Porcentaje de IVA aplicable (por defecto 21.0%).
 * @return float Precio final con el IVA incluido.
 */
function calcularIva(float $precio, float $porcentajeIva = 21.0): float {
    return $precio * (1 + $porcentajeIva / 100);
}

/**
 * Aplica un descuento porcentual sobre el precio base.
 *
 * @param float $precio Precio base.
 * @param float $porcentajeDescuento Porcentaje de descuento a aplicar.
 * @return float Precio resultante tras aplicar el descuento.
 */
function aplicarDescuento(float $precio, float $porcentajeDescuento): float {
    return $precio * (1 - $porcentajeDescuento / 100);
}

/**
 * Calcula el precio final aplicando primero el descuento y posteriormente el IVA.
 *
 * @param float $precioBase Precio original del producto.
 * @param float $porcentajeIva Porcentaje de IVA.
 * @param float $porcentajeDescuento Porcentaje de descuento.
 * @return float Precio final de venta al público.
 */
function calcularPrecioFinal(float $precioBase, float $porcentajeIva = 21.0, float $porcentajeDescuento = 0.0): float {
    $precioDesc = aplicarDescuento($precioBase, $porcentajeDescuento);
    $precioFinal = calcularIva($precioDesc, $porcentajeIva);
    return $precioFinal;
}
?>