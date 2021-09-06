function NameValidation()
{
    const name= document.getElementById('pname').value;
    if(name == ""){
        document.getElementById('spname').innerHTML = 'Please Fill up User name field ';        
    }
    else if(name.length <2){
        document.getElementById('spname').innerHTML = 'Product Name Username at least two letters';   
    }
    else if (name >= 'a' && name <= 'z' || name >= 'A' && name <= 'Z') {
        document.getElementById('spname').innerHTML = "you can use This Name";
     }
    
    else{
        document.getElementById('spname').innerHTML =   'Name is invalid';
    }
}


function commentValidate() {
    const Quantity = document.getElementById('Stock').value;
    
    if (Quantity == '') {
        document.getElementById('sStock').innerHTML = 'Please Fillup Comment field ';
    }  
    else {
        document.getElementById('sStock').innerHTML =  Quantity;
    }
}

function PriorityValidate() {
    const sprice = document.getElementById('Mannufacture').value;
    
    if (sprice == '') {
        document.getElementById('sMannufacture').innerHTML = 'Please Fillup Priority field ';
    }  
    else {
        document.getElementById('sMannufacture').innerHTML = sprice;
    }
}

function userTypeValidate(){
    

const stype = document.getElementById('ptype').value;
    
    if (stype == '') {
        document.getElementById('sptype').innerHTML = 'Please Fillup User Type field ';
    }  
    else {
        document.getElementById('sptype').innerHTML = stype;
    }

 }
 function validateform(){  
       const name= document.getElementById('pname').value;
    const Quantity = document.getElementById('Stock').value;
      const sprice = document.getElementById('Mannufacture').value;
      const stype = document.getElementById('ptype').value;
        
      if (name==null || name==""){  
        alert("Name can't be blank");  
        return false;  
      }
      else if (Quantity==null || Quantity=="") {
        alert(" Comment can not be blank");
        return false;
      }
     
      else if (sprice==null || sprice=="") {
        alert("Priority can not be blank");
        return false;
      }
      else if (stype==null || stype=="") {
        alert("User Tyoe  can not be blank");
        return false;
      }
          
    
      else {
          alert("Are You Sure You Want to Submit?");
          return true;
     }
          
      
     

    }