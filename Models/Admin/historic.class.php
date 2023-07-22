<?php 
require_once("connexion.php");

class Historics
{
	//historic_app
    public $ID_ARTICLE;
    public $ARTICLE;
    public $PEREMPTION;
    public $QTE;
    public $PAYSFABR;
    public $DATE_APP;
    public $ID_USER;
     //Historique d'approvisionnement tbl_historic_appro
    //                
     public function setHistoricApp($ID_ARTICLE,$PEREMPTION,$QTE,$PAYSFABR,$DATE_APP,$ID_USER)
    {   
        $this->ID_ARTICLE=$ID_ARTICLE;
        $this->PEREMPTION=$PEREMPTION;
        $this->QTE=$QTE;
        $this->PAYSFABR=$PAYSFABR;
        $this->DATE_APP=$DATE_APP;
        $this->ID_USER=$ID_USER;

    $db = getConnection();
    $add1 = $db->prepare("INSERT INTO tbl_historic_appro (ID_ARTICLE,PEREMPTION,QTE,PAYSFABR,DATE_APP,ID_USER) VALUES (?,?,?,?,?,?)");
        $addline1 = $add1->execute(array($ID_ARTICLE,$PEREMPTION,$QTE,$PAYSFABR,date('Y-m-d H:i:s'),$ID_USER)) or die(print_r($add1->errorInfo()));
       
        return $addline1;
    }

    public function getHistoricApp(){
        $db=getConnection();
        $sql="SELECT tbl_historic_appro.PEREMPTION as PER, tbl_historic_appro.DATE_APP as DATEA,tbl_historic_appro.QTE as QTE,tbl_historic_appro.PAYSFABR as PAYSF,tbl_articles.ARTICLE as ARTICLE,tbl_categories.CATEGORIE AS CAT,
        tbl_users.NAME as NAME FROM tbl_historic_appro,tbl_articles,tbl_users,tbl_categories 
        WHERE tbl_historic_appro.ID_ARTICLE=tbl_articles.ID
         AND tbl_historic_appro.ID_USER=tbl_users.ID
         and tbl_articles.IDCAT=tbl_categories.ID
          ORDER BY tbl_historic_appro.ID DESC";
        $req=$db->query($sql);
        $tbl=array();
        while ($data=$req->fetchObject()) {
            $tbl[]=$data;
        }
        return $tbl;
    }



    public function setHistoricRecM($ARTICLE,$QTE,$COND,$PEREMPTION,$DATE,$IDCAT,$IDU)
    {   
        $this->ARTICLE=$ARTICLE;
        $this->PEREMPTION=$PEREMPTION;
        $this->QTE=$QTE;
        $this->COND=$COND;
        $this->DATE=$DATE;
        $this->IDCAT=$IDCAT;
        $this->IDU=$IDU;

    $db = getConnection();
    $add1 = $db->prepare("INSERT INTO tbl_historic_appro (ARTICLE,QTE,CONDITIONEMMENT,PEREMPTION,DATERECEIVE,IDCAT,IDUSER	
    ) VALUES (?,?,?,?,?,?,?)");
        $addline1 = $add1->execute(array($ARTICLE,$QTE,$COND,$PEREMPTION,date('Y-m-d H:i:s'),$IDCAT,$IDU)) or die(print_r($add1->errorInfo()));
       
        return $addline1;
    }

    public function getHistoricRecM(){
        $db=getConnection();
        $sql="SELECT tbl_users.NAME as user,tbl_stockm.ARTICLE as art,tbl_historic_stockm.QTE as qt,tbl_historic_stockm.DATE_REQ as dte,tbl_categories.CATEGORIE AS cat
        FROM tbl_historic_stockm,tbl_users,tbl_categories,tbl_stockm         
       WHERE tbl_historic_stockm.ID_USER=tbl_users.ID
        AND tbl_historic_stockm.ID_ART=tbl_stockm.ID 
       and tbl_stockm.IDCAT=tbl_categories.ID
        ORDER BY tbl_historic_stockm.ID DESC";
        $req=$db->query($sql);
        $tbl=array();
        while($d=$req->fetchObject()){
             $tbl[]=$d;
        }
        return $tbl;
    }
    
        public function getHistoricRecA(){
        $db=getConnection();
        $sql="SELECT tbl_users.NAME as user,tbl_stocka.ARTICLE as art,tbl_historic_stocka.QTE as qt,tbl_historic_stocka.DATE_REQ as dte,tbl_categories.CATEGORIE AS cat
        FROM tbl_historic_stocka,tbl_users,tbl_categories,tbl_stocka        
       WHERE tbl_historic_stocka.ID_USER=tbl_users.ID
        AND tbl_historic_stocka.ID_ART=tbl_stocka.ID 
       and tbl_stocka.IDCAT=tbl_categories.ID
        ORDER BY tbl_historic_stocka.ID DESC";
        $req=$db->query($sql);
        $tbl=array();
        while($d=$req->fetchObject()){
             $tbl[]=$d;
        }
        return $tbl;
    }
    
        public function getHistoricRecB(){
        $db=getConnection();
        $sql="SELECT tbl_users.NAME as user,tbl_stockb.ARTICLE as art,tbl_historic_stockb.QTE as qt,tbl_historic_stockb.DATE_REQ as dte,tbl_categories.CATEGORIE AS cat
        FROM tbl_historic_stockb,tbl_users,tbl_categories,tbl_stockb         
       WHERE tbl_historic_stockb.ID_USER=tbl_users.ID
        AND tbl_historic_stockb.ID_ART=tbl_stockb.ID 
       and tbl_stockb.IDCAT=tbl_categories.ID
        ORDER BY tbl_historic_stockb.ID DESC";
        $req=$db->query($sql);
        $tbl=array();
        while($d=$req->fetchObject()){
             $tbl[]=$d;
        }
        return $tbl;
    }



    public function getHistoricRecQ(){
        $db=getConnection();
        $sql="SELECT tbl_users.NAME as user,tbl_stockq.ARTICLE as art,tbl_historic_stockq.QTE as qt,tbl_historic_stockq.DATE_REQ as dte,
        tbl_categories.CATEGORIE AS cat FROM tbl_historic_stockq,tbl_users,tbl_categories,tbl_stockq
         WHERE tbl_historic_stockq.ID_USER=tbl_users.ID
         AND tbl_historic_stockq.ID_ART=tbl_stockq.ID 
         and tbl_stockq.IDCAT=tbl_categories.ID
         ORDER BY tbl_historic_stockq.ID DESC;";
        $req=$db->query($sql);
        $tbl=array();
        while($d=$req->fetchObject()){
             $tbl[]=$d;
        }
        return $tbl;
    }
}




 ?>