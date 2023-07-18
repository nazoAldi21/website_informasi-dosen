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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>
<body>
<nav class="navbar navbar-ct-white" role="navigation-demo">
    <?php $this->load->view('frontend/layout/menu'); ?>
</nav>
<div class="wrapper">
    <div class="demo-header demo-header-image">
            <div class="motto">
                <h1 class="title-uppercase" style="padding-bottom: 3rem">Penelitian</h1>
                <h3></h3>
            </div>
    </div>
    <div id="tableYUK"></div>
    <div class="main">
        <div class="section">
         <div class="container tim-container">
          <div class="row">
            <div class="col-md-12" style="display: flex;flex-direction: row;justify-content: space-between;">
                <div class="tim-title">
                    <h4>Daftar Penelitian</h4>
                </div>
                <form action="" method="get" style="flex-direction: row; align-items:center">
                    <div class="input-group">
                        <input type="text" class="form-control" name="keyword" style="width: 360px;" placeholder="Search Title and Dosen.." value="<?= html_escape($keyword) ?>" required maxlength="32" />
                        <div class="input-group-btn">
                            <div class="btn-group" role="group">
                                <button type="submit" class="btn btn-primary" value="Cari"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
                <?php if ($search_result) : ?>
                    <div class="col-md-12">
                        <div class="search-result">
                            <hr>
                            <?php foreach ($search_result as $article) : ?>
                                <div class="col-md-3" style="margin-bottom: 2rem;">
                                    <div class="card">
                                    <a href="<?= site_url('home/detail_penelitian/'.$article->id_penelitian) ?>">
                                        <img class="card-img-top" style="width: 100%;" src="<?= site_url(); ?>paper-kit-master/assets/paper_img/webinar.png" alt="Card image cap">
                                        </a>
                                        <div class="card-body">
                                        <h5 class="card-title">
                                            <a href="<?= site_url('home/detail_penelitian/'.$article->id_penelitian); ?>"><?= html_escape($article->nama_penelitian) ?></a>
                                        </h5>
                                        <p class="card-text">Dosen: <?= html_escape($article->nama_lengkap) ?></p>
                                        <p class="card-text"><?= html_escape($article->tahun) ?></p>
                                        <a href="<?= site_url('home/detail_penelitian/'.$article->id_penelitian); ?>" class="btn btn-primary">Detail</a>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                <?php else : ?>
                    <?php if ($keyword) : ?>
                        <div style="height: 400px;">
                            <p>Tidak ada yang ditemukan</p>
                            <p>Coba dengan kata kunci yang lain</p>
                        </div>
                    <?php endif ?>
                <div class="col-md-12">
                    <hr>
                        <div id="penelitianload">
                        </div> 
                    </div>
                    <div class="row">
                        <div class="container" style="text-align: center">
                            <button class="btn btn-primary" id="load_more" data-val = "0" >Penelitian Lainnya </button>
                        </div>
                    </div>
                <?php endif ?>
            </div>
          </div>
         </div>
        </div>
    </div>
</div> <!-- end main -->

</div> <!-- end wrapper -->
<?php $this->load->view('frontend/layout/footer'); ?>
</div>

<!--    end modal -->

</body>

    <!-- <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>

	<script src="bootstrap3/js/bootstrap.js" type="text/javascript"></script>

	<!--  Plugins -->
    <script>
        $(document).ready(function(){
            penelitian(0);

            $("#load_more").click(function(e){
                e.preventDefault();
                var page = $(this).data('val');
                penelitian(page);

            });
            //video_baru();
        });

        var url = 'http://localhost/siakad/'

        var penelitian = function(page){
            $("#loader").show();
            $("#load_more").show();
            $.ajax({
                url:  url+"home/loadmorepenelitian",
                type:'GET',
                data: {page:page}
            }).done(function(response){
                $("#penelitianload").append(response);
                $("#loader").hide();
                $('#load_more').data('val', ($('#load_more').data('val')+1));
                //scroll();
                if(response == ""){
                    $("#load_more").hide();
                }
            });

        };
    </script>
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
