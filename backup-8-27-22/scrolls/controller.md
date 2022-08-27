
[home](index.html)

[printers chapter](scrolls/printers.md)

[robot scroll](scrolls/printer.md)

# Controller

Controller kit:

- 26 inches of 9 conductor ribbon cable from red to black colors
- 8 buttons, Panasonic part number EVQ-11L05R
- 9 pin female header with long pins, created by hand from 10 pin using a knife
- push pin to punch holes in the board for the buttons
- 7 solid wire jumpers, 3" long
- Geometron shapes: 3" equillateral triangle, 3" square, 3" isoscoles right triangle, 6"x1" ruler with Geometron markings

## Version 2 Geometry

![](https://i.imgur.com/Iu8m5NU.png)

![](https://i.imgur.com/LOGqpWJ.png)

![](https://i.imgur.com/DXJ8lp1.png)

![](https://i.imgur.com/BaobcqC.png)


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

[return to robot map](maps/robot)
