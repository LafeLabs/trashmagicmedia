## [TRASH MAGIC MEDIA](https://github.com/LafeLabs/trashmagicmedia)

# [TRASH MEMEX](https://github.com/LafeLabs/trashmagicmedia/blob/main/trashmemex/README.md)

 - [as we may think wikipedia](https://en.wikipedia.org/wiki/As_We_May_Think)
 - [as we may think pdf](https://web.mit.edu/STS.035/www/PDFs/think.pdf)
 - [trash memex replicator.php global link](https://raw.githubusercontent.com/LafeLabs/trashmagicmedia/main/trashmemex/replicator.php)
 - [hyperland with Douglas Adams on youtube](https://www.youtube.com/watch?v=1iAJPoc23-M)
 - [global replicator of trash memex code set](https://raw.githubusercontent.com/LafeLabs/trashmagicmedia/main/trashmemex/php/replicator.txt)

The memex is a creation of Vannevar Bush from his July 1945 essay "As We May Think".  It imagines the knowledge systems of today but with a much better vision than the one we ended up with, in which knowledge is freely shared and organized based on what scholars have found useful in the past.  A world where instead of predatory platforms like Google gatekeeping a deliberately broken search we have means of finding information based on transparent peer data.  The imagined device is based on photography-like technology for directly writing documents into surfaces.  

The Trash memex is an implementation of the memex where we write using commercial off the shelf open hardware and DVD drives onto polished aluminum wafers extracted from aluminum beverage cans.  Aluminum forms an oxide layer in air(which can be thickened with a steam bath) which can be patterned in many ways with many different electrolytic solutions and electrodes and voltage/current configurations.  

A relaxation oscillator with a capacitor and the current through the electrolytic fluid can vary voltage and current through the system.  Magnetically mounted electrodes allow many electrode technologies to be explored.  Modular sample dish allows for many fluid solutions to be used.  

We will build technology including polishing and pressing machines to make near-identical polished wafers from aluminum beverage cans.  We use steam baths to control the oxide thickness.  With a spinner, we can then spin on films of all kinds to these wafers, which will be between the electrode and the wafer.

A controller with 8 buttons directly controls the movement of the probe.  The probe has x control with one stepper on one DVD drive which is in the inverted position, and fine x and fine z on the same one with control of the fine motion DC coils.  The wafer and wafer dish are on the other DVD drive stage and move in the y direction.  6 buttons directly move the probe.  One button starts a program written in Geometron and another one pauses or stops a program, as with all other Trash Robot Geometron printers.

The sawtooth wave at the analog input of the Arduino is fed into an audio cable which can be both mixed into sound the user can hear and fed into a computer which can analyze it, as well as used as a feedback signal on the Arduino to control the z position.

This system represents a general platform for writing on media and reading that media.  We can study many different chemical, biological and physical systems with this, using many solutions, many films, many electrode materials, and many electrical stimuli.  Programs can take hours to run if needed, building up complex 3 dimensional structures.  We can use this to fabricate devices, adding layer after layer to build up anything which can be manipulated with some form of probe.  

The initial phase of the system is just electrical and mechanical, but we will add optics as we develop it, so that the user can see the point of view of the probe while they navigate over the substrate.  This system should cost no money to replicate, as we will use donated materials, free software, existing STEM education materials budgets, public spaces, and skills taught in free classes both in those spaces and online.  

![](https://raw.githubusercontent.com/LafeLabs/trashmagicmedia/main/trashmemex/images/probe.png)

![](https://raw.githubusercontent.com/LafeLabs/trashmagicmedia/main/trashmemex/images/circuit.png)


![](https://raw.githubusercontent.com/LafeLabs/trashmagicmedia/main/trashmemex/images/controller.png)

![](https://raw.githubusercontent.com/LafeLabs/trashmagicmedia/main/trashmemex/images/graph.png)

![](https://raw.githubusercontent.com/LafeLabs/trashmagicmedia/main/trashmemex/images/uno-io.png)


![](https://raw.githubusercontent.com/LafeLabs/trashmagicmedia/main/trashmemex/images/slimezistor.png)

![](https://raw.githubusercontent.com/LafeLabs/trashmagicmedia/main/trashmemex/images/photo-setup.png)

![](https://raw.githubusercontent.com/LafeLabs/trashmagicmedia/main/trashmemex/images/photo-slimezistor-square-front.png)

![](https://raw.githubusercontent.com/LafeLabs/trashmagicmedia/main/trashmemex/images/photo-slimezistor-square-back.png)

![](https://raw.githubusercontent.com/LafeLabs/trashmagicmedia/main/trashmemex/images/photo-slimezistor-arduino.png)

![](https://raw.githubusercontent.com/LafeLabs/trashmagicmedia/main/trashmemex/images/photo-sliders.png)
