<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of awards</title>
</head>

<body>
    <h1>List of Awards</h1>

    <ul>
        <?php foreach ($awards as $award) :?>
        <li>
            <?=$award?>
        </li>
        <?php endforeach ;?>
    </ul>

    <br>
    <ul>
        <?php foreach ($actors as $actor) :?>
        <li>
            <?=$actor?>
        </li>
        <?php endforeach ;?>
    </ul>



</body>

</html>