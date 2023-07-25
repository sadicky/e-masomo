<?php
        require_once '../../Models/Admin/connexion.php';
        $db = getConnection();

        if (isset($_POST['device'])&& !empty($_POST['device'])) {
        	$query = $db->prepare("SELECT * FROM tbl_device where brand_id = ? ");
        	$query->execute(array($_POST['device']));
        	$rc = $query->rowCount();
        	if ($rc>0) {
        		echo "<option>Selectionner</option>";
        		while ($value=$query->fetchObject()) {
        			echo "<option value=".$value->device_id.">".$value->name."-".$value->model."</option>";
               		}
        	}
        	else{

        		echo "<option>Non disponible</option>";
        	}
       }


        if (isset($_POST['defect'])&& !empty($_POST['defect'])) {
        	$query = $db->prepare("SELECT * FROM tbl_defect where device_id = ?");
            $query->execute(array($_POST['defect']));
        	$rc = $query->rowCount();
        	if ($rc>0) {
        		echo "<option>Selectionner </option>";
        		while ($value=$query->fetchObject()) {
        			echo "<option value=".$value->defect_id.">".$value->title."-".$value->price." Fbu</option>";
               		}
        		# code...
        	}
        	else{

        		echo "<option> non disponible</option>";
        	}
       }
?>