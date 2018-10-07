$(document).ready(function(){
    $('a[data-confirm]').click(function(ev){
        var href = $(this).attr('href');
        if(!$('#confirm-delete').length){
            $('body').append("<div class='ui tiny modal' id='confirm-delete'><div class='header'>Tem certeza que deseja excluir o Projeto ?</div><div class='actions'><div class='ui approve red button'>Cancelar</div><a id='dataConfirmOK' class='ui cancel green button'>Excluir</a></div></div></div>");
        }
        $('#dataConfirmOK').attr('href', href);
        $('#confirm-delete').modal('show');
        return false;

    });
});