 <!-- Add Room-->
 <div class="modal fade" tabindex="-1" role="dialog" id="add-prof">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="modal-title">Ajouter un professeur</h5>                    
                    <form class="mt-2" id="formulaire">
                                                    <div class="nk-wizard-content">
                                                        <div class="row g-gs">
                                                            <div class="col-md-3">
                                                            <div class="form-group">      				
                                                                <label  class="form-label" for="room-no-add">Matricule : </label> <span class="text-danger"></span>
                                                                <?php					  
                                                                    $string=str_shuffle(time() * rand());
                                                                    $titre=substr($string,0,8);					  
                                                                ?>
                                                                <input type="text" class="form-control" value="<?php echo $titre?>" name="mat" id="mat" readonly>
                                                            </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="room-no-add">Titre</label>
                                                                    <select data-msg="Titre" class="form-select js-select2 required" name="titre" id="titre" required>
                                                                        <option value="Mr">Mr</option>
                                                                        <option value="Mme">Mme</option>
                                                                        <option value="Ir">Ir</option>
                                                                        <option value="Mme">Mme</option>
                                                                        <option value="Dr">Dr</option>
                                                                        <option value="Me">Me</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--col-->
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="room-no-add">Noms</label>
                                                                    <input type="text" class="form-control" name="names"  id="names" placeholder="Noms du Prof">
                                                                </div>
                                                            </div>
                                                            <!--col-->
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="room-no-add">Sexe</label>
                                                                    <select data-msg="Sexe" class="form-select js-select2 required" name="sexe" id="sexe">
                                                                        <option value="M">Masculin</option>
                                                                        <option value="F">Feminin</option>
                                                                        <option value="Autre">Autre</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--col-->
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="room-no-add">Bio</label>
                                                                    <textarea name="bio" id="bio" class="summernote-minimal required"></textarea>
                                                                </div>
                                                            </div>
                                                            <!--col-->
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="room-no-add">Email</label>
                                                                    <input type="email" class="form-control" required name="email"  id="email" placeholder="email@email.com">
                                                                </div>
                                                            </div>
                                                            <!--col-->
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="war">Téléphone</label>
                                                                    <input type="tel" class="form-control" name="tel" id="tel" placeholder="Numero de téléphone">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label class="form-label">Niveau</label>
                                                                    <div class="form-control-wrap">
                                                                        <select class="form-control js-select2" id="niv" name="niv" >
                                                                            <option value="">Select Brand</option>
                                                                                <option value='A2'>A2</option>
                                                                                <option value='Baccalauréat'>Baccalauréat</option>
                                                                                <option value='Grade'>Grade</option>
                                                                                <option value='Licence'>Licence</option>
                                                                                <option value='Master'>Master</option>
                                                                                <option value='Doctorat'>PhD</option>
                                                                        </select>
                                                                    </div>
                                                                </div> 
                                                            </div>                                                       
                                                            <!--col-->
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <button class="btn btn-primary btn-block" type="submit" data-bs-dismiss="modal">Ajouter Nouveau Professeur</button>
                                                                </div>
                                                            </div>
                                                        </div><!-- .row -->
                                                    </div>
                                                </form>
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->