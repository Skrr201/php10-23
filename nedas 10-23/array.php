<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $array_1 = [123, 25, 57, 74];
    // var_dump($array_1);
    // echo $array_1[1];

    $array_2 = [
        'vardas' => 'Petras',
        'amzius' => 53,
        'megstamas_dalykas' => ['Matke', 'PHP']
    ];
    // var_dump($array_2);
    // echo $array_2['vardas'] . ', jam yra ' . $array_2['amzius'] . ' metai.';
    // echo'<br/>';
    // echo 'megstamas_dalykas: ' . implode(', ', $array_2['megstamas_dalykas']);

    $sarasas = 'Matke, PHP';
    $sarasas_2 = explode (', ', $sarasas);

    // var_dump($sarasas_2);



    ?>
</body>
</html>