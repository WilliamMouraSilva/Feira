<?php
include_once 'src/widget/Element.php';

class Cadastro
{
	function __construct()
	{
		$this->show();
	}

	private function show()
	{
		//criando formulario
		$form=new Element("form");
		$form->AddProperties("method","POST");
		$form->AddProperties("action","valida.php");
		$form->AddProperties("class","form-control");

		$fieldset=new Element("fieldset");
		$fieldset->AddProperties("class","fieldset");
		$form->AddChildren($fieldset);

		$legend=new Element("legend");
		$legend->AddChildren("Formulario de cadastro");
		$fieldset->AddChildren($legend);

		//adicionando as labels
		$h2=new Element("h2");
		$labelNome=new Element("label");
		//label nome
		$labelNome->AddProperties("for","'txtNome'");
		$labelNome->AddProperties("class","'label label-primary'");
		$labelNome->AddChildren("Nome");

		//label cfpf
		$labelCpf=new Element("label");
		$labelCpf->AddProperties("for","'txtCpf'");
		$labelCpf->AddProperties("class","'label label-primary'");
		$labelCpf->AddChildren("CPF");

		//label email
		$labelEmail=new Element("label");
		$labelEmail->AddProperties("for","'txtEmail'");
		$labelEmail->AddProperties("class","'label label-primary'");
		$labelEmail->AddChildren("Email");

		//label senha
		$labelSenha=new Element("label");
		$labelSenha->AddProperties("for","'txtSenha'");
		$labelSenha->AddProperties("class","'label label-primary'");
		$labelSenha->AddChildren("Senha");

		//label confirma a senha
		$labelConfirma=new Element("label");
		$labelConfirma->AddProperties("for","'txtConfirma'");
		$labelConfirma->AddProperties("class","'label label-primary'");
		$labelConfirma->AddChildren("Confirme a Senha");

		$h2->AddChildren($labelNome);
		$h2->AddChildren($labelCpf);
		$h2->AddChildren($labelEmail);
		$h2->AddChildren($labelSenha);
		$h2->AddChildren($labelConfirma);

		
		//Adicionando os campos

		//campo nome
		$txtNome=new Element("input");
		$txtNome->AddProperties("type","'text'");
		$txtNome->AddProperties("id","'txtNome'");
		$txtNome->AddProperties("class","'text'");

		//campo cpf
		$txtCpf=new Element("input");
		$txtCpf->AddProperties("type","'text'");
		$txtCpf->AddProperties("id","'txtCpf'");

		//campo email
		$txtEmail=new Element("input");
		$txtEmail->AddProperties("type","'email'");
		$txtEmail->AddProperties("id","'txtEmail'");

		//campo senha
		$txtSenha=new Element("input");
		$txtSenha->AddProperties("type","'password'");
		$txtSenha->AddProperties("id","'txtPassword'");

		//campo de confirmar senha
		$txtConfirma=new Element("input");
		$txtConfirma->AddProperties("type","'password'");
		$txtConfirma->AddProperties("id","'txtConfirma'");

		//botão cadastrar
		$botao=new Element("input");
		$botao->AddProperties("type","'submit'");
		$botao->AddProperties("id","'btCadastrar'");
		$botao->AddProperties("class","'btn btn-primary'");

		$fieldset->AddChildren($h2);
		$fieldset->AddChildren($txtNome);
		$fieldset->AddChildren($txtCpf);
		$fieldset->AddChildren($txtEmail);
		$fieldset->AddChildren($txtSenha);
		$fieldset->AddChildren($txtConfirma);
		$fieldset->AddChildren($botao);







		$form->show();
	}
}