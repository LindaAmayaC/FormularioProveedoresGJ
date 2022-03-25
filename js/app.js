var nombreproducto = 
'<input name="nombre_producto[]" id="nombre_producto"  class="col-sm-4 inputList nombre_producto textProveedor"  ></input>';
var cantidadProducto =
'<input name="cant_producto[]"   id="cant_producto"    class="col-sm-2 inputList cant_producto numeric textProveedor" onkeyup="calcularTotal()" type="number" ></input>';
var valorunitario =
'<input name="valor_producto[]"  id="valor_producto"   class="col-sm-2 inputList valor_producto numeric textProveedor"  onkeyup="calcularTotal()" type="number" ></input>';
var iva =
' <input name="iva_producto[]"  id="iva_producto"   class="col-sm-2 inputList iva_producto numeric textProveedor" onkeyup="calcularTotal()"  type="number" Required ></input>';
var valorTotal =
'<input name="total_producto[]"  id="total_producto"   class="col-sm-2 inputList total_producto numeric textProveedor" type="number" readonly></input>';



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
function calcularTotal(index){
  var cantidadProducto = document.getElementsById("cant_producto").value;
  var valorUnitarioProducto = document.getElementById("valor_producto").value;
  var ivaProducto = document.getElementById("iva_producto").value;
  var totalProducto = document.getElementById("total_producto");

  var iva = ivaProducto / 100;
  var totalIva = iva * valorUnitarioProducto;
  var totalValor = parseInt(totalIva) + parseInt(valorUnitarioProducto);
  
  totalProducto.value = totalValor *cantidadProducto; 
  
}