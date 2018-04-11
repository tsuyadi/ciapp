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
                Data Sekolah
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
                          <div><?php echo $row['alamat_sekolah'] ;?></div>
                            <div class="small text-muted">
                              <span>Kode pos :</span> | <?php echo $row['kode_pos'] ;?>
                            </div>
                        </td>
                        <td class="text-center">
                            <?php echo $row['jenis_sekolah'] ;?>
                        </td>
                        <td class="text-center">
                            <a class="btn btn-success" href="#">
                            <i class="fa fa-search-plus "></i>
                            </a>
                            <a class="btn btn-info" href="#">
                            <i class="fa fa-edit "></i>
                            </a>
                            <a class="btn btn-danger" href="#">
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

  <!-- Datatables plugins -->
  <link href="<?php echo base_url('assets/node_modules/datatables.net-dt/css/jquery.dataTables.css');?>" rel="stylesheet">
  <script src="<?php echo base_url('assets/node_modules/datatables.net/js/jquery.dataTables.js');?>"></script>

      <script>
        $(document).ready(function(){
          $("#myTable").dataTable();
          // var listSekolah =
          // alert("test : " + listSekolah);
        });
      </script>
<!-- /.conainer-fluid -->