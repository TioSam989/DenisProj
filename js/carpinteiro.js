
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
                    </div>
                `)
            }
        }
     });
});