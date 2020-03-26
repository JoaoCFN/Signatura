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
                                        <h2>Contatos</h2>
                                    </div>
                                </div>

                                <div class="data-tables datatable-primary stripe ">
                                    <table style="width: 100%;" id="contatos_table" class="table text-center stripe hover compact ">
                                        <thead class="text-capitalize">
                                            <tr>
                                                <th>Id</th>
                                                <th>Nome</th>
                                                <th>Email</th>
                                                <th>Telefone</th>
                                                <th>Mensagem</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $contato = new Contato();
                                            $contatos = $contato->getAll();
                                            $i = 0;
                                            while (isset($contatos[$i])) { 
                                                
                                                echo '
                                                <tr>
                                                    <td>'.$contatos[$i]["id"].'</td>
                                                    <td>'.$contatos[$i]["nome"].'</td>
                                                    <td>'.$contatos[$i]["email"].'</td>
                                                    <td>'.$contatos[$i]["telefone"].'</td>
                                                    <td>'.$contatos[$i]["mensagem"].'</td>
                                                </tr>';
                                              $i++;
                                            }
                                           ?>
                                           
                                        </tbody>
                                    </table>
                                </div> 
                                <div class="data-tables datatable-primary stripe ">
                                    <table style="width: 100%;" id="contatoc_table" class="table text-center stripe hover compact ">
                                        <thead class="text-capitalize">
                                            <tr>
                                                <th>id</th>
                                                <th>tipo</th>
                                                <th>objetivo</th>
                                                <th>nome</th>
                                                <th>email</th>
                                                <th>telefone</th>
                                                <th>mensagem</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $contatoc = new ContatoC();
                                            $contatocs = $contatoc->getAll();
                                            $i = 0;
                                            while (isset($contatocs[$i])) { 
                                                
                                                echo '
                                                <tr>
                                                    <td>'.$contatocs[$i]["id"].'</td>
                                                    <td>'.$contatocs[$i]["tipo"].'</td>
                                                    <td>'.$contatocs[$i]["objetivo"].'</td>
                                                    <td>'.$contatocs[$i]["nome"].'</td>
                                                    <td>'.$contatocs[$i]["email"].'</td>
                                                    <td>'.$contatocs[$i]["telefone"].'</td>
                                                    <td>'.$contatocs[$i]["mensagem"].'</td>


                                                </tr>';
                                              $i++;
                                            }
                                           ?>
                                           
                                        </tbody>
                                    </table>
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
