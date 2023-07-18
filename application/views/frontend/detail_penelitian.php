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
            <?php foreach ($get_data_peneliti as $result): ?>
                <h1 class="title-uppercase" style="padding-bottom: 3rem"><?php echo $result['nama_penelitian']; ?></h1>
                <h3></h3>
            </div>
    </div>
    <div class="main">
        <div class="section">
         <div class="container tim-container">
          <div class="row">
            <div class="col-md-9">
                <div class="back">
                    <a href="<?php echo base_url('auth/index');?>">Home&nbsp;></a>
                    <a href="<?php echo base_url('home/penelitian');?>">Penelitian&nbsp;></a>
                    <a style="color: #000;"><?php echo $result['nama_penelitian']; ?></a>
                </div>
                <div class="artikel">
                    <div class="title-article">
                        <h4><?php echo $result['nama_penelitian']; ?></h4>
                    </div>
                    <div class="body-article">
                        <div class="author">
                            <h6><?php echo $result['nama_lengkap']; ?></h6>
                            <h7>Publish Year:&nbsp;<?php echo $result['tahun'];?></h6>
                        </div>
                        <article class="deskripsi-article">
                            <img src="<?php echo base_url(); ?>paper-kit-master/assets/paper_img/Dribbble shot HD - 1.png">
                            <p><?php echo $result['deskripsi']; ?></p>
                        </article>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="latest-peniliti">
                    <h5>Latest</h5>
                </div>
            </div>
          </div>
         </div>
        </div>
    </div>
</div> <!-- end main -->
<?php endforeach?>

</div> <!-- end wrapper -->
<?php $this->load->view('frontend/layout/footer'); ?>
</div>

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
