<?php echo $this->extend('Layout/layout'); ?>
<?php echo $this->section('content'); ?>
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
            	<a href="/student/create">Tambah</a>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Jenis kelamin</th>
                  <th>Alamat</th>
                  <th>No Telepon</th>
                  <th>Email</th>
                  <th>Bukti Trasnfer</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                	<?php $a=0;
                		foreach ($student as $data) :
                			$a++;
                	 ?>
                <tr>
                  <td><?php echo $a; ?></td>
                  <td><?php echo $data['nama_student']; ?></td>
                  <td><?php echo $data['jk_student']; ?></td>
                  <td><?php echo $data['alamat_student']; ?></td>
                  <td><?php echo $data['no_hp']; ?></td>
                  <td><?php echo $data['email_student']; ?></td>
                  <td><img src="/image/<?php echo $data['bukti_tf']; ?>" width="100"></td>
                  <td>
                  	<a onclick="tolak(<?php echo $data['id_transaksi']; ?>)" data-toggle="modal" class="btn btn-danger">Tolak</a>
					         <a onclick="terima(<?php echo $data['id_transaksi']; ?>)" data-toggle="modal" class="btn btn-success">Terima</a>
					</form>
                   </td>
                </tr>
                <?php endforeach ?>
                </tbody>
               </table>
            </div>
          </div>
        </div>
      </div>
    </section>

         <div class="modal" tabindex="-1" id="confirm"  role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Confirmation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form role="form" action="/student/confirm" method="post">
              <?php echo csrf_field(); ?>
             
                  <input type="hidden" class="form-control" name="id_transaksi" id="id_transaksi">
                  <input type="hidden" class="form-control" name="konfirmasi" id="konfirmasi">
               
                <p>Apakah anda yakin?</p>           
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
  </div>
</div>

<script type="text/javascript">
  function tolak(id_transaksi)
  {
    $('[name="id_transaksi"]').val(id_transaksi);
    $('[name="konfirmasi"]').val("Ditolak");
    $('#confirm').modal('show');
  }
    function terima(id_transaksi)
  {
    $('[name="id_transaksi"]').val(id_transaksi);
    $('[name="konfirmasi"]').val("Diterima");
    $('#confirm').modal('show');
  }
</script>
    


<?php echo $this->endSection(); ?>


