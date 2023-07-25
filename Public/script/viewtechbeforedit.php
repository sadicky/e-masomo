<?php
require_once('../../Models/Admin/tech.class.php');
$devices = new Technician();
$id=isset($_POST['id'])?$_POST['id']:'';
$view = $devices->getTechnician($id);
?>


<form action="#" class="mt-2" id="formedittech">
                        <div class="row g-gs">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="bed-no-add">Names</label>                                    
                                    <input type="hidden" value="<?=$view->tech_id?>" name="id" id="id" />
                                    <input type="text" value="<?=$view->names?>" class="form-control" name="names" id="names" placeholder="Device Name">
                                </div>
                            </div>
                            <!--col-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="bed-no-add">Phone NUmber</label>
                                    <input type="text" value="<?=$view->phone?>" class="form-control" id="phone" name="phone" placeholder="Device Model">
                                </div>
                            </div>
                            <!--col-->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <button class="btn btn-primary btn-block submit"  type="submit" id="submit"  data-bs-dismiss="modal">Modify Technician</button>
                                </div>
                            </div>
                        </div>
                    </form>




