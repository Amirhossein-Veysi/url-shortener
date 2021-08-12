//! Variable

let dElNvBrClps = $('.navbar-collapse-sm');

//! DOM Event

$(window).on('resize', deNvBrClpsHidHandler);

//! DOM Event Handler

function deNvBrClpsHidHandler(){
    if($(window).width() >= 567){
        $('.navbar-collapse-sm').attr('style', 'display: none !important;');
    }else{
        $('.navbar-collapse-sm').attr('style', '');
    }
}

//! Aditinal Functions

//! Aditinal Call

deNvBrClpsHidHandler();