<div class="projetos">
	<div class="container">
        <div class="pt-5 pb-5">
    		<div class="row justify-content-center">
    			<div class="col-sm-6 align-self-center" align="left">
    				<h2 class="raleway-extrabold800">Projetos</h2>			
    			</div>
    			<div class="col-sm-6 align-self-center" align="center">		
                    <div class="row">
                        <div class="col-sm-10">  		
            				<p class="raleway-medium500">
            					Um espaço especial para cada uma das ideias que ajudamos a dar vida. Orgulho é a definição para cada um desses trabalho. Fique à vontade
            				</p>
                        </div>
                        <div class="col-sm-2">

                        </div>
                    </div>
    			</div>
    		</div>
        </div>

	</div>

	<div class="container">
		<ul class="nav nav-pills justify-content-start mt-3" id="opcoes_navegacao" role="tablist">
            <li class="nav-item pr-1">
                <a role="button" class="btn btn-outline-warning btn-outline-warning-title rounded-0 active" id="todos" data-toggle="pill" href="#pagina_todos_mestre">Todos</a>
            </li>
            <li class="nav-item pr-1">
                <a role="button" class="btn btn-outline-warning btn-outline-warning-title rounded-0" id="web" data-toggle="pill" href="#pagina_web_mestre">Web</a>
            </li>
            <li class="nav-item pr-1">
                <a role="button" class="btn btn-outline-warning btn-outline-warning-title rounded-0" id="ecommerce" data-toggle="pill" href="#pagina_ecommerce_mestre">E-commerce</a>
            </li>
            <li class="nav-item">
                <a role="button" class="btn btn-outline-warning btn-outline-warning-title rounded-0" id="aplicativos" data-toggle="pill" href="#pagina_aplicativos_mestre">Aplicativos</a>
            </li>
	    </ul>
	</div>

    <div class="tab-content" id="nav-pills-content">
        <div class="tab-pane fade show active" id="pagina_todos_mestre" role="tabpanel">        
            <?php require_once "conteudo/paginacao_projetos/pagina_todos_mestre.php"; ?>                   
        </div>  
        <div class="tab-pane fade" id="pagina_web_mestre" role="tabpanel">        
            <?php require_once "conteudo/paginacao_projetos/pagina_web_mestre.php"; ?>                   
        </div> 
         <div class="tab-pane fade" id="pagina_ecommerce_mestre" role="tabpanel">        
            <?php require_once "conteudo/paginacao_projetos/pagina_ecommerce_mestre.php"; ?>                   
        </div> 
        <div class="tab-pane fade" id="pagina_aplicativos_mestre" role="tabpanel">        
            <?php require_once "conteudo/paginacao_projetos/pagina_aplicativos_mestre.php"; ?>                   
        </div> 
    </div>
</div>
