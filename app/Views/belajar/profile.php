<?php echo $this->extend('laayout/layout'); ?>
<?php echo $this->section('content'); ?>
<?php $session = \Config\Services::session(); ?>

  <section class="content-header">
      <h1>
        User Profile
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">User profile</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
 <form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?php echo base_url('belajar/editprofile'); ?>">
      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img id="preview" class="profile-user-img img-responsive img-circle" src="/image/<?php echo $foto; ?>" alt="User profile picture">

              <h3 class="profile-username text-center"><?php echo $nama; ?></h3>

              <p class="text-muted text-center"><?php if ($session->get('role')=="Student"){ ?>
                <?php echo "Student" ?>
              <?php }elseif ($session->get('role')=="Teacher") {
                echo "Teacher";
              } ?></p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Upload Foto Profil</b> 
                </li>
                <li class="list-group-item">
                  <input type="file" name="foto_profile" onchange="tampilkanPreview(this,'preview')">
                </li>
              </ul>
              
              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
             
              <li><a href="#settings" data-toggle="tab">Settings</a></li>
            </ul>
          <div class="tab-content">
          

              <div class="active tab-pane" id="settings">
              
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Name</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" value="<?php echo $nama; ?>" id="inputName" placeholder="Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Username</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="username" value="<?php echo $session->get('username'); ?>" id="inputName" placeholder="Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="password" class="col-sm-2 control-label">Password</label>

                    <div class="col-sm-10">
                      <input type="password" class="form-control" name="password" value="<?php echo $session->get('password'); ?>" id="inputName" placeholder="Name">
                    </div>
                  </div>
                  <?php if ($session->get('role')=="Teacher") { ?>
                   <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" name="email" id="inputEmail" value="<?php echo $email; ?>" placeholder="Email">
                    </div>
                  </div>
                  <?php  } ?>

                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Jenis Kelamin</label>

                    <div class="col-sm-10">
                      <select name="jk" class="form-control">
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                      </select>
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="alamat" class="col-sm-2 control-label">Alamat</label>

                    <div class="col-sm-10">
                      <textarea class="form-control" id="alamat" name="alamat"><?php echo $alamat; ?></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">No Telepon</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="no_hp" id="no_hp" value="<?php echo $no_hp; ?>" placeholder="No Telepon">
                    </div>
                  </div>
                  <input type="hidden" name="foto" value="<?php echo $foto; ?>">
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                  </div>

                
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      </form>

    </section>


     <script>
            function tampilkanPreview(gambar,idpreview){
//                membuat objek gambar
                var gb = gambar.files;
                
//                loop untuk merender gambar
                for (var i = 0; i < gb.length; i++){
//                    bikin variabel
                    var gbPreview = gb[i];
                    var imageType = /image.*/;
                    var preview=document.getElementById(idpreview);            
                    var reader = new FileReader();
                    
                    if (gbPreview.type.match(imageType)) {
//                        jika tipe data sesuai
                        preview.file = gbPreview;
                        reader.onload = (function(element) {
                            return function(e) {
                                element.src = e.target.result;
                            };
                        })(preview);


    //                    membaca data URL gambar
                        reader.readAsDataURL(gbPreview);
                    }else{
//                        jika tipe data tidak sesuai
                        alert("Type file tidak sesuai. Khusus image.");
                    }
                   
                }    
            }
        </script>

    <?php echo $this->endSection(); ?>