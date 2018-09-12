<<!DOCTYPE html>
<html>
<head>
    <title>Testing</title>
</head>
<body>
    <ul>
        @foreach ($patient as $pat)
            <li><?= $pat->name; ?></li>
            @endforeach
    </ul>
</body>
</html>