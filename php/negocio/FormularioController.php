<?php
class FormularioController{

    function enviarFormulario($datosFormulario){
        $formulariosNormalizadoAEnviar  = $this -> ListadoCamposForm($datosFormulario);
        $formularioDao = new FormularioDao;
        $formularioEnviado = $formularioDao -> formularioEnviadoABitrix($formulariosNormalizadoAEnviar);
        return $formularioEnviado; 
    }


    function ListadoCamposForm($camposFormulario){
        $contador= count($camposFormulario[2]);
        $ListadoCamposFormulario = array();
        for($i = 0; $i < $contador; $i++){
            
            $listaCamposFormulario = new Formulario(
            $camposFormulario[0],$camposFormulario[1],
            $camposFormulario[2][$i],$camposFormulario[3][$i],
            $camposFormulario[4][$i],$camposFormulario[5],
            $camposFormulario[6],$camposFormulario[7],
            $camposFormulario[8][$i],$camposFormulario[9],
            $camposFormulario[10],$camposFormulario[11],$camposFormulario[12],
            $camposFormulario[13],$camposFormulario[14],$camposFormulario[15]); 

            $ListadoCamposFormulario[] = $listaCamposFormulario;
        } 
        return $ListadoCamposFormulario;
    } 
} 
?>
