$(document).ready(function() {
    $('#table_id').DataTable();
    $('#table_flock').DataTable();
});


$("#btn-Pro").click(function() {
    $("#new").hide(1000);
    $("#mainNavbar").hide(1000);
    $("#newPro").show(1000).addClass("col-sm-12");
    $("#myhome").removeClass("col-sm-10");
});

$("#back").click(function() {
    $("#newPro").hide(1000).removeClass("col-sm-12");
    $("#myhome").addClass("col-sm-10");
    $("#mainNavbar").show(1000);
    $("#new").show(1000);

});
$("#btn-Flock").click(function() {
    $("#view").hide(1000);
    $("#mainNavbar").hide(1000);
    $("#newFlo").show(1000).addClass("col-sm-12");
    $("#myhome").removeClass("col-sm-10");
});

$("#floBack").click(function() {
    $("#newFlo").hide(1000).removeClass("col-sm-12");
    $("#myhome").addClass("col-sm-10");
    $("#mainNavbar").show(1000);
    $("#view").show(1000);
});


$('.datepicker').datepicker({
    todayHighlight: true,
    autoclose: true,
    todayBtn: "linked",
    clearBtn: true,
    format: "dd-mm-yyyy",
    showOnFocus: true
});