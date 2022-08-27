[home](index.html)

[book of geometron](scrolls/bookofgeometron.md)

# Chapter 7: Maps

Maps are a from of document in which a set of images, words, and links
are arranged geometrically on the screen. Just as the Geometron Scroll
can be thought of as a replacement for Microsoft Word, the Geometron Map
can be thought of as a replacement for Microsoft PowerPoint and Keynote.
But it is also a way to make and share memes, to annotate geographic
maps, annotate photographs of objects and really do any kind of
communication where the relative geometry of objects matters.

It is worth once again examining the consumer civilization’s version of
this in more detail to understand what we are trying to do differently
here. PowerPoint is the language used in the replication of things in
today’s world. When a new company is born, the founders use a PowerPoint
slide deck to sell that company to investors. Every government applied
science project starts with PowerPoint slides(often just a single one in
the infamous “quad chart” format). In many ways our whole civilization
runs on PowerPoint today. It is hard to imagine any project being funded
in the world today, be it government, corporate, or non-profit, without
a series of these simple graphic constructions of text and images and
vector graphics arranged in a geometric order of some kind. And of
course this format is the basis of the meme, this bizarre new type of
thing that spreads freely across the web, generally with copy and pasted
bitmaps.

We also need this format for replication of technology in our
trash-based civilization as well as for all kinds of other
communication. However, we need it to fit in with the values and laws of
Geometron, and that requires that we rewrite the whole thing from
scratch.

As with every Geometron document format, this format has to be something
human readable using plain text so that each individual Map can be
pasted into a text message, email, or pastebin for freely sharing across
the Web without any intermediary. We do this using the same language as
the Feeds discussed in the previous section: JSON(JavaScript Object
Notation). A Map is an array of objects, each of which has a collection
of properties. The array is denoted by a pair of square brackets, and
each element is separated by a comma. Each element is inside a pair of
twiddle brackets, and consists of pairs of names of properties and
values of those properties. Each element has a position, a size, an
angle, a text value(optional), a link(optional), an image(optional), and
information on whether it is a global link or a local link inside the
Geometron system.

You don’t need to understand what all that means to use the system! The
technical description is just there for reference. Maps are edited and
drawn using a JavaScript library called mapfactory.js, which is
replicated with each instance of Geometron. If you are a web developer
feel free to go read the source code now to get an idea of how it
works(there is not much to it).

By default, maps are displayed in a square area on your screen, and when
you load the Geometron home screen that square will be either the left
or top part of your screen depending on if your screen is wider than
tall(landscape) or taller than wide(portrait). To load a map, just look
at the list of maps in the menu either to the right of the screen(for
landscape) or in the popup menu you click to open with the button and
look at the right side list and click on any map. That will load it. Now
you can try clicking around on all the maps on your system, as well as
navigating from map to map using internal links inside the maps(some
have this some don’t).

Maps are used to amuse, to tell stories, to make points, to denote where
things are, to point out where a part of an object is located, and to
connect web pages to one another. Maps are much more powerful than the
PowerPoint slides they replace for several reasons. The ability to have
both global and local links to other documents makes them fully
integrated into a global, ever-evolving network in a way that makes them
much more rich and complex. They are, like all Geometron documents, not
owned by anyone. Each individual map is a free document, which can be
replicated, edited, deleted, shared an infinite number of times
instantly by anyone on the system. This creates a richness of
information which is impossible with a dead file format like PowerPoint.

Maps are a great way to build social media around a physical place. When
community forms around a local server in a local place, the local media
should have photographs of the objects in the environment. Unlike a
consumer network made up of “users”, we have people in a community who
share documents openly and freely. Photographs of people in our
community can go here, and we can build up a media pool that includes us
all, but as a shared community of documents, not as a database of
“users”. It is also an important way of denoting the exact physical
location of things if we are to build up complex systems of industrial
production from trash in our immediate environment.

Maps are also another way to rapidly create web pages in the Geomtron
system, as the main home page can be set up to point to them directly by
changing one line of code in index.html, by replacing loadscroll() with
loadmap() and the name of a map. All maps are stored in the directory
maps/ on each Geometron Server, and you can see all the maps by looking
there in a browser, then click on them to see and copy the raw text of
the map. Just as we have a home scroll stored in scrolls/home, there is
a home map stored in maps/home.

Maps are edited with the map editor, which is at mapeditor.html on your
local Geometron Server. The Map Editor looks a little bit different on a
portrait versus landscape screen. In either case, the screen is divided
into different areas which have links and buttons to do different
things. The main map window should look the same as when you are in the
passive map reading mode: a square either in the left or top of the
screen. The element edit window contains icons indicating various
actions, including select next/previous element, move element up/down in
list, delete element, create new element, save map, delete image, delete
link, and selectors to select which type of object you can select from
to replace in the element you are editing using the textfeed described
below. It is a good exercise to just try playing with these, deleting
all elements, then making a fresh one and playing with that. Whatever
element is selected is moved by dragging around on the map display
screen, which can be done either with drag-click with a mouse or
touch-drag on a touchscreen. Elements are resized or rotated using the
zoom/rotate box, which contains slider bars for both scale and rotate as
well as buttons for both zoom and rotate which only appear in landscape
mode.

There is another window which lists all the maps, and you can click on
those to select which one is being edited. That window also contains
links to the home screen, a link to the specific map you are editing,
and a link to the map delete program. The Map destroyer is exactly the
same as the Scroll destroyer. It is a list of all maps on the Server,
with a button to delete each map instantly. There is no undo. To click
is to destroy. If a map is worth saving it is worth copying and sharing
and if it is copied, deleting it costs nothing, so we make it very easy
to delete. The destroyer page has a link back to the map editor.

The window with these links also has a text input where you can input
the name of a new map. Try entering the name of a new map, and you will
see a blank screen. To add an element to that map, click the icon with
the plus sign. To delete it click the red X. Add another one, and move
it to the top then bottom, move them around. To add an image to a map
element, click on one of the images in the window with the images. Then
you can click the icon with the red X through the image symbol(mountains
and a sun icon) to remove the image and go back to just text.

That scroll of images can also display a scroll of links or text. All of
these are taken from a combination of feeds, but primarily the Text
Feed, at textfeed.html. This is linked via an icon with squares
separated by a triangle. The local image feed is also displayed and you
can add to that using links on here as well with “choose file” and
“upload image”. The blue link icon will make that scroll a list of
links, and the ABC icon will make it a list of text elements. You can
also edit all these manually using the table of inputs.

Unlike the Scrolls, maps are not instantly updated as you edit. They
have to be saved with the save button. Whenever you save a map, the text
based representation of the map in the JSON format is placed in the text
area below the control buttons. If someone sends you a link to a raw
map, you can go copy the contents of that map to the clipboard of
whatever device you are using and then paste it into that text area and
click the “import” button to import it into the current map. You can
then save it, and the current map will be replaced by the imported map,
destroying the existing map. You can also hit the “reset” button to
clear out the map and start over with a fresh one. Try making a new map,
then selecting all the text in the text area, and pasting it to a public
pastebin, then sharing that link with another user. They can then paste
it into the text area of their server to make a new map which is a copy
of your map, edit it, and send it along to the next person and so on.

The button at the bottom of the table of inputs to edit the current map
element after maplinkode sets whether that mode is true or false. If it
is false, and there is a link from the map element it will be a regular
hyperlink like any other link on the Web. But if it is set to true, it
can point to either any map or any scroll on the web. If you paste a map
in a pastebin and then get the link to the raw version of that pastebin,
then put that into the “link” field in the table, you can click on that
link and it will load that remote map from anywhere on the Web. This can
be incredibly powerful, and can create entire networks of complex
interconnected maps, all via anonymous pastebins, all referencing other
images around the Web without storing any information on the local
server or linking to any specific server or user(there are no users).

The button marked “height mode” changes the relative height of the
element rather than the height and width together, which can be useful
for sizing text elements exactly how we want. This does not do anything
when the element has an image, however as the element will then
automatically size around the aspect ratio of the image.

While you can enter the address of an image, the value of a text area,
or a link value into the text fields, this is unwieldy and particularly
annoying on mobile. Therefore the main way to insert one of these types
of information into a map element is via clicking on it in the scroll of
images, text or link. This is switched between these three by clicking
the appropriate icon in the control button table(there is a link, text,
and image icon). The image scroll is listing images from the local and
global image feeds discussed in the last chapter, but it also has a
special feed just for feeding information into the Maps. This is the
Text Feed, located at textfeed.html. If you go to this page, you can
input text, links, and images, and then go back to the map editor and
use what you entered there. This is important for working on mobile
devices where the manual input in the table is very awkward, but it is
also important for another reason: dealing with symbols, icons, and
other creations of the Geometron geometric programming language.

Creating symbols with Geoemtron will take up much of the rest of this
book, but while it works with vector graphics, we need a fast and simple
way to embed them in maps. To do this we use the so-called “base 64
encoding”, which allows bitmap images to be inserted into files without
reference to an external image file. Symbols made with Geometron can be
converted into base 64 encoding using the link from the textfeed page
which says “png code”, and that will let you choose a symbol to convert
and save into the textfeed, along with the ability to select how large
that image should be in pixels. As with all Feeds in Geometron, you can
delete any element of any of the sub-feeds at any time by clicking the
big red X. Textfeed also links to some other applications which use it,
such as the Duality and Poetry Engine apps, which you can explore as
well.

Just as with Scrolls, we need to have the ability to use mathematical
typesetting with maps. While most people may not need to typeset math,
it is useful to know how to point mathematically minded people to these
tools so that they can use them if they want. The starting point for
this is to find a map or scroll that references math, and they should
link to the relevant pages. The relevant pages are mathmapeditor.html,
mathmapeditor.php, and mathuser.php. Combining math typesetting with
geometric symbols quickly and freely and sharing them can build a whole
new method for rapid communication of mathematical ideas. Setting up
this system in physical proximity to a location with a community of
mathematicians can be very powerful and is highly recommended!

Now that you know how to make, edit, delete, and share Geometron Maps I
want to say a few more words about exactly how they can be used in
helping with the workflow of the overall system. One of the most
fundamental tasks we need to do to build a physical network on the
Street is to help people to find things in the physical world quickly.
Global map servers exist with maps of the whole world, which everyone
can get to on any Internet enabled device. We can use these maps to find
where we are, then screen shot the map, save it, upload it to a server,
and build Geometron Maps which then annotate that map with symbols,
links, and words to show exactly where a Server is, or where physical
resources are for our trash-based industrial production. This can also
be very useful for ad hoc mapping in an area with specific local maps,
such as near the exit of a subway. Subway station exits often have a
very specific localized map centered on the station with clear markings
of relevant landmarks. If you photograph that, upload that photograph to
a public image server, link to it, and annotate it, you can build a
whole system of networked maps from that. Don’t forget links! Maps can
have annotations which are maplinks, linking to other maps or to scrolls
with any kind of document you might want to associate with a place. A
physical place can have a rich fractal structure of documents built
around it, forming a kind of physical hypertext: a document in which we
and everyone around us are physically immersed.

When we want to present a graphical story like the “pitch decks” which
use PowerPoint in the consumer media, we can treat each Map as a slide,
and then link them together with links on the edge of the screen going
from previous to next and so on. This can copy the functionality of
slide decks exactly, but with much more richness of content since they
can also link to scrolls, do not have to be linear, and are not
restricted to loading local maps. Rather than a “deck” being a dead
document sitting on a private hard drive, linked Map sets of Geometron
join a global swarm of potentially trillions of linked documents all
replicating, evolving, and being destroyed in an ever shifting living
informational universe.

When we build technology, and attempt to document that technology to aid
in replication, we need to be able to label parts of the technology, and
then link to images of sub-systems which then also have annotations.
Maps allow us to do this in an infinitely fractal way, zooming in on
things with more and more detail, and then forking off to related things
which are linked in much the way that Wikipedia forms a vast fractal
network of information.

The combination of geometric programming discussed in the next sections
with Map creation allows for exploration of symmetries of the world
around us which is unlike any other tool in its direct connection to the
symmetries and scales of the Universe. This will be explored much more
as we go along, but I encourage the reader to keep returning to the Map
editor and making maps with all the other parts as we go along and learn
the Geometron System.

Beyond these examples, there really are no limits to how much can be
done with this format. It is lightweight, simple, easy to copy, and
fundamentally more powerful than the predatory consumer systems like
PowerPoint. The framework is so simple that interested programmers can
easily rewrite the whole thing from scratch in many systems, making all
sorts of applications with it. As with the JSON format itself, or HTML,
the very simplicity of the specification is what gives it its power. A
blank PowerPoint document with literally no content can still be well
over a megabyte, and you can’t read it or edit it without paying
Microsoft rent for the “right” to run code already on your hard drive
which they agree not to break if you keep paying them protection money.
A Geometron Map can be as small as a few bytes, is human readable, can
be shared by text message or email with direct copy and paste, can
replicate itself freely across the network, and can be opened by an
application that is itself only a few kilobytes in size. Build on this
system! Make it yours! Share it and help it grow!

[Next chapter: Symbols](scrolls/symbols.md)

