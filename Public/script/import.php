<?php
require_once('../../Models/Admin/price.class.php');
$price = new Price();

if(isset($_POST["import"])){
    echo '
      <strong style="color: red;">Erreur:</strong> Inclure un fichier Excel valide';
  }
  else{
    $fileName = $_FILES["excel"]["name"];
    $fileExtension = explode('.', $fileName);
    $fileExtension = strtolower(end($fileExtension));
    $newFileName = date("Ymd") . "" . date("hi") . "." . $fileExtension;

    $targetDirectory = "../../assets/importExcelToMySQL/uploads/" . $newFileName;
    move_uploaded_file($_FILES['excel']['tmp_name'], $targetDirectory);

    require '../../assets/importExcelToMySQL/excelReader/excel_reader2.php';
    require '../../assets/importExcelToMySQL/excelReader/SpreadsheetReader.php';

    $reader = new SpreadsheetReader($targetDirectory);
    foreach($reader as $key => $row){
        $ref = $row[0];
        $libelle = $row[1];
        $pv = $row[2];
        $add = $price->setPrice($ref, $libelle, $pv);
        if(!empty($add)){
            echo "<span class='alert alert-pro alert-success alert-dismissible col-sm-12'>
                     <div class='alert-text'>
                         <h6>Successful</h6>
                         <p>Your Brand has been successfully added. </p>
                    </div>
                    <button type='button' class='close' data-dismiss='alert'>x</button>
                </span>";
            echo "<script>window.location.href=''</script>"; 
        }
          else{
              echo "<span class='alert alert-pro alert-danger alert-dismissible col-sm-12'>
                         <div class='alert-text'>
                             <h6>Error!!</h6>
                             <p>Your Brand has not been added. </p>
                        </div>
                       <button type='button' class='close' data-dismiss='alert'>x</button>
                    </span>";
            }
    }
}
?> 