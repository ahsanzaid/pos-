var POS = angular.module('POS', [])

POS.config(function () {

});

POS.run(function () {

});

function getUnique(arr, comp) {

    //store the comparison  values in array
    const unique = arr.map(e => e[comp]).
        // store the keys of the unique objects
        map((e, i, final) => final.indexOf(e) === i && i)
        // eliminate the dead keys & return unique objects
        .filter((e) => arr[e]).map(e => arr[e]);

    return unique

}

// function invoiceTotal(cart) {
//     var sum = 0.0;
//     for (var i = 0; i < cart.length; i++) {
//         sum = sum + cart[i].total;
//     }
//     return sum;
// }

POS.controller('InvoiceController', ['$scope', '$http', function ($scope, $http) {

    $scope.cart = [];
    // $scope.invoice = {
    //     no: "sss",
    //     total: 0.0
    // };

    $scope.qtyUpdate = function (item) {
        var index = $scope.cart.indexOf(item);
        $scope.cart[index].qty = item.qty;
        // $scope.invoice.total = invoiceTotal($scope.cart);

    }
    $scope.productRemove = function (c) {
        var index = $scope.cart.indexOf(c);
        if (index > -1) {
            $scope.cart.splice(index, 1);
        }
    }

    $scope.productSearch = function (search) {
        if (search.length != 0) {
            $http.get("/pos/productapiSearch?pname=" + search)
                .then(function (response) {
                    $scope.products = response.data;
                });
        }
    }


    $scope.addProduct = function (p) {
        var index = $scope.products.indexOf(p);
        var item = new Object();
        item.id = $scope.products[index].p_id;
        item.name = $scope.products[index].pname;
        item.type = $scope.products[index].ptype;
        item.up = $scope.products[index].unit_price;
        item.qty = 1;
        item.total = item.up * item.qty;
        $scope.cart.push(item);
        $scope.cart = getUnique($scope.cart, "id");
        document.getElementById("input1-group2").focus();
    }

    $scope.invoiceSubmit = function () {
        console.log($scope.cart)
        $http({
            url: '/pos/invoiceGenerate',
            method: "POST",
            data: "data="+JSON.stringify($scope.cart),
            headers: {
                "Content-Type": "application/x-www-form-urlencoded"
            }
        })
            .then(function (response) {
                // $scope.cart = [];
                // $scope.invoice = {
                //     no: "sss",
                //     total: 0.0
                // };
                $scope.cart = [];
            },
                function (response) { 
                    console.log(response);
                    $scope.cart = [];
                });
               // console.log(JSON.stringify($scope.cart));
                //
    }

}]);