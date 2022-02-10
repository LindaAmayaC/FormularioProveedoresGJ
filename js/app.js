var nombreproducto = 
'<input name="nombre_producto[]" id="nombre_producto"  class="col-sm-2 inputList nombre_producto"></input>';
var cantidadProducto =
'<input name="cant_producto[]"   id="cant_producto"    class="col-sm-1 inputList cant_producto numeric" ></input>';
var valorunitario =
'<input name="valor_producto[]"  id="valor_producto"   class="col-sm-1 inputList valor_producto numeric"  type="number" Required ></input>';
var ivaProducto =
'<input name="iva_producto[]"    id="iva_producto"     class="col-sm-1 inputList iva_producto numeric"   type="number" Required ></input>';
var valorTotal =
'<input name="total_producto[]"  id="total_producto"   class="col-sm-2 inputList total_producto numeric" type="number" Required ></input>';
var tiempoGarantia = 
'<input name="tiempoGarantia[]"  id="tiempoGarantia"   class="col-sm-1 inputList tiempoGarantia numeric" type="number" Required placeholder="Días"></input>';
var condicionGarantia =
'<input name="condGarantia[]"    id="condGarantia"     class="col-sm-2 inputList condGarantia numeric"    type="text"   Required ></input>';
var observacionProducto =
'<input name="observacion[]"     id="observacion"      class="col-sm-2 inputList observacion numeric"    type="text" ></input>';


function accionBtnAggProducto(){
  
  $(".row").append(nombreproducto);
  $(".row").append(cantidadProducto);
  $(".row").append(valorunitario);
  $(".row").append(ivaProducto);
  $(".row").append(valorTotal);
  $(".row").append(tiempoGarantia);
  $(".row").append(condicionGarantia);
  $(".row").append(observacionProducto);

}