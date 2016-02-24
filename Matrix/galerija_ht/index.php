<html class=""><head>
  

  <!-- Add jQuery library -->
  <script type="text/javascript" async="" src="https://ssl.google-analytics.com/ga.js"></script>
  <script src="../lib/jquery-2.1.4.min.js"></script>

  <!-- Add mousewheel plugin (this is optional) -->
  <script type="text/javascript" src="../lib/jquery.mousewheel-3.0.6.pack.js"></script>

  <!-- Add fancyBox main JS and CSS files -->
  <script type="text/javascript" src="../source/jquery.fancybox.js?v=2.1.5"></script>
  <link rel="stylesheet" type="text/css" href="../source/jquery.fancybox.css?v=2.1.5" media="screen">

  <!-- Add Button helper (this is optional) -->
  <link rel="stylesheet" type="text/css" href="../source/helpers/jquery.fancybox-buttons.css?v=1.0.5">
  <script type="text/javascript" src="../source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>

  <!-- Add Thumbnail helper (this is optional) -->
  <link rel="stylesheet" type="text/css" href="../source/helpers/jquery.fancybox-thumbs.css?v=1.0.7">
  <script type="text/javascript" src="../source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

  <!-- Add Media helper (this is optional) -->
  <script type="text/javascript" src="../source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
  <script type="text/javascript" src="../lib/uppod-0.5.37"></script>

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
<link rel="icon" type="image/png" sizes="192x192" href="../Favicon/android-icon-192x192.png">
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
  <script id="chrome_vk_anim" src="../lib/anim.js" async="true"></script>

  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="../noformejums.css">
  <link rel="stylesheet" type="text/css" href="../lib/playlist_video231-128.css">
  
  <script src="../lib/jquery.validate.js"></script>
  

    <script type="text/javascript">

jQuery(document).ready(function($) {
  $('a[href=#topbar]').click(function(){
    $('html, body').animate({scrollTop:0}, 'slow');
    return false;
  });
});


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
    maxWidth  : 800,
    maxHeight : 600,
    fitToView : false,
    width   : '70%',
    height    : '70%',
    autoSize  : false,
    closeClick  : false,
    openEffect  : 'none',
    closeEffect : 'none'
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

  </style>
  
<title>Galerija</title>
<style type="text/css">.fancybox-margin{margin-right:0px;}</style></head>
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
  <div class="col-md-12">
   	<?php
include("../lib/class_lib.php");
	$kopa = new kalkulators();
	$kopa->rezultats();
?>
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

<main class="col-md-8" style="background: url(&quot;http://themetest.orbitum.com/themes/1715/1714524/full-dark.png&quot;) !important;
url(" http:="" themetest.orbitum.com="" themes="" 1715="" 1714524="" full-dark.png")="" !important;"="">
  
  
  <div id="burning"> 
<h1 style="font-size:34px; text-align:center">Galerija</h1>
</div>
<section>
  <nav class="navbar navbar-inverse">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bildes" aria-expanded="false">
                Bildes
              </button>
<center>
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#Video" aria-expanded="true">
                Video
              </button>

<center>
              <center>
              
            </center></center></center></div>
            <div class="navbar-collapse collapse in" id="Video" aria-expanded="true" style="background-color: rgb(69, 75, 78);">
             <p style=" text-align:center; 
    background: url(&quot;http://themetest.orbitum.com/themes/1715/1714524/full-dark.png&quot;) !important;
url(" http:="" themetest.orbitum.com="" themes="" full-dark.png")="" !important;="" "="">Video</p>
  <ul class="list">


    <div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading" style="background:#006400">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
        Filmas</a>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse in" style="
    background-repeat: round;
    position: relative;
    background-image: url(http://cdn01.wallconvert.com/_media/wallpapers_1680x1050/1/2/gradient-16415.jpg);
">
            <div class="panel-body">
  
      <div class="container" style="width:100%">

     <nav class="navbar navbar-inverse">
          <div class="navbar-header" style="background-color: transparent;/* background: url(&quot;http://themetest.orbitum.com/themes/1715/1714524/full-dark.png&quot;) !important; */
url(;width: 400px;width: 30px;" http:="" themetest.orbitum.com="" themes="" 1715="" 1714524="" full-dark.png")="" !important;"="">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#izvelne3" style=" 
    background: url(&quot;http://themetest.orbitum.com/themes/1715/1714524/full-dark.png&quot;) !important;
url(" http:="" themetest.orbitum.com="" themes="" 1715="" 1714524="" full-dark.png")="" !important;"=" " aria-expanded="false">
                <span class="icon-bar" style="background-color:white"></span>
                <span class="icon-bar" style="background-color:white"></span>
                <span class="icon-bar" style="background-color:white"></span>
              </button>
              <center> <a class="navbar-brand" href="#" style="color:white ;background: rgba(0, 0, 0, 0.4);border-radius: 10px; height: 40px;">Kategorijas</a>
              </center></div>
        <div class="navbar-collapse collapse" id="izvelne3" style="overflow-y: visible !important; height: 0px;" aria-expanded="false">
<center>
       <div class="row">
  <ul class="nav navbar-nav" id="about" style=" border-radius: 10px">
    <li class="sn"><a data-toggle="pill" href="#home">Goblin kino</a></li>
    <li class="sn"><a data-toggle="pill" href="#menu1">Pamācošas</a></li>
    <li class="sn active"><a data-toggle="pill" href="#menu2">Šausmenes</a></li>
    <li class="sn"><a data-toggle="pill" href="#menu3">Komēdijas</a></li>
    <li class="sn"><a data-toggle="pill" href="#menu4">Anime</a></li>
  </ul>

    </div></center>
      </div><div class="panel-body">



  
  <div class="tab-content">

      <div id="home" class="tab-pane fade">
      <div class="col-sm-4" style="width: inherit;">
        <h3>Звёздные войны: Буря в стакане</h3>
        <a class="various fancybox.iframe" href="https://vk.com/video_ext.php?oid=-58493115&amp;id=166501443&amp;hash=5df9359db9f8ed14&amp;hd=1">     
        <img src="http://orkz.narod.ru/dvd/00000099.jpg" alt="Cinque Terre" style="width:150px;height:150px">
        <p>Skatīties online</p>
      </a>
      <h3>Терминатор 2 День подводника</h3>
      <a class="various fancybox.iframe" href="http://video.uft.me/derzhimorda-films/terminator-2-den-podvodnika/terminator-2-den-podvodnika.webm">
      <img src="https://pp.vk.me/c622422/v622422354/26f42/LsnATH5vzqU.jpg" alt="Cinque Terre" style="width:150px;height:150px"> 
      <p>Skatīties online</p>
        </a>
    </div>
    </div>

      <div id="menu1" class="tab-pane fade">
        <div class="row">
     <div class="col-sm-4" style="width: inherit;">
        <h3>Рога</h3>
        <a class="various fancybox.iframe" href="http://moonwalk.cc/video/5abc023c60ccfa5b/iframe">     
        <img src="http://belpotter.by/wp-content/uploads/2014/07/normal_horns-150x150.jpg" alt="Cinque Terre" style="width:150px;height:150px">

        <p>Skatīties online</p>
      </a>
      <h3>Шпионский мост </h3>
      <a class="various fancybox.iframe" href="http://37.220.36.15/video/32323c0aee865cfe/iframe">
      <img src="http://www.kino.kz/archive/Bridge_of_Spies/MoviePoster.jpg" alt="Cinque Terre" style="width:150px;height:150px"> 
      <p>Skatīties online</p>
        </a>
      </div>
      <div class="col-sm-4">
        <h3>Эффект бабочки</h3>
      <a class="various fancybox.iframe" href="https://copy.com/ltGlW1w3CAe4Mrd3">
      <img src="http://www.kino.kz/archive/Bridge_of_Spies/MoviePoster.jpg" alt="Cinque Terre" style="width:150px;height:150px"> 
      <p>Skatīties online</p>
        </a>

        <h3>forest</h3>
      <a class="various fancybox.iframe" href="https://copy.com/web/users/user-16138567/copy/movie/Forrest.Gump.1994.BDRip.webm?">
      <img src="http://www.kino.kz/archive/Bridge_of_Spies/MoviePoster.jpg" alt="Cinque Terre" style="width:150px;height:150px"> 
      <p>Skatīties online</p>
        </a>
       
        
    
      </div>
       <div class="col-sm-4">
    <!--liec video 2 šeit -->
    </div>
    </div>
    </div>
   

    <div id="menu2" class="tab-pane fade active in">
     <div class="row">
    <div class="col-sm-4" style="width: inherit;">
       <h3>Синистер </h3>
      <a class="various fancybox.iframe" href="http://moonwalk.cc/video/e5c3f618de29aaccdcb2c86ba3ec2fa0/iframe">
      <img src="http://www.kinopsis.ru/wp-content/uploads/2012/08/Sinister-Quad-Poster-150x150.jpg" alt="Cinque Terre" style="width:150px;height:150px"> 
      <p>Skatīties online</p>
        </a>
         <h3>Синистер 2 </h3>
      <a class="various fancybox.iframe" href="http://moonwalk.cc/video/c23fa3683720fa84/iframe">
      <img src="http://www.ramascreen.com/wp-content/uploads/2015/08/Sinister-2-poster-150x150.jpg" alt="Cinque Terre" style="width:150px;height:150px"> 
      <p>Skatīties online</p>
      </a>
    </div>
    <div class="col-sm-4">
       <h3>Заклятие </h3>
      <a class="various fancybox.iframe" href="http://moonwalk.cc/video/70ade34d3e8fddb00af5dd25641dd201/iframe">
      <img src="http://www.kino.kz/archive/Conjuring__The/MoviePoster.jpg" alt="Cinque Terre" style="width:150px;height:150px"> 
      <p>Skatīties online</p>
        </a>
        <h3>ИСКАТЕЛИ МОГИЛ</h3>
      <a class="various fancybox.iframe" href="http://moonwalk.cc/video/e689286ec018aafe1d5050a5127dca0e/iframe">
      <img src="http://kinoschok-hd.ru/wp-content/uploads/2011/11/1311331049_iskateli-mogil-150x150.jpg" alt="Cinque Terre" style="width:150px;height:150px"> 
      <p>Skatīties online</p>
    </a>
    </div>

    
    <div class="col-sm-4">
      <h3>Судный ночь </h3>
      <a class="various fancybox.iframe" href="http://fl.dt00.ru/films/kqgW4Ms-pVPO-q3zNKCyOg/1454113113/2014-04-18/1397849589_The.Purge.2013.D.HDRip.mp4">
      <img src="http://www.kino.kz/archive/Purge__The/MoviePoster.jpg" alt="Cinque Terre" style="width:150px;height:150px"> 
      <p>Skatīties online</p>
        </a>


    </div>
  </div>
    </div>

    <div id="menu3" class="tab-pane fade">
       <div class="row">
    <div class="col-sm-4" style="width: inherit;">

       <!--liec video 2 šeit -->
       
  <p></p><h6>Lūgums sazinieties ar mani caur</h6>
    <h6> šo e-pastu kostikovs2@inbox.lv ja</h6>
    <h6> ir idejas uz kādu labu komēdiju... </h6>
    <h6>Es vienkārsī neskatos  komēdijas  :) <span>!!!</span></h6><p></p>

    </div>
    <div class="col-sm-4">
      <!--liec video 2 šeit -->
    </div>
    <div class="col-sm-4">
    <!--liec video 2 šeit -->
    </div>
  </div>
    </div>

    <div id="menu4" class="tab-pane fade">
      <h3>One Punch Man</h3>
     <object id="videoplayer128" type="application/x-shockwave-flash" data="http://www.marussia.lv-index.net/lib/uppod.swf" width="500" height="465" style="
    width: 100%;
"><param name="bgcolor" value="#6400"><param name="allowFullScreen" value="true"><param name="allowScriptAccess" value="always"><param name="movie" value="http://www.marussia.lv-index.net/lib/uppod.swf"><param name="flashvars" value="uid=videoplayer128&amp;st=02AEZnBUcLfa8Zx52TajanpdQVQBm5k6dwnZsQrDLCU693wVIDkGXLSNVYm0ZIzsNoLfGmGGm5ntu0c9BMr2&amp;pl=41AEZBUcLCQOf=x5TakjanpdQVDQmscYsM7X6sNXHmK5k6dwnZbsQDLCU6a93wVIkGZXLSNVYm80IzsNoLZfGmGm5nBtu0c9BMrS"></object>
    </div>
    </div>

  </div>
</nav></div>
      
    
    </div>
</div>
  <div class="panel panel-default">
    <div class="panel-heading" style="background:#006400">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
        Youtube</a>
      </h4>
    </div>
    <div id="collapse2" class="panel-collapse collapse">
      <div class="panel-body">
    <iframe width="100%" height="315" src="https://www.youtube.com/embed/-OMQyYXYe1M" frameborder="0" allowfullscreen=""></iframe>
    <iframe width="100%" height="315" src="https://www.youtube.com/embed/NE-39Mguh1k" frameborder="0" allowfullscreen=""></iframe>


      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" style="background:#006400">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
        Coub</a>
      </h4>
    </div>
    <div id="collapse3" class="panel-collapse collapse">
      <div class="panel-body">
        <iframe src="//coub.com/embed/9ets2?muted=false&amp;autostart=false&amp;originalSize=false&amp;hideTopBar=false&amp;startWithHD=false" allowfullscreen="true" frameborder="0" width="320" height="270"></iframe>
        <iframe src="//coub.com/embed/9e1lw?muted=false&amp;autostart=false&amp;originalSize=false&amp;hideTopBar=false&amp;startWithHD=false" allowfullscreen="true" frameborder="0" width="320" height="270"></iframe>
        <iframe src="//coub.com/embed/9depv?muted=false&amp;autostart=false&amp;originalSize=false&amp;hideTopBar=false&amp;startWithHD=false" allowfullscreen="true" frameborder="0" width="320" height="270"></iframe>
        <iframe src="//coub.com/embed/8h4jz?muted=false&amp;autostart=false&amp;originalSize=false&amp;hideTopBar=false&amp;startWithHD=false" allowfullscreen="true" frameborder="0" width="320" height="270"></iframe>

      </div>
    </div>
  </div>
</div>
</div></ul></div></nav></section><iframe style="display: none; visibility: hidden;"></iframe><center>
              

           
            <div class="navbar-collapse collapse" id="bildes" aria-expanded="false" style="height: 1px; 
    background-color: #454B4E;">
           <p style=" 
    background: url(&quot;http://themetest.orbitum.com/themes/1715/1714524/full-dark.png&quot;) !important;
url(" http:="" themetest.orbitum.com="" themes="" full-dark.png")="" !important;"="">Bildes</p>  
  <ul class="list">


    <div class="panel-group" id="accordion">
   
  <div class="panel panel-default">
    <div class="panel-heading" style="background:#006400">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
        Mana izlase</a>
      </h4>
    </div>

    <div id="collapse5" class="panel-collapse collapse in">
      <div class="panel-body" id="img">

    <a class="fancybox-thumbs" href="https://copy.com/thumbs_public/s3qpoK73zIxR2NL2/Marussia/1%20%2821%29.JPG?size=1024" data-fancybox-group="thumb" title="KK Saullēkts"><img src="https://copy.com/thumbs_public/POfcIdvrgSnsKwCB/tn_1%20%2821%29.JPG?size=1024" alt=""></a>

    <a class="fancybox-thumbs" href="https://copy.com/thumbs_public/s3qpoK73zIxR2NL2/Marussia/1%20%2820%29.JPG?size=1024" data-fancybox-group="thumb" title="KK Saullēkts"><img src="https://copy.com/thumbs_public/BlrqvPzhQc9ivz9W/tn_1%20%2820%29.JPG?size=1024" alt=""></a>

    <a class="fancybox-thumbs" href="https://copy.com/thumbs_public/s3qpoK73zIxR2NL2/Marussia/1%20%2822%29.JPG?size=1024" data-fancybox-group="thumb" title="KK Saullēkts"><img src="https://copy.com/thumbs_public/WUYKQwDeuF7Apxct/tn_1%20%2822%29.JPG?size=1024" alt=""></a>

    <a class="fancybox-thumbs" href="https://copy.com/thumbs_public/s3qpoK73zIxR2NL2/Marussia/1%20%2823%29.JPG?size=1024" data-fancybox-group="thumb" title="KK Saullēkts"><img src="https://copy.com/thumbs_public/ZVzLikY1E1T4gpP4/tn_1%20%2823%29.JPG?size=1024" alt=""></a>

    <a class="fancybox-thumbs" href="https://copy.com/thumbs_public/s3qpoK73zIxR2NL2/Marussia/1%20%2817%29.JPG?size=1024" data-fancybox-group="thumb" title="Jūrmala"><img src="https://copy.com/thumbs_public/XvTRNHCPhT1XvDNi/tn_1%20%2817%29.JPG?size=1024" alt=""></a>

    <a class="fancybox-thumbs" href="https://copy.com/thumbs_public/s3qpoK73zIxR2NL2/Marussia/1%20%2818%29.JPG?size=1024" data-fancybox-group="thumb" title="Cauri laikam un telpai"><img src="https://copy.com/thumbs_public/vOoCUInaFchrkNIO/tn_1%20%2818%29.JPG?size=1024" alt=""></a>

    <a class="fancybox-thumbs" href="https://copy.com/thumbs_public/s3qpoK73zIxR2NL2/Marussia/1%20%2824%29.JPG?size=1024" data-fancybox-group="thumb" title="Ar labu nakti Lucavsala"><img src="https://copy.com/thumbs_public/bKKKGiJgMRCmHGbF/tn_1%20%2824%29.JPG?size=1024" alt=""></a>

    <a class="fancybox-thumbs" href="https://copy.com/thumbs_public/s3qpoK73zIxR2NL2/Marussia/1%20%2825%29.JPG?size=1024" data-fancybox-group="thumb" title="Aizvedīšu līdz ārprātam"><img src="https://copy.com/thumbs_public/Hm308XlzeuLGw4Yi/tn_1%20%2825%29.JPG?size=1024" alt=""></a>

    <a class="fancybox-thumbs" href="https://copy.com/thumbs_public/s3qpoK73zIxR2NL2/Marussia/1%20%2826%29.JPG?size=1024" data-fancybox-group="thumb" title="Dienas brauciens"><img src="https://copy.com/thumbs_public/7WlAhc8g6aHLNi8F/tn_1%20%2826%29.JPG?size=1024" alt=""></a>

    <a class="fancybox-thumbs" href="https://copy.com/thumbs_public/s3qpoK73zIxR2NL2/Marussia/1%20%2827%29.JPG?size=1024" data-fancybox-group="thumb" title="TP"><img src="https://copy.com/thumbs_public/OAgqcpwRCdSdo3ka/tn_1%20%2827%29.JPG?size=1024" alt=""></a>

    <a class="fancybox-thumbs" href="https://copy.com/thumbs_public/s3qpoK73zIxR2NL2/Marussia/1%20%286%29.jpg?size=1024" data-fancybox-group="thumb" title="18"><img src="https://copy.com/thumbs_public/M2u9SPFe3W6bP1xi/tn_1%20%286%29.jpg?size=1024" alt=""></a>

    <a class="fancybox-thumbs" href="https://copy.com/thumbs_public/s3qpoK73zIxR2NL2/Marussia/1%20%2816%29.JPG?size=1024" data-fancybox-group="thumb" title="в чем сила брат"><img src="https://copy.com/thumbs_public/bscryi4yT7A39EBD/tn_1%20%2816%29.JPG?size=1024" alt=""></a>

    

   <a class="fancybox-thumbs" href="https://copy.com/thumbs_public/s3qpoK73zIxR2NL2/Marussia/1.jpg?size=1024" data-fancybox-group="thumb" title=":)"><img src="https://copy.com/thumbs_public/JLnGBcimZYeToMsY/tn_1.jpg?size=1024" alt=""></a>
    
    <a class="fancybox-thumbs" href="https://copy.com/thumbs_public/s3qpoK73zIxR2NL2/Marussia/1%20%2813%29.jpg?size=1024" data-fancybox-group="thumb" title=""><img src="https://copy.com/thumbs_public/QE9jgwlBQ01R4b9J/tn_1%20%2813%29.jpg?size=1024" alt=""></a>

<a class="fancybox-thumbs" href="https://copy.com/thumbs_public/s3qpoK73zIxR2NL2/Marussia/1%20%2819%29.JPG?size=1024" data-fancybox-group="thumb" title="S.T.A.L.K.E.R"><img src="https://copy.com/thumbs_public/GzHDOmArStB9ENRN/tn_1%20%2819%29.JPG?size=1024" alt=""></a>






  </div>
    </div>
  </div>
  
</div>
  

</ul></div></center>






      
  
            </main>
    <aside class="col-md-2">
      <h1 class="hide">Reklāmas</h1>

      <div id="sailonup" style="margin-top: 550px;position: fixed;"> 
    <p><a class="sailonup plain" rel="nofollow" href="#topbar"><img src="../Images/up-arrow.png"><br></a></p>
    </div>

    </aside>
    </section>
    <div style="
width:10px;height:10px">
</div>
  <div>
  <div class="row">
  <footer class="col-md-12">
    <h1 class="hide">Autors</h1>
    <p id="box" style=" 
    background: url(&quot;http://themetest.orbitum.com/themes/1715/1714524/full-dark.png&quot;) !important;
url(" http:="" themetest.orbitum.com="" themes="" full-dark.png")="" !important;"="">Arturs Kostikovs ©2016 Marussia</p>
  </footer>
  </div>  
</div></section>
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




<iframe style="display: none; visibility: hidden;"></iframe><iframe style="display: none; visibility: hidden;"></iframe></body></html>