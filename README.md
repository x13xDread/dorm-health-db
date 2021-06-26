# Getting Started
This application is built to run an apache 2 webserver and a MySql db and runs locally on your network. It is suggested that the application is ran on a linux platform or Raspberry Pi as thats the only two platforms its currently been tested. It should still work on a Windows or Mac device but just a fair warning the setup will not follow the following steps

## Linux/Raspberry Pi

To run this project on a linux or Raspberry Pisimply follow these steps:
<ol>
  <li>Install the apache 2 webserver on your device if you do not already have it</li> 
  <li>Install Php if you do not already have it</li>
  <li>Install MySql and if you want PhpMyAdmin or other GUI (as creating admin accounts can only be done manually for now)</li>
  <li>Clone this repo to your documents or other desktop folder</li>
  <li>Cut and Paste contents into the directory running your apache2 webserver (Usually /var/www/html)</li>
  <li>Create Proper MySql tables ('login' table and a 'posts' table)</li>
  <li>In the scripts directory create a php file containing connection information to your db and name it dbInfo.php</li>
  <li>Create an admin user manually using either command line or a MySql gui</li>
</ol>
After completing these steps you will be able to add other users to your db and allow them to make posts. To see this on your local netowrk simply grab the ip of the machine running this and enter that into your browser, as long as you are on the same network you can use it.
<br><br>
If you have any questions or issues please don't hesitiate to reach out to me or other contirbutors (if there are others at the time of reading).
