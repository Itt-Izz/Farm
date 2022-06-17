<div class="tab-content tab-pane fade" id="new">
    <div class="row col-sm-12">
        <br>
        <div class="col-sm-2">
            <h4><strong> Production</strong></h4>
        </div>
        <div class="col-sm-8"></div>
        <div class="col-sm-2"><button class="btn btn-primary btn-xs pull-right" id="btn-Pro">Add new</button>
        </div>
    </div>
    <div class="row col-sm-12">
        <hr class="b">
    </div>
    <div class="row col-sm-12">
        <div class="col-sm-2">
            <button class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-plus">Egg_Collection</i></button>
        </div>
        <div class="col-sm-2">
            <button class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-plus">Feed_Purchase</i></button>

        </div>
        <div class="col-sm-2">
            <button class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-plus">Bird_Weight</i></button>

        </div>
        <div class="col-sm-2">
            <button class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-plus">Motality</i></button>
        </div>
        <div class="col-sm-3">
            <button class="btn btn-default btn-sm pull-right">Print Flock List</button>
        </div>
    </div>
    <div class="row col-sm-12">
        <hr class="b">
    </div>
    <div class="row col-sm-12">
        <table id="table_id" class="display">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Batch No.</th>
                    <th>Coop</th>
                    <th>Flock Type</th>
                    <th>Purpose</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Row 1 Data 1</td>
                    <td>Row 1 Data 1</td>
                    <td>Row 1 Data 2</td>
                    <td>Row 1 Data 1</td>
                    <td>Row 1 Data 2</td>
                    <td>Row 1 Data 1</td>
                </tr>
                <tr>
                    <td>Row 2 Data 1</td>
                    <td>Row 2 Data 2</td>
                    <td>Row 2 Data 7</td>
                    <td>Row 2 Data 2</td>
                    <td>Row 2 Data 1</td>
                    <td>Row 2 Data 2</td>
                </tr>
                <tr>
                    <td>Row 1 Data 1</td>
                    <td>Row 1 Data 1</td>
                    <td>Row 1 Data 2</td>
                    <td>Row l Data 1</td>
                    <td>Row 1 Data 2</td>
                    <td>Row 1 Data 1</td>
                </tr>
                <tr>
                    <td>Row 2 Data 1</td>
                    <td>Row 2 Data 2</td>
                    <td>Row 2 Data 1</td>
                    <td>Row 2 Data 2</td>
                    <td>Row 2 Data 1</td>
                    <td>Row 2 Data 2</td>
                </tr>
                <tr>
                    <td>Row 1 Data 1</td>
                    <td>Row 1 Data 1</td>
                    <td>Row 1 Data 2</td>
                    <td>Row 1 Data 1</td>
                    <td>Row 1 Data 2</td>
                    <td>Row 1 Data 1</td>
                </tr>
                <tr>
                    <td>Row 2 Data 1</td>
                    <td>Row 2 Data 2</td>
                    <td>Row 2 Data 1</td>
                    <td>Row 2 Data 2</td>
                    <td>Row 2 Data 1</td>
                    <td>Row 2 Data 2</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<?php include 'addProduction.php';?>

<script>
$(document).ready(function() {
    $('#table_id').DataTable();
    $('#table_flock').DataTable();
});

$("#btn-Pro").click(function() {
    $("#new").hide(1000);
    $("#mainNavbar").hide(1000);
    $("#newPro").show(1000);
});

$("#back").click(function() {
    $("#newPro").hide(1000);
    $("#new").show(1000);
    $("#mainNavbar").show(1000);
});


$('.datepicker').datepicker({
    todayHighlight: true,
    autoclose: true,
    todayBtn: "linked",
    clearBtn: true,
    format: "dd-mm-yyyy",
    showOnFocus: true

});
</script>
<!-- <script type='text/javascript' src='//code.jquery.com/jquery-1.8.3.js'></script> -->