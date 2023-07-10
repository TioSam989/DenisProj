
$(document).ready( function(){
    $.ajax({
        url: "getAvaliacoes.php",  
        success: function(data) {
            let avaliacoes = JSON.parse(data);
            
            for(let avaliacao of avaliacoes){
                $('.review .box-container').append(`
                    <div class="box">
                        <h3>${avaliacao.nome}</h3>
                        <p>${avaliacao.avaliacao}</p>
                    </div>
                `)
            }
        }
     });
});