<?php
        require_once '../../Models/Admin/connexion.php';
        $db = getConnection();

    //     if (isset($_POST['niv'])&& !empty($_POST['niv'])) {
    //     	$query = $db->prepare("SELECT * FROM tbl_dep where brand_id = ? ");
    //     	$query->execute(array($_POST['device']));
    //     	$rc = $query->rowCount();
    //     	if ($rc>0) {
    //     		echo "<option>Selectionner</option>";
    //     		while ($value=$query->fetchObject()) {
    //     			echo "<option value=".$value->device_id.">".$value->name."-".$value->model."</option>";
    //            		}
    //     	}
    //     	else{

    //     		echo "<option>Non disponible</option>";
    //     	}
    //    }


        if (isset($_POST['dep'])&& !empty($_POST['dep'])) {
        	$query = $db->prepare("SELECT * FROM tbl_classes where dep_id = ?");
            $query->execute(array($_POST['dep']));
        	$rc = $query->rowCount();
        	if ($rc>0) {
        		while ($value=$query->fetchObject()) {
        			echo "<option value=".$value->classe_id.">".$value->classe."</option>";
               		}
        		# code...
        	}
        	else{

        		echo "<option> non disponible</option>";
        	}
       }
?>