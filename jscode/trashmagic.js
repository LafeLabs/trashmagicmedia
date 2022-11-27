function listfiles(domelement,folder){
    files = [];
    var httpcimages = new XMLHttpRequest();
    httpcimages.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            files = JSON.parse(this.responseText);
            var locallinks = [];
            for(var index = 0;index < files.length;index++){
                var newa = document.createElement("A");
                newa.href = folder + "/" + files[index];
                newa.innerHTML = files[index];
                domelement.appendChild(newa);
                locallinks.push(newa);
            }
            rainbow(locallinks);
        }
    };
    httpcimages.open("GET", "dir.php?filename=" + folder, true);
    httpcimages.send();
    
}

function listimages(domelement,folder){

    images = [];
    var httpcimages = new XMLHttpRequest();
    httpcimages.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        images = JSON.parse(this.responseText);
            for(var index = 0;index < images.length;index++){
                var newimg = document.createElement("IMG");
                newimg.src = folder + "/" + images[index];
                domelement.appendChild(newimg);   
            }
        }
    };
    httpcimages.open("GET", "dir.php?filename=" + folder, true);
    httpcimages.send();
    
}


function rainbowstring(localelement){
    text = localelement.innerHTML;
    localelement.innerHTML = "";
    n = text.length;
    for(var index = 0; index < n; index++){
        var newspan = document.createElement("SPAN");    
        newspan.innerHTML = text.charAt(index);
    
        H = index*360/n;
        z = 255*(1 - Math.abs((H/60)%2 - 1));
    
        if(H < 60){
            red = 255;
            green = Math.round(z);
            blue = 0;
        }
        if(H >= 60 && H < 120){
            red = Math.round(z);
            green = 255;
            blue = 0;
        }
        if(H >= 120 && H < 180){
            red = 0;
            green = 255;
            blue = Math.round(z);
        }
        if(H >= 180 && H < 240){
            red = 0;    
            green = Math.round(z);
            blue = 255;
        }
        if(H >= 240 && H < 300){
            red = Math.round(z);    
            green = 0;
            blue = 255;
        }
        if(H >= 300 && H < 360){
            red = 255;    
            green = 0;
            blue = Math.round(z);
        }
        
        redstring = red.toString(16);
        if(redstring.length < 2){
            redstring = "0" + redstring;    
        }
        greenstring = green.toString(16);
        if(greenstring.length < 2){
            greenstring = "0" + greenstring; 
        }
        bluestring = blue.toString(16);
        if(bluestring.length < 2){
            bluestring = "0" + bluestring; 
        }
        color = "#" + redstring + greenstring + bluestring;   
        newspan.style.color = color;
        localelement.appendChild(newspan);
    }
    

}
function rainbow(localarray){
    n = localarray.length;
    theta = 0;
    for(var index = 0;index < n;index++){
    
        H = index*360/n;
        z = 255*(1 - Math.abs((H/60)%2 - 1));
    
        if(H < 60){
            red = 255;
            green = Math.round(z);
            blue = 0;
        }
        if(H >= 60 && H < 120){
            red = Math.round(z);
            green = 255;
            blue = 0;
        }
        if(H >= 120 && H < 180){
            red = 0;
            green = 255;
            blue = Math.round(z);
        }
        if(H >= 180 && H < 240){
            red = 0;    
            green = Math.round(z);
            blue = 255;
        }
        if(H >= 240 && H < 300){
            red = Math.round(z);    
            green = 0;
            blue = 255;
        }
        if(H >= 300 && H < 360){
            red = 255;    
            green = 0;
            blue = Math.round(z);
        }
        
        redstring = red.toString(16);
        if(redstring.length < 2){
            redstring = "0" + redstring;    
        }
        greenstring = green.toString(16);
        if(greenstring.length < 2){
            greenstring = "0" + greenstring; 
        }
        bluestring = blue.toString(16);
        if(bluestring.length < 2){
            bluestring = "0" + bluestring; 
        }
        color = "#" + redstring + greenstring + bluestring;
        //console.log(color);
        localarray[index].style.backgroundColor = color;// + "80";
        localarray[index].style.borderColor = color;
    }
}
