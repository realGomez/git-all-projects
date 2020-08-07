define([
    'jquery',
    'jquery/ui'
], function ($){
    $.widget('mage.newWedgit', {
        options: {var1:0},
        _create: function () {
            // 生成HTML，绑定事件

            console.log("newWedgit");
        },
        _init: function () {
            // 当前元素
            this.element;
            // 参数
            this.options;

            console.log(this.options);
        }
    });

    return $.mage.newWedgit;
});