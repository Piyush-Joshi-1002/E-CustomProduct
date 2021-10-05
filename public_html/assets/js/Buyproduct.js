    function saveDataToBuy(OrderType) {
        var Product_No = localStorage.getItem("Product_No");
        var ProductName = localStorage.getItem("ProductName");
        var ProductDetails = localStorage.getItem("ProductDetails");
        console.log("This is calling Really");
        var quantity = document.getElementById("Quantity").value;
        var Price = localStorage.getItem("Price");
        var ArtistID;
        if(localStorage.getItem("ArtistID"))
        {
            ArtistID = localStorage.getItem("ArtistID");
        }
        else
        {
            ArtistID = "0";
        }
        Price *=quantity;
        var UserID = localStorage.getItem("USERID");
        var ArtistID = localStorage.getItem("ArtistID");
        var TshirtType = localStorage.getItem("TshirtType");
        var foldername = localStorage.getItem("foldername");
        document.getElementById('AddToCartDiv').style.display = 'none';
        console.log(""+UserID+"");
        createCookie("UserID",UserID,10);
        createCookie("Product_No",Product_No,10);
        createCookie("ProductName", ProductName,10)
        createCookie("ProductDetails", ProductDetails,10)
        createCookie("Price",Price,10);
        createCookie("DataTable",'buyproducts',10);
        createCookie("quantity",quantity,10);
        createCookie("folderName",'uploads',10);
        createCookie("MoveFolder",foldername,10);
        createCookie("ArtistID",ArtistID,10);
        createCookie("OrderType",OrderType,10);
        if(localStorage.getItem('DesigneUse'))
        {
            createCookie("DesigneUsed",localStorage.getItem('DesigneUse'),10);
        }
        else
        {
            createCookie("DesigneUsed","NULL",10);    
        }
        var ajax = new XMLHttpRequest();
          ajax.open("POST", "saveToTable.php", true);
          ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          ajax.send();
          ajax.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                if(this.responseText.trim()=="File has been moved!")
                {
                    alert("Your product saved successfully");
                }
                else
                {
                    alert("Their was an error in on saving data,please refresh and try again");
                    console.log(""+this.responseText.trim()+"");
                }
            }
          };
        console.log("Hit the like button");
        }
        
function saveDataToCart() {
    var Product_No = localStorage.getItem("Product_No");
    var ProductName = localStorage.getItem("ProductName");
    var ProductDetails = localStorage.getItem("ProductDetails");
    var quantity = document.getElementById("Quantity").value;
    var Price = localStorage.getItem("Price");
    if(localStorage.getItem('DesigneUse'))
    {
        createCookie("DesigneUsed",localStorage.getItem('DesigneUse'),10);
    }
    else
    {
        createCookie("DesigneUsed","NULL",10);    
    }
    Price *=quantity;
    var UserID = localStorage.getItem("USERID");
    var ArtistID = localStorage.getItem("ArtistID");
    var TshirtType = localStorage.getItem("TshirtType");
    var foldername = localStorage.getItem("foldername");
    
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

    createCookie("UserID",UserID,10);
    createCookie("Product_No",Product_No,10);
    createCookie("ProductName", ProductName,10)
    createCookie("ProductDetails", ProductDetails,10)
    createCookie("Price",Price,10);
    createCookie("DataTable",'addtocart',10);
    createCookie("quantity",quantity,10);
    createCookie("folderName",'CartItems',10);
    createCookie("MoveFolder",foldername,10);
    createCookie("ArtistID",ArtistID,10);
    createCookie("OrderType",'false',10);
    var ajax = new XMLHttpRequest();
      ajax.open("POST", "saveToTable.php", true);
      ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      ajax.send();
      ajax.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            if(this.responseText.trim()=="File has been moved!")
            {
                alert("Your product saved successfully");
            }
            else
            {
                alert("Their was an error in on saving file , please refresh and try again");
                console.log(this.responseText);
            }
        }
      };  
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