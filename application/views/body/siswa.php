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
            <div class="card-header">
            <button type="button" class="btn btn-primary" onclick="loadPage('<?php echo base_url() ;?>index.php/siswa/formSiswa')"><i class="fa fa-plus"></i>&nbsp;Data Siswa</button>
            </div>
            <div class="card-body">
            <table id="myTable" class="table table-responsive-sm table-hover table-outline mb-0" width="100%">
                    <thead class="thead-light">
                      <tr>
                        <th class="text-center"><i class="icon-people"></i></th>
                        <!-- <th class="text-center">NIK</th> -->
                        <th class="text-center">NIS</th>
                        <th class="text-center">Nama</th>
                        <!-- <th class="text-center">Tempat Lahir</th> -->
                        <!-- <th class="text-center">Tanggal Lahir</th> -->
                        <!-- <th class="text-center">Alamat</th> -->
                        <th class="text-center">Kelas</th>
                        <th class="text-center">Sekolah</th>
                        <th class="text-center">Tanggal Masuk</th>
                        <!-- <th class="text-center">Tanggal Pensiun</th> -->
                        <!-- <th class="text-center">Catatan</th> -->
                        <th class="text-center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach($listSiswa as $i=>$row): ?>
                      <tr>
                        <td class="text-center">
                          <div class="avatar">
                          <img src="<?php echo base_url('assets/img/'.$row['no_induk'].'.jpg');?>" class="img-avatar" alt="">
                            <!-- <img src="<?php echo base_url();?>assets/coreui/img/avatars/1.jpg" class="img-avatar" alt="admin@bootstrapmaster.com"> -->
                            <!-- <span class="avatar-status badge-success"></span> -->
                          </div>
                        </td>
                        <td><?php echo $row['no_induk'] ;?></td>
                        <td> <?php echo $row['nama'] ;?></td>
                        <!-- <td><?php echo $row['nama'] ;?></td> -->
                        <!-- <td class="text-center">-</td> -->
                        <!-- <td><?php echo $row['tgl_lahir'] ;?></td> -->
                        <!-- <td><?php echo $row['alamat'] ;?></td> -->
                        <td><?php echo $row['kelas'] ;?></td>
                        <td><?php echo $row['kode_sekolah'] ;?></td>
                        <td><?php echo $row['tgl_masuk'] ;?></td>
                        <!-- <td><?php echo $row['tgl_tdk_aktif'] ;?></td> -->
                        <!-- <td><?php echo $row['catatan'] ;?></td> -->
                        <td class="text-center">
                            <a id="btnSearch" onclick="searchSiswa(<?php echo $row['Id'] ;?>);" class="btn btn-success" href="#">
                            <i class="fa fa-search-plus "></i>
                            </a>
                            <a id="btnInfo" onclick="updateSiswa(<?php echo $row['Id'] ;?>);" class="btn btn-info" href="#">
                            <i class="fa fa-edit "></i>
                            </a>
                            <a id="btnDelete" onclick="deleteSiswa(<?php echo $row['Id'] ;?>,'<?php echo $row['nama'] ;?>');" class="btn btn-danger" href="#">
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
          <div class="modal-dialog" role="document">
            <form id="form-guru" action="" method="post">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Data Siswa</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="card">
                      <div class="card-header">
                            <div class="text-center">
                                <img id="photo" alt="image" style="height: 128px; width : 128px;" class="img-avatar center-block" src="<?php echo base_url('assets/img/777777.jpg');?>">
                                <div id="no_induk" class="m-t-xs font-bold">Graphics designer</div>
                            </div>
                      </div>
                      <div class="card-body text-center">
                            <h3 id="nama_siswa"><strong>Sandra Smith</strong></h3>
                            <p id="alamat"><i class="fa fa-map-marker"></i> Riviera State 32/106</p>
                            <address>
                                <strong>Twitter, Inc.</strong><br>
                                795 Folsom Ave, Suite 600<br>
                                San Francisco, CA 94107<br>
                                <abbr title="Phone">P:</abbr> (123) 456-7890
                            </address>
                      </div>
                      <div class="card-body" style="height:38px;">
                        <!-- <canvas class="chart-8 chart chart-bar" height="38"></canvas> -->
                      </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <!-- <button id="btn-save" type="button" class="btn btn-primary">Save changes</button> -->
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

          $("#myTable").dataTable();
          
        });

        function searchSiswa(id_siswa){

          $.ajax({
              url : "<?php echo base_url();?>index.php/siswa/searchSiswa",
              method : "POST",
              data : {id : id_siswa},
              // async : false,
              dataType : 'json',
              success: function(data){

              $("#photo").attr("src", "<?php echo base_url();?>assets/img/" + data.no_induk +".jpg");
              document.getElementById("nama_siswa").innerHTML = data.nama;
              document.getElementById("no_induk").innerHTML = data.no_induk;
              document.getElementById("alamat").innerHTML = data.alamat;

              $("#myModal").modal('show');
              }
          });           
        }

        function updateSiswa(id_siswa){
          loadPage("<?php echo base_url();?>index.php/siswa/formUpdateSiswa?id="+ id_siswa);
        }

        function deleteSiswa(id_siswa, nama){
            swal({
                  title: "Apakah kamu yakin?",
                  text: "Data siswa " + nama  +" akan dihapus",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
                })
                .then((willDelete) => {
                  if (willDelete) {

                      $.ajax({
                        url : "<?php echo base_url();?>index.php/siswa/deleteSiswa",
                        method : "POST",
                        data : {id : id_siswa},
                        // async : false,
                        dataType : 'json',
                        success: function(data){
                            if(data === 0){
                              swal("information", "Data siswa berhasil dihapus", "success");
                              loadPage("<?php echo base_url();?>index.php/siswa");
                            }else{
                              swal("information", "Data siswa gagal dihapus", "error");
                            }                 
                        }
                    });
                  } else {
                    swal("Information","Data siswa batal dihapus!", "warning");
                  }
            }); 
          }
      </script>
<!-- /.conainer-fluid -->