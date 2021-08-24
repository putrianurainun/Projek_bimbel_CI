<?php echo $this->extend('Layout/layout'); ?>
<?php echo $this->section('content'); ?>

<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Data Pelajaran</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="/pelajaran/update/<?php echo $pelajaran['id_pelajaran'] ?>" method="post">
              <?php echo csrf_field(); ?>
              <div class="box-body">
                <div class="form-group">
                  <label for="level_pelajaran">Level</label>
                  <select class="form" id="level_pelajaran" name="level_pelajaran">
                    <?php foreach ($level as $data) : ?>
                      <option 
                      <?php if($pelajaran['id_level']==$data['id_level']){echo 'selected="selected"';} ?> value="<?php echo $data['id_level'] ?>"><?php echo $data['level_pelajaran'] ?></option>
                      <?php endforeach ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="nama_pelajaran">Pelajaran</label>
                  <input type="text" class="form-control" name="nama_pelajaran" value=" <?php echo (old('nama_pelajaran'))? old('nama_pelajaran'):$pelajaran ['nama_pelajaran']; ?> ">
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>

<?php echo $this->endSection(); ?>