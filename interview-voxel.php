<?php
echo "<pre>";

    //case 1
    echo "<br> case 1 <br>";
    $input = "jika input yang dimasukkan";
    $vocal = ["a","i", "u", "e", "o"];
    $length = strlen($input);
    for ($i=0; $i<$length; $i++) {
        if(in_array($input[$i], $vocal)){
            if($input[$i] != "i"){
                $input[$i] = "i";
            }
        }
    }

    echo $input;

    //case 2
    echo "<br> case 2 <br>";
    $nilai = [];
    $nilai["rudi"] = ["sejarah" => 8, "matematika" => 7, "sosiologi" => 6, "kewarganegaraan" => 9];
    $nilai["ani"] = ["sejarah" => 5, "matematika" => 8, "sosiologi" => 9, "kewarganegaraan" => 6];
    $hasil = ["rudi" => 0, "ani" => 0];
    foreach($nilai["rudi"] as $mapel => $angka){
        if($angka > $nilai["ani"][$mapel]){
            $hasil["rudi"]++; 
        }else if($angka < $nilai["ani"][$mapel]){
            $hasil["ani"]++; 
        }
    }
    print_r($hasil);

    //case 3
    echo "<br> case 3 <br>";
    $kata1 = "kodok";
    $kata2 = "kaca";
    $kata1Arr = str_split($kata1);
    $kata2Arr = str_split($kata2);
    $kata1Rev = implode("", array_reverse($kata1Arr));
    $kata2Rev = implode("", array_reverse($kata2Arr));
    $hasilKata1 = "salah";
    $hasilKata2 = "salah";
    if($kata1 == $kata1Rev){
        $hasilKata1 = "benar";
    }
    if($kata2 == $kata2Rev){
        $hasilKata2 = "benar";
    }
    echo "input ". $kata1 ." -> output " . $hasilKata1."<br>";
    echo "input ". $kata2 ." -> output " . $hasilKata2."<br>";

    echo "<br> case 4 <br>";
    // case 4 (array & integer)
    // menghapus nilai yang sama
    // data: [23, 45, 67, 90, 23, 1, 6, 90, 12, 43, 90, 67]
    // perintah: jika kita menemukan nilai yang sama maka hapus nilai tersebut dan sisakan satu nilai yang tersisa
    // output yang diharapkan:
    // [23, 45, 67, 90, 1, 6, 12, 43]

    $data = [23, 45, 67, 90, 23, 1, 6, 90, 12, 43, 90, 67];
    $output = [];
    foreach($data as $v){
        if(!in_array($v, $output)){
            $output[] = $v;
        }
    }
    print_r($output);

    echo "<br> case 5 <br>";
    // case 5 (array & integer)
    // mengurutkan dari nilai kecil ke nilai yang lebih besar dan menghapus nilai yang sama
    // data: [4, 5, 8, 9, 0, 2, 8, 2, 11, 15, 2, 9, 0]
    // perintah: jika kita menemukan nilai yang lebih kecil maka taruh nilai tersebut di depan dan jika menemukan nilai yang sama hapus nilai tersebut
    // output yang diharapkan:
    // [0, 2, 4, 5, 8, 9, 11, 15]
    $data = [4, 5, 8, 9, 0, 2, 8, 2, 11, 15, 2, 9, 0];
    $output = [];
    foreach($data as $v){
        if(!in_array($v, $output)){
            $output[] = $v;
        }
    }
    sort($output);
    print_r($output);

    echo "<br> case 6 <br>";
    // case 6
    // Booking kursi bioskop
    // Data kursi penonton
    // [
    //     {"1A", "2A", "3A", "4A", "5A", "6A", "7A", "8A", "9A", "10A"},
    //     {"1B", "2B", "3B", "4B", "5B", "6B", "7B", "8B", "9B", "10B"},
    //     {"1C", "2C", "3C", "4C", "5C", "6C", "7C", "8C", "9C", "10C"},
    //     {"1D", "2D", "3D", "4D", "5D", "6D", "7D", "8D", "9D", "10D"},
    //     {"1E", "2E", "3E", "4E", "5E", "6E", "7E", "8E", "9E", "10E"},
    //     {"1F", "2F", "3F", "4F", "5F", "6F", "7F", "8F", "9F", "10F"},
    //     {"1G", "2G", "3G", "4G", "5G", "6G", "7G", "8G", "9G", "10G"},
    //     {"1H", "2H", "3H", "4H", "5H", "6H", "7H", "8H", "9H", "10H"},
    //     {"1I", "2I", "3I", "4I", "5I", "6I", "7I", "8I", "9I", "10I"},
    //     {"1J", "2J", "3J", "4J", "5J", "6J", "7J", "8J", "9J", "10J"}
    // ]
    // Andi telah memesan tiket untuk nonton film Spiderman HomeComing dan dia mendapatkan kursi 5I. Lakukan perubahan nilai kursi sesuai nomor kursi yang didapatkan Andi, ex: ‘5I – booked’

    $datakursi = [
        ["1A", "2A", "3A", "4A", "5A", "6A", "7A", "8A", "9A", "10A"],
        ["1B", "2B", "3B", "4B", "5B", "6B", "7B", "8B", "9B", "10B"],
        ["1C", "2C", "3C", "4C", "5C", "6C", "7C", "8C", "9C", "10C"],
        ["1D", "2D", "3D", "4D", "5D", "6D", "7D", "8D", "9D", "10D"],
        ["1E", "2E", "3E", "4E", "5E", "6E", "7E", "8E", "9E", "10E"],
        ["1F", "2F", "3F", "4F", "5F", "6F", "7F", "8F", "9F", "10F"],
        ["1G", "2G", "3G", "4G", "5G", "6G", "7G", "8G", "9G", "10G"],
        ["1H", "2H", "3H", "4H", "5H", "6H", "7H", "8H", "9H", "10H"],
        ["1I", "2I", "3I", "4I", "5I", "6I", "7I", "8I", "9I", "10I"],
        ["1J", "2J", "3J", "4J", "5J", "6J", "7J", "8J", "9J", "10J"]
    ];
    $booked = ["5I"];

    foreach($datakursi as $idxBaris => $baris){
        foreach($baris as $idxKursi => $kursi){
            if(in_array($kursi, $booked)){
                $datakursi[$idxBaris][$idxKursi] = $kursi. " - Booked";
            }
        }
    }
    print_r($datakursi);
    
    // case 7 
    echo "<br> case 7 <br>";
    // perintah: tentukan berapa jumlah uang pecahan, samakan dengan uang pecahan yang ada di Indonesia
    // input: 72500
    // output: 50000, 20000, 2000, 200. 200, 100
    $inputUang = 72500;
    $outputUang = [];
    $availableNominal = [100000, 50000, 20000, 10000, 5000, 2000, 1000, 500, 200, 100];
    foreach($availableNominal as $nominal){
        $sisa = $inputUang - $nominal;
        if($sisa >= 0){
            $outputUang[] = $nominal;
            $inputUang = $sisa;
        }
    }
    print_r($outputUang);
    print_r("output => " . implode(", ",$outputUang));

    // case 8
    // pertama ada button start, ketika diclick masuk menu permainannya, ada 3 column nah per column itu kamu kasih angka atau gambar terserah kalian, dan juga ada tombol spin, ketika tombol spin diklik nilai 3 column tadi random, dan jika berhenti dan nilai tersebut sama maka mendapatkan reward atau hadiah. 
    // perintah: buatlah sebuah flowchart untuk menggambarkan alur tersebut.
    // jawaban nya ada di file docx.

    // case 9
    // perintah: dari ketiga table di atas, tuliskan perintah SQL untuk menampilkan semua data dari ke tiga table tersebut dengan hanya 1 perintah SQL tanpa menggunakan JOIN
    echo "<br> case 9 <br>";
    echo "select * from user union select * from profile union select * from jabatan";

    // case 10
    // perintah: dari ketiga table di atas, buatlah sebuah table untuk merepresentasikan user punya beberapa jabatan dan masa berlaku jabatannya. Tuliskan juga perintah SQL untuk menampilkan datanya
    echo "<br> case 10 <br>";
    echo "structur tabel ada di file docx <br>";
    echo "select * from user u left join user_jabatan uj on u.id = uj.user_id left join jabatan j on uj.jabatan_id = j.id <br>";

    echo "</pre>";

?>