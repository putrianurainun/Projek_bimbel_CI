<?php echo $this->extend('Layout/layout'); ?>
<?php echo $this->section('content'); ?>

<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Data Student</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="/student/save" method="post">
              <?php echo csrf_field(); ?>
              <div class="box-body">
                <div class="form-group">
                  <label for="nama_student">Nama</label>
                  <input type="text" class="form-control" name="nama_student" id="nama_student" placeholder="Enter Name">
                </div>
                <div class="form-group">
                  <label for="jk_student">Jenis Kelamin</label>
                  <select class="form" id="jk_student" name="jk_student">                  
                      <option name="jk_student">Laki-laki</option>
                      <option name="jk_student">Perempuan</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="alamat_student">Alamat</label>
                  <input type="text" class="form-control" name="alamat_student" id="alamat_student" placeholder="Enter Alamat">
                </div>
                <div class="form-group">
                  <label for="no_hp">No Telepon</label>
                  <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="Enter No Telepon">
                </div>
                <div class="form-group">
                  <label for="email_student">Email</label>
                  <input type="email" class="form-control" name="email_student" id="email_student" placeholder="Enter Email">
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>

<?php echo $this->endSection(); ?>