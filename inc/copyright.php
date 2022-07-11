<div class="row col-sm-12">
    <div class="col-sm-2"></div>
    <div class="col-sm-8"><strong>&copy;<?=date('Y'); ?> Copyright. All Rights reserved!</strong> By: Isaac
        <a href="#">itt.thuot@gmai.com</a>
    </div>
    <div class="col-sm-2">
        <?php  
         $now = time();
          // or your date as well
        $your_date = strtotime("2022-01-31");
        $datediff = $now - $your_date;

        echo round($datediff / (60 * 60 * 24)).' Days <br>';
        echo round(($datediff / (60 * 60 * 24))/7).' Weeks <br>';
       // echo round(($datediff / (60 * 60 * 24))/30).' Months <br>';
       // echo round(($datediff / (60 * 60 * 24))/365).' Years';
        
          ?>
    </div>
</div>