//! Variable

let scrlSmSiz = 567;

//! DOM Event

$(window).on('resize', deNvBrClpsHidHandler);

$('.next-btn').on('click', deUrlInpMovrToLft);

$('.previous-btn').on('click', deUrlInpMovrToRigt);

//! DOM Event Handler

function deNvBrClpsHidHandler(){
    if($(window).width() >= scrlSmSiz){
        $('.navbar-collapse-sm').attr('style', 'display: none !important;');
    }else{
        $('.navbar-collapse-sm').attr('style', '');
    }
}

function deUrlInpMovrToLft(){
    $('.url-input-container').css('left', '-200%');
    $('.password-input-container').css('right', '0');
}

function deUrlInpMovrToRigt(){
    $('.url-input-container').css('left', '0');
    $('.password-input-container').css('right', '-200%');
}

//! Aditinal Functions



//! Aditinal Call

deNvBrClpsHidHandler();