<?php require 'partials/_header.php'; ?>
<div class="row"  ng-controller="InvoiceController">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong>Search Products</strong>
            </div>
            <div class="card-body card-block">
                <!-- <form action="#" method="post" class="form-horizontal"> -->
                    <div class="row form-group">
                        <div class="col col-md-12">
                            <div class="input-group">

                                <input type="text" id="input1-group2" ng-model="search" placeholder="Search Product" ng-keyup="productSearch(search)" class="form-control">
                                <!-- <div class="input-group-btn">
                                    <button class="btn btn-primary">
                                        <i class="fa fa-search"></i> Search
                                    </button>
                                </div> -->
                            </div>
                        </div>
                    </div>
                <!-- </form> -->
                <button type="button"class="btn btn-outline-success btn-lg active">Save</button>
                <button type="button" ng-click="invoiceSubmit()" class="btn btn-outline-primary btn-lg active">Check Out</button>
                <!-- <h3 style="align:inline;"></h3> -->
            </div>

        </div>
    </div>

    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Searched Product</strong>
            </div>
            <div class="table-stats order-table ov-h">
                <table class="table ">
                    <thead>
                        <tr>

                            <th>ID</th>
                            <th>Name</th>
                            <th>TYPE</th>
                            <th>SIZE</th>
                            <th>Upri</th>
                            <th>Add</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr ng-repeat="p in products | filter:search">
                            <td>#{{p.p_id}}</td>
                            <td><span class="name">{{p.pname}}</span></td>
                            <td><span class="product">{{p.ptype}}</span></td>
                            <td><span class="product">{{p.size}}</span></td>
                            <td><span class="product">{{p.unit_price}}</span></td>
                            <td>
                                <button type="button"  ng-click="addProduct(p)" class="btn btn-success">Add</button>
                                
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div> <!-- /.table-stats -->
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Cart</strong>
                
            </div>
            <div class="table-stats order-table ov-h">
                <table class="table ">
                    <thead>
                        <tr>

                            <th>ID</th>
                            <!-- <th>TYPE</th> -->
                            <th>Name</th>
                            <th>UP</th>
                            <th class="avatar">qty</th>
                            <th>tot</th>
                            <th>X</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr ng-repeat="c in cart">
                            <td>#{{c.id}}</td>
                            <!-- <td><span class="product">{{c.type}}</span></td> -->
                            <td><span class="product">{{c.type.substr(0, 3)}} {{c.name}}</span></td>

                            <td><span class="product">{{c.up}}</span></td>
                            <td class="avatar">
                                <div class="round-img">
                                    <input type="number" min="1" ng-model="c.qty" ng-click="qtyUpdate(c)" class="form-control" width="25" height="25"/>
                                </div>
                            </td>
                            <td><span class="product">{{(c.qty * c.up).toFixed(2)}}</span></td>
                            <td style="cursor:pointer;"><a ng-click="productRemove(c)" ><span class="product">X</span></a></td>
                        </tr>

                    </tbody>
                </table>
            </div> <!-- /.table-stats -->
        </div>
    </div>
</div>
<?php require 'partials/_footer.php'; ?>