// initialisation
var drink_1_total_price = 0;
var drink_2_total_price = 0;
var drink_3_total_price = 0;
var total_price = 0;

// helper function
function IsInteger(qnt) {
    if ((!isNaN(qnt)) && (qnt.indexOf('.') == -1)) return true;
    else  return false;
}

function UpdatePrice(qnt,price) {
    var item_total = 0;
    item_total = qnt * price;
    if (isNaN(item_total)) item_total = 0;
    return item_total;
}

function Subtotal() {
    total_price = drink_1_total_price + drink_2_total_price + drink_3_total_price;
    document.getElementById("sub_total").innerHTML = total_price.toFixed(2);
}

// Events
function CalculateTotalPrice_1(){
    var drink_1_qnt = 0;
    var drink_1_price=0.00;
    // drink_1_qnt = document.getElementById("drink_1_qnt").value;
    drink_1_price = parseFloat(document.getElementById("drink_1_price").textContent).toFixed(2);
    drink_1_qnt = document.getElementById("drink_1_qnt").value;

    if (IsInteger(drink_1_qnt)){ //check valid input quantity
        drink_1_qnt = parseInt(document.getElementById("drink_1_qnt").value);
        drink_1_total_price = UpdatePrice(drink_1_qnt,drink_1_price);
        if (isNaN(drink_1_total_price)) drink_1_total_price = 0;
        var element  = document.getElementById("drink_1_total_price");
        element.innerHTML = drink_1_total_price.toFixed(2);
    }
    else {
        alert("Please input integer quantity.");
        document.getElementById("drink_1_qnt").value = "0"
    }
    Subtotal();
    return drink_1_total_price;
}

function CalculateTotalPrice_2(){
    var drink_2_qnt = 0;
    var drink_2_price = 0.00;

    var single = document.getElementById("drink_2_single");
    var double = document.getElementById("drink_2_double");

    if (!(single.checked) && !(double.checked)){
        alert("Please choose your drink size.");
        document.getElementById("drink_2_qnt").value = "" ;
    }
    else {
        if (single.checked) {
            drink_2_price = parseFloat(document.getElementById("drink_2_single_price").textContent).toFixed(2);
            
        }
        else if (double.checked) {
            drink_2_price = parseFloat(document.getElementById("drink_2_double_price").textContent).toFixed(2);
        }

        drink_2_qnt = document.getElementById("drink_2_qnt").value;

        if (IsInteger(drink_2_qnt)){
            drink_2_qnt = parseInt(document.getElementById("drink_2_qnt").value);
            drink_2_total_price = UpdatePrice(drink_2_qnt,drink_2_price);
            if (isNaN(drink_2_total_price)) drink_2_total_price = 0;
            var element  = document.getElementById("drink_2_total_price");
            element.innerHTML = drink_2_total_price.toFixed(2);
            Subtotal();
        }
        else {
            alert("Please input int quantity.");
            document.getElementById("drink_2_qnt").value = ""
        }
    }
}

function CalculateTotalPrice_3(){
    var drink_3_qnt = 0;
    var drink_3_price=0.00;

    var single = document.getElementById("drink_3_single");
    var double = document.getElementById("drink_3_double");

    if (!(single.checked) && !(double.checked)){
        alert("Please choose your drink size.");
        document.getElementById("drink_3_qnt").value = "" ;
    }
    else {
        if (single.checked) {
            drink_3_price = parseFloat(document.getElementById("drink_3_single_price").textContent).toFixed(2);
        }
        else if (double.checked) {
            drink_3_price = parseFloat(document.getElementById("drink_3_double_price").textContent).toFixed(2);
        }

        drink_3_qnt = document.getElementById("drink_3_qnt").value;

        if (IsInteger(drink_3_qnt)){
            drink_3_qnt = parseInt(document.getElementById("drink_3_qnt").value);
            drink_3_total_price = UpdatePrice(drink_3_qnt,drink_3_price);
            if (isNaN(drink_3_total_price)) drink_3_total_price = 0;
            var element  = document.getElementById("drink_3_total_price");
            element.innerHTML = drink_3_total_price.toFixed(2);
            Subtotal();
        }
        else {
            alert("Please input int quantity.");
            document.getElementById("drink_3_qnt").value = ""
        }
    }
}


