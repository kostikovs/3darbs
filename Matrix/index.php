<!DOCTYPE html>
<html lang="lv">
<head>
<!-- Add jQuery library -->
	<script src="lib/jquery-2.1.4.min.js"></script>

	<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="lib/jquery.mousewheel-3.0.6.pack.js"></script>

	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="source/jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="source/jquery.fancybox.css?v=2.1.5" media="screen" />

	<!-- Add Button helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
	<script type="text/javascript" src="source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>

	<!-- Add Thumbnail helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
	<script type="text/javascript" src="source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

	<!-- Add Media helper (this is optional) -->
	<script type="text/javascript" src="source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">



<link rel="apple-touch-icon" sizes="57x57" href="Favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="Favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="Favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="Favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="Favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="Favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="Favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="Favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="Favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="Favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="Favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="Favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="Favicon/favicon-16x16.png">
<link rel="manifest" href="Favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
	
	
	<link rel="stylesheet" href="css/html5-reset.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="lib/bootstrap-3.3.5-dist/css/bootstrap.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="lib/bootstrap-3.3.5-dist/css/bootstrap-theme.min.css">
	<!-- Latest compiled and minified JavaScript -->
	<script src="lib/bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
<meta charset="UTF-8">
	<!-- CSS files -->
	<!--<link rel="stylesheet" href="./libs/boostrap/css/bootstrap.min.css"> -->
	<!-- SCRITP files -->
	<script id="chrome_vk_anim" src="lib/anim.js" async="true"></script>
	<link rel="stylesheet" type="text/css" href="noformejums.css" />

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

<title>Izvēlnes</title>
<style type="text/css">.fancybox-margin{margin-right:17px;}</style><style type="text/css">.fancybox-margin{margin-right:17px;}</style></head>
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

<img class="logo" src="Images/logo.jpg" onclick="window.location.href='index.html'" onmouseover="" style="cursor: pointer; width:250px;height:100px;" margin:="" auto="">
</center>
	</header>
		
 


<div class="row">
	<div class = "col-md-12">
		<?php
include("lib/class_lib.php");
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
<h1 class="shadowtext" style="font-size:34px; text-align:center">Anketa</h1>
</div>


<form role="form">
  
              <div class="form-group">
                <label for="vards">Vārds</label>
                <input type="vards" class="form-control" id="vards">
              </div> 

              <div class="form-group">
                <label for="uzvards">Uzvārds:</label>
                <input type="uzvards" class="form-control" id="uzvards">
              </div>
                 <hr>
              <div class="form-group">
                <label for="Dati">E-pasts</label>
                <input type="E-pasts" class="form-control" id="E-pasts">
              </div>
               <div class="form-group">
                <label for="Dati">Mob.Talrunis</label>
                <input type="Mob.Talrunis" class="form-control" id="Mob.Talrunis">
              </div>
                 <hr>
              
              <div class = "form-group">
              	<h1 style="font-size:22px;text-align:center">Izvēlies Atbildi</h1>
                <label for="Atb">Vai jūs atbalstat Edward Snowden</label><br>
                <div class="radio-inline">
                    <div class = "radio">
                      <label><input type = "radio" name = "optionsRadios" id = "optionsRadios1" value = "apvidus" checked>Nē</label>
                    </div>
                    <div class = "radio">
                      <label><input type = "radio" name = "optionsRadios" id = "optionsRadios2" value = "hecbeks">Drīzāk nē</label>
                    </div>
                    <div class = "radio">
                      <label><input type = "radio" name = "optionsRadios" id = "optionsRadios2" value = "kabriolets">Neitrāli</label>
                    </div>
                    <div class = "radio">
                      <label><input type = "radio" name = "optionsRadios" id = "optionsRadios2" value = "sedans">Drīzāk jā</label>
                    </div>
                    <div class = "radio">
                      <label><input type = "radio" name = "optionsRadios" id = "optionsRadios2" value = "universals">Jā</label>
                    </div>
                </div>
              </div>
              <div class = "form-group">
              	<h1 style="font-size:22px;text-align:center">Ieliec ķeksi ja piekrīti</h1>
                <label for="modelis" >Jautājumi</label><br>

                    
                    
                    <label class="checkbox-inline"><input type="checkbox" value="">Dzīvo Rīgā?</label>

                    <label class="checkbox-inline"><input type="checkbox" value="">Patīk rallijs?</label>

                    <label class="checkbox-inline"><input type="checkbox" value="">Man riebjas mašīnas</label>

                    <label class="checkbox-inline"><input type="checkbox" value="">Man jau ir 18 Gadi</label>

                    <label class="checkbox-inline"><input type="checkbox" value="">Vai tev ir tiesības?</label>
                  </select>
                  <div class = "form-group">
                  	<h1 style="font-size:22px;text-align:center">Dzīves vieta</h1>
                <label for="Raj">Kurā rajona dzīvojat ?</label>
                  <select class="form-control" id="Raj">
                  	<option value="tukss"></option>
                    
                    <option value="manuala">Bolderāja</option>
                    <option value="automats">Daugavgrīva</option>
                    <option value="manuala">Dzirciems</option>
                    <option value="manuala">Iļģuciems</option>
                    <option value="manuala">Imanta</option>
                    <option value="manuala">Bolderāja</option>
                    <option value="manuala">Kleisti</option>
                    <option value="manuala">Ķīpsala </option>
                    <option value="manuala">Rītabuļļi </option>
                    <option value="manuala">Spilve </option>
                    
                    <option value="manuala">Voleri </option>
                    <option value="automats">Zasulauks </option>
                    <option value="manuala">Āgenskalns</option>
                    <option value="manuala">Atgāzene</option>
                    <option value="manuala">Bieriņi</option>
                    <option value="manuala">Bišumuiža</option>
                    <option value="manuala">Katlakalns</option>
                    <option value="manuala">Mūkupurvs</option>
                    <option value="manuala">Pleskodāle</option>
                    <option value="manuala">Bolderāja </option>
                 
                    <option value="manuala">Salas</option>
                    <option value="automats">Šampēteris</option>
                    <option value="manuala">Torņakalns</option>
                    <option value="manuala">Ziepniekkalns</option>
                    <option value="manuala">Zolitūde</option>
                    <option value="manuala">Čiekurkalns</option>
                    <option value="manuala">Jaunciems</option>
                    <option value="manuala">Kundziņsala</option>
                    <option value="manuala">Mangaļsala</option>
                    <option value="manuala">Mežaparks</option>
                       
                    <option value="manuala">Mīlgrāvis</option>
                    <option value="automats">Pētersala-Andrejsala</option>
                    <option value="manuala">Sarkandaugava</option>
                    <option value="manuala">Trīsciems</option>
                    <option value="manuala">Vecāķi</option>
                    <option value="manuala">Vecdaugava</option>
                    <option value="manuala">Vecmīlgrāvis</option>
                    <option value="manuala">Vecpilsēta</option>
                    <option value="manuala">Centrs</option>
                    <option value="manuala">Berģi </option>
                     
                    <option value="manuala">Brasa</option>
                    <option value="automats">Brekši</option>
                    <option value="manuala">Bukulti</option>
                    <option value="manuala">Dreiliņi</option>
                    <option value="manuala">Jugla</option>
                    <option value="manuala">Mežciems</option>
                    <option value="manuala">Purvciems</option>
                    <option value="manuala">Skanste</option>
                    <option value="manuala">Suntaži</option>
                    <option value="manuala">Teika</option>
                      
                    <option value="manuala">Avotu iela</option>
                    <option value="automats">Dārzciems</option>
                    <option value="manuala">Dārziņi</option>
                    <option value="manuala">Grīziņkalns</option>
                    <option value="manuala">Ķengarags</option>
                    <option value="manuala">Maskavas forštate</option>
                    <option value="manuala">Pļavnieki</option>
                    <option value="manuala">Rumbula</option>
                    <option value="manuala">Šķirotava</option>
                    <option value="manuala">Nē no Rīgas</option>

                  </select>
              </div>
              </div>
              <button type="submit" class="btn btn-default">Gatavs</button>
            </form>
			</main>
		
		<aside class="col-md-2">
			<h1 class="hide">Reklāmas</h1>
			<!--liec komentaru reklamu šeit   <p style="background-color:black;"></p> -->
			
		</aside>
		</section>
		<div style="
width:10px;height:10px">
</div>
	<div>
	<div class="row">
	<h1 class="hide">Autors</h1>
	<p id="box" style=" 
    background: url(&quot;http://themetest.orbitum.com/themes/1715/1714524/full-dark.png&quot;) !important;
url(" http:="" themetest.orbitum.com="" themes="" full-dark.png")="" !important;"="">Arturs Kostikovs ©2016 Marussia</p>
	
	</div>	
</div></div></section>
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
                                    <form class="form-horizontal" id="registerHere" method="post" action="" novalidate="novalidate">
                                        <fieldset>
                                            <div class="control-group">
                                                <label class="control-label">Ievadiet vārdu*</label>
                                                <div class="controls">
                                                    <input class="form-control" id="name" name="name" placeholder="Vards" type="text" autofocus="">
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


</body></html>