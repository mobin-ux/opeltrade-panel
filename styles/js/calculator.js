$(function () {
    DoCalculate();
});

function DoCalculate() {
    var temp1 = $("#txtAmount").val();
    if (temp1.length == 0) {
        temp1 = 0
    }

    var initial = parseFloat(temp1),
        rate = 0.0;

    if(initial < 10){
        $("#hourlyProfit").text("0.00");
        $("#dailyProfit").text("0.00");
        $("#totalProfit").text("0.00");
        $("#totalReturn").text("0.00");
    } else {
        if (initial < 1000) {
            rate =0.15 / 100;
            $("#hourlyProfit").html(parseFloat(initial * rate).toFixed(2));
            $("#dailyProfit").html(parseFloat(initial * rate * 24).toFixed(2));
            $("#weeklyProfit").html(parseFloat((initial * rate * 7 * 24)).toFixed(2));
            $("#monthlyProfit").html(parseFloat((initial * rate * 30 * 24)).toFixed(2));

        }
        else if (initial >= 1000 && initial < 5000) {
            rate = 0.17 / 100;
            $("#hourlyProfit").html(parseFloat(initial * rate).toFixed(2));
            $("#dailyProfit").html(parseFloat(initial * rate * 24).toFixed(2));
            $("#weeklyProfit").html(parseFloat((initial * rate * 7 * 24)).toFixed(2));
            $("#monthlyProfit").html(parseFloat((initial * rate * 30 * 24)).toFixed(2));
        }
        else if (initial >= 5000) {
            rate = 0.20 / 100;
            $("#hourlyProfit").html(parseFloat(initial * rate).toFixed(2));
            $("#dailyProfit").html(parseFloat(initial * rate * 24).toFixed(2));
            $("#weeklyProfit").html(parseFloat((initial * rate * 7 * 24)).toFixed(2));
            $("#monthlyProfit").html(parseFloat((initial * rate * 30 * 24)).toFixed(2));
        }
    }
}


$("#txtAmount").keyup(function() {
    initial = $(this).val();
    if (initial < 1000) {
        $("#plan1").prop("checked", true);
    }
    else if (initial >= 1000 && initial < 5000) {
        $("#plan2").prop("checked", true);
    }
    else if (initial >= 5000) {
        $("#plan3").prop("checked", true);
    }
    DoCalculate();
});

$(".planRadio").change(function() {
    initial = $("#txtAmount").val();
    if ($("#plan1").is(":checked")) {
        if (initial >= 1000) {
            $("#txtAmount").val(10);
        }
    } else if ($("#plan2").is(":checked")) {
        if (initial < 1000 || initial >= 5000){
            $("#txtAmount").val(1000);
        }
    } else if ($("#plan3").is(":checked")) {
        if (initial < 5000) {
            $("#txtAmount").val(5000);
        }
    }
    DoCalculate();
});


$("#txtAmount").blur(function () {
    if ($("#txtAmount").val()<10 || !$("#txtAmount").val()){
        $("#txtAmount").val(10);
    }
    DoCalculate();
}).trigger('blur');

// $(".planRadio").bind("change", function () {
//     DoCalculate();
// });


