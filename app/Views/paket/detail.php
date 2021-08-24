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
            <!-- <a href="/paket/create">Tambah</a> -->
              <h5 class="card-title"><?php echo $level['level_pelajaran']; ?></h5>
              <p class="card-text"><b>Harga:</b> <?php echo $paket['harga']; ?></p>
           <!--    <p class="card-text"><small class="text-muted"><b>Penerbit: </b><?php echo $komik['penerbit']; ?></small></p> -->
                       
                    <?php foreach ($level as $data) : ?>
                      <p class="card-text"><b>Level:</b> <?php echo $data['level_pelajaran']; ?></p>
                      <?php endforeach ?>
                
            
            <br><br>
            <a href="/paket">Kembali ke daftar paket</a>


            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
<?php echo $this->endSection(); ?>




		
