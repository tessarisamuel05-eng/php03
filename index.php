<?php
$words1 = [
  'mi',
  [
    'oscura',
    'era',
    'mezzo',
    'ritrovai',
    'per'
  ],
  'diritta'
];
$words2 = [
    'elemento1' => 'Nel',
    'elemento2' => 'di cammin di nostra vita',
    'elemento3' => [
        'una selva',
        "che'",
        'via',
        'smarrita'
    ],
    ];
    $result = $words2['elemento1'] . ' ' .
           $words1[1][2] . ' ' .
           $words2['elemento2'] . ' ' .
           $words1[0] . ' ' .
           $words1[1][3] . ' ' .
           $words1[1][4] . ' ' .
           $words2['elemento3'][0] . ' ' .
           $words1[1][0] . ', ' .
           $words2['elemento3'][1] . ' la ' .
           $words1[2] . ' ' .
           $words2['elemento3'][2] . ' era ' .
           $words2['elemento3'][3];

echo $result;