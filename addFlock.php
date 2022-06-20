<div class="tab-content tab-pane" id="newFlo">
    <div class="row col-sm-12">
        <div class="col-sm-3"><i class="glyphicon glyphicon-backward btn btn-lg btn-info" id="floBack"></i></div>
        <div class="col-sm-4">
            <h4><strong> Flock</strong></h4>
        </div>
        <div class="col-sm-5"></div>
    </div>
    <div class="row col-sm-12">
        <hr class="b">
    </div>

    <div class="row col-sm-12"><br></div>
    <div class="row col-sm-12">
        <form method="POST" action="#" accept-charset="UTF-8">
            <!-- Date In Field -->
            <div class="form-group col-sm-3">
                <label for="date_in">Date In:</label>
                <input class="form-control datepicker" autocomplete="off" required="required" placeholder="dd/mm/yyyy"
                    name="date_in" type="text" id="date_in">

                <span class="desc">Date received </span>
            </div>

            <!-- Date retirement Field -->
            <div class="form-group col-sm-3">
                <label for="date_retirement">Expected Retirement Date:</label>
                <input class="form-control datepicker" required="required" autocomplete="off" placeholder="dd/mm/yyyy"
                    name="date_retirement" type="text" id="date_retirement">
                <span class="desc">Expected date of flock retirement (Bird Sale, End of productivity etc) </span>
            </div>
            <!-- Flock Type Id Field -->

            <div class="form-group col-sm-3">
                <label for="flock_type_id">Flock Type:</label>
                <select class="form-control" id="flock_type_id" name="flock_type_id" required>
                    <option value="" disabled selected>Select your option</option>

                    <option value="25351">Chicken [Kuroiler] [Eggs]</option>
                    <option value="25352">Chicken [ISA Brown] [Eggs]</option>
                    <option value="25353">Chicken [Cornish Cross] [Meat]</option>
                    <option value="25354">Turkey [Black Turkey] [Meat]</option>
                    <option value="25355">Geese [Saddleback Pomeranian] [Meat]</option>
                    <option value="25356">Duck [Muscovy] [Meat]</option>
                    <option value="25357">Chicken [Kuroiler] [Meat]</option>
                    <option value="25358">Chicken [Hyline] [Eggs]</option>
                    <option value="25359">Chicken [Amberlink] [Eggs]</option>
                    <option value="25360">Chicken [Lohmann] [Eggs]</option>
                    <option value="25361">Chicken [Rhode Island Red] [Eggs]</option>
                    <option value="25362">Chicken [Leghorn] [Eggs]</option>
                    <option value="25363">Chicken [Potch Koekoek] [Eggs]</option>
                </select>
                <span class="desc">Flock types can be added/edited under Settings >> Flock Types</span>
            </div>

            <!-- Source Field -->
            <div class="form-group col-sm-3">
                <label for="source">Source:</label>
                <select class="form-control" id="source" name="source" required>
                    <option value="" disabled selected>Select your option</option>


                    <option value="Hatchery">Hatchery</option>
                    <option value="Breeder">Breeder</option>
                    <option value="Incubator">Incubator(Own)</option>
                    <option value="Hen Hatched">Hen(Hen Hatching Eggs) </option>

                </select>
                <span class="desc">Source of the birds</span>
            </div>

            <div class="clearfix"> </div>
            <!-- House Field -->
            <div class="form-group col-sm-3">
                <label for="house">House/Shed/Coop:</label>
                <input class="form-control" required="required" name="house" type="text" id="house">
                <span class="desc">Where the birds are housed</span>
            </div>



            <!-- Initial Stock Field -->
            <div class="form-group col-sm-2">
                <label for="initial_stock">Initial Stock:</label>
                <input class="form-control" required="required" name="initial_stock" type="number" id="initial_stock">
                <span class="desc">Number of birds</span>
            </div>

            <!-- Current Stock Field -->
            <div class="form-group col-sm-2">
                <label for="current_stock">Current Stock:</label>
                <input class="form-control" name="current_stock" type="number" id="current_stock">
            </div>

            <!-- Age Field -->
            <div class="form-group col-sm-2">
                <label for="age">Age:</label>
                <input class="form-control" required="required" name="age" type="number" id="age">
                <span class="desc">Age in days</span>
            </div>

            <!-- Notes Field -->
            <div class="form-group col-sm-12">
                <label for="notes">Notes:</label>
                <textarea class="form-control" name="notes" cols="30" rows="10" id="notes"></textarea>
            </div>

            <!-- Status Field -->
            <div class="form-group col-sm-12">
                <label for="status">Status:</label>
                <label class="checkbox-inline">
                    <input checked="checked" name="status" type="radio" value="1" id="status"> Active
                    <input name="status" type="radio" value="0" id="status"> Retired
                </label><br>
                <span class="desc">Active or retired <span class="desc-more"><i class="fa fa-info-circle"
                            aria-hidden="true"></i><span></span>
            </div>


            <!-- Create expense record. Hide on edit form-->
            <div class="form-group col-sm-12">
                <label for="expense_record">Create an expense record:</label>
                <label class="checkbox-inline">
                    <input class="expense-yes" name="expense_record" type="radio" value="1" id="expense_record"> Yes
                    <input class="expense-no" checked="checked" name="expense_record" type="radio" value="0"
                        id="expense_record"> No
                </label><br>
                <span class="desc">Select Yes to have an expense record created <span class="desc-more"><i
                            class="fa fa-info-circle" aria-hidden="true"></i><span></span>
            </div>
            <!-- Amount Field -->
            <div class="form-group col-sm-4">
                <label for="amount">Total Amount:</label>
                <input class="form-control" step="any" name="amount" type="number" id="amount">
                <span class="desc">Total amount in Kenyan Shilling spent purchasing the flock </span>
            </div>


            <!-- Submit Field -->
            <div class="form-group col-sm-12">
                <input class="btn btn-primary" type="submit" value="Save">
                <a href="#" class="btn btn-default">Cancel</a>
            </div>

        </form>
    </div>
</div>