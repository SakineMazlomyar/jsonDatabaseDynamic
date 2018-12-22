$(document).ready(function(){
  
    $("#ajax").on("submit", function(event){
        //event.preventDefault()
        var that = $(this),
        contents = that.serialize();
  
        $.ajax({
            type: 'post',
            dataType: 'json',
            url: 'login-json-attempt.php',
            data: contents,
            success: function(data){
               
                if(data.success){
                    console.log(data.success)
                }else{
                    console.log('no mail')
                }
            }
        })
   



        
        

        
    })
})

/* function init(){

    var info;
    fetch("login-json-attempt.php")
    .then(function(data){
        return data.json()
    }).then(function(informationAll){
        info = informationAll
        console.log(info);
        
    }).catch((error)=> alert("There is an arrow" +error))
} */



