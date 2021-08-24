<?php echo $this->extend('Layout/layout'); ?>
<?php echo $this->section('content'); ?>

<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Data Pelajaran</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="/materi/update/<?php echo $materi['id_materi'] ?>" method="post" enctype="multipart/form-data">
              <?php echo csrf_field(); ?>
              <div class="box-body">
                <div class="form-group">
                  <label for="paket">Paket</label>
                  <select class="form" id="paket" name="id_paket">
                    <?php foreach ($paket as $data) : ?>
                      <option 
                      <?php if($materi['id_paket']==$data['id_paket']){echo 'selected="selected"';} ?> value="<?php echo $data['id_paket'] ?>"><?php echo $data['paket'] ?></option>
                      <?php endforeach ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="materi">Materi</label>
                  <input type="file" class="form-control" name="materi"   value="<?php echo (old('materi'))? old('materi'):$materi['materi'];?>" value ="<?php echo $materi['materi']?>" " autocomplete="off">
                <input type="hidden" class="form-control" name="materiLama"  value="<?php echo (old('materi'))? old('materi'):$materi['materi'];?>" value ="<?php echo $materi['materi']?>"  autocomplete="off"></div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>

<?php echo $this->endSection(); ?>