[home](index.html)

[Book of Geometron](scrolls/bookofgeometron.md)

# Chapter 5: Scrolls

Scrolls are the text documents of Geometron. Think of this them as the
Microsoft Word of the Geometron ecosystem. While most people are of
course familiar with text documents in formats like Word, the form of
Scrolls and how they work in our system is quite different and requires
a fair amount of explanation.

One of the most important requirements for a system of self-replicating
documents to function is that documents be able to be copied to a
clipboard from one window and then pasted into another window from the
clip board without losing any information. This is not possible in
formats like Word, since the system hides all the formatting from you.
In Geoemtron, the Scroll format uses raw text with a few additions that
allow for things like images, links, headers, and lists to be called
using simple syntax. This is what is called a “markup language”, and is
the same class of languages as HTML, the “HyperText Markup Language”,
which is the basis for how all Web documents are formatted.

What we use in Geometron is Markdown, a markup language specifically
designed to be as “lightweight” as possible, replacing the cumbersome
tags of HTML with simpler and shorter syntax. Markdown was created by
Aaron Swartz and John Gruber in 2002-2004 precisely to solve the problem
we need solved: the simplest possible way to create a rich text document
from plain text. One of the important differences between Markdown and
HTML, however, is that if you start with a blank document and just type
some text, not knowing anything about Markdown, that will be formatted
and readable, without adding any special code at all at the start and
end of the document. Markdown is also useful because it is used in
several other open technology systems that are useful for us to work
with in Geometron, namely the documentation on Github and the text cells
of the Jupyter notebook system popular in open source science.

In addition to basic typesetting capability, we use the $\LaTeX$
typesetting system as an optional add-on for creating and sharing
technical documents which use math. $\LaTeX$ is also used to build more
complex documents which are in other formats, such as this book, which
was written entirely using that system to convert to a .pdf format for
printing. This technical document sharing capability is important if we
wish to have our network form the basis of a new technological
civilization: we will need some very technical documents to make that
work. Also, $\LaTeX$ is used to typeset the equations in Jupyter
notebooks mentioned above, so the ability to work with it is important
for integration into existing open science projects.

Since everything in Geometron takes place in a Web Browser, we need a
way to translate this raw code that we interact with when we edit and
share files and something that looks the way things should look for
people to read it. We do this using two open source JavaScript libraries
which can be called remotely from a browser. To convert between Markdown
and HTML we use Showdown.js, which is published under an MIT license, is
easy for programmers to use with simple copy and pasting of code, and
widely available. To convert $\LaTeX$ code into HTML we use the the
MathMax JavaScript library, which is a fantastic resource for making
math work in a Web Browser.

In the standard user page on any Geometron system you will start by
seeing the home scroll. If you are on a screen which is wider than it is
high(like a laptop), there will be a bar on the right side of the screen
with a list of scrolls and maps you can click on. On a device which is
taller than it is wide, like a smart phone or tablet in their normal
orientation, there will be a button in the lower left corner to “show
menu” that you will need to click to see the lists of scrolls and maps.
Scroll through the scrolls and click on them to read them.

To edit the scroll you are reading, click the edit icon, which is
denoted by a pencil. This will drop you into the editor page, where you
can edit the code for the scroll you were just viewing using the
Markdown language as mentioned above. To switch which scroll you are
editing, click on any of the scroll names that appear next to the edit
area and you should instantly switch to one of those. To start a new
scroll, enter the name of your new scroll in the “new scroll” input. To
view the scroll you are editing at any given time, click the link with
the scroll icon, which looks like an ancient scroll with two rollers at
each end like a traditional Torah scroll and you’ll see that scroll,
then when you click the edit icon again you will get back to that
scroll. If you click the Home button you get back to the home scroll
regardless of what you were editing. The red “x” is the delete scroll
page, which we will deal with shortly.

Copy often! We do not “save” in the normal sense in Geometron. Every
keystroke edits the permanent file on the server. But all of that can be
destroyed in an instant by any user at any time. When we want the
documents we create to replicate we simply replicate them: copy all the
text from the editor window and paste it into both other backup scrolls
on the same system and to other scrolls on other systems, local copies
on private machines, or global copies on public pastebins as will be
discussed in detail below.

As stated in the Organic Media chapter, one of the Laws of Geometron is
that everything dies: everything must be easy to delete or destroy. We
delete scrolls by clicking on the red “x” to get to the delete scroll
page. This page is pretty self-explanatory. Delete things!!! Everything
is supposed to replicate, so get in the habit of destroying information
as you go, and replicating the good stuff rather than holding onto a
stale system of information which slowly rots over time as is the case
on private hard drive in the property-based systems.

The first thing to understand when formatting scrolls is how you make a
paragraph break. To do this you want to hit return not once but twice at
the end of each paragraph. It is easy to accidentally only hit return
once and that will run paragraphs together without any break when they
are displayed.

The next most important thing to know is how to make a heading. This is
done with the number symbol “\#”. The more number symbols, the *smaller*
the heading. Thus one number symbol is the largest size, and when you
want a sub-heading you use a double number sign and so on. Headers will
be centered when displayed.

To emphasize a bit of text, put it between asterisks. To make a bullet
list of items, put a dash before each item, with a space after the dash.
To make a list with numbers, do the same thing as with the dashes but
with numbers followed by a period. Again, put a space after the period
to tell the system this is a list. Be sure to put something after each
number or bullet in the list, or the last one will end up looking weird.

Dealing with images is a little bit different than what you might be
used to on other non web-based systems. As with the rest of the Web,
images are put into documents as links to a location where that images
is stored. That location can be locally on the Geometron server you are
working on but ideally it will be on a globally visible web address. The
simplest way to do this is to find an image of the thing you want an
image of that is already on the free open Web like on Wikipedia using a
search engine, and then right click on that image and copy the image
address to the clipboard of whatever machine you are using, then paste
it as the address of the image. Images are put into Scrolls using the
somewhat confusing Markdown syntax which is an exclamation mark, two
square brackets, and then parentheses containing the link. Yes, it’s
weird, but it’s not hard once you get the hang of it, you can just copy
paste from existing images and drop you new image address in.

We can also upload images to each Raspberry Pi server for documents
which we are just working with locally, and this is useful when you want
a locally specific image which is of no use outside that server like a
photograph of a physically local place near the server. This is done
using the Local Image Feed, which is documented in the Feeds chapter.
The other main work flow we will use in Geometron is taking original
photographs with mobile devices, uploading those photographs to publicly
visible locations, then copying the address of those images and pasting
it into scrolls. One way to do this is with the website Imgur.com, which
allows people to upload images both with an app on a phone and over the
Web on a browser. You do not need an account to do this in a browser,
but will need one to use the mobile apps, but it is free to use. Set the
privacy of the image to “hidden” and then always copy and paste that url
somewhere. Also note that there are several ways to share a url of an
image, and you need the one that links to the raw image, which should
end with some kind of image file format like .jpg or .png. To get this
the most efficient thing is to right click and copy just as with public
images we find in the Web at large(copy image address or copy image link
depending on the system you are on).

The last but perhaps most important part of Markdown syntax we need for
making and editing Geometron Scrolls is links. A link is created with
square brackets containing the text of the link followed immediately by
parenthesis containing the link address. For example we might make a
link to the Geometron home page which is at index.html with
\[home\](index.html). You can link to anyplace on the Web by navigating
a browser to the page you want to link to and copying the address from
the address bar and then pasting it into the parenthesis of your link.
Be sure to always have no space between the brackets which contain the
text and parenthesis which contain the address or the link will break.
Also, links can be images. You can put an image inside the square
brackets and that image will appear as a link to whatever is in the
parentheses like any other link.

Geometron scrolls allow for local links to scrolls and maps in the
Geometron system in addition to the global web links described above.
All scrolls created on any given Geomtron server are stored in the
“scrolls” directory. If you put a link to “scrolls/scrollname” the
Scroll software will detect that as a scroll link and clicking on it
will load that scroll into the scroll reader rather than linking to the
raw scroll file. Maps, which we will discuss in a later chapter, are
linked to in the same way with links that start with “maps/”. If you
want to load a scroll or map stored in a remote location into the scroll
reader you can use the scroll() or map() commands in the link, with the
destination inside the parentheses, which are in turn inside the larger
parentheses of the link. For example, you might put “\[link
text\](scroll(scroll location link))”.

Another important aspect of linking scrolls is the user of the active
user page called user.php. PHP is the universal web language we use for
any kind of active program which engages the files on the Geometron
server. PHP allows users to send information to the program which loads
the web page they see by adding bits of information to the web address
the browser points to. User.php takes two inputs, “map” and “scroll”. To
make a link to a scroll called “trees”, we would construct a link as
follows: “user.php?scroll=scrolls/trees”.

Similar to user.php is copy.php, a universal copy program which can copy
a file from anywhere on the Web(really anywhere) to anywhere on the
Geometron server you are working with. Copy.php takes two inputs, “from”
and “to”. When a PHP script is fed inputs, the second one uses an
ampersand and the first uses a question mark. The order does not matter,
but by convention we start with “from”. So to copy the Scroll “tree” to
“tree2”, we would create a link to
copy.php?from=scrolls/tree&to=scrolls/tree2.

It is worth mentioning that you can always use HTML inside a Scroll and
that will work, if you know HTML you can use this to add interesting
things. Learning HTML is a useful thing to do, and dropping little bits
of HTML into a scroll is a good way to do that when you’re starting out.
Also, you can use the code editor at editor.php to edit the main file
index.html and change the default style of scrolls if you want to. As
with HTML I won’t go into detail on this, but I recommend that people
learn CSS if they are interested in getting more into development and
then it is pretty self-explanatory how to change the settings at the end
of index.html.

Another important part of the work flow is the use of paste bins. You
can copy a scroll into a paste bin at pastebin.com without getting an
account or logging in. Set the paste exposure to “unlisted”. You can
also set the paste to expire after a certain time, which can be useful.
When you paste a scroll into a pastebin, you will want to get the
address of the raw file, by clicking on the link which says “raw”. This
is important! If you link to the first page you see after posting a
pastebin the use of that pastebin in Geometron will cause problems. The
address should actually have the word “raw” in it if it is correct.

The raw pastebin address of any scroll on the Web can be loaded on a
local Raspberry Pi based Geometron server by putting the address into
the text input that appears directly above the list of scroll names and
the edit icon in the scroll list. Remote scrolls can be copied locally
and edited for further sharing of new versions using the program
pastescroll.html, which should be linked somewhere on the home scroll of
your Server. This program lets you enter the pastebin address of a
scroll, which can also be the address of a scroll stored on a globally
hosted Geometron server or another Raspberry Pi elsewhere on the local
wifi network, as well as the name of the new local scroll you want to
copy that global scroll to. When both of these inputs are filled, an
edit link will appear on the screen, and when you click on that the
system will copy the remote scroll to the local file and you will be
editing it. You can immediately edit it, then click on the scroll icon
to see it, then back to the edit screen and so on, all as a local
version of that scroll. Having edited that scroll to make it better, you
can then copy and paste it from the scroll editor whatever Pi server you
are on back to another publicly visible pastebin which you can then send
the address of to another person anywhere in the world. They can then
repeat this whole process on their local system, creating a copy of your
new version which they edit and improve upon and then send the new link
back to you and so on. This workflow enables global collaboration very
quickly between people all over the world, all working on physically
local networks that are not visible to the outside world, in particular
search engines.

Note that public pastebins from Pastebin.com have censorship which can
be somewhat random to predict, and they will prevent you from posting
scrolls that have certain political topics. To avoid censorship filters,
you can encode the document in its ASCII/UNICODE by using the program
textconvert.html. This will let you convert any text file to a list of
base 16 numbers separated by commas which can then be transformed back
manually. You will only occasionally need to do this, and it is somewhat
annoying, but it’s useful to have as a tool. It also lets you deal with
non-English characters which get turned into UNICODE, making it easy to
copy and paste in English-only computer systems while preserving the
information in non-English text documents. This should also be linked
from one of the main scrolls in every system.

Pastebin can also be used to copy to global servers. This is done with
pastebin.html. This is the fastest way to clone a scroll to the home
scroll of a globally hosted server. This will not work the first try,
usually, you’ll need to reload a bunch of times at random for the copy
to actually work, for unknown reasons. In general, using Geometron on
paid hosting platforms is spotty and you just have to try a few times to
make it work. Eventually, when Geometron has its own servers hosting
domains we can fix this, but for now just poke at it and keep trying and
it will work.

It is difficult to overstate the versatility of a text document with
formatting like this. The number of potential uses for a freely shared
system of text documents without property vastly exceeds what I can
think of in a book like this, but I’ll say a few words here about what I
have in mind for it.

The primary use of the scrolls which was the initial motivation for
creating this system is for replicators, as with all elements of
Geoemtron. This whole system is built on the idea that the most
fundamental thing we can do in media is communicate how to copy a thing
built from trash and other found materials in our environment. The basic
workflow here is to photograph every part of the assembly process, link
to all the links of materials we might need to buy(yes, we still have to
buy things for now), describe steps, and link to scrolls and maps of
related things.

When Geometron scales up, this will be a vast network of interlinked
documents which connect people with things. Most people will not make
most things, just as most people do not make most things in today’s
consumer society. But the things we use will always be *linked* to their
means of replication. This means the physical thing contains the
information in some form to *find* someone who can replicate that thing,
and that that person will be able to *find* all the materials and learn
all the skills. Replication means that this universe of linked documents
has to be fractal in the sense that when someone chooses to dive deeply
into a thing they learn not just a set of instructions but are linked to
all the deeper knowledge required to attain expertise in the technical
disciplines required for replication. This means that for example every
electrical device should have links from document to document which lead
an interested party into a whole curriculum of learning about
electronics theory and practice to become competent as an electrical
designer and builder.

Scrolls can also play a role in *finding* the free things we create and
replicate. This is an important part of any economy: making a web
resource that tells a user how to find a thing in a place. This is in
some sense the majority of what the consumer media does with their
constant barrage of advertising: tell a person how to find a thing in a
place. We can do this much more effectively by pointing people to
streams of things which are made on location so we are not just pointing
to free things but to a free *stream* of things.

Also, a scroll is just a document. So it can be any document! You can
write an article about...anything! Write news stories about the street
corner where the Pi server is located. Write editorials about the
current pastry selection at the local coffee shop where another server
is. Write manifestos. Write the Constitution for the new system of local
governance which applies only to people on your local wifi network.
Write guides to the edible plants to be found within walking distance of
your local Geometron server. Write your life story. Write an ad for
whatever it is you do for money to survive our current money-based
system. Create a long list of links to all your favorite obscure web
pages. Create a recipe with details on how to find the ingredients in
your local grocery store.

The use of Scrolls for sharing information locally can be incredibly
powerful. We are building local media complete with news articles,
history, politics and so on that are physically local to an area limited
in size to what you can hear, see, or connect to over wifi. This can be
used to organize workplaces against the central bosses who control the
workplace from thousands of miles away, in everything from an Amazon
warehouse to the drivers in a rider pickup area by an airport. We can
use this platform to bring out a sense of place that has been lost in
our current civilization and to share that place with people in a deep
and complex way. Whole epic histories can be written of a street corner
under a bridge, of how that bridge was built, of who has passed through
there, of the bus routes that serve it, of the origins of trash that
turns up there, of the destination of the storm sewer that drains water
from it. Myths can be written, whole new religions built up, all around
objects found in our immediate environment.

Here we recall the Laws of Geometron: everything is physical, everything
is fractal, everything is recursive. We are building a network of
documents which refer to physically local places where that physicality
matters. We also make this fractal, given how much information can be on
a server(hundreds of thousands of scrolls can easily be on a single Pi
server), so that we can have media that fractally zooms in from a street
corner to a trash can to just the plastic bottles that go through that
can. And it is recursive, in that our documents are constantly referring
back to one another. No document stands alone, they are all always
pointing to other documents, just as is the case on the Open Web, but in
a physically localized way and without any users, just free un-owned
documents.

Physically local media can create value which people are willing to pay
or barter for in the existing system in exactly the same way that
consumer media creates value. A media platform serving a strip mall can
provide interesting and useful content to the workers and customers and
passerby, but because it can stimulate commerce, it will also create
value for the business owners who will then have an incentive to
contribute by barter to support the Operators of the network, who can in
turn provide custom scrolls and links to them promoting whatever those
business owners are doing.

This is also true for the informal economies of local places. The
ability to have a mobile and compact media platform that can represent a
place but not be obvious or permanent allows vast amounts of commerce to
happen in a physical place without being visible to the rest of the
Internet. In some sense this is a kind of “dark web” even though it is
totally free and open and unencrypted. Having no property or usernames
or passwords or cryptography means there are no names of people of any
kind attached to the documents. This creates a total freedom to exchange
goods and services in a physical locality with a physical trust model
based on actually talking face to face with people and directly
exchanging things and media.

To see how this can have a high impact, we examine Craigslist and why
it’s awful now. Craigslist is now all scams and spam for numerous
reasons. Essentially, it got too big. It was unable to really become
fractal, and there is no local control. Because it is centralized, even
though they have separate boards for cities and for areas, those areas
are still huge, and they are just theoretical: anyone in the world can
see them and post, even though they’re far away. Also, an area might
have millions of people in it and cover tens of miles. Furthermore,
central control means it is not tenable to have human operators involved
with document creation, so spammers can spam relentlessly until
everything is ruined. Even though posts are quasi anonymous, they still
all have users, passwords, and control. If bad things are posted, the
vast majority of users are not empowered to delete them, so if a whole
board is ruined by a few spammers, no one can fix it and it stays
ruined. In an open document model, a spam-filled board will get cleared
out instantly and if it keeps getting spammed the whole board can be
permanently destroyed, and all useful documents cloned elsewhere.
Craigslist wars to “deal locally” for safety but again they mean this on
the scale of a vast area with millions of people in it. Our model is
more line-of-sight: you deal with people you can see, in a place where
people you trust can see both of you, out on the Street Network.

Finally we must briefly discuss the workflow for technical documents
which use math typeset in the $\LaTeX$ system and how to use that to
create documents like this book. The actual details of this typesetting
system are not covered here, as that is a very deep subject. There are
numerous print books and online guides to learning it. The very short
version is that you use dollars signs to enable math mode, and lots of
back slashes and twiddle brackets and keywords to create arbitrary math
formatting. And it all works in all web browsers! This is thanks to the
magic of the MathJax JavaScript library mentioned above.

Math scrolls can be viewed along with math maps using mathuser.php,
which is used the same way as user.php listed above. Editing is still
the same basic method. Tex files in the home directory of your server
can be edited using texeditor.html, on which this book was mostly
written.

[Next chapter: Feeds](scrolls/feeds.md)
