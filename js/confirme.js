
//Acessando todos os links com a classe excluir
const links = document.querySelectorAll('.excluir');
for(let i = 0; i < links.length; i++){
    links[i].addEventListener("click", function(event){
        event.preventDefault();
        let resposta = confirm('Deseja mesmo excluir o aluno?');
        if (resposta) {
            location.href = links[i].getAttribute('href');
        }
    });
}




function verNota(){
    var notaUm = document.getElementById('primeira').value;
    var notaDois = document.getElementById('segunda').value;
    notaUm = parseFloat(notaUm);
    notaDois = parseFloat(notaDois);
    var result = ((notaUm + notaDois)/2).toFixed(1);
    document.getElementById('media').value = result;
    mediaNotas = verSituacao(result);
    document.getElementById('situacao').value = situacaoResultado;
}

function verSituacao(result){
    if(result >= 7){
        situacaoResultado = "Aprovado";
     }else{
        situacaoResultado = "Reprovado";
     }
     return situacaoResultado;
}
