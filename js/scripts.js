/*!
    * Start Bootstrap - SB Admin v6.0.1 (https://startbootstrap.com/templates/sb-admin)
    * Copyright 2013-2022 Start Bootstrap
    * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-sb-admin/blob/master/LICENSE)
    */
    (function($) {
    "use strict";

    // Add active state to sidbar nav links
    var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
        $("#layoutSidenav_nav .sb-sidenav a.nav-link").each(function() {
            if (this.href === path) {
                $(this).addClass("active");
            }
        });

    // Toggle the side navigation
    $("#sidebarToggle").on("click", function(e) {
        e.preventDefault();
        $("body").toggleClass("sb-sidenav-toggled");
    });

    $('.toTop').click(function() {
        $('body,html').animate({scrollTop:0},800);
      });
})(jQuery);

function Modal(){

    var BG_HM_T = document.querySelector("#modal-header-test");
    var BG_BM_T = document.querySelector("#ModalBodytest");
    var BG_HM_V = document.getElementById("InputModalHeaderColor").value;
    var TX_HM_V = document.getElementById("InputModalHeaderText").value;
    var BG_BM_V = document.getElementById("InputModalBodyColor").value;
    var TX_BM_V = document.getElementById("InputModalBodyText").value;
    BG_HM_T.setAttribute("style", "background-color:" + BG_HM_V + "; color:" + TX_HM_V);
    BG_BM_T.setAttribute("style", "background-color:" + BG_BM_V + "; color:" + TX_BM_V);
}

function BasicStyle() {

    var BTN_P_V     = document.getElementById("SelectBtnPrimary").value;
    var BOD_BG_V    = document.getElementById("InputWebBgColor").value;
    var BTN_S_V     = document.getElementById("SelectBtnSecondary").value;
    var FOOT_BG_V   = document.getElementById("InputFootColor").value;
    var FOOT_TX_V   = document.getElementById("InputFootText").value;
    var BAR_BG_V    = document.getElementById("InputBarColor").value;

    var BAR_BG_T    = document.querySelector("#navbar");
    var BAR_BG_T_S  = document.querySelector("#sidenavAccordion");
    var BTN_P_T     = document.querySelector("#ButtonPrimaryTest");
    var BTN_S_T     = document.querySelector("#ButtonSecondaryTest");
    var FOOT_T_2    = document.querySelector("#SecondaryFooter");
    var FOOT_T_S    = document.querySelector("#footer-side");
    var FOOT_T      = document.querySelector("#footer");
    var BOD_BG_T    = document.querySelector("#body");

    BAR_BG_T.setAttribute("style", "background-color:" + BAR_BG_V);
    BAR_BG_T_S.setAttribute("style", "background-color:" + BAR_BG_V);
    FOOT_T_2.setAttribute("style", "background-color:" + BAR_BG_V);
    BTN_P_T.setAttribute("class", "btn w-100 " + BTN_P_V);
    BTN_S_T.setAttribute("class", "btn w-100 " + BTN_S_V);
    BOD_BG_T.setAttribute("style", "background-color:" + BOD_BG_V);
    FOOT_T.setAttribute("style", "background-color:" + FOOT_BG_V + "; color:" + FOOT_TX_V);
    FOOT_T_S.setAttribute("style", "background-color:" + FOOT_BG_V + "; color:" + FOOT_TX_V + "; display: -webkit-box");

}

function DivExtra1(){

    var DIV1_BG_V = document.getElementById("InputExtraBackground1").value;
    var DIV1_TX_V = document.getElementById("InputExtraText1").value;

    var DIV1_SELECTOR = document.querySelector("#ExtraDiv1");

    DIV1_SELECTOR.setAttribute("style", "background-color:" + DIV1_BG_V + "; color:" + DIV1_TX_V);
}

/*
document.onkeydown = function(e) {
    if (e.ctrlKey &&
        (e.keyCode === 67 ||
         e.keyCode === 83 ||
         e.keyCode === 85 ||
         e.keyCode === 86 ||
         e.keyCode === 117)) {
        alert('Nope!');
        return false;
    } else {
        return true;
    }
};
window.oncontextmenu = function() {
    return false;
}*/