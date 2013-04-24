<?php

function link_to($descricao, $url) {

        return "<a href=\"$url\">$descricao</a>";
        
}

function render_partial($pagina) {
    
        if(file_exists("pags/$pagina.php")) {
                include("pags/$pagina.php");    
        } else {
                include("pags/home.php");       
        }
    
}

function validaCaracter($str) {
        
        if($str != '') return "'" . strtoupper($str) . "'"; else return "NULL";
        
}

function retornaTelefone(){
    $sql = "SELECT TELEFONES FROM FILIAL WHERE IDFILIAL = '01'";
    $result = ibase_query($sql) or die(ibase_errmsg());
    $row = ibase_fetch_object($result);
    return $telefone = $row->TELEFONES;
}

function retornaEndereco(){
        $sql ="SELECT ENDERECO FROM FILIAL WHERE IDFILIAL = '01'";
        $result = ibase_query($sql) or die(ibase_errmsg());
    $row = ibase_fetch_object($result);
    return $endereco = $row->ENDERECO;
}



?>