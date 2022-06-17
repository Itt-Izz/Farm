<div class="tab-content tab-pane" id="newPro">
    <div class="row col-sm-12">
        <div class="col-sm-3"><i class="glyphicon glyphicon-backward btn btn-lg btn-info" id="back"></i></div>
        <div class="col-sm-4">
            <h4><strong> Production</strong></h4>
        </div>
        <div class="col-sm-5"></div>
    </div>
    <div class="row col-sm-12">
        <hr class="b">
    </div>
    <div class="row col-sm-12"><br></div>
    <div class="row col-sm-12">
        <div class="form-group col-sm-6">
            <label for="date">Date:</label>
            <input class="form-control datepicker" data-provide="datepicker" autocomplete="off" required="required"
                placeholder="dd/mm/yyyy" name="date" type="text" value="16/06/2022" id="date">
            <span class="desc">Select production date. You will be able to enter details e.g feeds, weight, egg
                collection etc on the next page</span>
        </div>

        <div class="form-group col-sm-6">
            <label for="flock_id">Flock:</label>
            <select class="form-control" id="sel1" name="flock_id" required>
                <option value="" disabled selected>Select your option</option>


                <option value="1503">2021-09-02/1503-House-Chicken[Kuroiler][Eggs]</option>
            </select>
            <span class="desc">Select flock. You can create new flock under "flock" menu. Retired flock will not be
                listed here</span>
        </div>


        <div class="clearfix"></div>

        <!-- Submit Field -->
        <div class="form-group col-sm-12">
            <input class="btn btn-primary" type="submit" value="Save">
            <a href="#" class="btn btn-default">Cancel</a>
        </div>
        <div class="row col-sm-12">
            <hr class="b">
        </div>
    </div>
</div>