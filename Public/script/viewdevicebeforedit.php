<?php
require_once('../../Models/Admin/device.class.php');
$devices = new Device();
$id=isset($_POST['id'])?$_POST['id']:'';
$view = $devices->getDevice($id);
?>


<form action="#" class="mt-2" id="formeditdevice">
                        <div class="row g-gs">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Device</label>
                                    <div class="form-control-wrap">
                                        <input type="hidden" value="<?=$view->device_id?>" name="id" id="id" />
                                        <select class="form-select js-select2"  id="brand" name="brand" >
                                            <option value='<?=$view->brand_id?>'><?=$view->name_brand?></option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!--col-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="bed-no-add">Name</label>
                                    <input type="text" value="<?=$view->name?>" class="form-control" name="name" id="name" placeholder="Device Name">
                                </div>
                            </div>
                            <!--col-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="bed-no-add">Model</label>
                                    <input type="text" value="<?=$view->model?>" class="form-control" id="model" name="model" placeholder="Device Model">
                                </div>
                            </div>
                            <!--col-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="bed-no-add">#</label>
                                    <button class="btn btn-primary btn-block submit"  type="submit" id="submit"  data-bs-dismiss="modal">Edit Device</button>
                                </div>
                            </div>
                        </div>
                    </form>




