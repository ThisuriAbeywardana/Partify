window.addEventListener('load', (event) => {
  button3 = document.getElementById('adminregisterbtn');
  button3.disabled = true;  
});

function checkPassword3(){
    var pass5 =document.getElementById('psw').value;
    var pass6 =document.getElementById('psw_repeat').value;

    if(pass5 == pass6){
      button3.disabled = false;
      document.getElementById('passtext3').style.color = 'green';
      document.getElementById('passtext3').innerHTML = 'Password is Matching';
    }else{
      button3.disabled = true;
      document.getElementById('passtext3').style.color = 'red';
      document.getElementById('passtext3').innerHTML = 'Password is not Matching';
    }
}