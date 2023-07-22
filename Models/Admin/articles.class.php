<?php
require_once("connexion.php");

Class Articles
{
    public $statut = 1;
    public $dateins;
    public $article;
    public $prix;
    public $prixv;
    public $qte;
    public $idu;
    public $idcat;
    public $cond;
    public $expired;
    public $fab;
    public $type;
    public $etag;
    public $marque;
    
    //                
     
    //ajouter un article
    public function setArticle($article,$type,$marque,$qte,$prix,$prixv,$etag,$cond,$expired,$fab,$dateins,$statut,$idcat,$idu)
    {   
        $this->idcat=$idcat;
        $this->statut=$statut;
        $this->dateins=$dateins;
        $this->article=$article;
        $this->prix=$prix;
        $this->prixv=$prixv;
        $this->fab=$fab;          
        $this->expired=$expired;
        $this->type=$type;
        $this->marque=$marque;
        $this->cond=$cond;
        $this->idu=$idu;
        $this->qte=$qte;
        $this->etag=$etag;
        $db = getConnection();
        $add1 = $db->prepare("INSERT INTO tbl_articles (ARTICLE,TYPE,MARQUE,QTE,PRIX,PV,ETAG,CONDITIONEMMENT,PEREMPTION,PAYSFABR,DATECREAT,STATUT,IDCAT,IDUSER    
        ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $addline1 = $add1->execute(array($article,$type,$marque,$qte,$prix,$prixv,$etag,$cond,$expired,$fab,$dateins,$statut,$idcat,$idu)) or die(print_r($add1->errorInfo()));
        
        $add2 = $db->prepare("INSERT INTO tbl_stockm (ARTICLE,TYPE,MARQUE,QTE,PRIX,PV,ETAG,CONDITIONEMMENT,PEREMPTION,PAYSFABR,DATERECEIVE,STATUT,IDCAT,IDUSER    
        ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $addline2 = $add2->execute(array($article,$type,$marque,$qte,$prix,$prixv,$etag,$cond,$expired,$fab,$dateins,$statut,$idcat,$idu)) or die(print_r($add2->errorInfo()));
       
        $add3 = $db->prepare("INSERT INTO tbl_stockq (ARTICLE,TYPE,MARQUE,QTE,PRIX,PV,ETAG,CONDITIONEMMENT,PEREMPTION,PAYSFABR,DATERECEIVE,STATUT,IDCAT,IDUSER    
        ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $addline3 = $add3->execute(array($article,$type,$marque,$qte,$prix,$prixv,$etag,$cond,$expired,$fab,$dateins,$statut,$idcat,$idu)) or die(print_r($add3->errorInfo()));
              
        $add4 = $db->prepare("INSERT INTO tbl_stockb (ARTICLE,TYPE,MARQUE,QTE,PRIX,PV,ETAG,CONDITIONEMMENT,PEREMPTION,PAYSFABR,DATERECEIVE,STATUT,IDCAT,IDUSER    
        ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $addline4 = $add4->execute(array($article,$type,$marque,$qte,$prix,$prixv,$etag,$cond,$expired,$fab,$dateins,$statut,$idcat,$idu)) or die(print_r($add3->errorInfo()));
        
        $add5 = $db->prepare("INSERT INTO tbl_stocka (ARTICLE,TYPE,MARQUE,QTE,PRIX,PV,ETAG,CONDITIONEMMENT,PEREMPTION,PAYSFABR,DATERECEIVE,STATUT,IDCAT,IDUSER    
        ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $addline5 = $add5->execute(array($article,$type,$marque,$qte,$prix,$prixv,$etag,$cond,$expired,$fab,$dateins,$statut,$idcat,$idu)) or die(print_r($add3->errorInfo()));
        
        return $addline1;
    }

    
    
    public function Approvisionner($qte,$expired,$dateins,$fab,$idu,$id)
    {   
        $this->fab=$fab;          
        $this->expired=$expired;
        $this->idu=$idu;
        $this->qte=$qte;
        $this->id=$id;
        $db = getConnection();
        $update = $db->prepare("UPDATE tbl_articles SET QTE=?,PEREMPTION=?,DATECREAT=?,PAYSFABR=?,IDUSER=? WHERE ID =?");
        $ok = $update->execute(array($qte,$expired,date('Y-m-d H:i:s'),$fab,$idu,$id)) or die(print_r($update->errorInfo()));
        return $ok;
    }
     
    //RECQUISITIONER LA QUINQ
    public function recquisQ($qte,$dateins,$idu,$id)
    {   
        $this->idu=$idu;
        $this->qte=$qte;
        $this->id=$id;
        $this->dateins=$dateins;
        $db = getConnection();
        $update = $db->prepare("UPDATE tbl_stockq SET QTE=?,DATERECEIVE=?,IDUSER=? WHERE ID =?");
        $ok = $update->execute(array($qte,$dateins,$idu,$id)) or die(print_r($update->errorInfo()));
        return $ok;
    }
    
      public function recquisA($qte,$dateins,$idu,$id)
    {   
        $this->idu=$idu;
        $this->qte=$qte;
        $this->id=$id;
        $this->dateins=$dateins;
        $db = getConnection();
        $update = $db->prepare("UPDATE tbl_stocka SET QTE=?,DATERECEIVE=?,IDUSER=? WHERE ID =?");
        $ok = $update->execute(array($qte,$dateins,$idu,$id)) or die(print_r($update->errorInfo()));
        return $ok;
    }
    
      public function recquisB($qte,$dateins,$idu,$id)
    {   
        $this->idu=$idu;
        $this->qte=$qte;
        $this->id=$id;
        $this->dateins=$dateins;
        $db = getConnection();
        $update = $db->prepare("UPDATE tbl_stockb SET QTE=?,DATERECEIVE=?,IDUSER=? WHERE ID =?");
        $ok = $update->execute(array($qte,$dateins,$idu,$id)) or die(print_r($update->errorInfo()));
        return $ok;
    }
       //ENDOMAGE
       public function endoQ($qte,$dateins,$idu,$id)
       {   
           $this->idu=$idu;
           $this->qte=$qte;
           $this->id=$id;
           $this->dateins=$dateins;
           $db = getConnection();
           $update = $db->prepare("UPDATE tbl_stockq SET QTE=?,DATERECEIVE=?,IDUSER=? WHERE ID =?");
           $ok = $update->execute(array($qte,$dateins,$idu,$id)) or die(print_r($update->errorInfo()));
           return $ok;
       }
       
       
       public function endoA($qte,$dateins,$idu,$id)
       {   
           $this->idu=$idu;
           $this->qte=$qte;
           $this->id=$id;
           $this->dateins=$dateins;
           $db = getConnection();
           $update = $db->prepare("UPDATE tbl_stocka SET QTE=?,DATERECEIVE=?,IDUSER=? WHERE ID =?");
           $ok = $update->execute(array($qte,$dateins,$idu,$id)) or die(print_r($update->errorInfo()));
           return $ok;
       }
       
       
       public function endoB($qte,$dateins,$idu,$id)
       {   
           $this->idu=$idu;
           $this->qte=$qte;
           $this->id=$id;
           $this->dateins=$dateins;
           $db = getConnection();
           $update = $db->prepare("UPDATE tbl_stockb SET QTE=?,DATERECEIVE=?,IDUSER=? WHERE ID =?");
           $ok = $update->execute(array($qte,$dateins,$idu,$id)) or die(print_r($update->errorInfo()));
           return $ok;
       }
       
       
       
       public function EndoRecq($qte,$idu,$id)
       {   
           $this->idu=$idu;
           $this->qte=$qte;
           $this->id=$id;
           $db = getConnection();
           $update = $db->prepare("UPDATE tbl_stockq SET ENDOMAG=?,IDUSER=? WHERE ID =?");
           $ok = $update->execute(array($qte,$idu,$id)) or die(print_r($update->errorInfo()));
           return $ok;
       }
       
        
       public function EndoReca($qte,$idu,$id)
       {   
           $this->idu=$idu;
           $this->qte=$qte;
           $this->id=$id;
           $db = getConnection();
           $update = $db->prepare("UPDATE tbl_stocka SET ENDOMAG=?,IDUSER=? WHERE ID =?");
           $ok = $update->execute(array($qte,$idu,$id)) or die(print_r($update->errorInfo()));
           return $ok;
       }
        
       public function EndoRecb($qte,$idu,$id)
       {   
           $this->idu=$idu;
           $this->qte=$qte;
           $this->id=$id;
           $db = getConnection();
           $update = $db->prepare("UPDATE tbl_stockb SET ENDOMAG=?,IDUSER=? WHERE ID =?");
           $ok = $update->execute(array($qte,$idu,$id)) or die(print_r($update->errorInfo()));
           return $ok;
       }

       public function endoM($qte,$dateins,$idu,$id)
       {   
           $this->idu=$idu;
           $this->qte=$qte;
           $this->id=$id;
           $this->dateins=$dateins;
           $db = getConnection();
           $update = $db->prepare("UPDATE tbl_stockm SET QTE=?,DATERECEIVE=?,IDUSER=? WHERE ID =?");
           $ok = $update->execute(array($qte,$dateins,$idu,$id)) or die(print_r($update->errorInfo()));
           return $ok;
       }
       public function EndoRecm($qte,$idu,$id)
       {   
           $this->idu=$idu;
           $this->qte=$qte;
           $this->id=$id;
           $db = getConnection();
           $update = $db->prepare("UPDATE tbl_stockm SET ENDOMAG=?,IDUSER=? WHERE ID =?");
           $ok = $update->execute(array($qte,$idu,$id)) or die(print_r($update->errorInfo()));
           return $ok;
       }
       //FIN ENDO
    //RECQUISITIONER LE STOCK
    public function recquisM($qte,$dateins,$idu,$id)
    {   
        $this->idu=$idu;
        $this->qte=$qte;
        $this->id=$id;
        $this->dateins=$dateins;
        $db = getConnection();
        $update = $db->prepare("UPDATE tbl_stockm SET QTE=?,DATERECEIVE=?,IDUSER=? WHERE ID =?");
        $ok = $update->execute(array($qte,$dateins,$idu,$id)) or die(print_r($update->errorInfo()));
        return $ok;
    }
    //MISE A JOUR APRES RECQUISITION 
    public function ApprovRecq($qte,$idu,$id)
    {   
        $this->idu=$idu;
        $this->qte=$qte;
        $this->id=$id;
        $db = getConnection();
        $update = $db->prepare("UPDATE tbl_articles SET QTE=?,IDUSER=? WHERE ID =?");
        $ok = $update->execute(array($qte,$idu,$id)) or die(print_r($update->errorInfo()));
        return $ok;
    }

    public function ApprovRecqm($qte,$idu,$id)
    {   
        $this->idu=$idu;
        $this->qte=$qte;
        $this->id=$id;
        $db = getConnection();
        $update = $db->prepare("UPDATE tbl_stockm SET QTE=?,IDUSER=? WHERE ID =?");
        $ok = $update->execute(array($qte,$idu,$id)) or die(print_r($update->errorInfo()));
        return $ok;
    }
    
    public function ApprovRecqq($qte,$idu,$id)
    {   
        $this->idu=$idu;
        $this->qte=$qte;
        $this->id=$id;
        $db = getConnection();
        $update = $db->prepare("UPDATE tbl_stockq SET QTE=?,IDUSER=? WHERE ID =?");
        $ok = $update->execute(array($qte,$idu,$id)) or die(print_r($update->errorInfo()));
        return $ok;
    }
    
    public function ApprovRecqa($qte,$idu,$id)
    {   
        $this->idu=$idu;
        $this->qte=$qte;
        $this->id=$id;
        $db = getConnection();
        $update = $db->prepare("UPDATE tbl_stockq SET QTE=?,IDUSER=? WHERE ID =?");
        $ok = $update->execute(array($qte,$idu,$id)) or die(print_r($update->errorInfo()));
        return $ok;
    }
    
    public function ApprovRecqb($qte,$idu,$id)
    {   
        $this->idu=$idu;
        $this->qte=$qte;
        $this->id=$id;
        $db = getConnection();
        $update = $db->prepare("UPDATE tbl_stockb SET QTE=?,IDUSER=? WHERE ID =?");
        $ok = $update->execute(array($qte,$idu,$id)) or die(print_r($update->errorInfo()));
        return $ok;
    }
       //MISE A JOUR APRES RECQUISITION 
    //    public function ApprovRecm($qte,$idu,$id)
    //    {   
    //        $this->idu=$idu;
    //        $this->qte=$qte;
    //        $this->id=$id;
    //        $db = getConnection();
    //        $update = $db->prepare("UPDATE tbl_articles SET QTE=?,IDUSER=? WHERE ID =?");
    //        $ok = $update->execute(array($qte,$idu,$id)) or die(print_r($update->errorInfo()));
    //        return $ok;
    //    }
       
    public function RecquisitionnerQ($qte,$expired,$dateins,$fab,$idu,$id)
    {   
        $this->fab=$fab;          
        $this->expired=$expired;
        $this->idu=$idu;
        $this->qte=$qte;
        $this->id=$id;
        $db = getConnection();
        $update = $db->prepare("UPDATE tbl_stockq SET QTE=?,PEREMPTION=?,DATECREAT=?,PAYSFABR=?,IDUSER=? WHERE ID =?");
        $ok = $update->execute(array($qte,$expired,date('Y-m-d H:i:s'),$fab,$idu,$id)) or die(print_r($update->errorInfo()));
        return $ok;
    }

    public function RecquisitionnerM($qte,$expired,$dateins,$fab,$idu,$id)
    {   
        $this->fab=$fab;          
        $this->expired=$expired;
        $this->idu=$idu;
        $this->qte=$qte;
        $this->id=$id;
        $db = getConnection();
        $update = $db->prepare("UPDATE tbl_stockm SET QTE=?,PEREMPTION=?,DATECREAT=?,PAYSFABR=?,IDUSER=? WHERE ID =?");
        $ok = $update->execute(array($qte,$expired,date('Y-m-d H:i:s'),$fab,$idu,$id)) or die(print_r($update->errorInfo()));
        return $ok;
    }
    
    public function RecquisitionnerA($qte,$expired,$dateins,$fab,$idu,$id)
    {   
        $this->fab=$fab;          
        $this->expired=$expired;
        $this->idu=$idu;
        $this->qte=$qte;
        $this->id=$id;
        $db = getConnection();
        $update = $db->prepare("UPDATE tbl_stocka SET QTE=?,PEREMPTION=?,DATECREAT=?,PAYSFABR=?,IDUSER=? WHERE ID =?");
        $ok = $update->execute(array($qte,$expired,date('Y-m-d H:i:s'),$fab,$idu,$id)) or die(print_r($update->errorInfo()));
        return $ok;
    }

    public function RecquisitionnerB($qte,$expired,$dateins,$fab,$idu,$id)
    {   
        $this->fab=$fab;          
        $this->expired=$expired;
        $this->idu=$idu;
        $this->qte=$qte;
        $this->id=$id;
        $db = getConnection();
        $update = $db->prepare("UPDATE tbl_stockb SET QTE=?,PEREMPTION=?,DATECREAT=?,PAYSFABR=?,IDUSER=? WHERE ID =?");
        $ok = $update->execute(array($qte,$expired,date('Y-m-d H:i:s'),$fab,$idu,$id)) or die(print_r($update->errorInfo()));
        return $ok;
    }
    
    public function Approvisionner2($expired,$fab,$idu,$id)
    {   
        $this->fab=$fab;          
        $this->expired=$expired;
        $this->idu=$idu;
        $this->id=$id;
        $db = getConnection();
        $update1 = $db->prepare("UPDATE tbl_stockm SET PEREMPTION=?,PAYSFABR=?,IDUSER=? WHERE ID =?");
        $ok1 = $update1->execute(array($expired,$fab,$idu,$id)) or die(print_r($update1->errorInfo()));
        return $ok1;
         
    }
    
    public function Approvisionner3($expired,$fab,$idu,$id)
    {   
        $this->fab=$fab;          
        $this->expired=$expired;
        $this->idu=$idu;
        $this->id=$id;
        $db = getConnection();       
        $update2 = $db->prepare("UPDATE tbl_stockq SET PEREMPTION=?,PAYSFABR=?,IDUSER=? WHERE ID =?");
        $ok = $update2->execute(array($expired,$fab,$idu,$id)) or die(print_r($update2->errorInfo()));
        return $ok;
         
    }
    
    
    public function Approvisionner4($expired,$fab,$idu,$id)
    {   
        $this->fab=$fab;          
        $this->expired=$expired;
        $this->idu=$idu;
        $this->id=$id;
        $db = getConnection();       
        $update2 = $db->prepare("UPDATE tbl_stocka SET PEREMPTION=?,PAYSFABR=?,IDUSER=? WHERE ID =?");
        $ok = $update2->execute(array($expired,$fab,$idu,$id)) or die(print_r($update2->errorInfo()));
        return $ok;
         
    }

    public function Approvisionner5($expired,$fab,$idu,$id)
    {   
        $this->fab=$fab;          
        $this->expired=$expired;
        $this->idu=$idu;
        $this->id=$id;
        $db = getConnection();       
        $update2 = $db->prepare("UPDATE tbl_stockb SET PEREMPTION=?,PAYSFABR=?,IDUSER=? WHERE ID =?");
        $ok = $update2->execute(array($expired,$fab,$idu,$id)) or die(print_r($update2->errorInfo()));
        return $ok;
         
    }

     //afficher les catégories
    public function getArticlesId() 
    {
        $db = getConnection();
        $statement = $db->prepare("SELECT tbl_articles.ID,tbl_users.NAME as USER,tbl_articles.CONDITIONEMMENT,tbl_articles.DATECREAT,
        tbl_articles.ARTICLE,tbl_articles.ETAG,tbl_articles.QTE,tbl_articles.PRIX,tbl_articles.PEREMPTION,tbl_articles.STATUT,tbl_categories.CATEGORIE,
        tbl_articles.TYPE,tbl_articles.MARQUE
         FROM tbl_articles,tbl_categories,tbl_users
         WHERE  tbl_articles.IDCAT=tbl_categories.ID
         AND tbl_users.ID = tbl_articles.IDUSER order by tbl_articles.ARTICLE ASC,tbl_articles.MARQUE ASC");
        $statement->execute();
        $tbP = array();
        while($data =  $statement->fetchObject()){
            $tbP[] = $data;
        }
         return $tbP;
    }

     //afficher tous les articles epuises
     public function getOutStock()
     {
         $db = getConnection();
         $statement = $db->prepare("select * from tbl_articles,tbl_categories WHERE tbl_articles.IDCAT=tbl_categories.ID && QTE='0' && DATECREAT !='0000-00-00'");
         $statement->execute();
         $tbP = array();
         while($data =  $statement->fetchObject()){
             $tbP[] = $data;
         }
          return $tbP;
     }

     //afficher tous les articles epuises
     public function getExpired()
     {
         $db = getConnection();
         $drug_expiry_date = date("Y-m-d", strtotime(date("Y-m-d")));
         $statement = $db->prepare("select * FROM tbl_articles,tbl_categories WHERE tbl_articles.IDCAT=tbl_categories.ID AND tbl_articles.PEREMPTION >= '$drug_expiry_date' AND tbl_articles.DATECREAT !='0000-00-00'");
         $statement->execute();
         $tbP = array();
         while($data =  $statement->fetchObject()){
             $tbP[] = $data;
         }
          return $tbP;
     }
      //afficher les catégories
      public function StockQId($id)
      {
          $db = getConnection();
          $statement = $db->prepare("SELECT * FROM tbl_stockq  WHERE ID=? LIMIT 1");
          $statement->execute(array($id));
          $tbP = array();
          while($data =  $statement->fetchObject()){
              $tbP[] = $data;
          }
           return $tbP;
      }
      
      public function StockAId($id)
      {
          $db = getConnection();
          $statement = $db->prepare("SELECT * FROM tbl_stocka  WHERE ID=? LIMIT 1 ");
          $statement->execute(array($id));
          $tbP = array();
          while($data =  $statement->fetchObject()){
              $tbP[] = $data;
          }
           return $tbP;
      }
      
      public function StockBId($id)
      {
          $db = getConnection();
          $statement = $db->prepare("SELECT * FROM tbl_stockb  WHERE ID=? LIMIT 1");
          $statement->execute(array($id));
          $tbP = array();
          while($data =  $statement->fetchObject()){
              $tbP[] = $data;
          }
           return $tbP;
      }
      //STOCK QUINQ
      public function getQ()
      {
          $db = getConnection();
          $statement = $db->prepare("SELECT tbl_stockq.ID,tbl_users.NAME as USER,tbl_stockq.CONDITIONEMMENT,
          tbl_stockq.ARTICLE,tbl_stockq.QTE,tbl_stockq.PRIX,tbl_stockq.PEREMPTION,tbl_stockq.STATUT,tbl_categories.CATEGORIE AS CATEGORIE,
          tbl_stockq.TYPE,tbl_stockq.MARQUE,tbl_stockq.ENDOMAG
          FROM tbl_stockq,tbl_categories,tbl_users
         WHERE  tbl_stockq.IDCAT=tbl_categories.ID
         AND tbl_users.ID = tbl_stockq.IDUSER order by tbl_stockq.MARQUE ASC");
          $statement->execute();
          $tbP = array();
          while($data =  $statement->fetchObject()){
              $tbP[] = $data;
          }
           return $tbP;
      }
      
      
      public function getA()
      {
          $db = getConnection();
          $statement = $db->prepare("SELECT tbl_stocka.ID,tbl_users.NAME as USER,tbl_stocka.CONDITIONEMMENT,
          tbl_stocka.ARTICLE,tbl_stocka.QTE,tbl_stocka.PRIX,tbl_stocka.PEREMPTION,tbl_stocka.STATUT,tbl_categories.CATEGORIE AS CATEGORIE,
          tbl_stocka.TYPE,tbl_stocka.MARQUE,tbl_stocka.ENDOMAG
          FROM tbl_stocka,tbl_categories,tbl_users
         WHERE  tbl_stocka.IDCAT=tbl_categories.ID
         AND tbl_users.ID = tbl_stocka.IDUSER  order by tbl_stocka.MARQUE ASC");
          $statement->execute();
          $tbP = array();
          while($data =  $statement->fetchObject()){
              $tbP[] = $data;
          }
           return $tbP;
      }
      
      
      public function getB()
      {
          $db = getConnection();
          $statement = $db->prepare("SELECT tbl_stockb.ID,tbl_users.NAME as USER,tbl_stockb.CONDITIONEMMENT,
          tbl_stockb.ARTICLE,tbl_stockb.QTE,tbl_stockb.PRIX,tbl_stockb.PEREMPTION,tbl_stockb.STATUT,tbl_categories.CATEGORIE AS CATEGORIE,
          tbl_stockb.TYPE,tbl_stockb.MARQUE,tbl_stockb.ENDOMAG
          FROM tbl_stockb,tbl_categories,tbl_users
         WHERE  tbl_stockb.IDCAT=tbl_categories.ID
         AND tbl_users.ID = tbl_stockb.IDUSER order by tbl_stockb.ARTICLE ASC");
          $statement->execute();
          $tbP = array();
          while($data =  $statement->fetchObject()){
              $tbP[] = $data;
          }
           return $tbP;
      }
    
    
      //STOCK MAGASIN
      public function getM()
      {
          $db = getConnection();
          $statement = $db->prepare("SELECT tbl_stockm.ID,tbl_users.NAME as USER,tbl_stockm.CONDITIONEMMENT,
          tbl_stockm.ARTICLE,tbl_stockm.QTE,tbl_stockm.PRIX,tbl_stockm.PEREMPTION,tbl_stockm.STATUT,tbl_categories.CATEGORIE AS CATEGORIE,
          tbl_stockm.TYPE,tbl_stockm.MARQUE,tbl_stockm.ENDOMAG
          FROM tbl_stockm,tbl_categories,tbl_users
         WHERE  tbl_stockm.IDCAT=tbl_categories.ID
         AND tbl_users.ID = tbl_stockm.IDUSER order by tbl_stockm.MARQUE ASC ");
          $statement->execute();
          $tbP = array();
          while($data =  $statement->fetchObject()){
              $tbP[] = $data;
          }
           return $tbP;
      }
    
    public function OutOfStock($table){
        $db = getConnection();
        $statement =$db->prepare("SELECT * FROM tbl_articles WHERE QTE <= 20 LIMIT 5"); 
         $statement->execute();
        $tbP = array();
        while($data =  $statement->fetchObject()){
            $tbP[] = $data;
        }
         return $tbP;
    }
    public function StockMId($id)
    {
        $db = getConnection();
        $statement = $db->prepare("SELECT * FROM tbl_stockm  WHERE ID=? LIMIT 1");
        $statement->execute(array($id));
        $tbP = array();
        while($data =  $statement->fetchObject()){
            $tbP[] = $data;
        }
         return $tbP;
    }
  
    public function getArticleId($idart)
    {
        $db = getConnection();
        $matP = $db->prepare("SELECT tbl_articles.ID,tbl_articles.ARTICLE,tbl_articles.QTE,tbl_articles.PRIX,tbl_articles.PEREMPTION,tbl_articles.STATUT,tbl_categories.CATEGORIE,tbl_articles.PAYSFABR  FROM tbl_articles,tbl_categories WHERE tbl_articles.IDCAT=tbl_categories.ID
         AND tbl_articles.ID=? LIMIT 1");
        $matP->execute(array($idart));
        $res = array();
        while($data = $matP->fetchObject())
        {
            $res[] = $data;
        }
        return $res;
    }
    public function deleteArt($idcat)
    {
        $db = getConnection();

        $delete =  $db->prepare("DELETE FROM tbl_articles WHERE ID =?");
        $delete1 = $db->prepare("DELETE FROM tbl_stockm WHERE ID =?");
        $delete2 = $db->prepare("DELETE FROM tbl_stockq WHERE ID =?");
        $delete3 = $db->prepare("DELETE FROM tbl_stocka WHERE ID =?");
        $delete4 = $db->prepare("DELETE FROM tbl_stockb WHERE ID =?");

        $ok = $delete->execute(array($idcat));
        $ok1 = $delete1->execute(array($idcat));
        $ok2 = $delete2->execute(array($idcat));
        $ok3 = $delete3->execute(array($idcat));
        $ok4 = $delete4->execute(array($idcat));
        return $ok;
    }
    
     public function activArt($idart){
         $db = getConnection();
         $sql =$db->prepare( "UPDATE tbl_articles SET STATUT='1' where ID=?");
         $ok = $sql->execute(array($idart));
        return $ok;
     }
     
    public function deactivArt($idcat){
        $db = getConnection();
        $sql =$db->prepare( "UPDATE tbl_articles SET STATUT='0' WHERE QTE='0' AND ID=?");
        $ok = $sql->execute(array($idcat));
        return $ok;
    }


//    Historique requisitionnement metropole
public function setHistoricReqM($id_art,$qte,$dateins,$idu)
    {   
        $db = getConnection();
        $add1 = $db->prepare("INSERT INTO tbl_historic_stockq (ID_ART,QTE,DATE_REQ,ID_USER) VALUES (?,?,?,?)");
        $addline1 = $add1->execute(array($id_art,$qte,date('Y-m-d H:i:s'),$idu)) or die(print_r($add1->errorInfo()));
        
        return $addline1;
    }

 //    Historique requisitionnement atlas
public function setHistoricReqQ($id_art,$qte,$dateins,$idu)
{   
    $db = getConnection();
    $add1 = $db->prepare("INSERT INTO tbl_historic_stockm (ID_ART,QTE,DATE_REQ,ID_USER) VALUES (?,?,?,?)");
    $addline1 = $add1->execute(array($id_art,$qte,date('Y-m-d H:i:s'),$idu)) or die(print_r($add1->errorInfo()));
    
    return $addline1;
}   


 //    Historique requisitionnement atlas
public function setHistoricReqA($id_art,$qte,$dateins,$idu)
{   
    $db = getConnection();
    $add1 = $db->prepare("INSERT INTO tbl_historic_stocka (ID_ART,QTE,DATE_REQ,ID_USER) VALUES (?,?,?,?)");
    $addline1 = $add1->execute(array($id_art,$qte,date('Y-m-d H:i:s'),$idu)) or die(print_r($add1->errorInfo()));
    
    return $addline1;
}   


 //    Historique requisitionnement atlas
public function setHistoricReqB($id_art,$qte,$dateins,$idu)
{   
    $db = getConnection();
    $add1 = $db->prepare("INSERT INTO tbl_historic_stockb (ID_ART,QTE,DATE_REQ,ID_USER) VALUES (?,?,?,?)");
    $addline1 = $add1->execute(array($id_art,$qte,date('Y-m-d H:i:s'),$idu)) or die(print_r($add1->errorInfo()));
    
    return $addline1;
}   




   
}
?>