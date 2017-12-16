function yuvarla(sayi) {
    var yeni = sayi * 100000000;
    yeni = Math.round(yeni);
    yeni = yeni / 100000000;
    return yeni;
}

function rastgele(sayi, yuzde){
    if(!yuzde) yuzde = 10;
    var yuzdeCok = 100 + yuzde;
    var yuzdeAz = 100 - yuzde;
    var yeni = sayi * 100000000;

    var az = yeni * (yuzdeAz / 100);
    var cok = yeni * (yuzdeCok / 100);

    var sonuc = Math.floor(Math.random() * (cok - az + 1) + az);

    sonuc = Math.round(sonuc);
    sonuc = sonuc / 100000000;

    return sonuc;

}