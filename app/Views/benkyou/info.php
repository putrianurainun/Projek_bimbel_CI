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
                    <img src="images/course_6.jpg" alt="Image" class="img-fluid"> 
                </div>
                <div class="col-lg-5 ml-auto align-self-center">
                    <h2 class="section-title-underline mb-5">
                        <span>Anda sudah terdaftar!!!</span>
                    </h2>
                    <p>Silahkan lakukan transaksi ke nomor rekening terter di bawah ini</p>
                    <p>Upload bukti transaksi jika sudah melakukan transfer</p>

                    <ol class="ul-check primary list-unstyled">
                        <?php foreach ($transaksi as $datas) :?>
                        <li>No. Rekening: 5454543</li>
                        <li>Total pembayaran: <?php echo $datas['harga']; ?></li>
                        <li>Kode Transaski: <?php echo $datas['id_transaksi']; ?></li>
                        <li>ID User: <?php echo $datas['id_student']; ?></li>
                    <?php endforeach ?>
                    </ol>
                    <h5 class="section-title-underline mb-5">
                        <span>Harap simpan data di atas untuk melakukan upload bukti transaksi</span>
                    </h5>

                </div>
            </div>

            <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2 mb-4 mb-lg-0">
                        <img src="images/course_3.jpg" alt="Image" class="img-fluid"> 
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