<div class="tab-content tab-pane fade" id="view">
    <div class="row col-sm-12">
        <br>
        <div class="col-sm-2">
            <h4><strong> Flock</strong></h4>
        </div>
        <div class="col-sm-7"></div>
        <div class="col-sm-2"><button class="btn btn-primary btn-sm pull-right" id="btn-Flock">Add new Flock</button>
        </div>
        <div class="col-sm-1">
            <button class="btn btn-default btn-sm pull-right">Print</button>
        </div>

        <!-- ....................................................Add New Flock Modal.........................................................................-->
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Flock</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="#" accept-charset="UTF-8">
                            <!-- Flock name Field -->
                            <label for="Succ" class="form-control btn-success hidden">Successfully saved</label>
                            <div class="form-group col-sm-4">
                                <label for="name">Name:</label>
                                <input type="text" id="no" class="form-control" name="name">
                                <span class="desc">Flock name</span>
                            </div>
                            <!-- Date In Field -->
                            <div class="form-group col-sm-4">
                                <label for="date_in">Date In:</label>
                                <input class="form-control datepicker" autocomplete="off" required="required"
                                    placeholder="dd/mm/yyyy" name="date_in" type="text" id="dateIn">
                                <span class="desc">Date received </span>
                            </div>

                            <!-- Date retirement Field -->
                            <div class="form-group col-sm-4">
                                <label for="date_retirement">Retirement:</label>
                                <input class="form-control datepicker" required="required" autocomplete="off"
                                    placeholder="dd/mm/yyyy" name="date_retirement" type="text" id="date_retirement">
                                <span class="desc">Expected date of retirement </span>
                            </div>
                            <!-- Flock Type Id Field -->

                            <div class="form-group col-sm-4">
                                <label for="flock_type_id">Flock Type:</label>
                                <select class="form-control" id="type" name="flock_type_id" required>
                                    <option value="" disabled selected>Select your option</option>


                                    <?php foreach ($types as $type):  ?>
                                    <option value="<?=$type['id']; ?>" id="type">
                                        <?=$type['type']; ?>
                                    </option>
                                    <?php endforeach; ?>

                                </select>
                                <span class=" desc">Flock type</span>
                            </div>

                            <!-- Source Field -->
                            <div class="form-group col-sm-4">
                                <label for="source">Source:</label>
                                <input type="text" class="form-control" name="source" id="source">
                                <span class="desc">Source of the birds</span>
                            </div>

                            <!-- Initial Stock Field -->
                            <div class="form-group col-sm-4">
                                <label for="initial_stock">Initial Stock:</label>
                                <input class="form-control" required="required" name="initial_stock" type="number">
                                <span class="desc">Number of birds</span>
                            </div>

                            <!-- Current Stock Field -->
                            <div class="form-group col-sm-4">
                                <label for="current_stock">Current Stock:</label>
                                <input class="form-control" name="current_stock" type="number" id="stock">
                            </div>

                            <!-- Age Field -->
                            <div class="form-group col-sm-4">
                                <label for="age">Initial Age:</label>
                                <input class="form-control" required="required" name="age" type="number" id="ageB4">
                                <span class="desc">Age in days</span>
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="age">Age:</label>
                                <input class="form-control" required="required" name="ageN" type="number" id="age">
                                <span class="desc">Age in days</span>
                            </div>
                            <!-- Costs -->
                            <div class="form-group col-sm-4">
                                <label for="age">Cost per chick:</label>
                                <input class="form-control" required="required" name="chickCost" type="number"
                                    id="chickCost">
                                <span class="desc">Cost in Ksh.</span>
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="ex">Expenditure:</label>
                                <input class="form-control" required="required" name="ex" type="number" id="ex">
                                <span class="desc">Total Cost Kshs.</span>
                            </div>


                            <!-- Status Field -->
                            <div class="form-group col-sm-4">
                                <label for="status">Status:</label>
                                <label class="checkbox-inline">
                                    <input checked="checked" name="status" type="radio" value="1" id="state">
                                    Active
                                    <input name="status" type="radio" value="0" id="status"> Retired
                                </label><br>
                                <span class="desc">Active or retired <span class="desc-more"><i
                                            class="fa fa-info-circle" aria-hidden="true"></i><span></span>
                            </div>
                            <!-- Submit Field -->
                            <!-- <div class="form-group col-sm-6 pull-right">
                                    <br>
                                    <input class="btn btn-primary" type="submit" value="Save">
                                    <a href="#" class="btn btn-default">Cancel</a>
                                </div> -->

                    </div>
                    <div class="clearfix"></div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- ............................................................................................................................. -->







    </div>

    <div class="row col-sm-12">
        <hr class="b">
    </div>

    <div class="row col-sm-12">
        <div class="col-sm-2">
            <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#eggCol"><i
                    class="glyphicon glyphicon-plus">Egg_Collection</i></button>
            <!-- Egg Collection Modal -->
            <div class="modal fade" id="eggCol" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="col-sm-12">
                                <div class="col-sm-4"></div>
                                <div class="col-sm-4">
                                    <h5 class="modal-title" id="exampleModalLongTitle"><b> Add Egg Collection</b></h5>
                                </div>
                                <div class="col-sm-4"></div>
                            </div>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="col-sm-12">
                                <div class="col-sm-4">
                                    <label for="date_in">Date:</label>
                                    <input class="form-control datepicker" autocomplete="off" required="required"
                                        placeholder="dd/mm/yyyy" name="date_eg" type="text" id="date_eg">
                                    <span class="desc"> <i>Select production date </i></span>
                                </div>
                                <div class="col-sm-8"></div>
                            </div>

                            <div class="col-sm-12">
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
                            </div>
                            <div class="col-sm-12">
                                <div class="col-sm-6">
                                    <label for="source">Quantity:</label>
                                    <input type="number" class="form-control">
                                    <span class="desc"> <i>Enter the total No. of eggs collected</i></span>
                                </div>
                                <div class="col-sm-6">
                                    <label for="source">Damaged:</label>
                                    <input type="number" class="form-control">
                                    <span class="desc"> <i>Enter the No. of eggs damaged</i></span>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div><!-- end modal -->
        </div>


        <div class="col-sm-2">
            <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#feedPu"><i
                    class="glyphicon glyphicon-plus">Feed</i></button>
            <!-- Feed Purchase Modal -->
            <div class="modal fade" id="feedPu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="col-sm-12">
                                <div class="col-sm-4"></div>
                                <div class="col-sm-4">
                                    <h5 class="modal-title" id="exampleModalLongTit"><b> Feed Given</b></h5>
                                </div>
                                <div class="col-sm-4"></div>
                            </div>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="col-sm-12">
                                <div class="col-sm-4">
                                    <label for="date_in">Date:</label>
                                    <input class="form-control datepicker" autocomplete="off" required="required"
                                        placeholder="dd/mm/yyyy" name="date_eg" type="text" id="date_eg">
                                    <span class="desc"> <i>Select production date </i></span>
                                </div>
                                <div class="col-sm-8"></div>
                            </div>

                            <div class="col-sm-12">
                                <label for="source">Flock:</label>
                                <select class="form-control" id="flockVaccine" name="source" required>
                                    <option value="" disabled selected>Select Flock</option>
                                    <option value="Hatchery">B12</option>
                                    <option value="Hatchery">B13</option>
                                    <option value="Hatchery">B14 (The Broiler)</option>
                                    <option value="Hatchery">L001 (Layers)</option>
                                    <option value="Hatchery">L012</option>
                                </select>
                                <span class="desc"><i> Choose flock</i></span>
                            </div>
                            <div class="col-sm-12">
                                <label for="source">Feed Type:</label>
                                <select class="form-control" id="flockVaccine" name="source" required>
                                    <option value="" disabled selected>Select Flock</option>
                                    <option value="Hatchery">B12</option>
                                    <option value="Hatchery">B13</option>
                                    <option value="Hatchery">B14 (The Broiler)</option>
                                    <option value="Hatchery">L001 (Layers)</option>
                                    <option value="Hatchery">L012</option>
                                </select>
                                <span class="desc"><i> Select Feed Type</i></span>
                            </div>
                            <div class="col-sm-12">
                                <label for="source">Amount of feed:</label>
                                <input type="number" class="form-control">
                                <span class="desc"> <i>In sacks</i></span>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div><!-- end modal -->
        </div>
        <div class="col-sm-2">
            <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#vacc"><i
                    class="glyphicon glyphicon-plus">Vaccination</i></button>
            <!-- Vaccination Modal -->
            <div class="modal fade" id="vacc" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="col-sm-12">
                                <div class="col-sm-4"></div>
                                <div class="col-sm-4">
                                    <h5 class="modal-title" id="exampleModalLongTit"><b> Vaccinating</b></h5>
                                </div>
                                <div class="col-sm-4"></div>
                            </div>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="col-sm-12">
                                <div class="col-sm-4">
                                    <label for="date_in">Date:</label>
                                    <input class="form-control datepicker" autocomplete="off" required="required"
                                        placeholder="dd/mm/yyyy" name="date_eg" type="text" id="date_eg">
                                    <span class="desc"> <i>Select vaccination date </i></span>
                                </div>
                                <div class="col-sm-8"></div>
                            </div>

                            <div class="col-sm-12">
                                <label for="source">Flock:</label>
                                <select class="form-control" id="flockVaccine" name="source" required>
                                    <option value="" disabled selected>Select Flock</option>
                                    <option value="Hatchery">B12</option>
                                    <option value="Hatchery">B13</option>
                                    <option value="Hatchery">B14 (The Broiler)</option>
                                    <option value="Hatchery">L001 (Layers)</option>
                                    <option value="Hatchery">L012</option>
                                </select>
                                <span class="desc"><i> Choose flock to be vaccinated</i></span>
                            </div>
                            <div class="col-sm-12">
                                <label for="source">Vaccine:</label>
                                <select class="form-control" id="flockVaccine" name="source" required>
                                    <option value="" disabled selected>Select Vaccine</option>
                                    <option value="Hatchery">Newcastle with IB</option>
                                    <option value="Hatchery">Newcastle plain</option>
                                    <option value="Hatchery">Gumboro</option>
                                    <option value="Hatchery">Gumboro 2nd dose</option>
                                    <option value="Hatchery">Pox</option>
                                </select>
                                <span class="desc"><i> Select vaccine</i></span>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div><!-- end modal -->
        </div>
        <div class="col-sm-2">
            <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#mota"><i
                    class="glyphicon glyphicon-plus">Motality</i></button>
            <!-- Motality Modal -->
            <div class="modal fade" id="mota" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="col-sm-12">
                                <div class="col-sm-4"></div>
                                <div class="col-sm-4">
                                    <h5 class="modal-title" id="exampleModalLongTi"><b> Motality</b></h5>
                                </div>
                                <div class="col-sm-4"></div>
                            </div>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="col-sm-12">
                                <div class="col-sm-4">
                                    <label for="date_in">Date:</label>
                                    <input class="form-control datepicker" autocomplete="off" required="required"
                                        placeholder="dd/mm/yyyy" name="date_eg" type="text" id="date_eg">
                                    <span class="desc"> <i>Select motality date </i></span>
                                </div>
                                <div class="col-sm-8"></div>
                            </div>

                            <div class="col-sm-12">
                                <label for="source">Flock:</label>
                                <select class="form-control" id="flockVaccine" name="source" required>
                                    <option value="" disabled selected>Select Flock</option>
                                    <option value="Hatchery">B12</option>
                                    <option value="Hatchery">B13</option>
                                    <option value="Hatchery">B14 (The Broiler)</option>
                                    <option value="Hatchery">L001 (Layers)</option>
                                    <option value="Hatchery">L012</option>
                                </select>
                                <span class="desc"><i> Choose flock to be vaccinated</i></span>
                            </div>
                            <div class="col-sm-12">
                                <label for="source">Probable Cause:</label>
                                <select class="form-control" id="flockVaccine" name="source" required>
                                    <option value="" disabled selected>Select Vaccine</option>
                                    <option value="Hatchery">Newcastle with IB</option>
                                    <option value="Hatchery">Newcastle plain</option>
                                    <option value="Hatchery">Gumboro</option>
                                    <option value="Hatchery">Gumboro 2nd dose</option>
                                    <option value="Hatchery">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="clearfix"></div><br>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div><!-- end modal -->
        </div>
        <div class="col-sm-3"> </div>
    </div>
    <div class="row col-sm-12">
        <hr class="b">
    </div>

    <div class="row col-sm-12">
        <table id="table_flock" class="display">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Batch No</th>
                    <th>Date In </th>
                    <th>Type</th>
                    <th>Current Stock</th>
                    <th>Age</th>
                    <th>Status</th>
                    <th>Edit</th>
            </thead>
            <tbody>
                <?php foreach ($flocks as $flock): ?>
                <tr>
                    <?php $status = $flock['retired']; ?>
                    <td><?=$flock['id'];?></td>
                    <td><?=$flock['name'];?></td>
                    <td><?=$flock['entryDate'];?></td>
                    <td><?=$flock['type'];?></td>

                    <td><?=$flock['number'];?></td>
                    <td>
                        <?php 
                        $your_date = strtotime($flock['entryDate']);
                        $datediff = $now - $your_date;
                        echo round($datediff / (60 * 60 * 24)); 
                        // echo round($datediff / (60 * 60 * 24)); 
                       ?>
                    </td>
                    <td>
                        <?php if ($status > 0){  echo 'Retired'; } else{ echo 'Active'; }  ?>
                    </td>
                    <td>

                        <button type="button" class="btn btn-primary editbtn"> <i class="glyphicon glyphicon-edit"></i>
                        </button>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <!-- ............................................................................................................................. -->

        <!-- Fock Editting Miodal -->
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Flock</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="#" accept-charset="UTF-8">
                            <!-- Flock name Field -->
                            <label for="Succ" class="form-control btn-success hidden">Successfully saved</label>
                            <div class="form-group col-sm-4">
                                <label for="name">Name:</label>
                                <input type="text" id="no" class="form-control" name="name">
                                <span class="desc">Flock name</span>
                            </div>
                            <!-- Date In Field -->
                            <div class="form-group col-sm-4">
                                <label for="date_in">Date In:</label>
                                <input class="form-control datepicker" autocomplete="off" required="required"
                                    placeholder="dd/mm/yyyy" name="date_in" type="text" id="dateIn">
                                <span class="desc">Date received </span>
                            </div>

                            <!-- Date retirement Field -->
                            <div class="form-group col-sm-4">
                                <label for="date_retirement">Retirement:</label>
                                <input class="form-control datepicker" required="required" autocomplete="off"
                                    placeholder="dd/mm/yyyy" name="date_retirement" type="text" id="date_retirement">
                                <span class="desc">Expected date of retirement </span>
                            </div>
                            <!-- Flock Type Id Field -->

                            <div class="form-group col-sm-4">
                                <label for="flock_type_id">Flock Type:</label>
                                <select class="form-control" id="type" name="flock_type_id" required>
                                    <option value="" disabled selected>Select your option</option>


                                    <?php foreach ($types as $type):  ?>
                                    <option value="<?=$type['id']; ?>" id="type">
                                        <?=$type['type']; ?>
                                    </option>
                                    <?php endforeach; ?>

                                </select>
                                <span class=" desc">Flock type</span>
                            </div>

                            <!-- Source Field -->
                            <div class="form-group col-sm-4">
                                <label for="source">Source:</label>
                                <input type="text" class="form-control" name="source" id="source">
                                <span class="desc">Source of the birds</span>
                            </div>

                            <!-- Initial Stock Field -->
                            <div class="form-group col-sm-4">
                                <label for="initial_stock">Initial Stock:</label>
                                <input class="form-control" required="required" name="initial_stock" type="number">
                                <span class="desc">Number of birds</span>
                            </div>

                            <!-- Current Stock Field -->
                            <div class="form-group col-sm-4">
                                <label for="current_stock">Current Stock:</label>
                                <input class="form-control" name="current_stock" type="number" id="stock">
                            </div>

                            <!-- Age Field -->
                            <div class="form-group col-sm-4">
                                <label for="age">Initial Age:</label>
                                <input class="form-control" required="required" name="age" type="number" id="ageB4">
                                <span class="desc">Age in days</span>
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="age">Age:</label>
                                <input class="form-control" required="required" name="ageN" type="number" id="age">
                                <span class="desc">Age in days</span>
                            </div>
                            <!-- Costs -->
                            <div class="form-group col-sm-4">
                                <label for="age">Cost per chick:</label>
                                <input class="form-control" required="required" name="chickCost" type="number"
                                    id="chickCost">
                                <span class="desc">Cost in Ksh.</span>
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="ex">Expenditure:</label>
                                <input class="form-control" required="required" name="ex" type="number" id="ex">
                                <span class="desc">Total Cost Kshs.</span>
                            </div>


                            <!-- Status Field -->
                            <div class="form-group col-sm-4">
                                <label for="status">Status:</label>
                                <label class="checkbox-inline">
                                    <input checked="checked" name="status" type="radio" value="1" id="state">
                                    Active
                                    <input name="status" type="radio" value="0" id="status"> Retired
                                </label><br>
                                <span class="desc">Active or retired <span class="desc-more"><i
                                            class="fa fa-info-circle" aria-hidden="true"></i><span></span>
                            </div>
                            <!-- Submit Field -->
                            <!-- <div class="form-group col-sm-6 pull-right">
                                    <br>
                                    <input class="btn btn-primary" type="submit" value="Save">
                                    <a href="#" class="btn btn-default">Cancel</a>
                                </div> -->

                    </div>
                    <div class="clearfix"></div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- ............................................................................................................................. -->


    </div>
</div>
<?php include 'addFlock.html.php';?>