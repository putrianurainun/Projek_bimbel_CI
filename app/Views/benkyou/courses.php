<?php echo $this->extend('layoutt/layout'); ?>
<?php echo $this->section('content'); ?>

<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('<?php echo base_url(); ?>/akademik/images/bg_1.jpg')">
        <div class="container">
          <div class="row align-items-end">
            <div class="col-lg-7">
              <h2 class="mb-0">Courses</h2>
              <p>Dapatkan kursus JLPT terbaik</p>
            </div>
          </div>
        </div>
      </div> 
    
 <div class="modal" tabindex="-1" id="myModal"  role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Isi Registrasi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form role="form" action="/benkyou/registersave" method="post">
              <?php echo csrf_field(); ?>
              <div class="box-body">
                <div class="form-group">
                  <label for="nama_student">Nama</label>
                  <input type="text" class="form-control" name="nama_student" id="nama_student" placeholder="Enter Name">
                </div>
                <div class="form-group">
                  <label for="jk_student">Jenis Kelamin</label>
                  <select class="form" id="jk_student" name="jk_student">                  
                      <option name="jk_student">Laki-laki</option>
                      <option name="jk_student">Perempuan</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="alamat_student">Alamat</label>
                  <input type="text" class="form-control" name="alamat_student" id="alamat_student" placeholder="Enter Alamat">
                </div>
                <div class="form-group">
                  <label for="no_hp">No Telepon</label>
                  <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="Enter No Telepon">
                </div>
                <div class="form-group">
                  <label for="email_student">Email</label>
                  <input type="email" class="form-control" name="email_student" id="email_student" placeholder="Enter Email">
                </div>
                <div class="form-group">
                  <label for="id_paket">ID Paket</label>
                  <input type="text" class="form-control" name="id_paket">
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </form>
      </div>
      
    </div>
  </div>
</div>

    <div class="custom-breadcrumns border-bottom">
      <div class="container">
        <a href="index.html">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Courses</span>
      </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row">
            	<?php foreach ($paket as $data) : ?>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="course-1-item">
                        <figure class="thumnail">
                        <a href="/detail"><img src="/image/book.jpg" alt="Image" class="img-fluid"></a>
                        <div class="price"><?php echo $data['harga']; ?></div>
                        <div class="category"><h3><?php echo $data['paket']; ?></h3></div>  
                        </figure>
                        <div class="course-1-content pb-4">
                        <h2>Let's Study Together</h2>
                        <h2>一緒に勉強しましょう</h2>
                        <p class="desc mb-4"><?php echo $data['level_pelajaran']; ?></p>
                        <p class="desc mb-4">Teacher : <?php echo $data['nama_teacher']; ?></p>
                        <p class="desc mb-4">Schedule : <?php echo date('H:i A', strtotime($data['jadwal_awal'])) ?> &mdash; <?php echo date('H:i A', strtotime($data['jadwal_akhir'])) ?></p>

                        <p><a href="#" onclick="register(<?= $data['id_paket']; ?>)" data-toggle="modal" class="btn btn-primary rounded-0 px-4">Enroll In This Course</a></p>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>

           
                <!-- <div class="col-lg-4 col-md-6 mb-4">
                    <div class="course-1-item">
                        <figure class="thumnail">
                                <a href="course-single.html"><img src="<?php //echo base_url(); ?>/akademik/images/course_2.jpg" alt="Image" class="img-fluid"></a>
                        <div class="price">$99.00</div>
                        <div class="category"><h3>Mobile Application</h3></div>  
                        </figure>
                        <div class="course-1-content pb-4">
                        <h2>How To Create Mobile Apps Using Ionic</h2>
                        <div class="rating text-center mb-3">
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                        </div>
                        <p class="desc mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique accusantium ipsam.</p>
                        <p><a href="course-single.html" class="btn btn-primary rounded-0 px-4">Enroll In This Course</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="course-1-item">
                        <figure class="thumnail">
                                <a href="course-single.html"><img src="<?php //echo base_url(); ?>/akademik/images/course_3.jpg" alt="Image" class="img-fluid"></a>
                        <div class="price">$99.00</div>
                        <div class="category"><h3>Mobile Application</h3></div>  
                        </figure>
                        <div class="course-1-content pb-4">
                        <h2>How To Create Mobile Apps Using Ionic</h2>
                        <div class="rating text-center mb-3">
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                        </div>
                        <p class="desc mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique accusantium ipsam.</p>
                        <p><a href="course-single.html" class="btn btn-primary rounded-0 px-4">Enroll In This Course</a></p>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="course-1-item">
                        <figure class="thumnail">
                                <a href="course-single.html"><img src="<?php //echo base_url(); ?>/akademik/images/course_4.jpg" alt="Image" class="img-fluid"></a>
                        <div class="price">$99.00</div>
                        <div class="category"><h3>Mobile Application</h3></div>  
                        </figure>
                        <div class="course-1-content pb-4">
                        <h2>How To Create Mobile Apps Using Ionic</h2>
                        <div class="rating text-center mb-3">
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                        </div>
                        <p class="desc mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique accusantium ipsam.</p>
                        <p><a href="course-single.html" class="btn btn-primary rounded-0 px-4">Enroll In This Course</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="course-1-item">
                        <figure class="thumnail">
                                <a href="course-single.html"><img src="<?php //echo base_url(); ?>/akademik/images/course_5.jpg" alt="Image" class="img-fluid"></a>
                        <div class="price">$99.00</div>
                        <div class="category"><h3>Mobile Application</h3></div>  
                        </figure>
                        <div class="course-1-content pb-4">
                        <h2>How To Create Mobile Apps Using Ionic</h2>
                        <div class="rating text-center mb-3">
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                        </div>
                        <p class="desc mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique accusantium ipsam.</p>
                        <p><a href="course-single.html" class="btn btn-primary rounded-0 px-4">Enroll In This Course</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="course-1-item">
                        <figure class="thumnail">
                                <a href="course-single.html"><img src="<?php //echo base_url(); ?>/akademik/images/course_6.jpg" alt="Image" class="img-fluid"></a>
                        <div class="price">$99.00</div>
                        <div class="category"><h3>Mobile Application</h3></div>  
                        </figure>
                        <div class="course-1-content pb-4">
                        <h2>How To Create Mobile Apps Using Ionic</h2>
                        <div class="rating text-center mb-3">
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                        </div>
                        <p class="desc mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique accusantium ipsam.</p>
                        <p><a href="course-single.html" class="btn btn-primary rounded-0 px-4">Enroll In This Course</a></p>
                        </div>
                    </div>
                </div> -->

            </div>
        </div>
    </div>
<script>

    function register(id)
    {
        $('[name="id_paket"]').val(id);
        $('#myModal').modal('show');
    }
</script>
<?php echo $this->endSection(); ?>