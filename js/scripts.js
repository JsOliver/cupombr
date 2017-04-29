$(".logindropdown").click(function(e) {

    var modals = $("#modalscheck");
    if(modals.hasClass('modalclose')){

        $('.modalclose').addClass("modalopen");
        $('.modalclose').removeClass("modalclose");

    }else{


        $('.modalopen').addClass("modalclose");
        $('.modalopen').removeClass("modalopen");

    }


});

function openmenu() {

    $('.closemenu').addClass('openmenu');
    $('.closecloseicon').addClass('opencloseicon');
    $('.opacityhomer').addClass('opacityhomeropen');
    $('.opacityhomer').removeClass('opacityhomer');
    $('.closecloseicon').removeClass('closecloseicon');
    $('.closemenu').removeClass('closemenu');

}
function closemenu() {

    $('.opacityhomeropen').addClass('opacityhomer');
    $('.opacityhomeropen').removeClass('opacityhomeropen');
    $('.openmenu').addClass('closemenu');
    $('.openmenu').removeClass('openmenu');
    $('.opencloseicon').addClass('closecloseicon');
    $('.opencloseicon').removeClass('opencloseicon');


}
