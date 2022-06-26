<div class="tab-content  tab-pane fade" id="ex">
    <div class="row col-sm-12">
        <br>
        <div class="col-sm-2">
            <h4><strong>Expenses</strong></h4>
        </div>
        <div class="col-sm-10"></div>
    </div>
    <div class="row col-sm-12">
        <hr class="b">
    </div>
    <div class="row col-sm-12">
        <form method="POST" action="#" accept-charset="UTF-8">
            <!-- Date Field -->
            <div class="form-group col-sm-3">
                <label for="date_in">Date:</label>
                <input class="form-control datepicker" autocomplete="off" required="required" placeholder="dd/mm/yyyy"
                    name="date_in" type="text" id="dated">
                <span class="desc">Date of Expense</span>
            </div>
            <!-- Category Field -->
            <div class="form-group col-sm-3">
                <label for="flock_type_id">Category:</label>
                <select class="form-control" id="category_id" name="flock_type_id" required>
                    <option value="" disabled selected>Select...</option>

                    <option value="25351">Chicken [Kuroiler] [Eggs]</option>
                    <option value="25352">Chicken [ISA Brown] [Eggs]</option>
                    <option value="25353">Chicken [Cornish Cross] [Meat]</option>
                    <option value="25354">Turkey [Black Turkey] [Meat]</option>
                    <option value="25355">Geese [Saddleback Pomeranian] [Meat]</option>
                    <option value="25356">Duck [Muscovy] [Meat]</option>
                </select>
                <span class="desc">Category of expense</span>
            </div>
            <!-- Quontity Field -->

            <div class="form-group col-sm-3">
                <label for="">Quantity</label>
                <input type="number" class="form-control">
                <span class="desc">Quantity</span>
            </div>

            <!--Amt Field -->
            <div class="form-group col-sm-3">
                <label for="">Amount</label>
                <input type="text" class="form-control">
                <span class="desc">Amt in Ksh.</span>
            </div>

            <div class="clearfix"> </div>

            <div class="col-sm-12">
                <div class="form-group col-sm-9">
                    <label for="flock_type_id">Flock (Optional):</label>
                    <select class="form-control" id="f_id" name="flock_type_id" required>
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
                <div class="col-sm-3"></div>
            </div>
            <!-- Notes Field -->
            <div class="form-group col-sm-11">
                <label for="notes">Description:</label>
                <textarea class="form-control" name="notes" id="des"></textarea>
                <span class="desc">Description (Eg. Receipt number, purpose, mode of payment etc.</span>
            </div>

            <!-- Submit Field -->
            <div class="form-group col-sm-12">
                <input class="btn btn-primary" type="submit" value="Save">
                <a href="#" class="btn btn-default">Cancel</a>
            </div>

        </form>
    </div>
</div>