
$(document).ready( function(){
    $.ajax({
        url: "getPintor.php",  
        success: function(data) {
            let pintores = JSON.parse(data);
            
            for(let pintor of pintores){
                $('.review .box-container').append(`
                    <div class="box">
                        <h3>${pintor.nome}</h3>
                        <p>${pintor.motivação}</p>
                        <p>${pintor.status}</p>
                        <p>${pintor.status == 'em espera' ? `
                            <form method="POST">
                            <input type="hidden" name="user" value="${pintor.id}" />
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