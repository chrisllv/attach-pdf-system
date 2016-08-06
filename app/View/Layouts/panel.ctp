<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="GeeksLabs">
    <link rel="shortcut icon" href="img/panel/favicon.png">

    <title>Panel Administrador</title>

    <?php
    // Bootstrap CSS -->
    echo $this->Html->css('panel/bootstrap.min.css');

    // bootstrap theme -->
    echo $this->Html->css('panel/bootstrap-theme.css');

    //external css-->
    // font icon -->
    echo $this->Html->css('panel/elegant-icons-style.css');
    echo $this->Html->css('panel/font-awesome.min.css');

    // full calendar css-->
    echo $this->Html->css('../assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css');
    echo $this->Html->css('../assets/fullcalendar/fullcalendar/fullcalendar.css');

    // easy pie chart-->
    echo $this->Html->css('../assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css');

    // owl carousel -->
    echo $this->Html->css('panel/owl.carousel.css');
    echo $this->Html->css('panel/jquery-jvectormap-1.2.2.css');

    // Custom styles -->
    echo $this->Html->css('panel/fullcalendar.css');
    echo $this->Html->css('panel/widgets.css');
    echo $this->Html->css('panel/style.css');
    echo $this->Html->css('panel/style-responsive.css');
    echo $this->Html->css('panel/xcharts.min.css');
    echo $this->Html->css('panel/jquery-ui-1.10.4.min.css');

    ?>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->
  </head>

<body>

    <!-- container section start -->
    <section id="container" class="">

        <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"></div>
            </div>

            <!--logo start-->
            <a href="index.html" class="logo">Panel <span class="lite">Admin</span></a>
            <!--logo end-->

            <?php
            /*
            <div class="nav search-row" id="top_menu">
               <!--  search form start -->
                <ul class="nav top-menu">
                    <li>
                        <form class="navbar-form">
                            <input class="form-control" placeholder="Search" type="text">
                        </form>
                    </li>
                </ul>
                <!--  search form end -->
            </div>
            */
           ?>

            <div class="top-nav notification-row">
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                    <!-- task notificatoin start -->
                    <!--
                    <li id="task_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="icon-task-l"></i>
                            <span class="badge bg-important">6</span>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <div class="notify-arrow notify-arrow-blue"></div>
                            <li>
                                <p class="blue">Correos pendientes</p>
                            </li>
                        </ul>
                    </li>
                    -->
                    <!-- task notificatoin end -->
                    <!-- inbox notificatoin start-->
                    <li id="mail_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-envelope-l"></i>
                            <span class="badge bg-important">5</span>
                        </a>
                        <!-- <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-blue"></div>
                            <li>
                                <p class="blue">Tienes 5 mensajes pendientes</p>
                            </li>
                        </ul>-->
                    </li>
                    <!-- inbox notificatoin end -->
                    <!-- alert notification start-->
                    <!--
                    <li id="alert_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                            <i class="icon-bell-l"></i>
                            <span class="badge bg-important">4</span>
                        </a>
                        <ul class="dropdown-menu extended notification">
                            <div class="notify-arrow notify-arrow-blue"></div>
                            <li>
                                <p class="blue">Tienes 4 nuevas notificaciones</p>
                            </li>
                        </ul>
                    </li>
                    -->
                    <!-- alert notification end-->
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="img/panel/avatar1_small.jpg">
                            </span>
                            <span class="username">Administrador</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a href="#"><i class="icon_profile"></i> Mi cuenta</a>
                            </li>
                            <li>
                                <?php echo $this->Html->link('<i class="icon_key_alt"></i> Salir', array('controller' => 'entrada', 'action' => 'salir'), array('escapeTitle'=>false)); ?>
                            </li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
        </header>
        <!--header end-->

        <!--sidebar start-->
        <aside>
            <div id="sidebar"  class="nav-collapse ">
                <!-- sidebar menu start-->
                <ul class="sidebar-menu">
                    <li class="active">
                        <a class="" href="index.html">
                            <i class="icon_house_alt"></i>
                            <span>Principal</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <span><?php echo $this->Html->link('<i class="icon_document_alt"></i> Genererar PDF', array('controller' => 'generar', 'action' => 'index'), array('escapeTitle'=>false)); ?></span>
                    </li>
                </ul>
                <!-- sidebar menu end-->
            </div>
        </aside>
        <!--sidebar end-->

        <!--main content start-->
        <section id="main-content">
            <!--overview start-->
            <section class="wrapper">
                <?php echo $this->Session->flash(); ?>
			      <?php echo $content_for_layout; ?>
            </section>
            <!--overview end-->
        </section>
        <!--main content end-->

    </section>
    <!-- container -->

<?php
// javascripts -->
echo $this->Html->script('panel/jquery.js');
echo $this->Html->script('panel/script.js');
echo $this->Html->script('panel/jquery-ui-1.10.4.min.js');
echo $this->Html->script('panel/jquery-1.8.3.min.js');
echo $this->Html->script('panel/jquery-ui-1.9.2.custom.min.js');

// bootstrap -->
echo $this->Html->script('panel/bootstrap.min.js');

// nice scroll -->
echo $this->Html->script('panel/jquery.scrollTo.min.js');
echo $this->Html->script('panel/jquery.nicescroll.js');

// charts scripts -->
echo $this->Html->script('assets/jquery-knob/panel/jquery.knob.js');
echo $this->Html->script('panel/jquery.sparkline.js');
echo $this->Html->script('../assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js');
echo $this->Html->script('panel/owl.carousel.js');

// jQuery full calendar -->
echo $this->Html->script('panel/fullcalendar.min.js');
echo $this->Html->script('../assets/fullcalendar/fullcalendar/fullcalendar.js');

// script for this page only-->
echo $this->Html->script('panel/calendar-custom.js');
echo $this->Html->script('panel/jquery.rateit.min.js');

// custom select -->
echo $this->Html->script('panel/jquery.customSelect.min.js');
echo $this->Html->script('../assets/chart-master/Chart.js');

// custome script for all page-->
echo $this->Html->script('panel/scripts.js');

// custom script for this page-->
echo $this->Html->script('panel/sparkline-chart.js');
echo $this->Html->script('panel/easy-pie-chart.js');
echo $this->Html->script('panel/jquery-jvectormap-1.2.2.min.js');
echo $this->Html->script('panel/jquery-jvectormap-world-mill-en.js');
echo $this->Html->script('panel/xcharts.min.js');
echo $this->Html->script('panel/jquery.autosize.min.js');
echo $this->Html->script('panel/jquery.placeholder.min.js');
echo $this->Html->script('panel/gdp-data.js');
echo $this->Html->script('panel/morris.min.js');
echo $this->Html->script('panel/sparklines.js');
echo $this->Html->script('panel/charts.js');
echo $this->Html->script('panel/jquery.slimscroll.min.js');
?>

<script>

  //knob
  $(function() {
    $(".knob").knob({
      'draw' : function () {
        $(this.i).val(this.cv + '%')
      }
    })
  });

  //carousel
  $(document).ready(function() {
      $("#owl-slider").owlCarousel({
          navigation : true,
          slideSpeed : 300,
          paginationSpeed : 400,
          singleItem : true

      });
  });

  //custom select box

  $(function(){
      $('select.styled').customSelect();
  });

/* ---------- Map ---------- */
$(function(){
$('#map').vectorMap({
  map: 'world_mill_en',
  series: {
    regions: [{
      values: gdpData,
      scale: ['#000', '#000'],
      normalizeFunction: 'polynomial'
    }]
  },
backgroundColor: '#eef3f7',
  onLabelShow: function(e, el, code){
    el.html(el.html()+' (GDP - '+gdpData[code]+')');
  }
});
});



</script>

</body>
</html>