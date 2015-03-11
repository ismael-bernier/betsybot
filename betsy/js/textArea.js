/*
 * @author Copyright (C) 2015  Ismael Bernier
 * @license The GNU General Public License version 2 (GPLv2)
 * 
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
	
		