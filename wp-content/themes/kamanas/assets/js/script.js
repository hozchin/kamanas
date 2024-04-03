$('form').submit(function(e) {
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: "php/send.php",
        data: $(this).serialize()
    }).done(function() {
        $(this).find("input").val("");
        $('#thanks_modal, .overlay').fadeIn('slow');
        $('form').trigger('reset');
    });
    return false;
});

//modal

$('[data-modal=thanks_modal]').on('click', function() {
    $('.overlay, #thanks_modal').fadeIn('slow');
});

$('.modal-close, .modal-okay').on('click', function() {
    $('.overlay, #thanks_modal').fadeOut('slow');
});

