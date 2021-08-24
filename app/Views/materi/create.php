<?php echo $this->extend('Layout/layout'); ?>
<?php echo $this->section('content'); ?>

<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Data Pelajaran</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="/materi/save" method="post" enctype="multipart/form-data">
              <?php echo csrf_field(); ?>
              <div class="box-body">
                <div class="form-group">
                  <label for="paket">Paket</label>
                  <select class="form" name="id_paket">
                    <?php foreach ($paket as $data) : ?>
                      <option value="<?php echo $data['id_paket'] ?>"><?php echo $data['paket'] ?></option>
                      <?php endforeach ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="materi">Materi</label>
                  <input type="file" class="form-control" name="materi" placeholder="Enter Materi">
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>

<?php echo $this->endSection(); ?>