<?php
session_start();
/**
 * @author Copyright (C) 2015  Ismael Bernier
 * @license The GNU General Public License version 2 (GPLv2)
 * 
 */
 
  /**
   * initiate variables
   */
  //main controller request
	if(empty($_GET['request']))
	{
		$_GET['request'] = '';
	}
   
   		
	 	
		//bot answers and user inputs
		if(!isset($answerMinus1))
		{
			$answerMinus1 = "";
		}
		if(!isset($answerMinus2))
		{
			$answerMinus2 = "";
		}
		if(!isset($answerMinus3))
		{
			$answerMinus3 = "";
		}
		if(!isset($answerMinus4))
		{
			$answerMinus4 = "";
		}
		if(!isset($answerMinus5))
		{
			$answerMinus5 = "";
		}
		if(!isset($answerMinus6))
		{
			$answerMinus6 = "";
		}
		
		if(!isset($questionMinus1))
		{
			$questionMinus1 = "";
		}
		if(!isset($questionMinus2))
		{
			$questionMinus2 = "";
		}
		if(!isset($questionMinus3))
		{
			$questionMinus3 = "";
		}
		if(!isset($questionMinus4))
		{
			$questionMinus4 = "";
		}
		if(!isset($questionMinus5))
		{
			$questionMinus5 = "";
		}
		if(!isset($questionMinus6))
		{
			$questionMinus6 = "";
		}
		
		if(!isset($bruteInput))
		{
			$bruteInput = "";
		}
		
		
		
	
	
   
   
?>