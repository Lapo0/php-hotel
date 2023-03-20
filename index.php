<?php 
    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

    // var_dump($hotels)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>HOTEL</title>
</head>
<body>

    <div class="container">
        <h1>
            HOTEL
        </h1>

        <ul>
            <?php 
                foreach ($hotels as $hotel) {
            ?>

                <li>

                    <ul>
                        <?php 
                            foreach ($hotel as $key => $value) {
                        ?>
                        
                            <li>
                                <?php 
                                    echo $key
                                ?>
                                :
                                <?php 
                                    echo $value
                                ?>
                            </li>        
                        <?php
                            }    
                        ?>
                    </ul>
                </li>
            <?php 
                }
            ?>
        </ul>
    </div>

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                <?php 
                foreach ($hotel as $key => $value) {
                ?>
                <th scope="col">
                    <?php echo $key ?>
                </th>
                <?php 
                }
                ?>
                </tr>
            </thead>
            <tbody>
                <?php 
                foreach ($hotels as $hotel) {
                ?>
                <tr>
                    <?php 
                    foreach ($hotel as $key => $value) {
                    ?>
                        <td> 
                            <?php echo $value ?>
                        </td>

                    <?php 
                    }
                    ?>
                </tr>

                <?php 
                    }
                ?>
            </tbody>
        </table>
    </div>
    

    
    
</body>
</html>