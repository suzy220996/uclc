(function () {
    "use strict";
    angular
        .module("common.services")
        .factory("utepResource",
                ["$resource",
                 utepResource]);
    function utepResource($resource) {
                // set alamat service yg akan di panggil
        return $resource("/api/utep/:action/:_id",
               { _id: '@_id' },
               {
        //nama service    method
                 index: { method: 'GET'},
        //nama service    method                 nama action
                 create: { method: 'GET',params:{action:'create'}},
               })
    }
}());