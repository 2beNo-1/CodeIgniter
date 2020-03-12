<html>
<head>
    <title><?php echo $title ?></title>
</head>
<body>
<h1><?php echo $header ?></h1>
<h3>My todo list</h3>
<?php foreach ($todo_list as $item): ?>
    <i><?php echo $item ?></i><br>
<?php endforeach; ?>
</body>
</html>