<?php
/**
 * 
 * @author Ismael Bernier
 * @version 1.0
 * 
 */


class View 
{
	/**
	 * @access public
	 * 
	 */
	public function displayHeader()
	{
		?>
		<!DOCTYPE html>
			<head>
				<title>BetsyBot</title>
				<meta charset="utf-8">
				<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
				<meta name="description" content="">
				<meta name="viewport" content="width=device-width">
				
				<link rel="stylesheet" href="./css/style.css" type="text/css" media="screen">
				<script src="js/vendor/jquery-1.10.1.min.js"></script>
				<script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
				<script src="./js/plugins.js"></script>
				<script src="./js/md5.js"></script>
				<script src="./js/textArea.js"></script>
				<script src="./js/main.js"></script>
				<script src="./js/candy.js"></script>
				<script src="./js/betsybot.js"></script>
				 
			</head>
			<body>
			<div class="wrap">
	<header>
					
					
					<div class="m-all t-1of2 d-1of2">
					<a id="title" href="./index.php">BetsyBot</a>
					</div>
					<div class="loginDiv m-all t-1of2 d-1of2" >
	<div class="right"><p><span id="loginText">Login</span><span id="hideLoginText">Hide login</span><br><span id="registerText">Register</span><span id="hideRegisterText">Hide register</span></p></div>
	<div id="loggedInDiv"><span id="logoutText">Log out</span> | <a href="./index.php?request=panel" id="profileText">Profile</a></div>
	<div id="loginFields">
		Username : <input type="text" name="username" id="username"/><br><span id=logUsrMessage></span><br>
		Password : <input type="password" name="password" id="password"/><br><span id=logUsrMessage></span><br>
		<input type="button" value="Log in" id="submitLogin"/>
	</div>
	<div id="registerFields">
		Username : <input type="text" name="regUsername" id="regUsername"/><br><span id=regUsrMessage></span><br>
		Password : <input type="password" name="regPassword" id="regPassword"/><br><span id=regPassMessage></span><br>
		<input type="button" value="register" id="submitRegister"/>
	</div>
	

					</div>
					
				</header>
				<main id="botpage" class="m-all t-all d-all">
					
				<?php
				
	}
	/**
	 * @access public
	 * 
	 */
	public function displayFooter()
	{
				?>
				
				 
				<footer>
					<p>Thanks for visiting betsybot.website! I hope you enjoyed visiting me and will return!</p>
					&#169; Ismael Bernier (2015)<br>
				</footer>
			</div>
			</body>
		</html>
		<?php
	}
	
	
	public function displayBotSection()
	{
		?>
		<div id="botsection" class="m-all t-1of2 d-1of2">
			<div id="history">
				
			</div>
		
			<div id="botResponse">
							
			</div>
		
			<div class="inputDiv">
				<input id="userInput" name="userInput" type="text" autofocus/><br>
	            <input id="storage" style="display:none;" type="text"/><br>
				<p id="userManual">User Manual</p> 
			</div>
		</div>
		<?php
	}
	
	
	
	
	public function displayBetsyVid()
	{
		?>
		<div id="betsycamdiv" class="m-all t-1of2 d-1of2 cf">
			<iframe id="betsycam" src="https://www.youtube.com/embed/d4vYxNmTUtM" frameborder="0" allowfullscreen></iframe>
		</div>
		<?php
	}
	
	public function displayAboutBetsy()
	{
		?>
		<div id="text" class="m-all t-all d-all cf">
			<ul><li id="aboutBetsy">About Betsy</li><li id="aboutBot">About BetsyBot</li></ul>
			<div id="betsytext" class="m-all t-all d-all cf">
				<h2>About Betsy</h2>
				<p>My name is Betsy. I am a red-eared slider. I'm about seven years old, which is actually very young for my species. We can live 50-70 years.</p>
				<p>My current human, Ismael, found me in his neighbor's apartment, living with access to barely enough water to enter, and definitely not enough to submerge myself in.</p>
				<p>Being an aquatic species, I like to spend almost all my time under water, and so when Ismael rescued me, it was mainly the change to the new set-up that made me super happy. I spent three days straight swimming like a little maniac until I settled down a bit. I still swim lots every day, and sleep under water, coming up for air every once in a while. I do go to bask on my rock, under my new UV light, but I much prefer the heated water, which the new heater keeps at a warm 25 degrees celcius.</p>
				<p>I eat about once every two to three days. If I beg by swimming super hard when I see my human, he will sometimes cave in and feed me even if I ate the day before. I eat mostly pellets, but he will throw in leafy greens and sometimes live crickets!</p>
				<p>I used my telepathic skills to make my human code me this site and the bot above to give me a voice. Even if my quality of life has drastically increased during the last few months, my current environment is not quite ideal for a little turtle like myself. I would really enjoy a bigger aquarium, and eventually, another turtle my age to share my days with.</p>
				<p>People don't know this about turtles, but we are actually a very friendly and lively lot, and in nature, we tend to hang out together in little groups. Because I can carry salmonella, my human doesn't pick me up much. And besides, while I like to go swimming to him when he comes near me and talks to me, I really don't enjoy getting picked up. In the water is where I am fast and comfortable. Out of the water, I am slow and vulnerable.</p>
				<p>As a turtle, I am uniquely suited to be on full time expoisition, as my life revolves around such a small space. Also, I have been told that I am soothing to look at, that I calm the nerves and the mind. And, as you might find, I can sometimes be quite lively and entertaining!</p>
			</div>
		<?php
	}

	public function displayAboutBot()
	{
		?>
			<div id="bottext" class="m-all t-all d-all cf">
				<h2>About BetsyBot</h2>
				<p>A few years ago, before I really got into programming, I was briefly interested in chatbots. As anyone familliar with them knows, AIML was, and is still sometimes considered, the language of choice.</p>
				<p>Well, this simply did not satisfy me. Even the decent open-sourced versions I could find were shaky, and did not seem to ever work properly. They didn't learn, so what was the point?</p>
				<p>Besides, the way in which they went through their databases, in such a way as to stop on the first match found for the sentence, always the same, I found often counter-intuitive to the way you would want a chatbot to behave.</p>
				<p>So a few months ago, to kind of throw some of my newly aquired skills to use doing a random project (mainly learning how to create a chrome app for future projects), I decided to try and build my own chatbot, and make that sucker able to learn!</p>
				<p>I am happy to say that I did make a chatbot, and that it does learn on its own from conversations! And, it is willing to be corrected by an admin, or intentionally taught specific responses by anyone.</p>
				<p>The bot will look for an exact match for your sentence. If none is found, it will break that sentence apart into as many different sub-components as it can, look for matches for each of these partials of your sentence, down to each word individually, and then it rates each match based on the length of the partial sentence, assigns it a range, sums up all the ranges, then randomly picks a number and thus a response. This ensures that while the longer sentence partials will be chosen more often than the shorter ones, the bot will avoid constant repetition.</p>
				<p>The chatbot learns naturally from your conversations with it, and will over time respond to you as you have responded to it. This is because it routinely checks to see if it has a question/answer match in its database for the previous answer you gave to the bot's response. If it finds that it does not have said question/response match, it will save it for later use.</p>
				<p>While for now the project is still very young, I am commenting the code, cleaning it up, and will be offering it here for non-commercial use very shortly. My next step is to build an admin section to review the bot's histories, modify, accept, or delete newly entered answers, and modify or delete admin approved answers. The next step after the admin section is added will be to make an auto-install for newbs.</p>
				<p>The logic of the bot is still fairly simple, though in my experience, it can start to get weird and funny very quickly once you start filling that thing's head. My goal of creating something more interesting than the AIML garden variety bot I believe has been accomplished. You don't control all it picks up, and even on a fresh install it might start to remind you of yourself before you know what's happened.</p>
				<p>I plan to seriously upgrade it's logic, and am working on a way to make it digest chatlogs to quickly increase it's database size.</p>
				<p>The core of BetsyBot is in PHP/MYSQL using an MVC architecture. The client side is built using the jquery library and AJAX. Very little work has been done on the actual front-end, for now. Once I complete the auto-install and create a bare-bones front-end for people who want to clone this project, then I might move the whole thing to a CMS and do some serious front-end integration. But for now, it is not a priority.</p>
			</div>
		</div>
		</main>
		<?php
	}
	
	
	public function displayBotAdmin()
	{
				?>
				<p id="returnToBotText" class="m-all t-all d-all cf"><a href="./index.php" id="returnToBotSpan">Return to BetsyBot</a></p>
					<section id="botadmin" class="m-all t-all d-all cf">
						<h2>BetsyBot Admin</h2>
						<p>Panel under construction</p>
					</section>
				<?php
				
	}
	
	public function displayUserProfile()
	{
				?>
				<p id="returnToBotText" class="m-all t-all d-all cf"><a href="./index.php" id="returnToBotSpan">Return to BetsyBot</a></p>
					<section id="userprofile" class="m-all t-all d-all cf">
						
						<h2>BetsyBot User Profile</h2>
						<p>The user profile section for non-admin users is still under construction. Soon, specific information entered here will be accessible to Betsy when you are logged in.</p>
					</section>
				<?php
				
	}
	
	
}
?>
