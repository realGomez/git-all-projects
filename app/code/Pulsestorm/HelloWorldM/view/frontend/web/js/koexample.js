// <Inchoo_Js>/view/frontend/web/js/koexample.js
define(['ko', 'uiComponent'], function(ko, Component) {
    return Component.extend({
        defaults: {
            firstname: 'william',
            lastname: 'wen',
            fullname: '',
            myTimer: ko.observable(0),
        },



        initialize: function () {
            var self = this;
            this._super();
            // 定义observe对象，与ko.observable()一样
            this.observe([
                'firstname',
                'lastname'
            ]);
            // ko以observe对象同步数据，ko.computed()把多个observe结果包装成一个observe，实现复杂的数据同步
            this.fullname = ko.computed(function(){
                return self.firstname()+' '+self.lastname();
            });
            console.log(this.param1);

            this.incrementTime();

            // var t = 0;
            // setInterval(function() {
            //     t++;
            //     self.myTimer(t);
            // }, 1000);
        },

        getCount: function() {
            var cart = customerData.get('cart');
            return cart().summary_count;
        },

        // increment myTimer every second
        incrementTime: function() {
            var self = this;
            var t = 0;
            setInterval(function() {
                t++;
                self.myTimer(t);
            }, 1000);
        }

    });
});