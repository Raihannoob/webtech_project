function employeeNameValidation()
{
    const name= document.getElementById('ename').value;
 
 
    if(name == ''){
        document.getElementById('sname').innerHTML = 'Please Enter Employye name field ';        
    }
    
    else if (name >= 'a' && name <= 'z' || name >= 'A' && name <= 'Z') {
        document.getElementById('sname').innerHTML = name;
    }
        
 else if(name.length <2){
        document.getElementById('sname').innerHTML = 'Name required at least two letters';   
    }
    
    else{
        document.getElementById('sname').innerHTML =   'Employye name is invalid';
    }
}

function EmployeePostValidation()
{
    const name= document.getElementById('ePost').value;
 
 
    if(name == ''){
        document.getElementById('spost').innerHTML = 'Please Fillup Employee Post field ';        
    }
    
    else if (name >= 'a' && name <= 'z' || name >= 'A' && name <= 'Z') {
        document.getElementById('spost').innerHTML = name;
     }
    
    else{
        document.getElementById('spost').innerHTML =   'Employeee Post  Name is invalid';
    }
}

function branchValidation()
{
    const name= document.getElementById('branch').value;
 
 
    if(name == ''){
        document.getElementById('sbranch').innerHTML = 'Please Enter Branch name field ';        
    }
    
    else if (name >= 'a' && name <= 'z' || name >= 'A' && name <= 'Z') {
        document.getElementById('sbranch').innerHTML = name;
     }
    
    else{
        document.getElementById('sbranch').innerHTML =   'Branch name is invalid';
    }
}


function validateform(){  
      
        const name= document.getElementById('ename').value;
        const ePost = document.getElementById('ePost').value;
        const branch= document.getElementById('branch').value;
        
      if (name==null || name==""){  
        alert("Name can't be blank");  
        return false;  
      }
      else if (ePost==null || ePost=="") {
        alert("Quantity name can not be blank");
        return false;
      }
     
     else if ( branch ==null ||  branch =="") {
        alert("Branch can not be blank");
       return false;
     }
      else {
          alert("Are You Sure You Want to Submit?");
          return true;
     }

     

    }