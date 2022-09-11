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
    <link href="data:image/x-icon;base64,AAABAAEAEBAQAAEABAAoAQAAFgAAACgAAAAQAAAAIAAAAAEABAAAAAAAgAAAAAAAAAAAAAAAEAAAAAAAAAC0LP8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAERERERERERERERERAREREREQARAAEQARERABEQERABERERARARAREREREQEBARERERAREAARARERAAAAAAAAEREQERAAEQERERERAQEBERERERARARAREREQAREBEQARERABEQERABEREREQABEREREREREBEREREREREREREREAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA" rel="icon" type="image/x-icon" />

    <!--Stop Google:-->
    <META NAME="robots" CONTENT="noindex,nofollow">

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
<div id = "scrollscroll"></div>
<div id = "modebutton" class = "button">LIGHT<br>DARK</div>
<div id = "hidebutton" class = "button"><span id  = "hideshow">SHOW</span><br>MENU</div>
<div id = "margin">
    <div id  = "scrollsbox">
        <input id = "scrollinput"/>
        <a id = "scrolleditorlink" href = "scrolleditor.php">
            <img style = "width:50px;display:block;margin:auto;padding-top:1em" src = "iconsymbols/edit.svg"/>
        </a>
    </div>
</div>

<div class = "data" id = "scrolldiv"><?php
    
if(isset($_GET["scroll"])){
    echo $_GET["scroll"];
}

?></div>
<script>

mode = "dark";
//mode = "light";


if(innerWidth > innerHeight){
    menuhide = false;

    document.getElementById("margin").style.left = (innerHeight).toString() + "px";
    document.getElementById("scrollscroll").style.width = (innerHeight- 25).toString() + "px";
    document.getElementById("scrollscroll").style.height = innerHeight.toString() + "px";    

}
else{
    menuhide = true;
    document.getElementById("scrollscroll").style.width = innerWidth.toString() + "px";

    document.getElementById("scrollscroll").style.height = (innerHeight - 100).toString() + "px";        
    document.getElementById("margin").style.display = "none";
    document.getElementById("margin").style.height = (0.5*innerHeight).toString() + "px";
    document.getElementById("margin").style.bottom = "0px";
    
}


document.getElementById("hidebutton").onclick = function(){
    menuhide = !menuhide;
    if(menuhide){
        document.getElementById("hideshow").innerHTML = "SHOW";
        document.getElementById("margin").style.display = "none";
    }
    else{
        document.getElementById("hideshow").innerHTML = "HIDE";
        document.getElementById("margin").style.display = "block";
    }
}



scroll = "";
rawhtml = "";
var converter = new showdown.Converter();
// for more on options see here:
// https://github.com/showdownjs/showdown/wiki/Showdown-Options
converter.setOption('literalMidWordUnderscores', 'true');
converter.setOption('tables', 'true')
    
//loadscroll("README.md");

if(document.getElementById("scrolldiv").innerHTML.length > 0){
    loadscroll(document.getElementById("scrolldiv").innerHTML);
}


if(document.getElementById("scrolldiv").innerHTML.length == 0){
    loadscroll("scrolls/home");
}

///below this line identical to index.html

localfile = true;




function loadscroll(scrollname){
    filename = scrollname;
    if(filename.substring(0,8) == "scrolls/" || filename == "README.md"){
        localfile = true;
    }
    else{
        localfile = false;
    }
    document.getElementById("scrolleditorlink").href = "scrolleditor.php?scroll=" + filename;

    document.getElementById("scrollscroll").innerHTML = "";
    document.getElementById("scrollscroll").style.display = "block";
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
    }
}

document.getElementById("modebutton").onclick = function(){
    modeswitch();
}

modeswitch();
modeswitch();

function modeswitch(){
    if(mode == "dark"){
        mode = "light";
        document.body.style.backgroundColor = "white";
        document.getElementById("scrollscroll").style.backgroundColor = "white";
        document.getElementById("scrollscroll").style.color = "black";
        document.getElementById("scrollinput").style.color = "black";
        document.getElementById("scrollinput").style.backgroundColor = "white";       
        document.getElementById("scrollsbox").style.backgroundColor = "#e0e0ff";
        document.getElementById("scrollsbox").style.color = "black"; 
        document.getElementById("modebutton").style.color = "black"; 
        document.getElementById("modebutton").style.borderColor = "black"; 
        document.getElementById("modebutton").style.backgroundColor = "white"; 
        document.getElementById("hidebutton").style.color = "black"; 
        document.getElementById("hidebutton").style.borderColor = "black"; 
        document.getElementById("hidebutton").style.backgroundColor = "white"; 

    }
    else{
        mode = "dark";
        document.body.style.backgroundColor = "black";
        document.getElementById("scrollscroll").style.backgroundColor = "black";
        document.getElementById("scrollscroll").style.color = "#00ff00";    
        document.getElementById("scrollinput").style.color = "#ff2cb4";
        document.getElementById("scrollinput").style.backgroundColor = "black";              
        document.getElementById("scrollsbox").style.backgroundColor = "#000020";
        document.getElementById("scrollsbox").style.color = "#00ff00";
        document.getElementById("modebutton").style.color = "#00ff00"; 
        document.getElementById("modebutton").style.borderColor = "#00ff00"; 
        document.getElementById("modebutton").style.backgroundColor = "black";          
        document.getElementById("hidebutton").style.color = "#00ff00"; 
        document.getElementById("hidebutton").style.borderColor = "#00ff00"; 
        document.getElementById("hidebutton").style.backgroundColor = "black";          
                        

    }
}


scrolls = [];
var httpc9 = new XMLHttpRequest();
httpc9.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        scrolls = JSON.parse(this.responseText);
        for(var index = 0;index < scrolls.length;index++) {
            var newscrollbutton = document.createElement("DIV");
            newscrollbutton.className = "boxlink";
            newscrollbutton.innerHTML = scrolls[index];
            document.getElementById("scrollsbox").appendChild(newscrollbutton);
            newscrollbutton.onclick = function(){
                currentFile =  "scrolls/" + this.innerHTML;
                loadscroll(currentFile);
            }
        }
    };
}

httpc9.open("GET", "dir.php?filename=scrolls", true);
httpc9.send();

document.getElementById("scrollinput").value = "";

document.getElementById("scrollinput").onchange = function(){
    loadscroll(this.value);
    this.value = "";
}

</script>
<style>
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
    color:#ff2cb4;    
    font-size:1.5em;
    margin-top:0.25em;
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
#scrollinput{
    display:none;
}

#scrollscroll{
    padding-left:1em;
    padding-right:1em;
    left:0px;
    top:0px;
    position:absolute;
    overflow:scroll;
    background-color:black;
    color:#00ff00;
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
.data{
    display:none;
}
h1,h2,h3,h4{
    text-align:center;
}
#modebutton{
    position:absolute;
    background-color:white;
    color:black;
    cursor:pointer;
    border:solid;
    border-radius:5px;
    text-align:center;
    display:none;
}
#hidebutton{
    position:absolute;
    background-color:white;
    color:black;
    cursor:pointer;
    border:solid;
    border-radius:5px;
    text-align:center;
}
.button:hover{
    background-color:green;
}
.button:active{
    background-color:yellow;
}
#margin{
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
    left:0px;
    top:0px;
    bottom:0px;
    right:0%;
    background-color:#e0e0ff;
    overflow:scroll;
}

@media only screen and (orientation: landscape) {
    #margin{
        top:0px;
    }
    #modebutton{
        right:5px;
        top:5px;
    }
    #hidebutton{
        display:none;
    }
}

@media only screen and (orientation: portrait) {
    #modebutton{
        right:0px;
        bottom:0px;
    }
    #margin{
        bottom:0px;
        left:0px;
    }
    #margin img{
        width:50px;
    }
    #hidebutton{
        left:0px;
        bottom:0px;
    }
    .button{
        font-size:2em;
    }
    input{
        display:none;
    }
}
</style>
</body>
</html>