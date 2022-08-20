[home](index.html)

# Robot Brain

[printers chapter](scrolls/printers.md)

[mechanicals](scrolls/mechanicals.md)

[controller](scrolls/controller.md)


## Parts

- [Trash Robot Brain Board v3, purchased from PCBway.com](https://www.pcbway.com/project/shareproject/Trash_Robot_main__brain__board.html) from board design [on github](https://github.com/LafeLabs/trashrobot5/tree/master/boards) called Arduino Shield XYZ stepper v3 
- right angle male header, 9 pin, 1x
- straight male headers [bought in bulk along with right angles](https://www.amazon.com/gp/product/B0774VBJ3J/) and broken into 3 4 pin headers, 2 8 pin, 2 6 pin and 1 10 pin
- [one 0.5 inch breadboard jumper](https://www.amazon.com/MCIGICM-Breadboard-Jumper-Cables-Arduino/dp/B081GMJVPB/)
- 3 [MP6500 stepper motor contoller boards with potentiometer from pololu robotics](https://www.pololu.com/product/2966)
- [Arduino UNO, the most basic of Arduino Boards](https://www.amazon.com/ELEGOO-Board-ATmega328P-ATMEGA16U2-Compliant/dp/B01EWOE0UU/)
- [USB A to USB B printer cable](https://www.amazon.com/gp/product/B00UNZ9HLU/)
- 2 googley eyes
- duct tape of colors of rainbow
- box cutter
- scissors
- geometry tools(Geometron Shapes, rulers, pen etc)


![](https://i.imgur.com/DwKbgfP.jpg)

## Tools

- soldering iron, solder
- pliers to break headers
- volt meter
- tiny flat head screwdriver
- wire cutters

## Assembly of board

![](https://i.imgur.com/kCN9pMG.jpg)

Jumper connects Vcc to Vpower (for standard USB powered printer robot).  After this is soldered, trip excess on bottom of board

Be sure to solder all of the vertical headers before the right angle header so there is no interference. Be careful to split the headers that come with the motor controller boards so that they split in exactly the right place.  Be sure to also solder all the joints on the bottom side of the headers that support the stepper driver boards. 

Note also the orientation of the board and that the pin labels between the main board and the Pololu boards match. 

![](https://i.imgur.com/ok6K0Bf.jpg)

## Adjust potentiometers for current control

![](https://i.imgur.com/hz4C54Y.jpg)

![](https://i.imgur.com/XMMaNqx.jpg)


Connect the USB to power using a [USB A to B printer cable](https://www.amazon.com/gp/product/B00UNZ9HLU/) and carefully rotate with tiny screw driver all the way counter clockwise, testing the voltage to see that it is 0.1 V.  Note that there is minimal resistance to over-rotating, be very careful not to over-rotate.  This can be adjusted by feel without a volt meter but is easier to do with a meter.  Note the test point on the board as the positive side, and connect the meter to one of the ground points on the main board. 

## Assemble enclosure

Mount completed board on Arduino UNO.  

Replicate the pattern as shown from thin cardboard to use to cut out in thick corrugated cardboard.

![](https://i.imgur.com/8dy1hPq.jpg)

![](https://i.imgur.com/B4GOWsB.png)

Use rainbow duct tape and googly eyes to complete enclosure as shown.

![](https://i.imgur.com/HwXfmp8.jpg)

Note that the orientation of the rainbow matters!! red is at the same end as red in the ribbon cable, so the colors indicate the correct orientation of the connector for the controller(which has to also be [correctly assembled](scrolls/controller) according to the colors shown in that scroll).

## Program

[Download and install Arduino IDE](https://www.arduino.cc/en/software).

Copy [Arduino code from github](https://github.com/LafeLabs/trashrobot5/blob/master/arduinocode/arduino-trashrobot-coin-printer/arduino-trashrobot-coin-printer.ino) and paste into IDE, compile and upload to board.  Finish assembly of robot with controller and mechanicals and test. 

To operate robot, follow the path of the [workflow map](maps/workflow) to find images, align them, trace them into robot code, program them into robots, and share them with other people.











