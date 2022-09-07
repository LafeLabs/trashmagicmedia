[home](index.html)

![](https://i.imgur.com/NgelIKS.png)

# Robot Factory

# Robot Brain

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

# Controller

Controller kit:

- 26 inches of 9 conductor ribbon cable from red to black colors
- 8 buttons, Panasonic part number EVQ-11L05R(replace with CR1102H5.0F260 from CIT Relay and Switch)
- 9 pin female header with long pins, created by hand from 10 pin using a knife
- push pin to punch holes in the board for the buttons
- 7 solid wire jumpers, 3" long
- Geometron shapes: 3" equillateral triangle, 3" square, 3" isoscoles right triangle, 6"x1" ruler with Geometron markings

![](https://i.imgur.com/rIaKsJ3.jpg)

Corrugated Cardboard patterns

![](https://i.imgur.com/5lgrJQZ.png)
![](https://i.imgur.com/bBO9jAm.jpg)

Wrap board in black duct tape, punch holes spaced by 0.2 inches from each other, centered around the 8 marked dots from the above diagram.  Insert buttons on top side, bend leads. Connect jumpers so one pin of each button is connected to all the other ground pins, which connect to black wire on ribbon cable, which is grounded at the Arduino side.  Red to the right, black to the ground/left, wires are in order by color code and match the pins as numbered above, in order.  Split the ribbon cable by 7 inches on this end, strip ends.  duct tape with black duct tape the first non-split inch onto the 1 inch square at the top middle of the controller board as shown.

![](https://i.imgur.com/zeqj9IX.jpg)

Buttons are made as shown by wrapping color coded duct tape.  Green circle is "run" red octagon is "stop", red triangles are x motion, green triangles are y motion, and blue triangles are z motion.  After buttons are constructed, gently rest them in place, then duct tape loose strips on edges in color of buttons, then run black duct tape over them to hold them in place better and also keep the background all-black outside the button areas.  

![](https://i.imgur.com/6Uigo3J.jpg)

Finish opposite end of cable by cutting out two corrugated cardboard strain relief boot parts as shown, separating wires for 1 inch, stripping the ends, soldering them to the 9 pin female header, then packaging the whole assembly with black duct tape, sandwiching the soldered pins between the two strain relief boot cutouts.  Finally, paint pens are used to color code the *direction* of the pin progression, from red to purple.  This orientation of the rainbow color progression must be the same as on the Arduino, and it is what people will use to identify which orientation to plug that connector in with. 

![](https://i.imgur.com/IiKeq2i.jpg)

![](https://i.imgur.com/UG55SnP.jpg)

# Mechanicals

## parts

![](https://i.imgur.com/r9n0RSO.jpg)

- 3 4-wire ribbon cables terminated in 4-pin 0.1" pitch headers, taken from 3d printer motor cables which [can be bought on amazon](https://www.amazon.com/gp/product/B07PZWXBFB/).  Trim to 12 inches on the side with the 4 pin as opposed to 6 pin connector.
- 3 DVD drive motion stages taken from taking apart DVD drives which can be purchased on ebay for about 5 dollars in lots of a few
- velcro strip, both sides, cut into 2 1" squares on the hook side and 2 rectanlges 0.5"x1" on the fuzzy side
- 4 little disk magnets, about 3/8" diameter or 1/4" diameter
- HDPE from milk bottles cut into two 1 inch square pieces and a rectangle which is 1.65"x1"
- Thick plastic from the lid to plastic totes(generally 1/16th inch polypropylene), 2 pieces 1"x4"
- small nail with a flat enough head to stick vertically on the magnet
- large quantities of corrugated cardboard, cut into 
    - 6 squares 1.75"x1.75"
    - 3 rectangles 4"X5"
    - 36 0.6"x0.6" squares
    - 3-4 rectangles 14"x5" 

## tools and materials

- rainbow duct tape
- ohm meter(DVM)
- wire cutters/strippers
- assorted screwdrivers to disassemble DVD drives
- box cutters
- scissors
- gorilla glue 2 part epoxy
- elmers glue
- paint pens

## Tool Assembly

![](https://i.imgur.com/jxz0K7U.jpg)
![](https://i.imgur.com/fOC3D7e.jpg)
![](https://i.imgur.com/adDSB4n.jpg)

Mark and score HDPE sheets. Down the middle for the square parts.  0.5" in from edge on rectangular one.  Duct tape joints with HDPE on the "botom" side as shown.  Stack magnets with one on top of the central HDPE piece, nail on the bottom.  Add adhesive backed velcro strips.

Add 0.5"x1" velcro to tool, fuzzy side.

## Stage preparation

![](https://i.imgur.com/zvVKp6T.jpg)

Use ohm meter to check which pairs of contacts are connected.  Pairs will be about 10-12 ohms between contacts. Non-pairs should be effectively infinite resistance.

![](https://i.imgur.com/7KoLTuc.jpg)

Cut cables to 12 inches if you have not done so.  Strip ends. Solder to stepper motors


![](https://i.imgur.com/ru9KCLE.jpg)

Flip stages upside down, stack 0.6" squares up until they form an even level in 4 towers of 3 units, subtracting layers as needed to end up with all pillars level and with the level extending enough to prevent interference with motion of stage.  Use gorilla glue epoxy to fix stacks permanently in place, using the epoxy like mortar and the cardboard squares like bricks. When dry, use another epoxy joint to mount the stages to the 4"x5" rectangles.  Flip over and use epoxy to stack 2 squares on each stage(these are the 1.75" squares).  Choose the order of the stages on the final robot, attach 1 inch squares of the hook side of the adhesive backed velcro strips to the outer two.  

Use elmers glue to laminate together the three-four large boards(5x14). Wrap the board in rainbow duct tape. Epoxy the three stages to the board as shown.  Try both orientations of each connector on robot, test, if the directions are wrong, swap the orientation.  Mark the connectors with paint pen facing away from the robot brain, from left to right as red, then green then blue.











