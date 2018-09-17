<<!DOCTYPE html>
<html>
<head>
    <title>Relationships page</title>
</head>
<body>
    <ul>
    @foreach ($treatment as $tr)
    <li><?= $tr->diagnosis; ?></li>
    @endforeach
    </ul>
</body>
</html>