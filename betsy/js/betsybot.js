/*
 * @author Ismael Bernier
 * @version 1.0
 */

 //


			
$(document).ready(function(){
    $("#userInput").keydown(function(e){
    	var keyCode = e.keyCode;
  		if(keyCode==13)
  		{
    		userInput = $("#userInput").val();
			
			if(userInput !="")
			{
				
				if(userInput.length > 555){
					$("#botResponse").html(bot + " : Input must be below 555 characters.");
				}
				else{
					if(candy.length == 16){
						var mdCandy = CryptoJS.MD5(candy).toString();
					}
					else{
						var	mdCandy = candy;
					}
					
					mdCandy = encodeURIComponent(mdCandy);
					
					userInput = encodeURIComponent(userInput);
					$("#userInput").val("");
					var xhr;  
				    
				    if (window.XMLHttpRequest) { // Mozilla, Safari, ...  
					    xhr = new XMLHttpRequest();  
					} else if (window.ActiveXObject) { // IE 8 and older  
					    xhr = new ActiveXObject("Microsoft.XMLHTTP");  
					}  
					var postData = "validate=" + userhandle + "&" + "candycane=" + mdCandy + "&" + "userInput=" + userInput +"&"+ "questionMinus1=" + questionMinus1 +"&"+ "questionMinus2=" + questionMinus2 +"&"+ "questionMinus3=" + questionMinus3 +"&"+ "questionMinus4=" + questionMinus4 +"&"+ "questionMinus5=" + questionMinus5 +"&"+ "questionMinus6=" + questionMinus6 +"&"+ "answerMinus1=" + answerMinus1 +"&"+ "answerMinus2=" + answerMinus2 +"&"+ "answerMinus3=" + answerMinus3 +"&"+ "answerMinus4=" + answerMinus4 +"&"+ "answerMinus5=" + answerMinus5 +"&"+ "answerMinus6=" + answerMinus6; 
				   
					xhr.open("POST", "./ajaxController.php", true);   
					xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
					xhr.send(postData);  
					xhr.onreadystatechange = function (e) {  
						if (xhr.readyState == 4) {  
					    	if (xhr.status == 200) {         
					      		$("#botResponse").html(userhandle + " : " + decodeURIComponent(userInput) + "<br>" + bot + " : " + xhr.responseText);
					         	$("#storage").val(xhr.responseText);
				                 
				                $(document).trigger('function_getResponse_complete');
					      	} else {  
					        	alert('There was a problem with the request.');  
					      	} 
					    }        
					};
				}
			}
		}
   });
});

function storeGlobals() {
   	buffer = $("#storage").val();     
   	buffer=buffer.replace(/[\n\t\r\\]/g,'');
   	buffer = encodeURIComponent(buffer);
            
   	answerMinus6 = answerMinus5;
	answerMinus5 = answerMinus4;
	answerMinus4 = answerMinus3;
	answerMinus3 = answerMinus2;
	answerMinus2 = answerMinus1;
	answerMinus1 = buffer;
			
	questionMinus6 = questionMinus5;
	questionMinus5 = questionMinus4;
	questionMinus4 = questionMinus3;
	questionMinus3 = questionMinus2;
	questionMinus2 = questionMinus1;
	questionMinus1 = userInput;
        
    $("#history").html("");
        
    if(decodeURIComponent(questionMinus6)!= "undefined" && decodeURIComponent(questionMinus6)!="")
    {
        $("#history").append("<br><br>" + userhandle + " : " + decodeURIComponent(questionMinus6));
        $("#history").append("<br>" + bot + " : " + decodeURIComponent(answerMinus6));
    }
        
	if(decodeURIComponent(questionMinus5)!= "undefined" && decodeURIComponent(questionMinus5)!="")
    {
        $("#history").append("<br><br>" + userhandle + " : " + decodeURIComponent(questionMinus5));
        $("#history").append("<br>" + bot + " : " + decodeURIComponent(answerMinus5));
    }
        
    if(decodeURIComponent(questionMinus4)!= "undefined" && decodeURIComponent(questionMinus4)!="")
    {
        $("#history").append("<br><br>" + userhandle + " : " + decodeURIComponent(questionMinus4));
        $("#history").append("<br>" + bot + " : " + decodeURIComponent(answerMinus4));
    }
       
    if(decodeURIComponent(questionMinus3)!= "undefined" && decodeURIComponent(questionMinus3)!="")
    {
        $("#history").append("<br><br>" + userhandle + " : " + decodeURIComponent(questionMinus3));
        $("#history").append("<br>" + bot + " : " + decodeURIComponent(answerMinus3));
  	} 
        
        
   	if(decodeURIComponent(questionMinus2)!= "undefined" && decodeURIComponent(questionMinus2)!="")
   	{
        $("#history").append("<br><br>" + userhandle + " : " + decodeURIComponent(questionMinus2));
     	$("#history").append("<br>" + bot + " : " + decodeURIComponent(answerMinus2));
    }
   
}



$(document).ready(function(){
    $("#alpha").click(function(){
    	
    	answerMinus6 = "";
		answerMinus5 = "";
		answerMinus4 = "";
		answerMinus3 = "";
		answerMinus2 = "";
		answerMinus1 = "";
			
		questionMinus6 = "";
		questionMinus5 = "";
		questionMinus4 = "";
		questionMinus3 = "";
		questionMinus2 = "";
		questionMinus1 = "";
		
		bot = "alpha";
        
		
        
        $("#history").html("");
        
        $( "#userInput" ).val("");
        
        $( "#userInput" ).focus();
       
        if(userhandle!="User"){
        	name = userhandle;
        }
        $("#botResponse").html(bot + " : Hi " + name);
    });
});

$(document).ready(function(){
    $("#beta").click(function(){
    	
    	answerMinus6 = "";
		answerMinus5 = "";
		answerMinus4 = "";
		answerMinus3 = "";
		answerMinus2 = "";
		answerMinus1 = "";
			
		questionMinus6 = "";
		questionMinus5 = "";
		questionMinus4 = "";
		questionMinus3 = "";
		questionMinus2 = "";
		questionMinus1 = "";
		
		bot = "beta";
		
		
        
        $("#history").html("");
        
        $( "#userInput" ).val("");
        
        $( "#userInput" ).focus();
		     
        if(userhandle!="User"){
        	name = userhandle;
        }
        $("#botResponse").html(bot + " : Hi " + name);
    });
});

$(document).bind('function_getResponse_complete', storeGlobals);

$(document).ready(function(){
    $("#userManual").click(function(){
        alert('BetsyBot will attempt to find an exact match for your input. If she does not, she will deconstruct your sentence every which way, and with a weighted response system based on the length of the matches from your deconstructed inputs, randomly select one of the more or less appropriate responses. If BetsyBot cannot find any response at all, then she will ask you to program her with a response. Just answer yes to the prompt, then enter your answer. Anything but yes at the prompt will result in BetsyBot moving on.\n\nAdd Answer :\nTo add an answer to a user input that BetsyBot has answered, type add answer and follow the prompt by typing yes then your new answer. This will become an exact match for BetsyBot, and will thus supersede any partial matches that could have led to odd or unreasonable responses.\n\nMath operations :\nBetsyBot can pick out an equation from a sentence. She loves math so much, she will ignore your sentence altogether and focus on solving that equation for you.\n\nBetsyBot learns dynalically from conversations with users, simply by analysing the responses that they give to her statements. Thus, the more you speak with BetsyBot, the more she will resemble you.\n\nBetsyBot only accepts update answer and delete answer commands from admins to protect the integrity of her databases. All new inputs go into a temporary database until an admin has approved them into the permenant personality of BetsyBot.');
        
    });
});