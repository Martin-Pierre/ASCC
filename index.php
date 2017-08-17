<!DOCTYPE HTML>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if !IE]><!--><html lang="fr-FR"><!--<![endif]-->
<head>
  <!--[if lte IE 8]><meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" /><![endif]-->
  <META NAME="Description" CONTENT="Association sportive ouverte à toutes et à tous les salariés du Ceédit Coopératif avec plus de 22 activités sportives et culturelles.">
    <META NAME="Keywords" CONTENT="association des personnels sportifs du Crédit Coopératif, association sportive, ASCC">
      <META NAME="Indentifier-URL" CONTENT="www.as-creditcooperatif.fr">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1">
        <link rel="icon" type="image/png" href="ASCC-logo.png"/>
        <META NAME="Author" LANG="fr" CONTENT="Pierre MARTIN - Alain MARTIN">
          <title>ASCC</title>
          <link href="css/blue.css" rel="stylesheet" type="text/css" />  <!-- bandeau bleu degradé entete et bas de page-->
          <link href="css/style.css"  rel="stylesheet" type="text/css"  /> <!-- gere la position des sections -->

          <!-- for dynamic sections -->
          <script language="JavaScript1.2" src="js/slider.js"></script>
          <script src="js/jquery-2.1.3.min.js"></script>
          <script type="text/javascript" src="js/plugin.js"></script>
          <script type="text/javascript" src="js/scripts.js"></script>


          <!-- for slideshow -->
          <link href="css/js-image-slider.css" rel="stylesheet" type="text/css" />
          <script src="js/js-image-slider.js" type="text/javascript"></script>

          <!-- ***************** - END 3D CONFIG - ***************** -->


        </head>
        <body>

          <div id="wrapper">
            <div id="header">
              <div class="top-block">
                <div class="top-holder">

                  <!-- ***************** - Top Toolbar Right Side - ***************** -->
                  <div class="toolbar-right">
                    <ul>
                    </ul>
                  </div><!-- end toolbar-right -->
                  <!-- ***************** - END Top Toolbar Right Side - ***************** -->
                </div><!-- end top-holder -->
              </div><!-- end top-block -->
              <div class="header-holder">
                <div class="rays">
                  <div class="header-area">


                    <!-- ***************** - LOGO - ***************** -->
                    <a href="index.php" class="logo">
                      <img src="logoASCC.png" alt="Logo ASCC" /></a>
                      <!-- ***************** - END LOGO - ***************** -->


                      <!-- ***************** - affichage bandeau "marge"- ***************** -->

                      <ul id="menu-main-nav">
                       <?php
                       $file = fopen("./fichiers/bandeau.txt", "r");
                       if (!$file) {
                        print "<p>Problème, prévenez le Webmaster</p>";
                        exit;
                      }
                      $nb=0;
                      while (!feof($file)) {
                        if ($nb>7) break;
                        $line = fgets($file, 1024);
                        $zone = explode("\t", $line);
                        if(!isset($zone[1])){$zone[1]=""; }

                        if ($zone[0]!=""and $nb<=7) {

                          print("<li><a href='./fichiers/pdf_bandeau/" .$zone[1] ."'><strong>" .$zone[0] ."</strong></a>
                            </li>\n");

                          $nb=$nb+1;  
                        }
                      }

                      fclose($file);
                      ?>


	<!-- <li>
		<div>
			<span style="cursor:default; color: #98DCE9">
				<strong>Espace perso</strong>
				<span id="userArea">
						<a href="#" style="display:inline">
		<span id="create-account" class="navi-description">Créer un compte</span>
	</a>
	 | 
	<a href="#" style="display:inline">
		<span id="login-button" class="navi-description">Connexion</span>
	</a>
				
				</span>	
			</span>
		</div>
	</li>
-->

</ul>

<!-- ***************** - END Main Navigation - ***************** -->



</div><!-- header-area -->
</div><!-- end rays -->
</div><!-- end header-holder -->
</div><!-- end header -->


<div id="main">
  <div class="main-area home-main-area">
    <div class="main-holder home-holder">
      <div class="content_full_width">
        <br>

        <!-- ***************** - affichage "actualités" - ***************** -->


        <thead>
          <?php
          $file = fopen("./fichiers/actualites.txt", "r");
          if (!$file) {
            print "<p>Problème, prévenez le Webmaster</p>";
            exit;
          }

          while (!feof($file)) {
            $line = fgets($file, 1024);
            $zone = explode("\t", $line);

            if (isset($zone[1])) {

              print("<h3 style=><center><B><font size='14'>".$zone[0] ."</center></font></h3>\n");

            }

          }

          fclose($file); 
          ?>

        </thead>
        <br>
        <br>


        <!-- ***************** - affichage "actualités"  avec liens- ***************** -->
        <section>
        <div>

        <!-- ***************** - slider "actualités" - ***************** -->

        <div id="sliderFrame">
          <div id="slider">
            <?php
            $file = fopen("fichiers/slide_photos.txt", "r");
            if (!$file) {
              print "<p>Problème, prévenez le Webmaster</p>";
              exit;
            }
            while (!feof($file)) {
              $line = fgets($file, 1024);
              $zone = explode("\t", $line);

              print("<a href='fichiers/pdf_actualites/".$zone[1]."'>\n
                <img src='fichiers/photos_sections/".$zone[0]."' alt='".$zone[2]."'/>\n
                </a>");  
            }
            fclose($file);
            ?>
          </div>

        </div>

                 <div id="actualitesBlue">
          <?php
          $file = fopen("./fichiers/actualites.txt", "r");
          if (!$file) {
            print "<p>Problème, prévenez le Webmaster</p>";
            exit;
          }

          while (!feof($file)) {
            $line = fgets($file, 1024);
            $zone = explode("\t", $line);

            if (isset($zone[1])) {

              print("<h3 style=><center><B><font size='14'>&nbsp;<a href='./fichiers/pdf_actualites/" .$zone[1] ."'>" .$zone[0] ."</a></center></font></h3>\n");

            }else{
               print("<br>");
            }

          }

          fclose($file); 
          ?>

        </div>
      </div>
      </section>





      <!-- ========================== affichage es icones "sections"] ========================== -->

      <section id="portfolio" class="portfolio section-space-padding">
        <div class="row">
          <ul class="portfolio">
            <li class='filter' data-filter="all">Tout</li>  


            <?php
            $file = fopen("fichiers/sections.txt", "r");
            if (!$file) {
              print "<p>Problème, prévenez le Webmaster</p>";
              exit;
            }

            while (!feof($file)) {
              $line = fgets($file, 1024);

              $zone = explode("\t", $line);

              if (empty($zone[1])) {
                $label=str_replace(' ', '_', $zone[0]);
                print("<li class='filter' data-filter='.".$label."'>".$zone[0] ."</li>"); 
              }
            }
            fclose($file);
            ?>

          </ul>
        </div>   
      </section>

      <section class="portfolio-container">
       <ul class="portfolio-items">

        <div class="portfolio-inner">
          <?php
          $file = fopen("fichiers/sections.txt", "r");
          if (!$file) {
            print "<p>Problème, prévenez le Webmaster</p>";
            exit;
          }

          $section;

          while (!feof($file)) {
            $line = fgets($file, 1024);
            $zone = explode("\t", $line);

            $zone[1]= isset($zone[1]) ? $zone[1] :"";
            $zone[2]= isset($zone[2]) ? $zone[2] :"";
            if (empty($zone[1])) {
              $section=str_replace(' ', '_', $zone[0]);
            }else if (!empty($zone[1])and !empty($zone[2])) {

              print("<div class='mix ".$section ."'><li class='img_item'>\n
                <div class='caption9'>\n
                <h2>".$zone[0]."</h2>\n
                <a href='./fichiers/pdf_sections/" .$zone[1] ."' class='pf_button'>Détails</a>\n
                </div>\n
                <img src='./fichiers/photos_sections/" .$zone[2] ."' alt='" .$zone[0] ."' />\n
                </li></div>\n"); 
            } 
          }

          fclose($file);
          ?>
        </div>
      </section><!-- End of .portfolio-container -->


      <!-- ***************** - affichage du texte "presentation" - ***************** -->

      <div class="callout-wrap" align="justify"><span>

        <p>Le mot du Président</p>

        <?php

        $file = fopen("./fichiers/presentation.txt", "r");
        if (!$file) {
          print "<p>Problème, prévenez le Webmaster</p>";
          exit;
        }
        while (!feof($file)) {
         $line = fgets($file);   

   //  print($line."<br>");
         print("<em>" .$line ."</em><br>");
       }
       fclose($file);
       ?>
       <br /><br /><center><strong>REJOIGNEZ, VOUS AUSSI, L'ASSOCIATION SPORTIVE DU CREDIT COOPERATIF!</strong></center>
     </span>

   </div><!-- end callout-wrap -->

   <div class="clear"></div>


   <!-- END testimonials -->
 </div>

 <!-- ***************** - END Homepage Content Area - ***************** --> 


 <!-- end content -->
</div><!-- end main-holder -->
</div><!-- main-area -->



<!-- footer -->
<!-- ***************** - Top Footer - ***************** --> 
<div id="footer">
  <div class="footer-area">
    <div class="footer-wrapper">
      <div class="footer-holder">


        <!-- /***************** - Footer Content Starts Here - ***************** --> 
        <div class="one_fourth">
         <h3>SIEGE SOCIAL</h3>
         <ul class="blogroll">
           <li>ASCC<br />
             CREDIT COOPERATIF<br />
             10-12 Bd PICASSO<br />
             92000 Nanterre<br />
             E-mail : ascc@credit-cooperatif.coop
           </li>
         </ul><!-- end footer_post -->

       </div><!-- end first one_fourth_column -->



       <div class="one_fourth">
        <h3>Nouvelles sections</h3>
        <ul class="blogroll">
          <li>Vous avez des idées de nouvelles sections, n'hesitez pas à nous les soumettre<br/>
          </li>
        </ul>

      </div><!-- end second one_fourth_column -->



      <div class="one_fourth">
        <h3>Ecrivez-nous</h3>
        <a href="mailto:famart.alain@sfr.fr" target="_blank" >ascc@credit-cooperatif.coop</a><br />



      </div><!-- end third one_fourth_column -->




      <div class="one_fourth_last">
        <h3>BENEVOLES</h3>
        <ul class="blogroll">
         <li>NOUS AIDER<br />
          Vous êtes adhérent à l'Ascc ? Vous avez du temps libre pour vous consacrer aux autres ? Ecrivez-nous, nous avons besoin de vous!</li>
        </ul>
      </div><!-- end second one_fourth_column -->

      <!-- ***************** - END Footer Content - ***************** --> 




    </div><!-- footer-holder -->
  </div><!-- end footer-wrapper -->
</div><!-- end footer-area -->
</div><!-- end footer -->


<!-- /***************** - END Top Footer Area - ***************** --> 






<!-- /***************** - Bottom Footer - ***************** --> 




<div id="loginDialog" title="Login" style="display:none">

	<form id="loginForm">
		<fieldset>
			<legend>Informations de connexion</legend>
			<label for="login">login</label>
			<input type="text" id="login" name="login" />
			<br />
			<label for="password">mot de passe</label>
			<input type="password" id="password" name="password" />			
		</fieldset>
		<a href="https://www.ASCC.fr/ASCC/recuperation_login.php">Login oublié?</a> <br />
		<a href="https://www.ASCC.fr/ASCC/recuperation_motdepasse.php">Mot de passe oublié?</a>
	</form>
	<div id="loading" style="display:none"><img src="images/loading_grey.gif" style="width:20px" /></div>
	<div id="errorMessage"></div>

</div>
<div id="logoutDialog" title="Logout" style="display:none">

	Etes-vous sur de vouloir vous déconnecter?

</div>

</body>
</html>