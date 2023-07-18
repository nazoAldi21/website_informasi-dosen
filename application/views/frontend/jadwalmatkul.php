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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js"></script>
    <style>
        .fc-button.fc-state-default {
            background: #2c3e50;
            color: #fff;
            font-size: 1em;
        }
        .fc-state-active {
            box-shadow: none;
            background: #080b0e !important;
        }

        .fc-button.fc-corner-left {
            border-radius: 0.25rem;
        }

        span.fc-time {
            display: none;
        }

        .fc-center h2 {
            color: #054372;
        }

        .fc-list-item-title.fc-widget-content{
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }

        .fc-title p {
            font-size: 14px;
        }

        .fc-unthemed td.fc-today {
            background: #95c1e3;
            color: #505050;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-ct-white" role="navigation-demo">
    <?php $this->load->view('frontend/layout/menu'); ?>
</nav>
<div class="wrapper">
    <div class="demo-header demo-header-image">
            <div class="motto">
                <h1 class="title-uppercase" style="padding-bottom: 3rem">Jadwal Mata Kuliah</h1>
            </div>
    </div>
    <div class="main">
        <div class="section">
         <div class="container tim-container">
          <div class="row">
            <div class="col-md-12">
              <div class="tim-title">
                  <h4>Jadwal Kuliah</h4>
              </div>
              <div id="live-calendar"></div>
            </div>
          </div>
         </div>
        </div>
    </div>
</div>
    <?php $this->load->view('frontend/layout/footer'); ?>
</div>
<div id="calendarModal" class="modal fade">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header" style="padding: 10px;background: #f2994a;color: white">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true" style="font-size: 3rem;">×</span> <span class="sr-only">close</span></button>
            <h5 id="modalTitle" class="modal-title"></h5>
        </div>
        <div id="modalBody" class="modal-body"> 
            <div class="dosen-body" style="padding: 5px 0;">
                <span style="font-weight: 700;"><span id="dosenrender"></span></span>
            </div>
            <div class="ruang-body" id="linkitem" style="padding: 5px 0;">
                
            </div>
            <div class="detail-body" style="padding: 5px 0;">
                <span>Detail:&nbsp;<span id="detailrender"></span></span>
            </div>
            <div class="kelas-body">
                <span>Kelas:&nbsp;<span id="kelasrender"></span></span>
            </div>
        </div>
    </div>
</div>
</div>

<!--    end modal -->
<script type="text/javascript">
   //jquery full calendar codeigniter
    var events = <?php echo json_encode($allEvents) ?>;
    
    var date = new Date()
    var d    = date.getDate(),
        m    = date.getMonth(),
        y    = date.getFullYear()
   // jquery events handaling         
    $('#live-calendar').fullCalendar({
      header    : {
        left  : 'prev,next today',  // filter data
        center: 'title',
        right : 'month,agendaWeek,agendaDay,listMonth'
      },
      initialDate: '2023-01-12',
      editable: true,
      buttonText: {
        today: 'today',  //button Label
        month: 'month',	//button Label
        week : 'week',	//button Label
        day  : 'day',
        listMonth: 'list'	//button Label
      },
      eventRender: function(event, element)
        { 
            element.find('.fc-list-item-title').append("<span>" + event.dosen + "</span>");
        },
      eventClick:  function(event, jsEvent, view) 
        {
            $('#modalTitle').html(event.title);
            $('#dosenrender').html(event.dosen);
            $('#ruanganrender').html(event.ruang); 
            $('#linkitem').html('<a class="foo" href=' + event.ruang + 'target="_blank">' + event.ruang + '</a>');
            $('#detailrender').html(event.detail);
            $('#kelasrender').html(event.kelas);
            $('#calendarModal').modal();
            event.jsEvent.preventDefault();
        },
      events : events
    })
</script>

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
