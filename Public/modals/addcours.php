 <!-- Add Room-->
 <div class="modal fade" tabindex="-1" role="dialog" id="add-cours">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="modal-title">Nouveau Cours</h5>
                    <form action="#" class="mt-2" id="formulaire">
                        <div class="row g-gs">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="bed-no-add">Cours</label>
                                    <input type="text" class="form-control" name="cours" id="cours" placeholder="Cours">
                                </div>
                            </div>
                            <!--col--> 
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Semestre</label>
                                    <div class="form-control-wrap">
                                        <select class="form-select js-select2"  id="semestre" name="semestre" >
                                            <option value="1st">1er Semestre</option>
                                            <option value="2nd">2nd Semestre</option>
                                        </select> 
                                    </div>
                                </div>
                            </div>
                            <!--col-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Département</label> <a href="<?=WEBROOT?>classe" class="btn-link"><b>+</b></a>
                                    <div class="form-control-wrap">
                                        <select class="form-select js-select2"  id="dep" name="dep" >
                                            <option value="">Selectionner le Departement</option>
                                            <?php foreach ($getDeps as $dep) {?>
                                                <option value='<?=$dep->dep_id?>'><?=$dep->dep?></option>				
                                            <?php } ?>
                                        </select> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Classe</label> <a href="<?=WEBROOT?>classe" class="btn-link"><b>+</b></a>
                                    <div class="form-control-wrap">
                                        <select class="form-select js-select2"  id="niv" name="niv" >
                                            <option value="">Selectionner la classe</option>
                                        </select> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <button class="btn btn-primary btn-block"  type="submit" data-bs-dismiss="modal">Ajouter Cours</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->