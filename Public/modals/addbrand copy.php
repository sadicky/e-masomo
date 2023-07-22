 <!-- Add Room-->
 <div class="modal fade" tabindex="-1" role="dialog" id="add-brand">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="modal-title">Add Room</h5>
                    <form action="#" class="mt-2">
                        <div class="row g-gs">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="room-no-add">Room No</label>
                                    <input type="number" class="form-control" id="room-no-add" placeholder="Room No">
                                </div>
                            </div>
                            <!--col-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Room Type</label>
                                    <div class="form-control-wrap">
                                        <select class="form-select js-select2">
                                            <option value="default_option">Room Type</option>
                                            <option value="option_select_room_type">Delux</option>
                                            <option value="option_select_room_type">Super Delux</option>
                                            <option value="option_select_room_type">Single</option>
                                            <option value="option_select_room_type">Double</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!--col-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Air Conditon</label>
                                    <div class="form-control-wrap">
                                        <select class="form-select js-select2">
                                            <option value="default_option">AC</option>
                                            <option value="option_select_ac">Non AC</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!--col-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="bed-no-add">Bed Capacity</label>
                                    <input type="number" class="form-control" id="bed-no-add" placeholder="Bed Capacity">
                                </div>
                            </div>
                            <!--col-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Meal</label>
                                    <div class="form-control-wrap">
                                        <select class="form-select js-select2" data-placeholder="Select multiple options">
                                            <option value="default_option">None</option>
                                            <option value="option_select_meal">Breakfast</option>
                                            <option value="option_select_meal">Lunch</option>
                                            <option value="option_select_meal">Dinner</option>
                                            <option value="option_select_meal">Two</option>
                                            <option value="option_select_meal">All</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!--col-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="rent-add">Rent</label>
                                    <input type="number" class="form-control" id="rent-add" placeholder="0.00 USD">
                                </div>
                            </div>
                            <!--col-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Status</label>
                                    <div class="form-control-wrap">
                                        <select class="form-select js-select2" data-placeholder="Select multiple options">
                                            <option value="default_option">Open</option>
                                            <option value="option_select_status">Inactive</option>
                                            <option value="option_select_status">Booked</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!--col-->
                            <div class="col-12">
                                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                    <li>
                                        <button class="btn btn-primary" data-bs-dismiss="modal">Add Room</button>
                                    </li>
                                    <li>
                                        <a href="#" class="link" data-bs-dismiss="modal">Cancel</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->