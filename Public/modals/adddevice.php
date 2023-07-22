 <!-- Add Room-->
 <div class="modal fade" tabindex="-1" role="dialog" id="add-device">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="modal-title">Add New Device</h5>
                    <form action="#" class="mt-2" id="formulaire">
                        <div class="row g-gs">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Brand</label>
                                    <div class="form-control-wrap">
                                        <select class="form-select js-select2"  id="brand" name="brand" >
                                            <option value="" disable>Select Brand</option>
                                            <?php foreach ($getBrands as $brand) {?>
                                                <option value='<?=$brand->brand_id?>'><?=$brand->name_brand?></option>				
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!--col-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="bed-no-add">Name</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Device Name">
                                </div>
                            </div>
                            <!--col-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="bed-no-add">Model</label>
                                    <input type="text" class="form-control" id="model" name="model" placeholder="Device Model">
                                </div>
                            </div>
                            <!--col-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="bed-no-add">#</label>
                                    <button class="btn btn-primary btn-block"  type="submit" data-bs-dismiss="modal">Add Device</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->