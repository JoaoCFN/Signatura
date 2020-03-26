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
                                <?php if (!isset($_GET['id'])) { ?>
                                  
                                    <div class="row pb-5">
                                        <div class="col-lg-12">
                                            <h2>Projetos Adicionados</h2>
                                        </div>
                                    </div>

                                     <div class="data-tables datatable-primary stripe ">
                                        <table style="width: 100%;" id="projeto_table" class="table text-center stripe hover compact ">
                                            <thead class="text-capitalize">
                                                <tr>
                                                    <th>Nome</th>
                                                    <th>Descrição Tumb</th>
                                                    <th>Classificação</th>
                                                    <th>Destaque</th>
                                                    <th>Tipo</th>
                                                    <th>Ano</th>
                                                    <th>Tags</th>
                                                    <th>Ação</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $projeto = new Projeto();
                                                $projetos = $projeto->getAll();
                                                $i = 0;
                                                while (isset($projetos[$i])) { 
                                                    
                                                    echo '
                                                    <tr>
                                                        <td>'.$projetos[$i]["nome"].'</td>
                                                        <td>'.$projetos[$i]["desc_tumb"].'</td>
                                                        <td>'.$projetos[$i]["classf"].'</td>
                                                        <td>'.$projetos[$i]["destaque"].'</td>
                                                        <td>'.$projetos[$i]["tipo"].'</td>
                                                        <td>'.$projetos[$i]["ano"].'</td>
                                                        <td>'.$projetos[$i]["tags"].'</td>
                                                        <td>
                                                            <a href="projetos.php?id='.$projetos[$i]["id"].'"> 
                                                                <input type = "submit" class="btn btn-primary" value="Editar">
                                                            </a>
                                                        </td>
                                                        


                                                    </tr>';
                                                  $i++;
                                                }
                                               ?>
                                               
                                            </tbody>
                                        </table>
                                    </div>









                                
                                <?php  }else{
                                        $trat = new Treatment();
                                        $get = $trat->clearGET();
                                        $p = new Projeto();
                                        $p->getById($get['id']);
                                        if ($p->id == null) {
                                            $_SESSION['state'] = "false"; 
                                            $_SESSION['msg'] = "Projeto não encontrado";
                                            echo '<script type="text/javascript">window.location.href = "projetos.php"; </script>';
                                            die("");
                                        }
                                    ?>

                                    


                                <div class="row pb-5">
                                    <div class="col-lg-12">
                                        <h2>Editar Projeto</h2>
                                    </div>
                                </div>
                                <div class="row pb-4">
                                    <div class="col-md-6">
                                        <form method="post" action="control/projeto.control2.php" enctype="multipart/form-data" >
                                        <label for="tumb">
                                            Tumb do Projeto (467x384)                                           
                                        </label>
                                        <input class="form-control" type="file" name="tumb" id="tumb" >
                                    </div>
                                </div>
                                 <div class="row pb-4">
                                    <div class="col-md-6">
                                        <label for="desc_tumb">
                                            Descrição Tumb do Projeto                                            
                                        </label>
                                        <input type="hidden" name="id" id="id" value="<?php echo $p->id; ?>">
                                        <input class="form-control" type="text" name="desc_tumb" id="desc_tumb" value="<?php echo $p->desc_tumb; ?>" required>
                                    </div>
                                </div>
                                <div class="row pb-4">
                                    <div class="col-md-6">
                                        <label for="img_top">
                                            Imagem do Topo (777x777)                                            
                                        </label>
                                        <input class="form-control" type="file" name="img_top" id="img_top" >
                                    </div>
                                </div>
                                <div class="row pb-4">
                                    <div class="col-md-6">
                                        <label for="nome">
                                            Nome do Projeto                                            
                                        </label>
                                        <input class="form-control" type="text" name="nome" id="nome" value="<?php echo $p->nome; ?>" required>
                                    </div>
                                </div>
                                <div class="row pb-4">
                                    <div class="col-md-6">
                                        <label for="classf">
                                            Classificação do Projeto                                            
                                        </label>
                                        <select  class="form-control" name="classf" id="classf" >
                                            <option <?php if($p->classf == 'web') echo 'selected'; ?> value="web">Web</option>
                                            <option <?php if($p->classf == 'mobile') echo 'selected'; ?> value="mobile">Mobile</option>
                                            <option <?php if($p->classf == 'ecommerce') echo 'selected'; ?> value="ecommerce">Ecommerce</option>

                                        </select>
                                        
                                    </div>
                                </div>
                                <div class="row pb-4">
                                    <div class="col-md-6">
                                        <label for="destaque">
                                            Destaque do Projeto( Os projetos com maior numero no destaque irão aparecer na tela inicial ).                                            
                                        </label>
                                        <input class="form-control" type="number" name="destaque" id="destaque" value="<?php echo $p->destaque; ?>" required>
                                    </div>
                                </div>
                                <div class="row pb-4">
                                    <div class="col-md-6">
                                        <label for="tipo">
                                            Tipo do Projeto                                            
                                        </label>
                                        <input class="form-control" type="text" name="tipo" id="tipo" value="<?php echo $p->tipo; ?>" required>
                                    </div>
                                </div>
                                <div class="row pb-4">
                                    <div class="col-md-6">
                                        <label for="ano">
                                            Ano do Projeto                                            
                                        </label>
                                        <input class="form-control" type="text" name="ano" id="ano" value="<?php echo $p->ano; ?>" required>
                                    </div>
                                </div>
                                <div class="row pb-4">
                                    <div class="col-md-6">
                                        <label for="tags">
                                            Tags do Projeto                                            
                                        </label>
                                        <input class="form-control" type="text" name="tags" id="tags" value="<?php echo $p->tags; ?>" required>
                                    </div>
                                </div>
                                <div class="row pb-4">
                                    <div class="col-md-6">
                                        <label for="titulo_top">
                                            Titulo do Projeto (Topo)                                            
                                        </label>
                                        <input class="form-control" type="text" name="titulo_top" id="titulo_top" value="<?php echo $p->titulo_top; ?>" required>
                                    </div>
                                </div>
                                <div class="row pb-4">
                                    <div class="col-md-6">
                                        <label for="descricao">
                                            Descricao do Projeto                                            
                                        </label>
                                        <textarea class="form-control" type="text" name="descricao" id="descricao" required><?php echo $p->descricao; ?></textarea>
                                    </div>
                                </div>
                                <div class="row pb-4">
                                    <div class="col-md-6">
                                        <label for="img_telas">
                                            Imagem das Telas (580x581)                                          
                                        </label>
                                        <input class="form-control" type="file" name="img_telas" id="img_telas" >
                                    </div>
                                </div>
                                <div class="row pb-4">
                                    <div class="col-md-6">
                                        <label for="img_mobile">
                                            Imagem Mobile  (1921x826)                                         
                                        </label>
                                        <input class="form-control" type="file" name="img_mobile" id="img_mobile" >
                                    </div>
                                </div>
                                <div class="row pb-4">
                                    <div class="col-md-6">
                                        <label for="descricao_mid">
                                            Descricao do Projeto (Meio)                                           
                                        </label>
                                        <textarea class="form-control" type="text" name="descricao_mid" id="descricao_mid" required><?php echo $p->descricao_mid; ?></textarea>
                                    </div>
                                </div>
                                <div class="row pb-4">
                                    <div class="col-md-6">
                                        <label for="img_mid">
                                            Imagem (Meio)    (1919x1308)                                       
                                        </label>
                                        <input class="form-control" type="file" name="img_mid" id="img_mid" >
                                    </div>
                                </div>
                                <div class="row pb-4">
                                    <div class="col-md-6">
                                        <label for="titulo_bot">
                                            Titulo do Projeto (Meio)                                           
                                        </label>
                                        <input class="form-control" type="text" name="titulo_bot" id="titulo_bot" value="<?php echo $p->titulo_bot; ?>" required>
                                    </div>
                                </div>
                                <div class="row pb-4">
                                    <div class="col-md-6">
                                        <label for="descricao_bot">
                                            Descricao do Projeto (Final)                                           
                                        </label>
                                        <textarea class="form-control" type="text" name="descricao_bot" id="descricao_bot" required><?php echo $p->descricao_bot; ?></textarea>
                                    </div>
                                </div>
                                <div class="row pb-4">
                                    <div class="col-md-6">
                                        <label for="img_bot">
                                            Imagem do Projeto (Final)    (1919x933)                                       
                                        </label>
                                        <input class="form-control" type="file" name="img_bot" id="img_bot" >
                                    </div>
                                </div>
                                <div class="row pb-4">
                                    <div class="col-md-1">
                                        
                                        <input class="btn btn-primary" type="submit" value="Atualizar" >
                                    </div>
                                    <div class="col-md-1">
                                        </form>
                                        <input class="btn btn-danger" onclick="deleteproj()" type="submit" value="Deletar" >
                                    </div>
                                    <script type="text/javascript">
                                        function deleteproj(){
                                             var id = document.getElementById("id").value;

                                             $.post('control/projeto.control2.php', {type:'remove', id:id}, function(res){
                                                mostraDialogo(res.msg, 'success', 5000);
                                                setTimeout(function() {
                                                    window.location.href = "projetos.php";
                                                }, 5000);
                                             }, 'json');
                                        }
                                    </script>
                                </div>
                               


                                    <?php

                                } ?>
                                
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
