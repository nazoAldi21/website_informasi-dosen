<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/paper_img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Paper Kit by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- <link href="bootstrap3/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/ct-paper.css" rel="stylesheet"/>
    <link href="assets/css/demo.css" rel="stylesheet" /> -->
    <link href="<?php echo base_url(); ?>paper-kit-master/bootstrap3/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>paper-kit-master/assets/css/ct-paper.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>paper-kit-master/assets/css/demo.css" rel="stylesheet" type="text/css" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <style>
      swiper-container {
      width: 100%;
      height: 100%;
    }

    swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .slick-prev:before, .slick-next:before {
      font-size: 40px;
      color: #f3a35c;
    }


    .slick-slide {
      width: 285px;
    }
    
    </style>
</head>
<body>

<nav class="navbar navbar-ct-white" style="margin-bottom: 0;" role="navigation-demo">
    <?php $this->load->view('frontend/layout/menu'); ?>
</nav>

<div class="wrapper">
  <swiper-container class="mySwiper" pagination="true" pagination-type="progressbar" navigation="true">
    <swiper-slide><img src="<?php echo base_url(); ?>paper-kit-master/assets/paper_img/Group 36 (4).png"></swiper-slide>
    <swiper-slide><img src="<?php echo base_url(); ?>paper-kit-master/assets/paper_img/Group 36 (2).png"></swiper-slide>
  </swiper-container>

    <div class="main">
        <div class="section">
         <div class="container tim-container">
          <div class="row">
            <!-- <div class="col-md-3">
                <div class="tim-title">
                  <h4>Information</h4>
                </div>
                <div class="card information-card">
                  <img class="card-img-top" src="<?php echo base_url(); ?>paper-kit-master/assets/paper_img/Vector.png" 
                  alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Ruangan Kosong</h5>
                    <h5 class="card-title t-orange">Ruangan</h5>
                    <h5 class="card-title"><?php echo $get_count; ?></h5>
                </div>
              </div>
            </div> -->
            <div class="col-md-12">
                <div class="nav-tabs-navigation" style="display: flex;flex-direction: row;justify-content: space-between;">
                    <div class="nav-tabs-wrapper"style="margin-bottom: 0;">
                        <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                            <li class="active"><a href="#penbaru" data-toggle="tab">Penelitian Terbaru</a></li>
                        </ul>
                    </div>
                    <div>
                      <a href="<?php echo base_url('home/penelitian');?>" class="btn btn-primary">Lihat Semua</a>
                    </div>
                </div>
                <div id="my-tab-content" class="tab-content text-start">
                    <div class="tab-pane active penelitian" id="penbaru">
                        <?php 
                        foreach ($penbaru as $result1): ?>
                        <div class="col-md-3" style="margin-bottom: 2rem;">
                            <div class="card">
                                <a href="<?php echo base_url('home/detail_penelitian/'.$result1['id_penelitian']); ?>">
                                  <img class="card-img-top" style="width: 100%;" src="<?php echo base_url(); ?>paper-kit-master/assets/paper_img/webinar.png" alt="Card image cap">
                                </a>
                                <div class="card-body">
                                <h5 class="card-title">
                                    <a href="<?php echo base_url('home/detail_penelitian/'.$result1['id_penelitian']); ?>"><?php echo $result1['nama_penelitian']; ?></a>
                                </h5>
                                  <p class="card-text">Dosen: <?php echo $result1['nama_lengkap']; ?></p>
                                  <p class="card-text"><?php echo $result1['tahun']; ?></p>
                                  <a href="<?php echo base_url('home/detail_penelitian/'.$result1['id_penelitian']); ?>" class="btn btn-primary">Detail</a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach?>
                    </div>
                </div>
            </div>
          </div>
         </div>
        </div>
    </div>

    <div class="section">
    <div class="section">
         <div class="container tim-container">
          <div class="row">
            <div class="col-md-12">
                <div class="nav-tabs-navigation" style="display: flex;flex-direction: row;justify-content: space-between;">
                    <div class="nav-tabs-wrapper"style="margin-bottom: 0;">
                        <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                            <li class="active"><a href="#reguler" data-toggle="tab">Kelas Reguler</a></li>
                            <li><a href="#sore" data-toggle="tab">Kelas Sore</a></li>
                            <li><a href="#weekend" data-toggle="tab">Kelas Weekend</a></li>
                        </ul>
                    </div>
                    <div>
                      <a href="<?php echo base_url('home/jadwalmatkul');?>" class="btn btn-primary">Lihat Semua</a>
                    </div>
                </div>
                <div id="my-tab-content" class="tab-content text-start">
                    <div class="tab-pane active reguler" id="reguler">
                    <?php
                    foreach ($get_reguler as $result): ?>
                    <div class="col-md-6">
                      <div class="card">
                          <!-- <img class="card-img-top" style="width: 100%;" src="<?php echo base_url(); ?>paper-kit-master/assets/paper_img/webinar.png" alt="Card image cap"> -->
                          <div class="card-body">
                          <h5 class="card-title"><span>Mata Kuliah&nbsp;:&nbsp;</span><?php echo $result['title']; ?></h5>
                          <p class="card-text"><span>Dosen&nbsp;:&nbsp;</span><?php echo $result['dosen']; ?></p>
                          <p class="card-text"><span>Ruang&nbsp;:&nbsp;</span><a href="<?php echo $result['ruang']; ?>"><?php echo $result['ruang']; ?></a></p>
                          <p class="card-text"><span>Kelas&nbsp;:&nbsp;</span><?php echo $result['kelas']; ?>
                            <?php echo $result['tahun']; ?>
                          </p>
                          <p class="card-text"><span>Prodi&nbsp;:&nbsp;</span><?php echo $result['prodi']; ?></p>
                          <p class="card-text" style="background: #F2994A;color: white;padding: 5px 10px;right: 0;"><?php echo $result['to_events_date']; ?></p>
                          </div>
                      </div>
                    </div>
                    <?php endforeach?>
                    </div>
                    <div class="tab-pane sore" id="sore">
                      <?php
                      foreach ($get_sore as $result): ?>
                        <div class="col-md-6">
                          <div class="card">
                              <!-- <img class="card-img-top" style="width: 100%;" src="<?php echo base_url(); ?>paper-kit-master/assets/paper_img/webinar.png" alt="Card image cap"> -->
                              <div class="card-body">
                              <h5 class="card-title"><span>Mata Kuliah&nbsp;:&nbsp;</span><?php echo $result['title']; ?></h5>
                              <p class="card-text"><span>Dosen&nbsp;:&nbsp;</span><?php echo $result['dosen']; ?></p>
                              <p class="card-text"><span>Ruang&nbsp;:&nbsp;</span><?php echo $result['ruang']; ?></p>
                              <p class="card-text"><span>Kelas&nbsp;:&nbsp;</span><?php echo $result['kelas']; ?>
                                <?php echo $result['tahun']; ?>
                              </p>
                              <p class="card-text"><span>Prodi&nbsp;:&nbsp;</span><?php echo $result['prodi']; ?></p>
                              <p class="card-text" style="background: #F2994A;color: white;padding: 5px 10px;position: absolute; bottom: 2rem;right: 0;"><?php echo $result['to_events_date']; ?></p>
                              </div>
                          </div>
                        </div>
                      <?php endforeach?>
                    </div>
                    <div class="tab-pane weekend" id="weekend">
                      <?php
                      foreach ($get_weekend as $result): ?>
                        <div class="col-md-6">
                          <div class="card">
                              <!-- <img class="card-img-top" style="width: 100%;" src="<?php echo base_url(); ?>paper-kit-master/assets/paper_img/webinar.png" alt="Card image cap"> -->
                              <div class="card-body">
                              <h5 class="card-title"><span>Mata Kuliah&nbsp;:&nbsp;</span><?php echo $result['title']; ?></h5>
                              <p class="card-text"><span>Dosen&nbsp;:&nbsp;</span><?php echo $result['dosen']; ?></p>
                              <p class="card-text"><span>Ruang&nbsp;:&nbsp;</span><?php echo $result['ruang']; ?></p>
                              <p class="card-text"><span>Kelas&nbsp;:&nbsp;</span><?php echo $result['kelas']; ?>
                                <?php echo $result['tahun']; ?>
                              </p>
                              <p class="card-text"><span>Prodi&nbsp;:&nbsp;</span><?php echo $result['prodi']; ?></p>
                              <p class="card-text" style="background: #F2994A;color: white;padding: 5px 10px;position: absolute; bottom: 2rem;right: 0;"><?php echo $result['to_events_date']; ?></p>
                              </div>
                          </div>
                        </div>
                      <?php endforeach?>
                    </div>
                </div>
            </div>
          </div>
         </div>
        </div>
    </div>
</div>
    <!-- </div> -->
    <?php $this->load->view('frontend/layout/footer'); ?>
</div>
<!-- Modal -->


<!--    end modal -->


</body>

    <!-- <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>

	<script src="bootstrap3/js/bootstrap.js" type="text/javascript"></script>

	<!--  Plugins -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <!-- Slick JS -->    
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!-- Our Script -->
    <script>
      jQuery(document).ready(function($){
        $('.reguler').slick({
          infinite: false,
          speed: 300,
          slidesToShow: 2,
          slidesToScroll: 4,
          variableWidth: true
        });
        $('.sore').slick({
          infinite: false,
          speed: 300,
          slidesToShow: 2,
          slidesToScroll: 4,
          variableWidth: true
        });
        $('.weekend').slick({
          infinite: false,
          speed: 300,
          slidesToShow: 2,
          slidesToScroll: 4,
          variableWidth: true
        });
      });
      jQuery(document).ready(function($){
        $('.penelitian').slick({
          infinite: false,
          speed: 300,
          slidesToShow: 4,
          slidesToScroll: 4,
          variableWidth: true
        });
        $('.penelitian1').slick({
          infinite: false,
          speed: 300,
          slidesToShow: 4,
          slidesToScroll: 4,
          variableWidth: true
        });
        // $(".slick-track").css("max-width", $(window).width());
      });
    </script>
	<script src="assets/js/ct-paper-checkbox.js"></script>
	<script src="assets/js/ct-paper-radio.js"></script>
	<script src="assets/js/bootstrap-select.js"></script>
	<script src="assets/js/bootstrap-datepicker.js"></script>

	<script src="assets/js/ct-paper.js"></script>

    <script src="<?php echo base_url(); ?>paper-kit-master/assets/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>paper-kit-master/assets/js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>paper-kit-master/bootstrap3/js/bootstrap.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>paper-kit-master/assets/js/ct-paper-checkbox.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>paper-kit-master/assets/js/ct-paper-radio.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>paper-kit-master/assets/js/bootstrap-select.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>paper-kit-master/assets/js/bootstrap-datepicker.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>paper-kit-master/assets/js/ct-paper.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
</html>
