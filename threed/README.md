[localhost](localhost://)

[home](index.html)

# [www.trashrobot.org](http://www.trashrobot.org/)

#  <span style = "color:red">Γ</span><span style = "color:orange">ε</span><span style = "color:yellow">ω</span><span style = "color:green">μ</span><span style = "color:blue">ε</span><span style = "color:purple">τ</span><span style = "color:red">ρ</span><span style = "color:orange">ο</span><span style = "color:yellow">ν</span>

## Geometron Replicator

# Installation of Geometron System

[Geometron](scrolls/bookofgeometron.md) is a self-replicating social media system for spreading free technology built from trash.   It can run on Windows, Mac, Android, iOS, pretty much any flavor of Linux, Raspberry Pi, and both free and paid remote hosting.  To replicate it one simply sets up a webs server and copies the replicator script [php/replicator.txt](php/replicator.txt) to the server and runs it.  Web servers exist for all major computer platforms.  The minimal replicator that just replicates scrolls and set replicators for various components of the system can be found at [github/lafelabs/thing/minimal](https://raw.githubusercontent.com/LafeLabs/thing/master/minimal/php/replicator.txt) This document gives detailed instructions for each.

The entire Geometron Thing source code can be found at [https://github.com/lafelabs/thing/](https://github.com/lafelabs/thing/).

1. Installation on Windows 10 and mac

First, install XAMPP, a free open source web server for all platforms.  [Download from www.apachefriends.org](https://www.apachefriends.org/index.html).  Click on windows to download, and click through to install everything.

![](https://i.imgur.com/G90zeyE.png)

After you download and install it, run it and start Apache.  You should see a control panel like this:

![](https://i.imgur.com/wgpIqfH.png)

Click on "Explorer" to get access to where the files are.  From the main directory called xamp, you want the sub-directory "htdocs".  Open this, delete the index.php file, and create a new file called replicator.php which you copy and paste the replicator at [php/replicator.txt](php/replicator.txt) into, and save.  

![](https://i.imgur.com/EpHYYOd.png)

Point a web browser on the same computer to [http://localhost/](http://localhost), then click on replicator.php.  This should replicate the whole system into the directory.  When this is done, click the link to go to the main page.  You should see a new Geometron instance:

![](https://i.imgur.com/b8iZDRF.png) 

When this loads, you need to get the IP address of this machine, which you do by clicking from the main XAMPP screen(shown at the top of this scroll) to "netstat".  You will now see a bunch of processes on various IP addresses.  Look at the web browser you opened which you pointed to "localhost" and you will see the IP address of this machine.  Create a link to it by starting with "http://" and then adding the IP address.  Share this link with yourself and anyone else on the local wifi network via email or text message or link on an existing server.

![](https://i.imgur.com/XqBnJIY.png)

Also, to have a record of it which is easy to share, add a link to it at the top of the home scroll for the new server.  You can also add a link to qrcode.html at the top of the new home scroll so that it is easy to replicate a link from one mobile device to another when they are all on the same wifi network, all looking at the same Windows server.


## Installation on Android


To run a Geometron Server on an Android, we will install the commercial software ksweb pro.

![](https://i.imgur.com/Q8Q7gaR.jpg)


[link to play store to install ksweb](https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwiLrtjPw6fxAhUQu54KHWkyAjIQFjAAegQIBRAD&url=https%3A%2F%2Fplay.google.com%2Fstore%2Fapps%2Fdetails%3Fid%3Dru.kslabs.ksweb%26hl%3Den_US%26gl%3DUS&usg=AOvVaw2ChVP4ojXIuGxVe-JjtEV3)

[https://www.kslabs.ru/](https://www.kslabs.ru/)

Install KSWEB on the Android, and turn it on.  Get the paid version. It is worth it, there are lots of broken web servers out there or ones with crappy features and tons of ads.  This is critical infrastructure for Geometron and it's worth supporting the developer of this useful tool.  Be sure PHP is also turned on.  

This is what it looks like when it is on:

![](https://i.imgur.com/EKjyekx.png)

Use the Editor built into the system to create a new file called replicator.php in the directory htdocs on the sd card as shown above, and to copy/paste into that the file in [php/replicator.txt](php/replicator.txt).  Save that, and delete index.php. Point a browser to the address [http://localhost:8080](http://localhost:8080).  Click on replicator.php and wait for the system to copy.  Sometimes it might time out, try it again.  When the system has replicated, make sure your phone is on a local wifi network, and turn the server off and on again, and you will get an IP address for the phone which is shown in the app.  The link for any other machine on the network other than the phone is the IP address followed by colon and then "8080".  E.g. http://192.168.0.19:8080/.  Share this link via email, text message, and links on other servers so that anyone on your network can see your server and edit it.  


3. Installation on iPhone and iPad

As with all other platforms, just copy replicator and run it. The server which has been found to work is [phpwin](https://app.phpwin.org).  Install it on your ios device.  Then create a new file called replicator.php.  Edit that file, and copy/paste the contents of the replicator from here to there, save it, and run [your domain]/replicator.php from any web browser. If it does not work fiddle around with permissions, making it more and more open until it works.  Since there is no private date in our system of any kind, security is not a thing that exists, and 0777 is preferable for all permissions.

4. Installation on Raspberry Pi

Set up a Raspberry Pi.  To learn more about Raspberry Pi see the main page at [www.raspberrypi.org](https://www.raspberrypi.org/) and also look at what is available on [Adafruit](https://www.adafruit.com/) in terms of Raspberry Pi stuff, as well as [https://www.sunfounder.com/](https://www.sunfounder.com/) and [https://www.pishop.us/](https://www.pishop.us/).  How much stuff you need to get depends on how you want to use the server.  

Servers are packaged with cardboard, rainbow colored duct tape, and sheets of HDPE from milk bottles.  They should have tie holes where Trash Ties can be used to suspend them.

### Components of a full Raspberry Pi system:

 - HDMI screen
 - HDMI cable
 - Raspberry Pi board
 - SD card
 - SD card reader/writer
 - USB keyboard
 - USB mouse
 - Wall plug
 - Rechargeable battery

![](https://i.imgur.com/4zetaPf.png)

Keyboards should be painted with the Geometron Symbol glyphs using the following map:

![](https://i.imgur.com/b8IlcdE.png)

When you have gathered the parts, assemble them, install NOOBS on the SD card, and set up your pi.  This collection of highly portable elements including the rechargeable battery is important for the portability of the system, which should have a dedicated bag to carry it around in so that it is fully mobile.  

[link to set up the Pi from raspberrypi.org](https://www.raspberrypi.org/documentation/installation/noobs.md)

Open a terminal and install Apache and php:

<pre>
sudo apt update
sudo apt install apache2 -y
sudo apt install php libapache2-mod-php -y
</pre>

Then install the [Geometron software](https://github.com/lafelabs/thing/) type copy/paste these commands into the terminal:

<pre style = "overflow:scroll">
cd /var/www/html
sudo rm index.html
sudo curl -o replicator.php https://raw.githubusercontent.com/LafeLabs/thing/master/php/replicator.txt
cd ..
sudo chmod -R 0777 *
cd html
php replicator.php
sudo chmod -R 0777 *
</pre>

That Raspberry Pi is now set up to act as a Geometron server.  Log that Pi onto a local wifi hotspot, then go to the link at the top of the screen to get a QR code and link for that server.

![](https://i.imgur.com/iH9gFJC.jpg)

5. Installation on commercial remote hosted servers

Create a new file called replicator.php.  Edit that file, and copy/paste the contents of the replicator from here to there, save it, and run [your domain]/replicator.php from any web browser. If it does not work fiddle around with permissions, making it more and more open until it works.  Since there is no private date in our system of any kind, security is not a thing that exists, and 0777 is preferable for all permissions.

6. Forking the code

This assumes you have some idea of what Github is, and can use PHP from the command line, but it should be not hard to follow this if you get help from someone who knows it. Get a Github account, which is free.  [Download Github Desktop to use a simple graphical interface](https://desktop.github.com/).  

Learn how to make a new repository. Get PHP working from the command line.  On Windows 10 you'll need to install the Ubuntu system from the Microsoft store and follow the instructions to get that set up and install PHP.  

With PHP running at the command line, you can create a new file in your new repository called replicator.php, and copy the PHP file here into that.  That can be found in raw text form at [php/replicator.txt](php/replicator.txt).  Now modify the text so instead of the address for the file dna.txt you have http://[the IP address of your pi on your local network]/data/dna.txt.  Then run from the command line "php replicator.php" and the whole system should replicate.  You can then back that up to Github.  A subsequent instance can be created from your new github repo by redirecting a replicator to point to the data/dna.txt file found on the repo in raw form.  This will then fetch all of the files from the global git repo, but you can be updating that whole system of files locally at any time.  This can replicate a purely local network resource at a global scale which can then replicate to any other local network resource like other Pi servers.





