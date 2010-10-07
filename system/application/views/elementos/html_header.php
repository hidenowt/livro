<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $titulo; ?></title>
            <?php
                $meta = array(
                    array('name' => 'robots', 'content' => 'no-cache'),
                    array('name' => 'description', 'content' => 'Descrição do website'),
                    array('name' => 'keywords', 'content' => 'palavra1, palavra2, palavra3'),
                    array('name' => 'Content-type', 'content' => 'text/html; charset=utf-8', 'type' => 'equiv')
                );
                echo meta($meta);
            ?>
    </head>
    <body>