function enviarcontato(){
    var nome = document.getElementById("nome").value;
    var email = document.getElementById("email").value;
    var telefone = document.getElementById("telefone").value;
    var mensagem = document.getElementById("mensagem").value;

    $.post("control/contato.control.php", {nome: nome, email: email, telefone: telefone, mensagem: mensagem}, 
    	function(resposta){
            
        		if (resposta.state == "true") {
        			mostraDialogo(resposta.msg, 'success', 5000);
                    document.getElementById("btn-contato").disabled = true;
        		}else
        			mostraDialogo(resposta.msg, 'danger', 5000);
                    
    		

    }, 'json');
}

function enviarcontatoc(){
    var tipo = document.getElementById("tipo").value;
    var objetivo = document.getElementById("objetivo").value;
    var nome = document.getElementById("nome").value;
    var email = document.getElementById("email").value;
    var telefone = document.getElementById("telefone").value;
    var mensagem = document.getElementById("mensagem").value;

    $.post("control/contatoc.control.php", {tipo : tipo, objetivo: objetivo, nome: nome, email: email, telefone: telefone, mensagem: mensagem}, 
    	function(resposta){
            
        		if (resposta.state == "true") {
        			mostraDialogo(resposta.msg, 'success', 5000);
                    document.getElementById("btn-contato").disabled = true;
        		}else
        			mostraDialogo(resposta.msg, 'danger', 5000);

    }, 'json');
}

if ($('#projeto_table').length) {
        $('#projeto_table').DataTable({
            responsive: true
        });
    }
    if ($('#contatos_table').length) {
        $('#contatos_table').DataTable({
            responsive: true
        });
    }
    if ($('#contatoc_table').length) {
        $('#contatoc_table').DataTable({
            responsive: true
        });
    }