<div class="tab-content tab-pane fade" id="incRep">
    <div class="row col-sm-12">
        <br>
        <div class="col-sm-5">
            <h4><strong>Income Report</strong></h4>
        </div>
        <div class="col-sm-7"></div>
    </div>
    <div class="row col-sm-12">
        <hr class="b">
    </div>

    <div class="row col-sm-12">
        <!-- Start Date -->
        <div class="form-group col-sm-2">
            <label for="date_in">Start Date:</label>
            <input class="form-control datepicker" autocomplete="off" required="required" placeholder="dd/mm/yyyy"
                name="date_in" type="text" id="dated">
            <span class="desc">Start date</span>
        </div>
        <!-- End Date -->
        <div class="form-group col-sm-2">
            <label for="date_in">End Date:</label>
            <input class="form-control datepicker" autocomplete="off" required="required" placeholder="dd/mm/yyyy"
                name="date_in" type="text" id="dated">
            <span class="desc">End date</span>
        </div>
        <!-- Flock -->
        <div class="form-group col-sm-6">
            <label for="flock_type_id">Flock:</label>
            <select class="form-control" id="flocat_id" name="flock_type_id" required>
                <option value="" disabled selected>Select...</option>
                <option value="25351">Chicken [Kuroiler] [Eggs]</option>
                <option value="25352">Chicken [ISA Brown] [Eggs]</option>
                <option value="25353">Chicken [Cornish Cross] [Meat]</option>
                <option value="25354">Turkey [Black Turkey] [Meat]</option>
                <option value="25355">Geese [Saddleback Pomeranian] [Meat]</option>
                <option value="25356">Duck [Muscovy] [Meat]</option>
            </select>
            <span class="desc">Select flock</span>
        </div>
        <div class="form-group col-sm-2"><br>
            <input class="btn btn-primary btn-sm" type="submit" value="Show Report">
        </div>
    </div>
</div>