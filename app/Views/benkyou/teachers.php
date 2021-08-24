<?php echo $this->extend('layoutt/layout'); ?>
<?php echo $this->section('content'); ?>

<?php echo "hhh"; ?>

<div class="site-section">
      <div class="container">
        <div class="row mb-5 justify-content-center text-center">
          <div class="col-lg-4 mb-5">
            <h2 class="section-title-underline mb-5">
              <span>Our Teachers</span>
            </h2>
          </div>
        </div>
        <div class="row">
        	<?php foreach ($teacher as $data) : ?>
          <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">         	
            <div class="feature-1 border person text-center">  	
                <img src="/image/<?php echo $data['foto_teacher']; ?>"" alt="Image" class="img-fluid">
              <div class="feature-1-content">
                <h2><?php echo $data['nama_teacher'] ?></h2>
                <span class="position mb-3 d-block">JLPT's Teacher</span>    
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit morbi hendrerit elit</p>
              </div>
            </div>
           
          </div>
           <?php endforeach ?>
      </div>

          <!-- <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
            <div class="feature-1 border person text-center">
                <img src="images/person_2.jpg" alt="Image" class="img-fluid">
              <div class="feature-1-content">
                <h2>Taylor Simpson</h2>
                <span class="position mb-3 d-block">Math Teacher</span>    
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit morbi hendrerit elit</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
            <div class="feature-1 border person text-center">
                <img src="images/person_3.jpg" alt="Image" class="img-fluid">
              <div class="feature-1-content">
                <h2>Jonas Tabble</h2>
                <span class="position mb-3 d-block">Math Teacher</span>    
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit morbi hendrerit elit</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">

            <div class="feature-1 border person text-center">
                <img src="images/person_4.jpg" alt="Image" class="img-fluid">
              <div class="feature-1-content">
                <h2>Craig Daniel</h2>
                <span class="position mb-3 d-block">Math Teacher</span>    
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit morbi hendrerit elit</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
            <div class="feature-1 border person text-center">
                <img src="images/person_2.jpg" alt="Image" class="img-fluid">
              <div class="feature-1-content">
                <h2>Taylor Simpson</h2>
                <span class="position mb-3 d-block">Math Teacher</span>    
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit morbi hendrerit elit</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
            <div class="feature-1 border person text-center">
                <img src="images/person_3.jpg" alt="Image" class="img-fluid">
              <div class="feature-1-content">
                <h2>Jonas Tabble</h2>
                <span class="position mb-3 d-block">Math Teacher</span>    
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit morbi hendrerit elit</p>
              </div>
            </div>
          </div> -->
        </div>
      </div>
  </div>

<?php echo $this->endSection(); ?>