
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="http://localhost/BES/bootstrap/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="../BES/bootstrap/css/bootstrap.min.css">

  <script src="../BES/bootstrap/jquery/jquery.min.js"></script>
  <script src="../BES/bootstrap/js/bootstrap.min.js"></script>
  <!-- Modified Bootstrap -->
  <link rel="stylesheet" href="../BES/css/style.css">
  <script src="..//BES/bootstrap/js/M_bootstrap.min.js"></script>
   <!-- Fonts Awesome -->
  <link rel="stylesheet" href="../BES/fa/css/font-awesome.min.css">
  <!-- datepicker -->
  <link rel="stylesheet" href="../BES/add-ons/date-calendar/datepicker.css">
    <!-- datepicker -->
    <link rel="stylesheet" href="../BES/css/header.css">

  <script src="../BES/add-ons/date-calendar/bootstrap-datepicker.js" charset="UTF-8"></script>
  

<script>
	$(document).ready(function(){
		var date_input=$('input[name="date"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker({
			format: 'mm/dd/yyyy',
			container: container,
			todayHighlight: true,
			autoclose: true,
		})
	})
	  jQuery(document).ready(function($) {
 
        $('#myCarousel').carousel({
                interval: 5000
        });
 
        $('#carousel-text').html($('#slide-content-0').html());
 
        //Handles the carousel thumbnails
       $('[id^=carousel-selector-]').click( function(){
            var id = this.id.substr(this.id.lastIndexOf("-") + 1);
            var id = parseInt(id);
            $('#myCarousel').carousel(id);
        });
 
 
        // When the carousel slides, auto update the text
        $('#myCarousel').on('slid.bs.carousel', function (e) {
                 var id = $('.item.active').data('slide-number');
                $('#carousel-text').html($('#slide-content-'+id).html());
        });
});
</script>
    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
