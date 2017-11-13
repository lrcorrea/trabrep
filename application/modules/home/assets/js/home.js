"use strict";

function HOme() {
    this.init();
};

HOme.prototype.init = function(){
    var self = this;
    $('#open-menu').on('click', function(e){
        $('body').toggleClass('menu-open');
    });
};

$(document).ready(function(){
    new HOme();
});