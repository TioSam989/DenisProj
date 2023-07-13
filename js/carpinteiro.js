
$(document).ready( function(){
    $.ajax({
        url: "getCarpinteiro.php",  
        success: function(data) {
            let carpinteiros = JSON.parse(data);
            
            for(let carpinteiro of carpinteiros){
                $('.review .box-container').append(`
                    <div class="box">
                        <h3>${carpinteiro.nome}</h3>
                        <p>${carpinteiro.motivação}</p>
                        <p>${carpinteiro.status}</p>
                        <p>${carpinteiro.status == 'em espera' ? `
                            <form method="POST">
                            <input type="hidden" name="user" value="${carpinteiro.id}" />
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