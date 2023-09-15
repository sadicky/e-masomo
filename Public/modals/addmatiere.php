 <!-- Add Room-->
 <div class="modal fade" tabindex="-1" role="dialog" id="add-matiere">
     <div class="modal-dialog modal-xl" role="document">
         <div class="modal-content">
             <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
             <div class="modal-body modal-body-md">
                 <form class="mt-2" id="formulaire">
                     <div class="nk-wizard-content">
                         <div class="row">
                             <div class="col-md-4">
                                 <div class="form-group">
                                     <div class="custom-control custom-control-xs custom-checkbox">
                                         <input type="checkbox" class="custom-control-input" id="customCheck1">
                                         <label class="custom-control-label" for="customCheck1">Tous</label>
                                     </div>
                                     <hr>
                                     <table class="table">
                                         <thead>
                                             <tr>
                                                 <th></th>
                                                 <th>Cours</th>
                                                 <th>Classe</th>
                                             </tr>
                                         </thead>
                                         <tbody>
                                             <tr>
                                                 <td>
                                     <div class="custom-control custom-control-xs custom-checkbox">
                                         <input type="checkbox" class="custom-control-input" id="customCheck2">
                                         <label class="custom-control-label" for="customCheck2"></label>
                                     </div></td>
                                                 <td>k</td>
                                                 <td>l</td>
                                             </tr>
                                         </tbody>
                                     </table>
                                 </div>
                             </div>
                             <div class="col-md-8">
                                 <div class="form-group">
                                     <textarea name="bio" id="bio"></textarea>
                                 </div>
                             </div>
                             <!--col-->
                             <div class="col-md-12">
                                 <div class="form-group">
                                     <button class="btn btn-primary btn-block" type="submit" data-bs-dismiss="modal">Ajouter Nouvelle Matière</button>
                                 </div>
                             </div>
                         </div><!-- .row -->
                     </div>
                 </form>
             </div><!-- .modal-body -->
         </div><!-- .modal-content -->
     </div><!-- .modal-dialog -->
 </div><!-- .modal -->