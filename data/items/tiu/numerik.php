<?php
// Menampilkan dan melaporkan error
error_reporting(E_ALL);
ini_set('display_errors', true);

require '../require/functions.php';

$mathVariable = createVariableArray(26);
$itemArray = array();
//===================Items================================
$mathVariable['a'] = (random_int(9,100) + (random_int(1,9) / 10)) * 1000;
$mathVariable['b'] = random_int(3, 15);
$mathVariable['c'] = random_int($mathVariable['b']+1, ($mathVariable['b']+2)*2);
$mathVariable['d'] = $mathVariable['b'] / $mathVariable['c'];
// correct_answer
$mathVariable['e'] = $mathVariable['a'] * $mathVariable['c'] / $mathVariable['b'];
// distractor
$mathVariable['f'] = $mathVariable['a'] * $mathVariable['c'] / ($mathVariable['b']+1);
$mathVariable['g'] = $mathVariable['a'] * ($mathVariable['c']+1) / $mathVariable['b'];
$mathVariable['h'] = $mathVariable['a'] * ($mathVariable['c']-1) / ($mathVariable['b']-1);
$mathVariable['i'] = $mathVariable['a'] * ($mathVariable['c']-1) / $mathVariable['b'];
// question
$itemArray[0] = [
        "number" => 1,
        "question" => "Setya mentransfer uangnya sebesar Rp".number_format($mathVariable['a'],2,',','.')." ke rekening Ade yang merupakan ".number_format($mathVariable['d'] * 100, '2',',','.')."% dari total uang yang dimilikinya. Berapakah total uang yang dimiliki Setya dalam rekeningnya?",
        "options" => [
            ["option" => "Rp".number_format($mathVariable['e'], '2',',','.'), "isTrue" => 1],
            ["option" => "Rp".number_format($mathVariable['f'],2,',','.'), "isTrue" => 0],
            ["option" => "Rp".number_format($mathVariable['g'], 2,',','.'), "isTrue" => 0],
            ["option" => "Rp".number_format($mathVariable['h'],2,',','.'), "isTrue" => 0],
            ["option" => "Rp".number_format($mathVariable['i'],2,',','.'), "isTrue" => 0],
        ],
];

$mathVariable['a'] = random_int(2,99) * 1000;
$mathVariable['b'] = random_int(($mathVariable['a']/2)/1000, ($mathVariable['a']*2)/1000) * 1000;
$mathVariable['c'] = $mathVariable['b'] === $mathVariable['a'];
while($mathVariable['c'] === true) {
    $mathVariable['b'] = random_int(($mathVariable['a']/2)/1000, ($mathVariable['a']*2)/1000);
    $mathVariable['c'] = $mathVariable['b'] === $mathVariable['a'];
}
$mathVariable['d'] = $mathVariable['b'] > $mathVariable['a'] ? "untung" : "rugi";
// correct_answer
$mathVariable['e'] = abs(($mathVariable['b']/1000) - ($mathVariable['a']/1000)) / ($mathVariable['a']/1000) * 100;
// distractor
$mathVariable['f'] = abs(($mathVariable['b']/1000) + 1 - ($mathVariable['a']/1000)) / ($mathVariable['a']/1000) * 100;
$mathVariable['g'] = abs(($mathVariable['b']/1000) - ($mathVariable['a']/1000)) / ($mathVariable['a']/1000 + 1) * 100;
$mathVariable['h'] = abs(($mathVariable['b']/1000) - 1 - ($mathVariable['a']/1000)) / ($mathVariable['a']/1000) * 100;
$mathVariable['i'] = abs(($mathVariable['b']/1000) - 2 - ($mathVariable['a']/1000)) / ($mathVariable['a']/1000 - 1) * 100;
// question
$itemArray[1] = [
    "number" => 2,
    "question" => "Aldo membeli suatu barang dengan harga Rp".number_format($mathVariable['a'],2,',','.').". Aldo kemudian menjual kembali barang tersebut dengan harga Rp".number_format($mathVariable['b'], 2,',','.').". Berapa persen ke".$mathVariable['d']."an hasil penjualan Aldo?",
    "options" => [
        ["option" => number_format($mathVariable['g'],2,',','.')."%", "isTrue" => 0],
        ["option" => number_format($mathVariable['f'],2,',','.')."%", "isTrue" => 0],
        ["option" => number_format($mathVariable['e'],2,',','.')."%", "isTrue" => 1],
        ["option" => number_format($mathVariable['h'],2,',','.')."%", "isTrue" => 0],
        ["option" => number_format($mathVariable['i'],2,',','.')."%", "isTrue" => 0],
    ],
];

$mathVariable['a'] = random_int(3,99) * 1000;
$mathVariable['b'] = random_int(11,85);
// correct_answer
$mathVariable['c'] = 100 * $mathVariable['a'] / (100 + $mathVariable['b']);
// distractor
$mathVariable['d'] = 100 * ($mathVariable['a']+1) / (100 + $mathVariable['b']);
$mathVariable['e'] = 100 * $mathVariable['a'] / (100 + $mathVariable['b'] + 1);
$mathVariable['f'] = 100 * ($mathVariable['a']-1) / (100 + $mathVariable['b'] - 1);
$mathVariable['g'] = 100 * $mathVariable['a'] / (100 + $mathVariable['b'] - 1);
// question
$itemArray[2] = [
    "number" => 3,
    "question" => "Ibu Linda menjual suatu barang dengan harga Rp".number_format($mathVariable['a'],2,',','.').". Dia mendapat keuntungan dari penjualannya sebesar ".number_format($mathVariable['b'], 2,',','.')."%. Berdasarkan hal tersebut, modal yang dia keluarkan untuk membeli barang adalah ....",
    "options" => [
        ["option" => "Rp".number_format($mathVariable['d'], 2,',','.'), "isTrue" => 0],
        ["option" => "Rp".number_format($mathVariable['e'],2,',','.'), "isTrue" => 0],
        ["option" => "Rp".number_format($mathVariable['f'], 2,',','.'), "isTrue" => 0],
        ["option" => "Rp".number_format($mathVariable['g'],2,',','.'), "isTrue" => 0],
        ["option" => "Rp".number_format($mathVariable['c'],2,',','.'), "isTrue" => 1],
    ],
];

$mathVariable['a'] = random_int(51,99) * 1000;
$mathVariable['b'] = random_int(1,50);
$mathVariable['c'] = random_int(1,85) + (random_int(1,99)/10);
$mathVariable['d'] = $mathVariable['a'] / $mathVariable['b'];
//correct_answer
$mathVariable['e'] = $mathVariable['d'] * $mathVariable['c'] / 100 + $mathVariable['d'];
//distractor
$mathVariable['f'] = ($mathVariable['c'] + 100 - 2) / 100 * $mathVariable['d'];
$mathVariable['g'] = ($mathVariable['c'] + 100 + 1) / 100 * $mathVariable['d'];
$mathVariable['h'] = ($mathVariable['c'] + 100 - 1) / 100 * $mathVariable['d'];
$mathVariable['i'] = ($mathVariable['c'] + 100) / 100 * $mathVariable['a'];
// question
$itemArray[3] = [
    "number" => 4,
    "question" => "Pak Halim membeli mengeluarkan uang sebanyak Rp".number_format($mathVariable['a'],2,',','.')." untuk membeli ".$mathVariable['b']." barang X di tempat belanja daring. Dia berencana menjual kembali barang X secara daring dengan target keuntungan ".number_format($mathVariable['c'], 2,',','.')."%. Harga setiap barang X yang ia jual adalah ....",
    "options" => [
        ["option" => "Rp".number_format($mathVariable['f'], 2,',','.'), "isTrue" => 0],
        ["option" => "Rp".number_format($mathVariable['e'],2,',','.'), "isTrue" => 1],
        ["option" => "Rp".number_format($mathVariable['h'], 2,',','.'), "isTrue" => 0],
        ["option" => "Rp".number_format($mathVariable['g'],2,',','.'), "isTrue" => 0],
        ["option" => "Rp".number_format($mathVariable['i'],2,',','.'), "isTrue" => 0],
    ],
];

$mathVariable['a'] = random_int(1,200)+ random_int(1,99) / 10;
$mathVariable['b'] = random_int(9,99);
//correct_answer
$mathVariable['c'] = $mathVariable['a'] / 100 * $mathVariable['b'];
//distractor
$mathVariable['d'] = $mathVariable['a'] / 100 * $mathVariable['b'] / 10;
$mathVariable['e'] = $mathVariable['a'] / 100 * $mathVariable['b'] / 100;
$mathVariable['f'] = $mathVariable['a'] / 100 * $mathVariable['b'] * 10;
$mathVariable['g'] = $mathVariable['a'] / 100 * ($mathVariable['b'] + 1);
//question
$itemArray[4] = [
    "number" => 5,
    "question" => number_format($mathVariable['a'],2,',','.')."% dari ".$mathVariable['b']." adalah ....",
    "options" => [
        ["option" => number_format($mathVariable['f'], 2,',','.'), "isTrue" => 0],
        ["option" => number_format($mathVariable['e'],2,',','.'), "isTrue" => 0],
        ["option" => number_format($mathVariable['d'], 2,',','.'), "isTrue" => 0],
        ["option" => number_format($mathVariable['c'],2,',','.'), "isTrue" => 1],
        ["option" => number_format($mathVariable['g'],2,',','.'), "isTrue" => 0],
    ],
];

$mathVariable['a'] = random_int(4,19);
$mathVariable['b'] = random_int($mathVariable['a'], $mathVariable['a']*5);
$mathVariable['c'] = $mathVariable['b'] % $mathVariable['a'] === 0;
while($mathVariable['c'] === true){
    $mathVariable['b'] = random_int($mathVariable['a'], $mathVariable['a']*5);
    $mathVariable['c'] = $mathVariable['b'] % $mathVariable['a'] === 0;
}
$mathVariable['d'] = random_int(11,99);
//correct_answer
$mathVariable['e'] = $mathVariable['a'] / $mathVariable['b'] * $mathVariable['d'] * $mathVariable['d'];
//distractor
$mathVariable['f'] = $mathVariable['b'] / $mathVariable['a'] * $mathVariable['d'] * $mathVariable['d'];
$mathVariable['g'] = $mathVariable['a'] / $mathVariable['b'] * $mathVariable['d'] * $mathVariable['d'] / 2;
$mathVariable['h'] = $mathVariable['a'] / $mathVariable['b'] * $mathVariable['d'] * $mathVariable['d'] * 1.5;
$mathVariable['i'] = $mathVariable['a'] / $mathVariable['d'] * $mathVariable['b'] * $mathVariable['d'];
//question
$itemArray[5] = [
    "number" => 6,
    "question" => "Perbandingan ukuran panjang dan lebar suatu persegi panjang adalah ".$mathVariable['a']." : ".$mathVariable['b'].". Jika ukuran lebarnya ".$mathVariable['d']." cm, berapakah luas persegi panjang tersebut?",
    "options" => [
        ["option" => number_format($mathVariable['e'], 2,',','.'), "isTrue" => 1],
        ["option" => number_format($mathVariable['f'],2,',','.'), "isTrue" => 0],
        ["option" => number_format($mathVariable['g'], 2,',','.'), "isTrue" => 0],
        ["option" => number_format($mathVariable['h'],2,',','.'), "isTrue" => 0],
        ["option" => number_format($mathVariable['i'],2,',','.'), "isTrue" => 0],
    ],
];

$mathVariable['a'] = random_int(3,60);
$mathVariable['b'] = random_int(3,60);
$mathVariable['c'] = $mathVariable['b'] % $mathVariable['a'] === 0;
while($mathVariable['c'] === true){
    $mathVariable['b'] = random_int(3,60);
    $mathVariable['c'] = $mathVariable['b'] % $mathVariable['a'] === 0;
}
$mathVariable['d'] = random_int(1,11);
$mathVariable['e'] = random_int(1,11);
$mathVariable['c'] = $mathVariable['d'] % $mathVariable['e'] === 0;
while($mathVariable['c'] === true){
    $mathVariable['e'] = random_int(1,11);
    $mathVariable['c'] = $mathVariable['d'] % $mathVariable['e'] === 0;
}
$mathVariable['f'] = $mathVariable['a'] * 12 + $mathVariable['d'];
$mathVariable['g'] = $mathVariable['b'] * 12 + $mathVariable['e'];
$mathVariable['h'] = gcd($mathVariable['f'], $mathVariable['g']);
//correct_answer
$mathVariable['i'] = $mathVariable['f'] / $mathVariable['h'];
$mathVariable['j'] = $mathVariable['g'] / $mathVariable['h'];
//distractor
$mathVariable['k'] = ($mathVariable['f'] + 1) / $mathVariable['h'];
$mathVariable['l'] = ($mathVariable['g'] + 1) / $mathVariable['h'];
$mathVariable['m'] = ($mathVariable['f'] + 1) / ($mathVariable['h'] + 1);
$mathVariable['n'] = ($mathVariable['g'] + 1) / ($mathVariable['h'] + 1);
$mathVariable['o'] = ($mathVariable['f'] - 1) / $mathVariable['h'];
$mathVariable['p'] = ($mathVariable['g'] - 1) / ($mathVariable['h'] + 1);
$mathVariable['q'] = ($mathVariable['f'] - 1) / ($mathVariable['h'] + 1);
$mathVariable['r'] = ($mathVariable['g'] - 1) / ($mathVariable['h'] + 1);
//question
$itemArray[6] = [
    "number" => 7,
    "question" => "Umur Ali adalah ".$mathVariable['a']." tahun ".$mathVariable['d']." bulan dan umur Ayu ".$mathVariable['b']." tahun ".$mathVariable['e']." bulan. Perbandingan umur Ali dan Ayu adalah ....",
    "options" => [
        ["option" => number_format($mathVariable['k'])." : ".number_format($mathVariable['l']), "isTrue" => 0],
        ["option" => number_format($mathVariable['i'],0)." : ".number_format($mathVariable['j']), "isTrue" => 1],
        ["option" => number_format($mathVariable['m'])." : ".number_format($mathVariable['n']), "isTrue" => 0],
        ["option" => number_format($mathVariable['o'])." : ".number_format($mathVariable['p']), "isTrue" => 0],
        ["option" => number_format($mathVariable['q'])." : ".number_format($mathVariable['r']), "isTrue" => 0],
    ],
];

$mathVariable['a'] = random_int(25,99);
$mathVariable['b'] = random_int(5,80);
$mathVariable['c'] = $mathVariable['a'] === $mathVariable['b']/2 || $mathVariable['a']/2 === $mathVariable['b'] || $mathVariable['a'] === $mathVariable['b'];
while($mathVariable['c'] === true){
    $mathVariable['b'] = random_int(5,80);
$mathVariable['c'] = $mathVariable['a'] === $mathVariable['b']/2 || $mathVariable['a']/2 === $mathVariable['b'] || $mathVariable['a'] === $mathVariable['b'];
}
$mathVariable['d'] = abs($mathVariable['a'] - $mathVariable['b']);
$mathVariable['e'] = gcd($mathVariable['b'],$mathVariable['d']);
//correct_answer
$mathVariable['f'] = $mathVariable['b'] / $mathVariable['e'];
$mathVariable['g'] = $mathVariable['d'] / $mathVariable['e'];
//distractor
$mathVariable['h'] = ($mathVariable['b']+$mathVariable['e']) / $mathVariable['e'];
$mathVariable['i'] = $mathVariable['d'] / ($mathVariable['e']+1);
$mathVariable['j'] = ($mathVariable['b']-$mathVariable['e']) / $mathVariable['e'];
$mathVariable['k'] = $mathVariable['d'] / $mathVariable['e'];
$mathVariable['l'] = ($mathVariable['b']-1) / $mathVariable['e'];
$mathVariable['m'] = ($mathVariable['d']-$mathVariable['e']) / $mathVariable['e'];
$mathVariable['n'] = ($mathVariable['b']-$mathVariable['e']) / $mathVariable['e'];
$mathVariable['o'] = ($mathVariable['d']-1) / ($mathVariable['e']+1);
//question
$itemArray[7] = [
    "number" => 8,
    "question" => "Jumlah umur Fahri dan Febri adalah ".$mathVariable['a']." tahun. Jika umur Fahri ".$mathVariable['b']." tahun, perbandingan umur Fahri dan Febri adalah ....",
    "options" => [
        ["option" => number_format($mathVariable['h'])." : ".number_format($mathVariable['i']), "isTrue" => 0],
        ["option" => number_format($mathVariable['j'])." : ".number_format($mathVariable['k']), "isTrue" => 0],
        ["option" => number_format($mathVariable['f'])." : ".number_format($mathVariable['g']), "isTrue" => 1],
        ["option" => number_format($mathVariable['l'])." : ".number_format($mathVariable['m']), "isTrue" => 0],
        ["option" => number_format($mathVariable['n'])." : ".number_format($mathVariable['o']), "isTrue" => 0],
    ],
];
?>