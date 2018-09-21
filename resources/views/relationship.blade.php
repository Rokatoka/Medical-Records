<<!DOCTYPE html>
<html>
<head>
    <title>Relationships page</title>
</head>
<body>
    <ul>
    @foreach ($treatmentpat as $tr)
    <li><?= $tr->diagnosis; ?></li>
    @endforeach
    </ul>
    <ol>
    @foreach ($treatmentdoc as $tr)
    <li><?= $tr->analysis ?></li>
    </ol>
    <ul>
    @foreach ($treatmenthos as $tr)
    <li><?= $tr->treatment; ?></li>
    @endforeach
    </ul>
</body>
</html>