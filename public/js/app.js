$(function(){
    // carregando dados de clientes
    $.ajax({
        url: '/api/action1',
        method: 'GET',
        data: []
    }).done(function(data){
        console.log(data);
    }).fail(function(){
        console.log('Erro');
    });
});