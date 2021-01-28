function jsFunction1(value) {
    
var select =  document.getElementById('selecttagid'). value;
var user= document.getElementById('userDivid');
var vendor= document.getElementById('vendorDivid');

If(select=='user'){
  Vendor.style.display='none';
  user.style.display='block';
}
If(select=='vendor'){
  user.style.display='none';
  Vendor.style.display='block';
}

}
console.log('working');
}

