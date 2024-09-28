<?php

$menu = [
  [
    "nama" => "Beranda"
  ],
  [
    "nama" => "Berita",
    "subMenu" => [
      [
        "nama" => "Wisata",
        "subMenu" => 
        [
          "nama" => "Pantai"
        ],
        [
          "nama" => "Gunung"
        ]
      ],
      [
        "nama" => "Kuliner"
      ],
      [
        "nama" => "Hiburan"
      ]
    ]
  ],
  [
    "nama" => "Tentang"
  ],
  [
    "nama" => "Kontak"
  ]
];

function tampilkanMenuBertingkat (array $menu) {
  echo "<ul>";
  foreach ($menu as $item) {
    echo "<li>{$item['nama']}</li>";
    if (!empty($item['subMenu'])) {
      echo "<ul>";
      foreach ($item['subMenu'] as $subItem) {
        echo "<li>{$subItem['nama']}</li>";
        if (!empty($subItem['subMenu'])) {
          echo "<ul>";
          foreach ($item['subMenu'] as $subItem) {
            echo "<li>{$subItem['nama']}</li>";
          }
          echo "</ul>";
        }
      }
      echo "</ul>";
    }
  }
  echo "</ul>";
}

tampilkanMenuBertingkat($menu);