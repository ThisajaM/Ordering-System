function ValidateLogin()
{
    var Username = document["Login"]["Username"].value;
    if (Username =="") 
    {
        alert("Username must be filled out");
        return false;
    }
    var Password = document["Login"]["Password"].value;
    if (Password =="") 
    {
        alert("Password must be filled out");
        return false;
    }
    return true;
}

function ValidateCreateAcc() 
{
    var FName = document["CreateAcc"]["FName"].value;
    var LName = document["CreateAcc"]["LName"].value;
    var namePattern = /^[A-Za-z ]+$/; 
    var Add = document["CreateAcc"]["Add"].value;
    var DOB = document.querySelector('input[type="date"]').value;
    var today = new Date();
    var selectdate = new Date(DOB);
    var gender = document.getElementsByName("gender");
    var selected = false;
    var Email = document.forms["CreateAcc"]["Email"].value;
    var atpos = Email.indexOf("@gmail");
    var dotpos = Email.lastIndexOf(".com");
    var CNum = document["CreateAcc"]["CNum"].value;
    var UName = document["CreateAcc"]["UName"].value;
    var Passw = document["CreateAcc"]["Passw"].value;
    var CPassw = document["CreateAcc"]["CPassw"].value;
    var Checkbox = document.forms["CreateAcc"]["Checkbox"];

    if (FName === "") 
    {
        alert("First Name must be filled out");
        return false;
    }

    if (LName === "") 
    {
        alert("Last Name must be filled out");
        return false;
    }

    if (!namePattern.test(FName) || !namePattern.test(LName)) 
    {
        alert("Names should contain only letters and spaces.");
        return false;
    }

    if (FName.length > 50 || LName.length > 50) 
    {
        alert("Names should be less than 50 characters.");
        return false;
    }

    if (Add === "") 
    {
        alert("Address must be filled out");
        return false;
    }

    if (DOB.trim() === "") 
    {
        alert("Please enter your Date Of Birth");
        return false;
    }
    
    if (isNaN(selectdate.getTime())) 
    {
        alert("Please enter a valid Date Of Birth");
        return false;
    }

    if (selectdate >= today) 
    {
        alert("Please Enter a Valid Date Of Birth");
        return false;
    }

    for (var i = 0; i < gender.length; i++) 
    {
        if (gender[i].checked) 
        {
            selected = true;
            break;
        }
    }

    if (!selected) 
    {
        alert("Please select a gender");
        return false;
    }

    if (Email === "") 
    {
        alert("Email must be filled out");
        return false;
    }

    if(atpos < 1 || (dotpos - atpos < 2))
    {
        alert("Please enter correct Email")
        return false;
    }

    if(CNum == "" || isNaN(CNum) || CNum.length!=10)
    {
        alert("Please enter valid Contact Number");
        return false;
    }

    if(UName == "")
    {
        alert("Username must be filled out");
        return false;
    }

    if(Passw == "" || Passw.length!==8)
    {
        alert("Please enter valid Password");
        return false;
    }
    if(Passw!==CPassw)
    {
        alert("Password is not matching");
        return false;
    }
    if (Checkbox.checked === false) 
    {
        alert("Please agree to our terms and conditions");
        return false;
    }
    else
    {
        alert("Your Account created Successfully")
    }
    return true;
}

function ValidateDonate() 
{
    var FName = document["Donate"]["FName"].value;
    var namePattern = /^[A-Za-z ]+$/;
    var Add = document["Donate"]["Add"].value;
    var Email = document.forms["Donate"]["Email"].value;
    var atpos = Email.indexOf("@gmail");
    var dotpos = Email.lastIndexOf(".com");
    var CNum = document["Donate"]["CNum"].value;
    var Amo = document.Donate.Amo.value;

    if (FName === "") {
        alert("Name must be filled out");
        return false;
    }

    if (!namePattern.test(FName) || FName.length > 50) 
    {
        alert("Invalid Name");
        return false;
    }

    if (Add === "") 
    {
        alert("Address must be filled out");
        return false;
    }
    if (Email === "") 
    {
        alert("Email must be filled out");
        return false;
    }

    if(atpos < 1 || (dotpos - atpos < 2))
    {
        alert("Please enter correct Email")
        return false;
    }
    
    if(CNum === "" || isNaN(CNum) || CNum.length!=10 )
    {
        alert("Please enter valid Contact Number");
        return false;
    }
    if(Amo === "" || isNaN(Amo))
    {
        alert("Please enter valid Amount");
        return false;
    }
    else
    {
        alert("Your Amount Donated Successfully.Thank you!!")
    }
    
    return true;
}
function ValidateOrder()
{
    var FName = document["Order"]["FName"].value;
    var namePattern = /^[A-Za-z ]+$/;
    var Add = document["Order"]["Add"].value;
    var Email = document.forms["Order"]["Email"].value;
    var atpos = Email.indexOf("@gmail");
    var dotpos = Email.lastIndexOf(".com");
    var CNum = document["Order"]["CNum"].value;
    var cardNum = document["Order"]["cardNum"].value;
    var cvvNum = document["Order"]["cvvNum"].value;

    if (FName === "") {
        alert("Name must be filled out");
        return false;
    }

    if (!namePattern.test(FName) || FName.length > 50) 
    {
        alert("Invalid Name");
        return false;
    }

    if (Add === "") 
    {
        alert("Address must be filled out");
        return false;
    }
    if (Email === "") 
    {
        alert("Email must be filled out");
        return false;
    }

    if(atpos < 1 || (dotpos - atpos < 2))
    {
        alert("Please enter correct Email")
        return false;
    }
    
    if(CNum === "" || isNaN(CNum) || CNum.length!=10 )
    {
        alert("Please enter valid Contact Number");
        return false;
    }
    if(cardNum === "" || isNaN(cardNum) || cardNum.length!=16 )
    {
        alert("Please enter valid Card Number");
        return false;
    }
    if(cvvNum === "" || isNaN(cvvNum) || cvvNum.length!=3 )
    {
        alert("Please enter valid CVV Number");
        return false;
    }
    else
    {
        alert("Your Order Placed Successfully.Thank you!!")
    }
    
    return true;
}
function ValidateAdmin()
{
    var APin = document.Admin.APin.value;

    if (APin === "" || APin !== "101010") {
        alert("Incorrect Admin Pin");
        return false;
    }
    return true;
}
