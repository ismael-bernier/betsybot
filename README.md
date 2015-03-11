Copyright (C) 2015  Ismael Bernier
license: The GNU General Public License version 2 (GPLv2)
 
#Welcome to BetsyBot
BetsyBot is a PHP/MySQL based chatbot with an AJAX client. BetsyBot does not use AIML, but rather straight PHP/MySQL. She is able to be taught, and she learns on her own, over time comming to resemble the people that talk to her. The code is still in need of some serious commenting, some refining, as well as an admin section I am currently working on for a simple user interface into her brain.

#Visit BetsyBot
www.betsybot.symbioticwebdesign.com

##File Structure
### MVC architecture with AJAX client

#### index.php
This is the main MVC file that initiates the controller.

#### config.php
Configuration file

#### Controller.class.php
Controls the main web page.

#### ajaxControler.php
Controls the AJAX requests.

#### ajaxCandy.php
Controls the AJAX requests for the custom "candy" authentification system.

#### db_info.php
Contains the database information. Once you create a database on your server, this is where you want to insert it.

#### /model
Contains the models Candy and Betsybot

#### /view
Contains the views

#### /js
Contains the JavaScript files and the libraries. Includes the "candy" system's ajax calls to the server, and the asynchronous communication with the chatbot.

#### /css
Contains the CSS generated by the SASS folder.

#### /scss
Contains the SASS files based on the bones theme for wordpress, but stripped down for responsiveness and a few other functionalities not yet integrated. (http://themble.com/bones/).

#### /images
Contains the images