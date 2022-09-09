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
    <link href="data:image/x-icon;base64,AAABAAEAEBAQAAEABAAoAQAAFgAAACgAAAAQAAAAIAAAAAEABAAAAAAAgAAAAAAAAAAAAAAAEAAAAAAAAAAAAAAAAP//AP///wANAP8A5Dz6ABueRwAAt/8A6BonABo86AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAREREREREREREREAAAEREREREQCIgREREd3dwAAB3d3d3d3d3d3d3d3d3d3d3d3d3VVVVVVVQAFVVAAVVVQIiBRAiIBEQIAIBECAAERAgAgFgIABmYCIiBmAiIGZgIiIGYCIgZmYCIAaIAAMzMzAAiIiIiIiIiIiIiIiIiIiIiIgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA" rel="icon" type="image/x-icon" />

    <!--Stop Google:-->
    <META NAME="robots" CONTENT="noindex,nofollow">

    <script src="jscode/mapfactory.js"></script>
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/showdown/1.8.6/showdown.js"></script>

<!--       un comment to use math

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
<div id = "scrollscroll"></div>

<span id = "modebutton" class = "button">
    <img style = "cursor:pointer;width:50px;position:absolute;right:10px;bottom:10px" src= "iconsymbols/lightdark.svg"/>
</span>

<a href = "mapset.html">
    <img style = "width:50px;position:absolute;right:10px;bottom:60px;background-color:#808080" src = "iconsymbols/chaos.svg"/>
</a>

<div id  = "mapsbox">
    <input id = "mapinput"/>
    <a id = "mapeditorlink" href = "mapeditor.php">
        <img style = "width:50px;display:block;margin:auto;padding-top:1em" src = "iconsymbols/edit.svg"/>
    </a>    
</div>
<div id = "scrollsbox">
    <input id = "scrollinput"/>
    <a id  = "scrolleditorlink" href = "scrolleditor.php">
        <img style = "width:50px;display:block;margin:auto;padding-top:1em" src = "iconsymbols/edit.svg"/>
    </a>
</div>
<div class = "data" id = "mapdiv"><?php
    
if(isset($_GET["map"])){
    echo $_GET["map"];
}

?></div>
<div class = "data" id = "scrolldiv"><?php
    
if(isset($_GET["scroll"])){
    echo $_GET["scroll"];
}

?></div>

<script>

mode = "dark";
//mode = "light";

square = 1;

document.getElementById("scrollscroll").style.display = "none";




if(innerWidth > innerHeight){
    menuhide = false;
    document.getElementById("scrollscroll").style.left = (0.5*(innerWidth - innerHeight) + 10).toString() + "px"; 

    document.getElementById("scrollscroll").style.width = (innerHeight - 20).toString() + "px";     
    
    document.getElementById("mainmap").style.left = (0.5*(innerWidth - innerHeight)).toString() + "px"; 
    mainmap = new Map(innerHeight,innerHeight,document.getElementById("mainmap"));

    document.getElementById("mapsbox").style.left = (innerHeight + 0.5*(innerWidth - innerHeight)).toString() + "px";
    
    document.getElementById("scrollsbox").style.right = (innerHeight + 0.5*(innerWidth - innerHeight)).toString() + "px";    


}
else{
    menuhide = true;

    mainmap = new Map(innerWidth,innerWidth,document.getElementById("mainmap"));    


    document.getElementById("mainmap").style.top = (0.5*(innerHeight - innerWidth)).toString() + "px"; 
    document.getElementById("scrollscroll").style.top = (0.5*(innerHeight - innerWidth)).toString() + "px"; 
        
    document.getElementById("scrollscroll").style.height = (innerWidth - 20).toString() + "px";     
    
    
    document.getElementById("mapsbox").style.height = (0.5*(innerHeight - innerWidth) - 10).toString() + "px";
    
    document.getElementById("mapsbox").style.bottom = "0px";
    
    document.getElementById("scrollscroll").style.height = (innerWidth - 20).toString() + "px";     
    
    
}



scroll = "";
rawhtml = "";
var converter = new showdown.Converter();
// for more on options see here:
// https://github.com/showdownjs/showdown/wiki/Showdown-Options
converter.setOption('literalMidWordUnderscores', 'true');
converter.setOption('tables', 'true')

//mainmap.math = true;


filename = "maps/home";
mapname = "maps/home";
scrollname = "scrolls/home";

if(document.getElementById("scrolldiv").innerHTML.length > 0){
    loadscroll(document.getElementById("scrolldiv").innerHTML);
}

if(document.getElementById("mapdiv").innerHTML.length > 0){
    loadmap(document.getElementById("mapdiv").innerHTML);
}

if(document.getElementById("mapdiv").innerHTML.length == 0 && document.getElementById("scrolldiv").innerHTML.length == 0){
    loadmap(mapname);
}

ismap = false;
localfile = true;

function loadmap(mapname){
    ismap = true;
    filename = mapname;
    if(filename.substring(0,5) == "maps/"){
        localfile = true;
    }
    else{
        localfile = false;
    }
    document.getElementById("scrollscroll").style.display = "none";
    
    document.getElementById("mainmap").style.display = "block";
    document.getElementById("mapeditorlink").href = "mapeditor.php?map=" + filename;
        
    var httpc = new XMLHttpRequest();
    httpc.onreadystatechange = function(){
        if (this.readyState == 4 && this.status == 200) {
            
            var raw = this.responseText;
            if(raw.charAt(0) != "["){
                raw = raw.substring(raw.indexOf("["))
            }
            mainmap.array = JSON.parse(raw);
    

            N = mainmap.array.length;

            for(var index = 0;index < mainmap.array.length;index++){
                
            }
            
            mainmap.draw();
            //			MathJax.Hub.Typeset();//tell Mathjax to update the math
            for(var index = 0;index < mainmap.linkArray.length;index++){
                if(mainmap.array[index].maplinkmode == true){
                    mainmap.linkArray[index].style.color  = "#ff2cb4";
                    mainmap.linkArray[index].onclick = function(){
                        var localmap = this.getElementsByClassName("maplink")[0].innerHTML;
                        if(localmap.includes("scrolls/")){
                            var localscroll = "scrolls/" + localmap.split("scrolls/")[1];
                            loadscroll(localscroll);
                        }
                        if(localmap.includes("scroll(")){
                            var localscroll = localmap.split("scroll(")[1].split(")")[0];
                            loadscroll(localscroll);
                        }
                        if(!localmap.includes("scroll(") && !localmap.includes("scrolls/")){
                            loadmap(this.getElementsByClassName("maplink")[0].innerHTML);                                
                        }

                    }                    

                }
            }

        }
    };
    httpc.open("GET", "fileloader.php?filename=" + mapname, true);
    httpc.send();
}


function loadscroll(scrollname){
    ismap = false;
    filename = scrollname;
    if(filename.substring(0,8) == "scrolls/" || filename == "README.md"){
        localfile = true;
    }
    else{
        localfile = false;
    }
    document.getElementById("scrolleditorlink").href = "scrolleditor.php?scroll=" + filename;



    document.getElementById("scrolleditorlink").style.display = "block";

    document.getElementById("scrollscroll").innerHTML = "";
    document.getElementById("scrollscroll").style.display = "block";
    document.getElementById("mainmap").style.display = "none";
    var httpc666 = new XMLHttpRequest();
    httpc666.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            scroll = this.responseText;
            rawhtml = converter.makeHtml(scroll);
            document.getElementById("scrollscroll").innerHTML = rawhtml;
            convertscrollinks();
            //			MathJax.Hub.Typeset();//tell Mathjax to update the math
    //			MathJax.Hub.Typeset();//tell Mathjax to update the math
        }
    };
    httpc666.open("GET", "fileloader.php?filename=" + scrollname, true);
    httpc666.send();
    //MathJax.Hub.Typeset();//tell Mathjax to update the math
}


function convertscrollinks(){
    links = document.getElementById("scrollscroll").getElementsByTagName("A");
    for(var index = 0;index < links.length;index++){
        if(links[index].href.includes("scrolls/") && !links[index].href.includes(".php")){
            //console.log(links[index].href);
            var newspan = document.createElement("SPAN");
            newspan.innerHTML = links[index].innerHTML;
            var dataspan = document.createElement("SPAN");
            dataspan.className = "data";
            dataspan.innerHTML  = "scrolls/" + links[index].href.split("scrolls/")[1];
            newspan.appendChild(dataspan);
            newspan.className = "scrolllink";
            links[index].parentNode.insertBefore(newspan,links[index]);
            links[index].style.display = "none";
            
            newspan.onclick = function(){
                var localscroll = this.getElementsByClassName("data")[0].innerHTML;
                loadscroll(localscroll);
            }
        }
        if(links[index].href.includes("scroll(") && !links[index].href.includes(".php")){
            //link format scroll(any url)
            //console.log(links[index].href);
            var newspan = document.createElement("SPAN");
            newspan.innerHTML = links[index].innerHTML;
            var dataspan = document.createElement("SPAN");
            dataspan.className = "data";
            dataspan.innerHTML  = links[index].href.split("scroll(")[1].split(")")[0];
            newspan.appendChild(dataspan);
            newspan.className = "scrolllink";
            links[index].parentNode.insertBefore(newspan,links[index]);
            links[index].style.display = "none";
            
            newspan.onclick = function(){
                var localscroll = this.getElementsByClassName("data")[0].innerHTML;
                loadscroll(localscroll);
            }
        }
        if(links[index].href.includes("map(") && !links[index].href.includes(".php")){
            //console.log(links[index].href);
            //link format map(url)
            var newspan = document.createElement("SPAN");
            newspan.innerHTML = links[index].innerHTML;
            var dataspan = document.createElement("SPAN");
            dataspan.className = "data";
            dataspan.innerHTML  = links[index].href.split("map(")[1].split(")")[0];            
            newspan.appendChild(dataspan);
            newspan.className = "scrolllink";
            links[index].parentNode.insertBefore(newspan,links[index]);
            links[index].style.display = "none";
            
            newspan.onclick = function(){
                var localscroll = this.getElementsByClassName("data")[0].innerHTML;
                loadmap(localscroll);
            }
        }        
        if(links[index].href.includes("maps/") && !links[index].href.includes(".php") && !links[index].href.includes("https://")){
            //console.log(links[index].href);
            var newspan = document.createElement("SPAN");
            newspan.innerHTML = links[index].innerHTML;
            var dataspan = document.createElement("SPAN");
            dataspan.className = "data";
            dataspan.innerHTML  = "maps/" + links[index].href.split("maps/")[1];
            newspan.appendChild(dataspan);
            newspan.className = "scrolllink";
            links[index].parentNode.insertBefore(newspan,links[index]);
            links[index].style.display = "none";
            
            newspan.onclick = function(){
                var localscroll = this.getElementsByClassName("data")[0].innerHTML;
                loadmap(localscroll);
            }
        }        
    }
}



document.getElementById("modebutton").onclick = function(){
    modeswitch();
}

modeswitch();
function modeswitch(){
    if(mode == "dark"){
        mode = "light";
        document.body.style.backgroundColor = "white";
        mainmap.linkColor = "blue";
        mainmap.textColor = "black";
        document.getElementById("mapinput").style.color = "black";
        document.getElementById("mapinput").style.backgroundColor = "white";
        document.getElementById("scrollinput").style.color = "black";
        document.getElementById("scrollinput").style.backgroundColor = "white";        

        document.getElementById("mapsbox").style.backgroundColor = "white";
        document.getElementById("mapsbox").style.color = "black";  
        document.getElementById("scrollscroll").style.backgroundColor = "white";
        document.getElementById("scrollscroll").style.color = "black";          
        document.getElementById("scrollsbox").style.backgroundColor = "white";
        document.getElementById("scrollsbox").style.color = "black";          
        
    }
    else{
        mode = "dark";
        document.body.style.backgroundColor = "black";
        mainmap.textColor = "#00ff00";
        mainmap.linkColor = "#ff2cb4";
        document.getElementById("mapinput").style.color = "#ff2cb4";
        document.getElementById("mapinput").style.backgroundColor = "black";
        document.getElementById("scrollinput").style.color = "#ff2cb4";
        document.getElementById("scrollinput").style.backgroundColor = "black";               
        document.getElementById("mapsbox").style.backgroundColor = "black";
        document.getElementById("mapsbox").style.color = "#00ff00";  
        document.getElementById("scrollsbox").style.backgroundColor = "black";
        document.getElementById("scrollsbox").style.color = "#00ff00";  
        document.getElementById("scrollscroll").style.backgroundColor = "black";
        document.getElementById("scrollscroll").style.color = "#00ff00"; 
                

    }
}

maps = [];
var httpc8 = new XMLHttpRequest();
httpc8.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        maps = JSON.parse(this.responseText);
        for(var index = 0;index < maps.length;index++) {
            var newmapbutton = document.createElement("P");
            newmapbutton.className = "boxlink";
            newmapbutton.innerHTML = "maps/" + maps[index];
            document.getElementById("mapsbox").appendChild(newmapbutton);
            newmapbutton.onclick = function(){
                currentFile = this.innerHTML;
                loadmap(currentFile);
            }
        }
    };
}

httpc8.open("GET", "dir.php?filename=maps", true);
httpc8.send();

scrolls = [];
var httpc9 = new XMLHttpRequest();
httpc9.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        scrolls = JSON.parse(this.responseText);
        for(var index = 0;index < scrolls.length;index++) {
            var newscrollbutton = document.createElement("P");
            newscrollbutton.className = "boxlink";
            newscrollbutton.innerHTML = "scrolls/" + scrolls[index];
            document.getElementById("scrollsbox").appendChild(newscrollbutton);
            newscrollbutton.onclick = function(){
                currentFile = this.innerHTML;
                loadscroll(currentFile);
            }
        }
    };
}

httpc9.open("GET", "dir.php?filename=scrolls", true);
httpc9.send();




document.getElementById("mapinput").value = "";

document.getElementById("scrollinput").value = "";

document.getElementById("mapinput").onchange = function(){
    loadmap(this.value);
    this.value = "";
}

document.getElementById("scrollinput").onchange = function(){
    loadscroll(this.value);
    this.value = "";
}

</script>
<style>
#scrolleditorlink img{
    background-color:#808080;
}
#mapeditorlink img{
    background-color:#808080;
}
body{
    overflow:hidden;
    background-color:black
}
input{
    display:block;
    margin:auto;
    width:90%;
    font-family:courier;
    font-size:1.2em;
    background-color:white;
    color:black;
    border-color:#ff2cb4;
    border-width:8px;
}
.boxlink{
    padding-left:1em;
    cursor:pointer;
    
}
.boxlink:hover{
    background-color:#808080;
}
.scrolllink{
    color:#ff2cb4;
    cursor:pointer;
}
.scrolllink:hover{
    background-color:#ff2cb490;
}

#mainmap{
    position:absolute;
    left:0px;
    top:0px;
    overflow:hidden;
}
#mainmap a{
    font-family:Helvetica;
    color:#ff2cb4;
}

.data{
    display:none;
}
h1,h2,h3,h4{
    text-align:center;
}
.button:hover{
    background-color:green;
}
.button:active{
    background-color:yellow;
}
#mapsbox{
    position:absolute;
    right:0px;
    bottom:0px;
    z-index:-1;
    overflow:hidden;
    background:#404040;
    font-size:1.2em;
}
#scrollsbox{
    position:absolute;
    top:0px;
    left:0px;
    z-index:-1;
    overflow:hidden;
    font-size:1.2em;
}
#mapsbox{
    position:absolute;
    left:0px;
    bottom:0px;
    right:0px;
    color:black;
    background-color:#ffd0d0;
    overflow:scroll;
}

#scrollscroll{
    padding-left:1em;
    padding-right:1em;
    left:0px;
    top:0px;
    position:absolute;
    overflow:scroll;
    background-color:white;
    color:black;
    font-size:2em;
    display:none;
    z-index:-3;
}
#scrollscroll a{
    color:#ff2cb4;
}
#scrollscroll img{
    max-width:50%;
    display:block;
    margin:auto;
    background-color:none;
}


@media only screen and (orientation: landscape) {
    #mapsbox{
        top:0px;
    }
    #mapsbox{
        top:0px;
    }
    #scrollsbox{
        bottom:0px;
    }
    #scrollscroll{
        bottom:0px;
    }
}

@media only screen and (orientation: portrait) {
    #scrollscroll{
        left:0px;
        right:0px;
    }   
    #scrollsbox{
        right:0px;
    }
    #mapsbox{
        bottom:0px;
        left:0px;
        right:0px;
    }

}

#mapsbox{
    bottom:0px;
    left:0px;
}
#mapsbox img{
    width:50px;
}
.button{
    font-size:2em;
}
</style>
</body>
</html>