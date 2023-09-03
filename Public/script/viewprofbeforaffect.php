<?php
require_once('../../Models/Admin/prof.class.php');
require_once('../../Models/Admin/dep.class.php');
require_once('../../Models/Admin/promo.class.php');
$profs = new Prof();
$deps = new Dep();
$promo = new Promo();	
$getPromos = $promo->getPromos();
$id=isset($_POST['id'])?$_POST['id']:""; 
$view = $profs->getProfId($id);
$getDeps = $deps->getDeps();
?>
<div class="message"></div>
                <form method="post" id='formaffcours'>
                         <input type="hidden" value="<?= $view->prof_id ?>" name="id" id="id" />
                        <div class="row g-gs">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Département</label>
                                    <div class="form-control-wrap">
                                        <select class="form-select js-select2"  id="dep" name="dep" >
                                            <option value="">Selectionner</option>
                                            <?php foreach ($getDeps as $dep) {?>
                                                <option value='<?=$dep->dep_id?>'><?=$dep->dep?></option>				
                                            <?php } ?>
                                        </select> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Classe</label>
                                    <div class="form-control-wrap">
                                        <select class="form-select js-select2"  id="classe" name="classe" >
                                            <option value="">Selectionner</option>
                                        </select> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Cours</label>
                                    <div class="form-control-wrap">
                                        <select class="form-select js-select2"  id="cours" name="cours" >
                                            <option value="">Selectionner</option>
                                        </select> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Promotions</label>
                                    <div class="form-control-wrap">
                                        <select class="form-select js-select2"  id="promo" name="promo" >
                                            <?php foreach ($getPromos as $dep) {?>
                                                <option value='<?=$dep->promo_id?>'><?=$dep->promo?></option>				
                                            <?php } ?>
                                        </select> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                    <label class="form-label">#</label>
                                <div class="form-group">
                                    <button class="btn btn-primary btn-block submitpc" type="submit" data-bs-dismiss="modal">Attribuer au Professeur</button>
                                </div>
                            </div>
                        </div>
                    </form>


<script type="text/javascript" src="Public/ajax/join2.js"></script>




