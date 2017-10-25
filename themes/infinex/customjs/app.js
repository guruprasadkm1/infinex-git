var myApp = angular.module('myApp',[]);
myApp.config(function ($interpolateProvider) {
  $interpolateProvider.startSymbol('{[{').endSymbol('}]}');
});

//myApp.directive('myDirective', function() {});
//myApp.factory('myService', function() {});

myApp.controller('MyCtrl',['$scope',function ($scope) {
    $scope.test = "Yes";
    $scope.empList = [
                    /*{"dept":"account","name":"John","gender":"male"},
                    {"dept":"sales","name":"Ram","gender":"male"},
                    {"dept":"travel","name":"Peter","gender":"male"},
                    {"dept":"hr","name":"jane","gender":"male"},
                    {"dept":"account","name":"rose","gender":"female"},
                    {"dept":"sales","name":"mary","gender":"female"},
                    {"dept":"sales","name":"mark","gender":"male"},
                    {"dept":"account","name":"maria","gender":"female"},
                    {"dept":"travel","name":"lee","gender":"male"},
                    {"dept":"sales","name":"hulk","gender":"male"},
                    {"dept":"hr","name":"spiderman","gender":"male"},
                    {"dept":"travel","name":"potter","gender":"male"}*/
					{
    "uc_product_family": "Capacitor",
    "uc_product_subfamily": "Aluminum Electrolytic & Polymer Capacitors",
    "uc_title": "InfineX Capacitors Series11",
    "uc_body": "Test test",
    "uc_model": "2",
    "uc_cost": "10.3",
    "uc_price": "56.3",
    "uc_weight": "12",
    "uc_weight_measure": "lb",
    "uc_height": "0.3",
    "uc_length": "0.6",
	"uc_image":"https://www.build-electronic-circuits.com/wp-content/uploads/2013/05/electrolytic-capacitor.jpg",
	"link":"../node/3"
  },
  {
    "uc_product_family": "Capacitor",
    "uc_product_subfamily": "Aluminum Electrolytic & Polymer Capacitors",
    "uc_title": "InfineX Capacitors Series11",
    "uc_body": "Test test",
    "uc_model": "2",
    "uc_cost": "12.3",
    "uc_price": "2.3",
    "uc_weight": "12",
    "uc_weight_measure": "lb",
    "uc_height": "0.3",
    "uc_length": "0.6",
	"uc_image":"https://www.build-electronic-circuits.com/wp-content/uploads/2013/05/electrolytic-capacitor.jpg",
	"link":"../node/3"
  },
  {
    "uc_product_family": "Inductors",
    "uc_product_subfamily": "DIP Power Type",
    "uc_title": "InfineX Inductors Series11",
    "uc_body": "Test test",
    "uc_model": "2",
    "uc_cost": "9.3",
    "uc_price": "6.3",
    "uc_weight": "12",
    "uc_weight_measure": "lb",
    "uc_height": "0.3",
    "uc_length": "0.6",
	"uc_image":"https://www.electrical4u.com/electrical/wp-content/uploads/2014/04/inductor-1.jpg",
	"link":"../node/3"
  },
  {
    "uc_product_family": "Inductors",
    "uc_product_subfamily": "Molding Power Type",
    "uc_title": "InfineX Inductors Series22",
    "uc_body": "Test test",
    "uc_model": "2",
    "uc_cost": "23.3",
    "uc_price": "11.3",
    "uc_weight": "12",
    "uc_weight_measure": "lb",
    "uc_height": "0.3",
    "uc_length": "0.6",
	"uc_image":"https://www.electrical4u.com/electrical/wp-content/uploads/2014/04/inductor-1.jpg",
	"link":"../node/3"
	
  },
  {
    "uc_product_family": "Inductors",
    "uc_product_subfamily": "Multilayer Chip Type",
    "uc_title": "InfineX Inductors Series33",
    "uc_body": "Test test",
    "uc_model": "2",
    "uc_cost": "12.3",
    "uc_price": "16.3",
    "uc_weight": "12",
    "uc_weight_measure": "lb",
    "uc_height": "0.3",
    "uc_length": "0.6",
	"uc_image":"https://www.electrical4u.com/electrical/wp-content/uploads/2014/04/inductor-1.jpg",
	"link":"../node/3"
  }
                ];
    
}]);


//filter Multiple...
myApp.filter('filterMultiple',['$filter',function ($filter) {
	return function (items, keyObj) {
		var filterObj = {
							data:items,
							filteredData:[],
							applyFilter : function(obj,key){
								var fData = [];
								if(this.filteredData.length == 0)
									this.filteredData = this.data;
								if(obj){
									var fObj = {};
									if(angular.isString(obj)){
										fObj[key] = obj;
										fData = fData.concat($filter('filter')(this.filteredData,fObj));
									}else if(angular.isArray(obj)){
										if(obj.length > 0){	
											for(var i=0;i<obj.length;i++){
												if(angular.isString(obj[i])){
													fObj[key] = obj[i];
													fData = fData.concat($filter('filter')(this.filteredData,fObj));	
												}
											}
											
										}										
									}									
									if(fData.length > 0){
										this.filteredData = fData;
									}
								}
							}
				};

		if(keyObj){
			angular.forEach(keyObj,function(obj,key){
				filterObj.applyFilter(obj,key);
			});			
		}
		
		return filterObj.filteredData;
	}
}]);

myApp.filter('unique', function() {
    return function(input, key) {
        var unique = {};
        var uniqueList = [];
        for(var i = 0; i < input.length; i++){
            if(typeof unique[input[i][key]] == "undefined"){
                unique[input[i][key]] = "";
                uniqueList.push(input[i]);
            }
        }
        return uniqueList;
    };
});