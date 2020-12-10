'use strict';
// Declare app level module which depends on views, and core components
var app = angular.module('myApp', [
  'oitozero.ngSweetAlert'
]);

app.config(function ($sceDelegateProvider) {
  $sceDelegateProvider.resourceUrlWhitelist([
    'self',
    'nav',
    'footer',
    'home',
    '*'
  ]);
});

app.service('productsMaker', function () {
  this.getProducts = function (count, allComponents) {
    let products = [];
    for (let i = 1; i < count + 1; i++) {
      let components = [
        allComponents[Math.floor(Math.random() * (5 - 1) + 1)],
        allComponents[Math.floor(Math.random() * (9 - 6) + 6)],
        allComponents[Math.floor(Math.random() * (13 - 10) + 10)],
        allComponents[Math.floor(Math.random() * (17 - 14) + 14)],
        allComponents[Math.floor(Math.random() * (21 - 18) + 18)]
      ];
      let price = 0;
      let description = [];
      components.forEach(c => {
        price += c.price;
        description.push(c.name);
      });

      let product = {
        id: `${i}`,
        name: `Персональный компьютер #000${i}`,
        price: price + 2000, // наценка магазина 2000 лей
        description: description.join('/'),
        thumbnailUrl: `images/products/product${i}.png`,
        components: components
      };
      products.push(product);
    }
    console.log(products);
    return products;
  };
});
app.controller('indexCtrl', ['$scope', 'productsMaker', 'orderByFilter', function ($scope, productsMaker, orderBy) {
  $scope.productsMaker = productsMaker;
  $scope.isLoggedIn = false;
  $scope.isCartShown = false;
  $scope.login = function () {
    if ($scope.user.login !== '' && $scope.user.password !== '' && $scope.user.login === $scope.user.password) {
      $scope.isLoggedIn = true;
      Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
          toast.addEventListener('mouseenter', Swal.stopTimer)
          toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
      })
        .fire({
          icon: 'success',
          title: 'Signed in successfully'
        });
    }
    else {
      $scope.isLoggedIn = false;
      Swal.fire({
        title: 'Укажите совпадающие логин и пароль. Например: login: user password: user',
        icon: 'error'
      });
    }
  };
  $scope.calcTotal = function(){
    let total = 0;
    for(let i = 0; i < $scope.favoriteProducts.length; i++){
      total += $scope.favoriteProducts[i].price;
    }
    return total;
  };

  $scope.favoriteProducts = [
  ];
  $scope.addToFavorites = function(product){
    $scope.favoriteProducts.push(product);
    console.log($scope.favoriteProducts);
  }
  $scope.removeFromFavorites = function(product){
    let index = -1;
    for(let i = 0; i < $scope.favoriteProducts.length; i++){
      if($scope.favoriteProducts[i].id == product.id){
        index = i; break;
      }
    }
    if(index > -1){
      $scope.favoriteProducts.splice(index, 1);
    }
    console.log($scope.favoriteProducts);
  }
  $scope.getOldPrice = function () {
    return Math.floor(Math.random() * (1200 - 400) + 400);
  };
  $scope.sort = function(){

  };
  
  $scope.products = productsMaker.getProducts(3, [
      { id: "1", name: "intel core i3 8300", price: 5300, category: "CPU" },
      { id: "2", name: "intel core i5 8400K", price: 7380, category: "CPU" },
      { id: "3", name: "intel core i5 8400", price: 7300, category: "CPU" },
      { id: "4", name: "intel core i7 10700", price: 9300, category: "CPU" },
      { id: "5", name: "intel core i7 10700F", price: 9700, category: "CPU" },
  
      { id: "6", name: "8 gb DDR3", price: 1010, category: "RAM" },
      { id: "7", name: "16 gb DDR4", price: 2200, category: "RAM" },
      { id: "8", name: "32 gb DDR4", price: 5200, category: "RAM" },
      { id: "9", name: "64 gb DDR4", price: 10800, category: "RAM" },
  
      { id: "10", name: "380GB", price: 670, category: "HDD" },
      { id: "11", name: "500GB", price: 830, category: "HDD" },
      { id: "12", name: "240GB", price: 400, category: "HDD" },
      { id: "13", name: "1TB", price: 1090, category: "HDD" },
  
      { id: "14", name: "240GB", price: 1130, category: "SSD" },
      { id: "15", name: "500GB", price: 1600, category: "SSD" },
      { id: "16", name: "380GB", price: 1340, category: "SSD" },
      { id: "17", name: "1TB", price: 2300, category: "SSD" },
  
      { id: "18", name: "GTX 2080 Super 8Gb", price: 18900, category: "GPU" },
      { id: "19", name: "GTX 1050 Ti 4Gb", price: 3560, category: "GPU" },
      { id: "20", name: "GTX 2070 Super 8Gb", price: 12040, category: "GPU" },
      { id: "21", name: "GTX 1660 Super 6Gb", price: 5400, category: "GPU" }
    ]);

    $scope.propertyName = 'id';
    $scope.reverse = true;
    $scope.products = orderBy($scope.products, $scope.propertyName, $scope.reverse);
  
    $scope.sortingProperties = [
      'id',
      'name',
      'price'
    ];
    $scope.sortBy = function(propertyName) {
      $scope.reverse = (propertyName !== null && $scope.propertyName === propertyName)
          ? !$scope.reverse : false;
      $scope.propertyName = propertyName;
      $scope.products = orderBy($scope.products, $scope.propertyName, $scope.reverse);
    };
    
}]);