var formArr = [];
var prices = {
	"R01": 32.95,
	"G01": 24.95,
	"B01": 7.95
}


//Calculate cost
function calculateTotalCost() {
	var orderCost = 0;
	for (var i = 0; i < formArr.length; i ++) {
		orderCost += prices[formArr[i]];
	}
	if (formArr.filter(item => item == "R01").length > 1) {
		orderCost -= prices["R01"]/2;
    }
    //Delivery Cost Calculation
    var delieveryCost = (orderCost >= 90) ? 0 : (orderCost >= 50) ? 2.95 : (orderCost == 0) ? 0 :4.95;
    //Calculate Total
	var total = Math.floor((orderCost + delieveryCost) * 100) / 100;

    document.getElementById("Sub Total").innerHTML = "$" + orderCost;
    document.getElementById("Delivery Cost").innerHTML = "$" + delieveryCost;
	document.getElementById("Total Cost").innerHTML = "$" + total;
}
//Calculate cost after deleted a product
function recalculateCost() {
    var html = ``;
    for (var i = 0; i < formArr.length; i++) {
        html += `<tr>
					<td>
						${formArr[i]}
					</td>
					<td>
						<button onclick="onDelete(${i})">Delete</button>
					</td>
				</tr>`;
    }
    document.getElementById("cost-form-body").innerHTML = html;
}

function onDelete(index) {
	formArr.splice(index, 1);
    recalculateCost();
    calculateTotalCost();
}

function addProductCart() {
	var productCode = document.getElementById("product-code").value;
	if (!prices[productCode]) {
		alert("incorrect product code");
		return;
	}
	formArr.push(productCode);
    recalculateCost();
    calculateTotalCost();
}
