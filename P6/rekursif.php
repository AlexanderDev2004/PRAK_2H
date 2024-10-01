<?php
    // function tampilkandunia(){
    //     echo "halo word";
    //     tampilkandunia();
    // }

    // tampilkandunia();

    // for ($i = 0; $i < 10; $i++) {
    //     echo "Ulang ke-{$i} <br>";
    // }

    // function tampilkanangka (int $jumlah, $index = 1) {
    //     echo "Ulang ke-{$index} <br>";
    //     if ($index < $jumlah) {
    //         tampilkanangka($jumlah, $index + 1);
    //     }
    // }
    // tampilkanangka(20);

    // $menu = [
    //     [
    //         "nama" => "Beranda"
    //     ],
    //     [
    //         "nama" => "Berita",
    //         "subMenu" => [
    //             [
    //                 "nama" => "Wisata",
    //                 "subMenu" => [
    //                     [
    //                         "nama" => "Pantai"
    //                     ],
    //                     [
    //                         "nama" => "Gunung"
    //                     ]
    //                 ]
    //             ],
    //             [
    //                 "nama" => "Kuliner"
    //             ],
    //             [
    //                 "nama" => "Hiburan"
    //             ]
    //         ]
    //     ],
    //     [
    //         "nama" => "Tentang"
    //     ],
    //     [
    //         "nama" => "Kontak"
    //     ]
    // ];
    // function tampilakanmenu (array $menu) {
    //      echo "<ul>";
    //      foreach ($menu as $key => $item) {
    //         echo "<li>{$item['nama']}</li>";
    //      }
    //      echo "</ul>";
    // }
    // tampilakanmenu($menu);

    $menu = [
        ['name' => 'Beranda'],
        ['name' => 'Berita', 'subMenu' => [
            ['name' => 'Wisata', 'subMenu' => [
                ['name' => 'Pantai'],
                ['name' => 'Gunung']
            ]],
            ['name' => 'Kuliner'],
            ['name' => 'Hiburan']
        ]],
        ['name' => 'Tentang'],
        ['name' => 'Kontak']
    ];
    
        function displayMenu($items)
    {
        echo "<ul>";
        foreach ($items as $item) {
            echo "<li>{$item['name']}</li>";
            if (isset($item['subMenu'])) {
                displayMenu($item['subMenu']); 
            }
        }
        echo "</ul>";
    }
    
    
    displayMenu($menu);
?>