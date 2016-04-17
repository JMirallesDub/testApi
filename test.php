<?php
// request list of contacts from Web API
$json = file_get_contents('http://jsonplaceholder.typicode.com/photos/');

// deserialize data from JSON
$photos = json_decode($json);
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
    <table>
    <?php
    foreach($photos as $photo)
    {
        ?>
        <tr>
            <td valign="top">
                <?php echo $photo->title ?>
            </td>
            <td valign="top">
                <?php echo $photo->url ?>
            </td>
            <td valign="top">
                <?php echo $photo->thumbnailUrl ?>
            </td>
        </tr>
        <?php
    }
    ?>
    </table>
</body>
</html>
