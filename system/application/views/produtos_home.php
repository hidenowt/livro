<?php
echo "<div id='produtos-home'>";
echo heading('Bem vindo ao cat&aacute;logo de proddutos!', 3);
foreach($produtos as $item):
    echo "<span class='item-home'>";
        echo heading($item->nome, 4);
        echo img("imgs/" . $item->foto);
        echo "<a href='" . base_url() . "produtos/detalhe/" . $item->id . "'>Ver Detalhes</a>";
    echo "</span>";
endforeach;

echo "</div>";
?>
