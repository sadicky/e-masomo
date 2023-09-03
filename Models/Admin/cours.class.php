<?php
require_once("connexion.php");
    Class Cours{
        public $id;
        public $niv;
        public $classe;
        public $cours;
        public $pond;
        public $semester;
        public $prof;
        public $aa;

        //ajouter un cours
        public function setCours($cours,$semester,$classe){
            $this->classe=$classe;
            $this->cours=$cours;
            $this->semester=$semester;
            $db = getConnection();
        $add = $db->prepare("INSERT INTO tbl_cours(cours,semester,classe) VALUES(?,?,?)");
        $addline = $add->execute(array($cours,$semester,$classe)) or die(print_r($add->errorInfo()));
        return $addline;
        }

        //afficher toutes les fac
        public function getCours(){
            $db = getConnection();
        $all = $db->prepare("SELECT * FROM `tbl_cours` group by cours_id DESC");
        $all->execute();
        $tb = array();
        while($data = $all->fetchObject())
        {
            $tb[] = $data;
        }
        return $tb;
        }

        public function getsCours(){
        $db = getConnection();
        $all = $db->prepare("SELECT tbl_cours.cours_id as cours_id,tbl_cours.cours as cours,tbl_dep.dep as dep,
        tbl_classes.classe as classe, tbl_cours.semester as semester
           from tbl_cours,tbl_classes,tbl_dep
           where tbl_cours.classe = tbl_classes.classe_id
           AND tbl_classes.dep_id=tbl_dep.dep_id order by tbl_classes.classe ");
        $all->execute();
        $tb = array();
        while($data = $all->fetchObject())
        {
            $tb[] = $data;
        }
        return $tb;
        }
        
        public function getCoursClasse($id){
            $db = getConnection();
            $all = $db->prepare("SELECT tbl_cours.cours_id as cours_id,tbl_cours.cours as cours,tbl_dep.dep as dep,
            tbl_classes.classe as classe, tbl_cours.semester as semester,tbl_prof.noms
               from tbl_cours,tbl_classes,tbl_dep,tbl_profcours,tbl_prof
               where tbl_cours.classe = tbl_classes.classe_id
               and tbl_profcours.prof=tbl_prof.prof_id and tbl_cours.cours_id = tbl_profcours.cours
               AND tbl_classes.dep_id=tbl_dep.dep_id And tbl_classes.classe_id=?");
            $all->execute(array($id));
            $tb = array();
            while($data = $all->fetchObject())
            {
                $tb[] = $data;
            }
            return $tb;
            }

            
        public function getCoursClasse2($id){
            $db = getConnection();
            $all = $db->prepare("SELECT tbl_cours.cours_id as cours_id,tbl_cours.cours as cours,tbl_dep.dep as dep,
            tbl_classes.classe as classe, tbl_cours.semester as semester
               from tbl_cours,tbl_classes,tbl_dep
               where tbl_cours.classe = tbl_classes.classe_id
               AND tbl_classes.dep_id=tbl_dep.dep_id and tbl_cours.cours_id=?");
            $all->execute(array($id));
            $res = $all->fetchObject();
            return $res;
        }
  
  
        public function getCoursId($id)
        {
            $db = getConnection();
            $matP = $db->prepare("SELECT * FROM tbl_cours WHERE cours_id=? LIMIT 1");
            $matP->execute(array($id));
            $res = array();
            while($data = $matP->fetchObject())
            {
                $res[] = $data;
            }
            return $res;
        }

        public function countC(){
            $db = getConnection();
            $q= $db->query("SELECT count(tbl_cours.cours) as nbre
            from tbl_cours");
            $res = $q->fetchObject();
            return $res;
        } 

        public function countCours($classe){
            $db = getConnection();
            $q= $db->prepare("SELECT SUM(cours.POND) as POND
            from cours,classe,section,options,asco
            where cours.IDCLA = classe.IDCLA
            AND classe.IDOPT=options.IDOPT
            AND options.IDSECT = section.IDSECT
            and cours.IDAA=asco.ID 
            And classe.IDCLA=? and cours.ACCESS='1'");
            $q->execute(array($classe));
            $res = $q->fetchObject();
            return $res;
        } 
  

    }
