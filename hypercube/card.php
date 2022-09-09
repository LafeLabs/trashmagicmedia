<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <!--

        GEOMETRON CARD MAGIC
        
        AS ABOVE SO BELOW

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
    <script src="jscode/geometron.js"></script>

    <script src = "https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.js"></script>
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
    
</head>
<body>    
<div id = "hammerbox"></div>
<img id = "mainimage"/>
<div id = "facebox">
    <canvas id = "face"></canvas>
</div>
<div id = "qrcode"></div>
<div id = "cardbox">
    <canvas id = "card"></canvas>
</div>

<div id = "linkbox">
    
    <a></a>
    <a></a>
    <a></a>
    <a></a>
    <a></a>
    <a></a>
    <a></a>

</div>
<div class = "data" id = "carddatadiv"><?php

if(isset($_GET["card"])){
    echo file_get_contents($_GET["card"]);
}

?></div>

<script>


links = document.getElementById("linkbox").getElementsByTagName("a");

links[0].style.zIndex = "10";


maincanvas = document.getElementById("card");
facecanvas = document.getElementById("face");

codesquaresize = 200;
document.getElementById("qrcode").style.left = (0.5*(innerWidth - codesquaresize)).toString() + "px";
document.getElementById("qrcode").style.top = (0.5*(innerHeight - codesquaresize)).toString() + "px";

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


if(innerWidth > innerHeight){
    //landscape
    square = innerWidth/3 - 150;
    document.getElementById("cardbox").style.left = Math.round((innerWidth - (3*square + 20))/2).toString() + "px";
    
    document.getElementById("cardbox").style.top = Math.round((innerHeight - (2*square + 20))/2).toString() + "px";
    
    
    mainGVM = new GVM(maincanvas,3*square + 20,2*square + 20);
    mainGVM.x0 = 10;
    mainGVM.y0 = square + 10;


    document.getElementById("facebox").style.left = Math.round((innerWidth - (3*square + 20))/2).toString() + "px";
    
    document.getElementById("facebox").style.top = Math.round((innerHeight - (2*square + 20))/2).toString() + "px";
    
    document.getElementById("mainimage").style.left = Math.round((innerWidth - (3*square + 20))/2).toString() + "px";
    
    document.getElementById("mainimage").style.top = Math.round((innerHeight - (2*square + 20))/2).toString() + "px";    
    
    faceGVM = new GVM(facecanvas,3*square + 20,2*square + 20);
    faceGVM.x0 = 10;
    faceGVM.y0 = square + 10;
    
    document.getElementById("mainimage").style.width = mainGVM.width.toString() + "px";
    document.getElementById("mainimage").style.height = mainGVM.height.toString() + "px";


    document.getElementById("linkbox").style.width = (mainGVM.width - 20).toString() + "px";
    document.getElementById("linkbox").style.height = (mainGVM.height - 20).toString() + "px";

    document.getElementById("linkbox").style.left = Math.round(10 + (innerWidth - (3*square + 20))/2).toString() + "px";
    
    document.getElementById("linkbox").style.top = Math.round(10 + (innerHeight - (2*square + 20))/2).toString() + "px";
    
    for(var index = 0;index < links.length;index++){
        links[index].style.width = square.toString() + "px";
        links[index].style.height = square.toString() + "px";
    }
    links[1].style.left = square.toString() + "px";
    links[2].style.left = (2*square).toString() + "px";
    links[3].style.top = square.toString() + "px";
    links[4].style.top = square.toString() + "px";
    links[4].style.left = square.toString() + "px";
    links[5].style.top = square.toString() + "px";
    links[5].style.left = (2*square).toString() + "px";

    links[0].style.zIndex = "10";
    
}
else{
    square = innerWidth/2 - 50;

    document.getElementById("cardbox").style.left = Math.round((innerWidth - (2*square + 20))/2).toString() + "px";
    document.getElementById("cardbox").style.top = Math.round((innerHeight - (3*square + 20))/2).toString() + "px";
    
    
    mainGVM = new GVM(maincanvas,2*square + 20,3*square + 20);
    mainGVM.x0 = square + 10;
    mainGVM.y0 = 10;
    
    mainGVM.theta0 = 0;


    document.getElementById("facebox").style.left = Math.round((innerWidth - (2*square + 20))/2).toString() + "px";
    
    document.getElementById("facebox").style.top = Math.round((innerHeight - (3*square + 20))/2).toString() + "px";
    
    
    
    faceGVM = new GVM(facecanvas,2*square + 20,3*square + 20);
    faceGVM.x0 = square + 10;
    faceGVM.y0 = 10;
    faceGVM.theta0 = 0;


    document.getElementById("mainimage").style.height = mainGVM.height.toString() + "px";
    document.getElementById("mainimage").style.width = mainGVM.width.toString() + "px";
    
    document.getElementById("mainimage").style.left = Math.round((innerWidth - (2*square + 20))/2).toString() + "px";
    
    document.getElementById("mainimage").style.top = Math.round((innerHeight - (3*square + 20))/2).toString() + "px";
    

  
    document.getElementById("linkbox").style.left = Math.round(10+ (innerWidth - (2*square + 20))/2).toString() + "px";
    document.getElementById("linkbox").style.top = Math.round(10+(innerHeight - (3*square + 20))/2).toString() + "px";
    
    document.getElementById("linkbox").style.width = (mainGVM.width - 20).toString() + "px";
    document.getElementById("linkbox").style.height = (mainGVM.height - 20).toString() + "px";
    for(var index = 0;index < links.length;index++){
        links[index].style.width = square.toString() + "px";
        links[index].style.height = square.toString() + "px";
    }
    
    links[0].style.left = square.toString() + "px";
    links[1].style.left = square.toString() + "px";
    links[2].style.left = square.toString() + "px";
    links[1].style.top = square.toString() + "px";
    links[2].style.top = (2*square).toString() + "px";
    links[3].style.left = "0px";
    links[4].style.left = "0px";
    links[4].style.top = square.toString() + "px";
    links[5].style.left = "0px";
    links[5].style.top = (2*square).toString() + "px";
    
    links[3].style.zIndex = "10";
    
}


mainGVM.importbytecode(hypercube);    

mainGVM.unit = square;
mainGVM.style.fill1 = "#AD8762";
maincanvas.style.display = "block";

faceGVM.importbytecode(hypercube);    

faceGVM.unit = square;
faceGVM.style.line0 = 5;
faceGVM.style.line1 = 5;
faceGVM.style.line2 = 5;
faceGVM.style.line3 = 5;
faceGVM.style.line4 = 5;
faceGVM.style.line5 = 5;
faceGVM.style.line6 = 5;
faceGVM.style.line7 = 5;

//faceGVM.style.fill1 = "#AD8762";
facecanvas.style.display = "block";


if(document.getElementById("carddatadiv").innerHTML.length > 0){
    card = JSON.parse(document.getElementById("carddatadiv").innerHTML);
    loadcard();
}
else{
    var httpccard = new XMLHttpRequest();
    httpccard.onreadystatechange = function(){
        if (this.readyState == 4 && this.status == 200) {
            card = JSON.parse(this.responseText);
            loadcard();
        }
    };
    httpccard.open("GET", "fileloader.php?filename=data/card.txt", true);
    httpccard.send();
    
}


function loadcard(){

    document.getElementById("mainimage").src = card.imageurl;

    faceGVM.drawGlyph(card.faceglyph);

    mainGVM.drawGlyph("0321,0362,0203,0335,0203,0203,0203,0335,0203,0203,0335,0203,0203,0203,0335,0203,0363,0320,0335,0201,0334,0342,0335,0335,0342,0334,0201,0334,0342,0335,0342,0335,0342,0335,0330,0330,0335,");
    mainGVM.actionSequence("0336,0330,0333,0336,0336,");
    mainGVM.actionSequence(card.icons[0]);
    mainGVM.actionSequence("0300,0333,0336,0330,0333,0336,0336,");
    mainGVM.actionSequence(card.icons[1]);
    mainGVM.actionSequence("0300,0333,0333,0336,0330,0333,0336,0336,");
    mainGVM.actionSequence(card.icons[2]);
    mainGVM.actionSequence("0300,0331,0336,0330,0333,0336,0336,");
    mainGVM.actionSequence(card.icons[3]);
    mainGVM.actionSequence("0300,0331,0333,0336,0330,0333,0336,0336,");
    mainGVM.actionSequence(card.icons[4]);
    mainGVM.actionSequence("0300,0331,0333,0333,0336,0330,0333,0336,0336,");
    mainGVM.actionSequence(card.icons[5]);


    for(var index = 0;index < card.links.length;index++){
        if(card.links[index].length > 0){
            links[index].href = card.links[index];
            links[index].style.border = "solid";
            links[index].style.borderColor = "#ff2cb4";
            links[index].style.borderWidth = "5px";
            links[index].style.borderRadius = "10px";
        }   
        else{
            links[index].style.display = "none";
        }
    }
    


}

theta = 0;

mc = new Hammer(document.getElementById("hammerbox"));
mc.get('pan').set({ direction: Hammer.DIRECTION_ALL });
mc.on("panleft panright panup pandown tap press", function(ev) {

//    theta = Math.PI/4 +(ev.deltaX/200);
    theta = (ev.deltaX/200);
    redraw();

});

redraw();

function redraw(){
    alpha = Math.cos(theta)*Math.cos(theta);
    beta = Math.sin(theta)*Math.sin(theta);
    
    document.getElementById("cardbox").style.opacity = (alpha).toString();
    document.getElementById("linkbox").style.opacity = (alpha).toString();

    document.getElementById("facebox").style.opacity = (beta).toString();
    document.getElementById("mainimage").style.opacity = (beta).toString();
    
    document.getElementById("qrcode").style.opacity = (beta).toString();

}





</script>
<style>
body{
    background-color:#cecdcb;
}
input,textarea{
    color:#00ff00;
    font-family:courier;
    background-color:black;
}
#textio{
    position:absolute;
    right:0px;
    bottom:0px;
    width:200px;
    height:200px;
}
#maintable{
    position:absolute;
    top:0px;
    left:220px;
}
#cardbox{
    position:absolute;
    top:0px;
    right:0px;
    border:solid;
}
#iconsbox{
    position:absolute;
    left:0px;
    top:0px;
    bottom:0px;
    width:200px;
    overflow:scroll;
}
#importbutton{
    position:absolute;
    right:300px;
    bottom:10px;
    border:solid;
    border-radius:5px;
    text-align:center;
}
#cardlink{
    position:absolute;
    right:300px;
    bottom:40px;

}
#linkbox{
    position:absolute;
    left:10px;
    top:10px;
    width:100px;
    height:100px;
}
#linkbox a{
    position:absolute;
}
.data{
    display:none;
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
#hammerbox{
    position:absolute;
    z-index:-4;
    left:0px;
    right:0px;
    top:0px;
    bottom:0px;
}
#mainimage{
    position:absolute;
    z-index:-3;
}
#facebox{
    position:absolute;
    z-index:-2;
}
#qrcode{
    position:absolute;
    z-index:-1;
}
</style>
</body>
</html>