<!DOCTYPE HTML>
<html>
<head>
<!-- Add jQuery library -->
	<script src="../lib/jquery-2.1.4.min.js"></script>

	<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="../lib/jquery.mousewheel-3.0.6.pack.js"></script>

	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="../source/jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="../source/jquery.fancybox.css?v=2.1.5" media="screen" />

	<!-- Add Button helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="../source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
	<script type="text/javascript" src="../source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>

	<!-- Add Thumbnail helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="../source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
	<script type="text/javascript" src="../source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

	<!-- Add Media helper (this is optional) -->
	<script type="text/javascript" src="../source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">



<link rel="apple-touch-icon" sizes="57x57" href="../Favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="../Favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="../Favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="../Favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="../Favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="../Favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="../Favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="../Favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="../Favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="../Favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="../Favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="../Favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="../Favicon/favicon-16x16.png">
<link rel="manifest" href="../Favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
	
	
	<link rel="stylesheet" href="../css/html5-reset.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="../lib/bootstrap-3.3.5-dist/css/bootstrap.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="../lib/bootstrap-3.3.5-dist/css/bootstrap-theme.min.css">
	<!-- Latest compiled and minified JavaScript -->
	<script src="../lib/bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
<meta charset="UTF-8">
	<!-- CSS files -->
	<!--<link rel="stylesheet" href="./libs/boostrap/css/bootstrap.min.css"> -->
	<!-- SCRITP files -->
	<script id="chrome_vk_anim" src="../lib/anim.js" async="true"></script>
	<link rel="stylesheet" type="text/css" href="../noformejums.css" />



	<script src="../lib/jquery.validate.js"></script>

		<script type="text/javascript">
		


 $(document).ready(function(){
    $("#registerHere").validate({
    rules:{
    name:"required",
    Username:"required",
    email:{required:true,email: true},
    password:{required:true,minlength: 6},
    cpassword:{required:true,equalTo: "#password"}
    },

    messages:{
    name:"Ievadiet savu vārdu!",
    Username:"Ievadiet Lietotājvārdu!",
    email:{
        required:"Ievadiet savu e-pasta adresi!",
        email:"Ievadiet korektu e-pasta adresi!"},
    password:{
        required:"Ievadiet savu paroli!",
        minlength:"Parolei jāsastāv vismaz no 6 rakstzīmēm!"},
    cpassword:{
        required:"Atkārtoti ievadiet paroli",
        equalTo:"Atkārtoti ievadītā parole nesakrīt ar iepriekš ievadīto!"}
    },

    errorClass: "help-inline",
    errorElement: "span",
    highlight:function(element, errorClass, validClass) {
        $(element).parents('.control-group').addClass('error');
    },
    unhighlight: function(element, errorClass, validClass) {
        $(element).parents('.control-group').removeClass('error');
        $(element).parents('.control-group').addClass('success');
    }
    });
    });
    </script>
    <!-- Validacijas beigas -->
    <style>
    #map_wrapper {
      height: 400px;
    }

    #map_canvas {
      width: 100%;
      height: 100%;
    }
  </style>
  <script src="https://maps.googleapis.com/maps/api/js"></script>
  <script>
    jQuery(function($) { 
      var script = document.createElement('script');
      script.src = "http://maps.googleapis.com/maps/api/js?sensor=false&callback=initialize";
      document.body.appendChild(script);
    });

    function initialize() {
      var map;
      var bounds = new google.maps.LatLngBounds();
      var mapOptions = {
          mapTypeId: 'roadmap'
      };
                    
      //Attelo karti majas lapaa
      map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
      map.setTilt(45);
        
      // Atziimes uz kartes
      var markers = [
        ['Mana', 50.907119,24.103601],
      ];
                        
      // Informacijas logu saturs
      var infoWindowContent = [
        ['<div class="info_content">' +
        '<h5>SIA "Moller Auto Rīga"</h5>' +
        '<p>Sergeja Eizenšteina iela 6A</p>' + '</div>'],
        ['<div class="info_content">' +
        '<h5>SIA "Moller Auto Latvia"</h5>' +
        '<p>Kalnciema iela 170A</p>' +
        '</div>']
        ];
        
      // Attelo ieziimes majas lapaa
      var infoWindow = new google.maps.InfoWindow(), marker, i;
      
      for( i = 0; i < markers.length; i++ ) {
        var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
        bounds.extend(position);
        marker = new google.maps.Marker({
            position: position,
            map: map,
            title: markers[i][0]
        });
        
        // Atlauj atziimeem pievienot info logus    
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                infoWindow.setContent(infoWindowContent[i][0]);
                infoWindow.open(map, marker);
            }
        })(marker, i));

        // Automaatiski centree karti taa, lai taja ietilptu visas atziimes
        map.fitBounds(bounds);
      }

      var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
        this.setZoom(11);
        google.maps.event.removeListener(boundsListener);
      });
    }
  

		$(document).ready(function() {
			$('.fancybox-thumbs').fancybox({
				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,
				arrows    : false,
				nextClick : true,

				helpers : {
					thumbs : {
						width  : 50,
						height : 50
					}
				}
			});

			$(document).ready(function() {
	$(".various").fancybox({
		maxWidth	: 800,
		maxHeight	: 600,
		fitToView	: false,
		width		: '70%',
		height		: '70%',
		autoSize	: false,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none'
	});
});

			$("#fancybox-manual-a").click(function() {
				$.fancybox.open('1_b.jpg');
			});

			$("#fancybox-manual-b").click(function() {
				$.fancybox.open({
					href : 'iframe.html',
					type : 'iframe',
					padding : 5
				});
			});

			$("#fancybox-manual-c").click(function() {
				$.fancybox.open([
					{
						href : '1_b.jpg',
						title : 'My title'
					}, {
						href : '2_b.jpg',
						title : '2nd title'
					}, {
						href : '3_b.jpg'
					}
				], {
					helpers : {
						thumbs : {
							width: 75,
							height: 50
						}
					}
				});
			});


		});


	</script>
	<style>
   .shadowtext {
    text-shadow: 1px 1px 2px black, 0 0 1em blue; /* Параметры тени */
    color: white; /* Белый цвет текста */
    font-size: 2em; /* Размер надписи */
   }

     .shadowtext {
    text-shadow: 1px 1px 2px black, 0 0 1em blue; /* Параметры тени */
    color: white; /* Белый цвет текста */
    font-size: 2em; /* Размер надписи */
   }
  </style>
	 <title>Kontakti</title>
</head>
<body>
  
  <!--matrix dizains-->
  <div id="orbitum_background" class="matrix" style="
    margin: 0;    padding: 0;    left: 0;    top: 0;    right: 0;    bottom: 0;    max-width: 100%;    max-height: 100%;    background-position: 50% 50%;    background-size: auto;    position: fixed;    scroll-behavior: smooth;    
    /* z-index: -2; */    -webkit-transition: all 0.5s ease;    transition: all 0.5s ease;
    "><canvas id="q" width="1280" height="1024"></canvas></div>
  <!--matrix dizains beidzas-->




<section class="container-fluid" style="
    position: relative;
">
<header class="row">
<div class="col-md-12"></div>
<center>

<img class="logo" src="../Images/logo.jpg" onclick="window.location.href='index.html'" onmouseover="" style="cursor: pointer; width:250px;height:100px;" margin:="" auto="">
</center>
  </header>
    
 


<div class="row">
  <div class = "col-md-12">
    	<?php
include("../lib/class_lib.php");
	$kopa = new kalkulators();
	$kopa->rezultats();
?>
            </div>
        </nav>
      </div>
    </div> 


  
<div style="
width:10px;height:10px">
</div>
<section class="row">
      <aside class="col-md-2" style="opacity: 0.1;">

        
        
      



        <h1 class="hide">Reklāmas</h1>
      <!--liec komentaru reklamu šeit <p style="background-color:black;"></p> -->
    </aside>

<main class="col-md-8" style="
    background: url(&quot;http://themetest.orbitum.com/themes/1715/1714524/full-dark.png&quot;) !important;
url(" http:="" themetest.orbitum.com="" themes="" 1715="" 1714524="" full-dark.png")="" !important;"="">
<div id="burning" > 
<h1 class="shadowtext" style= "font-size:34px; text-align:center">Informācija</h1>
</div>
<section>
	<table style="text-align:left" >
			  	<tr>  
			 			<td ><font size="6"style ="color:#79AE79">Dati</font></td>
			 	</tr> 

			 	<tr> 
			 			<td >E-pasts:</td>
			 			<td > kostikovs2@inbox.lv</td> 
			 	</tr>
			 	<tr> 
			 			<td >Vārds:</td>
			 			<td > Artūrs</td> 
			 	</tr>
			 	<tr> 
			 			<td >Uzvārds:</td>
			 			<td > Kostikovs</td> 
			 	</tr>
			 	<tr> 
			 			<td >Talr:</td>
			 			<td > 26056465</td> 
			 	</tr>

    </table>
     <p><b style = "color: white; ">Dzīvoju :</b></p>
    <div id="map_wrapper">
            <div id="map_canvas" class="mapping"></div>
          </div> 
	</main>
		
		<aside class="col-md-2">
		<h1  class = "hide">Reklāmas</h1>
      <!--liec komentaru reklamu šeit   <p style="background-color:black;"></p> -->
		</aside>
		</section>
		<div style="
width:10px;height:10px" >
</div>
	<div>
	<div class = "row">
	<h1  class = "hide" >Autors</h1>
	<p id="box" style=" 
    background: url(&quot;http://themetest.orbitum.com/themes/1715/1714524/full-dark.png&quot;) !important;
url(" http:="" themetest.orbitum.com="" themes="" full-dark.png")="" !important;"="">Arturs Kostikovs ©2016 Marussia</p>
	</footer>
	</div>	
</section>	
<div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <!-- Modala loga galvene -->
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">×</button>
                                    <h4 class="modal-title" id="myModalLabel">Reģistrācija</h4>
                                </div>
                                <!-- Modala loga galvena dala -->
                                <div class="modal-body">
                                    <form class="form-horizontal" id="registerHere" method='post' action=''>
                                        <fieldset>
                                            <div class="control-group">
                                                <label class="control-label">Ievadiet vārdu*</label>
                                                <div class="controls">
                                                    <input class="form-control" id="name" name="name" placeholder="Vards" type="text" autofocus />
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Ievadiet Lietotājvārdu*</label>
                                                <div class="controls">
                                                    <input class="form-control" id="Username" name="Username" placeholder="Username" type="text">
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Ievadiet e-pasta adresi*</label>
                                                <div class="controls">
                                                    <input class="form-control" id="email" name="email" placeholder="E-pasts" type="text">
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Ievadiet paroli*</label>
                                                <div class="controls">
                                                    <input class="form-control" id="password" name="password" placeholder="Parole" type="password">
                                                </div>
                                            </div>                                            
                                            <div class="control-group">
                                                <label class="control-label"></label>
                                                <div class="controls">
                                                    <button type="submit" class="btn btn-primary" style="margin-left:auto;margin-right:auto;display:block;">Izveidot kontu</button>
                                                </div>
                                            </div>

                                        </fieldset>
                                    </form>
                                </div> <!-- Modala loga galvenas dalas beigas -->
                            </div>
                        </div>
                    </div><!--Modala loga beigas-->

</body>


</html>