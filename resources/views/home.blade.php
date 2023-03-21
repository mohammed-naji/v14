<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>

    <div class="container">
    <h2>Our Courses</h2>
    <table class="table table-bordered table-hover table-striped">
        <tr class="table-dark">
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Hours</th>
            <th>Instructor</th>
        </tr>

        @foreach($courses as $course)
        {{-- @dump($loop) --}}
        <tr {{ ($loop->last) ? 'class=bg-success' : '' }} >
            <td><?= $course['id'] ?></td>
            <td><?= $course['name'] ?></td>
            <td><?= $course['price'] ?></td>
            <td><?= $course['hours'] ?></td>
            <td><?= $course['instructor'] ?></td>
        </tr>
        @endforeach
    </table>
    </div>











<!-- <ul>
    <?php //foreach($features as $aa): ?>
    <li><?php //echo $aa ?></li>
    <?php //endforeach ?>
</ul> -->


<?php
// echo '<ul>';
//     foreach($features as $aa) {
//         echo '<li>'.$aa.'</li>';
//     }
// echo '</ul>';

?>


</body>
</html>
