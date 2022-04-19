<?php 

require_once '../models/placeModel.php';

if (deleteplace($_GET['id'])) {
    header('Location: ../Views/placeList.php');
}

 ?>

?>