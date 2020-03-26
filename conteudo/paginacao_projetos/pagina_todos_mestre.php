<section class="galeria galeria_compacta">
	<?php
	 	$projeto = new Projeto();
		$projetos = $projeto->getAll();
		if (isset($projetos[0])) {
	?>
			<div class="tab-content" id="nav-pills-pagina-aplicativos">
				<?php 
					$cont = count($projetos);

					$paginas = ceil($cont/12);
					$j = 0;
					for ($i=1; $i <= $paginas ; $i++) { 
						if ($i == 1) {
							echo "<div class='tab-pane fade show active' id='".$i."_pagina_todos' role='tabpanel'>";
						}else{
							echo "<div class='tab-pane fade show' id='".$i."_pagina_todos' role='tabpanel'>";
						}
						
						echo "<div class='pagina ".$i."'>";
						echo "<div class='row no-gutters'>";
						while ($j < ($i*12) && $j < $cont) {
							echo '
								<div class="col-md-6 col-lg-3 item zoom-on-hover">
									<a class="lightbox" href="projetos_detalhe.php?id='.$projetos[$j]['id'].'">
										<img class="img-fluid image" src="midia/projetos/'.$projetos[$j]['id'].'/thumb-mulher.png">
										<span class="descricao">
											<span class="descricao-titulo">'.$projetos[$j]['nome'].'</span>
											<span class="descricao-body">'.$projetos[$j]['desc_tumb'].'</span>
										</span>
									</a>
								</div>
							';
							$j++;
						}
						echo "</div>";
						echo "</div>";
						echo "</div>";
				}?>

			</div>
	

	<ul class="nav nav-pills justify-content-center mt-5" id="opcoes_nav_todos" role="tablist">
		<?php
			for ($i=1; $i <= $paginas ; $i++) { 
				if ($i == 1) {
					echo ' 	<li class="nav-item pr-3">
					        <a class="btn btn-outline-warning btn-outline-warning-projetos rounded-0 active" id="numero1_pagina_todos" data-toggle="pill" href="#'.$i.'_pagina_todos">'.$i.'</a>
					    </li>';
				}else{
					echo ' 	<li class="nav-item pr-3">
					        <a class="btn btn-outline-warning btn-outline-warning-projetos rounded-0 " id="numero1_pagina_todos" data-toggle="pill" href="#'.$i.'_pagina_todos">'.$i.'</a>
					    </li>';
				}
				
			}
	   
	    ?>
	</ul> <?php }else{
		echo "<div class='container'> <h2>Sem projetos desse tipo!</h2></div>";

	} ?>
</section>