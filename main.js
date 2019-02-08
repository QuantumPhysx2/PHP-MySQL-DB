// Refer to: https://datatables.net/
var productInput = document.querySelector("#product");
var unitCostInput = document.querySelector("#unitCost");
var amountInput = document.querySelector("#amount");
var totalCostInput = document.querySelector("#totalCost");
var markupInput = document.querySelector("#markUp");
var sellEachInput = document.querySelector("#sellEach");
var sellPriceTotalInput = document.querySelector("#sellPriceTotal");
var marginPerPieceInput = document.querySelector("#marginPerPiece");
var marginTotalInput = document.querySelector("#marginTotal");

document.querySelector("#product").addEventListener("change", function() {
    if (this.options[this.selectedIndex].value == "Yealink t42s") {
        unitCostInput.value = 149;
    } else if (this.options[this.selectedIndex].value == "Yealink t46s") {
        unitCostInput.value = 205;
    } else if (this.options[this.selectedIndex].value == "Yealink Cordless") {
        unitCostInput.value = 123;
    } else if (this.options[this.selectedIndex].value == "Yealink DSS") {
        unitCostInput.value = 111;
    } else if (this.options[this.selectedIndex].value == "Yealink Extension") {
        unitCostInput.value = 111;
    } else if (this.options[this.selectedIndex].value == "PRO 4 Sim Calls") {
        unitCostInput.value = 233;
    } else if (this.options[this.selectedIndex].value == "PRO 8 Sim Calls") {
        unitCostInput.value = 458;
    } else if (this.options[this.selectedIndex].value == "PRO 16 Sim Calls") {
        unitCostInput.value = 1048;
    } else if (this.options[this.selectedIndex].value == "PRO 32 Sim Calls") {
        unitCostInput.value = 2011;
    } else if (this.options[this.selectedIndex].value == "PRO 64 Sim Calls") {
        unitCostInput.value = 4029;
    } else if (this.options[this.selectedIndex].value == "PRO 128 Sim Calls") {
        unitCostInput.value = 7755;
    } else if (this.options[this.selectedIndex].value == "PRO 256 Sim Calls") {
        unitCostInput.value = 0;
    } else if (this.options[this.selectedIndex].value == "PRO 512 Sim Calls") {
        unitCostInput.value = 0;
    } else if (this.options[this.selectedIndex].value == "PRO 1024 Sim Calls") {
        unitCostInput.value = 0;
    } else if (this.options[this.selectedIndex].value == "Enterprise 32 Sim Calls") {
        unitCostInput.value = 25;
    } else {
        alert("Error: That value is not defined within scope")
    };

    amountInput.value = 1;
    updateInputs();
});

function updateInputs() {
    setInterval(function() {
        totalCostInput.value = parseFloat((unitCostInput.value * amountInput.value).toFixed(2));
        markupInput.value = parseFloat((totalCostInput.value * 1.4).toFixed(2));
        sellEachInput.value = parseFloat((markupInput.value / amountInput.value).toFixed(2))
        sellPriceTotalInput.value= parseFloat((sellEachInput.value * amountInput.value).toFixed(2));
        marginPerPieceInput.value = parseFloat((sellEachInput.value - unitCostInput.value).toFixed(2));
        marginTotalInput.value = parseFloat((marginPerPieceInput.value * amountInput.value).toFixed(2));
    
         // Check for positive net margin
        if (sellPriceTotalInput.value > 0 && marginPerPieceInput.value > 0 && marginTotalInput.value > 0) {
            sellEachInput.style.color = "green"
            sellPriceTotalInput.style.color = "green";
            marginPerPieceInput.style.color = "green";
            marginTotalInput.style.color = "green";
        } else {
            sellEachInput.style.color = "red"
            sellPriceTotalInput.style.color = "red";
            marginPerPieceInput.style.color = "red";
            marginTotalInput.style.color = "red";
        };
    }, 100);
};