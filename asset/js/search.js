function recherche(){
    //declaration des variable
    var table,textvalue,filter,input,td,tr,i;
    input=document.getElementById("myinput");
    filter=input.Value.toUppercase("");
    table=document.getElementsByClassName("table");
    tr=table.getElementsBytagdepartement("tr");
    // tr=table.getElementsBytagprojectname("tr");
   
    // tr=table.getElementsBytagnameintern("tr");
    //Parcourez toutes les lignes du tableau et masquez celles qui ne correspondent pas à la requête de recherche
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagdepartement("td")["0"];
        if (td) {
          txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().table0(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none"   
          }
        }
    }
}