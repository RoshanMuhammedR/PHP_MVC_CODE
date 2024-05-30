<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Product<br><br></h1>
    <?php foreach($results as $result): ?>
        <h3><?= htmlspecialchars($result['id']) ?></h3>
        <h2><?= htmlspecialchars($result['name']) ?></h2>
        <p><?= htmlspecialchars($result['desc']) ?></p>
    <?php endforeach; ?>
</body>
</html>