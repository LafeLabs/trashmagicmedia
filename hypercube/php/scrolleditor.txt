<!doctype html>
<html lang="en">
    <head>
     <meta charset="utf-8"/>

    <link href="data:image/x-icon;base64,AAABAAEAEBAQAAEABAAoAQAAFgAAACgAAAAQAAAAIAAAAAEABAAAAAAAgAAAAAAAAAAAAAAAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADf+wAA3/sAAAfgAACv9QAAoAUAAK/1AACv9QAAqBUAAK/1AACoFQAAr/UAAKAFAACv9QAAB+AAAN/7AADf+wAA" rel="icon" type="image/x-icon" />
        
<script src = "https://cdnjs.cloudflare.com/ajax/libs/showdown/1.8.6/showdown.js"></script>

            <!--Stop Google:-->
    <META NAME="robots" CONTENT="noindex,nofollow">



    </head>
<body>
<div id = "prototype">
## [HOME](scrolls/home)

# name
 
double line break for paragraph break, *italic*, **bold**, [link](index.html). Delete all this.
 
![image alt text](iconsymbols/chaos.svg)
 
</div>
    
<textarea id = "maintextarea"></textarea>
    <a id = "userlink" href = "user.php?scroll=scrolls/home">
        <img src = "iconsymbols/scroll.svg"/>
    </a>
    <a href = "scrolldelete.html">
        <img src = "iconsymbols/delete.svg"/>
    </a>
    <img id = "modebutton" class = "button" src= "iconsymbols/lightdark.svg"/>

    <img id = "menubutton" class = "button" src= "iconsymbols/hidemenu.svg"/>
    
<div id = "feedscroll">
    <table>
        <tr>
            <td>Current:</td>
            <td id = "currentfilename"></td>
        </tr>
        <tr>
            <td>New:</td>
            <td><input id = "newscrollinput"/></td>
        </tr>
    </table>
</div>
        
<div class = "data" id = "scrolldiv"><?php
    
if(isset($_GET["scroll"])){
    echo $_GET["scroll"];
}

?></div>
<div class = "data" id = "fromdiv"><?php

if(isset($_GET["from"])){
    echo $_GET["from"];
}

?></div>

<script>

scrollprototype = document.getElementById("prototype").innerHTML;


if(innerWidth > innerHeight){
    
    document.getElementById("maintextarea").style.width = (innerHeight - 50).toString() + "px";
    document.getElementById("maintextarea").style.left = (0.5*(innerWidth - innerHeight) + 25).toString() + "px";    
    document.getElementById("maintextarea").style.top = (25).toString() + "px";        
    document.getElementById("maintextarea").style.height = (innerHeight - 100).toString() + "px";        
    
    document.getElementById("feedscroll").style.width = (0.5*(innerWidth - innerHeight)-10).toString() + "px";
    document.getElementById("feedscroll").style.height = (innerHeight - 100).toString() + "px";    


}
else{
    
    document.getElementById("maintextarea").style.width = (innerWidth - 100).toString() + "px";
    document.getElementById("maintextarea").style.top = (120).toString() + "px";        
    document.getElementById("maintextarea").style.height = (innerWidth).toString() + "px";        

    document.getElementById("feedscroll").style.height = (innerHeight - innerWidth - 150).toString() + "px";    
    
}

currentfile = "";
scroll = "";
rawhtml = "";

document.getElementById("newscrollinput").value = "";

//get readme.md, convert to html and display
var converter = new showdown.Converter();
// for more on options see here:
// https://github.com/showdownjs/showdown/wiki/Showdown-Options
converter.setOption('literalMidWordUnderscores', 'true');
converter.setOption('tables', 'true');

if(document.getElementById("scrolldiv").innerHTML.length > 0 && document.getElementById("fromdiv").innerHTML.length == 0){
    var scrollurl = document.getElementById("scrolldiv").innerHTML;
    if(scrollurl.substring(0,8) == "scrolls/" || scrollurl == "README.md"){
        currentfile = scrollurl;
        var httpc = new XMLHttpRequest();
        httpc.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                scroll = this.responseText;
                document.getElementById("maintextarea").value = scroll;  
                document.getElementById("currentfilename").innerHTML = currentfile;        
                document.getElementById("userlink").href = "user.php?scroll=" + currentfile;
            }
        };
        httpc.open("GET", "fileloader.php?filename=" + currentfile, true);
        httpc.send();
    }
    else{
        currentfile = scrollurl;
        var httpc = new XMLHttpRequest();
        httpc.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                scroll = this.responseText;
                document.getElementById("maintextarea").value = scroll;  
                currentfile = "scrolls/remote";
                document.getElementById("currentfilename").innerHTML = currentfile;
                document.getElementById("userlink").href = "user.php?scroll=" + currentfile;
            }
        };
        httpc.open("GET", "fileloader.php?filename=" + currentfile, true);
        httpc.send();
    }
}

if(document.getElementById("scrolldiv").innerHTML.length > 0 && document.getElementById("fromdiv").innerHTML.length > 0){
    var scrollurl = document.getElementById("scrolldiv").innerHTML;
    var fromurl = document.getElementById("fromdiv").innerHTML;
    currentfile = scrollurl;
    
    var httpc = new XMLHttpRequest();
    httpc.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            scroll = this.responseText;
            document.getElementById("maintextarea").value = scroll;  
            document.getElementById("currentfilename").innerHTML = currentfile;
            document.getElementById("userlink").href = "user.php?scroll=" + currentfile;
            
            data = encodeURIComponent(scroll);
            var httpc = new XMLHttpRequest();
            var url = "filesaver.php";        
            httpc.open("POST", url, true);
            httpc.setRequestHeader("Content-Type", "application/x-www-form-urlencoded;charset=utf-8");
            httpc.send("data="+data+"&filename=" + currentfile);//send text to filesaver.php
            
            
        }
    };
    httpc.open("GET", "fileloader.php?filename=" + fromurl, true);
    httpc.send();
    
}

if(document.getElementById("scrolldiv").innerHTML.length == 0 && document.getElementById("fromdiv").innerHTML.length == 0){
    currentfile = "README.md";
    var httpc = new XMLHttpRequest();
    httpc.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            scroll = this.responseText;
            document.getElementById("maintextarea").value = scroll;  
            document.getElementById("currentfilename").innerHTML = currentfile;
        }
    };
    httpc.open("GET", "fileloader.php?filename=" + currentfile, true);
    httpc.send();
}

//get readme.md, convert to html and display




document.getElementById("maintextarea").onkeyup = function() {
    scroll = this.value;
    data = encodeURIComponent(this.value);
    var httpc = new XMLHttpRequest();
    var url = "filesaver.php";        
    httpc.open("POST", url, true);
    httpc.setRequestHeader("Content-Type", "application/x-www-form-urlencoded;charset=utf-8");
    httpc.send("data="+data+"&filename=" + currentfile);//send text to filesaver.php
}

//get all the markdown files in root directory and put them in list of scrolls
scrolls = [];
var httpc7 = new XMLHttpRequest();
    httpc7.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        scrolls = JSON.parse(this.responseText);
        for(var index = scrolls.length - 1;index >= 0;index--) {
            if(scrolls[index].substr(-3) == ".md"){
    //            console.log(scrolls[index]);
                var newscrollbutton = document.createElement("div");
                newscrollbutton.className = "scrollbutton";
                newscrollbutton.innerHTML = scrolls[index];
                document.getElementById("feedscroll").appendChild(newscrollbutton);
                newscrollbutton.onclick = function(){
                    document.getElementById("newscrollinput").value = "";
                    currentfile = this.innerHTML;
                    //console.log(scrollname);
                    document.getElementById("currentfilename").innerHTML = currentfile;       
                    document.getElementById("userlink").href = "user.php?scroll=" + currentfile;
                    var httpc = new XMLHttpRequest();
                    httpc.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            scroll = this.responseText;
                            
                            document.getElementById("maintextarea").value = scroll;  


                        }
                    };
                    httpc.open("GET", "fileloader.php?filename=" + currentfile, true);
                    httpc.send();
                }
            }
        }
    }
};

httpc7.open("GET", "dir.php", true);
httpc7.send();


//get all the files in the "scrolls" directory and put them in the list of scroll files
scrolls2 = [];
var httpc8 = new XMLHttpRequest();
httpc8.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {
    scrolls2 = JSON.parse(this.responseText);
//    for(var index = scrolls2.length - 1;index >= 0;index--) {
    for(var index = 0;index < scrolls2.length;index++) {    
        var newscrollbutton = document.createElement("div");
        newscrollbutton.className = "scrollbutton";
        newscrollbutton.innerHTML = "scrolls/" + scrolls2[index];
        document.getElementById("feedscroll").appendChild(newscrollbutton);
        newscrollbutton.onclick = function(){
            document.getElementById("newscrollinput").value = "";
            currentfile = this.innerHTML;
            document.getElementById("currentfilename").innerHTML = currentfile;
            document.getElementById("userlink").href = "user.php?scroll=" + currentfile;            
            var httpc = new XMLHttpRequest();
            httpc.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    scroll = this.responseText;
                    document.getElementById("maintextarea").value = scroll; 
                }
            };
            httpc.open("GET", "fileloader.php?filename=" + currentfile, true);
            httpc.send();
            }
            
        }
    }
};

httpc8.open("GET", "dir.php?filename=scrolls", true);
httpc8.send();

name = "";

document.getElementById("newscrollinput").onchange = function(){
    name = this.value;
    currentfile = "scrolls/" + this.value;
    document.getElementById("currentfilename").innerHTML = currentfile; 
    document.getElementById("userlink").href = "user.php?scroll=" + currentfile;
    var httpc = new XMLHttpRequest();
    httpc.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            scroll = this.responseText;
            if(scroll.length == 0){
                scroll = scrollprototype;
                scroll = scroll.replace(/name/g,name);
                data = encodeURIComponent(scroll);
                var httpc = new XMLHttpRequest();
                var url = "filesaver.php";        
                httpc.open("POST", url, true);
                httpc.setRequestHeader("Content-Type", "application/x-www-form-urlencoded;charset=utf-8");
                httpc.send("data="+data+"&filename=" + currentfile);//send text to filesaver.php
                
            }
            document.getElementById("maintextarea").value = scroll; 
            document.getElementById("currentfilename").innerHTML = currentfile;
        }
    };
    httpc.open("GET", "fileloader.php?filename=" + currentfile, true);
    httpc.send();
    
    var newscrollbutton = document.createElement("div");
    newscrollbutton.className = "scrollbutton";
    newscrollbutton.innerHTML = currentfile;
    document.getElementById("feedscroll").appendChild(newscrollbutton);
    newscrollbutton.onclick = function(){
        document.getElementById("newscrollinput").value = "";
        currentfile = this.innerHTML;
        //console.log(scrollname);
        document.getElementById("currentfilename").innerHTML = currentfile;       
        document.getElementById("userlink").href = "user.php?scroll=" + currentfile;
        var httpc = new XMLHttpRequest();
        httpc.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                scroll = this.responseText;
                document.getElementById("maintextarea").value = scroll;  
            }
        };
        httpc.open("GET", "fileloader.php?filename=" + currentfile, true);
        httpc.send();
    }
}


mode = "dark";

document.getElementById("modebutton").onclick = function(){
    modeswitch();
}

modeswitch();
modeswitch();

function modeswitch(){
    if(mode == "dark"){
        mode = "light";
        document.getElementById("maintextarea").style.backgroundColor = "#e0e0e0";
        document.getElementById("maintextarea").style.color = "black";
        document.body.style.backgroundColor = "white";
        document.getElementById("newscrollinput").style.color = "black";
        document.getElementById("newscrollinput").style.backgroundColor = "white";
    }
    else{
        mode = "dark";
        document.getElementById("maintextarea").style.backgroundColor = "black";
        document.getElementById("maintextarea").style.color = "#00ff00";
        document.getElementById("newscrollinput").style.color = "#00ff00";
        document.getElementById("newscrollinput").style.backgroundColor = "black";
        document.body.style.backgroundColor = "#808080";
    }
}

hidemenu = false;
document.getElementById("menubutton").onclick = function(){
    hidemenu = !hidemenu;
    if(hidemenu){
        document.getElementById("feedscroll").style.display = "none";
        document.getElementById("menubutton").src = "iconsymbols/showmenu.svg";
    }
    else{
        document.getElementById("feedscroll").style.display = "block";
        document.getElementById("menubutton").src = "iconsymbols/hidemenu.svg";
    }
}


scrollset = {};

var httpc = new XMLHttpRequest();
    httpc.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        scrollset = JSON.parse(this.responseText);
        if(scrollset.server.charAt(scrollset.server.length-1) != "/"){
            scrollset.server = scrollset.server + "/"; 
        }
        var httpc9 = new XMLHttpRequest();
        httpc9.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {

                scrolls = JSON.parse(this.responseText);
                scrollset.scrolls = scrolls;
                savejson();

            };
        }
        
        httpc9.open("GET", "dir.php?filename=scrolls", true);
        httpc9.send();
        
    }
};
httpc.open("GET", "fileloader.php?filename=data/scrollset.txt", true);
httpc.send();

function savejson(){
    var url = "filesaver.php";        
    var httpc2 = new XMLHttpRequest();
    httpc2.open("POST", url, true);
    httpc2.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    httpc2.send("data="+encodeURIComponent(JSON.stringify(scrollset,null,"    "))+"&filename=data/scrollset.txt");//send text to filesaver.php
}
</script>
<style>
#prototype{
    display:none;
}
body{
    overflow:hidden;
}
.scrollbutton{
    cursor:pointer;
    color:blue;
    margin-bottom:0.5em;
    color:#ff2cb4;
}
.data{
    display:none;
}
#modebutton{

}

#maintextarea{
    position:absolute;
    padding-left:1em;
    padding-top:1em;
    background-color:black;
    font-family:"Times New Roman", Times, serif;
    font-size:1.5em;
    overflow:scroll;
}
#feedscroll{
    padding-top:1em;
    position:absolute;
    overflow:scroll;
    font-size:1.5em;
    padding-left:1em;
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

@media only screen and (orientation: landscape) {
    
    #feedscroll{
        right:0px;
        top:50px;
    }
    #menubutton{
        display:none;
    }

}

@media only screen and (orientation: portrait) {

    #feedscroll{
        right:0px;
        left:0px;
        bottom:0px;
    }
    #maintextarea{
        left:40px;
    }

}
        </style>
    </body>
</html>