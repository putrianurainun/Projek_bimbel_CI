<?php echo $this->extend('Layout/layout'); ?>
<?php echo $this->section('content'); ?>

<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Data Paket</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="/paket/save" method="post">
              <?php echo csrf_field(); ?>
              <div class="box-body">
                <div class="form-group">
                  <label for="paket">Paket</label>
                  <input type="text" class="form-control" name="paket" id="paket" placeholder="Enter Paket">
                </div>
                <div class="form-group">
                  <label for="level_pelajaran">Level</label>
                  <select class="form" id="level_pelajaran" name="level_pelajaran">
                    <?php foreach ($level as $data) : ?>
                      <option value="<?php echo $data['id_level'] ?>"><?php echo $data['level_pelajaran'] ?></option>
                      <?php endforeach ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="nama_teacher">Tutor</label>
                  <select class="form" id="nama_teacher" name="nama_teacher">
                    <?php foreach ($teacher as $data) : ?>
                      <option value="<?php echo $data['id_teacher'] ?>"><?php echo $data['nama_teacher'] ?></option>
                      <?php endforeach ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="harga">Harga</label>
                  <input type="text" class="form-control" name="harga" id="harga" placeholder="Enter Harga">
                </div>
                <div class="form-group">
                  <label for="jadwal_awal">Jadwal awal</label>
                  <input type="time" class="form-control" name="jadwal_awal" id="jadwal_awal" >
                  <label for="jadwal_akhir">Jadwal akhir</label>
                  <input type="time" class="form-control" name="jadwal_akhir" id="jadwal_akhir">
                </div>
                <div class="form-group">
                  <label for="link">Link Pertemuan</label>
                  <input type="text" class="form-control" name="link" id="link" placeholder="Enter Link">
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>

<?php echo $this->endSection(); ?>