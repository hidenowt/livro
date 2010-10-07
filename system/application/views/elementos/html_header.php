<?php
    doctype('html5');
?>
<html lang="pt-br">
    <head>
        <title><?php echo $titulo; ?></title>
            <?php
                $meta = array(
                    array('charset' => 'utf-8'),
                    array('name' => 'robots', 'content' => 'no-cache'),
                    array('name' => 'description', 'content' => 'Descrição do website'),
                    array('name' => 'keywords', 'content' => 'palavra1, palavra2, palavra3'),
                    array('name' => 'Content-type', 'content' => 'text/html; charset=utf-8', 'type' => 'equiv')
                );

                echo meta($meta);
                
                $link = array(
                        'href' => 'css/estilo.css',
                        'rel' => 'stylesheet',
                        'type' => 'text/css',
                        'media' => 'screen'
                );

                echo link_tag($link);
            ?>
    </head>
    <body>