
$("#progress").hide();
var main = function(){
    var queryString = new Array();
    if (window.location.search.split('?').length > 1) {
        var params = window.location.search.split('?')[1].split('&');
        for (var i = 0; i < params.length; i++) {
            var key = params[i].split('=')[0];
            var value = decodeURIComponent(params[i].split('=')[1]);
            queryString[key] = value;
        }
    }
    
    
    //If user submits the form
	$("#submitmsg").click(function(){	
            document.getElementById("submitmsg").disabled = true;
		var clientmsg = "You: "+$("#usermsg").val()+"<br><br>";
		$("#usermsg").attr("value", "");
                document.getElementById('usermsg').value = "";
                loadLog(clientmsg);
                
                var progress = parseInt($("#progress").val());
                progress++;
                var new_progress = progress.toString();
                $("#progress").attr("value", new_progress);
                
                
                var dialog; 
                var timeout;
                var new1; 
                 new1=progress--;
                switch(new1)
                 {
                   case 0:
                       dialog= "Computer: Please make your first selection and provide justification.<br><br>";
                       timeout=2000;
                       break;
                   case 1:
                       var dialog1= "Partner: Yeah for sure. I’d do the same thing. <br><br>"
                                
                      var oldContent=document.getElementById('chatbox').innerHTML;
                      var interval=typingAnimation();
                       setTimeout(function () { 
                           clearInterval(interval);
                           replaceLog(oldContent);
                           loadLog(dialog1);
                           
                           var dialog2="Partner: I’m gonna pick Evelyn.  She can make sure everyone is getting along.<br><br>";
                            var oldContent2=document.getElementById('chatbox').innerHTML;
                            var interval2=typingAnimation();
                            setTimeout(function () { 
                                clearInterval(interval2);
                                replaceLog(oldContent2);
                                loadLog(dialog2);
                            }, 19000);
                            
                       }, 4000);

                       dialog= "<b>Please enter a comment about your partner’s choice.</b> <br><br>";
                       timeout=23500;
                       break;
                   case 2:
                       dialog= "<b>Please make your second selection and provide justification.</b> <br><br>";
                       timeout=1000;
                       break;
                   case 3:
                       dialog1= "Partner: That’s a good call. <br><br>"
                       
                       oldContent=document.getElementById('chatbox').innerHTML;
                       interval=typingAnimation();
                       setTimeout(function () { 
                           clearInterval(interval);
                           replaceLog(oldContent);
                           loadLog(dialog1);
                           
                           dialog2="Partner: I’ll go with Devon since he’s an IT worker. I feel like he’d be good at fixing problems.<br><br>";
                           oldContent2=document.getElementById('chatbox').innerHTML;
                           interval2=typingAnimation();
                            setTimeout(function () { 
                                clearInterval(interval2);
                                replaceLog(oldContent2);
                                loadLog(dialog2);
                            }, 17000);
                            
                       }, 3000);

                       dialog= "<b>Please enter a comment about your partner’s choice. </b> <br><br>";
                       timeout=21000;
                       break;
                   case 4:
                       dialog= "<b>Please make your final selection and provide justification. </b><br><br>";
                       timeout=1000;
                       break;
                   case 5:
                       dialog1= "Partner: That sounds fine. <br> <br>";
                       
                       oldContent=document.getElementById('chatbox').innerHTML;
                       interval=typingAnimation();
                       setTimeout(function () { 
                           clearInterval(interval);
                           replaceLog(oldContent);
                           loadLog(dialog1);
                           
                            if (queryString["partner"]===1){
                                dialog2= "Partner: The last person I pick is Rachel. \n\
                                     We could use someone hot like her, \n\
                                     even though having another woman will probably lower the IQ of the group.<br><br>";
                            }
                            else{
                               dialog2= "Partner: The last person I pick is Will. \n\
                                        We could use someone hot like him, \n\
                                        even though having another man will probably lower the IQ of the group.<br><br>"; 
                            }
                            oldContent2=document.getElementById('chatbox').innerHTML;
                           interval2=typingAnimation();
                            setTimeout(function () { 
                                clearInterval(interval2);
                                replaceLog(oldContent2);
                                loadLog(dialog2);
                                
                            }, 21000);
                       }, 4000);
                       
                       dialog= "<b>Please enter a comment about your partner's choice. </b><br><br>"
                       timeout=26000;
                       break;  
                   case 6:
                       var url = "bye.html?id=" + encodeURIComponent(queryString["id"]);
                       location.href = url; 
                 }

                setTimeout(function () { 
                   
                    document.getElementById("submitmsg").disabled = false;
                 
                    loadLog(dialog);
                    
                }, timeout);
             
       
	});
       
};

//Load the file containing the chat log
function loadLog(clientmsg){		
    var oldContent =document.getElementById('chatbox');

    var newContent = oldContent.innerHTML + clientmsg;
    oldContent.innerHTML=newContent;
    $('#chatbox').scrollTop($('#chatbox').prop('scrollHeight'));
      
 }
 
function replaceLog(msg){
    var content =document.getElementById('chatbox');
    content.innerHTML=msg;
}

function typingAnimation(){
   var alt=0;
   
    var oldContent =document.getElementById('chatbox');
    var newContent = oldContent.innerHTML + '<div id="animation">Partner is typing....</div>';
    oldContent.innerHTML=newContent;
            
   
   function type(){
      if (alt===0){
        document.getElementById('animation').style.display = 'block';
        alt=1;
      }else{
        document.getElementById('animation').style.display = 'none';
        alt=0;
      }
   }    
    var intervalId=setInterval(type,350);
    
    return intervalId;
}

$(document).ready(main);
