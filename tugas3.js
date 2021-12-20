function hasil(){
    var Harga=parseInt(document.getElementById('Harga').value);
    var Jumlah=parseInt(document.getElementById('Jumlah').value);
    var Total = Harga*Jumlah;
    document.getElementById("Total").innerHTML=Total;
    var dis=0.10;
    var Pembayaran;
    if(Total>200000){
        Pembayaran=Total-(Total*dis);
        document.getElementById("Pembayaran").value=Pembayaran;
        document.getElementById("dis").value="10%";
    }else{
        document.getElementById("Pembayaran").value=Total;
        document.getElementById("dis").value="0%";
    }
}

