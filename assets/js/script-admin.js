
 function submitLogin() {
	
	var email = document.getElementById("email").value;
	var senha = document.getElementById("senha").value;
	
    $.post("../control/Adm.Acc.Control.php", {email:email,senha:senha}, function(res){
    	
    	if (res.state == "true") {
    		mostraDialogo(res.msg, "success", 3000);
    		setTimeout(function(){ att(); }, 3000);
    	}else{
    		mostraDialogo(res.msg, "danger", 3000);
    	}
    	
    }, 'json');

};

function att() {
	window.location.reload()
}

document.getElementById('senha').onkeydown=function(){
    if(window.event.keyCode=='13'){
        submitLogin();
    }
}