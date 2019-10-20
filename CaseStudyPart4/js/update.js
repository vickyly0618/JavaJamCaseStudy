function checkbox_drink_1() {
    var flag_1 = document.getElementById("enable_drink_1").checked;

    if (flag_1) {
        document.getElementById("drink_1_price").disabled = false;
    }
    else {
        document.getElementById("drink_1_price").disabled = true;
    }
}

function checkbox_drink_2() {
    var flag_1 = document.getElementById("enable_drink_2").checked;

    if (flag_1) {
        document.getElementById("drink_2_single_price").disabled = false;
        document.getElementById("drink_2_double_price").disabled = false;

    }
    else {
        document.getElementById("drink_2_single_price").disabled = true;
        document.getElementById("drink_2_double_price").disabled = true;

    }
}

function checkbox_drink_3() {
    var flag_1 = document.getElementById("enable_drink_3").checked;

    if (flag_1) {
        document.getElementById("drink_3_single_price").disabled = false;
        document.getElementById("drink_3_double_price").disabled = false;
    }
    else {
        document.getElementById("drink_3_single_price").disabled = true;
        document.getElementById("drink_3_double_price").disabled = true;
    }
}