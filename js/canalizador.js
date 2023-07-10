
$(document).ready( function(){
    $.ajax({
        url: "getCanalizador.php",  
        success: function(data) {
            let canalizadores = JSON.parse(data);
            
            for(let canalizador of canalizadores){
                $('.review .box-container').append(`
                    <div class="box">
                        <h3>${canalizador.nome}</h3>
                        <p>${canalizador.motivação}</p>
                    </div>
                `)
            }
        }
     });
});