<table class="table">
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
