<!-- Breadcrumb -->
<ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Master</li>
        <li class="breadcrumb-item active">Siswa</li>

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
              <form id="form-siswa" type="multipart/form-data">
                <div class="card-header">
                    <h4> Form Siswa</h4>
                </div>
                <div class="card-body">
                        <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nik">NIK</label>
                                    <input type="text" id="nik" name="nik" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label for="no_induk">NIS</label>
                                    <input type="text" id="no_induk" name="no_induk" class="form-control" >
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
                                    <label for="kewarganegaraan">Kewarganeraan</label>
                                    <select id="kewarganegaraan" name="kewarganegaraan" class="form-control">
                                        <option value="0">--Pilih Kewarganegaraan--</option>
                                        <option value="1">WNI</option>
                                        <option value="2">WNA</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="negara">Negara</label>
                                    <select id="negara" name="negara" class="form-control">
                                        <option value="0">--Pilih Negara--</option>
                                        <option value="62">Indonesia</option>
                                        <!-- <option value="2">WNA</option> -->
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="telp">No Telepon</label>
                                    <input type="text" id="telp" name="telp" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label for="kelas">Kelas</label>
                                    <select id="kelas" name="kelas" class="form-control">
                                        <option value="0">--Pilih Kelas--</option>
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
                                <div id="div-id" class="form-group" style="display:none">
                                    <label id="label-id" for="Id">Id</label>
                                    <input type="text" id="Id" name="Id" class="form-control" >
                                </div>                 
                            </div>
                            </div>
                        </div>
                        <!-- col -->
                        <div class="col-md-6">
                            <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nama_ibu">Nama Ibu</label>
                                    <input type="text" id="nama_ibu" name="nama_ibu" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label for="nama_bapak">Nama Bapak</label>
                                    <input type="text" id="nama_bapak" name="nama_bapak" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label for="telp_ortu">No Telepon Orang Tua</label>
                                    <input type="text" id="telp_ortu" name="telp_ortu" class="form-control" >
                                </div>
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
                                <div class="form-group">
                                    <label for="catatan">Catatan</label>
                                    <textarea type="text" id="catatan" name="catatan" row="3" style="height: 80px;" class="form-control" ></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="catatan">Foto</label>
                                    <input type="file" id="file" name="file">
                                </div>
                            </div>
                            </div>
                        </div>
                        <!-- col -->
                        </div>
                        <!-- row -->
                        
                    
                </div>
                <!-- card body -->
                <div class="card-footer text-muted">
                    <button type="button" class="btn btn-secondary">Clear</button>
                    <button id="btn-save" type="button" class="btn btn-primary">Save</button>
                    <button id="btn-update" type="button" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
            <!-- card -->
        </div>
    </div>
 
  <!-- Bootstrap datepicker plugins -->
  <link href="<?php echo base_url('assets/node_modules/bootstrap-datepicker/dist/css/bootstrap-datepicker3.standalone.css');?>" rel="stylesheet">
  <script src="<?php echo base_url('assets/node_modules/bootstrap-datepicker/js/bootstrap-datepicker.js');?>"></script>
  <!-- Sweet Alert Plugin -->
  <script src="<?php echo base_url('assets/node_modules/sweetalert/dist/sweetalert.min.js');?>"></script>  

      <script>
        $(document).ready(function(){

            var siswa = '<?php echo $siswa;?>';
            
            if(siswa !== ''){

                var data = JSON.parse(siswa);
                
                $("#Id").val(data.Id);
                $("#nik").val(data.nik);
                $("#no_induk").val(data.no_induk);
                $("#nama").val(data.nama);
                $("#tgl_lahir").val(data.tgl_lahir);
                $("#alamat").val(data.alamat);
                $("#kode_sekolah").val(data.kode_sekolah).change();
                $("#nama_ibu").val(data.nama_ibu);
                $("#nama_bapak").val(data.nama_bapak);
                $("#telp").val(data.telp);
                $("#telp_ortu").val(data.telp_ortu);
                $("#kelas").val(data.kelas).change();
                $("#tgl_masuk").val(data.tgl_masuk);
                $("#catatan").val(data.catatan);
                $("#kewarganegaraan").val(data.kewarganegaraan);
                $("#negara").val(data.negara);
                
                // $("#Id").show();
                // $("#label-id").show();
                $("#btn-save").hide();
                $("#btn-update").show();
            }else{
                // $("#label-id").hide();
                // $("#Id").hide();
                $("#btn-save").show();
                $("#btn-update").hide();
            }
            

          $('.datepickers').datepicker({
            // startView: 1,
            keyboardNavigation: false,
            forceParse: false,
            format : 'yyyy-mm-dd',
            todayBtn : 'linked',
            todayHighlight : true,
            autoclose : true
          });

          
          $("#btn-save").click(function(){                        
            var $form= $("#form-siswa");
            var item = getFormdata($form);

            var $data = new FormData();
            
            for(var key in item){
               $data.append(key, item[key]);
            }

            $data.append('file', $("#file").get(0).files[0]);

              $.ajax({
                url : "<?php echo base_url();?>index.php/siswa/addSiswa",
                method : "POST",
                data : $data,
                contentType : false,
                processData : false,
                // dataType : 'json',
                success: function(data){

                    if(data === 0 || data === '0'){
                      swal("information", "tambah data siswa sukses", "success");
                      loadPage("<?php echo base_url();?>index.php/siswa");
                    }else{
                      swal("information", "tambah data siswa gagal " + data, "error");
                    } 
                                    
                }
              });

          });


          $("#btn-update").click(function(){                        
            var $form= $("#form-siswa");
            var item = getFormdata($form);

            var $data = new FormData();
            
            for(var key in item){
               $data.append(key, item[key]);
            }

            $data.append('file', $("#file").get(0).files[0]);

              $.ajax({
                url : "<?php echo base_url();?>index.php/siswa/updateSiswa",
                method : "POST",
                data : $data,
                contentType : false,
                processData : false,
                // dataType : 'json',
                success: function(data){

                    if(data === 0 || data === '0'){
                      swal("information", "update data siswa sukses", "success");
                      loadPage("<?php echo base_url();?>index.php/siswa");
                    }else{
                      swal("information", "update data siswa gagal " + data, "error");
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

      </script>
<!-- /.conainer-fluid -->