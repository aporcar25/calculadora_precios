def calcular_iva(precio: float, porcentaje_iva: float = 21.0) -> float:
    """
    Calcula el precio aplicando el porcentaje de IVA.
    
    Args:
        precio (float): Precio base del producto.
        porcentaje_iva (float): Porcentaje de IVA aplicable (por defecto 21.0%).
        
    Returns:
        float: Precio final con el IVA incluido.
    """
    return precio * (1 + porcentaje_iva / 100)


def aplicar_descuento(precio: float, porcentaje_descuento: float) -> float:
    """
    Aplica un descuento porcentual sobre el precio base.
    
    Args:
        precio (float): Precio base.
        porcentaje_descuento (float): Porcentaje de descuento.
        
    Returns:
        float: Precio resultante tras aplicar el descuento.
    """
    return precio * (1 - porcentaje_descuento / 100)


def calcular_precio_final(precio_base: float, porcentaje_iva: float = 21.0, porcentaje_descuento: float = 0.0) -> float:
    """
    Calcula el precio final aplicando primero el descuento y posteriormente el IVA.
    
    Args:
        precio_base (float): Precio original.
        porcentaje_iva (float): Porcentaje de IVA.
        porcentaje_descuento (float): Porcentaje de descuento.
        
    Returns:
        float: Precio final de venta al público.
    """
    precio_desc = aplicar_descuento(precio_base, porcentaje_descuento)
    precio_final = calcular_iva(precio_desc, porcentaje_iva)
    return precio_final