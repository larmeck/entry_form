function formValidate() {

      //creating variables from user inputs in the form
      var isFullname = document.getElementById("fullNameId").value;
      var isEmail = document.getElementById("emailId").value;
      var isPassword = document.getElementById("studentPasswordId").value;
      var isConfirmPassword = document.getElementById("confirmPasswordId").value;
      var isAdmnNumber = document.getElementById("admNumberId").value;
      var isEstate = document.getElementById("estateId").value;
      var isgender= document.getElementById("genderId").value;
      var isProgramLanguage= document.getElementById("proLangId").value;

      //creating a datastring to hold the created variables

   var dataString = 'theName=' + isFullname + '&theEmail=' + isEmail +'&thePassword=' + isPassword +  "&theConfirmPassword=" + isConfirmPassword +  '&theAdmNumber=' + isAdmnNumber + '&theEstate='+ isEstate + "&theGender=" + isgender + "&theProgLanguage=" + isProgramLanguage;


   //setting full name conditions to validate the form
   if (isFullname==''||isFullname.length>50||isFullname.length<5){
      document.getElementById("message").innerHTML = "**Type your name correctly!";
         return false;
   }

  //setting email conditions to validate the form
  if (isEmail==''||isEmail.length>50||isEmail<10||isEmail.includes(',')||isEmail.indexOf("@")<=0||isEmail.includes(' ')){
   document.getElementById("message1").innerHTML = "**Invalid email address!";
      return false;
  }

//setting password conditions to validate the form
   if ( isPassword.length<6||isPassword.length>16||isPassword.includes(123)||isPassword.includes(isFullname)){
      document.getElementById("message2").innerHTML = "**Weak Password!";
   return false;
}

//setting  confirm password conditions to validate the form

if (isConfirmPassword !==  isPassword){
   document.getElementById("message3").innerHTML = "**Password mismatch!";
return false;
}


//setting  admission number conditions to validate the form

if (isAdmnNumber.length<3||isAdmnNumber.length>5){
   document.getElementById("message4").innerHTML = "**Wrong admission number!";
   return false;
}



   //Check if password is less than 6 characters\
   //Check if password contains "123"
   // Check if password contains first name of / reject
   else{
      // AJAX code to submit form.
      $.ajax({
      type:"POST",
      url:"dbInsert.php",
      data: dataString,
      cache:false,
      
      success: function (html){
         alert(html);
      }
            })
return false;
      }

   }
