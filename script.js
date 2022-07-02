
//for the selected data to be view
//global variable of my selected user
var slcview;
var checkView = 0;
//to get the id of the view user
function viewClick(){
    var table = document.getElementById('searchTbl'),rIndex;
    for(var x = 0;x < table.rows.length;x++){
        table.rows[x].onclick = function (){
            rIndex = this.rowIndex;
            slcview = document.getElementById("searchTbl").rows[rIndex].cells[0].innerHTML;  
            //alert(slcview);
            //document.getElementById("viewId").innerHTML = slcview;
             checkView = 1;
    }
    }
//using ajax to pass the id
var getView =slcview;
$(document).ready(function (){
      //  $(".vClickClass").click(function(){
            console.log(getView);  
            $('#viewSelect').load('include/viewClick.inc.php', {
                gotView : slcview
            }
            );
            //for view select 2
            $('#viewSelect2').load('include/viewClick2.inc.php',{
                gotView : slcview
            });
       // });
    });
  
}

//for id that want to message

$(document).ready(function(){
    $(".clsMsgBtn").click(function(){
        console.log(slcview);
        $('#toMessage').load('include/message.inc.php',{
            gotMessage: slcview,
            checkV: checkView
        });
    });
});


//to send message input value using ajax to sendmsg.php
$(document).ready(function(){
    $(".sendMsg").click(function(){
        var msg = document.getElementById("msgId").value;
        console.log(msg);
        $('#phpmsg').load('include/sendMsg.inc.php',{
            senderMessage: msg,
            gotMessage: slcview,
            checkV: checkView
        });
        document.getElementById("msgId").value="";
    });
 
});

function callMsg(){
    $(document).ready(function(){
       
            $('#callMsg').load('include/viewMsg.inc.php',{
                gotMessage: slcview,
                checkV: checkView
            });
      
    });
    setTimeout(callMsg,5000);
}






   
       
        



    

  
    
    
            