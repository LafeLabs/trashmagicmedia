
# [Mobile Station](https://github.com/LafeLabs/trashmagicmedia/tree/main/mobilestation)



 - a minimum of 2 raspberry pi's, one set up as mesh network bridge the other as a science and media server. buy pi's from ebay, add more as they become available, take donations
 - 5 volt or 12 volt powered raspberry pi screen(also ebay)
 - power cables from USB to pi's([amazon link](https://www.amazon.com/CableCreation-Braided-480Mbps-Compatible-Resistance/dp/B01DVLB1I4/)
 - 12 volt to 5V USB power breakouts which can source at least 2.5 to 3 A
 - rechargeable battery, e.g. lead acid, deep cycle, niMh, lipo...
 - voltage dividers made with precision 10, and 100k resistors to divide down volages into the range of the arduino
 - [100k precision resistors on digikey](https://www.digikey.com/en/products/detail/vishay-beyschlag-draloric-bc-components/MBB0207VD1003BC100/7350411)
 - [10k preicision resistors on digikey](https://www.digikey.com/en/products/detail/vishay-beyschlag-draloric-bc-components/MBB0207VE1002BC100/7350421)
 - [an arduino mega](https://www.amazon.com/ELEGOO-ATmega2560-ATMEGA16U2-Projects-Compliant/dp/B01H4ZLZLQ/)
 - [a zener diode reference to calibrate the UNO ADCs](https://www.digikey.com/en/products/detail/rochester-electronics-llc/1N5223B/13450134)
 - [molex pairs from adafruit to make voltage taps unpluggable](https://www.adafruit.com/product/4720)
 - [thermisters](https://www.digikey.com/en/products/detail/tewa-sensors-llc/TTDO-100KC3-5/12372700)
 - [solderless breadboard and jumper(adafruit link) kit](https://www.adafruit.com/product/3314)
 - a vehicle or cart of some kind to carry the station around
 - shelter, tarp, awning, umbrella, enclosure
 - [adafruit I2C temperature and pressure sensor](https://www.adafruit.com/product/1893)
 - [small solar cell to run open circuit to as a reference for solar power incident, since the main panels will be at lower voltage when they're under load](https://www.digikey.com/en/products/detail/panasonic-bsg/AM-1417CA-DGK-E/2165185)
 - physical media exchange: shelves, cart, bucket, table, blanket, container, stand, counter, bag, backpack used to exchange all forms of physical media
 - software defined radio
 - home off the shelf router for mesh gateway
 - home old linux machine or pi which acts as the first wireless bridge, and which has a wifi dongle and yagi antenna
 - software defined radio with USB
 - home mesh router to work as a gateway
 - wifi USB dongles 
 - [thermistor equations](https://www.ametherm.com/thermistor/ntc-thermistor-beta)
     
     
# Science and Media Server Install
     
Get a SD card with 8 GB or more storage and a SD card USB reader

Download and install, then use the Raspberry Pi Imager:

[https://www.raspberrypi.org/software/](https://www.raspberrypi.org/software/)


Turn on the pi click through all the things, put it on the wifi network.

Open a command prompt(black link on menu bar) and type:

to install the web server, php, and remove the home page run:

```
sudo apt update
sudo apt install apache2 -y
sudo apt install php libapache2-mod-php -y
cd /var/www/html
sudo rm index.html
```

Now you can put folders in the folder /var/www/html/ and build a whole structure of media which users on the network can see when the point to the IP address of the pi.

install arduino:

```
sudo apt-get install arduino
```

install python and science things:

```
sudo apt install python3-matplotlib
sudo apt-get update
sudo apt-get install python3-scipy
sudo pip3 install --upgrade pip
reboot
sudo pip3 install jupyter
```

install gnuradio:

```
sudo apt-get install gnuradio
```

## Mesh bridge node install



     