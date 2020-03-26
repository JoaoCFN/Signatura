
<div class="container">
	<div class="terceira_parte pt-5 pb-5">
		<div class="row">
			<div class="col-sm-6 align-self-center">
				<h2 class="raleway-extrabold800">Projetos Destaque</h2>
				<div class="row">
        			<div class="col-sm-9">  
						<p class="raleway-medium500">								
							Desenvolvidos de pessoas para pessoas, soluções que ganham vida, forma e função. 
							Fique à vontade para conferir alguns dos nossos mais recentes projetos.
						</p>
					</div>

        			<div class="col-sm-3"> 
        			</div>
        		</div> 
			</div>	
			<?php
				$projeto = new Projeto();
				$projetos = $projeto->getByDestaque();
				for ($i=0; $i < 2; $i++) { 
					echo '<div style="padding:0" class="col-sm-3 ">
								<a role="button" href="projetos_detalhe.php?id='.$projetos[$i]['id'].'">
									<div class="thumb">
										<div class="img-thumb">
											<img class="img-fluid" src="midia/projetos/'.$projetos[$i]['id'].'/thumb-mulher.png">
										</div>
							
										<div class="overlay">
											<div class="txt-thumb">
												<h2 class="raleway-extrabold800">'.$projetos[$i]['nome'].'</h2>
												<p >								
													'.$projetos[$i]['desc_tumb'].' 
												</p>
											</div>
										</div>
									</div>
								</a>	
							</div>	';
				}
			?>	
		</div>
		<div class="pb-5">
			<div class="row">
				<?php
				for ($i=2; $i < 6; $i++) { 
					echo '<div style="padding:0" class="col-sm-3 ">
								<a role="button" href="projetos_detalhe.php?id='.$projetos[$i]['id'].'">
									<div class="thumb">
										<div class="img-thumb">
											<img class="img-fluid" src="midia/projetos/'.$projetos[$i]['id'].'/thumb-mulher.png">
										</div>
							
										<div class="overlay">
											<div class="txt-thumb">
												<h2 class="raleway-extrabold800">'.$projetos[$i]['nome'].'</h2>
												<p >								
													'.$projetos[$i]['desc_tumb'].' 
												</p>
											</div>
										</div>
									</div>
								</a>	
							</div>	';
				}	?>
			</div>
		</div>
	</div>
</div>