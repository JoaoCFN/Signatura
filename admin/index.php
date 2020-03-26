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
                                <h2>Acontecimentos</h2>
                                <div class="row">
                                  <div class="col-md-12">
                                    <!-- The time line -->
                                    <div class="timeline">
                                      <?php 
                                      $log = new Log();
                                      $logs = $log->getLasts();
                                      if ($logs != false) {

                                        $i = 0;

                                        while (isset($logs[$i])) {
                                            # code...
                                            if ($i == 0) {
                                                # code...
                                            echo '  <div class="time-label">
                                                        <span class="bg-red">'.substr($logs[$i]['data'], 0, 10).'</span>
                                                    </div>
                                            ';
                                            }else{
                                                if (substr($logs[$i]['data'], 0, 10) == substr($logs[$i-1]['data'], 0, 10)) {
                                                   
                                                }else{
                                                    echo '  <div class="time-label">
                                                                <span class="bg-red">'.substr($logs[$i]['data'], 0, 10).'</span>
                                                            </div>
                                                    ';
                                                }
                                            }
                                            if ($logs[$i]['tabela'] == 'projetos') {
                                                if (substr($logs[$i]['info'], 0, 1) == "D") {
                                                    $var = "ti-trash";
                                                    $comp = " Projeto de id: ".$logs[$i]['id_tabela']." ";
                                                }elseif (substr($logs[$i]['info'], 0, 2) == "At") {
                                                    $var = "ti-pencil";
                                                    $comp = " Projeto de id: <a href='projetos.php?id=".$logs[$i]['id_tabela']."'>".$logs[$i]['id_tabela']."</a> ";
                                                }else{
                                                    $var = "ti-layout-grid2-thumb";
                                                    $comp = " Projeto de id: <a href='projetos.php?id=".$logs[$i]['id_tabela']."'>".$logs[$i]['id_tabela']."</a> ";
                                                }
                                               
                                            }else{
                                                 $var = "ti-comment-alt";
                                                 $comp = "";
                                            }
                                            echo '  <div>
                                                        <i class="fas '.$var.'"></i>
                                                        <div class="timeline-item">
                                                            <span class="time"><i class="ti-time"></i> '.substr($logs[$i]['data'], 11, 18).'</span>
                                                            <h3 class="timeline-header no-border">'.$logs[$i]['user']. ' '.$logs[$i]['info'].' '.$comp.'</h3>
                                                        </div>
                                                    </div>
                                            ';
                                            $i++;
                                        }
                                        ?>
                                         
                                     
                                        
                                       
                                        <?php
                                       } ?>
                                    </div>
                                  </div>
                                  <!-- /.col -->
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
