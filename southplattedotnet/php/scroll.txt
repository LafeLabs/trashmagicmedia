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
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/showdown/1.8.6/showdown.js"></script>
        <script src = "https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>

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

<div id  = "scrollsbox">
    <input id = "scrollinput"/>
</div>
<table id = "landscapelinks">
    <tr>
        <td class = "editlinks">
            <a  id ="scrolleditorlink2" href = "scrolleditor.php">
                <img src = "iconsymbols/edit.svg"/>
            </a>
        </td>
    </tr>
    <tr>
        <td class = "editlinks">
            <a href = "scrollset.html">
                <img src = "iconsymbols/chaos.svg"/>
            </a>
        </td>
    </tr>
    <tr>
        <td class = "editlinks">
            <a href = "scrolldelete.html">
                <img src = "iconsymbols/delete.svg"/>
            </a>
        </td>
    </tr>
    <tr>
        <td class = "editlinks">
            <a href = "fork.html">
                <img src = "iconsymbols/fork.svg"/>
            </a>
        </td>
    </tr>
    <tr>
        <td id = "modebutton" class= "button">
            <img src = "iconsymbols/lightdark.svg"/>
        </td>
    </tr>
    <tr>
        <td id = "qrcode"></td>
    </tr>
</table>

<table id = "portraitlinks">
    <tr>
        <td class = "editlinks">
            <a id ="scrolleditorlink" href = "scrolleditor.php">
                <img src = "iconsymbols/edit.svg"/>
            </a>
        </td>
        <td class = "editlinks">
            <a href = "scrollset.html">
                <img src = "iconsymbols/chaos.svg"/>
            </a>
        </td>
        <td class = "editlinks">
            <a href = "scrolldelete.html">
                <img src = "iconsymbols/delete.svg"/>
            </a>
        </td>
        <td class = "editlinks">
            <a href = "fork.html">
                <img src = "iconsymbols/fork.svg"/>
            </a>
        </td>
        <td id = "modebutton2" class= "button">
            <img src = "iconsymbols/lightdark.svg"/>
        </td>
        <td id = "hidebutton" class= "button">
            <img id = "hideicon" src = "iconsymbols/showmenu.svg"/>
        </td>

        <td id = "qrcode2"></td>
    </tr>
</table>

<div class = "data" id = "scrolldiv"><?php
    
if(isset($_GET["scroll"])){
    echo $_GET["scroll"];
}

?></div>

<script>

if(innerWidth > innerHeight){
    
    document.getElementById("scrollscroll").style.width = (innerHeight - 35).toString() + "px";
    document.getElementById("scrollscroll").style.left = (0.5*(innerWidth - innerHeight) - 25).toString() + "px";    
    document.getElementById("scrollsbox").style.width = (0.5*(innerHeight - innerWidth)).toString() + "px";
    document.getElementById("scrollsbox").style.left = (innerHeight + 0.5*(innerWidth - innerHeight)).toString() + "px";    

}
else{


}

mode = "dark";
//mode = "light";


scroll = "";
rawhtml = "";
var converter = new showdown.Converter();
// for more on options see here:
// https://github.com/showdownjs/showdown/wiki/Showdown-Options
converter.setOption('literalMidWordUnderscores', 'true');
converter.setOption('tables', 'true')
    
filename = "scrolls/home";

//loadscroll("scrolls/home");

if(document.getElementById("scrolldiv").innerHTML.length > 0){
    loadscroll(document.getElementById("scrolldiv").innerHTML);
}
else{
    loadscroll("scrolls/home");
}


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
    document.getElementById("scrolleditorlink2").href = "scrolleditor.php?scroll=" + filename;


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

document.getElementById("modebutton2").onclick = function(){
    modeswitch();
}

modeswitch();
function modeswitch(){
    if(mode == "dark"){
        mode = "light";
        document.body.style.backgroundColor = "white";
        document.getElementById("scrollscroll").style.backgroundColor = "#f0f0f0";
        document.getElementById("scrollscroll").style.color = "black";

        document.getElementById("scrollinput").style.color = "black";
        document.getElementById("scrollinput").style.backgroundColor = "white";       
        document.getElementById("scrollsbox").style.backgroundColor = "white";
        document.getElementById("scrollsbox").style.color = "black";        
    }
    else{
        mode = "dark";
        document.body.style.backgroundColor = "#404040";
        document.getElementById("scrollscroll").style.backgroundColor = "black";
        document.getElementById("scrollscroll").style.color = "#00ff00";    
        document.getElementById("scrollinput").style.color = "#303030";
        document.getElementById("scrollinput").style.backgroundColor = "black";              
  
        document.getElementById("scrollsbox").style.backgroundColor = "#303030";
        document.getElementById("scrollsbox").style.color = "#00ff00";  

    }
}



scrolls = [];
var httpc9 = new XMLHttpRequest();
httpc9.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        scrolls = JSON.parse(this.responseText);
        var newscrollbutton = document.createElement("P");
        newscrollbutton.className = "boxlink";
        newscrollbutton.innerHTML = "README.md";
        document.getElementById("scrollsbox").appendChild(newscrollbutton);
        newscrollbutton.onclick = function(){
            currentFile = this.innerHTML;
                loadscroll(currentFile);
        }           
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

document.getElementById("scrollinput").value = "";

document.getElementById("scrollinput").onchange = function(){
    loadscroll(this.value);
    this.value = "";
}




if(innerWidth > innerHeight){
    codesquaresize = 100;
}
else{
    codesquaresize = 80;
}


//globalurl = "http://www.trashrobot.org/qrcode.html";
globalurl = window.location.href;


qrcode = new QRCode(document.getElementById("qrcode"), {
	text: globalurl,
	width: codesquaresize,
	height: codesquaresize,
	colorDark : "#000000",
	colorLight : "#ffffff",
	correctLevel : QRCode.CorrectLevel.H
});
    
qrcode.makeCode(globalurl);

qrcode2 = new QRCode(document.getElementById("qrcode2"), {
	text: globalurl,
	width: codesquaresize,
	height: codesquaresize,
	colorDark : "#000000",
	colorLight : "#ffffff",
	correctLevel : QRCode.CorrectLevel.H
});
    
qrcode2.makeCode(globalurl);


hideportraitlist = true;

document.getElementById("hidebutton").onclick = function(){
    hideportraitlist = !hideportraitlist;
    if(hideportraitlist){
        document.getElementById("scrollsbox").style.display = "none";
        document.getElementById("hideicon").src = "iconsymbols/showmenu.svg";
    }
    else{
        document.getElementById("scrollsbox").style.display = "block";
        document.getElementById("hideicon").src = "iconsymbols/hidemenu.svg";

    }

}
</script>
<style>
.editlinks{
/*    display:none;*/
}
pre{
  overflow:scroll;
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
    color:#ff2cb4;
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

#scrollscroll{
    text-align:justify;
    padding-left:1em;
    padding-right:1em;
    position:absolute;
    overflow:scroll;
    background-color:black;
    color:#00ff00;
    font-size:2em;
}
#scrollscroll a{
    color:#ff2cb4;
}
#scrollscroll img{
    max-width:80%;
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
.button{
    cursor:pointer;
}
.button:hover{
    background-color:green;
}
.button:active{
    background-color:yellow;
}
#scrollsbox{
    position:absolute;
    background-color:#808080;
    color:black;
    overflow:scroll;
}


@media only screen and (orientation: landscape) {
    
    #scrollsbox{
        right:0px;
        top:0px;
        bottom:0px;
    }
    #scrollscroll{
        top:0px;
        bottom:0px;
    }   
    #landscapelinks{
        position:absolute;
        left:0px;
        top:0px;
    }
    #portraitlinks{
        display:none;
    }

}

@media only screen and (orientation: portrait) {
    .button{
        font-size:2em;
    }
    #scrollsbox{
        height:30%;
        right:0px;
        left:0px;
        bottom:0px;
        display:none;
    }
    #scrollscroll{
        top:70px;
        left:10px;
        right:10px;
        bottom:10px;
    }   
    #landscapelinks{
        display:none;
    }
    #portraitlinks{
        position:absolute;
        left:0px;
        top:0px;
    }
    table img{
        max-width:60px;
    }
}
</style>
</body>
</html>