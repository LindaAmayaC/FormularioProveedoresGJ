let contador = document.getElementById("contador").value;
var nombreproducto = 
'<input name="nombre_producto[]"  id="nombre_producto_{0}"   class="col-sm-4 inputList nombre_producto textProveedor"  ></input>';
var cantidadProducto =
'<input name="cant_producto[]"   id="cant_producto_{0}" class="col-sm-2 inputList cant_producto numeric textProveedor" onkeyup="calcularTotal()" type="number" ></input>';
var valorunitario =
'<input name="valor_producto[]"  id="valor_producto_{0}"    class="col-sm-2 inputList valor_producto numeric textProveedor"  onkeyup="calcularTotal()" type="number" ></input>';
var iva =
' <input name="iva_producto[]" id="iva_producto_{0}"     class="col-sm-2 inputList iva_producto numeric textProveedor" onkeyup="calcularTotal()"  type="number" Required ></input>';
var valorTotal =
'<input name="total_producto[]"  id="total_producto_{0}"    class="col-sm-2 inputList total_producto numeric textProveedor" type="number" readonly></input>';




function accionBtnAggProducto(){
  contador = parseInt(contador)+ 1;
    
  $(".row").append(nombreproducto.format(contador));
  $(".row").append(cantidadProducto.format(contador));
  $(".row").append(valorunitario.format(contador));
  $(".row").append(iva.format(contador));
  $(".row").append(valorTotal.format(contador));
}

function accionBtnRegresar(){
    window.location = "index.php";
}
function calcularTotal(){
  for (let ii = 0; ii <= contador; ii++) {
    var cantidadProducto = document.getElementById( 'cant_producto_'+ii).value;
    var valorUnitarioProducto = document.getElementById('valor_producto_'+ii).value;
    var ivaProducto = document.getElementById('iva_producto_'+ii).value;
    var totalProducto = document.getElementById('total_producto_'+ii);

    var iva = ivaProducto / 100; 
    var totalIva = iva * valorUnitarioProducto;
    var totalValor = parseInt(totalIva) + parseInt(valorUnitarioProducto); 
    
    totalProducto.value = totalValor *cantidadProducto;  
  } 
}
String.prototype.format = function () {
    var args = arguments;
    return this.replace(/{([0-9]+)}/g, function (match, index) {
    return typeof args[index] == 'undefined' ? match : args[index];
    });
};