var nombreproducto = 
'<input name="nombre_producto[]" id="nombre_producto"  class="col-sm-4 inputList nombre_producto textProveedor"  ></input>';
var cantidadProducto =
'<input name="cant_producto[]"   id="cant_producto"    class="col-sm-2 inputList cant_producto numeric textProveedor" type="number" ></input>';
var valorunitario =
'<input name="valor_producto[]"  id="valor_producto"   class="col-sm-2 inputList valor_producto numeric textProveedor"  type="number" ></input>';
var iva =
' <input name="iva_producto[]"  id="iva_producto"   class="col-sm-2 inputList iva_producto numeric textProveedor"  type="number" Required ></input>';
var valorTotal =
'<input name="total_producto[]"  id="total_producto"   class="col-sm-2 inputList total_producto numeric textProveedor" type="number" ></input>';



function accionBtnAggProducto(){
  
  $(".row").append(nombreproducto);
  $(".row").append(cantidadProducto);
  $(".row").append(valorunitario);
  $(".row").append(iva);
  $(".row").append(valorTotal);

}

function accionBtnRegresar(){
  window.location = "index.php";
}