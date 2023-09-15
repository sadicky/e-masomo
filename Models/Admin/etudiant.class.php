<?php
require_once("connexion.php");

Class Etudiant
{
    //ajouter un Admin
    public function setEtudiant($nom,$prenom,$email,$sexe,$mat,$dob,$niv,$tel,$promo,$code,$pwd)
    {   
        $db = getConnection();
        $add = $db->prepare("INSERT INTO tbl_etudiants(nom,prenom,email,sexe,mat,dob,classe,tel,promo,code,pwd)
         VALUES (?,?,?,?,?,?,?,?,?,?,?)");
        $addline = $add->execute(array($nom,$prenom,$email,$sexe,$mat,$dob,$niv,$tel,$promo,$code,$pwd));
        return $addline;
    }

    public function countE(){
        $db = getConnection();
        $q= $db->query("SELECT count(*) as nbre
        from tbl_etudiants");
        $res = $q->fetchObject();
        return $res;
    } 

    public function setProfCours($prof,$cours,$promo)
    {   
        $db = getConnection();
        $add = $db->prepare("INSERT INTO tbl_profcours(prof, cours, promo)
         VALUES (?,?,?)");
        $addline = $add->execute(array($prof,$cours,$promo));
        return $addline;
    }
    
    public function setMailVerification($email,$code)
    {   
        $db = getConnection();
        $add = $db->query("UPDATE tbl_etudiants SET verified_at = NOW(), access='1' WHERE email = '$email' AND code = $code");
        $addline =$add->rowCount();
        if ($addline){
            echo 'Success: At least 1 row was affected.';
        } else{
            echo 'Failure: 0 rows were affected.';
        }
        return $addline;
    }
   
    //afficher utilisateur
    public function getEtudiants()
    {
        $db = getConnection();
        $statement = $db->prepare("SELECT tbl_etudiants.verified_at, tbl_etudiants.access,tbl_etudiants.mat,tbl_etudiants.nom,tbl_etudiants.prenom,tbl_classes.classe as classe,tbl_promo.promo as promo,tbl_dep.dep
        FROM tbl_etudiants,tbl_promo,tbl_classes,tbl_dep
        WHERE tbl_etudiants.classe=tbl_classes.classe_id
        and tbl_classes.dep_id=tbl_dep.dep_id
       AND tbl_etudiants.promo=tbl_promo.promo_id");
        $statement->execute();
        $tbP = array();
        while($data =  $statement->fetchObject()){
            $tbP[] = $data;
        }
         return $tbP;
    }
    public function getEtudiantId($id)
    {
        $db = getConnection();
        $statement = $db->prepare("SELECT tbl_etudiants.verified_at, tbl_etudiants.access,tbl_promo.promo_id,
        tbl_etudiants.mat,tbl_etudiants.nom,tbl_etudiants.prenom,tbl_classes.classe,tbl_promo.promo,
        tbl_dep.dep, tbl_etudiants.access, tbl_etudiants.photo, tbl_etudiants.sexe, tbl_etudiants.tel, tbl_etudiants.email,
        tbl_etudiants.dob,tbl_classes.classe_id
        FROM tbl_etudiants,tbl_promo,tbl_classes,tbl_dep
        WHERE tbl_etudiants.classe=tbl_classes.classe_id
        and tbl_classes.dep_id=tbl_dep.dep_id
       AND tbl_etudiants.promo=tbl_promo.promo_id and tbl_etudiants.mat=?");
        $statement->execute([$id]);
        $tbP =  $statement->fetchObject();
         return $tbP;
    }


    public function getProfCoursId2($id)
    {
        $db = getConnection();
        $statement = $db->prepare("SELECT  tbl_cours.cours_id as cours_id,tbl_cours.cours as cours,tbl_classes.classe as classe,tbl_promo.promo as promo
         FROM tbl_profcours,tbl_cours,tbl_promo,tbl_classes,tbl_prof 
         WHERE  tbl_profcours.prof=tbl_prof.prof_id AND tbl_profcours.cours=tbl_cours.cours_id AND tbl_profcours.promo=tbl_promo.promo_id
        AND tbl_cours.classe=tbl_classes.classe_id AND tbl_prof.mat=?");
        $statement->execute([$id]);
        $tbP = array();
        while($data =  $statement->fetchObject()){
            $tbP[] = $data;
        }
         return $tbP;
    }


    public function getEtudiantEmail($email)
    {
        $db = getConnection();
        $statement = $db->prepare("SELECT email FROM tbl_etudiants WHERE email = ?");
        $statement->execute([$email]);
        $tbP = $statement->fetchObject();
        return $tbP;
    }

    
  
    public function getProfCoursId($id)
    {
        $db = getConnection();
        $matP = $db->prepare("SELECT tbl_cours.cours_id as cours_id,tbl_cours.cours as cours,tbl_classes.classe as classe,tbl_promo.promo as promo
        FROM tbl_profcours,tbl_cours,tbl_promo,tbl_classes,tbl_prof 
        WHERE  tbl_profcours.prof=tbl_prof.prof_id AND tbl_profcours.cours=tbl_cours.cours_id AND tbl_profcours.promo=tbl_promo.promo_id
       AND tbl_cours.classe=tbl_classes.classe_id AND tbl_prof.mat=?");
        $matP->execute(array($id));
        $res = $matP->fetchAll(PDO::FETCH_OBJ);
        return $res;
    }
    
    public function getProfId($id)
    {
        $db = getConnection();
        $statement = $db->prepare("SELECT * FROM tbl_etudiants WHERE mat = ?");
        $statement->execute([$id]);
        $tbP = $statement->fetchObject();
        return $tbP;
    }
    
    
    public function deleteMarket($id){
        $db = getConnection();
        $sql =$db->prepare( "DELETE FROM tbl_marketters WHERE market_id=?");
        $ok = $sql->execute(array($id));
       return $ok;
    }

   
      //tbl_etudiants inscrit
      public function settbl_etudiantsIns($montant,$tbl_etudiants,$dateins)
      {   
          $db = getConnection();
          $add = $db->prepare("INSERT INTO tbl_etudiantsinsc(MONTANT,IDEL,DATEINS) VALUES (?,?,?)");
          $addline = $add->execute(array($montant,$tbl_etudiants,$dateins)) or die(print_r($add->errorInfo()));
          return $addline;
      }
      public function tbl_etudiantsInsUpdate($access,$id)
      {
          $db = getConnection();
          $update = $db->prepare("UPDATE tbl_etudiants SET ACCESS=?  WHERE ID =?");
          $ok = $update->execute(array($access,$id)) or die(print_r($update->errorInfo()));
          return $ok;
      }
      public function gettbl_etudiantsIns($id)
      {
          $db = getConnection();
          $matP = $db->prepare("SELECT tbl_etudiants.ID as ID, tbl_etudiants.ACCESS, tbl_etudiants.NOM, tbl_etudiants.PRENOM, tbl_etudiants.SEXE,tbl_etudiants.MATRICULE,
          classe.CLASSE,options.OPT,section.SECTION,asco.AS,tbl_etudiants.TEL as TEL,tbl_etudiants.DOB as DOB, tbl_etudiantsinsc.DATEINS as DATEINS,tbl_etudiantsinsc.MONTANT as MONTANT
           FROM tbl_etudiants,asco,classe,options,section,tbl_etudiantsinsc
          WHERE tbl_etudiants.IDCLA=classe.IDCLA AND tbl_etudiants.IDAS=asco.ID and classe.IDOPT=options.IDOPT
          AND options.IDSECT=section.IDSECT and tbl_etudiants.ID=tbl_etudiantsinsc.IDEL AND tbl_etudiants.MATRICULE=? LIMIT 1");
          $matP->execute(array($id));
          $res = $matP->fetchObject();
          return $res;
      }
  
    //   afficher prof
      public function gettbl_etudiantss()
      {
          $db = getConnection();
          $statement = $db->prepare("SELECT tbl_etudiants.ID as ID, tbl_etudiants.ACCESS, tbl_etudiants.IMAGE, tbl_etudiants.NOM, tbl_etudiants.PRENOM, tbl_etudiants.SEXE,tbl_etudiants.MATRICULE,
          classe.CLASSE,options.OPT,section.SECTION,asco.AS FROM tbl_etudiants,asco,classe,options,section
          WHERE tbl_etudiants.IDCLA=classe.IDCLA AND tbl_etudiants.IDAS=asco.ID  and classe.IDOPT=options.IDOPT
          AND options.IDSECT=section.IDSECT");
          $statement->execute();
          $tbP = array();
          while($data =  $statement->fetchObject()){
              $tbP[] = $data;
          }
           return $tbP;
      }
  
      Public function gettbl_etudiantss2()
      {
          $db = getConnection();
          $statement = $db->prepare("SELECT tbl_etudiants.ID as ID, tbl_etudiants.ACCESS, tbl_etudiants.IMAGE, tbl_etudiants.NOM, tbl_etudiants.PRENOM, tbl_etudiants.SEXE,tbl_etudiants.MATRICULE,
          classe.CLASSE,options.OPT,section.SECTION FROM tbl_etudiants,classe,options,section
          WHERE tbl_etudiants.IDCLA=classe.IDCLA AND classe.IDOPT=options.IDOPT
          AND options.IDSECT=section.IDSECT");
          $statement->execute();
          $tbP = array();
          while($data =  $statement->fetchObject()){
              $tbP[] = $data;
          }
           return $tbP;
      }
      public function gettbl_etudiantssAdmis()
      {
          $db = getConnection();
          $statement = $db->prepare("SELECT tbl_etudiants.ID as ID,tbl_etudiants.IMAGE,  tbl_etudiants.ACCESS, tbl_etudiants.NOM, tbl_etudiants.PRENOM, tbl_etudiants.SEXE,tbl_etudiants.MATRICULE,
          classe.CLASSE,options.OPT,section.SECTION,asco.AS FROM tbl_etudiants,asco,classe,options,section
          WHERE tbl_etudiants.IDCLA=classe.IDCLA AND tbl_etudiants.IDAS=asco.ID and classe.IDOPT=options.IDOPT
          AND options.IDSECT=section.IDSECT and tbl_etudiants.ACCESS='1'");
          $statement->execute();
          $tbP = array();
          while($data =  $statement->fetchObject()){
              $tbP[] = $data;
          }
           return $tbP;
      }
    //par matr
      public function gettbl_etudiantsId($id)
      {
          $db = getConnection();
          $matP = $db->prepare("SELECT tbl_etudiants.ID as ID,tbl_etudiants.IMAGE, classe.IDCLA as IDCLA, tbl_etudiants.ACCESS, tbl_etudiants.NOM, tbl_etudiants.EMAIL, tbl_etudiants.PRENOM, tbl_etudiants.SEXE,tbl_etudiants.MATRICULE,
          classe.CLASSE,options.OPT,tbl_etudiants.IDAS,section.SECTION,asco.AS,tbl_etudiants.TEL as TEL,tbl_etudiants.DOB as DOB FROM tbl_etudiants,asco,classe,options,section
          WHERE tbl_etudiants.IDCLA=classe.IDCLA AND tbl_etudiants.IDAS=asco.ID and classe.IDOPT=options.IDOPT
          AND options.IDSECT=section.IDSECT AND tbl_etudiants.MATRICULE=? LIMIT 1");
          $matP->execute(array($id));
          $res = $matP->fetchObject();
          return $res;
      }
  
      
      public function gettbl_etudiantsPM($id)
      {
          $db = getConnection();
          $matP = $db->prepare("SELECT minerval.MONTANT as PMONTANT,minerval.REC AS RECU,minerval.DETAIL AS DET, 
          classe.IDCLA as IDCLA,minerval.DATEINS AS DATEA,
          tbl_etudiants.NOM, tbl_etudiants.PRENOM,tbl_etudiants.MATRICULE, classe.CLASSE,options.OPT,tbl_etudiants.IDAS,section.SECTION,asco.AS,
          fs.MONTANT as MONTANT FROM tbl_etudiants,minerval,fs,asco,classe,options,section
           WHERE tbl_etudiants.IDCLA=classe.IDCLA AND tbl_etudiants.IDAS=asco.ID and classe.IDOPT=options.IDOPT
           AND options.IDSECT=section.IDSECT  AND minerval.IDAS=asco.ID
           AND fs.IDFS=minerval.IDFS AND minerval.IDCL=classe.IDCLA 
           AND minerval.IDEL=tbl_etudiants.ID AND tbl_etudiants.MATRICULE=?");
          $matP->execute(array($id));
          $tbP = array();
          while($data =  $matP->fetchObject()){
              $tbP[] = $data;
          }
           return $tbP;
      }
      
      public function getElAbs($id)
      {
          $db = getConnection();
          $matP = $db->prepare("SELECT classe.IDCLA as IDCLA, presence.STATUT, tbl_etudiants.NOM, tbl_etudiants.PRENOM,
           presence.DATEA, classe.CLASSE,options.OPT,section.SECTION,asco.AS,tbl_etudiants.MATRICULE,tbl_etudiants.SEXE
          FROM tbl_etudiants,asco,classe,options,section,presence
          WHERE tbl_etudiants.IDCLA=classe.IDCLA AND tbl_etudiants.IDAS=asco.ID and classe.IDOPT=options.IDOPT and tbl_etudiants.ID=presence.IDEL 
          AND presence.IDCL=classe.IDCLA AND presence.IDAS=asco.ID AND options.IDSECT=section.IDSECT and tbl_etudiants.ACCESS='1' 
          AND tbl_etudiants.MATRICULE=?");
          $matP->execute(array($id));
          $tbP = array();
          while($data =  $matP->fetchObject()){
              $tbP[] = $data;
          }
           return $tbP;
      }
       
      public function getElAbsCount($id)
      {
          $db = getConnection();
          $matP = $db->prepare("SELECT count(presence.STATUT) AS STATUT
          FROM tbl_etudiants,asco,classe,options,section,presence
          WHERE tbl_etudiants.IDCLA=classe.IDCLA AND tbl_etudiants.IDAS=asco.ID and classe.IDOPT=options.IDOPT and tbl_etudiants.ID=presence.IDEL 
          AND presence.IDCL=classe.IDCLA AND presence.IDAS=asco.ID AND options.IDSECT=section.IDSECT and tbl_etudiants.ACCESS='1' 
          AND tbl_etudiants.MATRICULE=? AND presence.STATUT='A' LIMIT 1");
          $matP->execute(array($id));
          $res = $matP->fetchObject();
          return $res;
      }
      
      public function gettbl_etudiantsPMT($id)
      {
          $db = getConnection();
          $matP = $db->prepare("SELECT SUM(minerval.MONTANT) AS MONTANT FROM tbl_etudiants,minerval,fs,asco,classe,options,section
           WHERE tbl_etudiants.IDCLA=classe.IDCLA AND tbl_etudiants.IDAS=asco.ID and classe.IDOPT=options.IDOPT
           AND options.IDSECT=section.IDSECT  AND minerval.IDAS=asco.ID
           AND fs.IDFS=minerval.IDFS AND minerval.IDCL=classe.IDCLA 
           AND minerval.IDEL=tbl_etudiants.ID AND tbl_etudiants.MATRICULE=?");
          $matP->execute(array($id));
          $res = $matP->fetchObject();
          return $res;
      }
      
      public function getEtudiantClasse($idc,$idas)
      {
          $db = getConnection();
          $matP = $db->prepare("SELECT tbl_etudiants.etudiant_id,tbl_etudiants.photo, tbl_classes.classe_id, tbl_etudiants.email,tbl_etudiants.tel,
       tbl_etudiants.nom, tbl_etudiants.prenom, tbl_etudiants.sexe,tbl_etudiants.mat,tbl_classes.classe,tbl_promo.promo
          FROM tbl_etudiants,tbl_promo,tbl_classes,tbl_dep
          WHERE tbl_etudiants.classe=tbl_classes.classe_id AND tbl_etudiants.promo=tbl_promo.promo_id and tbl_classes.dep_id=tbl_dep.dep_id
          and tbl_etudiants.access='1' AND tbl_etudiants.classe=? AND tbl_etudiants.promo=?");
          $matP->execute(array($idc,$idas));
          $tbP = $matP->fetchObject();
           return $tbP;
      }

      public function getEtudiantClasse2($idc,$idas)
      {
          $db = getConnection();
          $matP = $db->prepare("SELECT tbl_etudiants.etudiant_id,tbl_etudiants.photo, tbl_classes.classe_id, tbl_etudiants.email,tbl_etudiants.tel,
       tbl_etudiants.nom, tbl_etudiants.prenom, tbl_etudiants.sexe,tbl_etudiants.mat,tbl_classes.classe,tbl_promo.promo
          FROM tbl_etudiants,tbl_promo,tbl_classes,tbl_dep
          WHERE tbl_etudiants.classe=tbl_classes.classe_id AND tbl_etudiants.promo=tbl_promo.promo_id and tbl_classes.dep_id=tbl_dep.dep_id
          and tbl_etudiants.access='1' AND tbl_etudiants.classe=? AND tbl_etudiants.promo=?");
          $matP->execute(array($idc,$idas));
          $tbP = array();
          while($data =  $matP->fetchObject()){
              $tbP[] = $data;
          }
           return $tbP;
      }

      public function gettbl_etudiantssClasse($idc,$idas)
      {
          $db = getConnection();
          $matP = $db->prepare("SELECT tbl_etudiants.ID as ID,tbl_etudiants.IMAGE, classe.IDCLA as IDCLA, tbl_etudiants.ACCESS, tbl_etudiants.NOM, tbl_etudiants.PRENOM, tbl_etudiants.SEXE,tbl_etudiants.MATRICULE,
          classe.CLASSE,options.OPT,section.SECTION,asco.AS
          FROM tbl_etudiants,asco,classe,options,section
          WHERE tbl_etudiants.IDCLA=classe.IDCLA AND tbl_etudiants.IDAS=asco.ID and classe.IDOPT=options.IDOPT
          AND options.IDSECT=section.IDSECT and tbl_etudiants.ACCESS='1' AND tbl_etudiants.IDCLA=? AND tbl_etudiants.IDAS=?");
          $matP->execute(array($idc,$idas));
          $tbP = array();
          while($data =  $matP->fetchObject()){
              $tbP[] = $data;
          }
           return $tbP;
      }
      
      public function gettbl_etudiantssClasseAbs($idc,$idas,$date)
      {
          $db = getConnection();
          $matP = $db->prepare("SELECT classe.IDCLA as IDCLA, presence.STATUT, tbl_etudiants.NOM, tbl_etudiants.PRENOM,
           presence.DATEA, classe.CLASSE,options.OPT,section.SECTION,asco.AS,tbl_etudiants.MATRICULE,tbl_etudiants.SEXE
          FROM tbl_etudiants,asco,classe,options,section,presence
          WHERE tbl_etudiants.IDCLA=classe.IDCLA AND tbl_etudiants.IDAS=asco.ID and classe.IDOPT=options.IDOPT and tbl_etudiants.ID=presence.IDEL 
          AND presence.IDCL=classe.IDCLA AND presence.IDAS=asco.ID AND options.IDSECT=section.IDSECT and tbl_etudiants.ACCESS='1' 
          AND tbl_etudiants.IDCLA=? AND tbl_etudiants.IDAS=? and presence.DATEA=?");
          $matP->execute(array($idc,$idas,$date));
          $tbP = array();
          while($data =  $matP->fetchObject()){
              $tbP[] = $data;
          }
           return $tbP;
      }
      
      public function gettbl_etudiantssClasseAbs2($idc,$idas,$date)
      {
          $db = getConnection();
          $matP = $db->prepare("SELECT  classe.IDCLA as IDCLA, presence.STATUT, tbl_etudiants.NOM, tbl_etudiants.PRENOM,
           presence.DATEA,  classe.CLASSE,options.OPT,section.SECTION,asco.AS,tbl_etudiants.MATRICULE
          FROM tbl_etudiants,asco,classe,options,section,presence
          WHERE tbl_etudiants.IDCLA=classe.IDCLA AND tbl_etudiants.IDAS=asco.ID and classe.IDOPT=options.IDOPT and tbl_etudiants.ID=presence.IDEL 
          AND presence.IDCL=classe.IDCLA AND presence.IDAS=asco.ID AND options.IDSECT=section.IDSECT and tbl_etudiants.ACCESS='1' 
          AND tbl_etudiants.IDCLA=? AND tbl_etudiants.IDAS=? and presence.DATEA=?");
          $matP->execute(array($idc,$idas,$date));
          $tbP =  $matP->fetchObject();
          return $tbP;
      }
      
      
      public function getCamarade($idc,$idas,$id)
      {
          $db = getConnection();
          $matP = $db->prepare("SELECT tbl_etudiants.etudiant_id,tbl_etudiants.photo, tbl_classes.classe_id, tbl_etudiants.email,tbl_etudiants.tel,
       tbl_etudiants.nom, tbl_etudiants.prenom, tbl_etudiants.sexe,tbl_etudiants.mat,tbl_classes.classe,tbl_promo.promo
          FROM tbl_etudiants,tbl_promo,tbl_classes,tbl_dep
          WHERE tbl_etudiants.classe=tbl_classes.classe_id AND tbl_etudiants.promo=tbl_promo.promo_id and tbl_classes.dep_id=tbl_dep.dep_id
          and tbl_etudiants.access='1' AND tbl_etudiants.classe=? AND tbl_etudiants.promo=? and tbl_etudiants.mat!=?");
          $matP->execute(array($idc,$idas,$id));
          $tbP = array();
          while($data =  $matP->fetchObject()){
              $tbP[] = $data;
          }
           return $tbP;
      }
   
       
      public function deleteProf($idprof)
      {
          $db = getConnection();
          $delete = $db->prepare("DELETE FROM prof WHERE ID =?");
          $ok = $delete->execute(array($idprof));
          return $ok;
      }
      
       public function activProf($idprof){
           $db = getConnection();
           $sql =$db->prepare( "UPDATE prof SET ACCESS='1' where ID=?");
           $ok = $sql->execute(array($idprof));
          return $ok;
       }
      public function deactivProf($idprof){
          $db = getConnection();
          $sql =$db->prepare( "UPDATE prof SET ACCESS='0' where ID=?");
          $ok = $sql->execute(array($idprof));
          return $ok;
      }
  }
  ?>