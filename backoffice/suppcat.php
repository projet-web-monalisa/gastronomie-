<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 29/03/2019
 * Time: 19:47
 */

include "core/categorieC.php";


$categorie=new categorieC();
var_dump($_GET['id']+0);

$categorie->supprimercat($_GET['id']+0);

    header('Location: affichercat.php');

?>