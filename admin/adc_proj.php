<?php require_once "header.php"; ?>

<?php require_once "preloader.php"; ?>

    <!-- page container area start -->
    <div class="page-container">
        <?php require_once "sidebar.php"; ?>
        <!-- main content area start -->
        <div class="main-content">
            <?php require_once "header2.php"; ?>
            <?php require_once "pagetitle.php"; ?>
            <div class="main-content-inner">
                <!-- Todo conteudo do site -->
                <div class="row">
                    <div class="col-lg-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="row pb-5">
                                    <div class="col-lg-12">
                                        <h2>Adicionar Projetos</h2>
                                    </div>
                                </div>
                                <div class="row pb-4">
                                    <div class="col-md-6">
                                        <form method="post" action="control/projeto.control.php" enctype="multipart/form-data" >
                                        <label for="tumb">
                                            Tumb do Projeto (467x384)                                           
                                        </label>
                                        <input class="form-control" type="file" name="tumb" id="tumb" required>
                                    </div>
                                </div>
                                 <div class="row pb-4">
                                    <div class="col-md-6">
                                        <label for="desc_tumb">
                                            Descrição Tumb do Projeto                                            
                                        </label>
                                        <input class="form-control" type="text" name="desc_tumb" id="desc_tumb" required>
                                    </div>
                                </div>
                                <div class="row pb-4">
                                    <div class="col-md-6">
                                        <label for="img_top">
                                            Imagem do Topo (777x777)                                            
                                        </label>
                                        <input class="form-control" type="file" name="img_top" id="img_top" required>
                                    </div>
                                </div>
                                <div class="row pb-4">
                                    <div class="col-md-6">
                                        <label for="nome">
                                            Nome do Projeto                                            
                                        </label>
                                        <input class="form-control" type="text" name="nome" id="nome" required>
                                    </div>
                                </div>
                                <div class="row pb-4">
                                    <div class="col-md-6">
                                        <label for="classf">
                                            Classificação do Projeto                                            
                                        </label>
                                        <select  class="form-control" name="classf" id="classf" >
                                            <option value="web">Web</option>
                                            <option value="mobile">Mobile</option>
                                            <option value="ecommerce">Ecommerce</option>

                                        </select>
                                        
                                    </div>
                                </div>
                                <div class="row pb-4">
                                    <div class="col-md-6">
                                        <label for="destaque">
                                            Destaque do Projeto( Os projetos com maior numero no destaque irão aparecer na tela inicial ).                                            
                                        </label>
                                        <input class="form-control" type="number" name="destaque" id="destaque" required>
                                    </div>
                                </div>
                                <div class="row pb-4">
                                    <div class="col-md-6">
                                        <label for="tipo">
                                            Tipo do Projeto                                            
                                        </label>
                                        <input class="form-control" type="text" name="tipo" id="tipo" required>
                                    </div>
                                </div>
                                <div class="row pb-4">
                                    <div class="col-md-6">
                                        <label for="ano">
                                            Ano do Projeto                                            
                                        </label>
                                        <input class="form-control" type="text" name="ano" id="ano" required>
                                    </div>
                                </div>
                                <div class="row pb-4">
                                    <div class="col-md-6">
                                        <label for="tags">
                                            Tags do Projeto                                            
                                        </label>
                                        <input class="form-control" type="text" name="tags" id="tags" required>
                                    </div>
                                </div>
                                <div class="row pb-4">
                                    <div class="col-md-6">
                                        <label for="titulo_top">
                                            Titulo do Projeto (Topo)                                            
                                        </label>
                                        <input class="form-control" type="text" name="titulo_top" id="titulo_top" required>
                                    </div>
                                </div>
                                <div class="row pb-4">
                                    <div class="col-md-6">
                                        <label for="descricao">
                                            Descricao do Projeto                                            
                                        </label>
                                        <textarea class="form-control" type="text" name="descricao" id="descricao" required></textarea>
                                    </div>
                                </div>
                                <div class="row pb-4">
                                    <div class="col-md-6">
                                        <label for="img_telas">
                                            Imagem das Telas (580x581)                                          
                                        </label>
                                        <input class="form-control" type="file" name="img_telas" id="img_telas" required>
                                    </div>
                                </div>
                                <div class="row pb-4">
                                    <div class="col-md-6">
                                        <label for="img_mobile">
                                            Imagem Mobile  (1921x826)                                         
                                        </label>
                                        <input class="form-control" type="file" name="img_mobile" id="img_mobile" required>
                                    </div>
                                </div>
                                <div class="row pb-4">
                                    <div class="col-md-6">
                                        <label for="descricao_mid">
                                            Descricao do Projeto (Meio)                                           
                                        </label>
                                        <textarea class="form-control" type="text" name="descricao_mid" id="descricao_mid" required></textarea>
                                    </div>
                                </div>
                                <div class="row pb-4">
                                    <div class="col-md-6">
                                        <label for="img_mid">
                                            Imagem (Meio)    (1919x1308)                                       
                                        </label>
                                        <input class="form-control" type="file" name="img_mid" id="img_mid" required>
                                    </div>
                                </div>
                                <div class="row pb-4">
                                    <div class="col-md-6">
                                        <label for="titulo_bot">
                                            Titulo do Projeto (Meio)                                           
                                        </label>
                                        <input class="form-control" type="text" name="titulo_bot" id="titulo_bot" required>
                                    </div>
                                </div>
                                <div class="row pb-4">
                                    <div class="col-md-6">
                                        <label for="descricao_bot">
                                            Descricao do Projeto (Final)                                           
                                        </label>
                                        <textarea class="form-control" type="text" name="descricao_bot" id="descricao_bot" required></textarea>
                                    </div>
                                </div>
                                <div class="row pb-4">
                                    <div class="col-md-6">
                                        <label for="img_bot">
                                            Imagem do Projeto (Final)    (1919x933)                                       
                                        </label>
                                        <input class="form-control" type="file" name="img_bot" id="img_bot" required>
                                    </div>
                                </div>
                                <div class="row pb-4">
                                    <div class="col-md-6">
                                        
                                        <input class="btn btn-success" type="submit" value="Enviar" >
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
        <!-- main content area end -->
        <?php require_once "copyright.php"; ?>
    </div>
    <!-- page container area end -->
<?php require_once "offset.php"; ?>
<?php require_once "footer.php"; ?>
