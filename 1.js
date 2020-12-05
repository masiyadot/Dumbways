
var hBensin = 7000;
var lBensin = 2.5;


function perjalananSales(toko, t1, t2, t3, t4){
    Toko = toko;
    toko = 8.5;
    

    if ( t1 == 'TempatA'){
        t1 = 2;
    } else if ( t1 == 'TempatB' ){
        t1 = 7;
    } else if ( t1 == 'TempatC' ){
        t1 = 8.5;
    } else if ( t1 == 'TempatD' ){
        t1 = 11;
    } else {
        t1 = 'salah memasukan alamat';
    }

    if ( t2 == 'TempatA'){
        t2 = 0;
    } else if ( t2 == 'TempatB' ){
        t2 = 5;
    } else if ( t2 == 'TempatC' ){
        t2 = 6.5;
    } else if ( t2 == 'TempatD' ){
        t2 = 9;
    } else {
        t2 = 'salah memasukan alamat';
    }

    if ( t3 == 'TempatA'){
        t3 = 5;
    } else if ( t3 == 'TempatB' ){
        t3 = 0;
    } else if ( t3 == 'TempatC' ){
        t3 = 1.5;
    } else if ( t3 == 'TempatD' ){
        t3 = 4;
    } else {
        t3 = 'salah memasukan alamat';
    }

    if ( t4 == 'TempatA'){
        t4 = 6.5;
    } else if ( t4 == 'TempatB' ){
        t4 = 1.5;
    } else if ( t4 == 'TempatC' ){
        t4 = 0;
    } else if ( t4 == 'TempatD' ){
        t4 = 2.5;
    } else {
        t4 = 'salah memasukan alamat';
    }
    
    total = t1 + t2 + t3 + 8.5;
    bent1 = t1/lBensin;
    hart1 = bent1 * hBensin;
    bent2 = t2/lBensin;
    hart2 = bent2 * hBensin;
    bent3 = t2/lBensin;
    hart3 = bent2 * hBensin;
    bent4 = t2/lBensin;
    hart4 = bent2 * hBensin;
    console.log('Toko     - Tempat A = '+t1+ 'KM  | Rp ' + hart1 + '  | '+ bent1 + ' Liter');
    console.log('Tempat A - Tempat D = '+t2+ 'KM  | Rp ' + hart2 + ' | '+ bent2 + ' Liter'); 
    console.log('Tempat D - Tempat C = '+t3+ 'KM | Rp ' + hart3 + ' | '+ bent3 + ' Liter'); 
    console.log('Tempat C - Toko     = '+toko+ 'KM | Rp ' + hart4 + ' | '+ bent4 + ' Liter');    
    return total;
}

var hasil = perjalananSales('Toko', 'TempatA', 'TempatD', 'TempatC');


var tBensin = hasil/lBensin;
var tHarga = tBensin * hBensin;
console.log('Total Jarak = ' + hasil + ' KM');
console.log('Total Bensin = ' + tBensin +' L');
console.log('Total Harga = Rp ' + tHarga);
