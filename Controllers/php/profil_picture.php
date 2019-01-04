<?php

if ($_POST['profession'] == 'osteopathe')
{
    $profil_picture = "https://hiver.samoens.com/images/cache/e1d299e9e666145d777750f14520861d_w1300.jpg";
} 
else if ($_POST['profession'] == 'acupuncteur') 
{
    $profil_picture = "http://ekladata.com/phZNcAWExNHWguz99gIyqJ6zTH8.jpg";
}
else if ($_POST['profession'] == 'shiatsuki') 
{
    $profil_picture = "http://4.bp.blogspot.com/-XfDnfKa0EJ0/TncdQ5TjrUI/AAAAAAAAABk/U-yNR8r7Pc4/s1600/IMG_2436.JPG";
}
else if ($_POST['profession'] == 'hypno_thérapeute') 
{
    $profil_picture = "http://www.lauraromienhypnose.com/medias/files/screenshot-2018-07-16-carte-de-visite-arbre-vert-elegant-d-avocat-2-.png";
}
else if ($_POST['profession'] == 'psycho_praticien') 
{
    $profil_picture = "http://www.neobienetre.fr/wp-content/uploads/2018/04/Devenez-Psychopraticien.jpg";
}
else if ($_POST['profession'] == 'PNListe') 
{
    $profil_picture = "https://devenir-sorcier.org/medias/2015/05/ethique-manipulation-768x829.jpg";
}
else if ($_POST['profession'] == 'sophrologue') 
{
    $profil_picture = "https://www.sophrologuetoulouse.com/wp-content/uploads/2018/11/Page-dacceuil-4.jpg";
}
else if ($_POST['profession'] == 'autre') 
{
    $profil_picture = "https://www.everycheck.com/wp-content/uploads/2018/10/eclr-medecin-1024x576.jpg";
}
else 
{
    $profil_picture = "https://fotomelia.com/wp-content/uploads/edd/2015/07/point-d-interrogation1-1560x1560.jpg";

    
}

?>