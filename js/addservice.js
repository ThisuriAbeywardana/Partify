function displaySection(sectionId,checkbox){
    chk=document.getElementById(checkbox).checked;
    sec=document.getElementById(sectionId);
    if(chk){
        sec.style.display='block';
    }else{
        sec.style.display='none';
    }

}

function addPhoto(){

    var table = document.getElementById("tablePhoto");
    var packageName  = document.getElementById("packagePhoto").value;  
    var price  = document.getElementById("pricePhoto").value; 
    var description  = document.getElementById("descriptionPhoto").value; 

    var row=`<tr>
    <td><input type="hidden" name="typeP[]" value="${packageName}">${packageName}</td>
    <td><input type="hidden" name="priceP[]" value="${price}">${price}</td>
    <td><input type="hidden" name="descriptionP[]" value="${description}">${description}</td>
    </tr>`;
    table.innerHTML+=row;
    document.getElementById("packagePhoto").value = '';
    document.getElementById("pricePhoto").value ='';
    document.getElementById("descriptionPhoto").value = ''; 

    
}
      
function addVideo(){

    var table = document.getElementById("tableVideo");
    var packageName  = document.getElementById("packageVideo").value;  
    var price  = document.getElementById("priceVideo").value; 
    var description  = document.getElementById("descriptionVideo").value; 

    var row=`<tr>
    <td><input type="hidden" name="typeV[]" value="${packageName}">${packageName}</td>
    <td><input type="hidden" name="priceV[]" value="${price}">${price}</td>
    <td><input type="hidden" name="descriptionV[]" value="${description}">${description}</td>
    </tr>`;
    table.innerHTML+=row;
    document.getElementById("packageVideo").value = '';
    document.getElementById("priceVideo").value ='';
    document.getElementById("descriptionVideo").value = ''; 

    
}

function addDecor(){

    var table = document.getElementById("tableDecor");
    var packageName  = document.getElementById("packageDecor").value;  
    var price  = document.getElementById("priceDecor").value; 
    var description  = document.getElementById("descriptionDecor").value; 

    var row=`<tr>
    <td><input type="hidden" name="typeD[]" value="${packageName}">${packageName}</td>
    <td><input type="hidden" name="priceD[]" value="${price}">${price}</td>
    <td><input type="hidden" name="descriptionD[]" value="${description}">${description}</td>
    </tr>`;
    table.innerHTML+=row;
    document.getElementById("packageDecor").value = '';
    document.getElementById("priceDecor").value ='';
    document.getElementById("descriptionDecor").value = ''; 

    
}

function addLocation(){

    var table = document.getElementById("tableLocation");
    var packageName  = document.getElementById("packageLocation").value;  
    var price  = document.getElementById("priceLocation").value; 
    var description  = document.getElementById("descriptionLocation").value; 

    var row=`<tr>
    <td><input type="hidden" name="typeL[]" value="${packageName}">${packageName}</td>
    <td><input type="hidden" name="priceL[]" value="${price}">${price}</td>
    <td><input type="hidden" name="descriptionL[]" value="${description}">${description}</td>
    </tr>`;
    table.innerHTML+=row;
    document.getElementById("packageLocation").value = '';
    document.getElementById("priceLocation").value ='';
    document.getElementById("descriptionLocation").value = ''; 

    
}