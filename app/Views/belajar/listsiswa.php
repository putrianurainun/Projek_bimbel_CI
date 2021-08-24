<?php echo $this->extend('laayout/layout'); ?>
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
            
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Jenis Kelamin</th>
                  <th>No Telepon</th>
                  <th>Email</th>
                </tr>
                </thead>
                <tbody>
                	<?php $a=0;
                		foreach ($data as $data) :
                			$a++;
                	 ?>
                <tr>
                  <td><?php echo $a; ?></td>
                  <td ><?php echo $data['nama_student']; ?></td>
                  <td ><?php echo $data['jk_student']; ?></td>
                  <td ><?php echo $data['no_hp']; ?></td>
                  <td ><?php echo $data['email_student']; ?></td>
                  
                </tr>
              <?php endforeach ?>
                </tbody>
               </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

<?php echo $this->endSection(); ?>