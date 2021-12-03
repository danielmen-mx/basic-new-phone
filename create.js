
function createCustomer() {
    var costumerDetails = {
        first_name : document.getElementById('first_name').value,
        last_name : document.getElementById('last_name').value,
        birthday : document.getElementById('birthday').value,
        email : document.getElementById('email').value,
        phone : document.getElementById('phone').value
    };
    fetch('http://localhost:8000/api/costumers', {
        method: 'POST',
        body: JSON.stringify(costumerDetails),
        headers: {
            "Content-type": "application/json; charset=UTF-8"
        }
    })
    .then(response => response.json())
    .then(data => {
        console.log(data);
        backUpCostumers.push(data);
        syncCostumerTable(backUpCostumers);
        document.getElementById('first_name').value = "";
        document.getElementById('last_name').value = "";
        document.getElementById('birthday').value = "";
        document.getElementById('email').value = "";
        document.getElementById('phone').value = "";
    });
}