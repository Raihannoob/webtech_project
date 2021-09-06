function productNameValidation()
{
    const name= document.getElementById('pname').value;
    if(name == ""){
        document.getElementById('spname').innerHTML = 'Please Fill up Product name field ';        
    }
    else if(name.length <2){
        document.getElementById('spname').innerHTML = 'Product Name required at least two letters';   
    }
    else if (name >= 'a' && name <= 'z' || name >= 'A' && name <= 'Z') {
        document.getElementById('spname').innerHTML = "you can use This Name";
     }
    
    else{
        document.getElementById('spname').innerHTML =   'Product Name is invalid';
    }
}


function QuantityValidate() {
    const Quantity = document.getElementById('Stock').value;
    
    if (Quantity == '') {
        document.getElementById('sStock').innerHTML = 'Please Fillup Quantity field ';
    }  
    else {
        document.getElementById('sStock').innerHTML =  Quantity;
    }
}

function mrpValidate() {
    const bprice = document.getElementById('MRP').value;
    
    if (bprice == '') {
        document.getElementById('sMRP').innerHTML = 'Please Fillup Buy price field ';
    }  
    else {
        document.getElementById('sMRP').innerHTML =  bprice;
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
        document.getElementById('sptype').innerHTML = 'Please Fillup Product Type field ';
    }  
    else {
        document.getElementById('sptype').innerHTML = stype;
    }

 }
 function validateform(){  
       const name= document.getElementById('pname').value;
    const Quantity = document.getElementById('Stock').value;
      const bprice = document.getElementById('MRP').value;
      const sprice = document.getElementById('Mannufacture').value;
      const stype = document.getElementById('ptype').value;
        
      if (name==null || name==""){  
        alert("Name can't be blank");  
        return false;  
      }
      else if (Quantity==null || Quantity=="") {
        alert("Quantity name can not be blank");
        return false;
      }
     
     else if (bprice==null || bprice=="") {
        alert("Mrp Fill emtpy");
       return false;
     }
     
      else if (sprice==null || sprice=="") {
        alert("Mannufacture can not be blank");
        return false;
      }
      else if (stype==null || stype=="") {
        alert("Product Tyoe  can not be blank");
        return false;
      }
          
    
      else {
          alert("Are You Sure You Want to Submit?");
          return true;
     }
          
      
     

    }