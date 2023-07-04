<?php

class Mi_Widget extends \Elementor\Widget_Base {
    public function get_Name() {
        return 'mi-widget';
        
    }

    public function get_title() {
        return __ ('Mi Widget', 'mi-widget-elementor');
        
    }

    public function get_icon() {
        return 'fas fa-greeting-card';
        
    }

    public function get_categories()
    {
        return ['general'];   
    }

    public function _register_controls(){
        $this->start_controls_section(
            'content_section',
            [
                'label' => __('Contenido', ',mi-widget-elementor'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,

            ]
        );

        $this->add_control(
            'titulo',
            [
                'label' => __('Titulo', ',mi-widget-elementor'),
                'tab' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Titulo de la tarjeta', ',mi-widget-elementor'),

            ]
        );

        $this->add_control(
            'imagen',
            [
                'label' => __('Imagen', ',mi-widget-elementor'),
                'tab' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],

            ]
        );

        $this->end_controls_section();
    }

    protected function render(){
        $settings = $this->get_settings_for_display();

        echo '
        <div class="mi-widget">
        <h2 class="mi-widget-titulo">'.$settings['titulo'].'</h2>
        <img class="mi-widget-imagen" src="'.$settings['imagen']['url'].'">
        </div>
        ';
    }
}