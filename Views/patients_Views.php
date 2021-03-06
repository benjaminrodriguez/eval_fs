<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Allo Docteur ?! Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- CSS
================================================== -->
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="Public/css/bootstrap.css">
<link rel="stylesheet" href="Public/css/bootstrap-responsive.css">
<link rel="stylesheet" href="Public/css/prettyPhoto.css" />
<link rel="stylesheet" href="Public/css/flexslider.css" />
<link rel="stylesheet" href="Public/css/custom-styles.css">
<link rel="stylesheet" type="text/css" href="/../../Public/css/style_calendar.css" />


<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" href="css/style-ie.css"/>
<![endif]--> 

<!-- Favicons
================================================== -->
<link rel="shortcut icon" href="Public/img/favicon.ico">
<link rel="apple-touch-icon" href="Public/img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="Public/img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="Public/img/apple-touch-icon-114x114.png">

<!-- JS
================================================== -->
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script src="Public/js/bootstrap.js"></script>
<script src="Public/js/jquery.prettyPhoto.js"></script>
<script src="Public/js/jquery.flexslider.js"></script>
<script src="Public/js/jquery.custom.js"></script>
<script type="text/javascript">
$(document).ready(function () {

    $("#btn-blog-next").click(function () {
      $('#blogCarousel').carousel('next')
    });
     $("#btn-blog-prev").click(function () {
      $('#blogCarousel').carousel('prev')
    });

     $("#btn-client-next").click(function () {
      $('#clientCarousel').carousel('next')
    });
     $("#btn-client-prev").click(function () {
      $('#clientCarousel').carousel('prev')
    });
    
});

 $(window).load(function(){

    $('.flexslider').flexslider({
        animation: "slide",
        slideshow: true,
        start: function(slider){
          $('body').removeClass('loading');
        }
    });  
});

</script>

</head>

<body class="home">
<script>
    $(document).ready(function() {
    // RECHERCHE DAN LES TABLEAU
    $("#search").keyup(function() {
        search_table($(this).val());
    });
    function search_table(value) {
        $("#patient-table tr").each(function() {
        var found = "false";
        $(this).each(function() {
            if (
            $(this)
                .text()
                .toLowerCase()
                .indexOf(value.toLowerCase()) >= 0
            ) {
            found = "true";
            }
        });
        if (found == "true") {
            $(this).show();
        } else {
            $(this).hide();
        }
        });
    }
    });
</script>
    <!-- Color Bars (above header)-->
	<div class="color-bar-1"></div>
    <div class="color-bar-2 color-bg"></div>
    
    <div class="container">
    
      <div class="row header"><!-- Begin Header -->
      
        <!-- Logo
        ================================================== -->
        <div class="span4 logo">
        	<a href="index.php"><img src="Public/img/titre.png" width=380 alt="" /></a>
            <h5>Gérer votre journée ne sera plus une plaie !</h5>
        </div>
        <?php //var_dump($_SESSION); ?>
        
        <!-- Main Navigation
        ================================================== -->
        <div class="span6 navigation">
            <div class="navbar hidden-phone">
            
            <ul class="nav">

           <li><a href="index.php">Accueil</a></li>

            <!--<li class="dropdown active">
                <a class="dropdown-toggle" data-toggle="dropdown" href="index.php">Home <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="index.htm">Full Page</a></li>
                    <li><a href="index-gallery.htm">Gallery Only</a></li>
                    <li><a href="index-slider.htm">Slider Only</a></li>
                </ul>
            </li>-->

            <!--
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="page-full-width.htm">Mon Profil<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="index.php?page=profile">Mes informations personnelles</a></li>
                    <li><a href="index.php?page=profile">Mes hobbies</a></li>
                    <li><a href="index.php?page=profile&action=unsub">Se désinscrire</a></li>
                    <li><a href="index.php?page=profile&action=stat">Voir mes statistiques</a></li>
                    <li><a href="index.php?page=profile">Déconnexion</a></li>
                </ul>
            -->
                
        
</form>

            <!--</li>
             <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="gallery-4col.htm">Mon Inventaire <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="gallery-3col.htm">Gallery 3 Column</a></li>
                    <li><a href="gallery-4col.htm">Gallery 4 Column</a></li>
                    <li><a href="gallery-6col.htm">Gallery 6 Column</a></li>
                    <li><a href="gallery-4col-circle.htm">Gallery 4 Round</a></li>
                    <li><a href="gallery-single.htm">Gallery Single</a></li>
                </ul>
             </li>-->


             </li>
             <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="index.php?page=patients">Gestion des patients <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="index.php?page=patients&choix=liste_patient">Liste des patients</a></li>
                    <li><a href="index.php?page=patients&choix=ajouter_patient">Ajouter un patient</a></li>
                    <li><a href="index.php?page=patients&choix=liste_medecin">Liste des médecins</a></li>
                </ul>
             </li>

             </li>
             <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="index.php?page=consultation">Gestion des consultations <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="index.php?page=consultation&choix=liste_consultation">Liste des consultations</a></li>
                    <li><a href="index.php?page=consultation&choix=nouvelle_consultation">Nouvelle consultation</a></li>
                    <li><a href="index.php?page=consultation&choix=liste_protocole">Liste des protocoles</a></li>
                    <li><a href="index.php?page=consultation&choix=nouveau_protocole">Nouveau protocole</a></li>
                </ul>
             </li>

             <li><a href="index.php?page=dc">Déconnexion</a></li>
            </div>
          
            
            <!-- Mobile Nav
            ================================================== -->
            <form action="#" id="mobile-nav" class="visible-phone">
                <div class="mobile-nav-select">
                <select onchange="window.open(this.options[this.selectedIndex].value,'_top')">
                    <option value="">Navigate...</option>
                    <option value="index.htm">Home</option>
                        <option value="index.htm">- Full Page</option>
                        <option value="index-gallery.htm">- Gallery Only</option>
                        <option value="index-slider.htm">- Slider Only</option>
                    <option value="features.htm">Features</option>
                    <option value="page-full-width.htm">Pages</option>
                        <option value="page-full-width.htm">- Full Width</option>
                        <option value="page-right-sidebar.htm">- Right Sidebar</option>
                        <option value="page-left-sidebar.htm">- Left Sidebar</option>
                        <option value="page-double-sidebar.htm">- Double Sidebar</option>
                    <option value="gallery-4col.htm">Gallery</option>
                        <option value="gallery-3col.htm">- 3 Column</option>
                        <option value="gallery-4col.htm">- 4 Column</option>
                        <option value="gallery-6col.htm">- 6 Column</option>
                        <option value="gallery-4col-circle.htm">- Gallery 4 Col Round</option>
                        <option value="gallery-single.htm">- Gallery Single</option>
                    <option value="blog-style1.htm">Blog</option>
                        <option value="blog-style1.htm">- Blog Style 1</option>
                        <option value="blog-style2.htm">- Blog Style 2</option>
                        <option value="blog-style3.htm">- Blog Style 3</option>
                        <option value="blog-style4.htm">- Blog Style 4</option>
                        <option value="blog-single.htm">- Blog Single</option>
                    <option value="page-contact.htm">Contact</option>
                </select>
                </div>
                </form>

        </div>
        <div class="span2 logo">
            <img src=<?php echo $_SESSION['profil_picture'];?> style="width:70px;height:70px;">
            <div style="position:relative;left:140px;float:left"> 
                <a href="index.php?page=profile"><b style="font-size:20px"><?php echo $_SESSION['nom']; echo ' '; echo $_SESSION['prenom']; ?></b></a>
                <br>
                <i style="font-size:15px">
                    <?php echo $_SESSION['profession']; ?> 
                </i>
                
            </div>
            
        </div>
        
      </div><!-- End Header -->
     
    <div class="row headline"><!-- Begin Headline -->
    
    </div>

    
    <?php if ($_GET['choix'] == 'ajouter_patient') { ?>

    <h4>Nouvelle fiche patient</h4>
    <form action="" method="POST">
        <input type="text" name="nom_patient" placeholder="Nom patient" required><br>
        <input type="text" name="prenom_patient" placeholder="Prénom patient" required><br>
        <input type="text" name="adresse_patient" placeholder="Adresse patient" required><br>
        <input type="number" name="cp_patient" placeholder="Code postal patient" required><br>
        <input type="text" name="ville_patient" placeholder="Ville patient" required><br>
        <input type="email" name="email_patient" placeholder="Email patient" required><br>
        <h5>Date de naissance patient</h5>
        <input type="date" name="date_de_naissance_patient" placeholder="Date de naissance patient" required><br>
        <input type="tel" name="telephone_patient" placeholder="Numéro de téléphone patient" required><br>
        <h5>Sexe patient</h5>
        <input type="radio" name="sexe_patient" style="color:black;" value="homme" width="10px" class="champ"  id="sexe" required> Homme
        <input type="radio" name="sexe_patient" style="color:black;" value="femme" checked class="champ" id="sexe" required> Femme<br>
        <textarea name="mode_de_vie_patient"
          rows="5" cols="33" required>
            Mode de vie du patient
        </textarea><br>
        <textarea name="alimentation_patient"
          rows="5" cols="33" required>
          Alimentation du patient
        </textarea><br>
        <h5>Type de patient</h5>
        <input type="radio" name="type_patient" style="color:black;" value="Adulte" width="10px" class="champ"  id="sexe" required> Adulte
        <input type="radio" name="type_patient" style="color:black;" value="Enfant" checked class="champ" id="sexe" required> Enfant
        <input type="radio" name="type_patient" style="color:black;" value="Animal" checked class="champ" id="sexe" required> Animal<br>

        <div color: red><h5 >Responsable patient, laisser vide si patient adulte  </h5></div><br>
        <input type="text" name="nom_responsable" placeholder="Nom responsable"><br>
        <input type="text" name="prenom_responsable" placeholder="Prénom responsable"><br>
        <input type="text" name="adresse_responsable" placeholder="Adresse responsable"><br>
        <input type="number" name="cp_responsable" placeholder="Code postal responsable"><br>
        <input type="text" name="ville_responsable" placeholder="Ville responsable"><br>
        <input type="email" name="email_responsable" placeholder="Email responsable"><br>
        Date de naissance<br>
        <input type="date" name="date_de_naissance_responsable" placeholder="Date de naissance"><br>
        <input type="tel" name="telephone_responsable" placeholder="Numéro de téléphone "><br>
        Sexe<br>
        <input type="radio" name="sexe_responsable" style="color:black;" value="homme" width="10px" class="champ"  id="sexe"> Homme
        <input type="radio" name="sexe_responsable" style="color:black;" value="femme" checked class="champ" id="sexe"> Femme<br>
        
        <button class="btn btn-lg btn-block" name="nouvelle_fiche_patient" type="submit">Ajouter</button>
    </form>
    <?php }

    // AFFICHE TOUS LES PATIENTS 
    if ($_GET['choix'] == 'liste_patient' && !isset($_GET['id'])) 
    { ?>
    <form method="POST">
        <input type="text" name="texte" id="search" class="form-control" placeholder="Rechercher un patient..." />
    </form>
       <?php 
        //getSearch($_POST['search']);
        if (isset($_POST['texte'])) {
            getSearch_patient($_POST['texte']);
            ?> <a href="index.php?page=patients&choix=liste_patient">Retour</a> <?php
        }
        else {
            liste_patient_SELECT();
            ?> <a href="index.php?page=patients&choix=liste_patient">Retour</a> <?php

        }
    }

    // AFFICHE FICHE 1 PATIENT
    if (isset($_GET['id']) && $_GET['choix'] == 'liste_patient') 
    {
        $_SESSION['id_patient'] = $_GET['id'];
        //var_dump($_SESSION);
        patient_SELECT($_GET['id']);
        ?> <a href="index.php?page=patients&choix=liste_patient">Retour</a> 
        <a href="index.php?page=patients&choix=modif&id=<?= $_SESSION['id_patient'] ?>">Modifier fiche patient</a>
        <a href="index.php?page=patients&choix=delete&id=<?= $_SESSION['id_patient'] ?>">Supprimer fiche patient</a>

        <?php
    }

    // AFFICHE LISTE DE TOUS LES MEDECINS
    if ($_GET['choix'] == 'liste_medecin') 
    { ?>
        <form method="POST">
            <input type="text" name="texte" id="search" class="form-control" placeholder="Rechercher un médecin..." />
        </form>
       <?php 
        if (isset($_POST['texte'])) {
            getSearch_medecin($_POST['texte']);
            ?> <a href="index.php?page=patients&choix=liste_medecin">Retour</a> <?php
        }
        else {
            medecin_SELECT();
            ?> <a href="index.php?page=patients&choix=liste_medecin">Retour</a> <?php

        } ?>

    <?php
    }

    if ($_GET['choix'] == 'modif' && isset ($_SESSION['id_patient']))
    { ?>
        <h4>Modifier fiche patient</h4>
    <form action="" method="POST">
        <input type="text" name="nom_patient" placeholder="Nom patient" required><br>
        <input type="text" name="prenom_patient" placeholder="Prénom patient" required><br>
        <input type="text" name="adresse_patient" placeholder="Adresse patient" required><br>
        <input type="number" name="cp_patient" placeholder="Code postal patient" required><br>
        <input type="text" name="ville_patient" placeholder="Ville patient" required><br>
        <input type="email" name="email_patient" placeholder="Email patient" required><br>
        <h5>Date de naissance patient</h5>
        <input type="date" name="date_de_naissance_patient" placeholder="Date de naissance patient" required><br>
        <input type="tel" name="telephone_patient" placeholder="Numéro de téléphone patient" required><br>
        <h5>Sexe patient</h5>
        <input type="radio" name="sexe_patient" style="color:black;" value="homme" width="10px" class="champ"  id="sexe" required> Homme
        <input type="radio" name="sexe_patient" style="color:black;" value="femme" checked class="champ" id="sexe" required> Femme<br>
        <textarea name="mode_de_vie_patient"
          rows="5" cols="33" required>
            Mode de vie du patient
        </textarea><br>
        <textarea name="alimentation_patient"
          rows="5" cols="33" required>
          Alimentation du patient
        </textarea><br>
        <h5>Type de patient</h5>
        <input type="radio" name="type_patient" style="color:black;" value="Adulte" width="10px" class="champ"  id="sexe" required> Adulte
        <input type="radio" name="type_patient" style="color:black;" value="Enfant" checked class="champ" id="sexe" required> Enfant
        <input type="radio" name="type_patient" style="color:black;" value="Animal" checked class="champ" id="sexe" required> Animal<br>

        
        
        <button class="btn btn-lg btn-block" name="nouvelle_fiche_patient" type="submit">Mettre à jour</button>
    </form>
   <?php }
   
    ?>



    <div>
    <!-- FIN CALENDRIER --> 
    </div><!-- End Gallery Row -->
    
    <div class="row"><!-- Begin Bottom Section -->
    
    
        <!-- Client Area
        ================================================== -->
        <div class="span6">


        </div>
        
    </div><!-- End Bottom Section -->
    
    </div> <!-- End Container -->
   
   <!-- METEO API
        ================================================== 
        <iframe seamless width="888" height="336" frameborder="0" 
        src="https://www.infoclimat.fr/public-api/mixed/iframeSLIDE?_ll=48.85341,2.3488&_inc=WyJQYXJpcyIsIjQyIiwiMjk4ODUwNyIsIkZSIl0=&_auth=CRNfSAZ4ByVSf1tsD3lReAJqAjcNewIlC3cHZFo%2FUSwHbANiB2dVMwJsA35XeAo8VXgDYFphV2cLYAB4DH5VNAljXzMGbQdgUj1bPg8gUXoCLAJjDS0CJQtgB2ZaKVE0B2ADeQdjVT8CcwNlV2cKIVV5A2JaYFdrC2wAYwxlVTAJYl8yBmUHelIiWzwPbFFlAmQCZA0xAmsLOQdkWj5RYQcxAzEHYlUpAm8DaFduCjlVYQNrWmJXaQt3AHgMGFVFCXdfewYnBzBSe1skD2pROwJl&_c=af8bf9a4d019d2172ab6c098d588c0fa">
        </iframe>
    </center> -->

  
    <!-- Footer Area
        ================================================== -->

	<div class="footer-container"><!-- Begin Footer -->
    	<div class="container">
            
        	<div class="row footer-row">
                <div class="span3 footer-col">
                    <h5>A propos</h5>
                   <img src="Public/img/titre.png" alt="Piccolo" /><br /><br />
                    <address>
                        <strong>Eval de fin de S2</strong><br />
                         Benjamin Rodriguez <br />  <!-- HEURE DYNAMIQUE -->

  
<script language="JavaScript">
function heure () {
var Maintenant = new Date();
var heures = Maintenant.getHours();
var minutes = Maintenant.getMinutes();
var secondes = Maintenant.getSeconds();
heures = ((heures < 10) ? " 0" : " ") + heures;
minutes = ((minutes < 10) ? ":0" : ":") + minutes;
secondes = ((secondes < 10) ? ":0" : ":") + secondes;
document.formhorloge.horloge.value = heures + minutes + secondes;
setTimeout("heure()",1000);
}
window.onload = heure;
// 
</script>
</head>

<body bgcolor="#FFFFFF">

<p class="tt" ></p>


<form name="formhorloge">
<input type="button" class="btn btn-outline-danger" name="horloge" value="">
</form> 
  <!-- FIN HEURE DYNAMIQUE -->

                    </address>
                    
                </div>
                <div class="span3 footer-col">
                   
                </div>
                <div class="span3 footer-col">

                </div>
                <div class="span3 footer-col">
                   
                </div>
            </div>
            

            <div class="row"><!-- Begin Sub Footer -->
                <div class="span12 footer-col footer-sub">
                    <div class="row no-margin">
                        <div class="span6"><span class="left">Copyright 2019 Allo Docteur ?! Theme. All rights reserved.</span></div>
                        <div class="span6">
                            <span class="right">
                            <a href="index.php?page=home">Home</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
                            <a href="index.php?page=fiches">Mes fiches</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
                            <a href="index.php?page=patients">Mes patients</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
                            <a href="index.php?page=dc"> Déconnexion</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div><!-- End Sub Footer -->

        </div>
    </div><!-- End Footer --> 
    
    <!-- Scroll to Top -->  
    <div id="toTop" class="hidden-phone hidden-tablet">Back to Top</div>
    
</body>
</html>
