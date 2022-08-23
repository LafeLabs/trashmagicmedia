[home](index.html)

[Book of Geometron](scrolls/bookofgeometron.md)

# Chapter 6: Feeds

A Feed is an ordered list of pieces of information. This structure of
information, in which a set of media elements like images or small bits
of text are related to each other by order, which a person can scroll
through, is the basis of most social media today. What we are doing is
so radically different from anything you have ever encountered, however,
that it is worth taking some time here to explore how exactly these
feeds work in consumer media and how differently they work when we move
to Geometron.

In a consumer-driven social media system, everyone involved is either a
user, a worker for the company who owns the platform, or an advertiser.
In order to interact with the system, a user is required to have a
unique identifier based on their user name and password. Every single
thing they do, from how fast they scroll to what they click on to every
post they make is tracked and analyzed by the employees of the company.
Advertisers then pay the company for the ability to spy on and
manipulate those users into consuming more, and it is the job of the
company employees to do that as efficiently as possible.

The flow of information in these consumer systems completely structured
around these separate user accounts everyone on the consumer side is
forced to use. Even in supposedly anonymous forums, posts are tied to IP
addresses and can’t be edited or deleted by other “users”. That is to
say, in the consumer driven systems, even without names the basic
paradigm of the individual user is dominant.

Each user creates a stream of information which is “owned” by them,
which is “their” feed. When each user is on the system, however, they
see another feed, also called “their” feed, which is the sequence of
information the company chooses to show them. This is a mixture of
elements from other users’ feeds and all the media being forced on them
against their will by the advertisers who are paying for the network. In
order for all this to work, the company has to give them just enough
elements in their feed that they keep staring at the screen, while
feeding them as many corporate manipulation messages as they can get
away with to maximize shareholder value and profits. This has to violate
the users’ consent or it doesn’t work–the whole system has to involve a
central power who can control what everyone sees or people would simply
turn off the feeds of the predatory manipulators and the system would
collapse from lack of financial support. Also, the existence of “users”
is needed in the current system again to maximize profits, because that
is what allows the manipulators to target based on detailed profiles of
who clicks on what and more importantly who will consume what.

Users are encouraged to have things “go viral” but always within a
controlled environment where the company can shut it down and censor it
and where each copy is linked to a user so that again the users’
behavior can be carefully tracked in order better to manipulate it
later.

Geometron has feeds as well. We have feeds of images, feeds of text,
feeds of symbols, feeds of icons to be printed by robots, feeds of
hyperlinks, and various feeds that are complex combinations of these.
Our system of creating feeds is so simple that anyone with a very basic
command of web development in HTML and JavaScript can create their own
feed applications within an hour or two with copying and pasting of
existing apps. In this chapter we will examine how our feeds work and
how they differ from consumer feeds and then talk about the existing
feeds we use in this system, largely to connect together other parts of
the system. These feeds are potentially very powerful, however, but it
remains to be seen exactly how they get used. Try stuff!

In Geometron, we do things so differently that it can take some thought
to to see just *how* different this network is. We now recall some of
the relevant Laws of Geometron and discuss how they impact what we do on
this system.

**No property.** Again, while this sounds radical, it is in fact much
more radical than it sounds. There are no users on this system. No
employees, no company. No “core developer team”. No “marketing
customers”. There is no user data because there are no users. There are
no passwords, there are no logins. The servers themselves are
non-property objects which exist to be shared freely from place to
place. In our system, feeds are just documents. They are always in a
pure text format which can be interpreted by the browser and turned into
something readable.

**Everything is replicates.** A feed can always be copied and pasted in
pure text(using the JSON format). It can be stored in a public pastebin
just like scrolls, or stored in a text message or email or embedded in a
scroll. A feed can be copied instantly from one server to another,
spreading the whole feed as an object, without any regard for where each
element of the feed came from. Everything we create is designed to
replicate.

**Everything dies.** Every element of every feed can be deleted
instantly by anyone interacting with that feed at any time. This is how
we create a system where replication only happens with the consent of
the people.

**Everything evolves.** Every feed can be edited by anyone at any time.
There are no “permanent” files. To share, read, or copy is to be able to
edit.

**Everything is physical.** The structure described here might sound
unimaginably chaotic compared to existing systems where all information
is controlled by a central authority and by private user accounts under
some type of algorithm. But that is because we are used to global
networks, where distance and geography don’t matter. Our system is
physical, centered on the community in direct proximity to the physical
server. This means we are only trying to organize information in a way
which is useful to the community physically surrounding this server.
This makes the information sorting and organizing vastly simpler than on
a global network. This limitation in the who and where parts of our
system is important partly because it is what makes our model work in
which everyone can edit anything at any time. This only works if people
don’t edit the same exact piece of information at the same exact time.
Because we are all effectively in the same physical room, but are
assumed to be wandering in and out, this is a dynamic which can be built
up socially in an organic way.

**Everything is fractal.** Again, this is how we can make sense of the
potentially overwhelming complexity of a feed without users. As soon as
a feed becomes too complicated, we just fork it into multiple feeds
based on sub-topics. Part of the chaos we are managing here is the
potential collision of edits referenced above. Again, this can be
resolved with a fork. The program fork.html will create any number of
sub-pages below the top level, where as we add more fractal divisions we
can avoid edit collisions.

**No money.** We do not have “customers” who can simply buy their way
into forcing people to see their information. While network Operators
might take donations for teaching people the system, because everything
people don’t like is deleted, there is no way to enforce the contract
structure used in consumer society to pay for advertisements. Money
plays a role in our system initially as we all need to survive somehow,
but is not the backbone of the system like on a consumer system. Also,
consumer systems require constant money flowing in in order to keep the
server farms running and all their employees doing work they hate to
manipulate people. Our servers are passed around through a community in
ways of direct use to that community, so no global cash flow is required
to keep them running in the long run.

While I am trying to keep this discussion non-technical, it is necessary
to say something about the format used for Feeds in Geometron. Geometron
feeds come in two varieties: a directory with files in it, and a JSON
file. JSON is a format which stands for JavaScript Object Notation, and
which is a very simple and universally recognized text-based format to
organize information. Any of the hundreds of programming languages in
common use today will have already built in routines to handle JSON, and
any programmer on any system should already be familiar with it. Like
Markdown for the Scrolls, we select JSON because it is easy to copy and
paste, and is as “lightweight” as possible, meaning we need very little
added information in the form of weird looking symbols and so on to
store things.

The most basic type of JSON structure we use is the array, which is just
a collection of things separated by commas, inside square brackets. The
other main thing that exists in JSON is the “object”, which is a
collection of pairs where one element of the pair is a piece of
information and the other is a name for that information. This idea of
creating abstract objects which map names of things to things and
organize them in this way is part of the “object oriented” idea which is
the basis of most modern computer systems. Never be afraid to edit and
read the raw JSON! You don’t have to interact with it but you should not
be afraid of it. If you destroy a JSON file, the file you started with
can just be replicated again and again to avoid the fault.

The first feed we will discuss here is Chaos Feed, which is perhaps the
most basic, and is really just designed to show the concept. Chaos Feed
can be found along with the other feeds from the Feed Scroll which
should be linked from your Home Scroll on whatever Geometron system you
are using. To post, type and hit return. That’s all. To delete, hit one
of the red “X”’s. If you are using a keyboard, the up and down arrows
scroll through the existing elements. To clear and start over, click the
button in the upper right. To reload click the icon in the upper left.
To see and copy the current feed, navigate to data/chaosfeed.txt on any
Geometron system and you will see the JSON for that feed. To copy a feed
from a remote pastebin, use copy.php as with the scrolls described in
the previous chapter. To edit a feed or to edit the application
chaosfeed.html, use the code editor editor.php. From editor.php you can
edit any code on the system, including both the file chaosfeed.html and
data/chaosfeed.txt. While most people will probably not want to edit
this code, it is simple to edit for people who know basic web
development, and so you can ask around and find people who like to do
that to evolve the system. I do not know how people will use this. Try
stuff!

Another feed almost identical to Chaos Feed but with different
applications is urlfeed.html. This is the same interface: you put
something in the input and hit return and it posts. But this is for
links. Each entry turns into a live HTML hyperlink which actually links
to whatever the link points to. To use this, find a link either locally
on your system or globally and just copy and paste it in and hit return.
Edit, delete and share just as in Chaos Feed. This feed unleashes the
power of Hypertext, the central technology of the World Wide Web.
Connect from your humble local feed to the whole world! Connect your
system together. Connect everything.

Yet another feed of almost the same format is the Global Image Feed, or
globalimagefeed.html on your server. In this, you again just paste links
in and they post, but in this case you are pasting image links which
will then appear in the Feed. Again, these can then be deleted. Click on
any image to see the url for that image appear in the text area. This
Feed links up with the alignment system for tracing Icons which will be
dealt with later in this book. But it can be used for anything,
including just sharing random images from around the Web or use as
inputs for any other Geomtron application. We will deal later with a
number of such applications which can call on this feed and use it to
load useful images to do things with. Once again, delete anything at any
time you want by clicking a red “X”.

I said above that there are two types of Feed, and we now turn our
attention to the second one: files in a directory. We use this for
images uploaded to a server as well as symbols created on a server.
Images can be uploaded to a Raspberry Pi Geometron Server using
localimagefeed.html. This is also used as part of the workflow in
several other part of the Geometron system. Note that there is a maximum
size on images, so it can be useful to screen shot images on a mobile
device, then crop the screen shot to get something closer to 1 megabyte
or smaller before uploading. The maximum is about 2 megabytes. This is
to keep us from having exploding sizes of data based on very high
density images. This is a key feature of our physically local social
media system! We can use this to photograph objects and places in direct
proximity to the server and upload them and use them in order to build
media which directly represents our physical environment. To upload,
click “choose file” first, and select a file to upload from your device,
then when that file is selected use “upload image” to upload the image.
To delete, use the red “X”. All you are seeing here is a list of the
files in the directory uploadimages/, which you can manually examine and
interact with as well. This can be an easy way to transmit images and
memes in a peer to peer way, as a meme or image can be uploaded from a
mobile device to a local server, which another user can then download to
their mobile device, allowing for rapid peer to peer transmission
locally over the wifi network. As with the other Feeds here, this is
deceptively simple, and can by itself form the basis of a whole new type
of local social media networking.

The real heart of the Geometron system is the geometric programming
language presented later in this book. Among other things this creates
image files which are symbols in either the vector graphics format .svg
or the bitmap format .png. These are all stored in the directory
symbolfeed/. They are viewed and deleted using the feed program
symbolfeed.html. This whole system will be explained in detail later in
this book, but for now it is just important to know it is there: this is
geometric social media, in which you create geometry and share it
freely. Again this is deceptively simple, and can form the basis of a
very wide range of technological activities which will be described
later(along with the Icon Feed, stored at iconfeed.html).

The Feeds described here are programs which run on a Geoemtron system.
We must also consider Feeds in a more abstract sense which we will use
to build up our whole system. Ultimately the whole system will be based
on the Trash Feed, the vast global feed from mine to landfill which we
will redirect toward our new civilization. This feed is made up of many
small local feeds, which have a fractal structure. For example, a trash
bin near a kiosk in a park selling bottled water will be a constant
source of plastic bottles. This type of feed is part of our system in a
general sense even though it is not software. But it is not totally
separated from our software either. Our system includes robotics which
can print icons into plastic bottle caps with a heated tool, and those
icons are shared on the Icon Feed, so there is a crossover between the
physical feeds of trash-sourced objects and this less tangible software
system.

[Next chapter: Maps](scrolls/maps.md)
