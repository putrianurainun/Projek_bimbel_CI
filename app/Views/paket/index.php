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
              <a href="/paket/create">Tambah</a>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Paket</th>
                  <th>Level</th>
                  <th>Tutor</th>
                  <th>Harga</th>
                  <th>Jadwal</th>
                  <th>Link Pertemuan</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php $a=0;
                    foreach ($paket as $data) :
                      $a++;
                   ?>
                <tr>
                  <td><?php echo $a; ?></td>
                  <td><?php echo $data['paket'] ?></td>
                  <td><?php echo $data['level_pelajaran']; ?></td>
                  <td><?php echo $data['nama_teacher'] ?></td>
                  <td><?php echo $data['harga']; ?></td>
                  <td><?php echo date('H:i A', strtotime($data['jadwal_awal'])) ?>  -  <?php echo date('H:i A', strtotime($data['jadwal_akhir']))  ?></td>
                  <td><?php echo $data['link']; ?></td>
                  <td>
                    <a href="paket/edit/<?php echo $data['id_paket'] ?>" class="btn btn-warning">Edit</a>
                    <form action="/paket/delete/ <?php  echo $data['id_paket'] ?>" method='post' class='id-inline'> 
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin?')">Delete</button>
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
  </div>
<?php echo $this->endSection(); ?>




    





