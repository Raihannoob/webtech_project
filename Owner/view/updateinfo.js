function namevalidation() {
    const name = document.getElementById('fullname').value;
        
    if (name == null || name == "") {
        document.getElementById('sname').innerHTML = '**Please Fillup Name field ';
    }
    else if (name.charAt(0) >= 0 && name.charAt(0) <= 9) {
        document.getElementById('sfullname').innerHTML = "**Username must start with a letter";
    }
    else if (name.length <4) {

         document.getElementById('sfullname').innerHTML = '**Name must be Gereater then 4 charecter';
         
     } 
        
    else {
         document.getElementById('sfullname').innerHTML = "**You can use this Username";
    }
}

function validateid() {
    const id = document.getElementById('id').value;
     if (id == null || id == "") {
        document.getElementById('sid').innerHTML = '**You Cant Edit This';
     }
      
     else {
         document.getElementById('sid').innerHTML = '**You cant use Edit This';
    }
}

function validateEmail() {
    const email = document.getElementById('email').value;
     if (email == null || email == "") {
        document.getElementById('semail').innerHTML = '**Please Fillup Email field ';
     }
    else if(email.length <5 ){
		document.getElementById('semail').innerHTML = '**Email is invalid !';	
     }
    else if(email.includes("@gmail.com")){
		document.getElementById('semail').innerHTML = '**Email seems valid ';
		     }
    else if(email.includes("@yahoo.com")){
		document.getElementById('semail').innerHTML = '**Email seems valid ';
		     }
    else if( email.includes("@.edu")){
		document.getElementById('semail').innerHTML = '**Email seems Valid';
		     }	
     else {
         document.getElementById('semail').innerHTML = '**Email is invalid';
    }
}

function validateGender() {
    const gender = document.getElementById('gender').value;
     if (gender == null || gender == "") {
        document.getElementById('sgender').innerHTML = '**Please Fillup Gender field ';
     }
    
     else {
         document.getElementById('sgender').innerHTML = gender;
    }
}

function validateform(){  
      const name = document.getElementById('fullname').value;
   const id = document.getElementById('id').value;
    const gender = document.getElementById('email').value;
     const email = document.getElementById('email').value;
     if (name == null || name == "") {
        alert("Name can't be blank");  
        return false; 
     }
     
     else if (email == null || email == "") {
         alert("Email can't be blank");  
        return false;
     } 
    else if (id == null || id == "") {
        alert("ID can't be blank");  
        return false;
     }
    
   else if (gender == null ||gender == "") {
        alert("Gender can't be blank");  
        return false;
    }
     else {
         alert("Are You Sure You Want to Submit?");
          return true;
     }

    }

