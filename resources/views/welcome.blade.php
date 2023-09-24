<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>KeyBexpress</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="icon" type="image/x-icon" href="./images/favicon-keybexpress.png">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./client/node_modules/admin-lte/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet"
    href="./client/node_modules/admin-lte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="./client/node_modules/admin-lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="./client/node_modules/admin-lte/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./client/node_modules/admin-lte/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="./client/node_modules/admin-lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="./client/node_modules/admin-lte/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="./client/node_modules/admin-lte/plugins/summernote/summernote-bs4.min.css">
  <link rel="stylesheet" href="./client/node_modules/sweetalert2/dist/sweetalert2.min.css">
  <link rel="stylesheet" href="./client/apps/css/main.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
    integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />

</head>

<body ng-app="app">
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="./client/node_modules/admin-lte/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60"
      width="60">
  </div>

  <ui-view></ui-view>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="./client/node_modules/admin-lte/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="./client/node_modules/admin-lte/plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="./client/node_modules/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="./client/node_modules/admin-lte/plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="./client/node_modules/admin-lte/plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="./client/node_modules/admin-lte/plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="./client/node_modules/admin-lte/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="./client/node_modules/admin-lte/plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="./client/node_modules/admin-lte/plugins/moment/moment.min.js"></script>
  <script src="./client/node_modules/admin-lte/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="./client/node_modules/admin-lte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="./client/node_modules/admin-lte/plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="./client/node_modules/admin-lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="./client/node_modules/admin-lte/dist/js/adminlte.js"></script>
  <!-- AdminLTE for demo purposes -->

  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <!-- <script src="./client/node_modules/admin-lte/dist/js/pages/dashboard.js"></script> -->
  <script src="./client/node_modules/angular/angular.js"></script>
  <script src="./client/node_modules/angular-route/angular-route.js"></script>
  <script src="./client/node_modules/@uirouter/angularjs/release/angular-ui-router.js"></script>
  <script src="./client/node_modules/angular-local-storage/dist/angular-local-storage.js"></script>
  <script src="./client/apps/js/app.js"></script>
  <script src="./client/apps/js/router.js"></script>

  <script src="./client/apps/js/controllers/auth.controllers.js"></script>
  <script src="./client/apps/js/controllers/admin.controller.js"></script>
  <script src="./client/apps/js/controllers/main.controller.js"></script>
  <script src="./client/apps/js/services/message.services.js"></script>
  <script src="./client/apps/js/services/auth.services.js"></script>
  <script src="./client/apps/js/services/storage.services.js"></script>
  <script src="./client/apps/js/services/helper.services.js"></script>
  <script src="./client/apps/js/component.js"></script>
  <script src="./client/node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
    integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
</body>

</html>