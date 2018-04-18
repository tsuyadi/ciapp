<!-- Breadcrumb -->
<ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Master</li>
        <li class="breadcrumb-item active">Guru</li>

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
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i>&nbsp;Data Guru</button>
            </div>
            <div class="card-body">
            <table id="myTable" class="table table-responsive-sm table-hover table-outline mb-0" width="100%">
                    <thead class="thead-light">
                      <tr>
                        <th class="text-center">No. </th>
                        <!-- <th class="text-center">NIK</th> -->
                        <th class="text-center">NIP</th>
                        <th class="text-center">Nama</th>
                        <!-- <th class="text-center">Tempat Lahir</th>
                        <th class="text-center">Tanggal Lahir</th> -->
                        <th class="text-center">Alamat</th>
                        <th class="text-center">Jabatan</th>
                        <th class="text-center">Sekolah</th>
                        <!-- <th class="text-center">Tanggal Masuk</th>
                        <th class="text-center">Tanggal Pensiun</th> -->
                        <th class="text-center">Status</th>
                        <th class="text-center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach($listGuru as $i=>$row): ?>
                      <tr>
                        <td class="text-center"><?php echo $i + 1;?></td>
                        <!-- <td><?php echo $row['nik'] ;?></td> -->
                        <td> <?php echo $row['nip'] ;?></td>
                        <td><?php echo $row['nama'] ;?></td>
                        <!-- <td class="text-center">-</td>
                        <td><?php echo $row['tgl_lahir'] ;?></td> -->
                        <td><?php echo $row['alamat'] ;?></td>
                        <td><?php echo $row['jabatan'] ;?></td>
                        <td><?php echo $row['kode_sekolah'] ;?></td>
                        <!-- <td><?php echo $row['tgl_masuk'] ;?></td>
                        <td><?php echo $row['tgl_tdk_aktif'] ;?></td> -->
                        <td><?php echo $row['status'] ;?></td>
                        <td class="text-center">
                            <a id="btnSearch" class="btn btn-success" href="#">
                            <i class="fa fa-search-plus "></i>
                            </a>
                            <a id="btnInfo" class="btn btn-info" href="#">
                            <i class="fa fa-edit "></i>
                            </a>
                            <a id="btnDelete" onclick="deleteGuru(<?php echo $row['Id'] ;?>,'<?php echo $row['nama'] ;?>');" class="btn btn-danger" href="#">
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

        <div class="modal  fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="overflow:scroll;">
          <div class="modal-dialog modal-lg" role="document">
            <form id="form-guru" action="" method="post">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Data Guru</h4>
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
                                <label for="nik">NIK</label>
                                <input type="text" id="nik" name="nik" class="form-control" >
                              </div>
                              <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" id="nama" name="nama" class="form-control" >
                              </div>
                              <div class="form-group">
                                <label for="tmpt_lahir">Tempat Lahir</label>
                                <input type="text" id="tmpt_lahir" name="tmpt_lahir" class="form-control" >
                              </div>
                              <div class="form-group">
                                <label for="tgl_lahir">Tanggal Lahir</label>
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                  </div>
                                  <input type="text" id="tgl_lahir" name="tgl_lahir" class="form-control datepickers" >
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="jabatan">Jabatan</label>
                                <select id="jabatan" name="jabatan" class="form-control">
                                    <option value="0">--Pilih Jabatan--</option>
                                    <?php foreach($listJabatan as $i=>$row): ?>
                                    <option value="<?php echo $row['Id'];?>"><?php echo $row['Id']." - ". $row['jabatan'] ;?></option>
                                    <?php endforeach; ?>
                                </select>
                              </div>
                              <div class="form-group">
                                <label for="sekolah">Sekolah</label>
                                <select id="kode_sekolah" name="kode_sekolah" class="form-control">
                                    <option value="0">--Pilih Sekolah--</option>
                                    <?php foreach($listSekolah as $i=>$row): ?>
                                    <option value="<?php echo $row['kode_sekolah'];?>"><?php echo $row['nama_sekolah'] ;?></option>
                                    <?php endforeach; ?>
                                </select>
                              </div>
                              <div class="form-group">
                                <label for="tgl_masuk">Tanggal Masuk</label>
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                  </div>
                                  <input type="text" id="tgl_masuk" name="tgl_masuk" class="form-control datepickers" >
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="tgl_tdk_aktif">Tanggal Pensiun</label>
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                  </div>
                                  <input type="text" id="tgl_tdk_aktif" name="tgl_tdk_aktif" class="form-control datepickers" >
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="status">Status</label>
                                <select id="status" name="status" class="form-control">
                                    <option value="0">--Pilih Status--</option>
                                    <option value="1">A</option>
                                    <option value="2">B</option>
                                    <option value="3">C</option>
                                  </select>
                              </div>                 
                          </div>
                        </div>
                      </div>
                      <!-- col -->
                      <div class="col-md-6">
                        <div class="card">
                          <div class="card-body">
                              <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <textarea type="text" id="alamat" name="alamat" row="3" style="height: 80px;" class="form-control" ></textarea>
                              </div>
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
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

  <!-- Datatables plugins -->
  <link href="<?php echo base_url('assets/node_modules/datatables.net-dt/css/jquery.dataTables.css');?>" rel="stylesheet">
  <script src="<?php echo base_url('assets/node_modules/datatables.net/js/jquery.dataTables.js');?>"></script>
  
  <!-- Bootstrap datepicker plugins -->
  <link href="<?php echo base_url('assets/node_modules/bootstrap-datepicker/dist/css/bootstrap-datepicker3.standalone.css');?>" rel="stylesheet">
  <script src="<?php echo base_url('assets/node_modules/bootstrap-datepicker/js/bootstrap-datepicker.js');?>"></script>

  <!-- Sweet Alert Plugin -->
  <script src="<?php echo base_url('assets/node_modules/sweetalert/dist/sweetalert.min.js');?>"></script>  

      <script>
        $(document).ready(function(){

          $('.datepickers').datepicker({
            // startView: 1,
            keyboardNavigation: false,
            forceParse: false,
            format : 'yyyy-mm-dd',
            todayBtn : 'linked',
            todayHighlight : true,
            autoclose : true
          });

          $("#myTable").dataTable();

          $("#btnSearch").click(function(){

          });
          
          $("#btn-save").click(function(){                        
            var $form= $("#form-guru");
            var jsonParam = getFormdata($form);

              $.ajax({
                url : "<?php echo base_url();?>index.php/guru/addGuru",
                method : "POST",
                data : jsonParam,
                // async : false,
                dataType : 'json',
                success: function(data){
                    if(data === 0){
                      $("myModal").modal('hide');
                      $('body').removeClass('modal-open');
                      $('.modal-backdrop').remove();

                      swal("information", "tambah data guru sukses", "success");
                      
                      loadPage("<?php echo base_url();?>index.php/guru");

                    }else{
                      swal("information", "tambah data guru gagal", "error");
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

        function deleteGuru(id_guru, nama){
            swal({
                  title: "Apakah kamu yakin?",
                  text: "Data guru " + nama  +" akan dihapus",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
                })
                .then((willDelete) => {
                  if (willDelete) {

                      $.ajax({
                        url : "<?php echo base_url();?>index.php/guru/deleteGuru",
                        method : "POST",
                        data : {id : id_guru},
                        // async : false,
                        dataType : 'json',
                        success: function(data){
                            if(data === 0){
                              swal("information", "Data guru berhasil dihapus", "success");
                              loadPage("<?php echo base_url();?>index.php/guru");
                            }else{
                              swal("information", "Data guru gagal dihapus", "error");
                            }                 
                        }
                    });
                  } else {
                    swal("Information","Data guru batal dihapus!", "warning");
                  }
            }); 
          }
      </script>
<!-- /.conainer-fluid -->