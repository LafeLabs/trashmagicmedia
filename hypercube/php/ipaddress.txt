<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
    <link href="data:image/x-icon;base64,AAABAAEAEBAQAAEABAAoAQAAFgAAACgAAAAQAAAAIAAAAAEABAAAAAAAgAAAAAAAAAAAAAAAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD//wAA//8AAOADAADv+wAA7/sAAO/7AADv+wAA7/sAAO/7AADv+wAA77sAAO/fAADv7QAA4DUAAP/5AAD/4QAA" rel="icon" type="image/x-icon" />
</head>
<a href = "index.html">home</a>    
<a href = "readme.html">readme</a>    

<h1>IP Address:  
<span id = "ipaddress"><?php
$foo =  shell_exec("hostname -I");
$bar = explode(" ",$foo)[0];
echo $bar;
?></span>
</h1>

<div id = "qrcode"></div>


<script>


globalurl = "http://" + document.getElementById("ipaddress").innerHTML;

codesquaresize = 400;
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