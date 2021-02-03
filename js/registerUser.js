function userType() {
    
    var select =  document.getElementById('type').value;
    var user= document.getElementById('user');
    var vendor= document.getElementById('vendor');

    if(select=='user'){
      vendor.style.display='none';
      user.style.display='block';
    }else if(select=='vendor'){
      user.style.display='none';
      vendor.style.display='block';
    }else{
      user.style.display='none';
      vendor.style.display='none';
    }
}


window.addEventListener('load', (event) => {
  button1 = document.getElementById('vendorRegisterBtn');
  button2 = document.getElementById('userRegisterBtn');
button1.disabled = true;
button2.disabled = true;
});

function checkPassword(){
  var pass1 =document.getElementById('vPsw').value;
  var pass2 =document.getElementById('vPsw-repeat').value;
  if(pass1 === pass2){
    button1.disabled = false;
    button2.disabled = false;
  }else{
    button1.disabled = true;
    button2.disabled = true;
  }
}

