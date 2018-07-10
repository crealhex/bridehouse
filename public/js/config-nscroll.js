let fixed_menu = true;
window.jQuery = window.$ = jQuery;

/*-----------------------------------------------------------------------------------*/
/*	CONFIGURACION DEL SCROLLBAR
/*-----------------------------------------------------------------------------------*/
jQuery(document).ready(function() {
	jQuery("body").niceScroll({
		zindex: "500",
    cursoropacitymin: 0,
    cursoropacitymax: 1,
    cursorcolor: "#E53B43",
    cursorwidth: "8px",
    cursorborder: "0px solid #fff",
    cursorborderradius: "0px",
    scrollspeed: 40,
    mousescrollstep: 9 * 3,
    touchbehavior: false,   // deprecated
    emulatetouch: false,    // replacing touchbehavior
    hwacceleration: true,
    usetransition: true,
    boxzoom: false,
    dblclickzoom: true,
    gesturezoom: true,
    grabcursorenabled: true,
    autohidemode: false,
    background: "rgb(231, 229, 227)",
    iframeautoresize: true,
    cursorminheight: 32,
    preservenativescrolling: true,
    railoffset: true,
    railhoffset: false,
    bouncescroll: true,
    spacebarenabled: true,

		railpadding: {
      top: 0,
      right: 0,
      left: 0,
      bottom: 0
    },

		disableoutline: true,
    horizrailenabled: true,
    railalign: "right",
    railvalign: "bottom",
    enabletranslate3d: true,
    enablemousewheel: true,
    enablekeyboard: true,
    smoothscroll: true,
    sensitiverail: true,
    enablemouselockapi: true,

		cursorfixedheight: false,
    directionlockdeadzone: 6,
    hidecursordelay: 400,
		nativeparentscrolling: true,
    enablescrollonselection: true,
    overflowx: true,
    overflowy: true,
		cursordragspeed: 0.3,
    rtlmode: "auto",
    cursordragontouch: false,
    oneaxismousemode: "auto",
		preventmultitouchscrolling: true,
    disablemutationobserver: false,
    enableobserver: true,
    scrollbarid: false
	});
});
