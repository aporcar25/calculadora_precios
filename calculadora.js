/**
 * @file Módulo de Calculadora de Precios en JavaScript.
 * @description Permite calcular el IVA, aplicar descuentos y obtener el precio final de venta.
 * @author Antonio
 */

/**
 * Calcula el precio aplicando el porcentaje de IVA.
 * @param {number} precio - Precio base del producto.
 * @param {number} [porcentajeIva=21.0] - Porcentaje de IVA aplicable.
 * @returns {number} Precio final con el IVA incluido.
 */
function calcularIva(precio, porcentajeIva = 21.0) {
    return precio * (1 + porcentajeIva / 100);
}

/**
 * Aplica un descuento porcentual sobre el precio base.
 * @param {number} precio - Precio base.
 * @param {number} porcentajeDescuento - Porcentaje de descuento a aplicar.
 * @returns {number} Precio resultante tras aplicar el descuento.
 */
function aplicarDescuento(precio, porcentajeDescuento) {
    return precio * (1 - porcentajeDescuento / 100);
}

/**
 * Calcula el precio final aplicando primero el descuento y posteriormente el IVA.
 * @param {number} precioBase - Precio original del producto.
 * @param {number} [porcentajeIva=21.0] - Porcentaje de IVA.
 * @param {number} [porcentajeDescuento=0.0] - Porcentaje de descuento.
 * @returns {number} Precio final de venta al público.
 */
function calcularPrecioFinal(precioBase, porcentajeIva = 21.0, porcentajeDescuento = 0.0) {
    const precioDesc = aplicarDescuento(precioBase, porcentajeDescuento);
    const precioFinal = calcularIva(precioDesc, porcentajeIva);
    return precioFinal;
}