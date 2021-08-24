<?php echo $this->extend('Layout/layout'); ?>
<?php echo $this->section('content'); ?>

<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Data Student</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="/student/update/<?php echo $student['id_student'] ?>" method="post">
              <?php echo csrf_field(); ?>
              <div class="box-body">
                <div class="form-group">
                  <label for="nama_student">Nama</label>
                  <input type="text" class="form-control" name="nama_student" value=" <?php echo (old('nama_student'))? old('nama_student'):$student ['nama_student']; ?> ">
                </div>
                <div class="form-group">
                  <label for="jk_student">Jenis Kelamin</label>
                 <input type="text" class="form-control" name="jk_student" value=" <?php echo (old('jk_student'))? old('jk_student'):$student ['jk_student']; ?> ">
                </div>
                <div class="form-group">
                  <label for="alamat_student">Alamat</label>
                  <input type="text" class="form-control" name="alamat_student" value=" <?php echo (old('alamat_student'))? old('alamat_student'):$student ['alamat_student']; ?> ">
                </div>
                <div class="form-group">
                  <label for="no_hp">No Telepon</label>
                  <input type="text" class="form-control" name="no_hp" value=" <?php echo (old('no_hp'))? old('no_hp'):$student ['no_hp']; ?> ">
                </div>
                <div class="form-group">
                  <label for="email_student">Email</label>
                  <input type="text" class="form-control" name="email_student" value=" <?php echo (old('email_student'))? old('email_student'):$student ['email_student']; ?> ">
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>

<?php echo $this->endSection(); ?>