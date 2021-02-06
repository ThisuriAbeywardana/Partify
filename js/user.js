
window.addEventListener('load', (event) => {

    //checking if the checkbox is checked

    var meal = document.getElementById("needMeal").checked;
    var needPhotography = document.getElementById("needPhotography").checked;
    var needVideography = document.getElementById("needVideography").checked;
    // console.log(document.getElementById("needDecoration"));;
    var needDecoration = document.getElementById("needDecoration").checked;
    var needLocation = document.getElementById("needLocation").checked;
    if(meal){
       document.getElementById('secMeal').style.display='block'; 
    }
    if(needPhotography){
        console.log('photo');
        document.getElementById('secPhotography').style.display='block'; 
    }
    if(needVideography){
        document.getElementById('secVideography').style.display='block'; 
    }
    if(needDecoration){
        document.getElementById('secDecoration').style.display='block'; 
    }
    if(needLocation){
        document.getElementById('secLocation').style.display='block'; 
    }
});
function displaySection(sectionId,checkbox){
    chk=document.getElementById(checkbox).checked;
    sec=document.getElementById(sectionId);
    if(chk){
        sec.style.display='block';
    }else{
        sec.style.display='none';
    }

}


function SetId(value){

    document.write(`<?php $photoId=${value} ?>`);

}
console.log('working');