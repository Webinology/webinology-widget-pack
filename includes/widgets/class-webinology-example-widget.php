<?php

/**
 * Class webinology_Example_Widget
 */
class webinology_Example_Widget extends WP_Widget
{
    public function __construct()
    {
        $widget_options = array(
            'classname' => 'example_widget',
            'description' => 'This is an example widget',
        );
        parent::__construct('example_widget', 'Example Widget', $widget_options, $control_options);
    }

    public function widget($args, $instance)
    {
        $title = apply_filters('widget_title', $instance[ 'title' ]);
        $blog_title = get_bloginfo( 'name' );
        $tagline = get_bloginfo( 'description' );

        echo $args['before_widget'] . $args['before_title'] . $title . $args['after_title']; ?>

        <p><strong>Site Name:</strong> <?php echo $blog_title ?></p>
        <p><strong>Tagline:</strong> <?php echo $tagline ?></p>

        <?php echo $args['after_widget'];
    }

    public function form($instance)
    {
        $title = ! empty( $instance['title'] ) ? $instance['title'] : ''; ?>
        <p>
        <label for="<?php echo $this->get_field_id( 'title' ); ?>">Title:</label>
        <input type="text" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo esc_attr( $title ); ?>" />
        </p><?php
    }

    public function update($new_instance, $old_instance)
    {
        $instance = $old_instance;
        $instance[ 'title' ] = strip_tags( $new_instance[ 'title' ] );
        return $instance;
    }
}