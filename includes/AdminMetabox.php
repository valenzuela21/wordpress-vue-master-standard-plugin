<?php
namespace App;

class AdminMetabox{

    public function __construct()
    {

        add_action( 'add_meta_boxes', [$this,'quizbook_agregar_metaboxes'] );
    }


    public function quizbook_agregar_metaboxes(){
        /* Postype type product, post, page or personalized*/
        /* Position metabox of Type String: normal, side or avanced */

        add_meta_box( 'quizbook_meta_box', 'Respuestas', [$this, 'content_metabox_admin'], array('page','product'), 'normal', 'high', null );
    }

    public function content_metabox_admin(){
        wp_enqueue_script( 'baseplugin-adminmetabox' );

        echo "<div id='vue-metaboxes-app'></div>";

    }



}


