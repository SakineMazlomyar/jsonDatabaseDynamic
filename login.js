$(document).ready(function(){

    $("#ajax").on("submit", function(event){
        event.preventDefault()
        console.log("sakine")

        /* 
        function ajax-button(){

        $.ajax({

            type: 'post',
            url: 'login.php',
            data: $(this).serialize(),
            success: function(data){
                console.log(data);
               
            }

        });
        } */
    })
})