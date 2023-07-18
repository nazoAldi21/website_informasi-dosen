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

</head>
<body>
<nav class="navbar navbar-ct-white" role="navigation-demo">
    <?php $this->load->view('frontend/layout/menu'); ?>
</nav>
<div class="wrapper">
    <div class="demo-header demo-header-image">
            <div class="motto">
                <h1 class="title-uppercase" style="padding-bottom: 3rem">Mata Kuliah</h1>
                <h3></h3>
            </div>
    </div>
    <div class="main">
        <div class="section">
         <div class="container tim-container">
          <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-11">
                <div class="tim-title">
                    <h4>Daftar Mata Kuliah</h4>
                </div>
                <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                        <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                            <li class="active"><a href="#terisi" data-toggle="tab">Sistem Informasi</a></li>
                            <li><a href="#kosong" data-toggle="tab">Teknik Informatika</a></li>
                            <li><a href="#kosong" data-toggle="tab">Bisnis Digital</a></li>
                        </ul>
                    </div>
                </div>
                <div id="my-tab-content" class="tab-content text-start">
                    <div class="tab-pane active" id="terisi">
                        <?php 
                        foreach ($get_matkul_front as $result): ?>
                        <div class="col-md-3">
                            <div class="card">
                                <img class="card-img-top" style="width: 100%;" src="<?php echo base_url(); ?>paper-kit-master/assets/paper_img/webinar.png" alt="Card image cap">
                                <div class="card-body">
                                <h5 class="card-title"><?php echo $result['nama_matkul']; ?></h5>
                                <p class="card-text">Dosen: <?php echo $result['nama_lengkap']; ?></p>
                                <p class="card-text"><?php echo $result['sks']; ?> sks</p>
                                <p class="card-text">Semester: <?php echo $result['semester']; ?></p>
                                <a href="#" class="btn btn-primary">Detail</a>
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
<?php $this->load->view('frontend/layout/footer'); ?>
</div>
<!-- Modal -->

<!--    end modal -->


</body>

    <!-- <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>

	<script src="bootstrap3/js/bootstrap.js" type="text/javascript"></script>

	<!--  Plugins -->
	<script src="assets/js/ct-paper-checkbox.js"></script>
	<script src="assets/js/ct-paper-radio.js"></script>
	<script src="assets/js/bootstrap-select.js"></script>
	<script src="assets/js/bootstrap-datepicker.js"></script>

	<script src="assets/js/ct-paper.js"></script> -->

    <script src="<?php echo base_url(); ?>paper-kit-master/assets/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>paper-kit-master/assets/js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>paper-kit-master/bootstrap3/js/bootstrap.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>paper-kit-master/assets/js/ct-paper-checkbox.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>paper-kit-master/assets/js/ct-paper-radio.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>paper-kit-master/assets/js/bootstrap-select.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>paper-kit-master/assets/js/bootstrap-datepicker.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>paper-kit-master/assets/js/ct-paper.js" type="text/javascript"></script>
</html>
