<?php echo $this->extend('layoutt/layout'); ?>
<?php echo $this->section('content'); ?>

<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('<?php echo base_url(); ?>/akademik/images/bg_1.jpg')">
        <div class="container">
          <div class="row align-items-end">
            <div class="col-lg-7">
              <h2 class="mb-0">Admissions</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
            </div>
          </div>
        </div>
      </div> 
    

    <div class="custom-breadcrumns border-bottom">
      <div class="container">
        <a href="index.html">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Admission</span>
      </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-6 mb-lg-0 mb-4">
                    <img src="<?php echo base_url(); ?>/akademik/images/course_6.jpg" alt="Image" class="img-fluid"> 
                </div>
                <div class="col-lg-5 ml-auto align-self-center">
                    <?php foreach ($paket as $data) : ?>
                    <h2 class="section-title-underline mb-5">
                        <span><?php echo $data['paket']; ?></span>
                    </h2>
                    <?php endforeach ?>
                    <?php foreach ($materi as $datas) : ?>
                    <a href="/image/<?php echo $datas['materi']; ?>">View Materi</a>
                    <p><a href="<?php //echo base_url(); ?>/image"></a></p>
                    <p>Modi sit dolor repellat esse! Sed necessitatibus itaque libero odit placeat nesciunt, voluptatum totam facere.</p>
                    <?php endforeach ?>

                    <ol class="ul-check primary list-unstyled">
                        <li>Accomplished Application Form</li>
                        <li>High School Report Card </li>
                        <li>High School Transcript</li>
                        <li>Certificate of Good Moral Characte</li>
                        <li>2×2 picture</li>
                        <li>1×1 picture</li>
                    </ol>


                </div>
            </div>

            <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2 mb-4 mb-lg-0">
                        <img src="<?php echo base_url(); ?>/akademik/images/course_3.jpg" alt="Image" class="img-fluid"> 
                    </div>
                    <div class="col-lg-5 mr-auto align-self-center order-2 order-lg-1">
                        <h2 class="section-title-underline mb-5">
                            <span>Transferees</span>
                        </h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At itaque dolore libero corrupti! Itaque, delectus?</p>
                        <p>Modi sit dolor repellat esse! Sed necessitatibus itaque libero odit placeat nesciunt, voluptatum totam facere.</p>
                        <ol class="ul-check primary list-unstyled">
                                <li>Accomplished Application Form</li>
                                <li>High School Report Card </li>
                                <li>High School Transcript</li>
                                <li>Certificate of Good Moral Characte</li>
                                <li>2×2 picture</li>
                                <li>1×1 picture</li>
                            </ol>
                    </div>
                </div>
        </div>
    </div>

<?php echo $this->endSection(); ?>