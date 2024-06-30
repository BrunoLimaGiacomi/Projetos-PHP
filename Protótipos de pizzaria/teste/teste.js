// Cálculo de 1+1
const resultado = 1 + 1;

// Criação do objeto XMLHttpRequest
const xhr = new XMLHttpRequest();

// URL do arquivo PHP que receberá o resultado
const url = "exibir_resultado.php";

// Criação dos parâmetros para enviar via POST
const params = "resultado=" + resultado;

// Configuração da requisição AJAX
xhr.open("POST", url, true);
xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

// Callback da requisição AJAX
xhr.onreadystatechange = function() {
  if (xhr.readyState === 4 && xhr.status === 200) {
    // Exibe a resposta do PHP
    console.log(xhr.responseText);
  }
};

// Envio da requisição AJAX com os parâmetros
xhr.send(params);
