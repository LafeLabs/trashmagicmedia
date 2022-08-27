
## [HOME](scrolls/home)

# Cybermagic


 We use the term "magic" here to mean sets of things which include the *desire* to replicate the set.  Cybermagic refers to sets of computer files which include scripts to replicate the whole set as well as both documents on *how* to replicate the set and also on *why* we want to replicate it.  The files and hardware themselves never warrant the term "magic".  We apply that term only to refer to the property which makes people actually have the desire to choose to replicate the set.  It is this human intention which animates technology, and that is what we call "magic".

Every single piece of information we store on any computer ever in our system must be part of this.  Whether it's saving files to a server, collecting data from an environmental sensor, programming a robot for industrial automation, putting up a useful web application or calculating physical quantities, *all* these programs are part of our system of self-replication.    This system of self-replicating digital media includes all the programs which control the machines which make all the things in our system.  Our intention is to replace all existing automation and fabrication technology with systems programmed using Geometron, and for all the documents which program these machines to be incorporated into these self-replicating sets of files.

We also specify that all programs must be able to replicate from within a web browser.  Once the basic system is installed on any given machine, it is possible to replicate, edit and delete all files on the system from the browser. This includes all the replicator, editor, and deletor files themselves.  

There are five basic languages we use for this, which we loosely connect with the archetypes of the five elements of alchemy.  These are:

***HTML***.  HTML is short for Hyper Text Markup Language.  This is the main content language of the whole Web, which is why it is associated with Water, the most fundamental element of life.  We symbolize this with a blue equilateral triangle pointed down.

***CSS***. CSS stands for Cascaded Style Sheets, and represents the code which sets styles on the web, like colors and fonts and positioning of objects in the browser window.  This is associated with the Air element, symbolized by a yellow downward-pointing equilateral triangle with a horizontal line through the center.

***JavaScript.*** JavaScript(not to be mistaken for Java, an unrelated language) is the language which is used for *doing things* in a web browser.  This is the language all the Geometron apps are written in, such as calculators, art programs, robot programming etc.  We associate the actions of JavaScript with the Fire element, symbolized by a red equilateral triangle with the point up.

***PHP.*** PHP stands for PHP Hypertext Preprocessor, and is the only server-side language we use in the system.  We use the absolute bare minimum server-side code, and no databases at all.  PHP is used to make the little helper programs we need to create, replicate, edit and delete files on the server one at a time.  The PHP is what replicates the entire rest of the system! Because of it's transformative role in the system we associate it with the Aether element, symbolized by a purple circle with a dot in the middle(like the Sun).

***Geometron.*** We refer here narrowly to the geometric programming language. This is the language documented in this book which we will ultimately use to control *all* our machines.  This can be used to program the motion of machines which make things, as well as to program the geometry of displays for human communication, making it a universal language for all technology control.  Because of its extremely physical nature we associate this with the Earth element, symbolized by a brown equilateral triangle pointed down with a cross bar through the middle.

The following are showing the symbols for the five basic languages using the Icon Magic philosophical language documented in this work:

![](imageset/uploadimages/code-elements-symbols.jpg)
![](imageset/uploadimages/code-elements.jpg)

The first thing we do with *all* information in this system is replicate.  All replication starts with a PHP script called replicator.php.  This program contains a the url of a file called dna.txt which exists on whatever server we are copying all the files from.  This file contains a list of all the files in the system to be copied.  Replicator then uses this list to generate the specific urls of every file in the system and copy them all over to the local server.  Part of what is copied in this process is the file dna.txt, and this new copy of the file can then be added to the new copy of replicator.php, which can then be loaded on yet another server, and the whole thing is then replicated along with no reference to the original code.  

All the code is edited with the code editor called editor.php.  This code editor uses the JavaScript library [Ace.js](https://ace.c9.io/) for syntax highlighting and two very small PHP scripts to save and load the files it edits.   All the PHP scripts are stored in a directory called php, with the ending .txt instead of .php.  This allows them to edit copies of themselves, the editor.php file is editing the copy of it stored in php/editor.txt.  Then all these .txt files in php/ are copied into the main web directory and changed from .txt to .php using a script called text2php.php.  When the replicator replicates the system to another server, two copies are then made of each php script, one in the main directory ending with .php and one in the php directory ending with .txt.  

The dna.txt file is in the [JSON(JavaScript Object Notation) format](https://www.json.org/json-en.html), and is generated using the PHP script dnagenerator.php.  Data for various Geometron applications are stored in the JSON format in files ending in .txt(to make them load in a web browser) in the "data" directory.  Thus for example dna.txt is in [data/dna.txt](data/dna.txt).   Various applications in Geometron can have various other directories and types of information, as long as any new directories are created in the code in replicator.php using "mkdir" and the appropriate JSON entries are added using dnagenerator.php. 

Editor.php can be used to edit any file on the server, including itself. Take a look at the code for that.  To create a new file you can point the browser to editor.php?newfile=[name of new file] and you'll be able to scroll down and click on the new file to edit it.  You can then click the link for dnagenerator.php and the new file you created will be added to the dna.txt for replication to the next server. 

More specific editors are used to edit the scrolls like this document and the various other elements of our system.  All of them are based on this same very simple system of small(just a few lines of code) PHP scripts which save, load, copy and delete files.  

The most basic cyber magic system possible has PHP scripts to save, load, delete, replicate, and edit, and just replicates that system.  In order for any system to replicate it has to include the human readable media which tells you how to replicate.  This is what scrolls are for.  The most basic self-replicating set beyond the basic PHP code set is a scroll set.  



 - what is magic.
 - set magic.
 - five elements of code
 - all the other languages: python, arduino, javascript, latex, markdown, JSON, HTML, CSS, PHP
 - editor.php
 - replicator.php
 - latex work flow, pandoc, pdf, etc
 - structure of PHP scripts
 - set replicator
 - scroll set replicator
 - file set replicator
 - code set replicator
 - delete file
 - recursive delete
 - nuke it all from orbit and start again
 - github work flow
 - building new apps and replicating them, editing the replicator
 - getting the system working on other platforms
 - cybermagic apps
 - web calculators

## Replication on Github

Part of the replication of the Pibrary system involves replicating and forking the code.  To fork all the code in a Cybermagic code set, start a new Github Repository with a CC0 PUBLIC DOMAIN license, and clone it to your computer.  Get PHP working from the command line on that computer.  It is already installed on a Mac.  On PC install Ubuntu under Windows and then install PHP.  Create a new file in the new directory called replicator.php and copy the code in [php/replicator.txt](php/replicator.txt) into it.  Then run from the command line:

```
php replicator.php
```

Now all the code is copied and you can push the whole thing to your github repository, which you can call pibrary if you want, or immediately fork to something new. 

To run the local PHP server, you can type from the command line

```
sudo php -S localhost:80
```
Then point any web browser to [http://localhost/](http://localhost/).  Now you can edit all the code using [editor.php](editor.php) and read about how to work with the code system in [the cybermagic scroll](scrolls/cybermagic).

To make things easier edit the file in `~/.bashrc` to include the line:

```
alias s = 'sudo php -S localhost:80'
```
as well as the line to change into the directory you're working in automatically with `cd`.



