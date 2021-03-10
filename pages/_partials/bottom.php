        </div> <!-- ./col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main -->
      </div>
    </div>


    <script type="text/javascript">
    $(function () {
        $("#rw").change(function () {
            if ($(this).val() == "01") {
                $("#rw01").show();
                $("#rw02").hide();
                $("#rw03").hide();
                $("#rw04").hide();
                $("#rw05").hide();
                $("#rw06").hide();
                $("#rw07").hide();
                $("#rw08").hide();
                $("#rw09").hide();
                $("#rw10").hide();
                }
            else if ( this.value == '02')
                {
                    $("#rw02").show();
                    $("#rw01").hide();
                    $("#rw03").hide();
                    $("#rw04").hide();
                    $("#rw05").hide();
                    $("#rw06").hide();
                    $("#rw07").hide();
                    $("#rw08").hide();
                    $("#rw09").hide();
                    $("#rw10").hide();
                }
            else if ( this.value == '03')
                {
                    $("#rw03").show();
                    $("#rw01").hide();
                    $("#rw02").hide();
                    $("#rw04").hide();
                    $("#rw05").hide();
                    $("#rw06").hide();
                    $("#rw07").hide();
                    $("#rw08").hide();
                    $("#rw09").hide();
                    $("#rw10").hide();
                }
            else if ( this.value == '04')
                {
                    $("#rw04").show();
                    $("#rw01").hide();
                    $("#rw02").hide();
                    $("#rw03").hide();
                    $("#rw05").hide();
                    $("#rw06").hide();
                    $("#rw07").hide();
                    $("#rw08").hide();
                    $("#rw09").hide();
                    $("#rw10").hide();
                }
            else {
                $("#rw01").hide();
                $("#rw02").hide();
                $("#rw03").hide();
                $("#rw04").hide();
                $("#rw05").hide();
                $("#rw06").hide();
                $("#rw07").hide();
                $("#rw08").hide();
                $("#rw09").hide();
                $("#rw10").hide();
            }
        });
    });
    </script>

    <!-- Optional JavaScript -->
    <script src="../../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../../assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="../../assets/libs/js/main-js.js"></script>
    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/js/vendor/jquery.min.js"></script>
    <script src="../../assets/js/bootstrap.min.js"></script>
    
    

    <!-- Datatable -->
    <script src="../../assets/js/jquery.dataTables.min.js" charset="utf-8"></script>
    <script src="../../assets/js/dataTables.bootstrap.min.js" charset="utf-8"></script>
    <script type="text/javascript">
    $(document).ready(function() {
      $('#datatable').DataTable();
    });
    </script>

    <!-- Date Range Picker -->
    <script type="text/javascript" src="../../assets/js/moment.min.js"></script>
    <script type="text/javascript" src="../../assets/js/daterangepicker.js"></script>
    <script type="text/javascript">
    $(function() {
        $('.datepicker').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            locale: {
              format: 'YYYY-MM-DD',
              monthNames: [
                "Januari",
                "Februari",
                "Maret",
                "April",
                "Mei",
                "Juni",
                "Juli",
                "Agustus",
                "September",
                "Oktober",
                "November",
                "Desember"
             ],
              "daysOfWeek": [
                "Mg",
                "Sn",
                "Sl",
                "Rb",
                "Km",
                "Jm",
                "Sb"
              ]
            }
        });
    });
    </script>

    <!-- Bootstrap Select -->
    <script src="../../assets/js/bootstrap-select.min.js"></script>
    <script type="text/javascript">
    $('.selectlive').selectpicker({
      liveSearch: true,
      size: 6
    });
    $('.selectpicker').selectpicker();
    </script>

    <!-- Lightbox -->
    <script src="../../assets/lib/lightbox/js/lightbox.min.js"></script>

    
  </body>
</html>
