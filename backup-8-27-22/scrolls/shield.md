[home](index.html)

# Trash Robot UNO Shield v5

![](https://i.imgur.com/fzFvL7B.jpg)
![](https://i.imgur.com/qy2o8oR.jpg)

[Buy boards from www.pcbway.com](https://www.pcbway.com/project/shareproject/Generic_Trash_Robot_UNO_Shield__V5.html)

[Digikey shopping cart with components for 20 kits($150)](https://www.digikey.com/short/92z70jhr)

[Github repository with board files and code](https://github.com/LafeLabs/trashrobot5/tree/master/boards)

## Knob, buttons, switch, motor

Connect motor to output spring terminals.  Connect power supply to power spring supply terminals.

![](https://i.imgur.com/ooTwwea.jpg)

[copy/paste the code from the github repository here](https://raw.githubusercontent.com/LafeLabs/trashrobot5/master/arduinocode/knob_buttons_motor/knob_buttons_motor.ino) program the Arduino.  Turn on the power to the system, and push the buttons, flip the switch and turn the knob and you can control motor speed

## Neopixel bright rainbow cycle light

Program the system first, before connecting the NeoPixels.  The code can be copied from here, it is a simple modification of the original neopixel example from Adafruit.  You will need to [install the Adafruit Neopixel library on your Arduino IDE before using this](https://learn.adafruit.com/adafruit-neopixel-uberguide/arduino-library-installation).  Once the NeoPixel library is installed, [download the code here](https://raw.githubusercontent.com/LafeLabs/trashrobot5/master/arduinocode/white-led-fades/white-led-fades.ino).  Be sure to set in the code the right number of pixels for the strip you are using.  This has been tested with up to 300 pixels.  

Once the Arduino is programmed, connect the Power spring terminal to +5V, and connect the three pins from the NeoPixel input side to the three pin header on the board, noting the values of V, GND and signal.  

![](https://i.imgur.com/mkrSXRB.jpg)

## Accelerometer Graph

This is an example of an I2C controlled sensor.  There are many such sensors from many vendors, including both Sparkfun and Adafruit.  Find a sensor, buy it, and connect jumper wires to the board which match the markings on the 4 pin header(+,-,DA, and CL, or power, ground, data and clock).  Be sure to get the necessary Arduino library from either Sparkfun or AdaFruit depending on where you got the board.  Program board.  Modify code. Control things with sensors.

[See code here to program the Adafruit LIS3DH](https://raw.githubusercontent.com/LafeLabs/trashrobot5/master/arduinocode/Adafruit_LIS3DH_data_plotting/Adafruit_LIS3DH_data_plotting.ino)

[Buy adafruit LIS3DH here for $5](https://www.adafruit.com/product/2809)

![](https://i.imgur.com/b4vxVvn.jpg)
![](https://i.imgur.com/ZGoIO0U.jpg)

## Double coil feedback oscillator

Connect sense coil to appropriate spring contacts. Connect Drive Coil to motor output spring contacts. Connect power supply to power supply spring contacts.  Program Arduino with oscillator code.  Connect Arduino to USB power, power up external power, use to either spin magnets or oscillate magnets.

[link to code for oscillator from Github lafelabs/trashrobot5 repository](https://raw.githubusercontent.com/LafeLabs/trashrobot5/master/arduinocode/oscillator/oscillator.ino)

![](https://i.imgur.com/UUKVs4u.jpg)

## Golden Pyramid

![](https://i.imgur.com/Rj7pzZx.png)

![](https://i.imgur.com/9S73t3A.jpg)

![](https://i.imgur.com/KNKkTUf.jpg)

![](https://i.imgur.com/JOd7rLB.jpg)

![](https://i.imgur.com/yeHonep.jpg)

![](https://i.imgur.com/605Afs0.jpg)

![](https://i.imgur.com/3OcaYVq.jpg)

![](https://i.imgur.com/1RFYgKx.jpg)



