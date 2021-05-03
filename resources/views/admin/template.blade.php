<!doctype html>
<html lang='fr'>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width", initial-scale="1">
        <title>Redox Digital Admin </title>

        <link rel="stylesheet" href="{{ asset('css/architectui.css') }}">
        <link rel="stylesheet" href="{{ asset('css/redox-digital.css') }}">
        <style> textarea {resize:none} </style>
        <!--
        =========================================================
        * ArchitectUI HTML Theme Dashboard - v1.0.0
        =========================================================
        * Product Page: https://dashboardpack.com
        * Copyright 2019 DashboardPack (https://dashboardpack.com)
        * Licensed under MIT (https://github.com/DashboardPack/architectui-html-theme-free/blob/master/LICENSE)
        =========================================================
        * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
        -->
    </head>
    <body>
        <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
            @include('admin.include_top_menu')

            <div class="app-main">
                @include('admin.include_side_menu')

                <!-- Page content -->
                <div class="app-main__outer">
                    <div class="app-main__inner">
                    @yield('header')
                    @yield('contenu')
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="{{ asset('js/architectui.js') }}"></script>
        <script>
            let btn = document.getElementById("archived");
            let label = document.getElementById("archived-label");

            function toggleLabel(btn) {
                if(btn.checked) {
                    label.innerHTML = "<span class='badge badge-danger'>Projet inactif</span>";
                } else {
                    label.innerHTML = "<span class='badge badge-success'>Projet actif</span>";
                }
            };

            if(btn != null && label != null) {
                toggleLabel(btn);
                btn.addEventListener("click", () => toggleLabel(btn));
            }
        </script>
    </body>
</html>