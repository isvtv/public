//Working!
<?php
$option = 'url';
$op = $pdo->prepare("SELECT option_value FROM op WHERE option_name = ?");
$op->execute([$option]);
$opp = $op->fetch(PDO::FETCH_ASSOC);
echo $opp['option_value'];
?>

//Not working
<?php
function get_option($option)
{
    $op = $pdo->prepare("SELECT option_value FROM op WHERE option_name = ?");
    $op->execute([$option]);
    $opp = $op->fetch(PDO::FETCH_ASSOC);
    return $opp['option_value'];
} ?>
<?php echo get_option('url'); ?>
