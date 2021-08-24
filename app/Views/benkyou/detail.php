<?php echo $this->extend('layoutt/layout'); ?>
<?php echo $this->section('content'); ?>

<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('<?php echo base_url(); ?>/akademik/images/bg_1.jpg')">
        <div class="container">
          <div class="row align-items-end">
            <div class="col-lg-7">
              <h2 class="mb-0">Dapatkan cara belajar JLPT dengan menarik</h2>
              <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p> -->
            </div>
          </div>
        </div>
      </div> 
    

    <div class="custom-breadcrumns border-bottom">
      <div class="container">
        <a href="index.html">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <a href="courses.html">Courses</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Courses</span>
      </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-4">
                    <p>
                        <img src="<?php echo base_url(); ?>/akademik/images/course_5.jpg" alt="Image" class="img-fluid">
                    </p>
                </div>
                
                <div class="col-lg-5 ml-auto align-self-center">
                        <h2 class="section-title-underline mb-5">
                            <span>Course Details</span>
                        </h2>
                     <?php foreach ($teacher as $data):?>
                        <p><strong class="text-black d-block" >Teacher:</strong><?php echo $data['nama_teacher']; ?></p>
                    <?php endforeach; ?>
                    <?php foreach ($paket as $datas):?>
                        <p class="mb-5"><strong class="text-black d-block">Hours:</strong><?php echo date('H:i A', strtotime($datas['jadwal_awal'])) ?> &mdash; <?php echo date('H:i A', strtotime($datas['jadwal_akhir'])) ?></p>
                    <?php endforeach; ?>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At itaque dolore libero corrupti! Itaque, delectus?</p>
                        <p>Modi sit dolor repellat esse! Sed necessitatibus itaque libero odit placeat nesciunt, voluptatum totam facere.</p>
    
                        <ul class="ul-check primary list-unstyled mb-5">
                            <li>Lorem ipsum dolor sit amet consectetur</li>
                            <li>consectetur adipisicing  </li>
                            <li>Sit dolor repellat esse</li>
                            <li>Necessitatibus</li>
                            <li>Sed necessitatibus itaque </li>
                        </ul>
                       </p>
                            <a href="#" class="btn btn-primary rounded-0 btn-lg px-5">Enroll</a>
                        </p>
    
                    </div>
            </div>
        
        </div>
    </div>

<?php echo $this->endSection(); ?>