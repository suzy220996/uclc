app.controller('testcontroller', function ($scope,$state,utepResource) {
    var utepresource = new utepResource();
    
    $scope.samplevariable ="TESTING DONE";

    //sample untuk akses service index di dalam utep resource
    utepresource.$index(function(data){

    });

});