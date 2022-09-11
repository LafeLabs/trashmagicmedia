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
<div class = "data" id = "scrolldiv"><?php
    
if(isset($_GET["scroll"])){
    echo $_GET["scroll"];
}

?></div>
<div id = "scrollscroll"></div>
<script>

mode = "dark";
//mode = "light";


if(innerWidth > innerHeight){
    
    document.getElementById("scrollscroll").style.left = (0.5*(innerWidth - innerHeight)).toString() + "px";
    document.getElementById("scrollscroll").style.right = (0.5*(innerWidth - innerHeight)).toString() + "px";    

}
else{


    
}


scroll = "";
rawhtml = "";
var converter = new showdown.Converter();
// for more on options see here:
// https://github.com/showdownjs/showdown/wiki/Showdown-Options
converter.setOption('literalMidWordUnderscores', 'true');
converter.setOption('tables', 'true')
    
filename = "scrolls/home";
loadscroll("scrolls/home");

if(document.getElementById("scrolldiv").innerHTML.length > 0){
    loadscroll(document.getElementById("scrolldiv").innerHTML);
}


if(document.getElementById("scrolldiv").innerHTML.length == 0){
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



</script>
<style>
body{
    overflow:hidden;
    background-color:black
}
.scrolllink{
    color:#ff2cb4;
    cursor:pointer;
}
.scrolllink:hover{
    background-color:#ff2cb490;
}
#scrollscroll{
    position:absolute;
    top:0px;
    bottom:0px;
    left:0px;
    right:0px;
    padding-left:1em;
    padding-right:1em;
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
.button:hover{
    background-color:green;
}
.button:active{
    background-color:yellow;
}


@media only screen and (orientation: landscape) {

    
}

@media only screen and (orientation: portrait) {
    
    
}
</style>
</body>
</html>