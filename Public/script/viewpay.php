<?php
require_once('../../Models/Admin/order.class.php');
$orders = new Repair();
$id=isset($_POST['id'])?$_POST['id']:'';
$view = $orders->getOrder($id);
?>

<form action="#" class="mt-2" id="formpay">
                        <div class="row g-gs">
                            <!--col-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="hidden" value="<?=$view->uuid?>" name="id" id="id">
                                    <input type="text" class="form-control" readonly value="<?=$view->price?>">
                                </div>
                            </div>
                            <!--col-->
                            <div class="col-md-6">
                                <div class="form-control-wrap">
                                        <div class="form-text-hint"><span class="overline-title">fbi</span></div>
                                         <input type="text" class="form-control"  id="montant" name="montant" placeholder="Montant">
                                </div>                               
                            </div>
                            <!--col-->
                            <!--col-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="date" class="form-control" id="date" name="date">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select class="form-control js-select2" id="statut" name="statut">
                                        <option value="1">Open</option>
                                        <option value="2">Pending</option>
                                        <option value="3">Resolved</option>
                                        <option value="4">Closed</option>
                                    </select>
                                </div>
                            </div>
                            <!--col-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <button class="btn btn-danger btn-block"  type="submit" id="submit" data-bs-dismiss="modal">Pay</button>
                                </div>
                            </div>
                        </div>
                    </form>




