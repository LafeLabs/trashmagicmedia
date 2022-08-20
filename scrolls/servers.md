[home](index.html)

[The Book of Geometron](scrolls/bookofgeometron.md)

[Geometron Thing on Github](https://github.com/lafelabs/thing/)

[local README file with setup of server software](scroll(README.md))

# Chapter 4: Servers


Servers are machines that store and share documents in the Geometron
system. There are three kinds of servers we work with: the Raspberry Pi
servers that form the real backbone of the network, globally visible
hosted domains used to point people to local Pi servers, and developer
servers for editing and sharing new versions of the Geometron software
itself.

To spread the Network, the most fundamental form of replication is
replicating the local Raspberry Pi server. To do this, we want to either
buy or barter for the parts, install the software, and teach someone how
to operate it so that it can be sent out onto the Street for public use.
Given the choice, we will always barter for the parts. If we can find
people who support our cause and have extra technology hardware like old
keyboards, screens, or even Raspberry Pi boards, it will be easiest to
take direct donation of hardware on location by an existing server than
to deal with purchasing and shipping new hardware.

The elements of the basic Raspberry Pi server are:

-   The Raspberry Pi board itself. This is a circuit board about the
    size of a deck of cards. All of them should work! Older ones might
    be slower but they should all work. This has all been tested on the
    Pi 3 and Pi 4. Boards are generally between 40 and 50 dollars, but
    again if you can barter them that’s ideal, as they are often sitting
    idle in peoples desk drawers.

-   micro SD card and SD card reader to write the card.

-   USB keyboard. If possible, find the one without the number pad so
    that it fits more easily in a backpack, this can make a huge
    difference in portability.

-   USB mouse.

-   HDMI Display. Not all work, but all can be made to work. Ideally you
    want a small screen which can run off the same battery as the Pi. If
    you are setting up in a fixed location you can use any standard
    modern TV screen, which good both for needing fewer new resources
    and for visibility. A large screen display for a server can be a
    great way to have shared physical social media, where people can
    read documents on the big screen without needing any device of
    their own. For small portable ones we recommend buying ones
    specifically sold for the Pi, and which say that they don’t need any
    special installation of software to work.

-   HDMI or HDMI mini cable. There are some tiny Pi displays which don’t
    need this because they connect to the pins on the board. Note also
    that you will need the HDMI mini cable for the Pi model 4 but the
    regular HDMI for all other models.

-   Lithium ion polymer battery packs. This is only for portable
    installations, but it is important to have something modular and
    portable with a lot of power storage capacity. We recommend the
    TalentCell batteries as being easy to charge, easy to carry, and
    having both 12 V and USB output. They also sell solar chargers for
    those batteries, which are useful to have for long stretches of
    being away from power.

-   Wall power. For the Pi model 3 and below this means a wall supply
    with the same USB micro and for the model 4 it is USB C. You will
    want a wall supply that can put out 3 amps at 5 volts. Also, if you
    are running everything of 12 volts you will already have a wall
    supply that came with the battery packs listed above.

-   Wifi hotspot. This can just be a phone with the hotspot turned on.
    But it can also be a mobile hotspot from the phone company which has
    its own wifi and connects to the network.

When you have all the materials to make a server, you will want to start
by setting up the Raspberry Pi in the normal way documented on the
Raspberry Pi website. Follow the instructions on there to copy the NOOBS
operating system onto the SD card. You can also buy SD cards with NOOBS
already installed. The Raspberry Pi home page is www.raspberrypi.org.
Buying Raspberry Pi stuff can be done in person at some electronics
retailers, some maker spaces, and online from numerous retailers, just
search and look around. Sunfounder is a great source of compact portable
screens for the Pi as well as other Pi things.

Note that part of setting up the Pi is logging onto some kind of wifi
network, which is similar to on any other computer system, you click on
the wifi icon in the upper right of the screen, select a network and put
in the key. If we are using a hot spot we will want to select a simple
name and password like using “geometron” for both, and post as widely as
possible to potential users what that is so it’s easy for them to
remember and log on. In order for this network to be visible, all users
must share a wifi network. It is also possible to point a global domain
name to a local Pi visibible to the outside world, but that is beyond
the scope of this book.

Once the basic operating system is set up(set it up with no password)
you will want to install the web server, the PHP language, and the
Geometron server. To do this you can follow the instructions at
[github.com/lafelabs/thing](https://github.com/lafelabs/thing/), which is where all the code for this project lives and from which it will all be copied when you install. This
copying process copies all the detailed instructions to copy the system,
so if you find any instance of the Geometron system on a global or local
server you can follow the instructions on there to replicate.

When the Geometron server is installed on the Pi you can interact with
it by opening the web browser on the Pi and pointing it to
http://localhost. This should now look like any other server in
Geometron. This can be used to create, edit and replicate documents of
all the formats in the Geometron system, which are documented in the
next several chapters of this book, as well as on each instance of the
system.

When you set up a new Pi server, you will want to copy the Pi scroll to
the home scroll, and there is a link to do that in the default screen.
When the Pi has a correct Home Scroll there will be a link to open a
page which makes a QR code for the server. You can then scan the QR code
on the screen to log on with any mobile device which is logged onto the
same wifi network as the Pi.

The second type of Geometron server is on remote hosted domains. As
discussed in earlier chapters, we will buy domain names based on generic
places that are not owned by anyone but have a physicality of some kind.
For example streets, parks, rivers, neighborhoods, truck stops, or
mobile mutual aid stations. To install the Geometron server on a
globally hosted domain, just copy the file replicator.php from any
existing Geometron server then point a browser to it. This is documented
in the README documents.

Finally the developer server is used for local editing of Geometron on a
private computer which can then be pushed to public repositories in a
host like Github. This is done using the built in web server of the PHP
language. If you are using a Mac, PHP is built in and you can run all
this from the command line. If you are on a PC you will need to install
the Ubuntu machine under Windows 10, install PHP and use that command
line. In either case, start a new Github repository, set up whatever you
would normally use for development via Github and put the file
replicator.php in there. Run it with php replicator.php at the command
line. Then while in that directory, run php -S localhost:80 and point a
browser on that machine to http://localhost. Now you can operate
Geometron as normal.

To edit all the code on the system, use editor.php, which is linked from
the README file. To point the next replicator to your new instance of
Geometron, edit the code in php/replicator.txt to point to the
/data/dna.txt file of your new instance, and then convert that to php
with text2php.php, which is linked from the code editor.

The details of the system should be documented on the system itself and
on other linked media, so it is redundant and tedious to delve too
deeply into technical details here. This is just here for completeness
so that the system is described in broad strokes and so there are
pointers to all the bits you need to learn about if you want to move
from just using the system to building your own new systems based on it.

These three types of server are the whole system! There is no company
selling server space or running a central code base. Each individual
server of any kind has the whole system on it. If every system on the
planet were deleted in an instant, you could repopulate the entire world
with the one copy on the individual Raspberry Pi you are using, or the
Github repository you cloned it from or the web page of the local street
that connected you to the Network. Github repositories replicate code,
hosted domains point to Pi servers, and Pi servers are the medium on
which all documents can be created, replicated, and shared freely across
the whole rest of the Network. All this can happen with no company, no
organization, no centralized code base, no centralized brand or naming
convention, no authority, no property, no cash flow, and no presence in
any app store. And all of it is open, clear, self-documenting, and easy
to copy.

Now, go forth and multiply! Let us first make a million of these with
the Raspberry Pi, then learn to make them on old hardware which we
install stripped down Linux systems on, and then finally on Geometron
hardware built entirely from trash using the full stack Geometron system
described later in this book. Millions of servers can serve hundreds of
millions of people. When we scale to using all reclaimed trash for
hardware, we can scale to billions of servers, eliminating the personal
layer of networking completely, with ubiquitous open and free media
shared in physically public spaces. This technology is clearly already
possible to build if we choose to do so, and it can clearly be done for
free given the very high rate at which the existing consumption-based
system is pumping out electronic trash with all the elements of
media(screens, batteries, radio transmitters etc).

[Next chapter: Scrolls](scrolls/scrolls.md)
