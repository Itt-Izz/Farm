<?php  include 'php/addFlock.php';?>
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
            <!-- Flock name Field -->
            <label for="Succ" class="form-control btn-success">Successfully saved</label>
            <div class="form-group col-sm-2">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name">
                <span class="desc">Flock name</span>
            </div>
            <!-- Date In Field -->
            <div class="form-group col-sm-2">
                <label for="date_in">Date In:</label>
                <input class="form-control datepicker" autocomplete="off" required="required" placeholder="dd/mm/yyyy"
                    name="date_in" type="text" id="date_in">

                <span class="desc">Date received </span>
            </div>

            <!-- Date retirement Field -->
            <div class="form-group col-sm-2">
                <label for="date_retirement">Retirement:</label>
                <input class="form-control datepicker" required="required" autocomplete="off" placeholder="dd/mm/yyyy"
                    name="date_retirement" type="text" id="date_retirement">
                <span class="desc">Expected date of retirement </span>
            </div>
            <!-- Flock Type Id Field -->

            <div class="form-group col-sm-2">
                <label for="flock_type_id">Flock Type:</label>
                <select class="form-control" id="flock_type_id" name="flock_type_id" required>
                    <option value="" disabled selected>Select your option</option>


                    <?php foreach ($types as $type):  ?>
                    <option value="<?=$type['id']; ?>">
                        <?=$type['type']; ?>
                    </option>
                    <?php endforeach; ?>

                </select>
                <span class=" desc">Flock type</span>
            </div>

            <!-- Source Field -->
            <div class="form-group col-sm-2">
                <label for="source">Source:</label>
                <input type="text" class="form-control" name="source">
                <span class="desc">Source of the birds</span>
            </div>

            <div class="clearfix"> </div>
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
                <label for="age">Initial Age:</label>
                <input class="form-control" required="required" name="age" type="number" id="age">
                <span class="desc">Age in days</span>
            </div>
            <div class="form-group col-sm-2">
                <label for="age">Age:</label>
                <input class="form-control" required="required" name="ageN" type="number" id="ageNow">
                <span class="desc">Age in days</span>
            </div>
            <!-- Costs -->
            <div class="form-group col-sm-2">
                <label for="age">Cost per chick:</label>
                <input class="form-control" required="required" name="chickCost" type="number" id="chickCost">
                <span class="desc">Cost in Ksh.</span>
            </div>
            <div class="form-group col-sm-2">
                <label for="ex">Expenditure:</label>
                <input class="form-control" required="required" name="ex" type="number" id="ex">
                <span class="desc">Total Cost Kshs.</span>
            </div>


            <!-- Status Field -->
            <div class="form-group col-sm-12">
                <hr>
                <br>
                <div class="form-group col-sm-6">
                    <label for="status">Status:</label>
                    <label class="checkbox-inline">
                        <input checked="checked" name="status" type="radio" value="1" id="status"> Active
                        <input name="status" type="radio" value="0" id="status"> Retired
                    </label><br>
                    <span class="desc">Active or retired <span class="desc-more"><i class="fa fa-info-circle"
                                aria-hidden="true"></i><span></span>
                </div>
                <!-- Submit Field -->
                <div class="form-group col-sm-6 pull-right">
                    <br>
                    <input class="btn btn-primary" type="submit" value="Save">
                    <a href="#" class="btn btn-default">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</div>