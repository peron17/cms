<script src="{{ asset('porto_new/vendor/jquery/jquery.js') }}"></script>
<script src="{{ asset('porto_new/vendor/jquery-browser-mobile/jquery.browser.mobile.js') }}"></script>
<script src="{{ asset('porto_new/vendor/jquery-cookie/jquery.cookie.js') }}"></script>
<script src="{{ asset('porto_new/master/style-switcher/style.switcher.js') }}"></script>
<script src="{{ asset('porto_new/vendor/popper/umd/popper.min.js') }}"></script>
<script src="{{ asset('porto_new/vendor/bootstrap/js/bootstrap.js') }}"></script>
<script src="{{ asset('porto_new/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('porto_new/vendor/common/common.js') }}"></script>
<script src="{{ asset('porto_new/vendor/nanoscroller/nanoscroller.js') }}"></script>
<script src="{{ asset('porto_new/vendor/magnific-popup/jquery.magnific-popup.js') }}"></script>
<script src="{{ asset('porto_new/vendor/jquery-placeholder/jquery.placeholder.js') }}"></script>
<script src="{{ asset('porto_new/vendor/jquery-ui/jquery-ui.js') }}"></script>
<script src="{{ asset('porto_new/vendor/jqueryui-touch-punch/jquery.ui.touch-punch.js') }}"></script>
<script src="{{ asset('porto_new/vendor/jquery-appear/jquery.appear.js') }}"></script>
<script src="{{ asset('porto_new/vendor/bootstrap-multiselect/js/bootstrap-multiselect.js') }}"></script>
<script src="{{ asset('porto_new/vendor/jquery.easy-pie-chart/jquery.easypiechart.js') }}"></script>
<script src="{{ asset('porto_new/vendor/flot/jquery.flot.js') }}"></script>
<script src="{{ asset('porto_new/vendor/flot.tooltip/jquery.flot.tooltip.js') }}"></script>
<script src="{{ asset('porto_new/vendor/flot/jquery.flot.pie.js') }}"></script>
<script src="{{ asset('porto_new/vendor/flot/jquery.flot.categories.js') }}"></script>
<script src="{{ asset('porto_new/vendor/flot/jquery.flot.resize.js') }}"></script>
<script src="{{ asset('porto_new/vendor/jquery-sparkline/jquery.sparkline.js') }}"></script>
<script src="{{ asset('porto_new/vendor/raphael/raphael.js') }}"></script>
<script src="{{ asset('porto_new/vendor/morris/morris.js') }}"></script>
<script src="{{ asset('porto_new/vendor/gauge/gauge.js') }}"></script>
<script src="{{ asset('porto_new/vendor/snap.svg/snap.svg.js') }}"></script>
<script src="{{ asset('porto_new/vendor/liquid-meter/liquid.meter.js') }}"></script>
<script src="{{ asset('porto_new/vendor/jqvmap/jquery.vmap.js') }}"></script>
<script src="{{ asset('porto_new/vendor/jqvmap/data/jquery.vmap.sampledata.js') }}"></script>
<script src="{{ asset('porto_new/vendor/jqvmap/maps/jquery.vmap.world.js') }}"></script>
<script src="{{ asset('porto_new/vendor/jqvmap/maps/continents/jquery.vmap.africa.js') }}"></script>
<script src="{{ asset('porto_new/vendor/jqvmap/maps/continents/jquery.vmap.asia.js') }}"></script>
<script src="{{ asset('porto_new/vendor/jqvmap/maps/continents/jquery.vmap.australia.js') }}"></script>
<script src="{{ asset('porto_new/vendor/jqvmap/maps/continents/jquery.vmap.europe.js') }}"></script>
<script src="{{ asset('porto_new/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js') }}"></script>
<script src="{{ asset('porto_new/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js') }}"></script>

<script src="{{ asset('porto_new/js/theme.js') }}"></script>

<script src="{{ asset('porto_new/js/custom.js') }}"></script>

<script src="{{ asset('porto_new/js/theme.init.js') }}"></script>
<script>
    (function (i, s, o, g, r, a, m) {
    i["GoogleAnalyticsObject"] = r;
    (i[r] = i[r] || function () {
    (i[r].q = i[r].q || []).push(arguments);
    }),
    (i[r].l = 1 * new Date());
    (a = s.createElement(o)),
    (m = s.getElementsByTagName(o)[0]);
    a.async = 1;
    a.src = g;
    m.parentNode.insertBefore(a, m);
    })(window, document, "script", "//www.google-analytics.com/analytics.js", "ga");
    ga("create", "UA-42715764-8", "auto");
    ga("send", "pageview");
</script>

<script src="{{ asset('porto_new/js/examples/examples.dashboard.js') }}"></script>

@stack('script')