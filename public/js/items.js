$('#description').summernote({
    toolbar: [
        ['style', ['bold', 'italic', 'underline', 'clear']],
        ['font', ['strikethrough', 'superscript', 'subscript']],
        ['fontsize', ['fontsize']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['height', ['height']],
        ['view', ['fullscreen']]
    ],
    height: 150,
    minHeight: 200,
    lang: 'es-ES'
});

$('#cloneImageTextBox').on('click', function(e) {
    e.preventDefault();

    $('.images').first().clone().appendTo('#album');
});

$(document).on('click', '.delete', function(e) {
    e.preventDefault();

    var images = $('.images').length;

    if (images > 1){
        $(this).parent().parent().parent().remove();
    }
});

