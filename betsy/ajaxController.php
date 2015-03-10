<?php
session_start();
/**
 * @author Ismael Bernier
 * @version 1.0
 * 
 */

//header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
//header("Cache-Control: post-check=0, pre-check=0", false);
//header("Pragma: no-cache");
// The JSON standard MIME header.

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');

header('Content-type: application/json');
	require_once("./config.php");
	require_once("./var.init.php");
	
		if(isset($_POST['userInput']))
		{

			if(isset($_POST['answerMinus1']))
			{
				$answerMinus1 =trim($_POST['answerMinus1']);
			}

			if(isset($_POST['answerMinus2']))
			{
				$answerMinus2 =trim($_POST['answerMinus2']);
			}

			if(isset($_POST['answerMinus3']))
			{
				$answerMinus3 =trim($_POST['answerMinus3']);
			}

			if(isset($_POST['answerMinus4']))
			{
				$answerMinus4 =trim($_POST['answerMinus4']);
			}

			if(isset($_POST['answerMinus5']))
			{
				$answerMinus5 =trim($_POST['answerMinus5']);
			}

			if(isset($_POST['answerMinus6']))
			{
				$answerMinus6 =trim($_POST['answerMinus6']);
			}

			if(isset($_POST['questionMinus1']))
			{

				$questionMinus1 =trim($_POST['questionMinus1']);
			}

			if(isset($_POST['questionMinus2']))
			{
				$questionMinus2 =trim($_POST['questionMinus2']);
			}

			if(isset($_POST['questionMinus3']))
			{
				$questionMinus3 =trim($_POST['questionMinus3']);
			}

			if(isset($_POST['questionMinus4']))
			{
				$questionMinus4 =trim($_POST['questionMinus4']);
			}

			if(isset($_POST['questionMinus5']))
			{
				$questionMinus5 =trim($_POST['questionMinus5']);
			}

			if(isset($_POST['questionMinus6']))
			{
				$questionMinus6 =trim($_POST['questionMinus6']);
			}

			$bruteInput = trim($_POST['userInput']);
			
			$bruteInput = preg_replace('/\s+/', ' ', $bruteInput);
			
			
			if(isset($_POST['candycane']) && isset($_POST['validate']))
			{
				$bruteCandy = trim($_POST['candycane']);
			
				$candy = preg_replace('/\s+/', ' ', $bruteCandy);
			
				$bruteUsername = trim($_POST['validate']);
			
				$username = preg_replace('/\s+/', ' ', $bruteUsername);
				
				$oCandy = new Candy();
			
				$validateRole = $oCandy->checkRole($username, $candy);
				if($validateRole == 1){
					$admin = true;
				}
				else{
					$admin = false;
				}
			}
			else{
				$admin = false;
			}	
			
			$oBetsy = new Betsybot();
			if(($answerMinus1 == 'Ok. What would you like me to answer to "'.$questionMinus2.'"?' && ( $bruteInput == "update answer" || $bruteInput == "delete answer" || $bruteInput == "add answer")) 
			|| ($answerMinus1 == "I have insufficient data to respond. Would you like to program me with a response?" && ( $bruteInput == "update answer" || $bruteInput == "delete answer" || $bruteInput == "add answer")) 
			|| ($answerMinus1 == 'The insertion of the response "'.$questionMinus1.'" to the question "'.$questionMinus3.'" has been successfully entered.'  && ( $bruteInput == "update answer" || $bruteInput == "delete answer" || $bruteInput == "add answer")) 
			|| ($answerMinus1 == 'Ok. What would you like me to add as an answer to "'.$questionMinus2.'"?'  && ( $bruteInput == "update answer" || $bruteInput == "delete answer" || $bruteInput == "add answer")) 
			||($answerMinus1 ==  'Ok. I will forget that one then.'  && ( $bruteInput == "update answer" || $bruteInput == "delete answer" || $bruteInput == "add answer")) 
			||($answerMinus1 ==  'Would you like me to add an answer to "'.$questionMinus2.'"?'  && ( $bruteInput == "update answer" || $bruteInput == "delete answer" || $bruteInput == "add answer")) 
			||($answerMinus1 ==  'Ok. I will not add one then.'  && ( $bruteInput == "update answer" || $bruteInput == "delete answer" || $bruteInput == "add answer")) 
			||($answerMinus1 ==  "insertion failed"  && ( $bruteInput == "update answer" || $bruteInput == "delete answer" || $bruteInput == "add answer")) 
			||($answerMinus1 ==  'Would you like me to delete the answer "'.$answerMinus2.'" to "'.$questionMinus2.'"?'  && ( $bruteInput == "update answer" || $bruteInput == "delete answer" || $bruteInput == "add answer")) 
			||($answerMinus1 ==  'Ok. I will not delete that one.'  && ( $bruteInput == "update answer" || $bruteInput == "delete answer" || $bruteInput == "add answer")) 
			|| ($answerMinus1 == 'The response "'.$answerMinus3.'" to the question "'.$questionMinus3.'" has been successfully removed.'  && ( $bruteInput == "update answer" || $bruteInput == "delete answer" || $bruteInput == "add answer")) 
			|| ($answerMinus1 == "removal failed"  && ( $bruteInput == "update answer" || $bruteInput == "delete answer" || $bruteInput == "add answer")) 
			|| ($answerMinus1 == "You are not authorized to delete answers"  && ( $bruteInput == "update answer" || $bruteInput == "delete answer" || $bruteInput == "add answer")) 
			||($answerMinus1 ==  'Would you like me to update my response "'.$answerMinus2.'" to "'.$questionMinus2.'"?'  && ( $bruteInput == "update answer" || $bruteInput == "delete answer" || $bruteInput == "add answer")) 
			|| ($answerMinus1 == 'Ok. I will not update this one then.'  && ( $bruteInput == "update answer" || $bruteInput == "delete answer" || $bruteInput == "add answer")) 
			||($answerMinus1 ==  'Ok. What would you like me to update as the answer to "'.$questionMinus3.'"?'  && ( $bruteInput == "update answer" || $bruteInput == "delete answer" || $bruteInput == "add answer")) 
			|| ($answerMinus1 == 'The update of the response "'.$questionMinus1.'" to the question "'.$questionMinus4.'" has been successfully entered.'  && ( $bruteInput == "update answer" || $bruteInput == "delete answer" || $bruteInput == "add answer")) 
			|| ($answerMinus1 == "update failed"  && ( $bruteInput == "update answer" || $bruteInput == "delete answer" || $bruteInput == "add answer")) 
			|| ($answerMinus1 == "You are not authorized to update answers" && ( $bruteInput == "update answer" || $bruteInput == "delete answer" || $bruteInput == "add answer")) 
			|| ($answerMinus1 == "You cannot modify my default behavior." && ( $bruteInput == "update answer" || $bruteInput == "delete answer" || $bruteInput == "add answer")))
			{
					$answer = "You cannot modify my default behavior.";
				
			}
			elseif($answerMinus1 == "I have insufficient data to respond. Would you like to program me with a response?" && $bruteInput == "yes")
			{
				$answer = 'Ok. What would you like me to answer to "'.$questionMinus1.'"?';
				
			}
			elseif($answerMinus2 == "I have insufficient data to respond. Would you like to program me with a response?" && $questionMinus1 == "yes")
			{
				$insert = $oBetsy->insertStatement($questionMinus2, $bruteInput, $admin);
				if($insert)
				{
					$answer = 'The insertion of the response "'.$bruteInput.'" to the question "'.$questionMinus2.'" has been successfully entered.';
				}
				else {
					$answer = "insertion failed";
				}
				
			}
			elseif($answerMinus1 == "I have insufficient data to respond. Would you like to program me with a response?" && $bruteInput != "yes")
			{
				$answer = 'Ok. I will forget that one then.';	
			}	
			elseif($bruteInput == "add answer")
			{
				$answer = 'Would you like me to add an answer to "'.$questionMinus1.'"?';
						
			}
			elseif($answerMinus1 == 'Would you like me to add an answer to "'.$questionMinus2.'"?' && $bruteInput != "yes")
			{
				$answer = 'Ok. I will not add one then.';
			}	
			elseif($answerMinus1 == 'Would you like me to add an answer to "'.$questionMinus2.'"?' && $bruteInput == "yes")
			{
				$answer = 'Ok. What would you like me to add as an answer to "'.$questionMinus2.'"?';
					
			}
			elseif($answerMinus2 == 'Would you like me to add an answer to "'.$questionMinus3.'"?' && $questionMinus1 == "yes")
			{	
				
				$insert = $oBetsy->insertStatement($questionMinus3, $bruteInput, $admin);
				if($insert)
				{
					$answer = 'The insertion of the response "'.$bruteInput.'" to the question "'.$questionMinus3.'" has been successfully entered.';
				}
				else {
					$answer = "insertion failed";
				}
				
				
			}
			elseif($bruteInput == "delete answer")
			{
				$answer = 'Would you like me to delete the answer "'.$answerMinus1.'" to "'.$questionMinus1.'"?';
						
			}
			elseif($answerMinus1 == 'Would you like me to delete the answer "'.$answerMinus2.'" to "'.$questionMinus2.'"?' && $bruteInput != "yes")
			{
				$answer = 'Ok. I will not delete that one.';	
				
			}	
			elseif($answerMinus1 == 'Would you like me to delete the answer "'.$answerMinus2.'" to "'.$questionMinus2.'"?' && $bruteInput == "yes")
			{	
				if($admin){
					$ID = $oBetsy->getID($questionMinus2, $answerMinus2);
					$delete = $oBetsy->deleteStatement($ID);
					if($delete)
					{
						$answer = 'The response "'.$answerMinus2.'" to the question "'.$questionMinus2.'" has been successfully removed.';
					}
					else {
						$answer = "removal failed";
					}
				}
				else{
					$answer = "You are not authorized to delete answers";
				}
			}
			elseif($bruteInput == "update answer")
			{
				$answer = 'Would you like me to update my response "'.$answerMinus1.'" to "'.$questionMinus1.'"?';
						
			}
			elseif($answerMinus1 == 'Would you like me to update my response "'.$answerMinus2.'" to "'.$questionMinus2.'"?' && $bruteInput != "yes")
			{
				$answer = 'Ok. I will not update this one then.';	
			}
			elseif($answerMinus1 == 'Would you like me to update my response "'.$answerMinus2.'" to "'.$questionMinus2.'"?' && $bruteInput == "yes")
			{
				$answer = 'Ok. What would you like me to update as the answer to "'.$questionMinus2.'"?';
					
			}
			elseif($answerMinus2 == 'Would you like me to update my response "'.$answerMinus3.'" to "'.$questionMinus3.'"?' && $questionMinus1 == "yes")
			{
				if($admin){	
					$ID = $oBetsy->getID($questionMinus3, $answerMinus3);
					
					$insert = $oBetsy->updateStatement($ID, $bruteInput);
					if($insert)
					{
						$answer = 'The update of the response "'.$bruteInput.'" to the question "'.$questionMinus3.'" has been successfully entered.';
					}
					else {
						$answer = "update failed";
					}
				}
				else{
					$answer = "You are not authorized to update answers";
				}
			}	
			else
			{
				if($answerMinus1 != 'Ok. What would you like me to answer to "'.$questionMinus2.'"?'
			&& $answerMinus1 != "I have insufficient data to respond. Would you like to program me with a response?"
			&& $answerMinus1 != 'The insertion of the response "'.$questionMinus1.'" to the question "'.$questionMinus3.'" has been successfully entered.'  
			&& $answerMinus1 != 'Ok. What would you like me to add as an answer to "'.$questionMinus2.'"?'   
			&&$answerMinus1 !=  'Ok. I will forget that one then.'  
			&&$answerMinus1 !=  'Would you like me to add an answer to "'.$questionMinus2.'"?' 
			&&$answerMinus1 !=  'Ok. I will not add one then.' 
			&&$answerMinus1 !=  "insertion failed" 
			&&$answerMinus1 !=  'Would you like me to delete the answer "'.$answerMinus2.'" to "'.$questionMinus2.'"?'  
			&&$answerMinus1 !=  'Ok. I will not delete that one.'  
			&& $answerMinus1 != 'The response "'.$answerMinus3.'" to the question "'.$questionMinus3.'" has been successfully removed.'  
			&& $answerMinus1 != "removal failed"  
			&& $answerMinus1 != "You are not authorized to delete answers"  
			&&$answerMinus1 !=  'Would you like me to update my response "'.$answerMinus2.'" to "'.$questionMinus2.'"?'  
			&& $answerMinus1 != 'Ok. I will not update this one then.'  
			&&$answerMinus1 !=  'Ok. What would you like me to update as the answer to "'.$questionMinus3.'"?'  
			&& $answerMinus1 != 'The update of the response "'.$questionMinus1.'" to the question "'.$questionMinus4.'" has been successfully entered.'  
			&& $answerMinus1 != "update failed"  
			&& $answerMinus1 != "You are not authorized to update answers"  
			&& $answerMinus1 != "You cannot modify my default behavior."
			&& $bruteInput != "update answer"
			&& $bruteInput != "delete answer"
			&& $bruteInput != "add answer")
			{
				$oBetsy->ninjaInsert($answerMinus1, $bruteInput);
			}
				
				$aAnswer = $oBetsy->inputStatement($bruteInput);
				$answer = $aAnswer['answer'];
				$answer = preg_replace('/ \?/', '?', $answer);
				$answer = preg_replace('/ \,/', ',', $answer);
				$answer = preg_replace('/ \./', '.', $answer);
				$answer = preg_replace('/ \!/', '!', $answer);
			}

			echo $answer;
			
		}
		else {	
				
			echo $answer;
		}
	
	
	?>
	

