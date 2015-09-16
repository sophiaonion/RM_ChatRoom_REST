var main = function(){
  
    document.getElementById("submission").onclick = function () {
                             
         var gender = document.forms[0];
         var male = gender[0].checked;
         var female = gender[1].checked;
         var gender;
        if(male || female ){
        
            if (male){//male 
              gender=1;
             }else{
              gender=0;  
             }   
        
        var rand = Math.floor(Math.random()*2);
        
        var data = {
            "gender": gender,
            "partner":rand
        };
        
        //todo this will be the place randomize all the variable
        $.ajax({
            type: 'POST',
            url: "http://143.44.10.35:80/participants/api/participants/" ,
            data: JSON.stringify(data),
            contentType:'application/json' ,  
            success: function(data){
              var url = "Waiting.html?id=" + encodeURIComponent(data);
              location.href = url;
            },
            error: function(request, status, error){
               alert(error);
            }
         });
            
        }else{
          
          alert("You need to select a gender!");
        }
        
        
    };
    
  
};

$(document).ready(main);