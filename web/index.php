<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="styles/chat_room.css" type="text/css" rel="stylesheet">
        <title>Welcome! </title>
    </head> 
       
    <div id="wrapper">
        <div id="menu">
            <div style="clear:both"><div class="center"><b>Instruction</b>: You will make a choice and provide justification for that choice.<br> 
                For example: ‘I’d take Jen. She’s a doctor and would be able to take care of anyone who got sick’.<br>
                In each round, after justifying your own choice, you will see who your partner 
                chose and respond to your partner’s choice and justification 
                (e.g., you might agree with your partner’s reasoning, offer additional 
                reasons why it is a good choice, or explain why you disagree with the choice or the justification.</div></div>
        </div>
       
        <div id="chatbox">
            <b>Please make your first selection and provide justification.</b><br><br>
            
        </div>

        <form name="message" action="">
            <input type="text" id="usermsg" size="63" />
            <input id="progress" type="text" value="0">
            <button type="button" id="submitmsg">Send</button>
        </form>
    </div>
    
    <script src='scripts/jquery-2.1.3.js'></script>
    <script src='scripts/jquery-ui-1.11.2.custom/jquery-ui.min.js'></script>
    <script src='scripts/index.js'></script>
</html>