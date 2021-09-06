function validateform(){  
      const old = document.getElementById('oldpassword').value;
      const newp = document.getElementById('newpassword').value;
      const rep = document.getElementById('repass').value;
     
     if (old == null || old == "") {
        alert("old Password can't be blank");  
        return false; 
     }
     
     else if (newp == null || newp == "") {
         alert("New Password Field can't be blank");  
        return false;
     } 
    else if (rep == null || rep == "") {
        alert("Repassowrd Field can't be blank");  
        return false;
     }
    
     else {
         alert("Are You Sure You Want to Submit?");
          return true;
     }

}
    

function validateoldepassword() {
    
    const old = document.getElementById('oldpassword').value;

    if (old == null || old == "") {
         document.getElementById('sold').innerHTML = '**Please Fillup This field ';
    }
    else if (old.length <8) {

         document.getElementById('sold').innerHTML = '**Password  must be Gereater then 8 charecter';
         
    }
      else {
         document.getElementById('sold').innerHTML = "**Now Fill up New Password";
    }
    

}

function validatenewepassword() {
    const old = document.getElementById('oldpassword').value;
    const newp = document.getElementById('newpassword').value;
if (newp == null || newp == "") {
    document.getElementById('snew').innerHTML = '**Please Fillup This field ';
    }
else if (newp == old) {
    document.getElementById('snew').innerHTML = "**New Password should not be same as the Current Password";
    }
     else if (newp.length <8) {

         document.getElementById('snew').innerHTML = '**New Password  must be Gereater then 8 charecter';
         
     }  
    else {
         document.getElementById('snew').innerHTML = "**You can use this password";
    }


}
 function validateRepassword(){
	const newp = document.getElementById('newpassword').value;
    const rep = document.getElementById('repass').value;
			
			if(rep == ""){
				document.getElementById('sre').innerHTML = "**Please Fillup confirm password field ";
			}
			else if(rep != newp){
				document.getElementById('sre').innerHTML = "**Confirm password didnot match";
			}
			else{
				document.getElementById('sre').innerHTML = "**Confirm Password Matched ! ";
			}
}