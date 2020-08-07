define(
    [
        'jquery',
        'ko',
        'uiComponent'
    ],
    function ($,ko, Component) {
        "use strict";
        var listCustomers = ko.observableArray([]);
        return Component.extend({

            getListCustomers : function(){
                if(!listCustomers().length) {
                    jQuery.ajax({
                        url: 'http://louis.com/public_html/magento2/index.php/webpos/index/customerList',
                        type: 'POST',
                        complete: function (data) {
                            listCustomers(JSON.parse(data.responseText));
                        },
                    });
                }
                return listCustomers;
            }
        });
    }
);