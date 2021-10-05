var TshirtCatagory = "Male";
if(localStorage.getItem("Catagory"))
{
    TshirtCatagory = localStorage.getItem("Catagory");
    console.log(TshirtCatagory);
}
var TshirtType = "halfSleeve";
var Tshirt_Designe = "Tattoo1.png";
localStorage.setItem("DesigneUsed","Tattoo1.png");
var UserDesign = "False";
if(localStorage.getItem("MarketDesigne"))
{
    Tshirt_Designe = localStorage.getItem("MarketDesigne");
    console.log(Tshirt_Designe);
    UserDesign = "False";
    localStorage.setItem("DesigneUsed",Tshirt_Designe);
}
window.onload = function(){
    console.log("onload call");
}
function ChangeTshirtColor(color)
{
    document.getElementById("tshirt_Image").src = "assets/images/"+TshirtCatagory+"/"+TshirtType+"/"+color+".png";
}
function ChangeDesignes(tattoo)
{
    UserDesign = "False";
    localStorage.setItem("DesigneUsed",tattoo);
    document.getElementById('Designes').src = "assets/images/Disgnes/"+tattoo;
}
function ChangeTshirt(Type)
{
    TshirtType = Type;
    document.getElementById("tshirt_Image").src = "assets/images/"+TshirtCatagory+"/"+TshirtType+"/ffffff.png";
}
function UploadImgae(event)
{
        let flag = 0,j;
        var selectedFile = event.target.files[0];
        var reader = new FileReader();
        var imgtalihlg = document.getElementById("Designes");
        reader.onload = function(event) {
            imgtag.src = event.target.result;
            UserDesign = "True";
            localStorage.setItem("DesigneUsed",imgtag.src);
        };
        
        reader.readAsDataURL(selectedFile);
        console.log(""+document.getElementById("Designes").src+"");
}
function sellMyProduct()
{
    window.scrollTo(0, 0);
    var productname = document.getElementById('productName').value;
    var productDescription = document.getElementById('productDescription').value;
    var productPrice = document.getElementById('productPrice').value;
    var UserID = localStorage.getItem('USERID');
    if(productname=="")
    {
        alert("Please Enter Product name");
    }
    else if(productDescription=="")
    {
        alert("Please Describe your Product (For Good sell) ");
    }
    else
    {
        if(TshirtCatagory == "Male")
        {
            createCookie("DataTable",'maleproductsforsale',10);
            createCookie("folderName",'MaleProductForSell',10);
        }
        else if(TshirtCatagory == "Female")
        {
            createCookie("DataTable",'femaleproductsforsale',10);
            createCookie("folderName",'FemaleProductForSell',10);
        }
        createCookie("TshirtChoice",TshirtType ,10);
        createCookie("TshirtType", TshirtCatagory,10);
        createCookie("UserID",UserID,10);
        createCookie("productname",productname,10);
        createCookie("productDescription",productDescription,10);
        createCookie("productPrice",productPrice,10);
        createCookie("UserDesign",UserDesign,10);
        var ajax = new XMLHttpRequest();
        html2canvas(document.getElementById("tshirt_Container")).then(function (canvas) {
          var ajax = new XMLHttpRequest();
          ajax.open("POST", "SaveDataforSellProduct.php", true);
          ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          ajax.send("image=" + canvas.toDataURL("image/jpeg", 0.9)+"&DesigneUsed="+localStorage.getItem("DesigneUsed"));
          ajax.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
              if(this.responseText.trim() == "Done")
                {
                    window.alert("Your Product Sucessfully registered");
                    document.getElementById('ProductDetailsForm').style.display = 'none';
                }
                else
                {
                    window.alert("Error to register your product ");
                    console.log(""+this.responseText.trim());
                }
            }
          };
        });
    }
}
function SelectedChoices(Choice)
{
    if(Choice == "M")
    {
        createCookie("TshirtCatagory","Male",60);
        createCookie("TshirtType","all",60);
    }
    else if(Choice == "F")
    {
        createCookie("TshirtCatagory","Female",60);
        createCookie("TshirtType","all",60);
    }
    location.href = "SellOptions.php";
}
function RefranceToSellPage(S_NO,ProductName,ProductDetails,Price,UserID,TshirtType,foldername,DesigneUsed)
{
    localStorage.setItem("Product_No",S_NO);
    localStorage.setItem("ProductName",ProductName);
    localStorage.setItem("ProductDetails",ProductDetails);
    localStorage.setItem("Price",Price);
    localStorage.setItem("ArtistID",UserID);
    localStorage.setItem("TshirtType",TshirtType);
    localStorage.setItem("foldername",foldername);
    localStorage.setItem("DesigneUse",DesigneUsed);
    location.href ="SellPage.php";
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