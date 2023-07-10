
$(document).ready( function(){
    $.ajax({
        url: "getContacte.php",  
        success: function(data) {
            let contactosos = JSON.parse(data);
            
            for(let contactos of contactosos){
                $('.review .box-container').append(`
                    <div class="box">
                        <h3>${contactos.nome}</h3>
                        <p>${contactos.mensagem}</p>
                    </div>
                `)
            }
        }
     });
});