$(function() {
    $('#botonEliminar').click(function(ev) {

        ev.preventDefault();
        
        var urlAEliminar = this.href;
        
        $.confirm({
            title: '¿Seguro?',
            content: '¿Estás seguro/a de querer eliminar permanentemente este artículo? Esta acción no se puede deshacer.',
            buttons: {
                confirm: {
                    text: 'Confirmar',
                    btnClass: 'btn-red',
                    action: function() {
                        location.href = urlAEliminar;
                    }
                },
                cancel: {
                    text: 'Cancelar',
                    action: function() {}
                }
            }
        });
    });
});
