<?php echo $this->extend('Layout/layout'); ?>
<?php echo $this->section('content'); ?>

<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Data Paket</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="/paket/update/<?php echo $paket['id_paket'] ?>" method="post">
              <?php echo csrf_field(); ?>
              <div class="box-body">
                <div class="form-group">
                  <label for="paket">Paket</label>
                  <input type="text" class="form-control" name="paket" value=" <?php echo (old('paket'))? old('paket'):$paket ['paket']; ?> ">
                </div>
                <div class="form-group">
                  <label for="level_pelajaran">Level</label>
                  <select class="form" id="level_pelajaran" name="level_pelajaran">
                    <?php foreach ($level as $data) : ?>
                      <option 
                      <?php if($paket['id_level']==$data['id_level']){echo 'selected="selected"';} ?> value="<?php echo $data['id_level'] ?>"><?php echo $data['level_pelajaran'] ?></option>
                      <?php endforeach ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="nama_teacher">Tutor</label>
                  <select class="form" id="nama_teacher" name="nama_teacher">
                    <?php foreach ($teacher as $data) : ?>
                      <option 
                      <?php if($paket['id_teacher']==$data['id_teacher']){echo 'selected="selected"';} ?> value="<?php echo $data['id_teacher'] ?>"><?php echo $data['nama_teacher'] ?></option>
                      <?php endforeach ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="link">Harga</label>
                  <input type="text" class="form-control" name="harga" value=" <?php echo (old('harga'))? old('harga'):$paket ['harga']; ?> ">
                </div>

                <div class="form-group">
                  <label for="jadwal_awal">Jadwal Awal</label>
                  <input type="text" class="form-control" name="jadwal_awal" value=" <?php echo (old('jadwal_awal'))? old('jadwal_awal'):$paket ['jadwal_awal']; ?> ">
                </div>
                 <div class="form-group">
                  <label for="jadwal_akhir">Jadwal Akhir</label>
                  <input type="text" class="form-control" name="jadwal_akhir" value=" <?php echo (old('jadwal_akhir'))? old('jadwal_akhir'):$paket ['jadwal_akhir']; ?> ">
                </div>
                <div class="form-group">
                  <label for="link">Link Pertemuan</label>
                  <input type="text" class="form-control" name="link" value=" <?php echo (old('link'))? old('link'):$paket ['link']; ?> ">
                </div>

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>

<?php echo $this->endSection(); ?>