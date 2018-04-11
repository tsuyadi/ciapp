    <!-- Main content -->
    <main class="main">
        <div id="page"><?php $this->load->view('body/dashboard') ;?></div>
    </main>
  </div>
  
  <script>
      function loadPage(page){
          $("#page").load(page);
      }
  </script>