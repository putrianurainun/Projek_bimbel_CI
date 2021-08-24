<?php echo $this->extend('Layout/layout'); ?>
<?php echo $this->section('content'); ?>

<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Data Teacher</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="/teacher/update/<?php echo $teacher['id_teacher'] ?>" method="post" enctype="multipart/form-data">
              <?php echo csrf_field(); ?>
              <div class="box-body">
                <div class="form-group">
                  <label for="nama_teacher">Nama</label>
                  <input type="text" class="form-control" name="nama_teacher" value=" <?php echo (old('nama_teacher'))? old('nama_teacher'):$teacher ['nama_teacher']; ?> ">
                </div>
                <div class="form-group">
                  <label for="foto_teacher">Foto</label>
                  <input type="file" class="form-control" name="foto_teacher"   value="<?php echo (old('foto_teacher'))? old('foto_teacher'):$teacher['foto_teacher'];?>" value ="<?php echo $teacher['foto_teacher']?>" " autocomplete="off">
                <input type="hidden" class="form-control" name="foto_teacherLama"  value="<?php echo (old('foto_teacher'))? old('foto_teacher'):$teacher['foto_teacher'];?>" value ="<?php echo $teacher['foto_teacher']?>"  autocomplete="off"></div>
                
                </div>
                <div class="form-group">
                  <label for="jk_teacher">Jenis Kelamin</label>
                 <input type="text" class="form-control" name="jk_teacher" value=" <?php echo (old('jk_teacher'))? old('jk_teacher'):$teacher ['jk_teacher']; ?> ">
                </div>
                <div class="form-group">
                  <label for="alamat_teacher">Alamat</label>
                  <input type="text" class="form-control" name="alamat_teacher" value=" <?php echo (old('alamat_teacher'))? old('alamat_teacher'):$teacher ['alamat_teacher']; ?> ">
                </div>
                <div class="form-group">
                  <label for="no_hp">No Telepon</label>
                  <input type="text" class="form-control" name="no_hp" value=" <?php echo (old('no_hp'))? old('no_hp'):$teacher ['no_hp']; ?> ">
                </div>
                <div class="form-group">
                  <label for="email_teacher">Email</label>
                  <input type="text" class="form-control" name="email_teacher" value=" <?php echo (old('email_teacher'))? old('email_teacher'):$teacher ['email_teacher']; ?> ">
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>

<?php echo $this->endSection(); ?>