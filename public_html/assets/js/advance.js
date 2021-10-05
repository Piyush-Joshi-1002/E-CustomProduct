var CustomerChoice;
function ShowChoices(stringValue)
{
    console.log(""+stringValue);
    if(stringValue == 'M')
    {
        document.getElementById('Option1Img').src = 'assets/images/Male/halfSleeve/ffffff.png';
        document.getElementById('Option2Img').src = 'assets/images/Male/longSleeve/ffffff.png';
        document.getElementById('Option3Img').src = 'assets/images/Male/withoutSleeve/ffffff.png';
        document.getElementById('ShowChoicesForCustomize').style.display = 'block';
        CustomerChoice = 'Male';
    }
    else if(stringValue == 'F')
    {
        document.getElementById('Option1Img').src = 'assets/images/Female/halfSleeve/ffffff.png';
        document.getElementById('Option2Img').src = 'assets/images/Female/longSleeve/ffffff.png';
        document.getElementById('Option3Img').src = 'assets/images/Female/withoutSleeve/ffffff.png';
        document.getElementById('ShowChoicesForCustomize').style.display = 'block';
        CustomerChoice = 'Female';
    }
}
        
function RedirectToCustomeProductPage(TshirtSource)
{
    localStorage.setItem("TshirtSource", TshirtSource);
    localStorage.setItem('TshirtType',CustomerChoice);
    location.href= 'Customize.php';
}
function CreateAccountVisible()
{
    document.getElementById("SignInAccount").style.display = "none";
    document.getElementById("CreateAccount").style.display = "block";
    
}
function SignInAccountVisible()
{

    document.getElementById("SignInAccount").style.display = "block";
    document.getElementById("CreateAccount").style.display = "none";
}
