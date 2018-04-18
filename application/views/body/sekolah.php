<!-- Breadcrumb -->
<ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Master</li>
        <li class="breadcrumb-item active">Sekolah</li>

        <!-- Breadcrumb Menu-->
        <li class="breadcrumb-menu d-md-down-none">
          <div class="btn-group" role="group" aria-label="Button group">
            <a class="btn" href="#"><i class="icon-speech"></i></a>
            <a class="btn" href="./"><i class="icon-graph"></i> &nbsp;Dashboard</a>
            <a class="btn" href="#"><i class="icon-settings"></i> &nbsp;Settings</a>
          </div>
        </li>
      </ol>

      <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="card">
            <div class="card-header">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i>&nbsp;Data Sekolah</button>
            </div>
            <div class="card-body">
            <table id="myTable" class="table table-responsive-sm table-hover table-outline mb-0" width="100%">
                    <thead class="thead-light">
                      <tr>
                        <th class="text-center">No. </th>
                        <th class="text-center">Nama Sekolah</th>
                        <th class="text-center">Akreditasi</th>
                        <th class="text-center">Alamat Sekolah</th>
                        <th class="text-center">Jenis Sekolah</th>
                        <th class="text-center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach($listSekolah as $i=>$row): ?>
                      <tr>
                        <td class="text-center">
                            <?php echo $i + 1;?>
                        </td>
                        <td>
                          <?php echo $row['nama_sekolah'] ;?>
                        </td>
                        <td class="text-center">
                             <?php echo $row['akreditasi'] ;?>
                        </td>
                        <td>
                          <div><?php echo $row['alamat_sekolah'] .", ". $row['nm_kelurahan'] .", ". $row['nm_kecamatan'];?></div>
                            <div class="small text-muted">
                              <span><?php echo $row['nm_kabupaten'] .", ". $row['nm_propinsi'] ." ". $row['kode_pos'] ;?></span>
                            </div>
                        </td>
                        <td class="text-center">
                            <?php echo $row['jenis_sekolah'] ;?>
                        </td>
                        <td class="text-center">
                            <a id="btnSearch" class="btn btn-success" href="#">
                            <i class="fa fa-search-plus "></i>
                            </a>
                            <a id="btnInfo" class="btn btn-info" href="#">
                            <i class="fa fa-edit "></i>
                            </a>
                            <a id="btnDelete" onclick="deleteSekolah(<?php echo $row['id'] ;?>,'<?php echo $row['nama_sekolah'] ;?>');" class="btn btn-danger" href="#">
                            <i class="fa fa-trash-o "></i>
                            </a>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
      </div>

      <!-- Modal Form Sekolah -->
        <div class="modal  fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="overflow:scroll;">
          <div class="modal-dialog modal-lg" role="document">
            <form id="form-sekolah" action="" method="post">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Data Sekolah</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="card">
                          <div class="card-body">
                              <div class="form-group">
                                <label for="kode_sekolah">Kode Sekolah</label>
                                <input type="text" id="kode_sekolah" name="kode_sekolah" class="form-control" >
                              </div>
                              <div class="form-group">
                                <label for="nama_sekolah">Nama Sekolah</label>
                                <input type="text" id="nama_sekolah" name="nama_sekolah" class="form-control" >
                              </div>
                              <div class="form-group">
                                <label for="jenis_sekolah">Jenis Sekolah</label>
                                <select id="jenis_sekolah" name="jenis_sekolah" class="form-control">
                                    <option value="0">--Pilih Jenis Sekolah--</option>
                                    <?php foreach($listJenisSekolah as $i=>$row): ?>
                                    <option value="<?php echo $row['Id'];?>"><?php echo $row['Id']." - ". $row['nama'] ;?></option>
                                    <?php endforeach; ?>
                                </select>
                              </div>
                              <div class="form-group">
                                <label for="akreditasi">Akreditasi</label>
                                <select id="akreditasi" name="akreditasi" class="form-control">
                                    <option value="0">--Pilih Akreditasi--</option>
                                    <option value="1">A</option>
                                    <option value="2">B</option>
                                    <option value="3">C</option>
                                  </select>
                              </div>
                              <div class="form-group">
                                <label for="alamat_sekolah">Alamat Sekolah</label>
                                <textarea type="text" id="alamat_sekolah" name="alamat_sekolah" row="3" style="height: 80px;" class="form-control" ></textarea>
                              </div>                 
                          </div>
                        </div>
                      </div>
                      <!-- col -->
                      <div class="col-md-6">
                        <div class="card">
                          <div class="card-body">
                              <div class="form-group">
                                <label for="propinsi">Propinsi</label>
                                <select id="propinsi" name="propinsi" class="form-control">
                                    <option value="0">--Pilih Propinsi--</option>
                                    <?php foreach($listPropinsi as $i=>$row): ?>
                                    <option value="<?php echo $row['id_propinsi'];?>"><?php echo $row['nm_propinsi'] ;?></option>
                                    <?php endforeach; ?>
                                </select>
                              </div>
                              <div class="form-group">
                                <label for="kabupaten">Kota/Kabupaten</label>
                                <select id="kabupaten" name="kabupaten" class="form-control">
                                    <option value="0">--Pilih Kota/Kabupaten--</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <label for="kecamatan">Kecamatan</label>
                                <select id="kecamatan" name="kecamatan" class="form-control">
                                    <option value="0">--Pilih Kecamatan--</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <label for="kelurahan">Kelurahan</label>
                                <select id="kelurahan" name="kelurahan" class="form-control">
                                    <option value="0">--Pilih Kelurahan--</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <label for="kode_pos">Kode Pos</label>
                                <input type="number" id="kode_pos" name="kode_pos" class="form-control" >
                              </div>
                          </div>
                        </div>
                      </div>
                      <!-- col -->
                    </div>
                    <!-- row -->
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button id="btn-save" type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
              <!-- /.modal-content -->
            </form>
            <!-- form -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

  <!-- Datatables plugins -->
  <link href="<?php echo base_url('assets/node_modules/datatables.net-dt/css/jquery.dataTables.css');?>" rel="stylesheet">
  <script src="<?php echo base_url('assets/node_modules/datatables.net/js/jquery.dataTables.js');?>"></script>
  
  <!-- Sweet Alert Plugin -->
  <script src="<?php echo base_url('assets/node_modules/sweetalert/dist/sweetalert.min.js');?>"></script>  

      <script>
        $(document).ready(function(){
          $("#myTable").dataTable();

          $("#btnSearch").click(function(){
              // console.log("URL --> "+ <?php echo base_url();?> + "index.php/sekolah/addSekolah?" + $("#form-sekolah").serialize());
              // loadPage();
          });
          
          $("#btn-save").click(function(){                        
            var $form= $("#form-sekolah");
            var jsonParam = getFormdata($form);

              $.ajax({
                url : "<?php echo base_url();?>index.php/sekolah/addSekolah",
                method : "POST",
                data : jsonParam,
                dataType : 'json',
                success: function(data){
                    if(data === 0){
                      $("myModal").modal('hide');
                      $('body').removeClass('modal-open');
                      $('.modal-backdrop').remove();

                      swal("information", "tambah data sekolah sukses", "success");
                      
                      loadPage("<?php echo base_url();?>index.php/sekolah");

                    }else{
                      swal("information", "tambah data sekolah gagal", "error");
                    }                 
                }
            });
          });


            // button
          $("#propinsi").change(function(){
            var id= $(this).val();
            $.ajax({
              url : "<?php echo base_url();?>index.php/master/getKotaKab",
              method : "POST",
              data : {id: id},
              // async : false,
              dataType : 'json',
              success: function(data){
          
                $("#kabupaten").empty();
                $("#kabupaten").append($('<option>', {value : 0, text: "--Pilih Kota/Kabupaten--"}));
          
                $.each(data, function(idx, data){
                  $("#kabupaten").append($('<option>', {
                    value : data.id_kota_kab,
                    text : data.nm_kota_kab
                  }));
                });
              }
            });
          });
          
          $("#kabupaten").change(function(){
            var id= $(this).val();
            $.ajax({
              url : "<?php echo base_url();?>index.php/master/getKecamatan",
              method : "POST",
              data : {id: id},
              dataType : 'json',
              success: function(data){
          
                $("#kecamatan").empty();
                $("#kecamatan").append($('<option>', {value : 0, text: "--Pilih Kecamatan--"}));
          
                $.each(data, function(idx, data){
                  $("#kecamatan").append($('<option>', {
                    value : data.id_kecamatan,
                    text : data.nm_kecamatan
                  }));
                });
              }
            });
          });
          
          
          $("#kecamatan").change(function(){
            var id= $(this).val();
            $.ajax({
              url : "<?php echo base_url();?>index.php/master/getKelurahan",
              method : "POST",
              data : {id: id},
              dataType : 'json',
              success: function(data){
          
                $("#kelurahan").empty();
                $("#kelurahan").append($('<option>', {value : 0, text: "--Pilih Kelurahan--"}));
          
                $.each(data, function(idx, data){
                  $("#kelurahan").append($('<option>', {
                    value : data.id_kelurahan,
                    text : data.nm_kelurahan
                  }));
                });
              }
            });
          });

        });

        function getFormdata($form){
            var data = $form.serializeArray();
            var indexed_array = {};

            $.map(data, function(n, i){
                indexed_array[n['name']] = n['value'];
            });

            return indexed_array;
        }

        function deleteSekolah(id_sekolah, nama_sekolah){
            swal({
                  title: "Apakah kamu yakin?",
                  text: "Data sekolah " + nama_sekolah  +" akan dihapus",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
                })
                .then((willDelete) => {
                  if (willDelete) {

                      $.ajax({
                        url : "<?php echo base_url();?>index.php/sekolah/deleteSekolah",
                        method : "POST",
                        data : {id : id_sekolah},
                        dataType : 'json',
                        success: function(data){
                            if(data === 0){
                              swal("information", "Data sekolah berhasil dihapus", "success");
                              loadPage("<?php echo base_url();?>index.php/sekolah");
                            }else{
                              swal("information", "Data sekolah gagal dihapus", "error");
                            }                 
                        }
                    });
                  } else {
                    swal("Information","Data sekolah batal dihapus!", "warning");
                  }
            }); 
          }
      </script>
<!-- /.conainer-fluid -->