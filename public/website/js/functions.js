// js obfuscated
(function(_0x68cbx1) {
    'use strict';
    _0x68cbx1(window)['on']('load', function() {
        _0x68cbx1('[data-loader="circle-side"]')['fadeOut']();
        _0x68cbx1('#preloader')['delay'](350)['fadeOut']('slow');
        _0x68cbx1('body')['delay'](350)['css']({
            "\x6F\x76\x65\x72\x66\x6C\x6F\x77": 'visible'
        })
    });
    _0x68cbx1('.tooltip-1')['tooltip']({
        html: true
    });
    _0x68cbx1('input.icheck')['iCheck']({
        checkboxClass: 'icheckbox_square-grey',
        radioClass: 'iradio_square-grey'
    });
    _0x68cbx1('.team-carousel')['owlCarousel']({
        items: 1,
        loop: false,
        margin: 10,
        autoplay: false,
        smartSpeed: 300,
        responsiveClass: false,
        responsive: {
            320: {
                items: 1
            },
            768: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    })
})(window['jQuery'])

function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}
