function displaySection(sectionId,checkbox){
    chk=document.getElementById(checkbox).checked;
    sec=document.getElementById(sectionId);
    if(chk){
        sec.style.display='block';
    }else{
        sec.style.display='none';
    }

}

// function updatePhoto(){

//     var table = document.getElementById("tablePhoto");
//     var packageName  = document.getElementById("packagePhoto").value;  
//     var price  = document.getElementById("pricePhoto").value; 
//     var description  = document.getElementById("descriptionPhoto").value; 
//     var pid  = document.getElementById("pid").value;

//     var row=`<tr>
//     <td><input type="hidden" name="typeP[]" value="${packageName}">${packageName}</td>
//     <td><input type="hidden" name="priceP[]" value="${price}">${price}</td>
//     <td><input type="hidden" name="descriptionP[]" value="${description}">${description}</td>
//     <td><input type="hidden" name="idP[]" value="${pid}"></td>
//     </tr>`;
//     table.innerHTML+=row;
//     document.getElementById("packagePhoto").value = '';
//     document.getElementById("pricePhoto").value ='';
//     document.getElementById("descriptionPhoto").value = ''; 

    
// }
var alreadyExists = false;
function addPhoto(){

    var table = document.getElementById("tablePhoto");
    var packageName  = document.getElementById("packagePhoto").value;  
    var price  = document.getElementById("pricePhoto").value; 
    var description  = document.getElementById("descriptionPhoto").value; 

    if(packageName =='' || price == '' || description == '' ){
        alert('Insert valid Values');
    }else{
        if(alreadyExists){
            var currentId = document.getElementById('pid').value;  
        }else{
            var currentId = 0;
        }
        var row=`<tr>
        <td><input type="hidden" name="typeP[]" value="${packageName}">${packageName}</td>
        <td><input type="hidden" name="priceP[]" value="${price}">${price}</td>
        <td><input type="hidden" name="descriptionP[]" value="${description}">${description}</td>
        <td><input type="hidden" name="idP[]" value="${currentId}"></td></tr>`;
        table.innerHTML+=row;
        document.getElementById("packagePhoto").value = '';
        document.getElementById("pricePhoto").value ='';
        document.getElementById("descriptionPhoto").value = '';
        alreadyExists = false;
        console.log(alreadyExists);
    }
     

    
}
      



if (window.addEventListener) {
    window.addEventListener('load', run, false);
} else if (window.attachEvent) {
    window.attachEvent('onload', run);
}

    function run() {
        var t = document.getElementById('photo');
        var rows = t.rows; 
        for (var i=0; i<rows.length; i++) {
            rows[i].onclick = function (event) {
                
                var cells = this.cells;
                var a = document.getElementById('packagePhoto');
                var b = document.getElementById('pricePhoto');
                var c = document.getElementById('descriptionPhoto');
                var d = document.getElementById('pid');
                a.value = cells[0].innerHTML;
                b.value = cells[1].innerHTML;
                c.value = cells[2].innerHTML;
                d.value = cells[3].innerHTML;
                alreadyExists = true;
        };
    }
}
