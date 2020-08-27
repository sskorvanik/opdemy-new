
<div class="ekit-location elementor-repeater-item-<?php echo esc_attr( $location[ '_id' ] ); ?> <?php echo esc_attr($ekit_hotspot_tigger_on_hover_or_click == 'yes' ? 'ekit-location-on-hover' : 'ekit-location-on-click'); ?> <?php echo esc_attr($ekit_hotspot_all_time_show_hide == 'yes' ? 'active' : ''); ?>">
    <div class="ekit-location_outer">
        <div class="<?php echo esc_attr($ekit_hotspot_location_wraper_image_position); ?> ekit-location_inner">
            <?php if ($ekit_hotspot_show_caret == 'yes') { ?>
                <div class="ekit_hotspot_arrow"></div>
            <?php } ?>
            <?php

                if($location['ekit_hotspot_logo']['id'] !='') :
                $image_id = $location['ekit_hotspot_logo']['id'];
                $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);

            ?>
                <div class="ekit_hotspot_image">
                    <img src='<?php echo esc_url($location['ekit_hotspot_logo']['url']); ?>' alt='<?php echo esc_attr($image_alt); ?>'>
                </div>
            <?php endif;

                if($location['ekit_hotspot_address'] || $location['ekit_hotspot_title']) :
            ?>
                <div class='media-body'>
                    <?php if ($location['ekit_hotspot_title'] != '') : ?>
                    <h3 class="ekit-hotspot-title"><?php echo esc_html($location['ekit_hotspot_title'], 'elementskit')?></h3>
                    <?php endif; ?>
                    <?php if ($location['ekit_hotspot_address'] != '') : ?>
                    <div class="ekit-location-des">
                        <?php echo \ElementsKit\Utils::kses($location['ekit_hotspot_address']); ?>
                    </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="ekit-location_indicator">
        <?php if ($ekit_hotspot_show_glow == 'yes') { ?>
            <div class="ekit_hotspot_pulse_1"></div>
            <div class="ekit_hotspot_pulse_2"></div>
        <?php }; ?>
    </div>
</div>