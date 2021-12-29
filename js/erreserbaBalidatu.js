function balidatu(){
    var check = true;
    var data = document.erreserbatu.data.value;
    var kopurua = document.erreserbatu.kopurua.value;
    var izena = document.erreserbatu.izena.value;
    var abizena = document.erreserbatu.abizena.value;
    var eposta = document.erreserbatu.eposta.value;
    var tlf = document.erreserbatu.tlf.value;
   
    //Data balidatu
    if(data.length == 0){
        alert("Data bat aukeratu!");
        console.log("Data bat aukeratu");
        return false;
    }
    //Pertsona kopurua balidatu
    if(kopurua == 0){
        alert("Kopurua 0 baino handiagoa izan behar da!");
        console.log("Kopurua 0 baino handiagoa izan behar da");
        return false;
    }
    //Izena balidatu
    if(izena.length == 0){
        alert("Izena jarri behar duzu!");
        console.log("Izena jarri behar duzu");
        return false;
    }
    //Abizena balidatu
    if(abizena.length == 0){
        alert("Abizena jarri behar duzu!");
        console.log("Abizena jarri behar duzu");
        return false;
    }
    //E-maila balidatu
    if(eposta.length == 0){
        alert("E-maila jarri behar duzu!");
        console.log("E-maila jarri behar duzu");
        return false;
    }
    //Telefonoa balidatu
    if(tlf.length == 0){
        alert("Telefonoa jarri behar duzu!");
        console.log("Telefonoa jarri behar duzu");
        return false;
    }
    //Telefonoa balidatu
    if(tlf.length != 9){
        alert("9 zenbakiko telefonoa jarri behar duzu!");
        console.log("9 zenbakiko telefonoa jarri behar duzu");
        return false;
    }
    alert("Erreserba ondo egin duzu!");
    console.log("Erreserba ondo egin duzu");
    return false;
}