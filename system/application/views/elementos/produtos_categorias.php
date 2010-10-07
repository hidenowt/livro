<?php
echo "<div id='menu-categorias'>";
    echo heading('Categorias', 3);

    foreach($categorias as $categoria):
        $lista[] = "<a href='" . base_url() . "produtos/categoria/" . $categoria->id . "'>" . $categoria->nome . "</a>";
    endforeach;

    echo ul($lista);
echo "</div>";
?>