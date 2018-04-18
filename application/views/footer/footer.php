<footer class="app-footer">
    <span><a href="http://coreui.io">CoreUI</a> © 2018 creativeLabs.</span>
    <span class="ml-auto">Powered by <a href="http://coreui.io">CoreUI</a></span>
  </footer>

  <!-- Bootstrap and necessary plugins -->
  <script src="<?php echo base_url('assets/node_modules/jquery/dist/jquery.min.js');?>"></script>
  <script src="<?php echo base_url('assets/node_modules/popper.js/dist/umd/popper.min.js');?>"></script>
  <script src="<?php echo base_url('assets/node_modules/bootstrap/dist/js/bootstrap.min.js');?>"></script>
  <script src="<?php echo base_url('assets/node_modules/pace-progress/pace.js');?>"></script>

  <!-- Plugins and scripts required by all views -->
  <script src="<?php echo base_url('assets/node_modules/chart.js/dist/Chart.min.js');?>"></script>

  <!-- CoreUI main scripts -->

  <script src="<?php echo base_url('assets/coreui/js/app.js');?>"></script>

  <!-- Plugins and scripts required by this views -->

  <!-- Custom scripts required by this view -->
  <script src="<?php echo base_url('assets/coreui/js/views/main.js');?>"></script>

  <script>
        $(document).ready(function(){
            $(document).ajaxStart(function(){
              $("#modalSpinner").modal({backdrop: 'static', keyboard: false, show: true});
            });
            $(document).ajaxStop(function(){
              $("#modalSpinner").modal('hide');
            });
        });

        function loadPage(page){
          $("#page").load(page);
        }
  </script>

</body>
</html>