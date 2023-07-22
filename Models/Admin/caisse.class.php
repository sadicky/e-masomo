<?php
require_once("connexion.php");

Class Caisse
{
    public $adresse = 1;
    public $dateins=null;
    public $idcat;
    public $cat;

    //ajouter une entree
    public function setCaisse($client,$tel,$adresse,$motif,$montant,$depot,$date,$dateins,$statut,$idu,$idr)
    {   
        $this->client=$client;
        $this->tel=$tel;
        $this->motif=$motif;
        $this->adresse=$adresse;
        $this->montant=$montant;
        $this->date=$date;
        $this->dateins=$dateins;
        $this->depot=$depot;
        $this->idr=$idr;
        $this->statut=$statut;
        $db = getConnection();
        $add = $db->prepare("INSERT INTO tbl_other_entry (CLIENT,TEL,ADRESSE,MOTIF,MONTANT,DEPOT,DATE,DATEINS,STATUT,STATUTR,IDU,IDR) 
         VALUES (?,?,?,?,?,?,?,?,?,?,?,?)
    ");
        $addline = $add->execute(array($client,$tel,$adresse,$motif,$montant,$depot,$date,$dateins,$statut,'1',$idu,$idr)) or die(print_r($add->errorInfo()));
        return $addline;
    }

    //ajouter une depense
    public function setDepense($client,$tel,$adresse,$motif,$montant,$date,$depot,$dateins,$statut,$idu)
    {   
        $this->client=$client;
        $this->tel=$tel;
        $this->motif=$motif;
        $this->adresse=$adresse;
        $this->montant=$montant;
        $this->date=$date;
        $this->dateins=$dateins;
        $this->depot=$depot;
        $this->statut=$statut;
        $db = getConnection();
        $add = $db->prepare("INSERT INTO tbl_depenses (BENEFICIAIRE,TEL,ADRESSE,MOTIF,MONTANT,DATE,DEPOT,DATEINS,STATUT,IDU) 
         VALUES (?,?,?,?,?,?,?,?,?,?)
    ");
        $addline = $add->execute(array($client,$tel,$adresse,$motif,$montant,$date,$depot,$dateins,$statut,$idu)) or die(print_r($add->errorInfo()));
        return $addline;
    }
     //afficher les ventes de la quincaillerie
     public function getCaisse()
     {
         $db = getConnection();
         $statement = $db->prepare("SELECT tbl_other_entry.ID AS ID,tbl_reparateur.NAME as REP,tbl_other_entry.CLIENT AS CLIENT,tbl_other_entry.MONTANT AS MONTANT,
         tbl_other_entry.MONTANT AS MONTANT,tbl_other_entry.STATUT,tbl_other_entry.DATE AS DATE,tbl_users.NAME AS NAME,tbl_other_entry.MOTIF AS MOTIF,tbl_other_entry.TEL AS TEL
          from tbl_other_entry,tbl_users,tbl_reparateur Where tbl_other_entry.IDU = tbl_users.ID AND tbl_other_entry.IDR=tbl_reparateur.IDR and tbl_other_entry.STATUT ='0' and tbl_other_entry.STATUTR ='1'
          ORDER BY tbl_other_entry.DATE DESC");
         $statement->execute();
         // $total_rows = $statement->rowCount();
         $tbP = array();
         while($data =  $statement->fetch(PDO::FETCH_OBJ)){
             $tbP[] = $data;
         }
          return $tbP;
     }

     //reparation annuler
     public function getRepA()
     {
         $db = getConnection();
         $statement = $db->prepare("SELECT tbl_other_entry.ID AS ID,tbl_reparateur.NAME as REP,tbl_other_entry.CLIENT AS CLIENT,tbl_other_entry.MONTANT AS MONTANT,
         tbl_other_entry.MONTANT AS MONTANT,tbl_other_entry.STATUT,tbl_other_entry.DATE AS DATE,tbl_users.NAME AS NAME,tbl_other_entry.MOTIF AS MOTIF,tbl_other_entry.TEL AS TEL
          from tbl_other_entry,tbl_users,tbl_reparateur Where tbl_other_entry.IDU = tbl_users.ID AND tbl_other_entry.IDR=tbl_reparateur.IDR and tbl_other_entry.STATUT ='2' 
          ORDER BY tbl_other_entry.DATE DESC");
         $statement->execute();
         // $total_rows = $statement->rowCount();
         $tbP = array();
         while($data =  $statement->fetch(PDO::FETCH_OBJ)){
             $tbP[] = $data;
         }
          return $tbP;
     }

     //reparation annuler
     public function getRepE()
     {
         $db = getConnection();
         $statement = $db->prepare("SELECT tbl_other_entry.ID AS ID,tbl_reparateur.NAME as REP,tbl_other_entry.CLIENT AS CLIENT,tbl_other_entry.MONTANT AS MONTANT,
         tbl_other_entry.MONTANT AS MONTANT,tbl_other_entry.STATUT,tbl_other_entry.STATUTR,tbl_other_entry.DATE AS DATE,tbl_users.NAME AS NAME,tbl_other_entry.MOTIF AS MOTIF,tbl_other_entry.TEL AS TEL
          from tbl_other_entry,tbl_users,tbl_reparateur Where tbl_other_entry.IDU = tbl_users.ID AND tbl_other_entry.IDR=tbl_reparateur.IDR and tbl_other_entry.STATUTR ='2' 
          ORDER BY tbl_other_entry.DATE DESC");
         $statement->execute();
         $tbP = array();
         while($data =  $statement->fetch(PDO::FETCH_OBJ)){
             $tbP[] = $data;
         }
          return $tbP;
     }

     public function getRepE1()
     {
         $db = getConnection();
         $statement = $db->prepare("SELECT tbl_other_entry.ID AS ID,tbl_reparateur.NAME as REP,tbl_other_entry.CLIENT AS CLIENT,tbl_other_entry.MONTANT AS MONTANT,
         tbl_other_entry.MONTANT AS MONTANT,tbl_other_entry.STATUT,tbl_other_entry.STATUTR,tbl_other_entry.DATE AS DATE,tbl_users.NAME AS NAME,tbl_other_entry.MOTIF AS MOTIF,tbl_other_entry.TEL AS TEL
         from tbl_other_entry,tbl_users,tbl_reparateur Where tbl_other_entry.IDU = tbl_users.ID AND tbl_other_entry.IDR=tbl_reparateur.IDR and tbl_other_entry.STATUTR ='2' 
         ORDER BY tbl_other_entry.DATE DESC");
         $statement->execute();
         $tbP = array();
         while($data =  $statement->fetch(PDO::FETCH_OBJ)){
             $tbP[] = $data;
         }
          return $tbP;
     }
 

    //depense
    public function getDepense()
    {
        $db = getConnection();
        $statement = $db->prepare("SELECT tbl_depenses.ID AS ID,tbl_depenses.DEPOT as DEPOT,tbl_depenses.BENEFICIAIRE AS BENEFICIAIRE,tbl_depenses.MONTANT AS MONTANT,
       tbl_depenses.STATUT,tbl_depenses.DATE AS DATE,tbl_users.NAME AS NAME,tbl_depenses.MOTIF AS MOTIF 
        from tbl_depenses,tbl_users Where tbl_depenses.IDU = tbl_users.ID  ORDER BY ID DESC");
        $statement->execute();
        // $total_rows = $statement->rowCount();
        $tbP = array();
        while($data =  $statement->fetch(PDO::FETCH_OBJ)){
            $tbP[] = $data;
        }
         return $tbP;
    }
    
     //afficher utilisateur
    //  public function getRepE1()
    //  {
    //      $db = getConnection();
    //      $statement = $db->prepare("SELECT * FROM tbl_reparateur WHERE STATUT = '3' group by IDR DESC");
    //      $statement->execute();
    //      $tbP = array();
    //      while($data =  $statement->fetchObject()){
    //          $tbP[] = $data;
    //      }
    //       return $tbP;
    //  }
 
}