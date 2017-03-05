function valida()	
{
	var senha=document.getElementById("txtSenha").value;
	var confirma=document.getElementById("txtConfirma").value;
	if(senha===confirma)
	{
		alert("senhas validas");

	}
	else
	{
		$("#txtSenha").css("border-color","red");
		$("#txtConfirma").css("border-color","red");
		$("#btCadastrar").css("display","none");
		alert("senhas diferentes");

	}
}