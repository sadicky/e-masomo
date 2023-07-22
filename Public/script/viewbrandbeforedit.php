<?php
require_once('../../Models/Admin/brand.class.php');
$brands = new Brand();
$id=isset($_POST['id'])?$_POST['id']:'';
$view = $brands->getBrand($id);

?>
                    <form action="#" class="mt-2" id="formeditbrand">
                        <div class="row g-gs">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label" for="room-no-add">Libellé</label>
                                    <input type="hidden" value="<?=$view->brand_id?>" name="id" id="id" />
                                    <input type="text" class="form-control" value="<?=$view->name_brand?>" id="brand" name="brand"  placeholder="Nouvelle marque">
                                </div>
                            </div>
                            <div class="col-12">
                                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                    <li>
                                        <button class="btn btn-primary submit"  type="submit" id="submit" data-bs-dismiss="modal">Modifier</button>
                                    </li>
                                    <li>
                                        <a href="#" class="link" data-bs-dismiss="modal">Annuler</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </form>




