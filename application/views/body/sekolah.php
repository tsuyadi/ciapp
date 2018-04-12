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

        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Tambah Data Sekolah</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body">
              <div class="card">
                <!-- <div class="card-header">
                  <strong>Normal</strong>
                  Form
                </div> -->
                <div class="card-body">
                  <form action="" method="post">
                  <div class="form-group">
                      <label for="nf-email">Kode Sekolah</label>
                      <input type="email" id="kodeSekolah" name="kodeSekolah" class="form-control" >
                      <!-- <span class="help-block">Please enter your email</span> -->
                    </div>
                    <div class="form-group">
                      <label for="nf-email">Nama Sekolah</label>
                      <input type="email" id="namaSekolah" name="namaSekolah" class="form-control" >
                      <!-- <span class="help-block">Please enter your email</span> -->
                    </div>
                    <div class="form-group">
                      <label for="nf-password">Alamat Sekolah</label>
                      <textarea id="alamatSekolah" name="alamatSekolah" row="6" class="form-control" ></textarea>
                      <!-- <span class="help-block">Please enter your password</span> -->
                    </div>
                    <div class="form-group">
                      <label for="nf-password">Propinsi</label>
                      <input type="password" id="alamatSekolah" name="alamatSekolah" class="form-control" >
                      <!-- <span class="help-block">Please enter your password</span> -->
                    </div>
                    <div class="form-group">
                      <label for="nf-password">Kota/Kabupaten</label>
                      <input type="password" id="alamatSekolah" name="alamatSekolah" class="form-control" >
                      <!-- <span class="help-block">Please enter your password</span> -->
                    </div>
                    <div class="form-group">
                      <label for="nf-password">Kecamatan</label>
                      <input type="password" id="alamatSekolah" name="alamatSekolah" class="form-control" >
                      <!-- <span class="help-block">Please enter your password</span> -->
                    </div>
                    <div class="form-group">
                      <label for="nf-password">Kelurahan</label>
                      <input type="password" id="alamatSekolah" name="alamatSekolah" class="form-control" >
                      <!-- <span class="help-block">Please enter your password</span> -->
                    </div>
                    <div class="form-group">
                      <label for="nf-password">Kode Pos</label>
                      <input type="password" id="alamatSekolah" name="alamatSekolah" class="form-control" >
                      <!-- <span class="help-block">Please enter your password</span> -->
                    </div>
                    <div class="form-group">
                      <label for="nf-password">Jenis Sekolah</label>
                      <input type="password" id="alamatSekolah" name="alamatSekolah" class="form-control" >
                      <!-- <span class="help-block">Please enter your password</span> -->
                    </div>
                    <div class="form-group">
                      <label for="nf-password">Akreditasi</label>
                      <select id="select1" name="select1" class="form-control">
                          <option value="0">--Pilih Akreditasi--</option>
                          <option value="1">A</option>
                          <option value="2">B</option>
                          <option value="3">C</option>
                        </select>
                    </div>
                  </form>
                </div>
                <!-- <div class="card-footer">
                  <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> Submit</button>
                  <button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i> Reset</button>
                </div> -->
              </div>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

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