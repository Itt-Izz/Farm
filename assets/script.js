$(document).ready(function() {
    $('#table_id').DataTable();
    $('#table_flock').DataTable();
    $('#table_income').DataTable();
    $('#table_type').DataTable();
});



$('.chev').click(function() {
    $(this).toggleClass("glyphicon-chevron-up glyphicon-chevron-down");
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
$(".editbtn").click(function() {
    $("#editModal").modal('show')

    $tr = $(this).closest('tr');

    var data = $tr.children("td").map(function () {
        return $(this).text();
    }).get();

    console.log(data);

    $('#id').val(data[0]);
    $('#no').val(data[1]);
    $('#dateIn').val(data[2]);
    $('#type').val(data[3]);
    $('$stock').val(data[4]);
    $('#age').val(data[5]);
    $('#state').val(data[6]);


});


$('.datepicker').datepicker({
    todayHighlight: true,
    autoclose: true,
    todayBtn: "linked",
    clearBtn: true,
    format: "dd-mm-yyyy",
    showOnFocus: true
});

//Ajax