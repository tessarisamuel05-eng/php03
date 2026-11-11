<?php
$users = [
  ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'NB'],
];
echo ('Buongiorno Sig. ' . $users[0]['name'] . ' ' . $users[0]['surname']);
$users2 = [
  ['name' => 'Maria', 'surname' => 'Guerra', 'gender' => 'NB'],
];
echo ('Buongiorno Sig.ra ' . $users2[0]['name'] . ' ' . $users2[0]['surname']);