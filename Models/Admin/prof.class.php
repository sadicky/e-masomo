<?php
require_once("connexion.php");

Class Prof
{
   private $titre;
   private $noms;
   private $email;
   private $bio;
   private $sexe;
   private $tel;
   private $code;
   private $niveau;
   private $mat;
    //ajouter un Admin
    public function setProf($titre,$mat,$noms,$email,$bio,$sexe,$tel,$niveau,$code)
    {   
        
        $this->noms=$noms;
        $this->tel=$tel;
        $this->email=$email;
        $this->bio=$bio;
        $this->sexe=$sexe;
        $this->tel=$tel;
        $this->mat=$mat;
        $this->code=$code;
        $this->niveau=$niveau;

        $db = getConnection();
        $add = $db->prepare("INSERT INTO tbl_prof(titre,mat,noms,email,bio,sexe,tel,niveau,code)
         VALUES (?,?,?,?,?,?,?,?,?)");
        $addline = $add->execute(array($titre,$mat,$noms,$email,$bio,$sexe,$tel,$niveau,$code));
        return $addline;
    }

    
    public function setProfCours($prof,$cours,$promo)
    {   
        $db = getConnection();
        $add = $db->prepare("INSERT INTO tbl_profcours(prof, cours, promo)
         VALUES (?,?,?)");
        $addline = $add->execute(array($prof,$cours,$promo));
        return $addline;
    }

    //afficher utilisateur
    public function getProfs()
    {
        $db = getConnection();
        $statement = $db->prepare("SELECT * FROM tbl_prof");
        $statement->execute();
        $tbP = array();
        while($data =  $statement->fetchObject()){
            $tbP[] = $data;
        }
         return $tbP;
    }
    
    public function getProfCoursId2($id)
    {
        $db = getConnection();
        $statement = $db->prepare("SELECT tbl_classes.classe_id as classe_id, tbl_cours.cours_id as cours_id,tbl_cours.cours as cours,tbl_classes.classe as classe,
        tbl_promo.promo as promo,tbl_dep.dep as dep,tbl_promo.promo_id as promo_id
        FROM tbl_dep,tbl_profcours,tbl_cours,tbl_promo,tbl_classes,tbl_prof
        WHERE tbl_profcours.prof=tbl_prof.prof_id AND tbl_profcours.cours=tbl_cours.cours_id AND tbl_profcours.promo=tbl_promo.promo_id
       AND tbl_cours.classe=tbl_classes.classe_id AND tbl_classes.dep_id=tbl_dep.dep_id and tbl_prof.mat=?");
        $statement->execute([$id]);
        $tbP = array();
        while($data =  $statement->fetchObject()){
            $tbP[] = $data;
        }
         return $tbP;
    }

    public function countP(){
        $db = getConnection();
        $q= $db->query("SELECT count(*) as nbre
        from tbl_prof");
        $res = $q->fetchObject();
        return $res;
    } 


    public function getProfEmail($email)
    {
        $db = getConnection();
        $statement = $db->prepare("SELECT email FROM tbl_prof WHERE email = ?");
        $statement->execute([$email]);
        $tbP = $statement->fetchObject();
        return $tbP;
    }

    //Profs cours Classe 
    public function getCoursClasseProf($idclasse,$idprof){
        $db = getConnection();
        $all = $db->prepare("SELECT tbl_cours.cours_id as cours_id,tbl_cours.cours as cours,tbl_dep.dep as dep,
        tbl_classes.classe as classe, tbl_cours.semester as semester,tbl_prof.noms
           from tbl_cours,tbl_classes,tbl_dep,tbl_profcours,tbl_prof
           where tbl_cours.classe = tbl_classes.classe_id
           and tbl_profcours.prof=tbl_prof.prof_id and tbl_cours.cours_id = tbl_profcours.cours
           AND tbl_classes.dep_id=tbl_dep.dep_id And tbl_classes.classe_id=? and tbl_prof.mat=?");
        $all->execute(array($idclasse,$idprof));
        $tb = array();
        while($data = $all->fetchObject())
        {
            $tb[] = $data;
        }
        return $tb;
        }
  
    public function getProfCoursId($id)
    {
        $db = getConnection();
        $matP = $db->prepare("SELECT tbl_classes.classe_id as classe_id, tbl_cours.cours_id as cours_id,tbl_cours.cours as cours,tbl_classes.classe as classe,
        tbl_promo.promo as promo,tbl_dep.dep as dep,tbl_promo.promo_id as promo_id
        FROM tbl_dep,tbl_profcours,tbl_cours,tbl_promo,tbl_classes,tbl_prof
        WHERE tbl_profcours.prof=tbl_prof.prof_id AND tbl_profcours.cours=tbl_cours.cours_id AND tbl_profcours.promo=tbl_promo.promo_id
       AND tbl_cours.classe=tbl_classes.classe_id AND tbl_classes.dep_id=tbl_dep.dep_id and tbl_prof.mat=?");
        $matP->execute(array($id));
        $res = $matP->fetchObject();
        return $res;
    }
    
    public function getProfId($id)
    {
        $db = getConnection();
        $statement = $db->prepare("SELECT * FROM tbl_prof WHERE mat = ?");
        $statement->execute([$id]);
        $tbP = $statement->fetchObject();
        return $tbP;
    }
    
    
}
?>