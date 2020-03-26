   
    <!-- jquery latest version -->
    
    <!-- bootstrap 4 js -->
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/owl.carousel.min.js"></script>
    <script src="../assets/js/metisMenu.min.js"></script>
    <script src="../assets/js/jquery.slimscroll.min.js"></script>
    <script src="../assets/js/jquery.slicknav.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>

    <?php /*
        <!-- start chart js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
        <!-- start highcharts js -->
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <!-- start zingchart js -->
        <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
        <script>
        zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
        ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
        </script>
        <!-- all line chart activation -->
        <script src="../assets/js/line-chart.js"></script>
        <!-- all pie chart -->
        <script src="../assets/js/pie-chart.js"></script>
        */ 
    ?>
    <!-- others plugins -->
    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/scripts.js"></script>
    <script src="../assets/js/signatura.js"></script>
    <script src="../assets/js/script-admin.js"></script>
    <script type="text/javascript">
        <?php 
            if (isset($_SESSION['state'])) {
                if ($_SESSION['state'] == 'true') {
                    echo "mostraDialogo('".$_SESSION['msg']."', 'success', 3000);";
                    unset($_SESSION['state']);
                }else{
                     echo "mostraDialogo('".$_SESSION['msg']."', 'danger', 3000);";
                     unset($_SESSION['state']);
                }
                
            }

        ?>
    </script>
</body>

</html>
