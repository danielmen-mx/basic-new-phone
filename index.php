<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="/style.css">
    <title>App in phone</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h1>Apis</h1>
                    </div>
                    <div class="card-body">
                        <h4>Search Costumer</h4>
                        <div class="row g-2">
                            <div class="col">
                                <input type="text" id="searchCost" class="form-control" style="width: 100%;" placeholder="Search">
                            </div>
                            <div class="col-auto">
                                <button onclick="searchCostumer()" class="btn btn-primary">Search</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Birthday</th>
                                    <th>E-mail</th>
                                    <th>Phone</th>
                                </tr>
                            </thead>
                            <tbody class="table table-hover" id="costumers">
                            </tbody>
                        </table>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h1>Add Customer</h1>
                        </div>
                        <form>
                            <div class="form-group">
                                <label for="first_name">First Name</label>
                                <input type="text" id="first_name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="last_name">Last Name</label>
                                <input type="text" id="last_name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="birthdar">Birthday</label>
                                <input type="date" id="birthday" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="email" id="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" id="phone" class="form-control">
                            </div>
                            <div>
                                <button type="button" class="btn btn-primary" onclick="createCustomer()">Add</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="tableView.js"></script>
<script src="create.js"></script>
</body>
</html>