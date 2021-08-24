<?php echo $this->extend('Layout/layout'); ?>
<?php echo $this->section('content'); ?>

<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Data Level</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="/level/save" method="post">
              <?php echo csrf_field(); ?>
              <div class="box-body">
                <div class="form-group">
                  <label for="level_pelajaran">Level</label>
                  <input type="text" class="form-control" name="level_pelajaran" id="level_pelajaran" placeholder="Enter Level">
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
            <br><br>
             <a href="/level">Kembali</a>
          </div>

<?php echo $this->endSection(); ?>