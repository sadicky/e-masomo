 <!-- Add Room-->
 <div class="modal fade" tabindex="-1" role="dialog" id="add-defect">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="modal-title">Add New Defect</h5>
                    <form action="#" class="mt-2" id="formulaire">
                        <div class="row g-gs">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Device</label>
                                    <div class="form-control-wrap">
                                        <select class="form-select js-select2"  id="brand" name="brand" >
                                            <option value="" disable>Select Device</option>
                                            <?php foreach ($getDevices as $device) {?>
                                                <option value='<?=$device->device_id?>'><?=$device->name_brand?> - <?=$device->name?> - <?=$device->model?></option>				
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!--col-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="bed-no-add">Title</label>
                                    <input type="text" class="form-control" name="title" id="title" placeholder="Title">
                                </div>
                            </div>
                            <!--col-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="bed-no-add">Price</label>
                                    <input type="text" class="form-control" id="price" name="price" placeholder="Price">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="bed-no-add">Required Time</label>
                                    <input type="text" class="form-control" id="time" name="time" placeholder="Required Time">
                                </div>
                            </div>
                            <!--col-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <button class="btn btn-primary btn-block"  type="submit" data-bs-dismiss="modal">Add Defect</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->