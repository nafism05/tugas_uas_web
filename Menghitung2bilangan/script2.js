alert("masukkan 2 angka untuk dijumlahkan");

var angka1= +prompt("masukkan angka pertama");
var angka2= +prompt("masukkan angka kedua");

var hasil = angka1+angka2;

var konfirm = confirm("apakah anda ingin melihat hasilnya?");
if(konfirm == true){
    document.write("hasil penjumlahan : "+hasil);
}else{
    document.location.href = "hello.html";

}