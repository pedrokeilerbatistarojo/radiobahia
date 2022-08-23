<?php
if (!class_exists('My_Widget_Author')) :

    class My_Widget_Author extends WP_Widget {

        function __construct(){
            $widget_ops = array('classname' => 'col-lg-12 text-center', 'description' => "Add Authors Radio Bahia Website" );
            parent::__construct('My_Widget_Author', "Website Author", $widget_ops);
        }
    
        function widget($args,$instance){
            echo $args['before_widget'];
            ?>
            <!--Start mg-footer-widget-area-->
            <div class="container-fluid">
                <div class="divide-line"></div>
                <div style="color: white; font-size: 16px;" class="row align-items-center">
                    <!--col-md-4-->
                    <div class="col-md-12 text-center">
                        <p style="font-size: 13px">
                            <strong>Directora:</strong> <span style="color: #1151d3;"><?=$instance["radiobahia_director"]?></span> | 
                            <strong>Webmaster:</strong> <span style="color: #1151d3;"><?=$instance["radiobahia_webmaster"]?></span>
                        </p>
                        <p style="font-size: 13px">

                            <strong>Dirección:</strong> <a target="_blank" href="http://maps.google.com/?q=<?=$instance["radiobahia_address"]?>"><?=$instance["radiobahia_address"]?></a> | 
                            <strong>Correo Electrónico:</strong> <a target="_blank" href="<?=$instance["radiobahia_email"]?>"><?=$instance["radiobahia_email"]?></a>
                        </p>
                    </div>
                </div>
                <!--/row-->
            </div>
            <!--/container-->
            <!--End mg-footer-widget-area-->
            <?php
            echo $args['after_widget'];
        }
    
        function update($new_instance, $old_instance){
            $instance = $old_instance;
            $instance["radiobahia_director"] = strip_tags($new_instance["radiobahia_director"]);
            $instance["radiobahia_webmaster"] = strip_tags($new_instance["radiobahia_webmaster"]);
            $instance["radiobahia_address"] = strip_tags($new_instance["radiobahia_address"]);
            $instance["radiobahia_email"] = strip_tags($new_instance["radiobahia_email"]);

            return $instance;
        }
    
        function form($instance){
            ?>
            <div class="form-group">
                <label for="<?php echo $this->get_field_id('radiobahia_director'); ?>">Director</label>
                <input class="widefat form-control" id="<?php echo $this->get_field_id('radiobahia_director'); ?>" name="<?php echo $this->get_field_name('radiobahia_director'); ?>" type="text" value="<?php echo esc_attr($instance["radiobahia_director"]); ?>" />
            </div>
            <div class="form-group">
                <label for="<?php echo $this->get_field_id('radiobahia_webmaster'); ?>">Webmaster</label>
                <input class="widefat form-control" id="<?php echo $this->get_field_id('radiobahia_webmaster'); ?>" name="<?php echo $this->get_field_name('radiobahia_webmaster'); ?>" type="text" value="<?php echo esc_attr($instance["radiobahia_webmaster"]); ?>" />
            </div>
            <div class="form-group">
                <label for="<?php echo $this->get_field_id('radiobahia_address'); ?>">Dirección</label>
                <input class="widefat form-control" id="<?php echo $this->get_field_id('radiobahia_address'); ?>" name="<?php echo $this->get_field_name('radiobahia_address'); ?>" type="text" value="<?php echo esc_attr($instance["radiobahia_address"]); ?>" />
            </div>
            <div class="form-group">
                <label for="<?php echo $this->get_field_id('radiobahia_email'); ?>">Correo</label>
                <input class="widefat form-control" id="<?php echo $this->get_field_id('radiobahia_email'); ?>" name="<?php echo $this->get_field_name('radiobahia_email'); ?>" type="text" value="<?php echo esc_attr($instance["radiobahia_email"]); ?>" />
            </div>
            <?php
        }
    }

endif;