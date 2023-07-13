
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
                        <p>${canalizador.status}</p>
                        <p>${canalizador.status == 'em espera' ? `
                            <form method="POST">
                            <input type="hidden" name="user" value="${canalizador.id}" />
                            <button type="submit" name="aprove">aprovar</button>
                            <button type="submit" name="reject">rejeitar</button>
                            </form>` 
                          : ''}
                        </p>
                    </div>
                `)
            }
        }
     });
});