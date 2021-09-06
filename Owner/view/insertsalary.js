function emptypevalidation()
{
    const name= document.getElementById('ename').value;
    if(name == ""){
        document.getElementById('spname').innerHTML = 'Please Fill up Name field ';        
    }
    else if(name.length <2){
        document.getElementById('spname').innerHTML = 'Name required at least two letters';   
    }
    else if (name >= 'a' && name <= 'z' || name >= 'A' && name <= 'Z') {
        document.getElementById('spname').innerHTML = "you can use This Name";
     }
    
    else{
        document.getElementById('spname').innerHTML =   'Name is invalid';
    }
}

function ammountValidate() {
    const Quantity = document.getElementById('ammount').value;
    
    if (Quantity == '') {
        document.getElementById('spquantity').innerHTML = 'Please Fillup ammount field ';
    }  
    else {
        document.getElementById('spquantity').innerHTML =  Quantity;
    }
}

function monthValidate() {
    const bprice = document.getElementById('month').value;
    
    if (bprice == '') {
        document.getElementById('spbprice').innerHTML = 'Please Fillup month field ';
    }
    else if (bprice >= 'a' && bprice <= 'z' || bprice >= 'A' && bprice <= 'Z') {
        document.getElementById('spbprice').innerHTML = "you can use This month";
     }
    else{
        document.getElementById('spbprice').innerHTML =   'month is invalid';
    }
}


function validateform(){  
      const name= document.getElementById('ename').value;
      const sprice = document.getElementById('month').value; 
      const bprice = document.getElementById('ammount').value;

      
        
      if (name==null || name==""){  
        alert("Name can't be blank");  
        return false;  
      }
      else if (Quantity==null || Quantity=="") {
        alert("Month  can not be blank");
        return false;
      }
     
     else if (bprice==null || bprice=="") {
        alert("Ammount can not be blank");
       return false;
     }
     
      else if (sprice==null || sprice=="") {
        alert("Sell price can not be blank");
        return false;
     }
      else {
          alert("Are You Sure You Want to Submit?");
          return true;
     }
          
      
     

    }