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
                            <h4 class="header-title">ADICIONAR PROJETO:</h4>
                            <br>
                                <div  class="form-horizontal">
                                    <div class="form-group row">
                                        <div class=" row-md-4 mb-3">    
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="inputGroupFile01">
                                                <label class="custom-file-label" for="inputGroupFile01">Icone da apresentação (467x384)</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class=" row-md-6 mb-3"> 
                                            <label for="nome" class="col-form-label">Nome do Projeto</label>
                                            <input class="form-control" name="nome" type="text" placeholder="Nome" id="nome">
                                        </div>
                                    </div> 
                                    <div class="form-group row">
                                        <div class=" row-md-6 mb-3"> 
                                            <label for="desc" class="col-form-label">Breve descrião do Projeto (Max 30 caracteres)</label>
                                            <input class="form-control" name="desc" type="text" placeholder="Descrição" id="desc">
                                        </div>
                                    </div> 
                                    <div class="form-group row">
                                        <div class=" row-md-6 mb-3"> 
                                            <label for="tipo" class="col-form-label">Tipo (ex: website promocional)</label>
                                            <input class="form-control" name="tipp" type="text" placeholder="Tipo" id="tipo">
                                        </div>
                                    </div>  
                                    <div class="form-group row">
                                        <div class=" row-md-6 mb-3"> 
                                            <label for="ano" class="col-form-label">Ano</label>
                                            <input class="form-control" name="ano" type="text" placeholder="Ano" id="ano">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class=" row-md-6 mb-3"> 
                                            <label for="tags" class="col-form-label">Tags (separado por ,)</label>
                                            <input class="form-control" name="tags" type="text" placeholder="Tags" id="tags">
                                        </div>
                                    </div> 
                                    <div class="form-group row">
                                        <div class=" row-md-6 mb-3"> 
                                            <label for="titulo" class="col-form-label">Titulo da Descrição</label>
                                            <input class="form-control" name="titulo" type="text" placeholder="Titulo" id="titulo">
                                        </div>
                                    </div>   
                                    <div class="form-group row">
                                        <div class=" row-md-6 mb-3"> 
                                            <label for="desc_c" class="col-form-label">Descrição Completa</label>
                                            <textarea style="width: 400px;height: 300px" class="form-control" name="desc_c" type="text" placeholder="Descrição Completa" id="desc_c"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class=" row-md-4 mb-3">    
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="inputGroupFile01">
                                                <label class="custom-file-label" for="inputGroupFile01">Imagem da Descrição (580x580)</label>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                

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
