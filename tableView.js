
var backUpCostumers = [];

function getCostumers() {
    fetch('http://localhost:8000/api/costumers')
    .then(response => response.json())
    .then(data => {
        backUpCostumers = data;
        syncCostumerTable(backUpCostumers);
    });
}

function syncCostumerTable(costumersArray){
    var viewTable = document.getElementById('costumers')
    viewTable.innerHTML = ""
    for (let i = 0; i < costumersArray.length; i++) {
        viewTable.innerHTML += `
            <tr>
                <td>${costumersArray[i].id}</td>
                <td>${costumersArray[i].first_name}</td>
                <td>${costumersArray[i].last_name}</td>
                <td>${costumersArray[i].birthday}</td>
                <td>${costumersArray[i].email}</td>
                <td>${costumersArray[i].phone}</td>
            </tr>
        `
    }
}

function searchCostumer() {
    var nameSearch = document.getElementById('searchCost').value;
    var costumerFound = [];
    for (let i = 0; i < backUpCostumers.length; i++) {
        if (backUpCostumers[i].first_name.toUpperCase().includes(nameSearch.toUpperCase())) {
            costumerFound.push(backUpCostumers[i])
        }
    }
    debugger;
    syncCostumerTable(costumerFound);
}

getCostumers();
