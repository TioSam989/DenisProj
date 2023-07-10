
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
                    </div>
                `)
            }
        }
     });
});