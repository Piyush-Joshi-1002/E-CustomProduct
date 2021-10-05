
<?php
    include "Connection.php";
?>
<script type="text/javascript">
    var BlockValue;
    var ChqDivType = false; 
    var Image1 = document.getElementById('DisignRange_customize1');
    var CheckToChange = [0,0,0,0],CheckToChangeText = [0,0,0,0];
    var TshirtChoice = localStorage.getItem('TshirtSource');
    var TshirtType = localStorage.getItem('TshirtType');
    var Designes = [];
    <?php
        $sql = "SELECT * FROM designes";
        $result = $conn->query($sql);
        error_reporting(0);
        while($row = $result->fetch_assoc()) {
            echo "Designes.push('".$row['SourcePath']."');";        
        }
    ?>
    var chqing_For_Size = false;
    var EventFor = 'mouse';
    var width;
    var width ;
    var pos_X;
    var pos_Y;
    var pos_InnerX;
    var pos_InnerY;
    var validity;
    var DesigneUsed = ["NULL","NULL","NULL","NULL"];
    function setMiddleValue(blockValue)
    {
        BlockValue = blockValue;
        switch(blockValue)
        {
            case 1: {
                var Middle = document.getElementById("DynamicAreaOfMiddle");
                Middle.innerHTML = "<h1 style='color:white'>Change TShirt Color</h1>";
                Middle.innerHTML += "<div id= 'Color_Box'><div>";
                var Color_Box = document.getElementById("Color_Box");
                //Middle.style = "display:flex; flex-wrap:wrap; margin: 5px;padding:50px;justify-content:space-between; ";
                 Color_Box.innerHTML += "<div class='tshirt-Color' id='color1' onclick=ChangeTshirtColorCustomize('232121')></div>";
                Color_Box.innerHTML  += "<div class='tshirt-Color' id='color2' onclick=ChangeTshirtColorCustomize('f00f00')></div>";
                 Color_Box.innerHTML += "<div class='tshirt-Color' id='color3' onclick=ChangeTshirtColorCustomize('f0ff00')></div>";
                Color_Box.innerHTML  += "<div class='tshirt-Color' id='color4' onclick=ChangeTshirtColorCustomize('a0db50')></div>";
                 Color_Box.innerHTML += "<div class='tshirt-Color' id='color5' onclick=ChangeTshirtColorCustomize('fcfddf')></div>";
                Color_Box.innerHTML  += "<div class='tshirt-Color' id='color6' onclick=ChangeTshirtColorCustomize('abcdef')></div>";
                 Color_Box.innerHTML += "<div class='tshirt-Color' id='color7' onclick=ChangeTshirtColorCustomize('fcdcbf')></div>";
                Color_Box.innerHTML  += "<div class='tshirt-Color' id='color8' onclick=ChangeTshirtColorCustomize('cbafed')></div>";
                 Color_Box.innerHTML += "<div class='tshirt-Color' id='color9' onclick=ChangeTshirtColorCustomize('ffffff')></div>";
                Middle.innerHTML  += "<br><h1 style='color:white'>Change Designe Size</h1>";
                Middle.innerHTML  += "<h2 style='color:white'>(fixed square formate)</h2>";
                Middle.innerHTML  += "<input type='range' id='forChangeSize' min='50' max='250' step = '5' onchange='ChangeDesigneSize_Range()'>";
                document.getElementById("Middle").style.display = "block";
                break;
            }
            case 2:
            {
                var Middle = document.getElementById("DynamicAreaOfMiddle");
                
                Middle.innerHTML = "";
                Middle.innerHTML = "<div id='Flaxbox'></div>"
                var FlaxBox = document.getElementById("Flaxbox");
                for(var i=0; i<Designes.length;i++)
                FlaxBox.innerHTML += "<div class=mainDesigne onclick=ChangeDesigneValue('"+Designes[i]+"') ><img src= 'assets/images/Disgnes/"+Designes[i]+"' width=100% height=100%></div>" ;
                document.getElementById("Middle").style.display = "block";
                break;
            }
            case 3:
            {
                
                var Middle = document.getElementById("DynamicAreaOfMiddle");
                Middle.innerHTML = "<div id='Flaxbox'></div>";
                var FlaxBox = document.getElementById("Flaxbox");
                FlaxBox.innerHTML += "<input type='file' id='UserImage' value = 'Drag Your Image' onchange='insertUserImage(event)'>";    
                document.getElementById("Middle").style.display = "block";
                break;
            }
            case 4:
            {
                
                var Middle = document.getElementById("DynamicAreaOfMiddle");
                Middle.innerHTML = "<div id='TextChanger'><div>";
                TextChanger = document.getElementById("TextChanger");
                TextChanger.innerHTML += "<h1 style='color:white'>Enter Your Text</h1>";
                TextChanger.innerHTML += "<input id='ChangeText' style='color:gray' type='text' onchange='changeText()' placeholder='Enter Your Text' name='text'><br>";
                TextChanger.innerHTML += "<h1 style='color:white'>Font Options</h1>";
                TextChanger.innerHTML += "<select id='fontSelect' name='Fonts' value='Quirko Regular'  onchange='changeFontFamily()' id='fonts'><option class='fontOptions'  style=' font-family: Quirko Regular'>Quirko Regular</option><option class='fontOptions' style=' font-family: reckless_sample;'>reckless_sample</option><option class='fontOptions'  style=' font-family: Glamourousse;'>Glamourousse</option><option class='fontOptions' style=' font-family: Glamoury-Free;'>Glamoury_Free</option><option class='fontOptions' style=' font-family: MediaBlackoutDEMO;'>MediaBlackoutDEMO</option><option class='fontOptions' style=' font-family: Mont Royal;'>Mont Royal</option><option class='fontOptions' style=' font-family: Nickainley_Normal;'>Nickainley_Normal</option><option class='fontOptions' style=' font-family: Quirko Light-Oblique;'>Quirko Light-Oblique</option><option class='fontOptions' style=' font-family: Quirko Light;'>Quirko Light</option><option class='fontOptions' style=' font-family: Reckoner;'>Reckoner</option><option class='fontOptions' style=' font-family: Reckoner_Bold;'>Reckoner_Bold</option><option class='fontOptions' style=' font-family: Recursive-Black;'>Recursive-Black</option><option class='fontOptions' style=' font-family: Recursive-SemiBold;'>Recursive-SemiBold</option></select>";
                TextChanger.innerHTML += "<h1 style='color:white'>Change Text Color</h1>";
                TextChanger.innerHTML += "<input id='colorBoxInput' style='width:90%; cursor:pointer; border-radius:150px;' value='#000000' type='color' onchange='changeTextColor()' placeholder='Enter Your Text' name='text'><br>";
                TextChanger.innerHTML +="<h1 style = 'color: white'>Change font size </h1>";
                TextChanger.innerHTML += "<input type='range' id='forChangeSizeTextRange' min='15' max='60' step = '5' value='20' onchange='ChangeDesigneSize_Range()'>";
                TextChanger.innerHTML += "<H1 style = 'color: white'>Outline Color</H1>"
                TextChanger.innerHTML += "<input id='OutlineBoxInput' style='width:90%; cursor:pointer; border-radius:150px;' value='#000000' type='color' onchange='changeTextOutline()' placeholder='Enter Your Text' name='text'><br>";
                document.getElementById("Middle").style.display = "block";    
                break;
            }
        }
    }
    function insertUserImage(event){
        let flag = 0,j;
        var selectedFile = event.target.files[0];
        var reader = new FileReader();

            for(j =0 ; j <4 ;j++)
            {
                if(CheckToChange[j] == 0)
                {
                    flag = 1;
                    CheckToChange[j] = 1;
                    break;
                }
            }
            if(flag == 0)
            {
                window.alert("Unable to add more then  " +CheckToChange.length + "  designes");
            }
            else
            {
                    document.getElementById("outerDisignDiv").innerHTML += "<div id='DisignRange_customize"+j+"'>";
                    var DisignRange = document.getElementById('DisignRange_customize'+j+'');
                    DisignRange.innerHTML += "<div  class='ForImageResize topS'  onmousedown=forResizeImage(event,'topS',"+j+",false) ontouchstart=forResizeImageForTouch(event,'topS',"+j+",false)></div>";
                    DisignRange.innerHTML += "<div  class='ForImageResize topE'  style = 'font-size : 15px;right:0px;top:-10px' onmousedown=forRemoveElement("+j+",false) >X</div>";
                    DisignRange.innerHTML += "<div  class='ForImageResize BottomS' onmousedown=forResizeImage(event,'bottomS',"+j+",false) ontouchstart=forResizeImageForTouch(event,'bottomS',"+j+",false) ></div>";
                    DisignRange.innerHTML += "<div  class='ForImageResize BottomE' onmousedown=forResizeImage(event,'bottomE',"+j+",false) ontouchstart=forResizeImageForTouch(event,'bottomE',"+j+",false)></div>";
                    DisignRange.innerHTML += "<div class = 'POSITION_CONTROL' onmousedown='ChangePosition(event,"+j+",false)' ontouchstart = 'ChangePositionForTouch(event,"+j+",false)'></div>";
                    DisignRange.innerHTML += " <img  id='myimage' src ='' alt='UserImage' width='100%' height='100%'>";

            }
            var imgtag = document.getElementById("myimage");
            reader.onload = function(event) {
                imgtag.src = event.target.result;
            };
            DesigneUsed[j] = imgtag.src;
            ImageChanger(j);
            reader.readAsDataURL(selectedFile);
        
    }
    function changeFontFamily()
    {
        let fontSelect = document.getElementById('fontSelect').value;
        Image1.style.fontFamily = fontSelect; 
    }
    function ImageChanger(i)
    {
        console.log("ImageChangeCalling");
        if(ChqDivType  == true)
        {
            ChqDivType = false;
        }
        Image1 = document.getElementById('DisignRange_customize'+i);
    }
    function ImageChangerForText(i)
    {
        if(ChqDivType  == false)
        {
            ChqDivType = true;
        }
        console.log("Here" + i);
        Image1 = document.getElementById("InsideText"+i);
    }

    function changeTextOutline()
    {     var ColorValue;
        if(document.getElementById("OutlineBoxInput").value)
        {
            ColorValue = document.getElementById("OutlineBoxInput").value;
            Image1.style.textShadow = "1px 1px 1px " + ColorValue+" , 0px 0px 1px " + ColorValue+ " , -1px -1px 1px " + ColorValue;
        }
    }
    function changeTextColor()
    {
        let ColorValue = document.getElementById("colorBoxInput").value;
        Image1.style.color = ColorValue;
    }
    

    function ChangeDesigneColor()
    {
            var color = document.getElementById("forChangedisigne").value;
            document.getElementById("DisignRange_customize").style.filter = "hue-rotate("+color+"deg)";
    }
    function ChangeTshirtColorCustomize( sorce )
    {
        document.getElementById("tshirt_Image_Customize").src = "assets/images/"+TshirtType+"/"+TshirtChoice+"/"+sorce+".png";
    }
    function ChangePosition(event,i,value)
    {
        ChqDivType = value;
        if(ChqDivType == true)
        {
            ImageChangerForText(i);
        }
        else
        {
            ImageChanger(i);    
        }
        pos_X = event.clientX;
        pos_Y = event.clientY;
        Image1.ondragstart = function() { return false; };
        
        Image1.addEventListener('mousemove',ChangingImgPos);
        
    }
    
    function ChangePositionForTouch(event,i,value)
    {
        ChqDivType = value;
        chqing_For_Size = false;
        ForRemoveMouseEvents();
        if(ChqDivType == true)
        {
            ImageChangerForText(i);
        }
        else
        {
            ImageChanger(i);    
        }
        pos_X = event.clientX;
        pos_Y = event.clientY;
        Image1.ondragstart = function() { return false; };
        
        Image1.addEventListener('touchmove',ChangingImgPosForTouch);
        
    }
    function ChangingImgPos(e)
    {
            var style = getComputedStyle(Image1);
            var Left = style.left;
            Left = parseInt(Left);
            var top =  style.top;
            top = parseInt(top);
            pos_InnerX = pos_X - e.clientX;
            pos_InnerY = pos_Y - e.clientY;
            pos_InnerX = Left - pos_InnerX;
            pos_InnerY = top - pos_InnerY;
            Image1.style.left = ""+pos_InnerX+"px";
            Image1.style.top = ""+pos_InnerY+"px";
            pos_X = e.clientX;
            pos_Y = e.clientY;
     }
    function ChangingImgPosForTouch(e)
    {

        if(chqing_For_Size == false)
        {
            ForRemoveMouseEvents();
            var style = getComputedStyle(Image1);
            var Left = style.left;
            Left = parseInt(Left);
            var top =  style.top;
            top = parseInt(top);
            pos_InnerX = pos_X - e.touches[0].clientX;
            pos_InnerY = pos_Y - e.touches[0].clientY;
            pos_InnerX = Left - pos_InnerX;
            pos_InnerY = top - pos_InnerY;
            Image1.style.left = ""+pos_InnerX+"px";
            Image1.style.top = ""+pos_InnerY+"px";
            pos_X = e.touches[0].clientX;
            pos_Y = e.touches[0].clientY;
        }
     }
    document.addEventListener("mouseup",function(){
        if(Image1 != null)
        {
            Image1.removeEventListener('mousemove',ChangingImgPos);
            document.removeEventListener("mousemove",ResizeLogic);
        }
    });
    function ForRemoveMouseEvents()
    {
        if(Image1 != null)
        {
            Image1.removeEventListener('mousemove',ChangingImgPos);
            document.removeEventListener("mousemove",ResizeLogic);
        }
    }
    document.addEventListener("touchend",function(){
        if(Image1 != null)
        {
            Image1.removeEventListener('touchmove',ChangingImgPos);
            document.removeEventListener("mousemove",ResizeLogic);
        }
    });
    var prevX,prevY,direction;
    function forRemoveElement(i,value)
    {
        ChqDivType = value;
        if(ChqDivType == true)
        {
            
            document.getElementById('InsideText'+i).remove();
            CheckToChangeText[i] = 0;
        }
        else
        {
            
            document.getElementById('DisignRange_customize'+i).remove();
            CheckToChange[i] = 0;
            DesigneUsed[i] = "NULL";
        }
    }
    
    var forLoop = 0;      
    function forResizeImage(e,Directionvalue,i,value)
    {
        ChqDivType = value;
        if(ChqDivType == true)
        {
            ImageChangerForText(i);
            
        }
        else
        {
            ImageChanger(i);    
        }
        prevX = e.clientX;
        prevY = e.clientY;
        direction = Directionvalue;
        document.addEventListener("mousemove",ResizeLogic);
        //document.addEventListener("touchstart",ResizeLogicForTouch)
    }
    var forLoop = 0;      
    function forResizeImageForTouch(e,Directionvalue,i,value)
    {
        ChqDivType = value;
        ForRemoveMouseEvents();
        chqing_For_Size = true;
        if(ChqDivType == true)
        {
            ImageChangerForText(i);
            
        }
        else
        {
            ImageChanger(i);    
        }
        prevX = e.clientX;
        prevY = e.clientY;
        direction = Directionvalue;
        document.addEventListener("touchmove",ResizeLogicForTouch)
    }
    function ResizeLogic(e){     
        const rect = getComputedStyle(Image1);
        var width = parseInt(rect.width);
        var height = parseInt(rect.height);
        var top =  parseInt(rect.top);
        var left = parseInt(rect.left);
        if(ChqDivType == false)
        {
          var fontSize = parseInt(rect.fontSize);
        }
        if (direction == "bottomE") {
            Image1.style.width = width - (prevX - e.clientX) + "px";
            Image1.style.height = height - (prevY - e.clientY) + "px";
            if(ChqDivType == false)
            {
                let size = 0;
                if(forLoop >= 4)
                {
                    size = fontSize -(prevY - e.clientY);
                    fontSize = size;
                    forLoop = 0;
                }
                else
                {
                    forLoop++;

                }

                if(size > 15 && size < 50)
                    Image1.style.fontSize = size + "px";
            }
        } 
        else if (direction == "bottomS") {
            Image1.style.width = width + (prevX - e.clientX) + "px";
            Image1.style.height = height - (prevY - e.clientY) + "px";
            Image1.style.left = left - (prevX - e.clientX) + "px";
            if(ChqDivType == false)
            {

                let size = 0;

                if(forLoop >= 4)
                {
                    size = fontSize -(prevY - e.clientY);
                    fontSize = size;
                    forLoop = 0;
                }
                else
                {
                    forLoop++;
                }

                if(size > 15 && size < 50)
                    Image1.style.fontSize = size + "px";
            }
        }
        else if (direction == "topE") {
            Image1.style.width = width - (prevX - e.clientX) + "px";
            Image1.style.height = height + (prevY - e.clientY) + "px";
            Image1.style.top = top - (prevY - e.clientY) + "px";
            if(ChqDivType == false)
            {
                let size = 0;
                
                if(forLoop >= 4)
                {
                    size = fontSize + (prevY - e.clientY);
                    fontSize = size;
                    forLoop = 0;
                }
                else
                {
                    forLoop++;
                    
                }
                if(size > 15 && size < 50)
                    Image1.style.fontSize = size + "px";
            }
        }
        
        else {
            Image1.style.width = width + (prevX - e.clientX) + "px";
            Image1.style.height = height + (prevY - e.clientY) + "px";
            Image1.style.top = top - (prevY - e.clientY) + "px";
            Image1.style.left = left - (prevX - e.clientX) + "px";
            if(ChqDivType == false)
            {
                let size = 0;

                if(forLoop >= 4)
                {
                    size = fontSize +(prevY - e.clientY);
                    fontSize = size;
                    forLoop = 0;
                }
                else
                {
                    forLoop++;

                }
                if(size > 15 && size < 50)
                    Image1.style.fontSize = size + "px";
            }
        } 
         
        var width = parseInt(rect.width);
        if(width >=50 && width<= 250  && BlockValue == 1 && ChqDivType == false)
        {
          document.getElementById("forChangeSize").value = width;
        }
      prevX = e.clientX;
      prevY = e.clientY;
    
    }
    function ResizeLogicForTouch(e){
      if(chqing_For_Size == true)
      {   
          Image1.removeEventListener('touchmove',ChangingImgPos);     
          const rect = getComputedStyle(Image1);
          var width = parseInt(rect.width);
          var height = parseInt(rect.height);
          var top =  parseInt(rect.top);
          var left = parseInt(rect.left);
          var ClientX = parseInt(e.touches[0].clientX);
          var ClientY = parseInt(e.touches[0].clientY);
          if(ChqDivType == true)
          {
              var fontSize = parseInt(rect.fontSize);
          }
            if (direction == "bottomE") {
                
                Image1.style.width = width - (prevX - ClientX) + "px";
                Image1.style.height = height - (prevY - ClientY) + "px";
                if(ChqDivType == true)
                {
                    let size = 0;
                    if(forLoop >= 4)
                    {
                        size = fontSize -(prevY - ClientY);
                        fontSize = size;
                        forLoop = 0;
                    }
                    else
                    {
                        forLoop++;

                    }

                    if(size > 15 && size < 50)
                        Image1.style.fontSize = size + "px";
                }
            } 
            else if (direction == "bottomS") {
                Image1.style.width = width + (prevX - ClientX) + "px";
                Image1.style.height = height - (prevY - ClientY) + "px";
                Image1.style.left = left - (prevX - ClientX) + "px";
                if(ChqDivType == true)
                {

                    let size = 0;

                    if(forLoop >= 4)
                    {
                        size = fontSize -(prevY - ClientY);
                        forLoop = 0;
                    }
                    else
                    {
                        forLoop++;
                    }

                    if(size > 15 && size < 50)
                        Image1.style.fontSize = size + "px";
                }
            }
            else if (direction == "topE") {
                Image1.style.width = width - (prevX - ClientX) + "px";
                Image1.style.height = height + (prevY - ClientY) + "px";
                Image1.style.top = top - (prevY - ClientY) + "px";
                if(ChqDivType == true)
                {

                    let size = 0;

                    if(forLoop >= 4)
                    {
                        size = fontSize +(prevY - ClientY);
                        forLoop = 0;
                    }
                    else
                    {
                        forLoop++;
                    }

                    if(size > 15 && size < 50)
                        Image1.style.fontSize = size + "px";
                }
          } 
          else {
            Image1.style.width = width + (prevX - ClientX) + "px";
            Image1.style.height = height + (prevY - ClientY) + "px";
            Image1.style.top = top - (prevY - ClientY) + "px";
            Image1.style.left = left - (prevX - ClientX) + "px";
            if(ChqDivType == true)
            {

                let size = 0;
                
                if(forLoop >= 4)
                {
                    size = fontSize +(prevY - ClientY);
                    forLoop = 0;
                }
                else
                {
                    forLoop++;
                }

                if(size > 15 && size < 50)
                    Image1.style.fontSize = size + "px";
            }
          }
          var width = parseInt(rect.width);
          if(width >=50 && width<= 250  && BlockValue == 1 && ChqDivType == false)
          {
              document.getElementById("forChangeSize").value = width;
          }
          prevX = ClientX;
          prevY = ClientY;
      }
    }
    function ChangeDesigneValue(Value)
    {
        	let flag = 0,j;
            for(j =0 ; j <4 ;j++)
            {
                if(CheckToChange[j] == 0)
                {
                    flag = 1;
                    CheckToChange[j] = 1;
                    break;
                }
            }
            if(flag == 0)
            {
                window.alert("Unable to add more then  " +CheckToChange.length + "  designes");
            }
            else
            {
                            document.getElementById("outerDisignDiv").innerHTML += "<div id='DisignRange_customize"+j+"'>";
                            var DisignRange = document.getElementById('DisignRange_customize'+j+'');
                            DisignRange.innerHTML += "<div  class='ForImageResize topS'  onmousedown=forResizeImage(event,'topS',"+j+",false) ontouchstart=forResizeImageForTouch(event,'topS',"+j+",false)></div>";
                            DisignRange.innerHTML += "<div  class='ForImageResize topE'  style = 'font-size : 15px;right:0px;top:-10px' onmousedown=forRemoveElement("+j+",false) >X</div>";
                            DisignRange.innerHTML += "<div  class='ForImageResize BottomS' onmousedown=forResizeImage(event,'bottomS',"+j+",false) ontouchstart=forResizeImageForTouch(event,'bottomS',"+j+",false) ></div>";
                            DisignRange.innerHTML += "<div  class='ForImageResize BottomE' onmousedown=forResizeImage(event,'bottomE',"+j+",false) ontouchstart=forResizeImageForTouch(event,'bottomE',"+j+",false)></div>";
                            DisignRange.innerHTML += "<div class = 'POSITION_CONTROL' onmousedown='ChangePosition(event,"+j+",false)' ontouchstart = 'ChangePositionForTouch(event,"+j+",false)'></div>";
                            DisignRange.innerHTML += " <img  id='Designes' src ='assets/images/Disgnes/"+Value+"' width='100%' height='100%'>";

            }
        
            ImageChanger(j);
            DesigneUsed[j] = Value;
    }
    
    function changeText()
    {
        if(ChqDivType == false)
        {
            ChqDivType = true;
        }
        let flag = 0,j;
        for(j =0 ; j <4 ;j++)
        {
            if(CheckToChangeText[j] == 0)
            {
                flag = 1;
                CheckToChangeText[j] = 1;
                break;
            }
        }
        
        if(flag == 1)
        {
            document.getElementById("outerDisignDiv").innerHTML += "<div class ='InsideText' id='InsideText"+j+"'>";
            var InsideTextDiv = document.getElementById("InsideText"+j+"");
            InsideTextDiv.innerHTML += "<div  class='ForImageResize topS'  onmousedown=forResizeImage(event,'topS',"+j+",true) ontouchstart=forResizeImageForTouch(event,'topS',"+j+",true)></div>";
            InsideTextDiv.innerHTML += "<div  class='ForImageResize topE'  style = 'font-size : 18px; right:4px; top:-6px' onmousedown=forRemoveElement("+j+",true) >X</div>";
            InsideTextDiv.innerHTML += "<div  class='ForImageResize BottomS' onmousedown=forResizeImage(event,'bottomS',"+j+",true) ontouchstart=forResizeImageForTouch(event,'bottomS',"+j+",true) ></div>";
            InsideTextDiv.innerHTML += "<div  class='ForImageResize BottomE' onmousedown=forResizeImage(event,'bottomE',"+j+",true) ontouchstart=forResizeImageForTouch(event,'bottomE',"+j+",true)></div>";
            InsideTextDiv.innerHTML += "<div class = 'POSITION_CONTROL' onmousedown='ChangePosition(event,"+j+",true)' ontouchstart = 'ChangePositionForTouch(event,"+j+",true)'></div>";
            InsideTextDiv.innerHTML += "<span id='InnerSpan'>"+document.getElementById('ChangeText').value+"</span>";
        }
        else
        {
            window.alert ("Unable to add more then " +CheckToChangeText.length + " Text's");
        }
        ImageChangerForText(j);
    }
    function ChangeDesigneSize_Range()
    {
        console.log("This is working " + BlockValue + " " + ChqDivType + " " )
        if(BlockValue == 1 && ChqDivType == false){
            Image1.style.width = document.getElementById("forChangeSize").value +"px";
            Image1.style.height = document.getElementById("forChangeSize").value +"px";
        }
        else if(BlockValue == 4 && ChqDivType == true)
        {
            var RangeValue = document.getElementById("forChangeSizeTextRange").value;
            Image1.style.width = RangeValue*3.5 +"px";
            Image1.style.height = RangeValue*4 + "px";
            Image1.style.fontSize = RangeValue+"px";
        
        }
    }
    function saveDataToBuy(OrderType) {
        window.scrollTo(0, 0);  
        
        var quantity = document.getElementById("Quantity").value;
        var UserID = localStorage.getItem('USERID');
        var ArtistID;
        if(localStorage.getItem("ArtistID"))
        {
            ArtistID = localStorage.getItem("ArtistID");
        }
        else
        {
            ArtistID = "0";
        }
        document.getElementById('AddToCartDiv').style.display = 'none';
        console.log(""+UserID+"");
        createCookie("quantity",quantity,10);
        createCookie("TshirtChoice", TshirtChoice,10)
        createCookie("TshirtType", TshirtType,10)
        createCookie("UserID",UserID,10);
        createCookie("DataTable",'buyproducts',10);
        createCookie("ProductName",'custom Tshirt',10);
        createCookie("folderName",'uploads',10);
        createCookie("ArtistID",ArtistID,10);
        createCookie("OrderType",OrderType,10);
        var ajax = new XMLHttpRequest();
        
        html2canvas(document.getElementById("tshirt_Container_Customize")).then(function (canvas) {
          var ajax = new XMLHttpRequest();
          ajax.open("POST", "save-capture.php", true);
          ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          ajax.send("image=" + canvas.toDataURL("image/jpeg", 0.9));
          ajax.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                if(this.responseText.trim() == "Done")
                {
                    alert("Your Product saved successfully , we will contect you as soon as possible");
                }
                else
                {
                    alert ("There was an error on saving Your Data , Plz Chq your Connection, or try again after some time");
                    console.log(""+this.responseText.trim()+"");
                }
            }
          };
        });
          
      }
    function saveDataToCart() {
        let i =0;
        let Design = "false";
        for(i = 0; i<4 ;i++)
        {
            if(DesigneUsed[i].length > 12)
            {
                Design = "true";
            }
        }
        window.scrollTo(0, 0);  
        console.log(" " + TshirtChoice + " " + TshirtType);
        var quantity = document.getElementById("Quantity").value;
        var UserID = localStorage.getItem('USERID');
        var ArtistID;
        var OrderType = "false";
        if(localStorage.getItem("ArtistID"))
        {
            ArtistID = localStorage.getItem("ArtistID");
        }
        else
        {
            ArtistID = "0";
        }
        document.getElementById('AddToCartDiv').style.display = 'none';
        console.log(""+UserID+"");
        createCookie("DesigneUsed",Design,10);
        createCookie("quantity",quantity,10);
        createCookie("TshirtChoice", TshirtChoice,10)
        createCookie("TshirtType", TshirtType,10)
        createCookie("UserID",UserID,10);
        createCookie("folderName",'CartItems',10);
        createCookie("ProductName",'Custom Tshirt',10);
        createCookie("DataTable",'addtocart',10);
        createCookie("ArtistID",ArtistID,10);
        createCookie("OrderType",OrderType,10);
        var ajax = new XMLHttpRequest();
        html2canvas(document.getElementById("tshirt_Container_Customize")).then(function (canvas) {
            var ajax = new XMLHttpRequest();
            ajax.open("POST", "save-capture.php", true);
            ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            if(Design == "true")
            {
                ajax.send("image=" + canvas.toDataURL("image/jpeg", 0.9));
            }
            else
            {
                ajax.send("image=" + canvas.toDataURL("image/jpeg", 0.9));
            }
            ajax.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        if(this.responseText.trim() == "Done")
                        {
                            alert("Your Product Added succeffully , Chq your cart For confirmation");
                        }
                        else
                        {
                            alert ("There was an error on saving Your Data , Plz Chq your Connection, or try again after some time");
                            console.log(""+this.responseText.trim()+"");
                        }
                    }
                };
        });
          
      }
    function createCookie(name, value, seconds) { 
        var expires; 

        if (seconds) { 
            var date = new Date(); 
            date.setTime(date.getTime() + (seconds* 60 * 1000)); 
            expires = "; expires=" + date.toGMTString(); 
        } 
        else { 
            expires = ""; 
        } 

        document.cookie = escape(name) + "=" +  
            escape(value) + expires + "; path=/"; 
    } 
</script>