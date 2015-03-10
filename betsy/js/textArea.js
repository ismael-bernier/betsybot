/*
 * @author Ismael Bernier
 * @version 1.0
 */

 //

	
	$(document).ready(function(){
    $("#aboutBot").click(function(){
        $("#bottext").css("display", "block");
        $("#betsytext").css("display", "none");
	    });
	});
	$(document).ready(function(){
    $("#aboutBetsy").click(function(){
        $("#betsytext").css("display", "block");
        $("#bottext").css("display", "none");
	    });
	});
	
		