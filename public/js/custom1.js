
var tpj = jQuery;
tpj(document).ready(function () {
    "use strict";
    if (tpj.fn.cssOriginal !== undefined)
        tpj.fn.css = tpj.fn.cssOriginal;
    tpj('.fullwidthbanner').revolution(
        {
            delay: 9000,
            startwidth: 1170,
            startheight: 440,
            onHoverStop: "on",
            thumbWidth: 100,
            thumbHeight: 50,
            thumbAmount: 4,
            hideThumbs: 200,
            navigationType: 'none',
            navigationArrows: "verticalcentered", 	//nexttobullets, verticalcentered, none
            navigationStyle: "large",
            touchenabled: "on",
            navOffsetHorizontal: 0,
            navOffsetVertical: 20,
            fullWidth: "on",
            shadow: 0
        });
});
