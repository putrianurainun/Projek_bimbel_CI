<?php echo $this->extend('Layout/layout'); ?>
<?php echo $this->section('content'); ?>

<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Data Teacher</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="/teacher/save" method="post" enctype="multipart/form-data">
              <?php echo csrf_field(); ?>
              <div class="box-body">
                <div class="form-group">
                  <label for="nama_teacher">Nama</label>
                  <input type="text" class="form-control" name="nama_teacher" id="nama_teacher" placeholder="Enter Name">
                </div>
                <div class="form-group">
                  <label for="foto_teacher">Foto</label>
                  <input type="file" class="form-control" name="foto_teacher" id="foto_teacher" autofocus="" value=" <?php echo old('foto_teacher'); ?>">
                </div>
                <div class="form-group">
                  <label for="jk_teacher">Jenis Kelamin</label>
                  <select class="form" id="jk_teacher" name="jk_teacher">                  
                      <option name="jk_teacher">Laki-laki</option>
                      <option name="jk_teacher">Perempuan</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="alamat_teacher">Alamat</label>
                  <input type="text" class="form-control" name="alamat_teacher" id="alamat_teacher" placeholder="Enter Alamat">
                </div>
                <div class="form-group">
                  <label for="no_hp">No Telepon</label>
                  <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="Enter No Telepon">
                </div>
                <div class="form-group">
                  <label for="email_teacher">Email</label>
                  <input type="text" class="form-control" name="email_teacher" id="email_teacher" placeholder="Enter Email">
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>

<?php echo $this->endSection(); ?>