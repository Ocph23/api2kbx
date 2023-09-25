import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';



export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                // 'node_modules/admin-lte/dist/img/AdminLTELogo.png',
                // 'node_modules/admin-lte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css',
                // 'node_modules/admin-lte/plugins/fontawesome-free/css/all.min.css',
                // 'node_modules/admin-lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css',
                // 'node_modules/admin-lte/plugins/jqvmap/jqvmap.min.css',
                // 'node_modules/admin-lte/dist/css/adminlte.min.css',
                // 'node_modules/admin-lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css',
                // 'node_modules/admin-lte/plugins/daterangepicker/daterangepicker.css',
                // 'node_modules/admin-lte/plugins/summernote/summernote-bs4.min.css',
                // 'node_modules/sweetalert2/dist/sweetalert2.min.css',

                // 'node_modules/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js',
                // 'node_modules/admin-lte/plugins/chart.js/Chart.min.js',
                // 'node_modules/admin-lte/plugins/sparklines/sparkline.js',
                // 'node_modules/admin-lte/plugins/jqvmap/jquery.vmap.min.js',
                // 'node_modules/admin-lte/plugins/jquery-knob/jquery.knob.min.js',
                // 'node_modules/admin-lte/plugins/moment/moment.min.js',
                // 'node_modules/admin-lte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js',
                // 'node_modules/admin-lte/plugins/summernote/summernote-bs4.min.js',
                // 'node_modules/admin-lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js',
                // 'node_modules/angular/angular.js',
                // 'node_modules/angular-route/angular-route.js',
                // 'node_modules/@uirouter/angularjs/release/angular-ui-router.js',
                // 'node_modules/angular-local-storage/dist/angular-local-storage.js',
                // 'node_modules/angular/angular.js',
               
                // 'node_modules/sweetalert2/dist/sweetalert2.all.min.js',

                // 'public/client/apps/js/app.js',
                // 'public/client/apps/js/router.js',
                // 'public/client/apps/js/controllers/auth.controllers.js',
                // 'public/client/apps/js/controllers/admin.controller.js',
                // 'public/client/apps/js/controllers/main.controller.js',
                // 'public/client/apps/js/services/message.services.js',
                // 'public/client/apps/js/services/auth.services.js',
                // 'public/client/apps/js/services/storage.services.js',
                // 'public/client/apps/js/services/helper.services.js',
                // 'public/client/apps/js/component.js',
            ],
            refresh: true,
        }),
    ],
});
