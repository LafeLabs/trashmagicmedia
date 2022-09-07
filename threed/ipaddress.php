<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <script src = "jscode/qrcode.js"></script>
    <link href="data:image/x-icon;base64,AAABAAEAEBAQAAEABAAoAQAAFgAAACgAAAAQAAAAIAAAAAEABAAAAAAAgAAAAAAAAAAAAAAAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD//wAA//8AAOADAADv+wAA7/sAAO/7AADv+wAA7/sAAO/7AADv+wAA77sAAO/fAADv7QAA4DUAAP/5AAD/4QAA" rel="icon" type="image/x-icon" />
</head>
<a href = "index.html">
    <img src = "iconsymbols/home.svg" alt = "home"/>
</a>    
<a href = "mainfeed.html">
    <img src = "iconsymbols/feed.svg" alt = "main feed"/>
</a>    

<h1>IP Address:  
<span id = "ipaddress"><?php
$foo =  shell_exec("hostname -I");
$bar = explode(" ",$foo)[0];
echo $bar;
?></span>
</h1>

<div id = "qrcode"></div>
<img id = "transferimage"/>
<canvas id = "outputcanvas"></canvas>

<table>
    <tr>
        <td></td>
        <td class = "button" id  = "savebutton">SAVE TO FEED</td>        
    </tr>
    <tr>
        <td>LINK:</td>
        <td>
            <input id = "ipinput"/>
        </td>
    </tr>
</table>
<script>

img = document.getElementById("transferimage");
//img.crossOrigin = 'Anonymous';
canvas = document.getElementById("outputcanvas");
ctx = canvas.getContext("2d");

globalurl = "http://" + document.getElementById("ipaddress").innerHTML;
document.getElementById("ipinput").value = globalurl;

codesquaresize = 128;
marginsize = 40;
fontsize = 12;

qrcode = new QRCode(document.getElementById("qrcode"), {
	text: globalurl,
	width: codesquaresize,
	height: codesquaresize,
	colorDark : "#000000",
	colorLight : "#ffffff",
	correctLevel : QRCode.CorrectLevel.H
});


qrcode.makeCode(globalurl);
    
    
//load mainfeed    
    

mainfeed = [];

var httpc = new XMLHttpRequest();
httpc.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        mainfeed = JSON.parse(this.responseText);
    }
};

httpc.open("GET", "fileloader.php?filename=data/mainfeed.txt", true);
httpc.send();

element = {
        "href":"",
        "src":"",
        "text":"",
        "glyph":""
};
    

document.getElementById("transferimage").onload = function(){
    canvas.style.border = "solid"; 
    canvas.width = codesquaresize + 2*marginsize;
    canvas.height = codesquaresize + 2*marginsize;
    //img.crossOrigin = '';
    ctx.strokeStyle = "white";
    ctx.fillStyle = "white";
            
    ctx.clearRect(0,0,codesquaresize + 2*marginsize,codesquaresize + 2*marginsize);
    ctx.fillRect(0,0,codesquaresize + 2*marginsize,codesquaresize + 2*marginsize); 
    ctx.drawImage(img,marginsize,marginsize,codesquaresize,codesquaresize);

    ctx.strokeStyle = "black";
    ctx.fillStyle = "black";
    ctx.font = "10px Helvetica";
    ctx.fillText(globalurl,2,codesquaresize + 2*marginsize - 2);

    
    element.src = canvas.toDataURL("image/png");
    element.text = globalurl;
    element.href = globalurl;

    mainfeed.unshift(element);
    
    var url = "filesaver.php";        
    var httpc3 = new XMLHttpRequest();
    httpc3.open("POST", url, true);
    httpc3.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    httpc3.send("data="+encodeURIComponent(JSON.stringify(mainfeed,null,"    "))+"&filename=data/mainfeed.txt");//send text to filesaver.php    
    
}    


document.getElementById("savebutton").onclick = function(){

    document.getElementById("transferimage").src = document.getElementsByTagName("IMG")[2].src;
    

}

</script>
<style>
#transferimage{
    display:none;
    width:128px;
    height:128px;
    border:solid;
}
.button{
    cursor:pointer;
    text-align:center;
    border:solid;
    border-radius:3px;
}
.button:hover{
    background-color:green;
}
.button:active{
    background-color:yellow;
}

</style>
</body>
</html>