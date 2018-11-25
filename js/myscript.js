function showDate(){
    var messageStatus = $('#messageType').val();
    console.log("message is ",  messageStatus);
    if(messageStatus != 'notselected'){
        $('#peopleCount').show();
        $('#dateRegistered').show();
        $('#shiftRegistered').show();
    }
    else{
        $('#peopleCount').hide();
        $('#shiftRegistered').hide();
        $('#dateRegistered').hide();
    }
}


function  fun_showtextbox() {
    var select_status=$('#messagetype').val(); 
if(select_status == 'Personal') { $('#mobileno_textbox').show();}
else { $('#mobileno_textbox').hide();}
}

function myCallback(){
    
}
