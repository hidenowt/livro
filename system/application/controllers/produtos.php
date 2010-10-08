<?php
class Produtos extends Controller {

    function __construct() {
        parent::Controller();
    }

    function detalhe($id) {
        $query = $this->db->get('categorias');
        $dados['categorias'] = $query->result();

        $dados['titulo'] = 'Cat&aacute;logo de produtos | Detalhes do Produto';

        $this->db->where('id', $id);
        $query = $this->db->get('produtos');
        $dados['detalhes_produto'] = $query->result();

        $this->load->view('elementos/html_header', $dados);
        $this->load->view('elementos/produtos_categorias', $dados);
        $this->load->view('produto_detalhes', $dados);
        $this->load->view('elementos/html_footer', $dados);
    }

}