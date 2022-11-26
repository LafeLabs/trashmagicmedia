<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <!--

        EVERYTHING IS PHYSICAL 
        EVERYTHING IS FRACTAL
        EVERYTHING IS RECURSIVE
        NO MONEY 
        MO MINING 
        NO PROPERTY
        LOOK AT THE INSECTS
        LOOK AT THE FUNGI
        LANGUAGE IS HOW THE MIND PARSES REALITY

    -->
    <link href="data:image/x-icon;base64,AAABAAEAEBAQAAEABAAoAQAAFgAAACgAAAAQAAAAIAAAAAEABAAAAAAAgAAAAAAAAAAAAAAAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD+fwAA/T8AAP0/AAD9PwAA+x8AAPMPAACDcQAAAH4AAH6AAACMwQAA8M8AAPjfAAD8vwAA/L8AAPy/AAD+fwAA" rel="icon" type="image/x-icon" />
    <!--Stop Google:-->
    <META NAME="robots" CONTENT="noindex,nofollow">
    <script src="jscode/mapfactory.js"></script>

<!--
    <script src="jscode/font.js"></script>
    <script src="jscode/keyboard.js"></script>
    <script src="jscode/hypercube.js"></script>
    <script src="jscode/mapfactory.js"></script>
-->

    <script src = "https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.js"></script>

<!--un-comment to add math: -->
<!--
        <script src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.0/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script>
        <script>
            MathJax.Hub.Config({
                tex2jax: {
                inlineMath: [['$','$'], ['\\(','\\)']],
                processEscapes: true,
                processClass: "mathjax",
                ignoreClass: "no-mathjax"
                }
            });//			MathJax.Hub.Typeset();//tell Mathjax to update the math
        </script>
-->        
</head>
<body>    
    <div id = "mainmap"></div>
    <div id = "hammerxy">
        <!--this covers the map exactly, sits at higher z index, and is turned off when NOT editing xy-->
    </div>
<div id = "margin">
    <div id = "inputbox">
        <img id = "savebutton" src = "iconsymbols/save.svg" class = "button" />
        <img id = "prevbutton" src = "iconsymbols/upelement.svg" class = "button" />
        <img id = "nextbutton" src = "iconsymbols/downelement.svg" class = "button" />
        <img id = "movedownbutton" src = "iconsymbols/elementdown.svg" class = "button" />
        <img id = "moveupbutton" src = "iconsymbols/elementup.svg" class = "button" />    

        <img id = "deletebutton" src = "iconsymbols/delete.svg" class = "button" />
        <img id = "newbutton" src = "iconsymbols/add.svg" class = "button" />
        <img id = "deleteimagebutton" src = "iconsymbols/deleteimage.svg" class = "button" />
        <img id = "deletelinkbutton" src = "iconsymbols/deletelink.svg" class = "button" />

        <img id = "textbutton" src = "iconsymbols/text.svg" class = "button" />
        <img id = "imagebutton" src = "iconsymbols/image.svg" class = "button" />                
        <img id = "linkbutton" src = "iconsymbols/link.svg" class = "button" />              
        <table id = "inputtable">
            <tr>
                <td>text:</td><td><input id = "textinput"/></td>
            </tr>
            <tr>
                <td>link:</td><td><input id = "linkinput"/></td>
            </tr>
            <tr>
                <td>image url:</td><td><input id = "imginput"/></td>
            </tr>
            <tr>
                <td>maplinkmode</td><td id = "maplinkmodebutton" class= "button"></td>
            </tr>
        </table>
        <table id = "iotable">
            <tr>
                <td id = "importbutton" class = "button">IMPORT</td>
                <td id = "resetbutton" class = "button">RESET</td>
            </tr>
        </table>
        <textarea id = "textio"></textarea>
    </div>
    <div id = "mapscroll">
        <a href= "mapdelete.html">
            <img src = "iconsymbols/delete.svg"/>
        </a>
        <a id = "mapuserlink" href= "user.php?map=maps/home">
            <img src = "iconsymbols/home.svg"/>
        </a>
        <a href= "mapset.html">
            <img src = "iconsymbols/chaos.svg"/>
        </a>

        <table>
            <tr>
                <td>new map:</td>
                <td>
                    <input id = "newmapinput"/>
                </td>
            </tr>
            
        </table>
        <h3 id = "currentfilename">data/currentMap.txt</h3>
        <ul id = "maplist">
            
        </ul>
    </div>
    <div id = "feedscroll">
        <input id = "imageinput"/>
        <form id = "uploadform" style = "margin-top:10px" action="upload.php" method="post" enctype="multipart/form-data">
                Select image to upload:
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Upload Image" name="submit">
        </form>
        <p>
            <a href ="imagefeed.html">imagefeed.html</a>
        </p>
        <div id = "srcscroll">
            <!--image feed goes here-->
        </div>
    </div>
    <div id = "textscroll" class = "no-mathjax">       
      <input id = "textfeedinput"/>
      <div id = "subtextscroll">
          
      </div>
    </div>
    <div id = "linkscroll">        
        <h3 id = "linkbox"></h3>
        <input id = "hrefinput"/>
        <div id = "hrefscroll"></div>
    </div>
    <div id = "rotatezoombox">
        <table id = "rotatezoomtable">
            <tr id = "rotatezoombuttons1">
                <td id = "hmodebutton" class=  "button" style = "text-align:center;border:solid;">height mode</td>
                <td>
                    <img id = "zoomoutbutton" src= "iconsymbols/shrink.svg" class = "button" /> 
                </td>
                <td>
                    <img id = "littlezoomoutbutton" src= "iconsymbols/shrinksmall.svg" class = "button"/> 
                </td>
                <td>
                    <img id = "littlezoominbutton" src= "iconsymbols/expandsmall.svg" class = "button" /> 
                </td>
                <td>
                    <img id = "zoominbutton" src= "iconsymbols/expand.svg" class = "button"/> 
                </td>
            </tr>
            <tr id = "rotatezoombuttons2">
                <td></td>
                <td>
                    <img id = "rotateleftbutton" src= "iconsymbols/left.svg" class = "button" /> 
                </td>
                <td>
                    <img id = "littlerotateleftbutton" src= "iconsymbols/leftsmall.svg" class = "button"/> 
                </td>
                <td>
                    <img id = "littlerotaterightbutton" src= "iconsymbols/rightsmall.svg" class = "button"/> 
                </td>
                <td>
                    <img id = "rotaterightbutton" src= "iconsymbols/right.svg" class = "button" /> 
                </td>
            </tr>
        </table>
        <img src = "iconsymbols/scale.svg" id = "scalebar"/>
        <img src = "iconsymbols/rotate.svg" id = "rotatebar"/>
    </div>
</div>
<div id = "mapdiv" class= "datadiv"><?php

if(isset($_GET["map"])){
    echo $_GET["map"];
}

?></div>
<script>
document.getElementById("maplinkmodebutton").onclick = function(){
    var oldstate = false;
    if(this.innerHTML == "true"){
        oldstate = true;
    }
    else{
        oldstate = false;
    }
    var newstate = !oldstate;
    if(newstate == true){
        mainmap.array[mainmap.linkindex].maplinkmode = true;
        this.innerHTML = "true";
    }
    else{
        mainmap.array[mainmap.linkindex].maplinkmode = false;
        this.innerHTML = "false";
    }
    
}



remotefile = "";
if(document.getElementById("mapdiv").innerHTML.length > 0){
    mapdiv = document.getElementById("mapdiv").innerHTML;
    if(mapdiv.substring(0,5) == "maps/"){
        currentFile = document.getElementById("mapdiv").innerHTML;
    }
    else{
        remotefile = document.getElementById("mapdiv").innerHTML;
        currentFile = "maps/remote";
    }
}
else{
    currentFile = "maps/home";
}

document.getElementById("currentfilename").innerHTML = currentFile;
document.getElementById("mapuserlink").href = "user.php?map=" + currentFile;
    
landscape = false;
if(innerWidth > innerHeight){

    squareWidth = innerHeight;
    marginWidth = innerWidth - squareWidth;
    landscape = true;
    document.getElementById("margin").style.width = marginWidth.toString() + "px";
    document.getElementById("margin").style.height = innerHeight.toString() + "px";    
    
    document.getElementById("scalebar").style.height = (innerHeight*0.064).toString() + "px";
    document.getElementById("scalebar").style.bottom = (innerHeight*0.07).toString() + "px";
    document.getElementById("rotatebar").style.height = (innerHeight*0.064).toString() + "px";

}
else{
    
    squareWidth = innerWidth;
    marginWidth = innerHeight - squareWidth;
    document.getElementById("margin").style.width = innerWidth.toString() + "px";
    document.getElementById("margin").style.height = marginWidth.toString() + "px";    
    
    document.getElementById("inputtable").style.display = "none";
    
    document.getElementById("rotatezoombox").style.height = (marginWidth/4).toString() + "px";

    document.getElementById("scalebar").style.height = (marginWidth/8).toString() + "px";       
    document.getElementById("scalebar").style.top = "0px";
    document.getElementById("rotatebar").style.bottom = "0px";
    document.getElementById("rotatebar").style.height = (marginWidth/8).toString() + "px";    
    
    document.getElementById("inputbox").style.right = "0px";
    document.getElementById("inputbox").style.position = "absolute";
    
    document.getElementById("rotatezoombuttons1").style.display = "none";
    document.getElementById("rotatezoombuttons2").style.display = "none";    
    document.getElementById("rotatezoomtable").style.display = "none";    
}

document.getElementById("hammerxy").style.width = (squareWidth).toString() + "px";
document.getElementById("hammerxy").style.height = (squareWidth).toString() + "px";

mainmap = new Map(squareWidth,squareWidth,document.getElementById("mainmap"));

//mainmap.math = true;


var httpc2 = new XMLHttpRequest();
    httpc2.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {

        mainmap.array = JSON.parse(this.responseText);
        mainmap.draw();
        mainmap.linkArray[mainmap.linkindex].style.border = "solid";
        mainmap.linkArray[mainmap.linkindex].style.borderWidth = "0.1px";

        document.getElementById("linkbox").innerHTML = mainmap.linkArray[mainmap.linkindex].href;
        //un comment for math
        //MathJax.Hub.Typeset();
        document.getElementById("textio").value = JSON.stringify(mainmap.array,null,"    ");
    
    document.getElementById("textinput").value = mainmap.array[mainmap.linkindex].text;
    document.getElementById("linkinput").value = mainmap.array[mainmap.linkindex].href;
    document.getElementById("imginput").value = mainmap.array[mainmap.linkindex].src;

    if(typeof mainmap.array[mainmap.linkindex].maplinkmode == "undefined"){
        mainmap.array[mainmap.linkindex].maplinkmode = false;
    }
    document.getElementById("maplinkmodebutton").innerHTML = mainmap.array[mainmap.linkindex].maplinkmode.toString();       
    
        
    }
};

if(remotefile.length > 0){
    httpc2.open("GET", "fileloader.php?filename=" + remotefile, true);
}
else{
    httpc2.open("GET", "fileloader.php?filename=" + currentFile, true);
    
}

httpc2.send();


linkindex  = 0;
mainmap.linkindex = 0;
pageindex = 0;

document.getElementById("savebutton").onclick = function() {
    
    mainmap.array[mainmap.linkindex].x = parseInt(mainmap.linkArray[mainmap.linkindex].style.left.substring(0,mainmap.linkArray[mainmap.linkindex].style.left.length-2))/mainmap.w;
    mainmap.array[mainmap.linkindex].y = parseInt(mainmap.linkArray[mainmap.linkindex].style.top.substring(0,mainmap.linkArray[mainmap.linkindex].style.top.length-2))/mainmap.w;
    mainmap.array[mainmap.linkindex].w = parseInt(mainmap.linkArray[mainmap.linkindex].style.width.substring(0,mainmap.linkArray[mainmap.linkindex].style.width.length-2))/mainmap.w;
    mainmap.array[mainmap.linkindex].h = parseInt(mainmap.linkArray[mainmap.linkindex].style.height.substring(0,mainmap.linkArray[mainmap.linkindex].style.height.length-2))/mainmap.w;
    mainmap.array[mainmap.linkindex].angle = parseInt(mainmap.linkArray[mainmap.linkindex].style.transform.substring(7,mainmap.linkArray[mainmap.linkindex].style.transform.length - 4));

    var url = "filesaver.php";        
    var httpc2 = new XMLHttpRequest();
    httpc2.open("POST", url, true);
    httpc2.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    httpc2.send("data="+encodeURIComponent(JSON.stringify(mainmap.array,null,"    "))+"&filename=" + currentFile);//send text to filesaver.php
    document.getElementById("textio").value = JSON.stringify(mainmap.array,null,"    ");
    mainmap.draw();

        
}



document.getElementById("importbutton").onclick  = function(){
    mainmap.array = JSON.parse(document.getElementById("textio").value);
    mainmap.draw();
}


document.getElementById("resetbutton").onclick  = function(){
    mainmap.array = [
    {
        "x": 0.5,
        "y": 0.0,
        "w": 0.35,
        "h": 0.35,
        "angle": 0,
        "text": "Map",
        "href": "",
        "src": "",
        "maplinkmode":false
    }
    ];
    mainmap.draw();
}

document.getElementById("nextbutton").onclick = function() {

    mainmap.nextlink();
    document.getElementById("linkbox").innerHTML = mainmap.linkArray[mainmap.linkindex].href;
    document.getElementById("textinput").value = mainmap.array[mainmap.linkindex].text;
    document.getElementById("linkinput").value = mainmap.array[mainmap.linkindex].href;
    document.getElementById("imginput").value = mainmap.array[mainmap.linkindex].src;

    if(typeof mainmap.array[mainmap.linkindex].maplinkmode == "undefined"){
        mainmap.array[mainmap.linkindex].maplinkmode = false;
    }
    document.getElementById("maplinkmodebutton").innerHTML = mainmap.array[mainmap.linkindex].maplinkmode.toString();        
    
}

document.getElementById("prevbutton").onclick = function() {

    mainmap.prevlink();
    document.getElementById("linkbox").innerHTML = mainmap.linkArray[mainmap.linkindex].href;
        document.getElementById("textinput").value = mainmap.array[mainmap.linkindex].text;
    document.getElementById("linkinput").value = mainmap.array[mainmap.linkindex].href;
    document.getElementById("imginput").value = mainmap.array[mainmap.linkindex].src;
    if(typeof mainmap.array[mainmap.linkindex].maplinkmode == "undefined"){
        mainmap.array[mainmap.linkindex].maplinkmode = false;
    }
    document.getElementById("maplinkmodebutton").innerHTML = mainmap.array[mainmap.linkindex].maplinkmode.toString();       

}

document.getElementById("newbutton").onclick = function() {

    mainmap.newlink();
    document.getElementById("textinput").value = mainmap.array[mainmap.linkindex].text;
    document.getElementById("linkinput").value = mainmap.array[mainmap.linkindex].href;
    document.getElementById("imginput").value = mainmap.array[mainmap.linkindex].src;
    if(typeof mainmap.array[mainmap.linkindex].maplinkmode == "undefined"){
        mainmap.array[mainmap.linkindex].maplinkmode = false;
    }
    document.getElementById("maplinkmodebutton").innerHTML = mainmap.array[mainmap.linkindex].maplinkmode.toString();       

}


document.getElementById("deletebutton").onclick = function() {

    mainmap.deletelink();
    document.getElementById("linkbox").innerHTML = mainmap.linkArray[mainmap.linkindex].href;
        document.getElementById("textinput").value = mainmap.array[mainmap.linkindex].text;
    document.getElementById("linkinput").value = mainmap.array[mainmap.linkindex].href;
    document.getElementById("imginput").value = mainmap.array[mainmap.linkindex].src;
    if(typeof mainmap.array[mainmap.linkindex].maplinkmode == "undefined"){
        mainmap.array[mainmap.linkindex].maplinkmode = false;
    }
    document.getElementById("maplinkmodebutton").innerHTML = mainmap.array[mainmap.linkindex].maplinkmode.toString();       
    
}

document.getElementById("moveupbutton").onclick  = function() {

    mainmap.movelinkup();

}
document.getElementById("movedownbutton").onclick  = function() {

    mainmap.movelinkdown();

}


mc = new Hammer(document.getElementById("hammerxy"));
mc.get('pan').set({ direction: Hammer.DIRECTION_ALL });
mc.on("panleft panright panup pandown tap press rotate", function(ev) {

    mainmap.linkArray[mainmap.linkindex].style.left = (ev.deltaX + mainmap.array[mainmap.linkindex].x*mainmap.w).toString() +  "px";
    mainmap.linkArray[mainmap.linkindex].style.top = (ev.deltaY + mainmap.array[mainmap.linkindex].y*mainmap.w).toString() +  "px";

});    



mczoom = new Hammer(document.getElementById("scalebar"));
mczoom.get('pan').set({ direction: Hammer.DIRECTION_ALL });
mczoom.on("panleft panright panup pandown tap press", function(ev) {


    if(hmode){
        mainmap.linkArray[mainmap.linkindex].style.height = (Math.abs(mainmap.array[mainmap.linkindex].h*mainmap.w + 2*ev.deltaX)).toString() +  "px";
    }
    else{
        mainmap.linkArray[mainmap.linkindex].style.width = (Math.abs(mainmap.array[mainmap.linkindex].w*mainmap.w + 2*ev.deltaX)).toString() +  "px";
        mainmap.linkArray[mainmap.linkindex].style.height = (Math.abs(mainmap.array[mainmap.linkindex].h*mainmap.w + 2*ev.deltaX)).toString() +  "px";
        mainmap.linkArray[mainmap.linkindex].style.fontSize = (0.1*Math.abs(mainmap.array[mainmap.linkindex].w*mainmap.w + 2*ev.deltaX)).toString() + "px";
    }

});    


hmode = false;//height mode instead of width mode for zoom

document.getElementById("zoomoutbutton").onclick = function() {
    mainmap.array[mainmap.linkindex].w /= 1.25;
    if(hmode){
        mainmap.linkArray[mainmap.linkindex].style.height = (Math.abs(mainmap.array[mainmap.linkindex].h*mainmap.w)).toString() +  "px";
    }
    else{
        mainmap.linkArray[mainmap.linkindex].style.width = (Math.abs(mainmap.array[mainmap.linkindex].w*mainmap.w)).toString() +  "px";
        mainmap.linkArray[mainmap.linkindex].style.fontSize = (0.1*Math.abs(mainmap.array[mainmap.linkindex].w*mainmap.w)).toString() + "px";   
    }
}
document.getElementById("zoominbutton").onclick = function() {
    mainmap.array[mainmap.linkindex].w *= 1.25;
    if(hmode){
        mainmap.linkArray[mainmap.linkindex].style.height = (Math.abs(mainmap.array[mainmap.linkindex].h*mainmap.w)).toString() +  "px";
    }
    else{
        mainmap.linkArray[mainmap.linkindex].style.width = (Math.abs(mainmap.array[mainmap.linkindex].w*mainmap.w)).toString() +  "px";
        mainmap.linkArray[mainmap.linkindex].style.fontSize = (0.1*Math.abs(mainmap.array[mainmap.linkindex].w*mainmap.w)).toString() + "px";   
    }
}

document.getElementById("littlezoomoutbutton").onclick = function() {
    mainmap.array[mainmap.linkindex].w /= 1.01;
    
    if(hmode){
        mainmap.linkArray[mainmap.linkindex].style.height = (Math.abs(mainmap.array[mainmap.linkindex].h*mainmap.w)).toString() +  "px";
    }
    else{
        mainmap.linkArray[mainmap.linkindex].style.width = (Math.abs(mainmap.array[mainmap.linkindex].w*mainmap.w)).toString() +  "px";
        mainmap.linkArray[mainmap.linkindex].style.fontSize = (0.1*Math.abs(mainmap.array[mainmap.linkindex].w*mainmap.w)).toString() + "px";   
    }    
    
}
document.getElementById("littlezoominbutton").onclick = function() {
    mainmap.array[mainmap.linkindex].w *= 1.01;
    if(hmode){
        mainmap.linkArray[mainmap.linkindex].style.height = (Math.abs(mainmap.array[mainmap.linkindex].h*mainmap.w)).toString() +  "px";
    }
    else{
        mainmap.linkArray[mainmap.linkindex].style.width = (Math.abs(mainmap.array[mainmap.linkindex].w*mainmap.w)).toString() +  "px";
        mainmap.linkArray[mainmap.linkindex].style.fontSize = (0.1*Math.abs(mainmap.array[mainmap.linkindex].w*mainmap.w)).toString() + "px";   
    }

}

document.getElementById("rotateleftbutton").onclick = function() {
    mainmap.array[mainmap.linkindex].angle -= 5;
    mainmap.linkArray[mainmap.linkindex].style.transform = "rotate(" + (mainmap.array[mainmap.linkindex].angle).toString() + "deg)";

}
document.getElementById("rotaterightbutton").onclick = function() {
    mainmap.array[mainmap.linkindex].angle += 5;
    mainmap.linkArray[mainmap.linkindex].style.transform = "rotate(" + (mainmap.array[mainmap.linkindex].angle).toString() + "deg)";
}
document.getElementById("littlerotateleftbutton").onclick = function() {
    mainmap.array[mainmap.linkindex].angle -= 0.5;
    mainmap.linkArray[mainmap.linkindex].style.transform = "rotate(" + (mainmap.array[mainmap.linkindex].angle).toString() + "deg)";
}
document.getElementById("littlerotaterightbutton").onclick = function() {
    mainmap.array[mainmap.linkindex].angle += 0.5;
    mainmap.linkArray[mainmap.linkindex].style.transform = "rotate(" + (mainmap.array[mainmap.linkindex].angle).toString() + "deg)";
}



mcrotate = new Hammer(document.getElementById("rotatebar"));
mcrotate.get('pan').set({ direction: Hammer.DIRECTION_ALL });
mcrotate.on("panleft panright panup pandown tap press", function(ev) {

    mainmap.linkArray[mainmap.linkindex].style.transform = "rotate(" + (mainmap.array[mainmap.linkindex].angle + ev.deltaX*Math.PI/5).toString() + "deg)";

//mainmap.linkArray[linkindex].style.transform = "rotate(" + (mainmap.array[linkindex].angle + ev.deltaX*Math.PI/5).toString() + "deg)";

});    



uploadImages = [];
var httpc = new XMLHttpRequest();
    httpc.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        uploadImages = JSON.parse(this.responseText);
        for(var index = uploadImages.length - 1;index >= 0;index--) {
            var newuploadbox = document.createElement("DIV");
            newuploadbox.classList.add("uploadbox");
            var newimg = document.createElement("IMG");
            newimg.src = "uploadimages/" + uploadImages[index];
            newimg.classList.add("uploadimage");
            newimg.classList.add("button");
            newuploadbox.appendChild(newimg);
            document.getElementById("feedscroll").appendChild(newuploadbox);
            newimg.onclick = function() {
                var localurl = "uploadimages" + this.src.split("uploadimages")[1];
                mainmap.array[mainmap.linkindex].src = localurl;
                mainmap.draw();
                document.getElementById("imginput").value = mainmap.array[mainmap.linkindex].src;
    
            }
            var newimg = document.createElement("IMG");
            newimg.src = "iconsymbols/delete.svg";
            newuploadbox.appendChild(newimg);
            newimg.classList.add("button");
            newimg.classList.add("deletebutton");
            newimg.onclick = function(){
                var imageurl =this.parentElement.getElementsByClassName("uploadimage")[0].src; 
                var imagename = "uploadimages/" + imageurl.split("uploadimages/")[1];
                var httpc = new XMLHttpRequest();
                var url = "deletefile.php";         
                httpc.open("POST", url, true);
                httpc.setRequestHeader("Content-Type", "application/x-www-form-urlencoded;charset=utf-8");
                httpc.send("filename=" + imagename);//send text to deletefile.php
                this.parentElement.parentElement.removeChild(this.parentElement);
            }
        }
    }
};

httpc.open("GET", "dir.php?filename=uploadimages", true);
httpc.send();

textfeed = {};
var httpc10 = new XMLHttpRequest();
    httpc10.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {

        textfeed = JSON.parse(this.responseText);
        //un comment for math
        //MathJax.Hub.Typeset();
        redrawsrc();
        redrawtext();
        redrawhref();
    }
};
httpc10.open("GET", "fileloader.php?filename=data/textfeed.txt", true);
httpc10.send();


mode = "image";
document.getElementById("textbutton").onclick = function(){
    mode = "text";
    document.getElementById("feedscroll").style.display = "none";
    document.getElementById("linkscroll").style.display = "none";
    document.getElementById("textscroll").style.display = "block";
}
document.getElementById("imagebutton").onclick = function(){
    mode = "image";
    document.getElementById("feedscroll").style.display = "block";
    document.getElementById("linkscroll").style.display = "none";
    document.getElementById("textscroll").style.display = "none";
}
document.getElementById("linkbutton").onclick = function(){
    mode = "link";
    document.getElementById("feedscroll").style.display = "none";
    document.getElementById("linkscroll").style.display = "block";
    document.getElementById("textscroll").style.display = "none";
}

document.getElementById("deleteimagebutton").onclick = function(){
    mainmap.array[mainmap.linkindex].src = "";
    mainmap.draw();
}

document.getElementById("deletelinkbutton").onclick = function(){
    mainmap.array[mainmap.linkindex].href = "";
    mainmap.draw();
    document.getElementById("linkbox").innerHTML = mainmap.linkArray[mainmap.linkindex].href;
}


document.getElementById("textinput").onchange = function(){
    mainmap.array[mainmap.linkindex].text = this.value;
    mainmap.draw();
}

document.getElementById("linkinput").onchange = function(){
    mainmap.array[mainmap.linkindex].href = this.value;
    mainmap.draw();
}
document.getElementById("imginput").onchange = function(){
    mainmap.array[mainmap.linkindex].src = this.value;
    mainmap.draw();
}



maps = [];
var httpc8 = new XMLHttpRequest();
httpc8.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {
    maps = JSON.parse(this.responseText);
    for(var index = 0;index < maps.length;index++) {
        var newmapbutton = document.createElement("LI");
        newmapbutton.innerHTML = "maps/" + maps[index];
        document.getElementById("maplist").appendChild(newmapbutton);
        newmapbutton.onclick = function(){
            currentFile = this.innerHTML;
            document.getElementById("currentfilename").innerHTML = currentFile;
            document.getElementById("mapuserlink").href = "user.php?map=" + currentFile;    
            var httpc = new XMLHttpRequest();
            httpc.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    mainmap.array = JSON.parse(this.responseText);
                    mainmap.draw();
                    document.getElementById("textio").value = JSON.stringify(mainmap.array,null,"    ");
                }
            };
            httpc.open("GET", "fileloader.php?filename=" + currentFile, true);
            httpc.send();
            }
            
        }
    }
};

httpc8.open("GET", "dir.php?filename=maps", true);
httpc8.send();

document.getElementById("newmapinput").value = "";
document.getElementById("newmapinput").onchange = function(){
    var localmapname = this.value;
    currentFile = "maps/" + this.value;
    document.getElementById("mapuserlink").href = "user.php?map=" + currentFile;
    document.getElementById("currentfilename").innerHTML = currentFile;
    
    if(maps.indexOf(localmapname) != -1){
        //this is if the map exists already
        var httpc = new XMLHttpRequest();
        httpc.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                mainmap.array = JSON.parse(this.responseText);
                mainmap.draw();
                document.getElementById("textio").value = JSON.stringify(mainmap.array,null,"    ");
            }
        };
        httpc.open("GET", "fileloader.php?filename=" + currentFile, true);
        httpc.send();
    }
    else{
        //this is if the map does not exist
        mainmap.array = [];
        mainmap.draw();
        document.getElementById("textio").value = JSON.stringify(mainmap.array,null,"    ");
    }
    
    
    var newmapbutton = document.createElement("LI");
    newmapbutton.innerHTML = currentFile;
    document.getElementById("maplist").appendChild(newmapbutton);
    newmapbutton.onclick = function(){
        currentFile = this.innerHTML;
        document.getElementById("currentfilename").innerHTML = currentFile;
        var httpc = new XMLHttpRequest();
        httpc.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                mainmap.array = JSON.parse(this.responseText);
                mainmap.draw();
                document.getElementById("textio").value = JSON.stringify(mainmap.array,null,"    ");
            }
        };
        httpc.open("GET", "fileloader.php?filename=" + currentFile, true);
        httpc.send();
        
    }
}



//var newmapbutton = document.createElement("LI");
//newmapbutton.innerHTML = "data/currentMap.txt";
//document.getElementById("maplist").appendChild(newmapbutton);


document.getElementById("hmodebutton").onclick = function(){
    hmode = !hmode;
    if(hmode){
        this.style.backgroundColor = "green";
    }
    else{
        this.style.backgroundColor = "white";
    }
}

function savefeed(){
    
    var httpc = new XMLHttpRequest();
    httpc.open("POST", "filesaver.php", true);
    httpc.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    httpc.send("data="+encodeURIComponent(JSON.stringify(textfeed,null,"  "))+"&filename=data/textfeed.txt");//send text to filesaver.php   

}


document.getElementById("imageinput").value = "";
document.getElementById("imageinput").onchange = function(){
    textfeed.src.push(this.value);
    redrawsrc();
    savefeed();
}

document.getElementById("hrefinput").value = "";
document.getElementById("hrefinput").onchange = function(){
    textfeed.href.push(this.value);
    redrawhref();
    savefeed();
}
document.getElementById("textfeedinput").value = "";
document.getElementById("textfeedinput").onchange = function(){
    textfeed.text.push(this.value);
    redrawtext();
    savefeed();
}




function redrawtext(){
    
    document.getElementById("subtextscroll").innerHTML = "";
    text = textfeed.text;
    for(var index = text.length - 1;index >=0;index--){
        var newbox = document.createElement("div");
        newbox.className = "box";
        var newspan = document.createElement("span");
        newspan.innerHTML = text[index];
        newspan.onclick = function(){
            //replace current text with this text and update map
            mainmap.array[mainmap.linkindex].text = this.innerHTML;
            mainmap.draw();
            document.getElementById("textinput").value = mainmap.array[mainmap.linkindex].text;

        }
        newbox.appendChild(newspan);
        var newbutton = document.createElement("IMG");
        newbutton.src = "iconsymbols/delete.svg";
        newbutton.className = "button";
        newbutton.id = "text" + index.toString();
        newbutton.onclick = function(){
            //alert(this.id.substring(4));
            var thisindex = this.id.substring(4);
            var localtext = textfeed.text;
            textfeed.text = [];
            for(var textindex = 0;textindex < localtext.length;textindex++){
                if(textindex != thisindex){
                    textfeed.text.push(localtext[textindex]);
                }
            }
            redrawtext();
            savefeed();
        }
        newbox.prepend(newbutton);
        document.getElementById("subtextscroll").appendChild(newbox);
    }
    //un comment for math
    //MathJax.Hub.Typeset();

}

function redrawsrc(){
    document.getElementById("srcscroll").innerHTML = "";
    var src = textfeed.src;
    for(var index = src.length - 1;index >= 0;index--){
        var newbox = document.createElement("div");
        newbox.className = "box";
        
        var newimg = document.createElement("img");
        newimg.onclick = function() {
            mainmap.array[mainmap.linkindex].src = this.src;
            document.getElementById("imginput").value = this.src;
            mainmap.draw();
        }
        newimg.src = src[index];
        
        var newbutton = document.createElement("IMG");
        newbutton.src = "iconsymbols/delete.svg";
        newbutton.className = "button";
        newbutton.id = "src" + index.toString();
        newbutton.onclick = function(){
            //alert(this.id.substring(4));
            var thisindex = this.id.substring(3);
            var localsrc = textfeed.src;
            textfeed.src = [];
            for(var srcindex = 0;srcindex < localsrc.length;srcindex++){
                if(srcindex != thisindex){
                    textfeed.src.push(localsrc[srcindex]);
                }
            }
            redrawsrc();
            savefeed();
        }
        newbox.appendChild(newbutton);
        newbox.appendChild(newimg);
        
        document.getElementById("srcscroll").appendChild(newbox);
    }
    
}
function redrawhref(){
    document.getElementById("hrefscroll").innerHTML = "";
    var href = textfeed.href;
    for(var index = href.length - 1;index >= 0 ;index--){
        var newbox = document.createElement("div");
        newbox.className = "box";
        
        var newa = document.createElement("A");
//        newa.href = href[index];
        newa.innerHTML = href[index];
        newa.onclick = function(){
            mainmap.array[mainmap.linkindex].href = this.innerHTML;
            mainmap.draw();
            document.getElementById("linkbox").innerHTML = this.innerHTML;
            document.getElementById("linkinput").value = mainmap.array[mainmap.linkindex].href;
        }
        newbox.appendChild(newa);
        
        var newbutton = document.createElement("IMG");
        newbutton.src = "iconsymbols/delete.svg";
        newbutton.className = "button";
        newbutton.id = "href" + index.toString();
        newbutton.onclick = function(){
            //alert(this.id.substring(4));
            var thisindex = this.id.substring(4);
            var localhref = textfeed.href;
            textfeed.href = [];
            for(var hrefindex = 0;hrefindex < localhref.length;hrefindex++){
                if(hrefindex != thisindex){
                    textfeed.href.push(localhref[hrefindex]);
                }
            }
            redrawhref();
            savefeed();
        }
        newbox.prepend(newbutton);
        document.getElementById("hrefscroll").appendChild(newbox);
    }
    
}

uploadImages = [];
var httpc = new XMLHttpRequest();
    httpc.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        uploadImages = JSON.parse(this.responseText);
        for(var index = uploadImages.length - 1;index >= 0;index--) {
            var newuploadbox = document.createElement("DIV");
            newuploadbox.classList.add("uploadbox");
            var newimg = document.createElement("IMG");
            newimg.src = "uploadimages/" + uploadImages[index];
            newimg.classList.add("uploadimage");
            newimg.classList.add("button");
            newuploadbox.appendChild(newimg);
            document.getElementById("feedscroll").appendChild(newuploadbox);
            newimg.onclick = function() {
                var localurl = "uploadimages" + this.src.split("uploadimages")[1];
                mainmap.array[mainmap.linkindex].src = localurl;
                mainmap.draw();
                document.getElementById("imginput").value = mainmap.array[mainmap.linkindex].src;
    
            }
            var newimg = document.createElement("IMG");
            newimg.src = "iconsymbols/delete.svg";
            newuploadbox.appendChild(newimg);
            newimg.classList.add("button");
            newimg.classList.add("deletebutton");
            newimg.onclick = function(){
                var imageurl =this.parentElement.getElementsByClassName("uploadimage")[0].src; 
                var imagename = "uploadimages/" + imageurl.split("uploadimages/")[1];
                var httpc = new XMLHttpRequest();
                var url = "deletefile.php";         
                httpc.open("POST", url, true);
                httpc.setRequestHeader("Content-Type", "application/x-www-form-urlencoded;charset=utf-8");
                httpc.send("filename=" + imagename);//send text to deletefile.php
                this.parentElement.parentElement.removeChild(this.parentElement);
            }
        }
    }
};


mapset = {};

var httpc = new XMLHttpRequest();
    httpc.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        mapset = JSON.parse(this.responseText);
        if(mapset.server.charAt(mapset.server.length-1) != "/"){
            mapset.server = mapset.server + "/"; 
        }
        var httpc9 = new XMLHttpRequest();
        httpc9.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {

                maps = JSON.parse(this.responseText);
                mapset.maps = maps;
                
                var httpc11 = new XMLHttpRequest();
                httpc11.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
        
                        images = JSON.parse(this.responseText);
                        mapset.images = images;
                        
                        
                        var httpc13 = new XMLHttpRequest();
                        httpc13.onreadystatechange = function() {
                            if (this.readyState == 4 && this.status == 200) {
                
                                scrolls = JSON.parse(this.responseText);
                                mapset.scrolls = scrolls;
                                
                        
                                document.getElementById("textio").value = JSON.stringify(mapset,null,"    ");
                                savejson();
                                
                                
                            };
                        }
                        
                        httpc13.open("GET", "dir.php?filename=scrolls", true);
                        httpc13.send();

                        
                        
                    };
                }
                
                httpc11.open("GET", "dir.php?filename=uploadimages", true);
                httpc11.send();

                

            };
        }
        
        httpc9.open("GET", "dir.php?filename=maps", true);
        httpc9.send();
        
    }
};
httpc.open("GET", "fileloader.php?filename=data/mapset.txt", true);
httpc.send();


function savejson(){
    var url = "filesaver.php";        
    var httpc2 = new XMLHttpRequest();
    httpc2.open("POST", url, true);
    httpc2.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    httpc2.send("data="+encodeURIComponent(JSON.stringify(mapset,null,"    "))+"&filename=data/mapset.txt");//send text to filesaver.php
}

</script>
<style>
#iotable .button{
    border:solid;
    border-radius:5px;
}
h3{
    text-align:center;
}
li{
    cursor:pointer;
    color:blue;
    margin-bottom:0.5em;
}
#margin{
    position:absolute;
    right:0px;
    bottom:0px;
}
body{
    overflow:hidden;
}
input,table,select{
    font-family:courier;
    font-size:16px;
}
#mainmap{
    position:absolute;
    left:0px;
    top:0px;
    overflow:hidden;
    background-color:#606060;
    
}
#mainmap a{
    font-family:Helvetica;
    border-width:0.1px;
    color:#ff2cb4;
}
#hammerxy{
    position:absolute;
    left:0px;
    top:0px;
    z-index:1;
    overflow:hidden;
}
.button{
    cursor:pointer;
}
.button:hover{
    background-color:#50ff50;
}
.button:active{
    background-color:yellow;
}
#scalebar{
    position:absolute;
    left:0px;
    right:0px;
    bottom:25%;
    height:25%;
    z-index:2;
    width:100%;
}
#rotatebar{
    position:absolute;
    left:0px;
    right:0px;    
    height:25%;
    bottom:0px;
    z-index:20;
    width:100%;
}


#navbutton{
    display:block;
}
.uploadimage{
    max-width:50%;
    display:block;
    margin:auto;
}

.deletebutton{
    width:1.5em;
}
.uploadbox{
    border:solid;
    border-width:0.5px;
    border-radius:10px;
    margin-top:1em;
}
    #feedscroll img{
        max-width:50%;
        cursor:pointer;
    }

@media only screen and (orientation: portrait) {
    #inputbox img{
        width:100px;
    }
    #mapscroll{
        width:32%;
        height:70%;
        position:absolute;
        top:0px;
        left:0px;
        overflow:scroll;
    }
    #mapscroll img{
        width:100px;
    }
    #inputbox{
        position:absolute;
        right:0px;
        top:0px;
        width:32%;
        height:98%;
        overflow:scroll;
    }
    #feedscroll{
        width:32%;
        height:98%;
        position:absolute;
        left:33%;
        bottom:0px;
        overflow:scroll;
    }
    #linkscroll{
        display:none; 
        width:32%;
        height:98%;
        position:absolute;
        left:33%;
        bottom:0px;
        overflow:scroll;
        color:blue;
        font-size:2em;
    }
    #textscroll{
        display:none; 
        width:32%;
        height:98%;
        position:absolute;
        left:33%;
        bottom:0px;
        overflow:scroll;
        font-size:2em;
    }
    #rotatezoombox{
        position:absolute;
        left:0px;
        bottom:0px;
        width:32%;
        height:48%;
    }
    #mainmap{
        border-bottom:solid;
        border-width:0.1px;
    }

}
@media only screen and (orientation: landscape) {
    #inputbox img{
        width:80px;
    }
    #feedscroll{
        width:50%;
        height:32%;
        position:absolute;
        right:0px;
        bottom:33%;
        overflow:scroll;
    }
    #mapscroll{
        width:50%;
        height:32%;
        position:absolute;
        left:0px;
        bottom:33%;
        overflow:scroll;
    }
    #mapscroll img{
        width:70px;
    }
    #textscroll img{
        width:70px;
    }
    #linkscroll img{
        width:70px;
    }

    #textscroll{
        width:50%;
        height:32%;
        position:absolute;
        right:0px;
        bottom:33%;
        overflow:scroll;
        display:none;
    }
    #linkscroll{
        display:none;
        width:50%;
        height:32%;
        position:absolute;
        right:0px;
        bottom:33%;
        overflow:scroll;
        color:blue;
    }

    #inputbox{
        position:absolute;
        overflow:scroll;
        top:0px;
        right:0px;
        width:98%;
        height:32%;
    }
    #rotatezoombox{
        position:absolute;
        right:0px;
        bottom:0px;
        width:95%;
        height:32%;
        
    }
    #mainmap{
        border-right:solid;
        border-width:0.1px;
    }

}
#rotatezoomtable{
    position:absolute;
    right:0px;
    width:98%;
}
#rotatezoomtable tr{
    height:47px;
    margin:auto;
}
#rotatezoomtable td{
    height:47px;
}
#rotatezoomtable img{
    width:47px;
}
#maplinkmodebutton{
    border:solid;
}
.datadiv{
    display:none;
}
.gbox{
    border:solid;
    border-color:#ff2cb4;
    width:200px;
    height:200px;
    margin:auto;
}
.box{
}
#textscroll .button{
    width:1.5em;
}
#hrefscroll .button{
    width:1.5em;
}
#hrefscroll a{
    cursor:pointer;
}
#srcscroll .button{
    width:1.5em;
}
#textscroll span{
    cursor:pointer;
}
</style>
</body>
</html>