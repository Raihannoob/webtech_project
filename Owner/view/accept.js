function productNameValidation()
{
    const name= document.getElementById('pname').value;
    if(name == ""){
        document.getElementById('spname').innerHTML = 'You cant Edit This';        
    }
    else if(name.length <2){
        document.getElementById('spname').innerHTML = 'You cant Edit This';   
    }
    else if (name >= 'a' && name <= 'z' || name >= 'A' && name <= 'Z') {
        document.getElementById('spname').innerHTML = 'You cant Edit This';
     }
    
    else{
        document.getElementById('spname').innerHTML =   'You cant Edit This';
    }
}

function MannufactureValidate() {
    const sprice = document.getElementById('Mannufacture').value;
    
    if (sprice == '') {
        document.getElementById('sMannufacture').innerHTML = 'Please Fillup Mannufacture field ';
    }  
    else {
        document.getElementById('sMannufacture').innerHTML = sprice;
    }
}

function ProductTypeValidate(){
    

const stype = document.getElementById('ptype').value;
    
    if (stype == '') {
        document.getElementById('sptype').innerHTML = 'You cant Edit This';
    }  
    else {
        document.getElementById('sptype').innerHTML = stype;
    }

 }
 function validateform(){  
      const sprice = document.getElementById('Mannufacture').value;
      if (sprice==null || sprice ==""){  
        alert("Action can't be blank");  
        return false;  
      }
     
      else {
          alert("Are You Sure You Want to Submit?");
          return true;
     }
          
      
     

    }