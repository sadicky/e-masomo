<?php
require_once('../../Models/Connection.php');
$db = getConnection();

function ValidateFormData($FormData) {
    $FormData = trim(stripslashes(htmlspecialchars(strip_tags(str_replace(array('(',')'), '', $FormData)), ENT_QUOTES)));
    return $FormData;
}

//Add Comment /Post
if (isset($_POST['AddComment'])) {
    $Name    = $_POST['Name'];
    $Comment = $_POST['Comment'];
    $PostID  = ValidateFormData($_POST['PostId']);
    
    if (!$Name) {
        $NameError = "Entrez vos noms";
    } else {
        $Name = ValidateFormData($Name);
    }
    
    if (!$Comment) {
        $CommentError = "Ajoutez un commentaire";
    } else {
        $Comment = ValidateFormData($Comment);
    }
    
    if ($Name && $Comment && $PostID) {
        if (is_numeric($PostID) == TRUE) {
            $Query = "INSERT INTO comments(CommentPost_ID, Comment_Author, Comment, Comment_Date) VALUES('$PostID', '$Name', '$Comment', CURRENT_TIMESTAMP)";
           header('Location:../../index.php?p=blog');
        }
    }
}

?>