<div class="tab-content tab-pane fade" id="vac">
    <div class="row col-sm-12">
        <br>
        <!-- Update vaccination -->
        <div class="col-sm-5">
            <div class="col-sm-12">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <h4><strong> Vaccinaton</strong></h4>
                </div>
                <div class="col-sm-4"></div>
            </div>
            <label for="source">Flock:</label>
            <select class="form-control" id="flockVaccine" name="source" required>
                <option value="" disabled selected>Select Flock</option>


                <option value="Hatchery">B12</option>
                <option value="Hatchery">B13</option>
                <option value="Hatchery">B14 (The Broiler)</option>
                <option value="Hatchery">L001 (Layers)</option>
                <option value="Hatchery">L012</option>

            </select>
            <span class="desc"><i> Choose the flock to vaccine</i></span>
            <br>
            <br>
            <label for="date_in">Date:</label>
            <input class="form-control datepicker" autocomplete="off" required="required" placeholder="dd/mm/yyyy"
                name="date_in" type="text" id="date_Vac">
            <span class="desc"> <i>Date of vaccination</i></span>
            <hr>
            <div class="col-sm-12">
                <div class="col-sm-2"><label for=""><u><b> Vaccines</b></u></label></div>
                <div class="col-sm-10"></div>
            </div>
            <div class="col-sm-12">
                <div class="col-sm-1"></div>
                <div class="col-sm-11">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled" Checked
                            disabled />
                        <label class="form-check-label" for="flexCheckDisabled">Newcastle with IB</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled2" Checked
                            disabled />
                        <label class="form-check-label" for="flexCheckDisabled">Gumboro</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled3" />
                        <label class="form-check-label" for="flexCheckDisabled">Newcastle Plain</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled4" />
                        <label class="form-check-label" for="flexCheckDisabled">Gumboro (2nd Dose)</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedDisabled"
                            disabled />
                        <label class="form-check-label" for="flexCheckCheckedDisabled">FowlTyphoid </label>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <button class="btn btn-primary btn-sm pull-right">Update Vaccinaton</button> <br><br><br><br>
            </div>
            <div class="clearfix"> </div>
        </div>

        <div class="col-sm-1"></div>

        <!-- Update motality on demand -->
        <div class="col-sm-5 bl bt">
            <div class="col-sm-12">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <h4><strong> Motality</strong></h4>
                </div>
                <div class="col-sm-4"></div>
            </div>
            <label for="source">Flock:</label>
            <select class="form-control" id="flockVaccine" name="source" required>
                <option value="" disabled selected>Select Flock</option>


                <option value="Hatchery">B12</option>
                <option value="Hatchery">B13</option>
                <option value="Hatchery">B14 (The Broiler)</option>
                <option value="Hatchery">L001 (Layers)</option>
                <option value="Hatchery">L012</option>

            </select>
            <span class="desc"><i> Choose the flock to vaccine</i></span>
            <br>
            <br>
            <label for="date_in">Date:</label>
            <input class="form-control datepicker" autocomplete="off" required="required" placeholder="dd/mm/yyyy"
                name="date_in" type="text" id="date_Vac">
            <span class="desc"> <i>Date of vaccination</i></span>
            <hr>



            <div class="col-sm-12">
                <div class="col-sm-2"><label for=""><u><b> Deaths</b></u></label></div>
                <div class="col-sm-10"></div>
            </div>
            <div class="col-sm-12">
                <input type="number" class="form-control">
                <span class="desc"> <i>Enter the No. of chicken that died today</i></span>
                <br>
                <br>

            </div>
            <div class="col-sm-12">
                <select class="form-control" id="deathCause" name="source" required>
                    <option value="" disabled selected>Select Possible cause ....</option>
                    <option value="ncd">Adverse weather</option>
                    <option value="ncd">Newcastle</option>
                    <option value="ncd">Gumboro</option>
                    <option value="ncd">Fowl-Pox</option>
                    <option value="ncd">Fowl-Typhoid</option>
                    <option value="ncd">Other</option>
                </select>
                <span class="desc"> <i>Suspected Cause of death</i></span>

            </div>
            <br>
            <button class="btn btn-primary btn-sm pull-right">Update Deaths</button>
        </div>
        <div class="col-sm-1"></div>


    </div>
</div>