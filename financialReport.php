<div class="tab-content tab-pane fade" id="finRep">
    <div class="row col-sm-12">
        <br>
        <div class="col-sm-5">
            <h4><strong>Financial Report</strong></h4>
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

    <div class="accordion">
        <div class="card col-sm-12">
            <div class="card-header bg-c">
                The panel header
                <span class="glyphicon glyphicon-chevron-down btn pull-right chev" data-toggle="collapse"
                    data-target="#collapse1" aria-expanded="true" aria-controls="collapseOne"></span>
            </div>
            <div id="collapse1" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                    3
                    wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                    laborum
                    eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
                    nulla
                    assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                    nesciunt
                    sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                    farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                    labore sustainable VHS.
                </div>
            </div>
        </div>
        <div class="row col-sm-12">
            <hr class="b">
        </div>
        <div class="card col-sm-12">
            <div class="card-header bg-c">
                <strong>Success!</strong> Indicates a successful or positive action.
                <div class="pull-right">
                    <span class="glyphicon glyphicon-chevron-down btn chev" data-toggle="collapse"
                        data-target="#collapse2" aria-expanded="true" aria-controls="collapseOne"></span>
                </div>
            </div>
            <div id="collapse2" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                    3
                    wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                    laborum
                    eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
                    nulla
                    assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                    nesciunt
                    sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                    farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                    labore sustainable VHS.
                </div>
            </div>
        </div>
    </div>


</div>