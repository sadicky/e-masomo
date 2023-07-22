<?php
require_once("connexion.php");

Class Vente
{
    public $statut = 0;
    public $dateins=null;
    public $idcat;
    public $cat;
    public $id;

    //ajouter une categorie
    public function setVente($fac,$datev,$client,$tel,$statutv,$statut,$total)
    {   
        $this->client=$client;
        $this->tel=$tel;
        $this->fac=$fac;
        $this->statut=$statut;
        $this->statutv=$statutv;
        $this->total=$total;
        $this->datev=$datev;
        $db = getConnection();
        $add = $db->prepare("INSERT INTO tbl_vente (FACTURE, DATEV, CLIENT, TEL, STATUTV, STATUT, TOTAL)        VALUES (?,?,?,?,?,?,?)
    ");
        $addline = $add->execute(array($fac,$datev,$client,$tel,$statutv,$statut,$total)) or die(print_r($add->errorInfo()));
        return $addline;
    }
     //afficher les ventes de la quincaillerie
  
       //afficher les commandes
       public function getCommandes()
       {
           $db = getConnection();
           $statement = $db->prepare("SELECT tbl_commande.ID AS ID,tbl_commande.CLIENT AS CLIENT,tbl_commande.MTOTAL AS MTOTAL, tbl_commande.STATUTV AS STATUTV,tbl_commande.STATUTC AS STATUTC,tbl_commande.PAYE AS PAYE,tbl_commande.RESTE AS RESTE, tbl_commande.DATEC AS DATEV,tbl_users.NAME,tbl_commande_article.ARTICLES,tbl_commande.TEL
           FROM tbl_commande_article,tbl_commande,tbl_users 
           WHERE tbl_users.ID =tbl_commande.IDU AND tbl_commande_article.IDC=tbl_commande.ID AND tbl_commande.STATUTC ='1' ORDER BY DATEC DESC");
           $statement->execute();
           // $total_rows = $statement->rowCount();
           $tbP = array();
           while($data =  $statement->fetch(PDO::FETCH_OBJ)){
               $tbP[] = $data;
           }
            return $tbP;
       }

         //afficher les commandes
         public function getComEffectue()
         {
             $db = getConnection();
             $statement = $db->prepare("SELECT tbl_commande.ID AS ID,tbl_commande.CLIENT AS CLIENT,tbl_commande.MTOTAL AS MTOTAL, tbl_commande.STATUTV AS STATUTV,tbl_commande.STATUTC AS STATUTC,tbl_commande.PAYE AS PAYE,tbl_commande.RESTE AS RESTE, tbl_commande.DATEC AS DATEV,tbl_users.NAME,tbl_commande_article.ARTICLES,tbl_commande.TEL
             FROM tbl_commande_article,tbl_commande,tbl_users 
             WHERE tbl_users.ID =tbl_commande.IDU AND tbl_commande_article.IDC=tbl_commande.ID AND tbl_commande.STATUTC ='2' ORDER BY DATEC DESC");
             $statement->execute();
             // $total_rows = $statement->rowCount();
             $tbP = array();
             while($data =  $statement->fetch(PDO::FETCH_OBJ)){
                 $tbP[] = $data;
             }
              return $tbP;
         }
         
         //afficher les commandes
         public function getComAn()
         {
             $db = getConnection();
             $statement = $db->prepare("SELECT tbl_commande.ID AS ID,tbl_commande.CLIENT AS CLIENT,tbl_commande.MTOTAL AS MTOTAL, tbl_commande.STATUTV AS STATUTV,tbl_commande.STATUTC AS STATUTC,tbl_commande.PAYE AS PAYE,tbl_commande.RESTE AS RESTE, tbl_commande.DATEC AS DATEV,tbl_users.NAME,tbl_commande_article.ARTICLES,tbl_commande.TEL
             FROM tbl_commande_article,tbl_commande,tbl_users 
             WHERE tbl_users.ID =tbl_commande.IDU AND tbl_commande_article.IDC=tbl_commande.ID AND tbl_commande.STATUTC ='0' ORDER BY DATEC DESC");
             $statement->execute();
             // $total_rows = $statement->rowCount();
             $tbP = array();
             while($data =  $statement->fetch(PDO::FETCH_OBJ)){
                 $tbP[] = $data;
             }
              return $tbP;
         }
   
}
?>