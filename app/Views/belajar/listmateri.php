<?php echo $this->extend('laayout/layout'); ?>
<?php echo $this->section('content'); ?>
<?php $session = \Config\Services::session(); ?>

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tables
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">  
              <?php if ($session->get('role')=="Teacher") { ?>
               <button type="button" data-toggle="modal" data-target="#tambah" class="btn btn-primary">Tambah</button>
              <?php  } ?> 
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Materi</th>
                    <?php if ($session->get('role')=="Teacher") { ?>
                    <th>Aksi</th>
                    <?php } ?>
                  </tr>
                </thead>
                <tbody>
                	<?php $a=0;
                		foreach ($data as $data) :
                			$a++;
                	 ?>
                <tr>
                  <td><?php echo $a; ?></td>
                  <td ><a href="/image/<?php echo $data['materi']; ?>"><?php echo $data['materi']; ?></a></td>
                  <?php if ($session->get('role')=="Teacher") { ?>
                  <td>
                    <button type="button" data-toggle="modal" onclick="hapus(<?php echo $data['id_detail']; ?>)" class="btn btn-danger">Delete</button>
                  </td>
                  <?php } ?>
                </tr>
                   <?php endforeach ?>
                </tbody>
               </table>
            </div>
          </div>
        </div>
      </div>
    </section>

<div class="modal" tabindex="-1" id="hapus"  role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Upload Bukti Transaksi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form role="form" action="/belajar/deletedetailpaket" method="post" enctype="multipart/form-data">
              <?php echo csrf_field(); ?>
              <div class="box-body">
                <div class="form-group">
                  <input type="hidden" name="id_detail">
                </div>
                <p>Apakah anda yakin ingin menghapus data ini?</p>
                <input type="hidden" name="id_paket" value="<?php echo $id_paket; ?>">
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-danger">Submit</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
          </form>
      </div>
    </div>
  </div>
</div>


<div class="modal" tabindex="-1" id="tambah"  role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Upload Bukti Transaksi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form role="form" action="/belajar/tambahdetailpaket" method="post" enctype="multipart/form-data">
              <?php echo csrf_field(); ?>
              <div class="box-body">
                <div class="form-group">
                  <label for="id_materi">Materi</label>
                  <select name="id_materi" class="form-control">
                    <?php foreach ($materi as $materii) : ?>
                    <option value="<?php echo $materii['id_materi']; ?>">
                      <?php echo $materii['materi']; ?>
                    </option>
                  <?php endforeach ?>
                  </select>
                </div>
                <input type="hidden" name="id_paket" value="<?php echo $id_paket; ?>">
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
          </form>
      </div>   
    </div>
  </div>
</div>
    
<!-- </div> -->


  



<script type="text/javascript">
  function hapus(id_detail)
  {
   // alert(id_detail);
    $('[name="id_detail"]').val(id_detail);
    $('#hapus').modal('show');
  }
</script>


<?php echo $this->endSection(); ?>