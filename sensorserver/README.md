# Sensor Server

![](https://raw.githubusercontent.com/LafeLabs/trashmagicmedia/main/sensorserver/images/sensor.png)

COM 3, 9600 baud

## [index.html](index.html)

## [editor.php](editor.php)

## [http://localhost/](http://localhost/)

## [global replicator code link](https://raw.githubusercontent.com/LafeLabs/trashmagicmedia/main/sensorserver/php/replicator.txt)

Arduino Code:

```
/**
 * Async example for MPL3115A2
 */

#include <Adafruit_MPL3115A2.h>

Adafruit_MPL3115A2 mpl;

void setup() {
  Serial.begin(9600);
  while(!Serial);
  Serial.println("Adafruit_MPL3115A2 test!");

  if (!mpl.begin()) {
    Serial.println("Could not find sensor. Check wiring.");
    while(1);
  }

  // set mode before starting a conversion
  Serial.println("Setting mode to barometer (pressure).");
  mpl.setMode(MPL3115A2_BAROMETER);
}

void loop() {
  // start a conversion
  //Serial.println("Starting a conversion.");
  mpl.startOneShot();

  // do something else while waiting
//  Serial.println("Counting number while waiting...");
  int count = 0;
  while (!mpl.conversionComplete()) {
    count++;
  }
  //Serial.print("Done! Counted to "); Serial.println(count);

  // now get results
  //Serial.print("Pressure = ");
  Serial.print("{");
  Serial.print("\"Pressure\":");//units of 1 hPa =  100 Pa
  Serial.print(mpl.getLastConversionResults(MPL3115A2_PRESSURE));
  Serial.print(",\"Temperature\":");//degrees C
  Serial.print(mpl.getLastConversionResults(MPL3115A2_TEMPERATURE));
  Serial.println("}");

  delay(100);
}
```

### Python Measurement

```
# this measurement should be in a while(true) loop with a sleep(meastime) and be triggered to run in the background and it should run at boot so the server is always taking data when it's on
import serial
import time
import datetime


while True:
    presentDate = datetime.datetime.now()
    unix_timestamp = datetime.datetime.timestamp(presentDate)*1000
    ser = serial.Serial('COM3', 9600, timeout=1)
    ser.flush()
    i = 0
    data = ""
    while i < 10:
      i += 1
      data += str(ser.readline())
    ser.close()
    data = data.split("\\r\\n\'b\'")[5]
    filename = "media/sensordata/data" + str(unix_timestamp).split(".")[0] + ".txt"
    file1 = open(filename,'w')
    file1.write(data)
    file1.close()    
    time.sleep(60)# wait 60 seconds, so record a data point every minute until program break
```

### Python plotting 

Do this from a notebook in the main web directory of the server

```
import json
f = open("data/sensordata.txt", "r")
textdata = f.read()
data = json.loads(textdata)
import matplotlib.pyplot as plt
import numpy as np
pressurewave = []
temperaturewave = []
timewave = []
for x in data:
    #print(x['Pressure'])
    pressurewave.append(x['Pressure'])
    temperaturewave.append(x['Temperature'])
    timewave.append(x['timestamp'])
plt.plot(timewave,pressurewave)
```

### Javascript make one JSON

```
timestamp = 0;
function loaddata(){
    datajsonarray = []; 
    timestamparray = [];
    for(index = 0;index < datafilenames.length;index++){
        timestamp = parseInt(datafilenames[index].split("data")[1].split(".txt")[0]);
        timestamparray.push(timestamp);
        var httpc666 = new XMLHttpRequest();
        httpc666.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                localdata = JSON.parse(this.responseText);
                datajsonarray.push(localdata);
                for(var badindex = 0;badindex < datajsonarray.length;badindex++){
                    datajsonarray[badindex].timestamp = timestamparray[badindex];
                }
                document.getElementById("jsondata").value = JSON.stringify(datajsonarray,null,"    ");
                //this very very bad code, but it works and solves some timing issues with the XMLHttpRequest object
                var httpc99 = new XMLHttpRequest();
                httpc99.open("POST", "filesaver.php", true);
                httpc99.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                httpc99.send("data="+encodeURIComponent(JSON.stringify(datajsonarray),null,"    ")+"&filename=data/sensordata.txt");//send text to filesaver.php

            };
        }
        httpc666.open("GET", "fileloader.php?filename=media/sensordata/" + datafilenames[index], true);
        httpc666.send();
    }
}
```



### Installation

Install this on a personal machine(windows, mac, linux), a donated old laptop, or a Raspberry Pi.  Create folders in the "media" folder for collections of media(topics, formats, authors, types, purposes, locations etc), and drop media in there to share.  Put the server on a shared wifi network, post a QR code to the IP address of the server, and share the link. Click the link to get a QR code, put http://[your ip address] into the text field and hit enter to update the QR code, then screen shot that, print it, share it etc. to get more people on the wifi to see the server. They can then all download all the books and other media. FREE BOOKS!


### Installing on a windows or mac private machine

- [download XAMPP](https://www.apachefriends.org/index.html) and install, 
- go to the directory xampp/htdocs and delete the file index.php
- download [replicator.php](https://raw.githubusercontent.com/LafeLabs/trashmagicmedia/main/sensorserver/replicator.php)(right click, "save link as") and save it in the directory htdocs
- start the xampp server either by searching for the program or manually starting it from the xampp directory on your hard drive
- go to [http://localhost/replicator.php](http://localhost/replicator.php) to replicate the server, click the link to go to the local TRASH MAGIC MEDIA NETWORK
- or navigate there with this link to [http://localhost/](http://localhost/)
- create desktop shortcuts to media/ folder in the xampp/htdocs folder
- put sub-folders in the media folder for different kinds of media, put media you want to share in those folders, make a "books" and "music" folder and put pdfs of books in the books folder and .mp3's of songs in the music folder
 

### Install on Pi


Get a SD card with 8 GB or more storage and a SD card USB reader

Download and install, then use the Raspberry Pi Imager:

[https://www.raspberrypi.org/software/](https://www.raspberrypi.org/software/)

Turn on the pi click through all the things, put it on the wifi network.


Open a command prompt(black link on menu bar) and type:

```
sudo apt update
sudo apt install apache2 -y
sudo apt install php libapache2-mod-php -y
cd /var/www/html
sudo rm index.html
sudo curl -o replicator.php https://raw.githubusercontent.com/LafeLabs/freebooks/main/sensorserver/php/replicator.txt
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
sudo curl -o replicator.php https://raw.githubusercontent.com/LafeLabs/freebooks/main/sensorserver/php/replicator.txt
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
 
 - [First Book of Geometron](https://www.trashrobot.org/bookofgeometron/)
 - [Geometron Magic](https://www.trashrobot.org/geometronmagic/)
 - [Trash Magic Books](https://www.trashrobot.org/user.php?scroll=scrolls/trashmagicbooks)

## related: [Solarpunk anarchist Substack on banned book library](https://anarchosolarpunk.substack.com/p/bannedbooklibrary)


  


