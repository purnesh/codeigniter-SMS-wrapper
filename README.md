codeigniter-SMS-wrapper v1
------------------------
=======================
A Code Igniter module that allows you to send sms to anyone in India!  
Note: This library does not work with the numbers that have DND service!

Bootstrapping
-------------
- Create an account on Mashape.com and register a new application
- Use the Mashape key that you recieve there and paste in Line 22 of "libraries/Sms.php"

- Create an account on site2sms.com
- Use your username and passwords as values to the definition constants in Line 44,45 of "config/constants.php" 

Installation
------------


Usage
-----
Use the following statement in any of your controllers and the message will be sent!
> $response = $this->sms->send_sms('PHONE_NUMBER_OF_RECIPIENT', 'SMS_MESSAGE_HERE');

Have fun! I'll be glad to help if some issue crops up. :)
