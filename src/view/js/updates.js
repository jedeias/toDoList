setInterval(function() {
    $.ajax({
        url: '../../src/Controllers/Ajax.php',
        type: 'GET', 
        dataType: 'json', // ou 'html' se for só conteúdo
        success: function(response) {
            console.log('Resposta do PHP:', response);
            // Aqui você pode atualizar algo na tela, por exemplo:
            // $('#status').html(response.status);
        },
        error: function(xhr, status, error) {
            console.error('Erro na requisição:', error);
        }
    });
}, 3000);