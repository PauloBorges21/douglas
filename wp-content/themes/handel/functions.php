<?php 
// As Funções respentam a ordem do código caso não 

function handel_add_woocommecer_support(){

    add_theme_support( 'woocommercer');
}

add_action('after_setup_theme', 'handel_add_woocommecer_support');



function handel_css() {  //Nome da Função

    wp_register_style('handel-style', get_template_directory_uri() . '/style.css', [],'1.0.0',false);
    
    
    /* 
      1 parametro é um nome x,
      2º é o caminho,
      3 se tem dependencia se ele vai ser carregado caso outro arquivo seja carregado,
      4 a versão, caso esteja usando algum gerenciador de cache provavelmente não ira mudar pois precisamos trocar a versão
      5 se foi definido alguma midia, podemos omitir ou deixar como false (obs pesquisar sobre)
*/
    // wp_enqueue_style explicação do prof, como se registracemos ele colocarmos na fila 
     wp_enqueue_style('handel-style');
    
} 

add_action('wp_enqueue_scripts','handel_css');
