$(document).ready(function() {

    $('#categories').select2({
        placeholder: 'Escolha categorias...'
    });

    $('#tags').select2({
        placeholder: 'Escolha as tags...',
        tags: true
    });
});
