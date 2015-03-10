<?php
/**
 * @author Ismael Bernier
 * @version 1.0
 * 
 */
class Betsybot 
{
		
	private $db;
	
	function __construct ()
	{

		$this->db = new mysqli(DB_HOST,DB_USER, DB_PASS, DB_NAME);
		$this->db->set_charset('UTF8');


		if ($this->db->connect_error) 
		{
			die('Connect Error (' . $this->db->connect_errno . ') '
	        . $this->db->connect_error);

		}
	}
	
	
	/**
	 * 
	 */ 
	public function inputStatement($question) 
	{
 		$res = Array();
		$aRes=Array();
		$question = strtolower($question);
		$question = preg_replace('/\?/', ' ?', $question);
		$question = preg_replace('/\,/', ' ,', $question);
		$question = preg_replace('/\./', ' .', $question);
		$question = preg_replace('/\!/', ' !', $question);
		
		if($question)
		{
			if(preg_match_all('/(\(*\-*[\d]+\)*)([\/\+\-\*])(\(*\-*[\d]+\)*)([\/\+\-\*])*(\(*\-*[\d]+\)*)*([\/\+\-\*])*(\(*\-*[\d]+\)*)*([\/\+\-\*])*(\(*\-*[\d]+\)*)*([\/\+\-\*])*(\(*\-*[\d]+\)*)*([\/\+\-\*])*(\(*\-*[\d]+\)*)*/', $question, $match))
			{
				if(count($match[0]) == 1)
				{
					$equation = (string)$match[0][0];
					
					$eqRes = eval("return $equation;");
					$eqAnswer = $equation." = ".$eqRes;
					$aRes = array('id' => null, 'question' => $question, 'answer' => $eqAnswer);
				}
				else
				{
					$aEquation=Array();
					$eqAnswer=Array();
					foreach($match[0] as $match)
					{
						
						$aEquation[] = $match;
					}
					
					foreach($aEquation as $equation)
					{
						$eqRes = eval("return $equation;");
						$eqAnswer[] = $equation." = ".$eqRes;
					}
					
					$eqLongAnswer = implode(" and ", $eqAnswer);
					
				$aRes = array('id' => null, 'question' => $question, 'answer' => $eqLongAnswer);
				}
			}
			else
			{

				$query = "select * from betsy where question = ?";
				$stmt = $this->db->stmt_init();
				if(!$stmt->prepare($query))
				{
					$res = false;
				}
				else
				{
					$stmt->bind_param("s", $question);
					$stmt->execute();
					$stmt->bind_result($col1, $col2, $col3, $col4);
					while ($stmt->fetch()) {
						$res[] = array('id' => $col1, 'question' => $col2, 'answer' => $col3);
					}
				}
				$stmt->close();

				if(count($res) == 0 )
				 {
					 $aAnswers = Array();
					
					 $sNewPopshiftedQuestion = "";
					$sNewShiftPoppedQuestion = "";
					
					 $shiftPopRes=$res;
 					$popShiftRes=$res;
					$popRes=Array();
					$shiftRes=Array();
					 $aQuestion = explode(" ", $question);
					 $aPopQuestion = $aQuestion;
					 $aShiftQuestion = $aQuestion;
					 $aLength = count($aQuestion);
					 $aPopShiftQuestion = $aQuestion;
					 $aShiftPopQuestion = $aQuestion;
					 array_pop($aPopShiftQuestion);
					 array_shift($aShiftPopQuestion);
					
					 $nbEvenOdd = 0;
					
					 while($aLength > 1 )
					 {
						 if($aLength > 2)
						 {
		  					if(($nbEvenOdd % 2) == 0)
							 {
								array_pop($aPopShiftQuestion);
								array_shift($aShiftPopQuestion);
								$sNewPopshiftedQuestion = implode(" ", $aPopShiftQuestion);
								$sNewShiftPoppedQuestion = implode(" ", $aShiftPopQuestion);
							}
							else
							{
								array_pop($aShiftPopQuestion);
								array_shift($aPopShiftQuestion);
								$sNewPopshiftedQuestion = implode(" ", $aPopShiftQuestion);
								$sNewShiftPoppedQuestion = implode(" ", $aShiftPopQuestion);
							}
						}
						array_pop($aPopQuestion);
						array_shift($aShiftQuestion);
						$sNewPoppedQuestion = implode(" ", $aPopQuestion);
						$sNewShiftedQuestion = implode(" ", $aShiftQuestion);
						
				

						$query = "select * from betsy where question = ?";
						$stmt = $this->db->stmt_init();
						if(!$stmt->prepare($query))
						{
							$res = false;
						}
						else
						{
							$stmt->bind_param("s", $sNewShiftedQuestion);
							$stmt->execute();
							$stmt->bind_result($col1, $col2, $col3, $col4);
							while ($stmt->fetch()) {
								$shiftRes[] = array('id' => $col1, 'question' => $col2, 'answer' => $col3);
							}
						}
						$stmt->close();

						$query = "select * from betsy where question = ?";
						$stmt = $this->db->stmt_init();
						if(!$stmt->prepare($query))
						{
							$res = false;
						}
						else
						{
							$stmt->bind_param("s", $sNewPoppedQuestion);
							$stmt->execute();
							$stmt->bind_result($col1, $col2, $col3, $col4);
							while ($stmt->fetch()) {
								$popRes[] = array('id' => $col1, 'question' => $col2, 'answer' => $col3);
							}
						}
						$stmt->close();
						

						if($sNewShiftPoppedQuestion != "")
						{
							$query = "select * from betsy where question = ?";
							$stmt = $this->db->stmt_init();
							if(!$stmt->prepare($query))
							{
								$res = false;
							}
							else
							{
								$stmt->bind_param("s", $sNewShiftPoppedQuestion);
								$stmt->execute();
								$stmt->bind_result($col1, $col2, $col3, $col4);
								while ($stmt->fetch()) {
									$shiftPopRes[] = array('id' => $col1, 'question' => $col2, 'answer' => $col3);
								}
							}
							$stmt->close();
						}
						if($sNewPopshiftedQuestion != "")
						{
							$query = "select * from betsy where question = ?";
							$stmt = $this->db->stmt_init();
							if(!$stmt->prepare($query))
							{
								$res = false;
							}
							else
							{
								$stmt->bind_param("s", $sNewPopshiftedQuestion);
								$stmt->execute();
								$stmt->bind_result($col1, $col2, $col3, $col4);
								while ($stmt->fetch()) {
									$popShiftRes[] = array('id' => $col1, 'question' => $col2, 'answer' => $col3);
								}
							}
							$stmt->close();
						}
						if(count($shiftRes) != 0 )
						{
							foreach($shiftRes as $sRes)
							{
								$aAnswers[]=$sRes;
							}
						}
						if(count($popRes) != 0 )
						{
							foreach($popRes as $sRes)
							{
								$aAnswers[]=$sRes;
							}
						}
						if(count($shiftPopRes) != 0 )
						{
							foreach($shiftPopRes as $sRes)
							{
								$vBool = true;
								foreach($aAnswers as $sAnswer)
								{
									
									if($sRes['id'] == $sAnswer['id'])
									{
										$vBool = false;
									}
									
								}
								if($vBool)
									{
										$aAnswers[]=$sRes;
									}
							
								
							}
						}
						if(count($popShiftRes) != 0 )
						{
							foreach($popShiftRes as $sRes)
							{
								$vBool = true;
								foreach($aAnswers as $sAnswer)
								{
									
									if($sRes['id'] == $sAnswer['id'])
									{
										$vBool = false;
									}
									
								}
								if($vBool)
									{
										$aAnswers[]=$sRes;
									}
							}
						}
						$aLength = $aLength - 1;
						$nbEvenOdd = $nbEvenOdd + 1;
					}
					if(count($aAnswers) == 0 )
					{
						   $aRes = array('id' => null, 'question' => $question, 'answer' => "I have insufficient data to respond. Would you like to program me with a response?");
					}
					else
					{
						if(count($aAnswers) == 1)
						{
							foreach($aAnswers as $sRes)
							{
								$aRes = $sRes;
								break;
							}
						}
						else{
							//take each answer, explode, count the words
							$sum=0;
							$buffer=Array();
							
							foreach($aAnswers as $sRes)
							{
								$lowerLimit=$sum+1;
								$sQuestion = explode(" ", $sRes["question"]);
								$iLength = count($sQuestion);
								$upperLimit=$sum+$iLength;
								$sum=$upperLimit;
								$buffer[]=array('low' => $lowerLimit, 'high' => $upperLimit, 'question' => $sRes["question"]);
							}
							
							$nbRand = rand(1, $sum);
							
							foreach($buffer as $aBuffer)
							{
								if($nbRand >= $aBuffer["low"] && $nbRand <= $aBuffer["high"]){
									foreach($aAnswers as $sRes)
									{
										if($sRes["question"] == $aBuffer["question"])
										{
											$aRes = $sRes;
											break;
										}
									}
								}
							}
						}
					}
				}
				else
				{
					$nbRand = count($res);
						
					$sel = rand(0, $nbRand);
						
					$nb = 0;
					foreach($res as $sRes)
					{
						$aRes = $sRes;
							
						if($nb == $sel)
						{
							break;
						}
						$nb = $nb + 1;
					}
				
						
					
				}
			}
		}
		else
		{
			
		}
		return $aRes;
	}
	
	public function getID($question, $answer) 
	{
		$answer = preg_replace('/\?/', ' ?', $answer);
		$answer = preg_replace('/\,/', ' ,', $answer);
		$answer = preg_replace('/\./', ' .', $answer);
		$answer = preg_replace('/\!/', ' !', $answer);
		
		$question = preg_replace('/\?/', ' ?', $question);
		$question = preg_replace('/\,/', ' ,', $question);
		$question = preg_replace('/\./', ' .', $question);
		$question = preg_replace('/\!/', ' !', $question);
		
		$question = strtolower($question);
		$query = "select id from betsy where question = ? and answer = ?";
		$stmt = $this->db->stmt_init();
		if(!$stmt->prepare($query))
		{
			$res = false;
		}
		else
		{
			$stmt->bind_param("ss", $question, $answer);
			$stmt->execute();
			$stmt->bind_result($col);
			while ($stmt->fetch()) {
				$res = $col;
			}
		}
	$stmt->close();
	return $res;
	}
	
	public function insertStatement($question, $answer, $admin) 
	{
		$answer = preg_replace('/\?/', ' ?', $answer);
		$answer = preg_replace('/\,/', ' ,', $answer);
		$answer = preg_replace('/\./', ' .', $answer);
		$answer = preg_replace('/\!/', ' !', $answer);
		
		$question = preg_replace('/\?/', ' ?', $question);
		$question = preg_replace('/\,/', ' ,', $question);
		$question = preg_replace('/\./', ' .', $question);
		$question = preg_replace('/\!/', ' !', $question);
		
			$question = strtolower($question);
			$query = "select * from betsy where question = ? and answer = ?";
			$stmt = $this->db->prepare($query);
			$stmt->bind_param("ss", $question, $answer);
			$res = $stmt->execute();
			$stmt->bind_result($col1, $col2, $col3, $col4);
			$nbRows = 0;
			while ($stmt->fetch()) {
				$nbRows++;
			}
			$stmt->close();
			
			if($nbRows == 0)
			{
				if($admin){
					$query = "insert into betsy (question, answer, approved) values (?, ?, 1)";
					$stmt = $this->db->prepare($query);
					$stmt->bind_param("ss", $question, $answer);
					$res = $stmt->execute();
					$stmt->close();
				}
				else{
					$query = "insert into betsy (question, answer, approved) values (?, ?, 0)";
					$stmt = $this->db->prepare($query);
					$stmt->bind_param("ss", $question, $answer);
					$res = $stmt->execute();
					$stmt->close();
				}
			}
		
		return $res;
	}

	public function ninjaInsert($question, $answer) 
	{
		$answer = preg_replace('/\?/', ' ?', $answer);
		$answer = preg_replace('/\,/', ' ,', $answer);
		$answer = preg_replace('/\./', ' .', $answer);
		$answer = preg_replace('/\!/', ' !', $answer);
		
		$question = preg_replace('/\?/', ' ?', $question);
		$question = preg_replace('/\,/', ' ,', $question);
		$question = preg_replace('/\./', ' .', $question);
		$question = preg_replace('/\!/', ' !', $question);
		
			$question = strtolower($question);
			$query = "select * from betsy where question = ? and answer = ?";
			$stmt = $this->db->prepare($query);
			$stmt->bind_param("ss", $question, $answer);
			$res = $stmt->execute();
			$stmt->bind_result($col1, $col2, $col3, $col4);
			$nbRows = 0;
			while ($stmt->fetch()) {
				$nbRows++;
			}
			$stmt->close();
			
			if($nbRows == 0)
			{
					$query = "insert into betsy (question, answer, approved) values (?, ?, 0)";
					$stmt = $this->db->prepare($query);
					$stmt->bind_param("ss", $question, $answer);
					$res = $stmt->execute();
					$stmt->close();
			}
		
		return $res;
	}
	
	public function deleteStatement($id) 
	{
		$query = "delete from betsy where id = ?";
		$stmt = $this->db->stmt_init();
		if(!$stmt->prepare($query))
		{
			$res = false;
		}
		else
		{
			$stmt->bind_param("i", $id);
			$res = $stmt->execute();
			
		}
		$stmt->close();
		return $res;
	}
	
	public function updateStatement($id, $answer) 
	{
		$answer = preg_replace('/\?/', ' ?', $answer);
		$answer = preg_replace('/\,/', ' ,', $answer);
		$answer = preg_replace('/\./', ' .', $answer);
		$answer = preg_replace('/\!/', ' !', $answer);
		
		$question = preg_replace('/\?/', ' ?', $question);
		$question = preg_replace('/\,/', ' ,', $question);
		$question = preg_replace('/\./', ' .', $question);
		$question = preg_replace('/\!/', ' !', $question);

		$query = "update betsy set answer = ?, approved = 1 where id = ?";
		$stmt = $this->db->stmt_init();
		if(!$stmt->prepare($query))
		{
			$res = false;
		}
		else
		{
			$stmt->bind_param("si", $answer, $id);
			$stmt->execute();
			$res = true;
		}
		$stmt->close();
		return $res;
	}
	
}
?>
