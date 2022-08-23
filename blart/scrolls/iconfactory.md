## [home](scrolls/home)

## [iconserver/](iconserver/)

# Icon Factory

An Icon is a sequence of [Geometron](scrolls/bookofgeometron.md) actions which creates a symbol from an array of 64x64 pixels.  This can be used to create clay printed coins, clay printed jewelry, clay systems of self-replicating media, printed plastic trash, 3d printed parts, and spray stencils which can be printed in a laser cutter or paper printer with a pin.  Icons can also be integrated into other documents and pages in the [Geometron](scrolls/bookofgeometron.md) system, especially [maps](scrolls/maps.md).

This [Scroll](scrolls/scrolls.md) documents how to create icons from start to finish.  There are many ways to use this, and we will show you how to do several of them here.  We try to make this as widely usable as possible, allowing you to mix and match parts of the system so you can participate with minimal resources.  That said, you will need a working Geometron server which you can edit things on in order to do this, as well as a clay icon printer documented elsewhere to make the clay crafts.

## Step 1: Think of a symbol

This is the most creative step.  This can be anything: words, computer icons, symbols, signs, emoticons, or really any symbol in the most generalized sense. The only real limitation is that the limited number of pixels limits the resolution, so you should pick simple icons without too much detail.  It is good to first think of a thing you want to represent, then figure out the symbol for that thing.  "Thing" in this case can be a very generalized thing: ideas, objects, actions, places, people, brands, concepts, institutions, businesses, teams, logos, organisms, really anything.  

## Step 2: Either find or create an image of the symbol 

There are two paths to this: the [global image feed](iconserver/globalimagefeed.html) and the [local image feed(does not exist)].  We use the global image feed to capture the addresses of images on the World Wide Web which we will trace.  We can do this by doing an image search for whatever we decided we want to trace.  Having done the image search, you right click the image and "copy image link" to copy the address of the image.  Then when you go to [iconserver/globalimagefeed.html](iconserver/globalimagefeed.html) you just paste the address into the address bar and you have captured the image.  You can do this with an image you take yourself by uploading an image to the image sharing page [imgur.com/](https://imgur.com/), and again right clicking on your image and copying the link to paste in the global image feed.  

local images can be uploaded to a server using the:

[IMAGESERVER/](imageserver/)

### Step 3: Align the image for tracing

Once you have the image of the symbol you want to trace in one of the image feeds, you need to line it up for tracing.  This is done with [conserver/alignimage.html](iconserver/alignimage.html).  When you are on that page, click on the image in the feed that you want to use to select it and it will appear inside the alignment circle.  You then want to use either the slider bar or the little plus and minus symbols to adjust the size of the image so the whole symbol you want to trace appears inside the alignment circle.  When you have it the size you want, hit the SAVE button to save the image selection and scale.  Then move it around by dragging on the image to get the alignment all inside the circle.  Again, save whenever you get it how you want. You can also rotate with either the rotate bar or the buttons, and re-adjust the zoom and pan again, and finally hit the SAVE button when you have it how you want it.  When you have aligned the image, you can click on TRACE to get to the next step.

### Step 4: Trace the image into an icon glyph

Clicking from TRACE from the [image aligner](iconserver/alignimage.html) will get you to [iconserver/traceicon.html](iconserver/traceicon.html), which is where you trace the icon.  If you are on a computer with a proper keyboard, which is much easier than mobile, you can use the keys a,s,d,f to control the movement of the tool with a pixel being drawn, and if you use the keys z,x,c,v you can control tool movement without drawing a pixel.  These keys are shown below:

![pixel movements](https://i.imgur.com/csr4ZMb.png)

These exact commands are also accessible via touch screen buttons, which can be used if a keyboard is not available.  Color is selected using the number keys or the soft keys.  The layers are as shown below:

![pixel colors](https://i.imgur.com/MCA8IT3.png)

A glyph is cleared with the vertical bar above the backslash as shown:

![clear key](https://i.imgur.com/2GEtsfK.png)

As a glyph is created, you can edit it with the forward and back arrow keys and backspace as you would text: move the cursor, and delete individual commands.  Each command(moves, pixel drawing, colors) is represented by a number beginning with zero.  These numbers are part of the [Geometron language documented in the Book of Geometron](scrolls/bookofgeometron.md), but you do not need to understand what that means to work with them.  All you need to understand is that the series of numbers which changes as you edit is the text you need to share with other people to share your icon you created.  At any time in the editing process you can copy and paste the sequence of numbers separated by commas which make up the glyph into a saved file or send it in a text message or email to someone.  If you have a saved glyph or shared glyph from someone else, you can *paste* that glyph into the same space as the existing glyph, and it will instantly delete the old glyph and replace it with the new one you were just sent.    

To write text using the Geometron Robot font, hit return on a keyboard to switch from pixel mode to text mode and you can type text which will be printed in the robot font.  If a keyboard is not available(on mobile) you can type letters by clicking on soft keys in the soft key control panel below the basic pixel and color actions.  This font can be adjusted for other languages using Geometron as well.

When you have an icon you like, save it to the local icon feed by hitting the button marked SAVE.  After the icon is saved it will be available for use in other parts of the system, including:

 - [share and delete icons](iconserver/iconfeed.html)
 - [program arduino](iconserver/programarduino.html)
 - [inject icon into a Geometron map](iconserver/icon64.html)
 - [3d print an icon](iconserver/icon3d.html)
 - [spray paint stencil pattern of icon](iconserver/lasericon.html)


### Step 5: Share and save glyphs, replicate

The [Icon Feed](iconserver/iconfeed.html) page allows you to see and delete all the icons in the Feed.  Red X's delete. Be careful! Deletion really destroys the icon.  If you click on any icon, the glyph will load into the text input at the top of the screen.  That can then be copy/pasted to share with other people or save into a file. This page is critical for building a network of artists who can create and share these icons.  Any new glyph put in the top input will, after you hit enter, be loaded into the Feed.  Saving from the Trace page also adds an icon to the Feed.  The actual file which represents the Feed is stored at [iconserver/data/robotfeed.txt](iconserver/data/robotfeed.txt).  That file is also displayed in the text area at the bottom of the screen.  This can be copied to the clipboard and shared with other people or saved separately as well.  When someone shares a whole Feed file with you, you can paste it into the same text area at the bottom of the screen, and click the "import" button to import that whole Feed.  Again, this deletes the existing Feed, so make sure every Feed you want to keep is copied to some file saved somewhere.

### Step 6: Set up robot

Take the robot out of its bag, and manually adjust the position of the tool so that the two outer stages are each close to the center of their travel range.  Make sure the nail is balanced on the bottom of the bottom magnet so that it is vertical, with the top if its head flat against the bottom magnet. Adjust the tool bridge so that the nail is just about a quarter inch off the surface of the middle stage.

Once the printer is in approximately the right configuration, plug the USB into whatever computer you want to use to program it. This can be any laptop or desktop or Rasberry Pi.  Once it is plugged in, make sure that the controller connector is all the way plugged in and try operating the controller by pressing the arrow buttons to move the tool and center stage around. If this does not work, the controller is very likely not plugged in all the way or the Arduino is not getting power or is in a funny mode.  If things are not working, try unplugging and carefully re-plugging the connector for the controller, and unplugging and re-plugging the USB for the Arduino Robot Brain.  Sometimes a stage breaks and must be replaced as per the instructions to build the robot.  If nothing works, find someone who builds robots and they can trouble shoot by replacing all things one by one.  

When the robot is on and moving, use the controller to put all three stages in a state in the middle of their travel range, and move the nail a little over a quarter inch above the middle stage.  

When this is all set up, pinch off enough Sculpey polymer clay to make a ball about 0.6 inches in diameter and roll it between your palms until it is a smooth ball, then press it between two flat smooth surfaces until you get a pancake with smooth edges a little under a quarter inch thick.  Place this pancake of clay directly in the middle of the middle stage, so that the nail is in the middle just about 1 mm above the surface of the clay.  Push down on the clay very gently with your fingers around the edges to make sure it adheres to the cardboard stage surface so that it stays in place during the print.  You can sometimes gently repeat this process during a print if it comes loose without hitting "stop" also.

### Step 7: Program Printer

The Clay Icon Printer Robot brain is the [Arduino](https://www.arduino.cc/), an open hardware project used for building simple programmed hardware like this.  In order to program the robot, you will need the Arduino software to be installed on a computer.  Any "real computer" can do this, i.e. anything other than a phone or tablet, which has a USB port: PC, mac, or Linux, laptop or desktop.  If it has not already been done, [install the Arduino software by downloading it here](https://www.arduino.cc/en/software).  Just click on whatever operating system you are using, follow all the prompts to download and set it up, and then open the software.  The software is called the "Arduino IDE", and IDE stands for "Integrated Development Environment", which is an app in which you can write and edit the code which runs the Arduino.  It is probably helpful once it is installed to either put a link to it on your desktop or pin it to a task bar or equivalent so that you can get back to it quickly on whatever machine you have installed it on.  

Once the Arduino IDE is installed and open, make sure the robot is plugged into one of the USB ports of your computer.  Now you need the Arduino IDE to "see" the Arduino in the robot.  To do this, click on "tools" and then look at "ports" to see if there is a port visible you can select.  If it is grayed out or there are no ports, try repeatedly unplugging and plugging in the robot until you see something, and then select one of the COM ports.  Unfortunately this is trial and error. Sometimes the correct on is automatically detected, but if it's not just keep unplugging and plugging in and closing and opening the IDE until it is recognized.  This is what the menu looks like with the "ports" greyed out because nothing is connected:

![](https://i.imgur.com/V6dxO5e.png)

When the Arduino is recognized, go to the Program Arduino page in the Geometron system at [iconserver/programarduino.html](iconserver/programarduino.html).  On this page, click on the icon you want to print, and you will see the code chnage in the blue-green rectangular area.  When you click on any other icon, what changes is the string of letters in the top of the program.  Those letters represent the same information as the glyph code with the numbers described above, but in a form the Arduino is programmed to understand.  To program, click the arrow to compile and load the code.  There should be some text at the bottom of the IDE, the lights on the robot brain should blink, and then it should say that the sketch is uploaded(Arduino programs are called "sketches").  In some cases the size of an icon might be too large to load, and you can cut the string of letters into two pieces and upload the first one, print it, and then upload the second half to print.  

This is what the button looks like that you click to load the code:

![](https://i.imgur.com/NoFuwhS.png)

### Step 8: Print

With the robot programmed and the clay and tool prepared for a print, just hit the big circular green button on the controller to print.  At any time during the print, hitting the big red octagonal button will stop it.  In some cases after stopping in the middle of a print, the robot will be in a funny mode, and if it acts weird, just unplug and re-plug it.  If a print fails, just reform the clay blank and start the whole thing again, re-centering the tool as described above.

After the clay has been printed, you can flip it over and print another icon on the other side.  When this is done, you are ready to bake the first clay piece in the Icon Factory, the Print.  All of the Sculpey bake processes involve baking in a conventional oven at 275 degrees F for at least 15 minutes, but more is ok, and 20 minutes is normal.  Be sure to preheat the oven to get it up to the target temperature before putting the clay in.  Put the clay on an aluminum foil sheet or baking pan when you put it in.  After the baking is done, wait for the clay to cool, as it will be both very hot and still soft for a few minutes.  It can also be placed under cold water to quickly cool.  

Prints are to be stored in a Print Bag, which is a black cloth sewn bag with a green triangle symbol stitched on as shown.  This represents the Earth element in our system of mapping parts of our system to elements from ancient alchemy(this is just a sorting system and has no deeper meaning).  You can also just sew a bag from green or brown cloth with no symbol to represent this.  Bags are sewn with a draw string made from an 18 inch parachute cord with burned ends and a knot tied in it for easy carrying and hanging from hooks as described in [Action Geometry](scrolls/actiongeometry.md)
With the robot programmed and the clay and tool prepared for a print, just hit the big circular green button on the controller to print.  At any time during the print, hitting the big red octagonal button will stop it.  In some cases after stopping in the middle of a print, the robot will be in a funny mode, and if it acts weird, just unplug and re-plug

### Step 9: Make stamp

Once you have a fully hardened clay print, you want to make stamps from that. One print can make many stamps! And one two sided print can make stamps of each side, many times each.  To make a stamp, again roll a little ball of clay about 0.6 inches diameter, and then just smash it against the print gently so that it ends up about the same thickness as the print.  Do not over-press, you do not want any overhang, but a smooth round convex edge to the finished stamp.  Gently and carefully peel this stamp up from the print, make sure it is flat if it got curved, and you should have an inverse image of your print.  When this is done, repeat the oven process to get hardened stamps.  If you think this will be useful to share, make a few!  

When these are made, you can store them in a "fire bag", a cloth bag like the one described above but either with black cloth and a red triangle or a red cloth bag.  

### Step 10: Make tokens/coins

Once you have made some Stamps, you are ready to make the finished product.  Select two stamps to make the opposite sides of a token.  Create another rolled clay ball as you did for previous steps.  Very gently press the two stamps into the ball until it just barely goes to the edges. Be sure not to over-press so that the clay starts to get squeezed into a raised ring on the edges.  The edges should remain convex when you are done, with a smooth curve away from the surface on both sides so that it is easy to sand when done.  

After you press as many tokens as you want, again bake them in the oven with the 20 minute 275 F bake with preheat.  When they are completed, use paint pen to fill in the pixels.  Be sure the little spaces are all filled in with paint going all the way into the pixels. This is why you need paint pen and not marker, you need paint to get inside the depressions, be sure that there is no bare clay visible at all inside the pixel depressions.  When this is done, wait for the paint to dry, and then use a sand paper block(like a sponge, with sandpaper all over it) or just sand paper to sand off the surface layer of paint along the smooth top level of the token.  After all the surface paint is removed what is left will be a token with an image of your icon with painted pixels.  These can be stored in a Water Bag, either a blue cloth bag or black bag with blue triangle sewn on.  These are carried around and used for any task where you want to either work with icons on your own or communicate with others.  This is a totally generic token of information which can represent all the possible abstract ideas as described in the beginning of this document.  They can be used like game pieces, toys, currency, markers of physical objects, art projects, and numerous applications not yet known.  


![](https://i.imgur.com/BbU0bAX.jpg)

The same process can be followed with larger pieces of clay with holes in them to make pendants.  Pendants look like this:

![](https://i.imgur.com/K2ZoX6G.png)

###  Make 3d printed icon

The icons created in this system can also be 3d printed. This is done with [icon3d.html](icon3d.html), which you can just click on an icon to load.  If you like the look of the icon, hit the SAVE button.  If you want to see it in 3d, click on [three.html](three.html) to see it and rotate it around and zoom to see it.  If you want to 3d print it, click on [threejs.html](threejs.html) and then download the file data/three.stl to get a file you can send to a 3d printer.  If you do not have a 3d printer, this can be sent to some who does by email and they can print it. 

3d printed icons can be used like the clay icons to stamp in to a material like clay to replicate without a printer.  Also, you can make an inverted 3d printed part by clicking on the link to [threejsinvert.html](threejsinvert.html), which will flip the icon into its mirror image to make a stamp.  A 3d printed part like this can be stamped into a soft material, or have a soft coating added to it to make a stamp in ink.  

### Make stencil for spray paint replication

To create a stencil for spray paint replication of an icon, you can use [lasericon.html](lasericon.html).  Click on the icon you wish to replicate and then when it loads, hit the SAVE button.  Now click the link from there to the [symbol feed at symbolfeed.html](symbolfeed.html) to see the saved files, and download the image file you want.  You will need an .svg file to cut out the stencil on a laser cutter.  You can also print the icon on paper, then paste or tape the paper over a stencil material and punch holes in each pixel by hand with a pin or thumb tack.  With a stencil of all the pixels, the icon can be replicated on any surface with spray paint or other paints if it is appropriate for the stencil material(like screen printing).

### Use Icon in Geometron Map

Icons can be incorporated into [Geoemtron Maps](scrolls/maps.md) using [icon64.html](icon64.html).  Again, select the icon you want, and click SAVE.  This will save the icon to the [text feed](textfeed.html).  Once it is in the Text Feed, you can use it in the [Map Editor](mapeditor.html) to edit any Geometron Map.

You now have the tools to create self-replicating icons in several media which can represent any idea which the human mind can express in language and use them for any purpose. 

[home](scrolls/home)
