<!DOCTYPE HTML>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if !IE]><!-->
<html lang="fr-FR">
  <!--<![endif]-->
  <head>
    <!--[if lte IE 8]><meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" /><![endif]-->
    <META NAME="Description" CONTENT="Association sportive ouverte à toutes et à tous les salariés du Ceédit Coopératif avec plus de 22 activités sportives et culturelles.">
      <META NAME="Keywords" CONTENT="association des personnels sportifs du Crédit Coopératif, association sportive, ASCC">
        <META NAME="Indentifier-URL" CONTENT="www.as-creditcooperatif.fr">
          <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
          <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1">
          <link rel="icon" type="image/png" href="ASCC-logo.png"/>
          <META NAME="Author" LANG="fr" CONTENT="Pierre MARTIN - Alain MARTIN">
            <title>ASCC
            </title>
            <link href="css/blue.css" rel="stylesheet" type="text/css" />  
            <!-- bandeau bleu degradé entete et bas de page-->
            <link href="css/style.css"  rel="stylesheet" type="text/css"  /> 
            <!-- gere la position des sections -->
            <!-- for dynamic sections -->
            <script src="js/jquery-2.1.3.min.js">
            </script>
            <script type="text/javascript" src="js/plugin.js">
            </script>
            <script type="text/javascript" src="js/scripts.js">
            </script>
            <!-- for slideshow -->
            <link href="css/js-image-slider.css" rel="stylesheet" type="text/css" />
            <script src="js/js-image-slider.js" type="text/javascript">
            </script>
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
                    </div>
                    <!-- end toolbar-right -->
                    <!-- ***************** - END Top Toolbar Right Side - ***************** -->
                  </div>
                  <!-- end top-holder -->
                </div>
                <!-- end top-block -->
                <div class="header-holder">
                  <div class="rays">
                    <div class="header-area">
                      <!-- ***************** - LOGO - ***************** -->
                      <a href="index.php" class="logo">
                        <img src="logoASCC.png" alt="Logo ASCC" />
                      </a>
                      <!-- ***************** - END LOGO - ***************** -->
                      <!-- ***************** - affichage bandeau "marge"- ***************** -->
                      <ul id="menu-main-nav">
                        <?php
if(file_exists("./fichiers/bandeau.txt")){
  $file = fopen("./fichiers/bandeau.txt", "r");
  if (!$file) {
      print "<p>Problème, prévenez le Webmaster</p>";
      exit;
    }
    $nb = 0;
    while (!feof($file)) {
    if ($nb > 7)
      break;
    $line = fgets($file, 1024);
    $zone = explode("\t", $line);
    if (!isset($zone[1])) {
      $zone[1] = "";
    }
    if ($zone[0] != "" and $nb <= 7) {
      print("<li><a target='_blank' href='./fichiers/pdf_bandeau/" . $zone[1] . "'><strong>" . $zone[0] . "</strong></a>
      </li>\n");
      $nb = $nb + 1;
    }
  }
fclose($file);
}
if (isset($_SERVER['PHP_AUTH_USER']) AND isset($_SERVER['PHP_AUTH_PW']))
{
print_r($_SERVER['REMOTE_USER']);
    print("<li><a target='_blank' href='./fichiers/pdf_bandeau/cotisations_ascc.xlsm'><strong>Login</strong></a>
      </li>");
}

?>
                      </ul>
                      <!-- ***************** - END Main Navigation - ***************** -->
                    </div>
                    <!-- header-area -->
                  </div>
                  <!-- end rays -->
                </div>
                <!-- end header-holder -->
              </div>
              <?php
              print_r($_SERVER);?>
              <!-- end header -->
              <div id="main">
                <div class="main-area home-main-area">
                  <div class="main-holder home-holder">
                    <div class="content_full_width">
                      <!-- ***************** - affichage "actualités" - ***************** -->
                      <thead>
                        <?php
if(file_exists("./fichiers/alertes.txt")){
$file = fopen("./fichiers/alertes.txt", "r");
if (!$file) {
print "<p>Problème, prévenez le Webmaster</p>";
exit;
}
while (!feof($file)) {
$line = fgets($file, 1024);
if (!empty(trim($line))) {
print("<h3><center><B><font size='14'>" . $line . "</center></font></h3>\n");
}else{
  print("<br>");
}
}
fclose($file);
}
?>
                      </thead>
                      <br>
                      <br>
                      <!-- ***************** - affichage "actualités"  avec liens- ***************** -->
                      <section id="actuaSlider">
                        <div>
                          <!-- ***************** - slider "actualités" - ***************** -->
                          <div id="sliderFrame">
                            <div id="slider">
                              <?php
if(file_exists("./fichiers/slide_photos.txt")){
$file = fopen("fichiers/slide_photos.txt", "r");
if (!$file) {
print "<p>Problème, prévenez le Webmaster</p>";
exit;
}
while (!feof($file)) {
$line = fgets($file, 1024);
$zone = explode("\t", $line);
print("<a id ='sliderImage' target='_blank' href='fichiers/pdf_actualites/" . $zone[1] . "'>\n
<img src='fichiers/contenu_slide/" . $zone[0] . "' alt='" . $zone[2] . "'/>\n
</a>");
}
fclose($file);
}
?>
                            </div>
                          </div>
                          <center>
                            <h6>
                              <p>Nos actualités
                              </p>
                            </h6>
                          </center>
                          <div id="actualitesBlue">
                            <?php
if(file_exists("./fichiers/actualites.txt")){
$file = fopen("./fichiers/actualites.txt", "r");
if (!$file) {
print "<p>Problème, prévenez le Webmaster</p>";
exit;
}
while (!feof($file)) {
$line = fgets($file, 1024);
$zone = explode("\t", $line);
if (isset($zone[1])) {
print("<h3 style=><center><B><font size='14'>&nbsp;<a target='_blank' href='./fichiers/pdf_actualites/" . $zone[1] . "'>" . $zone[0] . "</a></center></font></h3>\n");
} else {
print("<br>");
}
}
fclose($file);
}
?>

                          </div>
                        </div>
                      </section>

                      <!-- ========================== affichage es icones "sections"] ========================== -->
                      <section id="portfolio" class="portfolio section-space-padding">
                        <div class="row">
                          <ul class="portfolio">
                            <li class='filter' data-filter="all">Tout
                            </li>  
                            <?php
if(file_exists("./fichiers/sections.txt")){
$file = fopen("fichiers/sections.txt", "r");
if (!$file) {
print "<p>Problème, prévenez le Webmaster</p>";
exit;
}
while (!feof($file)) {
$line = fgets($file, 1024);
$zone = explode("\t", $line);
if (empty($zone[1])) {
$label = str_replace(' ', '_', $zone[0]);
print("<li class='filter' data-filter='." . $label . "'>" . $zone[0] . "</li>");
}
}
fclose($file);
}
?>
                          </ul>
                        </div>   
                      </section>
                      <section class="portfolio-container">
                        <ul class="portfolio-items">
                          <div class="portfolio-inner">
                            <?php
if(file_exists("./fichiers/sections.txt")){
$file = fopen("fichiers/sections.txt", "r");
if (!$file) {
print "<p>Problème, prévenez le Webmaster</p>";
exit;
}
$section;
while (!feof($file)) {
$line = fgets($file, 1024);
$zone = explode("\t", $line);
$zone[1] = isset($zone[1]) ? $zone[1] : "";
$zone[2] = isset($zone[2]) ? $zone[2] : "";
if (empty($zone[1])) {
$section = str_replace(' ', '_', $zone[0]);
} else if (!empty($zone[1]) and !empty($zone[2])) {
print("<div class='mix " . $section . "'><a target='_blank' href='./fichiers/pdf_sections/" . $zone[1] . "' ><li class='img_item'>\n
<div class='caption9'>\n
<h2>" . $zone[0] . "</h2>\n
</div>\n
<img src='./fichiers/photos_sections/" . $zone[2] . "' alt='" . $zone[0] . "' />\n
</li></a></div>\n");
}
}
fclose($file);
}
?>
                          </div>
                          </section>
                        <!-- End of .portfolio-container -->
                        <br>
                        <br>
                        <!-- ***************** - affichage du texte "presentation" - ***************** -->
                        <div class="callout-wrap" align="justify">
                          <span>
                            <center>
                              <h6>
                                <p>Le mot du Président
                                </p>
                              </h6>
                            </center>
                            <br>
                            <?php
if(file_exists("./fichiers/presentation.txt")){
$file = fopen("./fichiers/presentation.txt", "r");
if (!$file) {
print "<p>Problème, prévenez le Webmaster</p>";
exit;
}
while (!feof($file)) {
$line = fgets($file);
print("<em>" . $line . "</em><br>");
}
fclose($file);
}
?>
                            <br />
                            <br />
                          </span>
                        </div>
                        <!-- end callout-wrap -->
                        <!--    <br><br><br><br>
<center><h6><p>Nos vidéos en ligne</p></h6></center> -->
                        <div class="clear">
                        </div>
                        <!-- END testimonials -->
                        </div>
                      <!-- ***************** - END Homepage Content Area - ***************** --> 
                      <!-- end content -->
                    </div>
                    <!-- end main-holder -->
                  </div>
                  <!-- main-area -->
                  <!-- footer -->
                  <!-- ***************** - Top Footer - ***************** --> 
                  <div id="footer">
                    <div class="footer-area">
                      <div class="footer-wrapper">
                        <div class="footer-holder">
                          <!-- /***************** - Footer Content Starts Here - ***************** --> 
                          <div class="one_fourth">
                            <h3>SIEGE SOCIAL
                            </h3>
                            <ul class="blogroll">
                              <li>ASCC
                                <br />
                                CREDIT COOPERATIF
                                <br />
                                10-12 Bd PICASSO
                                <br />
                                92000 Nanterre
                                <br />
                                E-mail : ascc@credit-cooperatif.coop
                              </li>
                            </ul>
                            <!-- end footer_post -->
                          </div>
                          <!-- end first one_fourth_column -->
                          <div class="one_fourth">
                            <h3>Nouvelles sections
                            </h3>
                            <ul class="blogroll">
                              <li>Vous avez des idées de nouvelles sections, n'hesitez pas à nous les soumettre
                                <br/>
                              </li>
                            </ul>
                          </div>
                          <!-- end second one_fourth_column -->
                          <div class="one_fourth">
                            <h3>Ecrivez-nous
                            </h3>
                            <a href="mailto:famart.alain@sfr.fr">ascc@credit-cooperatif.coop
                            </a>
                            <br />
                          </div>
                          <!-- end third one_fourth_column -->
                          <div class="one_fourth_last">
                            <h3>BENEVOLES
                            </h3>
                            <ul class="blogroll">
                              <li>NOUS AIDER
                                <br />
                                Vous êtes adhérent à l'Ascc ? Vous avez du temps libre pour vous consacrer aux autres ? Ecrivez-nous, nous avons besoin de vous!
                              </li>
                            </ul>
                          </div>
                          <!-- end second one_fourth_column -->
                          <!-- ***************** - END Footer Content - ***************** --> 
                        </div>
                        <!-- footer-holder -->
                      </div>
                      <!-- end footer-wrapper -->
                    </div>
                    <!-- end footer-area -->
                  </div>
                  <!-- end footer -->
                  <!-- /***************** - END Top Footer Area - ***************** --> 
                  <!-- /***************** - Bottom Footer - ***************** --> 
                  </body>
                </html>
