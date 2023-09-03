 <!-- Add Room-->
 <div class="modal fade" tabindex="-1" role="dialog" id="add-classe">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="modal-title">Nouvelle Classe</h5>
                    <form action="#" class="mt-2" id="formulaire">
                        <div class="row g-gs">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Département</label> <a href="<?=WEBROOT?>dep" class="btn-link"><b>+</b></a>
                                    <div class="form-control-wrap">
                                        <select class="form-select js-select2"  id="dep" name="dep" >
                                            <option value="" disable>Select Device</option>
                                            <?php foreach ($getDeps as $device) {?>
                                                <option value='<?=$device->dep_id?>'><?=$device->dep?></option>				
                                            <?php } ?>
                                        </select> 
                                    </div>
                                </div>
                            </div>
                            <!--col-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="bed-no-add">Classe</label>
                                    <input type="text" class="form-control" name="niv" id="niv" placeholder="BSSI-1A">
                                </div>
                            </div>
                            <!--col-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <button class="btn btn-primary btn-block"  type="submit" data-bs-dismiss="modal">Ajouter</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->