<?php
     $p = new Projeto();
     $trat = new Treatment();
     $get = $trat->clearGET();
     $p->getById($get['id']);
     if ($p->id == null) {
            header('location: index.php');
     };
?>
    <div class="container">

        <div class="projetos_detalhe">
            <div class="row justify-content-center">
                <div class="col-sm-6">
                <img src="midia/projetos/<?php echo $p->id;?>/Portfolio-Bottom.png" class="img-fluid">
                </div>
            </div><!--row-img-->

            <div class="row justify-content-around">
                <div class="col-sm-6">
                    <h3 class="raleway-extrabold800"><?php echo $p->nome;?></h3>
                    <h5 class="raleway-medium500"><?php echo $p->tipo;?></h5>
                    <h6 class="raleway-medium500">Ano <strong class="raleway-bold700"><?php echo $p->ano;?></strong> Tags <strong class="raleway-bold700"><?php echo $p->tags;?></strong></h6>
                </div>
                <div class="col-sm-6 text-right"></div>
            </div><!--ROW-TEXT-->


            <div class="row">
                <div class="col-sm-6 align-self-center">
                    <h1 class="raleway-extrabold800"><?php echo $p->titulo_top;?></h1>
                    <p class="raleway-medium500"><?php echo $p->descricao;?>
                    </p>
                </div><!--COL-->
                <div class="col-sm-6">
                    <img src="midia/projetos/<?php echo $p->id;?>/TELAS.png" class="img-fluid">
                </div><!--COL-->
            </div><!--ROW-->

            <div class="row">
                <div class="col-sm-12">
                    <img src="midia/projetos/<?php echo $p->id;?>/MOBILE.png" class="img-fluid">
                </div><!--COL-->
            </div><!--ROW-->

            <div class="row justify-content-end">
                <div class="col-sm-4">
                    <h3 class="text-right text-justify raleway-bold700"><?php echo $p->descricao_mid;?>
                    </h3>
                </div><!--COL-->
            </div><!--ROW-->
        </div>
</div>

    <img src="midia/projetos/<?php echo $p->id;?>/projetos_detalhe_img_deitada.png" class="img-fluid">
       
<div class="container">
    <div class="projetos_detalhe">

        <div class="row justify-content-center">
            <div class="col-sm-12">
                <h1 class="text-center raleway-extrabold800"><?php echo $p->titulo_bot;?></h1>
                <div class="row justify-content-center">
                    <div class="col-sm-4">
                        <h6 class="text-center raleway-medium500"><?php echo $p->descricao_bot;?></h6>
                    </div><!--COL-->
                </div><!--ROW-->
            </div><!--COL-->
        </div><!--ROW-->

        <div class="row">
            <div class="col-sm-12">
                <img src="midia/projetos/<?php echo $p->id;?>/Telas-Site.png" class="img-fluid">
            </div><!--COL-->
        </div><!--ROW-->
    </div>
</div><!--CONTAINER-->
<div class="container">
    <div class="row justify-content-center py-5">
        <div class="col-sm-12 text-center">
            <a href="projetos.php" role="button" class="btn btn-warning btn-warning-vertudo rounded-0 btn-square"><div></div><div></div></a>
        </div>
        <div class="col-sm-12 text-center pt-3 pb-3">
            <h3 class="raleway-extrabold800">Ver tudo</h3>
        </div>
    </div>
</div>
