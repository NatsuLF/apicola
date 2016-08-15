$('#cloneImageTextBox').on('click', function(e) {
    e.preventDefault();

    $('.images').first().clone().appendTo('#album');
});

$(document).on('click', '.delete', function(e) {
    e.preventDefault();

    var images = $('.images').length;

    if (images > 1){
        $(this).parent().parent().remove();
    }
});
