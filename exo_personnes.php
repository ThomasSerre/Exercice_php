<?php
    $personnes =[
        $p1 = [
            'nom' => 'Serre',
            'prenom' => 'Thomas',
            'age' => 23
        ],
        $p2 = [
            'nom' => 'Durant',
            'prenom' => 'Charles',
            'age' => 16
        ],
        $p3 = [
            'nom' => 'Dupond',
            'prenom' => 'Edouard',
            'age' => 50
        ],
        $p4 = [
            'nom' => 'Dupont',
            'prenom' => 'Robin',
            'age' => 14
        ]
    ];

foreach($personnes as $p){
    if(($p['age']) > 18){
        echo $p['prenom'] . " a plus de 18ans\n";
    }
}
?>