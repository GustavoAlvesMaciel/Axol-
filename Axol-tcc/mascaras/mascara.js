/* ----------------------- mascara de telefone usuario ---------------------- */
    function mascaraFoneUsuario(event) {
                        var valor = document.getElementById("txtTelefoneUsuario").attributes[0].ownerElement['value'];
                        var retorno = valor.replace(/\D/g, "");
                        retorno = retorno.replace(/^0/, "");
                        if (retorno.length > 10) {
                          retorno = retorno.replace(/^(\d\d)(\d{5})(\d{4}).*/, "($1) $2-$3");
                        } else if (retorno.length > 5) {
                          if (retorno.length == 6 && event.code == "Backspace") { 
                            // necessário pois senão o "-" fica sempre voltando ao dar backspace
                            return; 
                          } 
                          retorno = retorno.replace(/^(\d\d)(\d{4})(\d{0,4}).*/, "($1) $2-$3");
                        } else if (retorno.length > 2) {
                          retorno = retorno.replace(/^(\d\d)(\d{0,5})/, "($1) $2");
                        } else {
                          if (retorno.length != 0) {
                            retorno = retorno.replace(/^(\d*)/, "($1");
                          }
                        }
                        document.getElementById("txtTelefoneUsuario").attributes[0].ownerElement['value'] = retorno;
                      }

                  
 /* ---------------------- mascara de telefone prestador --------------------- */
                    
// document.getElementById('txtTelefoneUsuario').addEventListener('input', function(e) {

//   var x = e.target.value.replace(/\D/g, '').match(/(\d{0,2})(\d{0,3})(\d{0,3})(\d{0,1})/);

//     e.target.value = !x[2] ? x[1] : x[1] +  x[2] + (x[3] ? '-' : '') + x[3] + (x[4] ? '' + x[4] : '');

// });
function mascaraFone(event) {
    var valor = document.getElementById("txtTelefonePrestadorServico").attributes[0].ownerElement['value'];
    var retorno = valor.replace(/\D/g, "");
    retorno = retorno.replace(/^0/, "");
    if (retorno.length > 10) {
      retorno = retorno.replace(/^(\d\d)(\d{5})(\d{4}).*/, "($1) $2-$3");
    } else if (retorno.length > 5) {
      if (retorno.length == 6 && event.code == "Backspace") { 
        // necessário pois senão o "-" fica sempre voltando ao dar backspace
        return; 
      } 
      retorno = retorno.replace(/^(\d\d)(\d{4})(\d{0,4}).*/, "($1) $2-$3");
    } else if (retorno.length > 2) {
      retorno = retorno.replace(/^(\d\d)(\d{0,5})/, "($1) $2");
    } else {
      if (retorno.length != 0) {
        retorno = retorno.replace(/^(\d*)/, "($1");
      }
    }
    document.getElementById("txtTelefonePrestadorServico").attributes[0].ownerElement['value'] = retorno;
  }


  /* ----------------------- mascara de cpf e cnpj ----------------------- */

function ValidaCPF(){	
	var RegraValida=document.getElementById("txtCpfUsuario").value; 
	var cpfValido = /^(([0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2})|([0-9]{11}))$/;	 
	if (cpfValido.test(RegraValida) == true)	{ 
	console.log("CPF Válido");	
	} else	{	 
	console.log("CPF Inválido");	
	}
    }
  function fMasc(objeto,mascara) {
obj=objeto
masc=mascara
setTimeout("fMascEx()",1)
}

  function fMascEx() {
obj.value=masc(obj.value)
}

   function mCPF(cpf){
cpf=cpf.replace(/\D/g,"")
cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2")
cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2")
cpf=cpf.replace(/(\d{3})(\d{1,2})$/,"$1-$2")
return cpf
}


/* ---------------------------- mascara de email ---------------------------- */
function validaEmail(email) { 
  var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email);
}

/* ----------------------------- mascara do cep ----------------------------- */
// mascra e valida cep prestador


function buscaCep() {
  let cep = document.getElementById('txtCepUsuario').value;
  if(cep !== ""){
    let url = "https://brasilapi.com.br/api/cep/v1/" + cep;

    let req = new XMLHttpRequest();
    req.open("GET", url);
    req.send();

    //tratar a resposta da requisiçao
    req.onload = function(){
      if(req.status === 200){
        let endereco = JSON.parse(req.response);
        document.getElementById("txtLogradouroUsuario").value = endereco.street;
        document.getElementById("txtBairroUsuario").value = endereco.neighborhood;
        document.getElementById("txtCidadeUsuario").value = endereco.city;
        document.getElementById("txtUf").value = endereco.state;
      }
      else if(req.status === 404){
      alert("CEP invalido");
      }
      else{
        alert("Erro ao fazer a requisição");
      }
    }
  }
}

window.onload = function(){
  let txtCep = document.getElementById("txtCepUsuario");
  txtCep.addEventListener("blur", buscaCep);
}


/* ---------------------- mascara de data de nascimento --------------------- */

function validar() {
  value = document.getElementById("nascimento").value;
  re = /^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/;
  if (re.test(value)) {
    document.troca.submit();
  } else {
    alert('Data de Nascimento Inválida');
    form.nascimento.focus();
    return false;
  }
}

/* ------------------------------ validar nome ------------------------------ */

function validar() {
  value = document.getElementById("nome").value;
  re = /^[a-zA-ZéúíóáÉÚÍÓÁèùìòàçÇÈÙÌÒÀõãñÕÃÑêûîôâÊÛÎÔÂëÿüïöäËYÜÏÖÄ\-\ \s]+$/;
  if (re.test(value)) {
    document.troca.submit();
  } else {
    alert('Nome Inválido');
    form.nome.focus();
    return false;
  }
}

//mascara de Email

function validar (field) {
  value = document.getElementById("txtEmailUsuario").value;
  usuario = field.value.substring(0, field.value.indexOf("@"));
dominio = field.value.substring(field.value.indexOf("@")+ 1, field.value.length);
if ((usuario.length >=1) &&
  (dominio.length >=3) &&
  (usuario.search("@")==-1) &&
  (dominio.search("@")==-1) &&
  (usuario.search(" ")==-1) &&
  (dominio.search(" ")==-1) &&
  (dominio.search(".")!=-1) &&
  (dominio.indexOf(".") >=1)&&
  (dominio.lastIndexOf(".") < dominio.length - 1)) {

document.getElementById("msgemail").innerHTML="E-mail válido";
alert("email valido");

}else{
document.getElementById("msgemail").innerHTML="<font color='red'>Email inválido </font>";
alert("E-mail invalido");
}
}

/* ----------------------------- mascara de cnpj ---------------------------- */
document.getElementById("txtCnpj").addEventListener('input', function(e) {
  var x = e.target.value.replace(/\D/g, '').match(/(\d{0,2})(\d{0,3})(\d{0,3})(\d{0,4})(\d{0,2})/);
  e.target.value = !x[2] ? x[1] : x[1] + '.' + x[2] + (x[3] ? '.' : '') + x[3] + (x[4] ? '/' : x[4]) + x[4] + (x[5] ? '-' + x[5] : '');
});


/* ----------------------------- mascara de cnpj ---------------------------- */

function mascaraMutuario(o,f){
  v_obj=o
  v_fun=f
  setTimeout('execmascara()',1)
}

function execmascara(){
  v_obj.value=v_fun(v_obj.value)
}

function cpfCnpj(v){

  //Remove tudo o que não é dígito
  v=v.replace(/\D/g,"")

  if (v.length <= 14) { //CPF

      //Coloca um ponto entre o terceiro e o quarto dígitos
      v=v.replace(/(\d{3})(\d)/,"$1.$2")

      //Coloca um ponto entre o terceiro e o quarto dígitos
      //de novo (para o segundo bloco de números)
      v=v.replace(/(\d{3})(\d)/,"$1.$2")

      //Coloca um hífen entre o terceiro e o quarto dígitos
      v=v.replace(/(\d{3})(\d{1,2})$/,"$1-$2")

  } else { //CNPJ

      //Coloca ponto entre o segundo e o terceiro dígitos
      v=v.replace(/^(\d{2})(\d)/,"$1.$2")

      //Coloca ponto entre o quinto e o sexto dígitos
      v=v.replace(/^(\d{2})\.(\d{3})(\d)/,"$1.$2.$3")

      //Coloca uma barra entre o oitavo e o nono dígitos
      v=v.replace(/\.(\d{3})(\d)/,".$1/$2")

      //Coloca um hífen depois do bloco de quatro dígitos
      v=v.replace(/(\d{4})(\d)/,"$1-$2")

  }

  return v

}

/* ------------------------------- valida cnpj ------------------------------ */
// function ValidarCNPJ(ObjCnpj){
//   var cnpj = ObjCnpj.value;
//   var valida = new Array(6,5,4,3,2,9,8,7,6,5,4,3,2);
//   var dig1= new Number;
//   var dig2= new Number;

//   exp = /\.|\-|\//g
//   cnpj = cnpj.toString().replace( exp, "" ); 
//   var digito = new Number(eval(cnpj.charAt(12)+cnpj.charAt(13)));

//   for(i = 0; i<valida.length; i++){
//           dig1 += (i>0? (cnpj.charAt(i-1)*valida[i]):0);  
//           dig2 += cnpj.charAt(i)*valida[i];       
//   }
//   dig1 = (((dig1%11)<2)? 0:(11-(dig1%11)));
//   dig2 = (((dig2%11)<2)? 0:(11-(dig2%11)));

//   if(((dig1*10)+dig2) != digito)  
//           alert('CNPJ Invalido!');

// }


// function validaCNPJ($cnpj = null) {

// 	// Verifica se um número foi informado
// 	if(empty($cnpj)) {
// 		return false;
// 	}

// 	// Elimina possivel mascara
// 	$cnpj = preg_replace("/[^0-9]/", "", $cnpj);
// 	$cnpj = str_pad($cnpj, 14, '0', STR_PAD_LEFT);
	
// 	// Verifica se o numero de digitos informados é igual a 11 
// 	if (strlen($cnpj) != 14) {
// 		return false;
// 	}
	
// 	// Verifica se nenhuma das sequências invalidas abaixo 
// 	// foi digitada. Caso afirmativo, retorna falso
// 	else if ($cnpj == '00000000000000' || 
// 		$cnpj == '11111111111111' || 
// 		$cnpj == '22222222222222' || 
// 		$cnpj == '33333333333333' || 
// 		$cnpj == '44444444444444' || 
// 		$cnpj == '55555555555555' || 
// 		$cnpj == '66666666666666' || 
// 		$cnpj == '77777777777777' || 
// 		$cnpj == '88888888888888' || 
// 		$cnpj == '99999999999999') {
// 		return false;
		
// 	 // Calcula os digitos verificadores para verificar se o
// 	 // CPF é válido
// 	 } else {   
	 
// 		$j = 5;
// 		$k = 6;
// 		$soma1 = "";
// 		$soma2 = "";

// 		for ($i = 0; $i < 13; $i++) {

// 			$j = $j == 1 ? 9 : $j;
// 			$k = $k == 1 ? 9 : $k;

// 			$soma2 += ($cnpj{$i} * $k);

// 			if ($i < 12) {
// 				$soma1 += ($cnpj{$i} * $j);
// 			}

// 			$k--;
// 			$j--;

// 		}

// 		$digito1 = $soma1 % 11 < 2 ? 0 : 11 - $soma1 % 11;
// 		$digito2 = $soma2 % 11 < 2 ? 0 : 11 - $soma2 % 11;

// 		return (($cnpj{12} == $digito1) and ($cnpj{13} == $digito2));
	 
// 	}
// }

