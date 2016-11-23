<!DOCTYPE html>
<html lang="pt-BR">
<?php view('partials/header') ?>

<body class="nav-md">
<div class="container body">

    <div class="main_container">

        <?php view('partials/sidebar')?>

        <!-- top navigation -->
        <?php view('partials/navigation')?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">

            <!-- Inclui uma child view dinamicamente -->
            <?php include_view($data['view'], $data['data']) ?>

        </div>
        <!-- /page content -->

        <!-- footer content -->
        <?php view('partials/footer'); ?>
        <!-- /footer content -->
    </div>
</div>

<!-- jQuery -->
<script src="../vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="../vendors/nprogress/nprogress.js"></script>
<!-- Chart.js -->
<script src="../vendors/Chart.js/dist/Chart.min.js"></script>
<!-- gauge.js -->
<script src="../vendors/bernii/gauge.js/dist/gauge.min.js"></script>
<!-- bootstrap-progressbar -->
<script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="../vendors/iCheck/icheck.min.js"></script>
<!-- Skycons -->
<script src="../vendors/skycons/skycons.js"></script>
<!-- Flot -->
<script src="../vendors/Flot/jquery.flot.js"></script>
<script src="../vendors/Flot/jquery.flot.pie.js"></script>
<script src="../vendors/Flot/jquery.flot.time.js"></script>
<script src="../vendors/Flot/jquery.flot.stack.js"></script>
<script src="../vendors/Flot/jquery.flot.resize.js"></script>
<!-- Flot plugins -->
<script src="js/flot/jquery.flot.orderBars.js"></script>
<script src="js/flot/date.js"></script>
<script src="js/flot/jquery.flot.spline.js"></script>
<script src="js/flot/curvedLines.js"></script>
<!-- jVectorMap -->
<script src="js/maps/jquery-jvectormap-2.0.3.min.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="js/moment/moment.min.js"></script>
<script src="js/datepicker/daterangepicker.js"></script>

<!-- Custom Theme Scripts -->
<script src="../build/js/custom.min.js"></script>

<!-- Skycons -->
<script>
    $(document).ready(function() {
        var icons = new Skycons({
                "color": "#73879C"
            }),
            list = [
                "clear-day", "clear-night", "partly-cloudy-day",
                "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                "fog"
            ],
            i;

        for (i = list.length; i--;)
            icons.set(list[i], list[i]);

        icons.play();
    });
</script>
<!-- /Skycons -->



<script src="/js/app.js"></script>


<!-- /gauge.js -->
</body>
</html>