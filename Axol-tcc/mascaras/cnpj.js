// mascra e valida cep prestador


function buscaCnpj() {
    let cnpj = document.getElementById('txtCnpj').value;
    if(cnpj !== ""){
      let url = "https://brasilapi.com.br/api/cnpj/v1/" + cnpj;
  
      let req = new XMLHttpRequest();
      req.open("GET", url);
      req.send();
  
      //tratar a resposta da requisiçao
      req.onload = function(){
        if(req.status === 200){
          let valida = JSON.parse(req.response);
          document.getElementById("txtNome").value = valida.nome_fantasia;
          document.getElementById("txtCep").value = valida.cep;
          document.getElementById("txtUf").value = valida.uf;
          document.getElementById("txtLogradouro").value = valida.logradouro;
          document.getElementById("txtBairro").value = valida.bairro;
          document.getElementById("txtCidade").value = valida.municipio;
          document.getElementById("txtNumero").value = valida.numero;
        }
        else if(req.status === 404){
        alert("CNPJ invalido");
        }
        else{
          alert("Erro ao fazer a requisição");
        }
      }
    }
  }
  
  window.onload = function(){
    let txtCnpj = document.getElementById("txtCnpj");
    txtCnpj.addEventListener("blur", buscaCnpj);
  }
  
  
  
  
  
  
  