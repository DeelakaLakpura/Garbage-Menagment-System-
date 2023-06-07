function x()
{
    if (document.my.fname.value.length <1)
        {window.alert("Please add firstname!")
        return;}
    if (document.my.lname.value.length <1)
        {window.alert("Please add a lastname!")
        return;}
    if (document.my.phone.value.length <10)
        {window.alert("Please add a valid Phone number")
        return;}

    if (document.my.email.value.length <1)
        {window.alert("Please add email")
        return;}
    if (document.my.password.value.length <1)
        {window.alert("Please add password")
        return;}
    var a=document.my.email.value.indexOf("@");
    var b=document.my.email.value.lastIndexOf(".");
    if(a<1 || b-a<2 || b+2>=email.length)
    {
      window.alert("Invalid Email address");
    }



   
}