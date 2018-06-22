<?php error_reporting(E_ERROR | E_WARNING | E_PARSE);


function formulario($nombres,$rut,$ap,$am,$telefono,$mesaje,$correo,$as){
	$emisor = "noreplyformulariosvald@gmail.com";
	$receptor= "williamalejandro@hotmail.cl";
	$headers  = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
	/*$headers .= "From: ".$Nombres." <".$emisor.">\r\n  Apeliidos: ".$ap."&nbsp;&nbsp;".$am." \r\n Telefono: ".$telefono." \r\n Telefono: ".$telefono." \r\n Correo: ".$correo."";*/
	$headers .= "From: '".$Nombres."' '".$emisor."'>\r\n";
	if(mail('williamalejandro@hotmail.cl',$as,$mesaje))
	
	{
	    echo "<script>alert('Funcion \"mail()\" ejecutada, por favor verifique su bandeja de correo.');</script>";
		 echo"$emisor $receptor $Nombres $rut,$ap,$am,$telefono,$mesaje,$correo,$as";
    }
	else{
    	echo "<script>alert('No se pudo enviar el mail, por favor verifique su configuracion de correo SMTP saliente.');</script>";
    }

}
?>