# [TRASH MAGIC MEDIA NETWORK](https://github.com/LafeLabs/trashmagicmedia)

## [http://localhost/](http://localhost/)

![](https://raw.githubusercontent.com/LafeLabs/trashmagicmedia/main/images/replicator.jpg)

### *self-replicating media*

### Installing on a windows or mac private machine

- [download XAMPP](https://www.apachefriends.org/index.html) and install, 
- go to the directory xampp/htdocs and delete the file index.php
- download [replicator.php](https://raw.githubusercontent.com/LafeLabs/trashmagicmedia/main/replicator.php)(right click, "save link as") and save it in the directory htdocs
- start the xampp server either by searching for the program or manually starting it from the xampp directory on your hard drive
- go to [http://localhost/replicator.php](http://localhost/replicator.php) to replicate the server, click the link to go to the local TRASH MAGIC MEDIA NETWORK
- or navigate there with this link to [http://localhost/](http://localhost/)
- create desktop shortcuts to media/ and images/ folders in the xampp/htdocs folder
- put sub-folders in the media folder for different kinds of media, put media you want to share in those folders, make a "books" and "music" folder and put pdfs of books in the books folder and .mp3's of songs in the music folder
- find your ip address from your wifi settings and put it in the input at the bottom of the screen as indicated(http://[your ip address]/) and hit "enter" to update the permanent value of the server url
 - point [Web 1.0 hyperlink](https://raw.githubusercontent.com/LafeLabs/trashmagicmedia/main/hyperlink/php/replicator.txt) pages to your physical location and wifi logon instructions and a live hyperlink to the ip address of your server
 - build your own public self replicating hyperlink by first creating a [hyperlink server here by clicking this link](http://localhost/hyperlink/replicator.php), then click through to see it or
 - [click on https://localhost/hyperlink/ to see the hyperlink](https://localhost/hyperlink/) 
 - click the little asterisk in the upper left corner to edit.  Copy and paste the [JSON code](http://localhost/jscode/hyperlink.js) from the bottom of the screen into any other hyperlink page to replicate your page.  [Fork down](http://localhost/hyperlink/fork.html) to make more hyperlink pages. 
 - point cardboard signs to web 1.0 pages
 - post ads in the form of images from the main page
 - collect PUBLIC DOMAIN media from content creators, organize into folders, put folders in media folder, distribute to your community in your spaces. content creators share all media PUBLIC DOMAIN but with links to cash app, venmo, paypal, patreon, ko-fi or some other way readers can donate to support creators
 - [to make the page into the solar station page go to that README by clicking this link](https://github.com/LafeLabs/trashmagicmedia/tree/main/solarstation) and the links theirein.

This is local media.  We can install web servers on *everything*: mac and Windows laptops and desktops, Raspberry Pi, and Android and iOS Devices.  Any device can be a server, and we drop files on it to share with others on the same wireless network.  When every device is a server as well as a client, people who share wireless networks can media without the Cloud.  

Digital media content creators are supported by brick and mortar venues.  When a wireless network is the source of a constant stream of interesting and original media content, that brings people into that space.  Creators can both get sponsorships from venues and direct material support.  

This is a way to share media on the Web without the Internet, without the Cloud, without e-commerce, without algorithms or apps or the app store.  There is no user data because there are no users, just files in folders which everyone on the network can download.  The only information we ever put on the network is information we want to share freely.  

The construction of this network represents the building of digital community that is always centered on physically shared spaces.  


## Use Cases

 - music and art publication/distribution in venues like bars, art galleries, and coffee shops(artists compensated by venues to produce content)
 - medical literature .pdf's in medical waiting rooms
 - local web pages shared from server to server of local organizations, people, places, businesses, artists, etc.(local web)
 - local classifieds and personals ads
 - media for exchange of physical goods: share, give away, buy, and sell crafts, technology, food, locally made goods and unwanted objects, facilitate upcycling 
 - local financial markets, moderating deals between physically local business people
 - music sharing in religious communities(record audio and post to wifi) 
 - local plant, animal, fungus, soil, weather and water knowledge sharing 
 - creating foundational documents for local organizations whose existence is primarily on these local wifi-based networks
 - Documenting self-replicating things made from trash: trash magic
 - Free sharing of books, local library infrastructure, extension of Public Library system
 - free private library of banned books
 - censorship-resistant news distribution, local news
 - rapid creation of historical documents during historical events on location for replication to archives afterward
 - immersive text-based games, mixed reality


A very simple way to make a local media server on which people can share simple advertisements for literally anything is to host images of small screenshots and photographs.  We do this with the image feed, linked from the main page via the "Images" link.  The Image Feed has buttons to select an image to upload, then upload the image to the server.  Any image larger than about 1 megabyte won't upload.  For large images, either crop them or screen shot them and then crop the screenshot(this reduces the resolution and makes smaller files).

![](https://raw.githubusercontent.com/LafeLabs/picrust/main/readme-images/images.png)

Anyone can delete any image by turning "delete mode"  on, and then clicking the "DELETE" buttons.  Deletion is forever! Backup everything you care about!  Don't want to lose a thing? Copy it again and again.

![](https://raw.githubusercontent.com/LafeLabs/picrust/main/readme-images/images-delete.png)

In general, media files we want to share can be dropped into folders which are placed in the "media" folder on the servers.

![](https://raw.githubusercontent.com/LafeLabs/picrust/main/readme-images/media.png)

The entire system is self-editing, self-replicating, and self-contained.  Each server contains a code editor which can edit the whole system including itself.  Among the set of files on each system is also a set of scripts which clone the whole system.  Files are cataloged using the script [dnagenerator.php](php/dnagenerator.txt), which creates a file called [data/dna.txt](data/dna.txt) which is finally used by [replicator.php](php/replicator.txt) to copy all the code in the system from one server to the next.  Because all this is free Public Domain code we can host it on Github for free and replicate from there, but once it's replicating out in the wild, we can replicate from one server to another without referencing back to Github if we want. At any time, any instance can then be cloned to a local directory which is pushed out to a public Github repository which can the replicate out globally.  Thus we can move smoothly between totally local private replication and public replication to potentially billions of devices using Github's free hosting of open source projects(or anyone's random personal home pages on the public World Wide Web).

![](https://raw.githubusercontent.com/LafeLabs/picrust/main/readme-images/editorphp.png)


### Install on Pi

Raspberry Pi is now impossible to buy.  Find them donated from someone. Most people who have them don't use them or used them once and stopped due to lack of interest/time/need. Ask around!  Someone will be able to donate a Pi, keyboard, mouse, screen, power supply and whatever other random things you need to get set up.

Get a SD card with 8 GB or more storage and a SD card USB reader

Download and install, then use the Raspberry Pi Imager:

[https://www.raspberrypi.org/software/](https://www.raspberrypi.org/software/)

Turn on the pi click through all the things, put it on the wifi network.

## Install Apache and PHP so that geometron can run

Open a command prompt(black link on menu bar) and type:

```
sudo apt update
sudo apt install apache2 -y
sudo apt install php libapache2-mod-php -y
```

## Install TRASH MAGIC MEDIA server

```
cd /var/www/html
sudo rm index.html
sudo curl -o replicator.php https://raw.githubusercontent.com/LafeLabs/trashmagicmedia/main/php/replicator.txt
cd ..
sudo chmod -R 0777 *
cd html
php replicator.php
sudo chmod -R 0777 *
```

Check the IP address by hovering over the wifi icon, put that into the browser on another machine on the same local wifi network to see and edit the server.  Or open a browser on the pi and point it to [http://localhost](http://localhost)

### Ubuntu Install

You will need a thumb drive.

[https://ubuntu.com instructions](https://ubuntu.com/tutorials/install-ubuntu-desktop#1-overview)

open a command line and type:

```
sudo apt update
sudo apt install apache2 -y
sudo apt install php libapache2-mod-php -y
cd /var/www/html
sudo rm index.html
sudo apt install curl
sudo curl -o replicator.php https://raw.githubusercontent.com/LafeLabs/trashmagicmedia/main/php/replicator.txt
cd ..
sudo chmod -R 0777 *
cd html
php replicator.php
sudo chmod -R 0777 *
```
 
### Install on Android


To run a Geometron Server on an Android, we will install the commercial software ksweb pro.

![](https://i.imgur.com/Q8Q7gaR.jpg)


[link to play store to install ksweb](https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwiLrtjPw6fxAhUQu54KHWkyAjIQFjAAegQIBRAD&url=https%3A%2F%2Fplay.google.com%2Fstore%2Fapps%2Fdetails%3Fid%3Dru.kslabs.ksweb%26hl%3Den_US%26gl%3DUS&usg=AOvVaw2ChVP4ojXIuGxVe-JjtEV3)

[https://www.kslabs.ru/](https://www.kslabs.ru/)

Install KSWEB on the Android, and turn it on.  Get the paid version. It is worth it, there are lots of broken web servers out there or ones with crappy features and tons of ads.  This is critical infrastructure for Geometron and it's worth supporting the developer of this useful tool.  Be sure PHP is also turned on.  

This is what it looks like when it is on:

![](https://i.imgur.com/EKjyekx.png)

Use the Editor built into the system to create a new file called replicator.php in the directory htdocs on the sd card as shown above, and to copy/paste into that the file in [php/replicator.txt](php/replicator.txt).  Save that, and delete index.php. Point a browser to the address [http://localhost:8080](http://localhost:8080).  Click on replicator.php and wait for the system to copy.  Sometimes it might time out, try it again.  When the system has replicated, make sure your phone is on a local wifi network, and turn the server off and on again, and you will get an IP address for the phone which is shown in the app.  The link for any other machine on the network other than the phone is the IP address followed by colon and then "8080".  E.g. http://192.168.0.19:8080/.  Share this link via email, text message, and links on other servers so that anyone on your network can see your server and edit it.  

### Replicate the Github using localhost

 - install PHP on your machine
 - create a new github repository on a CC0 PUBLIC DOMAIN license and clone it on your machine
 - copy the file [php/replicator.txt](php/replicator.txt) into a file called replicator.php in the new repo directory
 - run `php replicator.php` on your machine, wait for all the code to copy
 - push all that code up to your github repo
 - in the same directory, type `sudo php -S localhost:80`
 - go to [http://localhost](http://localhost) and you should get back to this screen, edit all elements of the system
 - use [editor.php](editor.php) to edit the file php/replicator.txt so that the two urls are the global url for *your* repo for both dna and replicator
 - after you've edited the code, click [text2php.php](text2php.php) to convert that to php
 - push your code to your github repo
 - use the new replicator code on your github repo to replicate out that instance to all other servers(linux, windows, mac, android) and forks
 - when you figure this out, make youtube videos showing other people how to copy the whole system, tell someone about those videos so that we can all link to them


### Socials

 - [tiktok:@trash_robot](https://www.tiktok.com/@trash_robot)
 - [instagram:@lafelabs](https://www.instagram.com/lafelabs/)
 - [twitter:@trashrobot0](https://twitter.com/trashrobot0)
 - [youtube:@trash_robot](https://www.youtube.com/channel/UCLyeOlfnEBCnRTAH8rppEFw)

# Trash Robot Books
 
 - [First Book of Geometron](https://www.trashrobot.org/bookofgeometronfirst/)
 - [Geometron Magic](https://www.trashrobot.org/geometronmagic/)
 - [Trash Magic Books](https://www.trashrobot.org/user.php?scroll=scrolls/trashmagicbooks)

