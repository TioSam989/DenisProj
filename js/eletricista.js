
$(document).ready( function(){
    $.ajax({
        url: "getEletricista.php",  
        success: function(data) {
            let eletricistas = JSON.parse(data);
            
            for(let eletricista of eletricistas){
                $('.review .box-container').append(`
                    <div class="box">
                        <h3>${eletricista.nome}</h3>
                        <p>${eletricista.motivação}</p>
                    </div>
                `)
            }
        }
     });
});