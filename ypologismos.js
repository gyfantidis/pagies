function myFunction1(){

  document.querySelector(".pliromi").style.visibility="visible";
  let stremata = document.getElementById("stremata").value;
  let agrotemaxia = document.getElementById("agrotemaxia").value;
  let zoikes = document.getElementById("zoikes").value;
  var pagia = document.getElementsByClassName('messageCheckbox');

  var pagioKostos= parseFloat(34.31);

  var posoStr = parseFloat(ypologismosStr(stremata).toFixed(2));
  var posoTem = parseFloat(ypologismosTem(agrotemaxia).toFixed(2));
  var posoZoa= parseFloat(ypologismosZoa(zoikes).toFixed(2));

  var posoKostos = (pagioKostos + posoStr + posoTem + posoZoa).toFixed(2);

  var kostos = parseFloat(ypologismosKost(posoKostos));

  for(var i=0; pagia[i]; ++i){
      if(pagia[i].checked){
           var posoPagia = parseFloat(ypologismosPagias(kostos).toFixed(2));

      }
      else{
          var posoPagia=parseFloat(0);
      }
}

  var posoFpa = parseFloat(ypologismosFPA(kostos, posoPagia).toFixed(2));


  var sinolo = parseFloat((kostos + posoPagia + posoFpa).toFixed(2));


  document.querySelector("#plStr").innerHTML = "Για την έκταση πληρώνετε : " + posoStr + " Ευρώ.";
  document.querySelector("#plAgr").innerHTML = "Για τα αγροτεμάχια πληρώνετε : " + posoTem + " Ευρώ.";
  document.querySelector("#plZoa").innerHTML = "Για τα ζώα πληρώνετε : " + posoZoa + " Ευρώ.";
  document.querySelector("#plKostos").innerHTML = "To κόστος της δήλωσης είναι : " + kostos + " Ευρώ.";
  document.querySelector("#plPag").innerHTML = "Το κόστος της Πάγια Εντολή είναι : " + posoPagia + " Ευρώ.";
  document.querySelector("#plFpa").innerHTML = "Tο κόστος του ΦΠΑ είναι : " + posoFpa + " Ευρώ.";
  document.querySelector("#plSinolo").innerHTML = "Σύνολο : " + sinolo + " Ευρώ.";
  document.querySelector("#plSinolo").classList.add("alert-primary");
  document.querySelector("#plSinolo").classList.add("alert");


}


function ypologismosStr(str){
  return (str * 0.83);
}



function ypologismosTem(tem){
  return (tem * 0.33);
}



function ypologismosZoa(zoa){
  if (zoa >0 && zoa <= 5){
    return 4.48;

  }
  else if(zoa > 5 && zoa <=10){
    return 8.94;

  }
  else if(zoa > 10 && zoa <=15){
    return 13.41;

  }
  else if(zoa > 15 && zoa <=20){
    return 17.89;

  }
  else if(zoa > 20 && zoa <=25){
    return 22.36;

  }
  else if(zoa > 25 && zoa <=30){
    return 26.83;

  }
  else if(zoa > 30 && zoa <=35){
    return 44.72;

  }
  else if(zoa > 35 && zoa <=80){
    return 62.6;

  }
  else if(zoa > 80){
    return 89.43;

  }
  else{
    return 0;
  }
}

function ypologismosKost(poso){
  if(poso > 179.84 ){
    return 179.84;
  }
  else{
    return poso;
  }

}

function ypologismosPagias(kos){
  if(kos<60){
    return (kos * 0.09);
  }
  else if(kos>=60 && kos<90){
    return (kos * 0.07 );
  }
  else if(kos>=90 && kos<120){
    return (kos * 0.05 );
  }
  else if(kos>=120){
    return (kos * 0.045 );
  }
}


function ypologismosFPA(kost, pag){
  return ((kost+pag) * 0.24);

}
