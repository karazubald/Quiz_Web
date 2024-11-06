<?php
// Menampilkan dan melaporkan error
error_reporting(E_ALL);
ini_set("display_errors", true);

require "../require/functions.php";

$mathVariable = createVariableArray(26);
$itemArray = [];
//===================Items================================
$mathVariable["a"] = (random_int(9, 100) + random_int(1, 9) / 10) * 1000;
$mathVariable["b"] = random_int(3, 15);
$mathVariable["c"] = random_int(
    $mathVariable["b"] + 1,
    ($mathVariable["b"] + 2) * 2
);
$mathVariable["d"] = $mathVariable["b"] / $mathVariable["c"];
// correct_answer
$mathVariable["e"] =
    ($mathVariable["a"] * $mathVariable["c"]) / $mathVariable["b"];
// distractor
$mathVariable["f"] =
    ($mathVariable["a"] * $mathVariable["c"]) / ($mathVariable["b"] + 1);
$mathVariable["g"] =
    ($mathVariable["a"] * ($mathVariable["c"] + 1)) / $mathVariable["b"];
$mathVariable["h"] =
    ($mathVariable["a"] * ($mathVariable["c"] - 1)) / ($mathVariable["b"] - 1);
$mathVariable["i"] =
    ($mathVariable["a"] * ($mathVariable["c"] - 1)) / $mathVariable["b"];
// question
$itemArray[0] = [
    "number" => 1,
    "question" =>
        "Setya mentransfer uangnya sebesar Rp" .
        number_format($mathVariable["a"], 2, ",", ".") .
        " ke rekening Ade yang merupakan " .
        number_format($mathVariable["d"] * 100, 2, ",", ".") .
        "% dari total uang yang dimilikinya. Berapakah total uang yang dimiliki Setya dalam rekeningnya?",
    "options" => [
        [
            "option" => "Rp" . number_format($mathVariable["e"], 2, ",", "."),
            "isTrue" => 1,
        ],
        [
            "option" => "Rp" . number_format($mathVariable["f"], 2, ",", "."),
            "isTrue" => 0,
        ],
        [
            "option" => "Rp" . number_format($mathVariable["g"], 2, ",", "."),
            "isTrue" => 0,
        ],
        [
            "option" => "Rp" . number_format($mathVariable["h"], 2, ",", "."),
            "isTrue" => 0,
        ],
        [
            "option" => "Rp" . number_format($mathVariable["i"], 2, ",", "."),
            "isTrue" => 0,
        ],
    ],
];

$mathVariable["a"] = random_int(2, 99) * 1000;
$mathVariable["b"] =
    random_int($mathVariable["a"] / 2 / 1000, ($mathVariable["a"] * 2) / 1000) *
    1000;
$mathVariable["c"] = $mathVariable["b"] === $mathVariable["a"];
while ($mathVariable["c"] === true) {
    $mathVariable["b"] = random_int(
        $mathVariable["a"] / 2 / 1000,
        ($mathVariable["a"] * 2) / 1000
    );
    $mathVariable["c"] = $mathVariable["b"] === $mathVariable["a"];
}
$mathVariable["d"] =
    $mathVariable["b"] > $mathVariable["a"] ? "untung" : "rugi";
// correct_answer
$mathVariable["e"] =
    (abs($mathVariable["b"] / 1000 - $mathVariable["a"] / 1000) /
        ($mathVariable["a"] / 1000)) *
    100;
// distractor
$mathVariable["f"] =
    (abs($mathVariable["b"] / 1000 + 1 - $mathVariable["a"] / 1000) /
        ($mathVariable["a"] / 1000)) *
    100;
$mathVariable["g"] =
    (abs($mathVariable["b"] / 1000 - $mathVariable["a"] / 1000) /
        ($mathVariable["a"] / 1000 + 1)) *
    100;
$mathVariable["h"] =
    (abs($mathVariable["b"] / 1000 - 1 - $mathVariable["a"] / 1000) /
        ($mathVariable["a"] / 1000)) *
    100;
$mathVariable["i"] =
    (abs($mathVariable["b"] / 1000 - 2 - $mathVariable["a"] / 1000) /
        ($mathVariable["a"] / 1000 - 1)) *
    100;
// question
$itemArray[1] = [
    "number" => 2,
    "question" =>
        "Aldo membeli suatu barang dengan harga Rp" .
        number_format($mathVariable["a"], 2, ",", ".") .
        ". Aldo kemudian menjual kembali barang tersebut dengan harga Rp" .
        number_format($mathVariable["b"], 2, ",", ".") .
        ". Berapa persen ke" .
        $mathVariable["d"] .
        "an hasil penjualan Aldo?",
    "options" => [
        [
            "option" => number_format($mathVariable["g"], 2, ",", ".") . "%",
            "isTrue" => 0,
        ],
        [
            "option" => number_format($mathVariable["f"], 2, ",", ".") . "%",
            "isTrue" => 0,
        ],
        [
            "option" => number_format($mathVariable["e"], 2, ",", ".") . "%",
            "isTrue" => 1,
        ],
        [
            "option" => number_format($mathVariable["h"], 2, ",", ".") . "%",
            "isTrue" => 0,
        ],
        [
            "option" => number_format($mathVariable["i"], 2, ",", ".") . "%",
            "isTrue" => 0,
        ],
    ],
];

$mathVariable["a"] = random_int(3, 99) * 1000;
$mathVariable["b"] = random_int(11, 85);
// correct_answer
$mathVariable["c"] = (100 * $mathVariable["a"]) / (100 + $mathVariable["b"]);
// distractor
$mathVariable["d"] =
    (100 * ($mathVariable["a"] + 1)) / (100 + $mathVariable["b"]);
$mathVariable["e"] =
    (100 * $mathVariable["a"]) / (100 + $mathVariable["b"] + 1);
$mathVariable["f"] =
    (100 * ($mathVariable["a"] - 1)) / (100 + $mathVariable["b"] - 1);
$mathVariable["g"] =
    (100 * $mathVariable["a"]) / (100 + $mathVariable["b"] - 1);
// question
$itemArray[2] = [
    "number" => 3,
    "question" =>
        "Ibu Linda menjual suatu barang dengan harga Rp" .
        number_format($mathVariable["a"], 2, ",", ".") .
        ". Dia mendapat keuntungan dari penjualannya sebesar " .
        number_format($mathVariable["b"], 2, ",", ".") .
        "%. Berdasarkan hal tersebut, modal yang dia keluarkan untuk membeli barang adalah ....",
    "options" => [
        [
            "option" => "Rp" . number_format($mathVariable["d"], 2, ",", "."),
            "isTrue" => 0,
        ],
        [
            "option" => "Rp" . number_format($mathVariable["e"], 2, ",", "."),
            "isTrue" => 0,
        ],
        [
            "option" => "Rp" . number_format($mathVariable["f"], 2, ",", "."),
            "isTrue" => 0,
        ],
        [
            "option" => "Rp" . number_format($mathVariable["g"], 2, ",", "."),
            "isTrue" => 0,
        ],
        [
            "option" => "Rp" . number_format($mathVariable["c"], 2, ",", "."),
            "isTrue" => 1,
        ],
    ],
];

$mathVariable["a"] = random_int(51, 99) * 1000;
$mathVariable["b"] = random_int(1, 50);
$mathVariable["c"] = random_int(1, 85) + random_int(1, 99) / 10;
$mathVariable["d"] = $mathVariable["a"] / $mathVariable["b"];
//correct_answer
$mathVariable["e"] =
    ($mathVariable["d"] * $mathVariable["c"]) / 100 + $mathVariable["d"];
//distractor
$mathVariable["f"] =
    (($mathVariable["c"] + 100 - 2) / 100) * $mathVariable["d"];
$mathVariable["g"] =
    (($mathVariable["c"] + 100 + 1) / 100) * $mathVariable["d"];
$mathVariable["h"] =
    (($mathVariable["c"] + 100 - 1) / 100) * $mathVariable["d"];
$mathVariable["i"] = (($mathVariable["c"] + 100) / 100) * $mathVariable["a"];
// question
$itemArray[3] = [
    "number" => 4,
    "question" =>
        "Pak Halim membeli mengeluarkan uang sebanyak Rp" .
        number_format($mathVariable["a"], 2, ",", ".") .
        " untuk membeli " .
        $mathVariable["b"] .
        " barang X di tempat belanja daring. Dia berencana menjual kembali barang X secara daring dengan target keuntungan " .
        number_format($mathVariable["c"], 2, ",", ".") .
        "%. Harga setiap barang X yang ia jual adalah ....",
    "options" => [
        [
            "option" => "Rp" . number_format($mathVariable["f"], 2, ",", "."),
            "isTrue" => 0,
        ],
        [
            "option" => "Rp" . number_format($mathVariable["e"], 2, ",", "."),
            "isTrue" => 1,
        ],
        [
            "option" => "Rp" . number_format($mathVariable["h"], 2, ",", "."),
            "isTrue" => 0,
        ],
        [
            "option" => "Rp" . number_format($mathVariable["g"], 2, ",", "."),
            "isTrue" => 0,
        ],
        [
            "option" => "Rp" . number_format($mathVariable["i"], 2, ",", "."),
            "isTrue" => 0,
        ],
    ],
];

$mathVariable["a"] = random_int(1, 200) + random_int(1, 99) / 10;
$mathVariable["b"] = random_int(9, 99);
//correct_answer
$mathVariable["c"] = ($mathVariable["a"] / 100) * $mathVariable["b"];
//distractor
$mathVariable["d"] = (($mathVariable["a"] / 100) * $mathVariable["b"]) / 10;
$mathVariable["e"] = (($mathVariable["a"] / 100) * $mathVariable["b"]) / 100;
$mathVariable["f"] = ($mathVariable["a"] / 100) * $mathVariable["b"] * 10;
$mathVariable["g"] = ($mathVariable["a"] / 100) * ($mathVariable["b"] + 1);
//question
$itemArray[4] = [
    "number" => 5,
    "question" =>
        number_format($mathVariable["a"], 2, ",", ".") .
        "% dari " .
        $mathVariable["b"] .
        " adalah ....",
    "options" => [
        [
            "option" => number_format($mathVariable["f"], 2, ",", "."),
            "isTrue" => 0,
        ],
        [
            "option" => number_format($mathVariable["e"], 2, ",", "."),
            "isTrue" => 0,
        ],
        [
            "option" => number_format($mathVariable["d"], 2, ",", "."),
            "isTrue" => 0,
        ],
        [
            "option" => number_format($mathVariable["c"], 2, ",", "."),
            "isTrue" => 1,
        ],
        [
            "option" => number_format($mathVariable["g"], 2, ",", "."),
            "isTrue" => 0,
        ],
    ],
];

$mathVariable["a"] = random_int(4, 19);
$mathVariable["b"] = random_int($mathVariable["a"], $mathVariable["a"] * 5);
$mathVariable["c"] = $mathVariable["b"] % $mathVariable["a"] === 0;
while ($mathVariable["c"] === true) {
    $mathVariable["b"] = random_int($mathVariable["a"], $mathVariable["a"] * 5);
    $mathVariable["c"] = $mathVariable["b"] % $mathVariable["a"] === 0;
}
$mathVariable["d"] = random_int(11, 99);
//correct_answer
$mathVariable["e"] =
    ($mathVariable["a"] / $mathVariable["b"]) *
    $mathVariable["d"] *
    $mathVariable["d"];
//distractor
$mathVariable["f"] =
    ($mathVariable["b"] / $mathVariable["a"]) *
    $mathVariable["d"] *
    $mathVariable["d"];
$mathVariable["g"] =
    (($mathVariable["a"] / $mathVariable["b"]) *
        $mathVariable["d"] *
        $mathVariable["d"]) /
    2;
$mathVariable["h"] =
    ($mathVariable["a"] / $mathVariable["b"]) *
    $mathVariable["d"] *
    $mathVariable["d"] *
    1.5;
$mathVariable["i"] =
    ($mathVariable["a"] / $mathVariable["d"]) *
    $mathVariable["b"] *
    $mathVariable["d"];
//question
$itemArray[5] = [
    "number" => 6,
    "question" =>
        "Perbandingan ukuran panjang dan lebar suatu persegi panjang adalah " .
        $mathVariable["a"] .
        " : " .
        $mathVariable["b"] .
        ". Jika ukuran lebarnya " .
        $mathVariable["d"] .
        " cm, berapakah luas persegi panjang tersebut?",
    "options" => [
        [
            "option" => number_format($mathVariable["e"], 2, ",", "."),
            "isTrue" => 1,
        ],
        [
            "option" => number_format($mathVariable["f"], 2, ",", "."),
            "isTrue" => 0,
        ],
        [
            "option" => number_format($mathVariable["g"], 2, ",", "."),
            "isTrue" => 0,
        ],
        [
            "option" => number_format($mathVariable["h"], 2, ",", "."),
            "isTrue" => 0,
        ],
        [
            "option" => number_format($mathVariable["i"], 2, ",", "."),
            "isTrue" => 0,
        ],
    ],
];

$mathVariable["a"] = random_int(3, 60);
$mathVariable["b"] = random_int(3, 60);
$mathVariable["c"] = $mathVariable["b"] % $mathVariable["a"] === 0;
while ($mathVariable["c"] === true) {
    $mathVariable["b"] = random_int(3, 60);
    $mathVariable["c"] = $mathVariable["b"] % $mathVariable["a"] === 0;
}
$mathVariable["d"] = random_int(1, 11);
$mathVariable["e"] = random_int(1, 11);
$mathVariable["c"] = $mathVariable["d"] % $mathVariable["e"] === 0;
while ($mathVariable["c"] === true) {
    $mathVariable["e"] = random_int(1, 11);
    $mathVariable["c"] = $mathVariable["d"] % $mathVariable["e"] === 0;
}
$mathVariable["f"] = $mathVariable["a"] * 12 + $mathVariable["d"];
$mathVariable["g"] = $mathVariable["b"] * 12 + $mathVariable["e"];
$mathVariable["h"] = gcd($mathVariable["f"], $mathVariable["g"]);
//correct_answer
$mathVariable["i"] = $mathVariable["f"] / $mathVariable["h"];
$mathVariable["j"] = $mathVariable["g"] / $mathVariable["h"];
//distractor
$mathVariable["k"] = ($mathVariable["f"] + 1) / $mathVariable["h"];
$mathVariable["l"] = ($mathVariable["g"] + 1) / $mathVariable["h"];
$mathVariable["m"] = ($mathVariable["f"] + 1) / ($mathVariable["h"] + 1);
$mathVariable["n"] = ($mathVariable["g"] + 1) / ($mathVariable["h"] + 1);
$mathVariable["o"] = ($mathVariable["f"] - 1) / $mathVariable["h"];
$mathVariable["p"] = ($mathVariable["g"] - 1) / ($mathVariable["h"] + 1);
$mathVariable["q"] = ($mathVariable["f"] - 1) / ($mathVariable["h"] + 1);
$mathVariable["r"] = ($mathVariable["g"] - 1) / ($mathVariable["h"] + 1);
//question
$itemArray[6] = [
    "number" => 7,
    "question" =>
        "Umur Ali adalah " .
        $mathVariable["a"] .
        " tahun " .
        $mathVariable["d"] .
        " bulan dan umur Ayu " .
        $mathVariable["b"] .
        " tahun " .
        $mathVariable["e"] .
        " bulan. Perbandingan umur Ali dan Ayu adalah ....",
    "options" => [
        [
            "option" =>
                number_format($mathVariable["k"]) .
                " : " .
                number_format($mathVariable["l"]),
            "isTrue" => 0,
        ],
        [
            "option" =>
                number_format($mathVariable["i"], 0) .
                " : " .
                number_format($mathVariable["j"]),
            "isTrue" => 1,
        ],
        [
            "option" =>
                number_format($mathVariable["m"]) .
                " : " .
                number_format($mathVariable["n"]),
            "isTrue" => 0,
        ],
        [
            "option" =>
                number_format($mathVariable["o"]) .
                " : " .
                number_format($mathVariable["p"]),
            "isTrue" => 0,
        ],
        [
            "option" =>
                number_format($mathVariable["q"]) .
                " : " .
                number_format($mathVariable["r"]),
            "isTrue" => 0,
        ],
    ],
];

$mathVariable["a"] = random_int(25, 99);
$mathVariable["b"] = random_int(5, 80);
$mathVariable["c"] =
    $mathVariable["a"] === $mathVariable["b"] / 2 ||
    $mathVariable["a"] / 2 === $mathVariable["b"] ||
    $mathVariable["a"] === $mathVariable["b"];
while ($mathVariable["c"] === true) {
    $mathVariable["b"] = random_int(5, 80);
    $mathVariable["c"] =
        $mathVariable["a"] === $mathVariable["b"] / 2 ||
        $mathVariable["a"] / 2 === $mathVariable["b"] ||
        $mathVariable["a"] === $mathVariable["b"];
}
$mathVariable["d"] = abs($mathVariable["a"] - $mathVariable["b"]);
$mathVariable["e"] = gcd($mathVariable["b"], $mathVariable["d"]);
//correct_answer
$mathVariable["f"] = $mathVariable["b"] / $mathVariable["e"];
$mathVariable["g"] = $mathVariable["d"] / $mathVariable["e"];
//distractor
$mathVariable["h"] =
    ($mathVariable["b"] + $mathVariable["e"]) / $mathVariable["e"];
$mathVariable["i"] = $mathVariable["d"] / ($mathVariable["e"] + 1);
$mathVariable["j"] =
    ($mathVariable["b"] - $mathVariable["e"]) / $mathVariable["e"];
$mathVariable["k"] = $mathVariable["d"] / $mathVariable["e"];
$mathVariable["l"] = ($mathVariable["b"] - 1) / $mathVariable["e"];
$mathVariable["m"] =
    ($mathVariable["d"] - $mathVariable["e"]) / $mathVariable["e"];
$mathVariable["n"] =
    ($mathVariable["b"] - $mathVariable["e"]) / $mathVariable["e"];
$mathVariable["o"] = ($mathVariable["d"] - 1) / ($mathVariable["e"] + 1);
//question
$itemArray[7] = [
    "number" => 8,
    "question" =>
        "Jumlah umur Fahri dan Febri adalah " .
        $mathVariable["a"] .
        " tahun. Jika umur Fahri " .
        $mathVariable["b"] .
        " tahun, perbandingan umur Fahri dan Febri adalah ....",
    "options" => [
        [
            "option" =>
                number_format($mathVariable["h"]) .
                " : " .
                number_format($mathVariable["i"]),
            "isTrue" => 0,
        ],
        [
            "option" =>
                number_format($mathVariable["j"]) .
                " : " .
                number_format($mathVariable["k"]),
            "isTrue" => 0,
        ],
        [
            "option" =>
                number_format($mathVariable["f"]) .
                " : " .
                number_format($mathVariable["g"]),
            "isTrue" => 1,
        ],
        [
            "option" =>
                number_format($mathVariable["l"]) .
                " : " .
                number_format($mathVariable["m"]),
            "isTrue" => 0,
        ],
        [
            "option" =>
                number_format($mathVariable["n"]) .
                " : " .
                number_format($mathVariable["o"]),
            "isTrue" => 0,
        ],
    ],
];

$mathVariable["a"] = random_int(50, 100);
$mathVariable["b"] = random_int(10, 50);
$mathVariable["c"] = random_int(7, 25);
while (!isPrime($mathVariable["a"])) {
    $mathVariable["a"] = random_int(50, 100);
}
while (!isPrime($mathVariable["b"])) {
    $mathVariable["b"] = random_int(10, 50);
}
while ($mathVariable["a"] === $mathVariable["b"]) {
    while (!isPrime($mathVariable["a"])) {
        $mathVariable["a"] = random_int(50, 100);
    }
    while (!isPrime($mathVariable["b"])) {
        $mathVariable["b"] = random_int(10, 50);
    }
}
while (!isPrime($mathVariable["c"])) {
    $mathVariable["c"] = random_int(7, 25);
}
// correct_answer
$mathVariable["d"] =
    (($mathVariable["a"] * $mathVariable["b"]) /
        ($mathVariable["a"] - $mathVariable["c"])) *
    24;
// distractor
$mathVariable["e"] =
    (($mathVariable["a"] * $mathVariable["b"]) /
        ($mathVariable["a"] + $mathVariable["c"])) *
        24 +
    1;
$mathVariable["f"] =
    ($mathVariable["a"] * $mathVariable["b"]) /
    ($mathVariable["a"] - $mathVariable["c"]);
$mathVariable["g"] =
    (($mathVariable["a"] * $mathVariable["b"]) /
        ($mathVariable["a"] + $mathVariable["c"])) *
    24;
$mathVariable["h"] =
    (($mathVariable["a"] * $mathVariable["b"]) /
        ($mathVariable["a"] - $mathVariable["c"])) *
        24 -
    1;
// question
$itemArray[8] = [
    "number" => 9,
    "question" =>
        "Sebanyak " .
        $mathVariable["a"] .
        " orang pekerja bangunan dapat menyelesaikan pekerjaan dalam waktu " .
        $mathVariable["b"] .
        " hari. Apabila ada " .
        $mathVariable["c"] .
        " orang yang tidak masuk kerja, maka mereka dapat menyelesaikan pekerjaan dalam waktu ....",
    "options" => [
        ["option" => number_format($mathVariable["f"]) . " jam", "isTrue" => 0],
        ["option" => number_format($mathVariable["e"]) . " jam", "isTrue" => 0],
        ["option" => number_format($mathVariable["d"]) . " jam", "isTrue" => 1],
        ["option" => number_format($mathVariable["g"]) . " jam", "isTrue" => 0],
        ["option" => number_format($mathVariable["h"]) . " jam", "isTrue" => 0],
    ],
];

$mathVariable["a"] = [
    "matematika",
    "bahasa Indonesia",
    "bahasa Inggris",
    "sejarah",
    "sosiologi",
    "biologi",
    "kimia",
    "fisika",
];
$mathVariable["b"] = $mathVariable["a"][random_int(0, 7)];
$mathVariable["c"] = random_int(10, 50);
while (!isPrime($mathVariable["c"])) {
    $mathVariable["c"] = random_int(10, 50);
}
$mathVariable["d"] = random_int(70, 90) + $mathVariable["c"] / 100;
$mathVariable["e"] =
    ($mathVariable["d"] * $mathVariable["c"] +
        (random_int(70, 90) +
            random_int(10, 90) / 10 +
            random_int(10, 50) / 100)) /
    ($mathVariable["c"] + 1);
// correct_answer
$mathVariable["f"] =
    $mathVariable["e"] * ($mathVariable["c"] + 1) -
    $mathVariable["d"] * $mathVariable["c"];
// distractor
$mathVariable["g"] =
    $mathVariable["e"] * ($mathVariable["c"] + 1) -
    $mathVariable["d"] * $mathVariable["c"] -
    2;
$mathVariable["h"] =
    $mathVariable["e"] * ($mathVariable["c"] + 1) -
    $mathVariable["d"] * $mathVariable["c"] +
    2;
$mathVariable["i"] =
    $mathVariable["e"] * ($mathVariable["c"] + 1) -
    $mathVariable["d"] * $mathVariable["c"] -
    1;
$mathVariable["j"] =
    $mathVariable["e"] * ($mathVariable["c"] + 1) -
    $mathVariable["d"] * $mathVariable["c"] +
    1;
// question
$itemArray[9] = [
    "number" => 10,
    "question" =>
        "Rata-rata nilai ulangan " .
        $mathVariable["b"] .
        " dari " .
        $mathVariable["c"] .
        " siswa adalah " .
        $mathVariable["d"] .
        ". Jika nilai Cahyo digabung dengan nilai mereka, maka rata-rata nilai menjadi " .
        number_format($mathVariable["e"], 2) .
        ". Nilai ulangan Cahyo adalah ....",
    "options" => [
        ["option" => number_format($mathVariable["f"], 2), "isTrue" => 1],
        ["option" => number_format($mathVariable["g"], 2), "isTrue" => 0],
        ["option" => number_format($mathVariable["h"], 2), "isTrue" => 0],
        ["option" => number_format($mathVariable["i"], 2), "isTrue" => 0],
        ["option" => number_format($mathVariable["j"], 2), "isTrue" => 0],
    ],
];

$mathVariable["a"] = random_int(5, 11);
$mathVariable["b"] = random_int(6, 9) + random_int(1, 9) / 10;
$mathVariable["c"] = false;
$jumlahAktualNilai = $mathVariable["b"] * $mathVariable["a"];
$jumlahNilai = 0;
$arrayNilai = [];
do {
    for ($i = 0; $i < $mathVariable["a"]; $i++) {
        $arrayNilai[$i] = random_int(1, 9) + random_int(1, 9) / 10;
    }
    $jumlahNilai = array_sum($arrayNilai);
} while ($jumlahNilai !== $jumlahAktualNilai);
// correct_answer
$mathVariable["d"] = implode(", ", $arrayNilai);
// distractor
function initDistractorArray()
{
    global $mathVariable, $arrayNilai;
    $distractorArray = [];
    for ($i = 0; $i < $mathVariable["a"]; $i++) {
        if (random_int(0, 1) === 1) {
            $distractorArray[$i] = $arrayNilai[$i] + 1;
        } else {
            $distractorArray[$i] = $arrayNilai[$i];
        }
    }
    return $distractorArray;
}
$mathVariable["e"] = implode(", ", initDistractorArray());
$mathVariable["f"] = implode(", ", initDistractorArray());
$mathVariable["g"] = implode(", ", initDistractorArray());
$mathVariable["h"] = implode(", ", initDistractorArray());
// question
$itemArray[10] = [
    "number" => 11,
    "question" =>
        "Rata-rata nilai dari " .
        $mathVariable["a"] .
        " siswa adalah " .
        $mathVariable["b"] .
        ". Himpunan nilai siswa adalah ....",
    "options" => [
        ["option" => "{" . $mathVariable["h"] . "}", "isTrue" => 0],
        ["option" => "{" . $mathVariable["g"] . "}", "isTrue" => 0],
        ["option" => "{" . $mathVariable["f"] . "}", "isTrue" => 0],
        ["option" => "{" . $mathVariable["e"] . "}", "isTrue" => 0],
        ["option" => "{" . $mathVariable["d"] . "}", "isTrue" => 1],
    ],
];

$mathVariable["a"] = random_int(2, 25);
$mathVariable["b"] = random_int(2, 50);
while (!isPrime($mathVariable["b"])) {
    $mathVariable["b"] = random_int(1, 50);
}
$mathVariable["c"] = random_int(2, 40);
while ($mathVariable["c"] % $mathVariable["a"] !== 0) {
    $mathVariable["c"] = random_int($mathVariable["a"] + 1, 40);
}
$mathVariable["d"] = random_int(2, 70);
while ($mathVariable["b"] % $mathVariable["d"] === 0) {
    $mathVariable["d"] = random_int(2, 70);
}
$mathVariable["e"] = random_int(2, 25);
while (!isPrime($mathVariable["e"])) {
    $mathVariable["e"] = random_int(2, 25);
}
// correct_answer
$factorAC = gcd($mathVariable["c"], $mathVariable["a"]);
$mathVariable["f"] =
    (($mathVariable["c"] * $mathVariable["b"]) /
        ($mathVariable["a"] * $mathVariable["d"])) *
    (1 / $mathVariable["e"]);
// distractor
$mathVariable["g"] = 1 / $mathVariable["e"];
$mathVariable["h"] =
    (((1 / ($mathVariable["e"] * ($mathVariable["c"] / pow($factorAC, 2)))) *
        $mathVariable["b"]) /
        $mathVariable["a"]) *
    $mathVariable["d"];
$mathVariable["i"] =
    $factorAC /
    ((($mathVariable["c"] * $mathVariable["a"]) / $mathVariable["b"]) *
        $mathVariable["d"]);
$mathVariable["j"] =
    (($mathVariable["c"] * ($mathVariable["b"] / $factorAC)) /
        $mathVariable["a"]) *
    $mathVariable["d"] *
    (1 / $mathVariable["e"]);
// question
$itemArray[11] = [
    "number" => 12,
    "question" =>
        "Jika " .
        $mathVariable["a"] .
        "x/" .
        $mathVariable["b"] .
        " = " .
        $mathVariable["c"] .
        "y/" .
        $mathVariable["d"] .
        ", maka nilai x / " .
        $mathVariable["e"] .
        "y = ....",
    "options" => [
        ["option" => number_format($mathVariable["i"], 2), "isTrue" => 0],
        ["option" => number_format($mathVariable["h"], 2), "isTrue" => 0],
        ["option" => number_format($mathVariable["g"], 2), "isTrue" => 0],
        ["option" => number_format($mathVariable["f"], 2), "isTrue" => 1],
        ["option" => number_format($mathVariable["j"], 2), "isTrue" => 0],
    ],
];

$mathVariable["a"] = [
    "matematika",
    "bahasa Indonesia",
    "bahasa Inggris",
    "sejarah",
    "sosiologi",
    "biologi",
    "kimia",
    "fisika",
];
$mathVariable["b"] = $mathVariable["a"][random_int(0, 7)];
$mathVariable["c"] = random_int(10, 50);
while (!isPrime($mathVariable["c"])) {
    $mathVariable["c"] = random_int(10, 50);
}
$mathVariable["d"] = random_int(70, 90) + $mathVariable["c"] / 100;
$mathVariable["e"] = $mathVariable["d"] + random_int(1, 5) / 10;
// correct_answer
$mathVariable["f"] =
    $mathVariable["e"] * ($mathVariable["c"] + 1) -
    $mathVariable["d"] * $mathVariable["c"];
// distractor
$mathVariable["g"] =
    $mathVariable["e"] * ($mathVariable["c"] + 1) -
    $mathVariable["d"] * $mathVariable["c"] -
    2;
$mathVariable["h"] =
    $mathVariable["e"] * ($mathVariable["c"] + 1) -
    $mathVariable["d"] * $mathVariable["c"] +
    2;
$mathVariable["i"] =
    $mathVariable["e"] * ($mathVariable["c"] + 1) -
    $mathVariable["d"] * $mathVariable["c"] -
    1;
$mathVariable["j"] =
    $mathVariable["e"] * ($mathVariable["c"] + 1) -
    $mathVariable["d"] * $mathVariable["c"] +
    1;
// question
$itemArray[12] = [
    "number" => 13,
    "question" =>
        "Rata-rata nilai ulangan " .
        $mathVariable["b"] .
        " dari " .
        $mathVariable["c"] .
        " siswa adalah " .
        $mathVariable["d"] .
        ". Jika nilai Aria digabung dengan nilai mereka, maka rata-rata nilai menjadi " .
        number_format($mathVariable["e"], 2) .
        ". Nilai ulangan Aria adalah ....",
    "options" => [
        ["option" => number_format($mathVariable["f"], 2), "isTrue" => 1],
        ["option" => number_format($mathVariable["g"], 2), "isTrue" => 0],
        ["option" => number_format($mathVariable["h"], 2), "isTrue" => 0],
        ["option" => number_format($mathVariable["i"], 2), "isTrue" => 0],
        ["option" => number_format($mathVariable["j"], 2), "isTrue" => 0],
    ],
];

$mathVariable["a"] = [];
$mathVariable["b"] = 0;
$mathVariable["c"] = [];
for ($i = 0; $i < 5; $i++) {
    $j = random_int(3, 10);
    $mathVariable["a"][$i] = [
        "berat_badan" => random_int(55, 80),
        "siswa" => $j,
    ];
    $mathVariable["b"] += $j;
    $dataBB = implode("=>", [
        $mathVariable["a"][$i]["berat_badan"],
        $mathVariable["a"][$i]["siswa"],
    ]);
    $mathVariable["c"][$i] = $dataBB;
}
$mathVariable["c"] = implode(", ", $mathVariable["c"]);
// correct_answer
$mathVariable["d"] = 0;
for ($i = 0; $i < 5; $i++) {
    $mathVariable["d"] +=
        $mathVariable["a"][$i]["berat_badan"] * $mathVariable["a"][$i]["siswa"];
}
$mathVariable["e"] = $mathVariable["d"] / $mathVariable["b"];
// distraktor
$mathVariable["f"] = $mathVariable["e"] + random_int(1, 4) / 10;
$mathVariable["g"] = $mathVariable["e"] - random_int(1, 2);
$mathVariable["h"] = $mathVariable["e"] + random_int(1, 2);
$mathVariable["i"] =
    $mathVariable["e"] +
    (random_int(0, 1) === 0 ? random_int(5, 9) / -10 : random_int(5, 9) / 10);
// question
$itemArray[13] = [
    "number" => 14,
    "question" =>
        "Data berat badan siswa dikelompokkan dalam format {berat_badan => banyak_siswa}. Data berat badan dari " .
        $mathVariable["b"] .
        " siswa: {" .
        $mathVariable["c"] .
        "}. Berat badan rata-rata siswa adalah .... kg.",
    "options" => [
        ["option" => number_format($mathVariable["h"], 2), "isTrue" => 0],
        ["option" => number_format($mathVariable["i"], 2), "isTrue" => 0],
        ["option" => number_format($mathVariable["e"], 2), "isTrue" => 1],
        ["option" => number_format($mathVariable["f"], 2), "isTrue" => 0],
        ["option" => number_format($mathVariable["g"], 2), "isTrue" => 0],
    ],
];

$mathVariable['a'] = array(1/random_int(1,3), 1/random_int(4,8), 1/random_int(9,15), 1/random_int(16,20), 1/random_int(21,25));
$mathVariable['b'] = 0;
foreach ($mathVariable['a'] as $a) {
    $mathVariable['b'] += $a;
}
$mathVariable['a'] = implode(', ', $mathVariable['a']);
// correct_answer
$mathVariable['c'] = $mathVariable['b'] / 5;
// distractor
$mathVariable['d'] = $mathVariable['c'] * 10;
$mathVariable['e'] = $mathVariable['c'] * 0.1;
$mathVariable['f'] = $mathVariable['c'] - 0.01;
$mathVariable['g'] = $mathVariable['c'] + 0.01;
// question
$itemArray[14] = [
    "number" => 15,
    "question" =>
        "Berapakah rata-rata dari ".$mathVariable['a']." dengan 3 angka di belakang koma?",
    "options" => [
        ["option" => number_format($mathVariable["h"], 3,","), "isTrue" => 0],
        ["option" => number_format($mathVariable["i"], 3,","), "isTrue" => 1],
        ["option" => number_format($mathVariable["e"], 3,","), "isTrue" => 0],
        ["option" => number_format($mathVariable["f"], 3,","), "isTrue" => 0],
        ["option" => number_format($mathVariable["g"], 3,","), "isTrue" => 0],
    ],
];

$mathVariable['a'] = [
    "2020-01" => [
        "Samsung" => 24.63,
        "Oppo" => 20.77,
        "Xiaomi" => 20.93,
        "Mobicel" => 10.8,
        "Apple" => 6.62,
        "Realme" => 3.18,
        "Asus" => 3.42,
        "Unknown" => 3.09,
        "Huawei" => 1.11,
        "Vivo" => 0,
        "Lenovo" => 1.05,
        "Sony" => 0.77,
        "Infinix" => 0.32,
        "BBK" => 0.68,
        "Nokia" => 0.61,
        "LG" => 0.31,
        "Smartfren" => 0.29,
        "Motorola" => 0.16,
        "Meizu" => 0.15,
        "Xolo" => 0.17,
        "Lava" => 0.12,
        "Google" => 0.09,
        "OnePlus" => 0.07,
        "Coolpad" => 0.09,
        "BlackBerry" => 0.07,
        "Wiko" => 0.07,
        "Harga" => 0.06,
        "ZTE" => 0.05,
        "Sharp" => 0.04,
        "HTC" => 0.03,
        "Caterpillar" => 0.03,
        "Acer" => 0.03,
        "RIM" => 0.03,
        "Fujitsu" => 0.03,
        "Alcatel" => 0.02,
        "Gionee" => 0.01,
        "Other" => 0.09,
    ],
    "2020-02" => [
        "Samsung" => 24.73,
        "Oppo" => 20.58,
        "Xiaomi" => 20.61,
        "Mobicel" => 11.05,
        "Apple" => 7.06,
        "Realme" => 3.42,
        "Asus" => 3.3,
        "Unknown" => 2.92,
        "Huawei" => 1.12,
        "Vivo" => 0,
        "Lenovo" => 0.99,
        "Sony" => 0.73,
        "Infinix" => 0.38,
        "BBK" => 0.66,
        "Nokia" => 0.56,
        "LG" => 0.3,
        "Smartfren" => 0.25,
        "Motorola" => 0.16,
        "Meizu" => 0.15,
        "Xolo" => 0.17,
        "Lava" => 0.11,
        "Google" => 0.08,
        "OnePlus" => 0.07,
        "Coolpad" => 0.08,
        "BlackBerry" => 0.07,
        "Wiko" => 0.06,
        "Harga" => 0.05,
        "ZTE" => 0.05,
        "Sharp" => 0.04,
        "HTC" => 0.03,
        "Caterpillar" => 0.02,
        "Acer" => 0.03,
        "RIM" => 0.02,
        "Fujitsu" => 0.02,
        "Alcatel" => 0.02,
        "Gionee" => 0.01,
        "Other" => 0.09,
    ],
    "2020-03" => [
        "Samsung" => 24.76,
        "Oppo" => 20.71,
        "Xiaomi" => 20.26,
        "Mobicel" => 11.27,
        "Apple" => 7.16,
        "Realme" => 3.63,
        "Asus" => 3.2,
        "Unknown" => 2.92,
        "Huawei" => 1.09,
        "Vivo" => 0,
        "Lenovo" => 0.95,
        "Sony" => 0.68,
        "Infinix" => 0.42,
        "BBK" => 0.65,
        "Nokia" => 0.47,
        "LG" => 0.28,
        "Smartfren" => 0.26,
        "Motorola" => 0.16,
        "Meizu" => 0.15,
        "Xolo" => 0.16,
        "Lava" => 0.12,
        "Google" => 0.08,
        "OnePlus" => 0.06,
        "Coolpad" => 0.08,
        "BlackBerry" => 0.07,
        "Wiko" => 0.07,
        "Harga" => 0.04,
        "ZTE" => 0.04,
        "Sharp" => 0.04,
        "HTC" => 0.03,
        "Caterpillar" => 0.02,
        "Acer" => 0.02,
        "RIM" => 0.02,
        "Fujitsu" => 0.02,
        "Alcatel" => 0.02,
        "Gionee" => 0.01,
        "Other" => 0.08,
    ],
    "2020-04" => [
        "Samsung" => 25.01,
        "Oppo" => 20.67,
        "Xiaomi" => 20.15,
        "Mobicel" => 11.18,
        "Apple" => 7.76,
        "Realme" => 3.67,
        "Asus" => 3.16,
        "Unknown" => 2.39,
        "Huawei" => 1.08,
        "Vivo" => 0,
        "Lenovo" => 0.92,
        "Sony" => 0.66,
        "Infinix" => 0.43,
        "BBK" => 0.64,
        "Nokia" => 0.5,
        "LG" => 0.27,
        "Smartfren" => 0.24,
        "Motorola" => 0.17,
        "Meizu" => 0.15,
        "Xolo" => 0.15,
        "Lava" => 0.11,
        "Google" => 0.08,
        "OnePlus" => 0.06,
        "Coolpad" => 0.08,
        "BlackBerry" => 0.07,
        "Wiko" => 0.06,
        "Harga" => 0.04,
        "ZTE" => 0.04,
        "Sharp" => 0.04,
        "HTC" => 0.02,
        "Caterpillar" => 0.02,
        "Acer" => 0.02,
        "RIM" => 0.02,
        "Fujitsu" => 0.02,
        "Alcatel" => 0.02,
        "Gionee" => 0.01,
        "Other" => 0.08,
    ],
    "2020-05" => [
        "Samsung" => 24.91,
        "Oppo" => 20.62,
        "Xiaomi" => 19.8,
        "Mobicel" => 11.4,
        "Apple" => 7.86,
        "Realme" => 3.72,
        "Asus" => 2.97,
        "Unknown" => 2.88,
        "Huawei" => 1.05,
        "Vivo" => 0,
        "Lenovo" => 0.83,
        "Sony" => 0.63,
        "Infinix" => 0.47,
        "BBK" => 0.6,
        "Nokia" => 0.51,
        "LG" => 0.25,
        "Smartfren" => 0.22,
        "Motorola" => 0.16,
        "Meizu" => 0.14,
        "Xolo" => 0.15,
        "Lava" => 0.11,
        "Google" => 0.09,
        "OnePlus" => 0.06,
        "Coolpad" => 0.07,
        "BlackBerry" => 0.07,
        "Wiko" => 0.06,
        "Harga" => 0.09,
        "ZTE" => 0.04,
        "Sharp" => 0.03,
        "HTC" => 0.02,
        "Caterpillar" => 0.03,
        "Acer" => 0.02,
        "RIM" => 0.02,
        "Fujitsu" => 0.02,
        "Alcatel" => 0.02,
        "Gionee" => 0.01,
        "Other" => 0.07,
    ],
    "2020-06" => [
        "Samsung" => 24.38,
        "Oppo" => 20.55,
        "Xiaomi" => 19.83,
        "Mobicel" => 11.94,
        "Apple" => 7.5,
        "Realme" => 3.96,
        "Asus" => 2.84,
        "Unknown" => 3.37,
        "Huawei" => 1,
        "Vivo" => 0,
        "Lenovo" => 0.76,
        "Sony" => 0.62,
        "Infinix" => 0.49,
        "BBK" => 0.55,
        "Nokia" => 0.46,
        "LG" => 0.23,
        "Smartfren" => 0.21,
        "Motorola" => 0.15,
        "Meizu" => 0.14,
        "Xolo" => 0.15,
        "Lava" => 0.1,
        "Google" => 0.08,
        "OnePlus" => 0.06,
        "Coolpad" => 0.06,
        "BlackBerry" => 0.06,
        "Wiko" => 0.06,
        "Harga" => 0.13,
        "ZTE" => 0.03,
        "Sharp" => 0.03,
        "HTC" => 0.02,
        "Caterpillar" => 0.04,
        "Acer" => 0.02,
        "RIM" => 0.02,
        "Fujitsu" => 0.02,
        "Alcatel" => 0.01,
        "Gionee" => 0.01,
        "Other" => 0.08,
    ],
    "2020-07" => [
        "Samsung" => 24.24,
        "Oppo" => 20.41,
        "Xiaomi" => 20.2,
        "Mobicel" => 12.36,
        "Apple" => 7.25,
        "Realme" => 4.2,
        "Asus" => 2.79,
        "Unknown" => 3.05,
        "Huawei" => 0.99,
        "Vivo" => 0,
        "Lenovo" => 0.76,
        "Sony" => 0.62,
        "Infinix" => 0.53,
        "BBK" => 0.53,
        "Nokia" => 0.46,
        "LG" => 0.22,
        "Smartfren" => 0.2,
        "Motorola" => 0.15,
        "Meizu" => 0.15,
        "Xolo" => 0.15,
        "Lava" => 0.1,
        "Google" => 0.07,
        "OnePlus" => 0.06,
        "Coolpad" => 0.06,
        "BlackBerry" => 0.06,
        "Wiko" => 0.06,
        "Harga" => 0.04,
        "ZTE" => 0.04,
        "Sharp" => 0.04,
        "HTC" => 0.02,
        "Caterpillar" => 0.03,
        "Acer" => 0.02,
        "RIM" => 0.03,
        "Fujitsu" => 0.02,
        "Alcatel" => 0.01,
        "Gionee" => 0.01,
        "Other" => 0.07,
    ],
    "2020-08" => [
        "Samsung" => 24.19,
        "Oppo" => 20.68,
        "Xiaomi" => 20.07,
        "Mobicel" => 12.88,
        "Apple" => 7.63,
        "Realme" => 4.55,
        "Asus" => 2.7,
        "Unknown" => 1.89,
        "Huawei" => 0.98,
        "Vivo" => 0,
        "Lenovo" => 0.72,
        "Sony" => 0.6,
        "Infinix" => 0.59,
        "BBK" => 0.53,
        "Nokia" => 0.45,
        "LG" => 0.21,
        "Smartfren" => 0.2,
        "Motorola" => 0.14,
        "Meizu" => 0.14,
        "Xolo" => 0.15,
        "Lava" => 0.1,
        "Google" => 0.07,
        "OnePlus" => 0.08,
        "Coolpad" => 0.05,
        "BlackBerry" => 0.06,
        "Wiko" => 0.06,
        "Harga" => 0.03,
        "ZTE" => 0.03,
        "Sharp" => 0.04,
        "HTC" => 0.02,
        "Caterpillar" => 0.03,
        "Acer" => 0.02,
        "RIM" => 0.02,
        "Fujitsu" => 0.02,
        "Alcatel" => 0.01,
        "Gionee" => 0.01,
        "Other" => 0.06,
    ],
    "2020-09" => [
        "Samsung" => 23.26,
        "Oppo" => 21.4,
        "Xiaomi" => 19.78,
        "Mobicel" => 13.25,
        "Apple" => 7.93,
        "Realme" => 5.32,
        "Asus" => 2.46,
        "Unknown" => 1.54,
        "Huawei" => 0.91,
        "Vivo" => 0,
        "Lenovo" => 0.6,
        "Sony" => 0.54,
        "Infinix" => 0.74,
        "BBK" => 0.49,
        "Nokia" => 0.42,
        "LG" => 0.19,
        "Smartfren" => 0.16,
        "Motorola" => 0.12,
        "Meizu" => 0.12,
        "Xolo" => 0.11,
        "Lava" => 0.09,
        "Google" => 0.07,
        "OnePlus" => 0.08,
        "Coolpad" => 0.05,
        "BlackBerry" => 0.06,
        "Wiko" => 0.05,
        "Harga" => 0.03,
        "ZTE" => 0.03,
        "Sharp" => 0.03,
        "HTC" => 0.02,
        "Caterpillar" => 0.02,
        "Acer" => 0.02,
        "RIM" => 0.01,
        "Fujitsu" => 0.01,
        "Alcatel" => 0.01,
        "Gionee" => 0.01,
        "Other" => 0.06,
    ],
    "2020-10" => [
        "Samsung" => 23.73,
        "Oppo" => 22.12,
        "Xiaomi" => 20.31,
        "Mobicel" => 10.24,
        "Apple" => 8.27,
        "Realme" => 5.68,
        "Asus" => 2.45,
        "Unknown" => 2.2,
        "Huawei" => 0.92,
        "Vivo" => 0.02,
        "Lenovo" => 0.57,
        "Sony" => 0.53,
        "Infinix" => 0.87,
        "BBK" => 0.46,
        "Nokia" => 0.42,
        "LG" => 0.18,
        "Smartfren" => 0.16,
        "Motorola" => 0.12,
        "Meizu" => 0.1,
        "Xolo" => 0.01,
        "Lava" => 0.09,
        "Google" => 0.07,
        "OnePlus" => 0.09,
        "Coolpad" => 0.05,
        "BlackBerry" => 0.05,
        "Wiko" => 0.05,
        "Harga" => 0.02,
        "ZTE" => 0.03,
        "Sharp" => 0.03,
        "HTC" => 0.02,
        "Caterpillar" => 0.02,
        "Acer" => 0.01,
        "RIM" => 0.01,
        "Fujitsu" => 0.01,
        "Alcatel" => 0.01,
        "Gionee" => 0.01,
        "Other" => 0.06,
    ],
    "2020-11" => [
        "Samsung" => 26.19,
        "Oppo" => 24.89,
        "Xiaomi" => 21.77,
        "Mobicel" => 0,
        "Apple" => 8.71,
        "Realme" => 6.3,
        "Asus" => 2.49,
        "Unknown" => 4.19,
        "Huawei" => 1.01,
        "Vivo" => 0.09,
        "Lenovo" => 0.62,
        "Sony" => 0.55,
        "Infinix" => 1.03,
        "BBK" => 0.43,
        "Nokia" => 0.44,
        "LG" => 0.2,
        "Smartfren" => 0.17,
        "Motorola" => 0.12,
        "Meizu" => 0.11,
        "Xolo" => 0,
        "Lava" => 0.1,
        "Google" => 0.08,
        "OnePlus" => 0.1,
        "Coolpad" => 0.05,
        "BlackBerry" => 0.05,
        "Wiko" => 0.05,
        "Harga" => 0.02,
        "ZTE" => 0.03,
        "Sharp" => 0.03,
        "HTC" => 0.02,
        "Caterpillar" => 0.01,
        "Acer" => 0.01,
        "RIM" => 0.01,
        "Fujitsu" => 0.01,
        "Alcatel" => 0.01,
        "Gionee" => 0.02,
        "Other" => 0.07,
    ],
    "2020-12" => [
        "Samsung" => 23.33,
        "Oppo" => 22.11,
        "Xiaomi" => 19.95,
        "Mobicel" => 0,
        "Apple" => 7.5,
        "Realme" => 6.09,
        "Asus" => 2.22,
        "Unknown" => 1.68,
        "Huawei" => 0.88,
        "Vivo" => 12.33,
        "Lenovo" => 0.53,
        "Sony" => 0.49,
        "Infinix" => 0.98,
        "BBK" => 0.36,
        "Nokia" => 0.41,
        "LG" => 0.17,
        "Smartfren" => 0.14,
        "Motorola" => 0.11,
        "Meizu" => 0.1,
        "Xolo" => 0,
        "Lava" => 0.08,
        "Google" => 0.08,
        "OnePlus" => 0.09,
        "Coolpad" => 0.04,
        "BlackBerry" => 0.05,
        "Wiko" => 0.04,
        "Harga" => 0.02,
        "ZTE" => 0.03,
        "Sharp" => 0.03,
        "HTC" => 0.02,
        "Caterpillar" => 0,
        "Acer" => 0.01,
        "RIM" => 0.01,
        "Fujitsu" => 0.01,
        "Alcatel" => 0.01,
        "Gionee" => 0.01,
        "Other" => 0.09,
    ],
];
$mathVariable['b'] = "";
$mathVariable['c'] = [];
foreach($mathVariable['a'] as $year => $marketShare){
	$str = "";
	$mathVariable['b'] .= "$year => {";
	foreach($marketShare as $vendor => $percentage){
		$str .= "$vendor => $percentage, ";
        array_push($mathVariable['c'], $vendor);
	}
	$mathVariable['b'] .= $str . "} \n\n";
	$mathVariable['b'] = str_replace(", }","}",$mathVariable['b']);
}
$mathVariable['c'] = array_unique($mathVariable['c']);
$mathVariable['d'] = $mathVariable['c'][random_int(0, count($mathVariable['c'])-1)];
for($i = 0; $i < 4; $i++){
    $data = $mathVariable['a'];
    $yearReference = "2020-0".($i+1);
    $brand = $mathVariable['d'];
    $percentValue = $data[$yearReference][$brand];
    while ($percentValue === 0){
        $mathVariable['d'] = $mathVariable['c'][random_int(0, count($mathVariable['c'])-1)];
        $brand = $mathVariable['d'];
        $percentValue = $data[$yearReference][$brand];
    }
}
// correct_answer
$mathVariable['e'] = 0;
foreach ($mathVariable['a'] as $year => $marketShare) {
    foreach($marketShare as $vendor => $percentage){
        if($vendor === $mathVariable['d']) {
            $mathVariable['e'] += $percentage;
        }
    }
}
$mathVariable['e'] = $mathVariable['e'] / 4;
// distractor
$mathVariable['f'] = $mathVariable['e'] / 2;
$mathVariable['g'] = $mathVariable['e'] - 0.01;
$mathVariable['h'] = $mathVariable['e'] * 0.1;
$mathVariable['i'] = $mathVariable['e'] * 4/10;
// question
$itemArray[15] = [
    "number" => 16,
    "question" =>
        "Data pangsa pasar dikelompokkan dalam format {tahun-bulan => {merk => persentase}}. Berikut data pangsa pasar tahun 2020.\n".$mathVariable['b'].". Berapa persen rata-rata pangsa pasar dari merk ".$mathVariable['d']."?",
    "options" => [
        ["option" => number_format($mathVariable["i"] * 100, 2, ",")."%", "isTrue" => 0],
        ["option" => number_format($mathVariable["h"] * 100, 2, ",")."%", "isTrue" => 0],
        ["option" => number_format($mathVariable["g"] * 100, 2, ",")."%", "isTrue" => 0],
        ["option" => number_format($mathVariable["f"] * 100, 2, ",")."%", "isTrue" => 0],
        ["option" => number_format($mathVariable["e"] * 100, 2, ",")."%", "isTrue" => 1],
    ],
];

$mathVariable['b'] = "";
$mathVariable['c'] = [];
foreach($mathVariable['a'] as $year => $marketShare){
	$str = "";
	$mathVariable['b'] .= "$year => {";
	foreach($marketShare as $vendor => $percentage){
		$str .= "$vendor => $percentage, ";
        array_push($mathVariable['c'], $vendor);
	}
	$mathVariable['b'] .= $str . "} \n\n";
	$mathVariable['b'] = str_replace(", }","}",$mathVariable['b']);
}
$mathVariable['c'] = array_unique($mathVariable['c']);
$mathVariable['d'] = ["Oktober", "November", "Desember"];
$mathVariable['e'] = random_int(0, count($mathVariable['d'])-1);
$mathVariable['d'] = $mathVariable['d'][$mathVariable['e']];
$mathVariable['f'] = [];
foreach($mathVariable['a'] as $year => $marketShare){
    $reference = "2020-".(10+$mathVariable['e']);
    if($year === $reference) {
        foreach ($marketShare as $vendor => $percentage) {
            if ($percentage !== 0){
                array_push($mathVariable['f'], [$vendor, $percentage]);
            }
        }
    }
}
// correct_answer
for($i = 0; $i < count($mathVariable['f']); $i++){
	$precision = 0.001;
	$currentVendor = $mathVariable['f'][$i][0];
	$currentValue = $mathVariable['f'][$i][1];
	for($j = 0; $j < count($mathVariable['f']); $j++){
		if($i === $j) continue;
		$nextVendor = $mathVariable['f'][$j][0];
		$nextValue = $mathVariable['f'][$j][1];
		
		if($currentValue-$nextValue > $precision){
			$mathVariable['g'] = [$nextVendor, $nextValue];
		} else {
			$mathVariable['g'] = [$currentVendor, $currentValue];
		}
	}
}
// distraktor
$mathVariable['h'] = [];
foreach($mathVariable['a'] as $year => $marketShare){
    foreach($marketShare as $vendor => $percentage){
        if($percentage > $mathVariable['h'][1]){
            array_push($mathVariable['h'], [$vendor, $percentage]);
        }
    }
}
// question
$itemArray[16] = [
    "number" => 17,
    "question" =>
        "Data pangsa pasar dikelompokkan dalam format {tahun-bulan => {merk => persentase}}. Berikut data pangsa pasar pada tahun 2020.\n".$mathVariable['b'].". Berdasarkan data tersebut merk yang memiliki pangsa pasar dengan persentase ".($mathVariable['g'][1] * 100)."% pada bulan ".$mathVariable['d']." adalah ....",
    "options" => [
        ["option" => $mathVariable["g"][0][0], "isTrue" => 1],
        ["option" => $mathVariable["h"][random_int(0,8)][0], "isTrue" => 0],
        ["option" => $mathVariable["h"][random_int(9, 17)][0], "isTrue" => 0],
        ["option" => $mathVariable["h"][random_int(18, 26)][0], "isTrue" => 0],
        ["option" => $mathVariable["h"][random_int(27, count($mathVariable['h'])-1)][0], "isTrue" => 0],
    ],
];

$mathVariable['a'] = [random_int(4,6), random_int(10,50)];
$mathVariable['b'] = [$mathVariable['a'][0] + random_int(1,3), random_int(10,50)];
$mathVariable['c'] = random_int(40,80);
$mathVariable['d'] = ($mathVariable['b'][0] * 60 + $mathVariable['b'][1]) - ($mathVariable['a'][0] * 60 + $mathVariable['a'][1]);
// correct_answer
$mathVariable['e'] = $mathVariable['d'] / 60 * $mathVariable['c'];
// distractor
$mathVariable['f'] = $mathVariable['c'];
$mathVariable['g'] = $mathVariable['e'] + random_int(1,2) * 10;
$mathVariable['h'] = $mathVariable['e'] - random_int(1,2) * 10;
$mathVariable['i'] = $mathVariable['e'] + (random_int(0,1) === 0 ? $mathVariable['c']/2 : $mathVariable['c']/(-2));
// question
$itemArray[17] = [
    "number" => 18,
    "question" =>
        "Rini berangkat dari rumahnya ke kantor menggunakan sepeda motor pada pukul 0".$mathVariable['a'][0].".".$mathVariable['a'][1]." dan sampai pada pukul 0".$mathVariable['b'][0].".".$mathVariable['b'][1].". Apabila Rini berkendara dengan kecepatan rata-rata ".$mathVariable['c']." km/jam, maka jarak kantor dari rumah Rini adalah ....",
    "options" => [
        ["option" => number_format($mathVariable['f']), "isTrue" => 0],
        ["option" => number_format($mathVariable['g']), "isTrue" => 0],
        ["option" => number_format($mathVariable['e']), "isTrue" => 1],
        ["option" => number_format($mathVariable['h']), "isTrue" => 0],
        ["option" => number_format($mathVariable['i']), "isTrue" => 0],
    ],
];

$mathVariable['a'] = [random_int(1,28), random_int(1,12), random_int(1990, 2010)];
$mathVariable['b'] = [random_int(1,28), random_int(1,12), $mathVariable['a'][2] + random_int(1,50)];
$mathVariable['c'] = [];
for($i = 0; $i < count($mathVariable['a']); $i++){
    $mathVariable['c'][$i] = $mathVariable['b'][$i] - $mathVariable['a'][$i];
}
$mathVariable['a'] = implode("-", $mathVariable['a']);
$mathVariable['b'] = implode("-", $mathVariable['b']);
// correct_answer
if ($mathVariable['c'][0] < 0) {
    $mathVariable['c'][1] -= 1;
    $mathVariable['c'][0] += 30;
}
if ($mathVariable['c'][1] < 0){
    $mathVariable['c'][2] -= 1;
    $mathVariable['c'][1] += 12;
}
// distractor
$mathVariable['d'] = [];
$mathVariable['e'] = [];
$mathVariable['f'] = [];
$mathVariable['g'] = [];
for ($i=0; $i < count($mathVariable['c']); $i++) {
    do {
        $mathVariable['d'][$i] = abs($mathVariable['c'][$i] + random_int(-2, 2));
        $mathVariable['e'][$i] = abs($mathVariable['c'][$i] - random_int(-2, 2));
        $mathVariable['f'][$i] = abs($mathVariable['d'][$i] + random_int(-3, 3));
        $mathVariable['g'][$i] = abs($mathVariable['d'][$i] - random_int(-3, 3));

        $equalCorrectAnswer = ($mathVariable['d'][$i] === $mathVariable['c'][$i]) && ($mathVariable['e'][$i] === $mathVariable['c'][$i]) && ($mathVariable['f'][$i] === $mathVariable['c'][$i]) && ($mathVariable['g'][$i] === $mathVariable['c'][$i]);

        $equalZero = ($mathVariable['d'] === 0) || ($mathVariable['e'] === 0) || ($mathVariable['f'] === 0) || ($mathVariable['g'] === 0);
    } while (!$equalCorrectAnswer || !$equalZero);
}
// question
$itemArray[18] = [
    "number" => 19,
    "question" =>
        "{Nama: Erin; Tanggal lahir: ".$mathVariable['a']."; Tanggal hari ini: ".$mathVariable['b']."}. Berdasarkan data tersebut, usia Erin adalah .... ",
    "options" => [
        ["option" => $mathVariable['d'][2]." tahun ".$mathVariable['d'][1]." bulan ".$mathVariable['d'][0]." hari", "isTrue" => 0],
        ["option" => $mathVariable['e'][2]." tahun ".$mathVariable['e'][1]." bulan ".$mathVariable['e'][0]." hari", "isTrue" => 0],
        ["option" => $mathVariable['f'][2]." tahun ".$mathVariable['f'][1]." bulan ".$mathVariable['f'][0]." hari", "isTrue" => 0],
        ["option" => $mathVariable['c'][2]." tahun ".$mathVariable['c'][1]." bulan ".$mathVariable['c'][0]." hari", "isTrue" => 1],
        ["option" => $mathVariable['g'][2]." tahun ".$mathVariable['g'][1]." bulan ".$mathVariable['g'][0]." hari", "isTrue" => 0],
    ],
];

$mathVariable['a'] = ["IPS" => 0, "IPA" => 0, "Bahasa Inggris" => 0, "Bahasa Indonesia" => 0, "Seni Budaya" => 0, "Penjaskes" => 0, "Bahasa Mandarin" => 0, "Bahasa Daerah" => 0];
$mathVariable['b'] = random_int(100, 1500);
do {
  foreach($mathVariable['a'] as $key => $value){
    $mathVariable['a'][$key] = random_int(10,$mathVariable['b']/2-10);
  }
} while (array_sum($mathVariable['a']) !== $mathVariable['b']);
$mathVariable['c'] = $mathVariable['a'];
foreach($mathVariable['a'] as $key => $value){
    $percentageValue = round($value/$mathVariable['b']*100, 2);
    $mathVariable['c'][$key] = $percentageValue;
}
$mathVariable['d'] = json_encode($mathVariable['c']);
$mathVariable['e'] = random_int(1,80);
while (is_float($mathVariable['b'] * $mathVariable['e']/100) || $mathVariable['e'] === 50){
  $mathVariable['e'] = random_int(1,80);
};
$mathVariable['e'] /= 100;
// correct_answer
$mathVariable['f'] = $mathVariable['e'] * $mathVariable['b'];
// distraktor
$mathVariable['g'] = round((1-$mathVariable['e']) * $mathVariable['b']);
do {
$mathVariable['h'] = $mathVariable['a'][array_rand($mathVariable['a'])];
$mathVariable['i'] = round($mathVariable['c'][array_rand($mathVariable['c'])]/100 * $mathVariable['b']);
$mathVariable['j'] = round((1-$mathVariable['c'][array_rand($mathVariable['c'])]/100) * $mathVariable['b']);

    $equalCorrectAnswer = ($mathVariable['h'] === $mathVariable['f']) || ($mathVariable['i'] === $mathVariable['f']) || ($mathVariable['j'] === $mathVariable['f']);
} while ($equalCorrectAnswer);
// question
$itemArray[19] = [
    "number" => 20,
    "question" =>
        "Data minat dari ".$mathVariable['b']." siswa pada 8 mata pelajaran di daerah X dikelompokkan dalam format berikut {\"mata_pelajaran\": persentase_minat}: ".$mathVariable['d'].". Apabila ".number_format(100 - $mathVariable['e'] * 100)."% dari siswa yang didata berjenis kelamin perempuan, maka jumlah siswa yang berjenis kelamin laki-laki adalah ....",
    "options" => [
        ["option" => round($mathVariable['f']), "isTrue" => 1],
        ["option" => round($mathVariable['g']), "isTrue" => 0],
        ["option" => round($mathVariable['h']), "isTrue" => 0],
        ["option" => round($mathVariable['i']), "isTrue" => 0],
        ["option" => round($mathVariable['j']), "isTrue" => 0],
    ],
];

$mathVariable['a'] = ["IPS" => 0, "IPA" => 0, "Bahasa Inggris" => 0, "Bahasa Indonesia" => 0, "Seni Budaya" => 0, "Penjaskes" => 0, "Bahasa Mandarin" => 0, "Bahasa Daerah" => 0];
$mathVariable['e'] = [array_rand($mathVariable['a']), random_int(3,21)];
$mathVariable['b'] += $mathVariable['e'][1];
$mathVariable['f'] = [];
do {
    $mathVariable['f'][0] = $mathVariable['a'][array_rand($mathVariable['a'])];
} while ($mathVariable['f'][0] === $mathVariable['e'][0]);
foreach($mathVariable['a'] as $key => $value){
  if($key === $mathVariable['e'][0]) {
    $mathVariable['a'][$key] = $value + $mathVariable['e'][1];
  }
  $percentageValue = round($value/$mathVariable['b']*100, 2);
  $mathVariable['c'][$key] = $percentageValue;
}
// correct_answer
foreach($mathVariable['c'] as $key => $value){
    if($key === $mathVariable['e'][0]){
        $mathVariable['f'][1] = $value;
    }
}
// distractor
do {
$mathVariable['g'] = $mathVariable['c'][array_rand($mathVariable['c'])] + random_int(0,1)/10;
$mathVariable['h'] = $mathVariable['c'][array_rand($mathVariable['c'])] - random_int(1,2)/10;
$mathVariable['i'] = $mathVariable['c'][array_rand($mathVariable['c'])] + random_int(1,10)/10;
$mathVariable['j'] = 1 - $mathVariable['c'][array_rand($mathVariable['c'])];

$equalCorrectAnswer = ($mathVariable['g'] === $mathVariable['f'][1]) || ($mathVariable['h'] === $mathVariable['f'][1]) || ($mathVariable['i'] === $mathVariable['f'][1]);
} while ($equalCorrectAnswer);
// question
$itemArray[20] = [
    "number" => 21,
    "question" =>
        "Data minat dari ".$mathVariable['b']." siswa pada 8 mata pelajaran di daerah X dikelompokkan dalam format berikut {\"mata_pelajaran\": persentase_minat}: ".$mathVariable['d'].". Apabila data yang ada diperbarui dengan ditambahkan ".$mathVariable['e'][1]." siswa yang berminat dengan mata pelajaran ".$mathVariable['e'][0]." maka persentase siswa dengan minat mata pelajaran ".$mathVariable['f'][0]." menjadi ....",
    "options" => [
        ["option" => round($mathVariable['f'][1],2), "isTrue" => 1],
        ["option" => round($mathVariable['g'],2), "isTrue" => 0],
        ["option" => round($mathVariable['h'],2), "isTrue" => 0],
        ["option" => round($mathVariable['i'],2), "isTrue" => 0],
        ["option" => round($mathVariable['j'],2), "isTrue" => 0],
    ],
];

?>
