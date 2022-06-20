<?php include 'inc/nav.php'; ?>
<div class="tab-content col-sm-10" id="myhome">
    <div class="container-fluid bg-success">
        <div class="pull-right">
            <a href=""><i class="glyphicon glyphicon-question-sign"></i>itt.thuot@gmail.com</a>
            <a href=""> <img src="assets/img/av2.png" class="circle" style="width:30px; margin-left: 20px;">Isaac
                Thuo</i></a>
        </div>
    </div>
    <div class="tab-pane fade in active" id="home">
        <div class="row col-sm-12">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <h4><strong> Overview (Over the last 12 Months)</strong></h4>
            </div>
            <div class="col-sm-2"></div>
        </div>
        <div class="row col-sm-12">
            <hr class="b">
        </div>
        <div class="row col-sm-12">
            <div class="col-sm-3 bl">
                <h5>Active Flocks</h5>5
                <h5>Retired Flocks</h5>17
            </div>
            <div class="col-sm-3 bl">
                <h5>Retiring in next 30days</h5>2
                <h5>Feed consumed</h5>100. Kgs
            </div>
            <div class="col-sm-3 bl">
                <h5>Total Income:</h5>Ksh. 54600
                <h5>Total Expences:</h5>Ksh. 24300
            </div>
            <div class="col-sm-3 bl">
                <h5>Gross Profit:</h5>Ksh.30300
                <h5>Drawdown:</h5>Ksh.10500
            </div>
        </div>

        <div class="row col-sm-12">
            <hr class="b">
        </div>
        <div class="row col-sm-12">
            <div class="col-sm-6 d-flex bt">
                <canvas id="myChart" width="640"></canvas>
            </div>
            <div class=" col-sm-6 d-flex bl bt">
                <canvas id="myPie" height="80vh" width="100vw"></canvas>
            </div>
            <!-- </div> -->
        </div>

    </div>

    <?php  include 'production.php'; ?>
    <?php  include 'view.php'; ?>
    <?php  include 'vaccine.php'; ?>
    <?php  include 'income.php'; ?>
    <?php  include 'expence.php'; ?>
    <?php  include 'motality.php'; ?>
    <?php  include 'types.php'; ?>
    <?php  include 'medicine.php'; ?>
    <?php  include 'settings.php'; ?>


</div> <!-- End tab content   -->
<div class="row col-sm-12 ">
    <hr class="b">
</div>
<?php include 'inc/copyright.php'; ?>
<script>
var ctx = document.getElementById("myChart").getContext("2d");
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: "line",

    // The data for our dataset
    data: {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [{
            label: "Success Rate",
            backgroundColor: "rgb(255, 99, 132)",
            borderColor: "rgb(255, 99, 132)",
            data: [0, 20, 15, 50, 45, 80, 95]
        }]
    },

    // Configuration options go here
    options: {
        responsive: true,
        maintainAspectRatio: false
    }
});
// Pie Goes here
const data = {
    labels: [
        'Improved',
        'Layers',
        'Broilers',
        'Kienyeji'
    ],
    datasets: [{
        label: 'My First Dataset',
        data: [50, 50, 220, 40],
        backgroundColor: [
            'rgb(255, 99, 132)',
            'rgb(54, 162, 235)',
            'rgb(255, 205, 86)',
            'rgb(154, 205, 50)'

        ],
        hoverOffset: 5
    }]
};

const config = {
    type: 'pie',
    data: data
};

const myPie = new Chart(
    document.getElementById('myPie'),
    config
);
</script>


<?php include 'inc/footer.php'; ?>