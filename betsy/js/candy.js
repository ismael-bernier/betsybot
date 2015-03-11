/*
 * @author Copyright (C) 2015  Ismael Bernier
 * @license The GNU General Public License version 2 (GPLv2)
 * 
 */

 //

var regPassBool = false;		
var regUsrBool = false;			

function login()
{
	var getPassword = $("#password").val();
	var username = $("#username").val();
	
	
	if(username.length < 4 || username.length > 26){
		$("#botResponse").html(bot + " : Username must be between 4 and 26 characters.");
	}
	else if(getPassword.length < 7 || getPassword.length > 16){
		$("#botResponse").html(bot + " : Password must be between 7 and 16 characters.");
	}
	else {
			
		var temp = CryptoJS.MD5(getPassword).toString();
		var password = CryptoJS.MD5(temp).toString();
		
		if(username !="")
		{
			username = encodeURIComponent(username);
			password = encodeURIComponent(password);
			var xhr;  
			    
			if (window.XMLHttpRequest) { // Mozilla, Safari, ...  
				xhr = new XMLHttpRequest();  
			} else if (window.ActiveXObject) { // IE 8 and older  
				xhr = new ActiveXObject("Microsoft.XMLHTTP");  
			}  
			var postData = "username=" + username +"&"+ "password=" + password;
			   
			xhr.open("POST", "ajaxCandy.php", true);   
			xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
			xhr.send(postData);  
			xhr.onreadystatechange = function (e) { 
				if (xhr.readyState == 4) {  
				    if (xhr.status == 200) {
				    	
				    	if(xhr.responseText.length == 16)
				    	{
					    	
		             		
				        	candy=xhr.responseText;
				        	
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
							
							
		             		
		             		$("#history").html("");
		        
					        $("#userInput" ).val("");
					        
					        $("#userInput" ).focus();
		             		
		             		userhandle = username;
		             		if(userhandle!="User"){
								name = userhandle;
							}
					      	$("#botResponse").html(bot + " : Hi " + name);
				               
				            $("#storage").html("");
				            
				            $("#loginFields").css("display", "none");
					        $("#hideLoginText").css("display", "none");
					        $("#loginText").css("display", "none");
					        $("#loggedInDiv").css("display", "block");
				       }
				       else{
				       		$("#botResponse").html(bot + " : You failed to log in.");
				       }
			                 
				  	} else {  
				        alert('There was a problem with the request.');  
				    }     
				}        
			};
		}
		$("#password").val("");
		$("#username").val("");
	}
}


function register()
{
	var getPassword = $("#regPassword").val();
	var username = $("#regUsername").val();
	if(!regUsrBool)
	{
		$("#botResponse").html(bot + " : The username entered is invalid");
	}
	else if(!regPassBool)
	{
		$("#botResponse").html(bot + " : The password entered is invalid");
	}
	else{
			
		var password = CryptoJS.MD5(getPassword).toString();
			
		username = encodeURIComponent(username);
		password = encodeURIComponent(password);
		var xhr;  
				    
		if (window.XMLHttpRequest) { // Mozilla, Safari, ...  
			xhr = new XMLHttpRequest();  
		} else if (window.ActiveXObject) { // IE 8 and older  
			xhr = new ActiveXObject("Microsoft.XMLHTTP");  
		}  
		var postData = "register=" + username +"&"+ "regpass=" + password;
				   
		xhr.open("POST", "ajaxCandy.php", true);   
		xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		xhr.send(postData);  
		xhr.onreadystatechange = function (e) { 
			if (xhr.readyState == 4) {  
				if (xhr.status == 200) {
					if(xhr.responseText.length == 16)
					{
						
			             		
					 	candy=xhr.responseText;
					        	
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
								
						
			             		
			           	$("#history").html("");
			        
						$("#userInput" ).val("");
						        
						$("#userInput" ).focus();
			             		
			            userhandle = username;
			             		
						$("#botResponse").html(bot + " : Hi " + userhandle);
					               
					    $("#storage").html("");
					            
					    $("#registerFields").css("display", "none");
        				$("#hideRegisterText").css("display", "none");
						$("#loggedInDiv").css("display", "block");
					}
					else{
					 	$("#botResponse").html(bot + " : You failed to log in.");
					}
				}else {  
					alert('There was a problem with the request.');  
				}
				    
			}        
		};
		$("#regPassword").val("");
		$("#regUsername").val("");
		regPassBool = false;		
		regUsrBool = false;
		$("#regPassMessage").html("");
 		$("#regUsrMessage").html("");
 			 
	}	
}


$(document).ready(function(){
    $("#password").keydown(function(e){
    	var keyCode = e.keyCode;
  		if(keyCode==13)
  		{
  			login();
  		}
  	});
});	
  		

  	
$(document).ready(function(){
    $("#regUsername").keyup(function(){
    	var usr = $("#regUsername").val();
       	if (usr.length < 4 || usr.length > 16) 
 		{
 			$("#regUsrMessage").html("The username must be between 4-26 characters.");
 			regUsrBool = false;
 		}
 		else
 		{
 			usr = encodeURIComponent(usr);
 			var xhr;  
			    
			if (window.XMLHttpRequest) { // Mozilla, Safari, ...  
				xhr = new XMLHttpRequest();  
			} else if (window.ActiveXObject) { // IE 8 and older  
				xhr = new ActiveXObject("Microsoft.XMLHTTP");  
			}  
			var postData = "usr=" + usr;
					   
			xhr.open("POST", "ajaxCandy.php", true);   
			xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
			xhr.send(postData);  
			xhr.onreadystatechange = function (e) {
				if (xhr.readyState == 4) {  
					if (xhr.status == 200) {
						if(xhr.responseText == "true")
						{
							$("#regUsrMessage").html("Acceptable");
 							regUsrBool = true;
						}
						else{
						 	$("#regUsrMessage").html("Username exists");
						 	regUsrBool = false;
						}
					}else {  
						alert('There was a problem with the request.');  
					}     
				}        
			};
 			
 		}
    });
});

$(document).ready(function(){
    $("#regPassword").keyup(function(){
    	var pass = $("#regPassword").val();
        if (!pass.match(/[a-z]/)|| !pass.match(/[A-Z]/) || !pass.match(/[0-9]/) || pass.length < 7 || pass.length > 16) 
 		{
 			$("#regPassMessage").html("The password must be between 7-16 characters, and contain at least one number, one uppercase letter, and one lowercase letter.");
 			regPassBool = false;
 		}
 		else
 		{
 			$("#regPassMessage").html("Acceptable");
 			regPassBool = true;
 		}
    });
});



  	
$(document).ready(function(){
    $("#submitLogin").click(function(){
       login();
    });
});

$(document).ready(function(){
    $("#submitRegister").click(function(){
       register();
    });
});

$(document).ready(function(){
    $("#loginText").click(function(){
        $("#loginFields").css("display", "block");
        $("#hideLoginText").css("display", "block");
        $("#loginText").css("display", "none");
        $("#registerText").css("display", "none");
    });
});

$(document).ready(function(){
    $("#hideLoginText").click(function(){
        $("#loginFields").css("display", "none");
        $("#hideLoginText").css("display", "none");
        $("#loginText").css("display", "block");
        $("#registerText").css("display", "block");
    });
});

$(document).ready(function(){
    $("#registerText").click(function(){
        $("#registerFields").css("display", "block");
        $("#hideRegisterText").css("display", "block");
        $("#registerText").css("display", "none");
        $("#loginText").css("display", "none");
    });
});

$(document).ready(function(){
    $("#hideRegisterText").click(function(){
        $("#registerFields").css("display", "none");
        $("#hideRegisterText").css("display", "none");
        $("#registerText").css("display", "block");
        $("#loginText").css("display", "block");
    });
});

$(document).ready(function(){
    $("#logoutText").click(function(){
    	
	    var username = userhandle;
		username = encodeURIComponent(username);
				
			
		var xhr;  
		if (window.XMLHttpRequest) { // Mozilla, Safari, ...  
			xhr = new XMLHttpRequest();  
		} else if (window.ActiveXObject) { // IE 8 and older  
			xhr = new ActiveXObject("Microsoft.XMLHTTP");  
		}  
		var postData = "logout=" + username;
			   
		xhr.open("POST", "ajaxCandy.php", true);   
		xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		xhr.send(postData);  
		xhr.onreadystatechange = function (e) { 
			if (xhr.readyState == 4) {  
				if (xhr.status == 200) {
				 		
					window.location = "http://betsybot.symbioticwebdesign.com";
		         
				} else {  
					alert('There was a problem with the request.');  
				}       
			}        
		};
    });
});

$(document).ready(function(){
 	var xhr;  
	if (window.XMLHttpRequest) { // Mozilla, Safari, ...  
		xhr = new XMLHttpRequest();  
	} else if (window.ActiveXObject) { // IE 8 and older  
		xhr = new ActiveXObject("Microsoft.XMLHTTP");  
	}  
	var postData = "checkcandysession=buff";
	xhr.open("POST", "ajaxCandy.php", true);   
	xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	xhr.send(postData);  
	xhr.onreadystatechange = function (e) {
		if (xhr.readyState == 4) {  
			if (xhr.status == 200) {
				if(xhr.responseText != "false")
				{
					candy = xhr.responseText;
					$("#registerText").css("display", "none");
					$("#loginText").css("display", "none");
					$("#loggedInDiv").css("display", "block");
					
				}
			}else {  
					alert('There was a problem with the request.');  
			}     
		}        
	};
});



$(document).ready(function(){
 	var xhr;  
	if (window.XMLHttpRequest) { // Mozilla, Safari, ...  
		xhr = new XMLHttpRequest();  
	} else if (window.ActiveXObject) { // IE 8 and older  
		xhr = new ActiveXObject("Microsoft.XMLHTTP");  
	}  
	var postData = "checkusrsession=buff";
	xhr.open("POST", "ajaxCandy.php", true);   
	xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	xhr.send(postData);  
	xhr.onreadystatechange = function (e) {
		if (xhr.readyState == 4) {  
			if (xhr.status == 200) {
				if(xhr.responseText != "false")
				{
					userhandle = xhr.responseText;
					name = xhr.responseText;
					$("#botResponse").html(bot + " : Hi " + name);
				}
			}else {  
					alert('There was a problem with the request.');  
			}     
		}        
	};
});