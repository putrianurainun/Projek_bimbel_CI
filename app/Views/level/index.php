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
            	<a href="/level/create">Tambah</a>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Level</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                	<?php $a=0;
                		foreach ($level as $data) :
                			$a++;
                	 ?>
                <tr>
                  <td><?php echo $a; ?></td>
                  <td><?php echo $data['level_pelajaran']; ?></td>
                  <td>
                  	<a href="level/edit/<?php echo $data['id_level'] ?>" class="btn btn-warning">Edit</a>
					<form action="/level/delete/ <?php 	echo $data['id_level'] ?>" method='post' class='id-inline'>	
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
 <!--  <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
              	<form action="/level/save" method="post">
             		<?php //echo csrf_field(); ?>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Add Data</h4>
              </div>
              <div class="modal-body">
                <p><input type="text" name="nama_jenis"></p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
          </form>
            </div>
          </div>
        </div> -->


<?php echo $this->endSection(); ?>




		



<!-- 
<h1><?php //echo $title; ?></h1>
<a href="/level/create" >Tambah</a>
<table border="1">
	<tr>
		<th>No</th>
		<td>Level</td>
		<td>Aksi</td>
	</tr>
	<?php //$a=0; 
		//foreach ($level as $data) :
		//$a++;
	?>
	<tr>
		<th><?php //echo $a; ?></th>
		<td><?php //echo $data['level'] ?></td>
		<td><a href="">Edit</a></td>
	</tr>
	<?php //endforeach; ?>
</table> -->

