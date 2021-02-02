function Click() {
    var x =  document.getElementById("pswrd");
    if(x.type == "password"){
        x.type="text";
    }
    else{
        x.type="password";
    }
 }
 

 function Validateform(){
    var name=document.myform.name.value;
    var email=document.myform.email.value;
    var password=document.myform.pswd.value;
    var regex= /[a-z]{3,5}[ ]{1}[a-z]{3,10}$/i;
    var regex2=/^[a-z]{3,10}\.[a-z]{3,15}@xaviers\.edu\.in$/i;
    var regex3=/195[0-9]{3}$/i;
    if(regex.test(name)==""){
        alert("Enter correct name");
        document.getElementById("usrname").focus();
        return false;
    }
    else if(regex2.test(email)==""){
        alert("Enter correct Email Id");
        document.getElementById("emid").focus();
        return false;
    }
    else if(regex3.test(password)==""){
        alert("Enter correct Password");
        document.getElementById("pswrd").focus();
        return false;
    }
}
 
function Validate(){
    var email=document.myform.email.value;
    var password=document.myform.pswd.value;
    var regex2=/^[a-z]{3,10}\.[a-z]{3,15}@xaviers\.edu\.in$/i;
    var regex3=/195[0-9]{3}$/i;
   
    if(regex2.test(email)==""){
        alert("Enter correct Email Id");
        document.getElementById("emid").focus();
        return false;
    }
    else if(regex3.test(password)==""){
        alert("Enter correct Password");
        document.getElementById("pswrd").focus();
        return false;
    }
}

function Login() 
 {
       location.assign("/FirstPhp/Login.php")
       return false;
 }

 function Logout() 
 {
     var answer=confirm("Logged out Successfully");
     if(!answer){
         return true;
        } 
      else{
        location.replace("/FirstPhp/Signin.php");
          return false;
      }      
 }

 function LoginProf() 
 {
       location.assign("/FirstPhp/ProfLogin.php")
       return false;
 }



    
   
 

