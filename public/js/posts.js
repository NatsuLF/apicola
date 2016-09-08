$('#summernote').summernote({
    height: 150,
    minHeight: 200,
    maxHeight: null,
    lang: 'es-ES'
});

$("#estado").change(function() {
    var message = $(this).is(':checked') ? 'Publicar' : 'Guardar como borrador'

    $('#borrador').html(message);
});
