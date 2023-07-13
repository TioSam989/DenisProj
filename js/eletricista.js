
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
                        <p>${eletricista.status}</p>
                        <p>${eletricista.status == 'em espera' ? `
                            <form method="POST">
                            <input type="hidden" name="user" value="${eletricista.id}" />
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