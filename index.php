<?php
// Define the folder path
$folderPath = __DIR__;

// Get the list of folders
$folders = array_filter(glob($folderPath . '/*'), 'is_dir');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Folder Menu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin: 5px 0;
        }
        a {
            text-decoration: none;
            color: #007BFF;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Folder Menu</h1>
    <ul>
        <?php foreach ($folders as $folder): ?>
            <li>
                <a href="<?php echo basename($folder); ?>">
                    <?php echo basename($folder); ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>