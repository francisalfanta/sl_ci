NOTES:

-- added new function lists in function.php
--When Adding Property Filter Horizontally
 - template in file aviator/plugin/properties/templates/properties/filter.twig 
 - template in file aviator/plugin/properties/meta.php
 	-- within image box
	<?php // added FMA 01/05/2015 , 'style' => 'width:730px;') ?>
	<p>
		<?php echo $property_media_metabox->getField( array( 'name' => $mb->get_the_name(), 'value' => $mb->get_the_value(), 'style' => 'width:730px;') ); ?>

- function in file aviator/plugin/properties/utils.php
	-- customize bed settings
    // Beds with from and to                                                                    // added FMA 01/06/2015
    if (!empty($_GET['filter_bedrooms_from']) && !empty($_GET['filterbedrooms_to'])) {
        $properties['meta_query'][] = array(
            'key' => '_property_bedrooms',
            'value' => array($_GET['filter_bedrooms_from'], $_GET['filter_bedrooms_to']),
            'type' => 'numeric',
            'compare' => 'BETWEEN'
        );
    }
    elseif (!empty($_GET['filter_bedrooms_from'])) {
        $properties['meta_query'][] = array(
            'key' => '_property_bedrooms',
            'value' => $_GET['filter_bedrooms_from'],
            'type' => 'numeric',
            'compare' => '>='
        );
    }
    elseif (!empty($_GET['filter_bedrooms_to'])) {
        $properties['meta_query'][] = array(
            'key' => '_property_bedrooms',
            'value' => $_GET['filter_bedrooms_to'],
            'type' => 'numeric',
            'compare' => '<='
        );
    }
    // if Beds from 0 to 0                                         						// updated FMA 01/09/2015
    elseif ($_GET['filter_bedrooms_from']==0 && $_GET['filterbedrooms_to']==0) {
        $properties['meta_query'][] = array(
            'key' => '_property_bedrooms',
            'value' => $_GET['filter_bedrooms_from'],
            'type' => 'numeric',
            'compare' => '='
        );
    }
                                                                   						// end add FMA 01/06/2015 'bed from and to'

- template in aviators/plugins/properties/widgets/carousel_properties.php
    -- adding rent and sale selection

                                            											<?php // added FMA 01/03/2015 ?>
      <option <?php if ($type == 'rent') {
        echo "selected=selected";
      } ?> value="rent"><?php echo __(
          'Rent',
          'aviators'
        ); ?></option>
      <option <?php if ($type == 'sale') {
        echo "selected=selected";
      } ?> value="sale"><?php echo __(
          'Sale',
          'aviators'
        ); ?></option>
                                             												<?php // end add FMA 01/03/2015 ?>

- template in aviators/plugin/properties/templates/properties/filter.twig
	-- removing The Greens under Location
																							{# added FMA 01/09/2015 hardcoded - cant find y The Green showing up #}
 	{% if location.name != 'The Greens' %}
    	<option value="{{ location.term_id }}" {% if q.filter_location == location.term_id %}selected="selected"{% endif %}>{{ location.name }}</option>
 	{% endif %}
	{% endfor %}

	-- addming bed from and bed to

	{% if wp.aviators_settings_get_value('properties', 'filter_visibility', 'hide_beds') != 'on' %}
        <div class="beds control-group">
            <label class="control-label" for="inputBeds-{{ id }}">
                {{ wp.__('Beds from', 'aviators') }}
            </label>

            <div class="controls">
                 <select name="filter_bedrooms_from" id="inputBeds_from-{{ id }}" class="beds2 ">                     <!-- added FMA 01/09/2015 added 'from'--> 
                    <option value="">{{ wp.__('Beds from', 'aviators') }}</option>                                    <!-- added FMA 01/09/2015 added 'from'--> 
                    <option value="0">Studio</option>                                                                 <!-- added FMA 01/09/2015 --> 
                    {% for i in range(1, 12) %}
                        <option value="{{ i }}" {% if q.filter_bedrooms_from == i %}selected="selected="{% endif %}>{{ i }}</option>
                    {% endfor %}
                </select>                      
            </div>
            <!-- /.controls -->
        </div>
        <!-- /.control-group -->
    {% endif %}
    
    {% if wp.aviators_settings_get_value('properties', 'filter_visibility', 'hide_beds') != 'on' %}
        <div class="beds control-group adjust-beds">
            <label class="control-label" for="inputBeds-{{ id }}">
                {{ wp.__('Beds to', 'aviators') }}
            </label>

            <div class="controls">
                <select name="filter_bedrooms_to" id="inputBeds_to-{{ id }}" class="beds2">               			  <!-- added FMA 01/09/2015 added 'to'--> 
                    <option value="">{{ wp.__('Beds to', 'aviators') }}</option>                                      <!-- added FMA 01/09/2015 added 'to'--> 
                    <option value="0">Studio</option>                                                                 <!-- added FMA 01/09/2015 --> 
                    {% for i in range(1, 12) %}
                        <option value="{{ i }}" {% if q.filter_bedrooms_to == i %}selected="selected="{% endif %}>{{ i }}</option>
                    {% endfor %}
                </select>
            </div>
            <!-- /.controls -->
        </div>
        <!-- /.control-group -->
    {% endif %}


- template in aviators/plugin/properties/template/properties/filter-horizontal.twig
	--  removing The Greens under Location

  																											 {# added FMA 01/05/2015 hardcoded - cant find y The Green showing up #}
        {% if location.name != 'The Greens' %}
            <option value="{{ location.term_id }}" {% if q.filter_location == location.term_id %}selected="selected"{% endif %}>{{ location.name }}</option>
        {% endif %}
    -- adding bed from and bed to
    {% if wp.aviators_settings_get_value('properties', 'filter_visibility_h', 'hide_beds') != 'on' %}
        <select name="filter_bedrooms_from" id="inputBeds_from-{{ id }}" class="beds2">                       <!-- added FMA 12/29/2014 added 'from'--> 
            <option value="">{{ wp.__('Beds from', 'aviators') }}</option>                                    <!-- added FMA 12/29/2014 added 'from'--> 
            <option value="0">Studio</option>                                                                 <!-- added FMA 12/29/2014 --> 
            {% for i in range(1, 12) %}
                <option value="{{ i }}" {% if q.filter_bedrooms_from == i %}selected="selected="{% endif %}>{{ i }}</option>
            {% endfor %}
        </select>
        <select name="filter_bedrooms_to" id="inputBeds_to-{{ id }}" class="beds">                            <!-- added FMA 12/29/2014 added 'to'--> 
            <option value="">{{ wp.__('Beds to', 'aviators') }}</option>                                      <!-- added FMA 12/29/2014 added 'to'--> 
            <option value="0">Studio</option>                                                                 <!-- added FMA 12/29/2014 --> 
            {% for i in range(1, 12) %}
                <option value="{{ i }}" {% if q.filter_bedrooms_to == i %}selected="selected="{% endif %}>{{ i }}</option>
            {% endfor %}
        </select>
    {% endif %}

- template in aviators/plugin/properties/template/properties/property-row.twig
	-- added upper left feature ribbon on every image

 																												<?php  //  added FMA 01/02/2015 ?>
    <div style="width:220px; text-align:center; padding:0 0px 0 0; ">
        <div class="feature_overlay_img" style="width:74px;">
            <img width="64" src="{{ wp.wp_get_attachment_url(8913, 'full') }}"> 
        </div>
    </div>

- template in aviators/plugin/properties/template/properties/property-box-small.twig
	-- added upper left sale or rent ribbon on every image accordingly
  																												<?php  //  added FMA 01/03/2015 8914=Rent, 8915=Sale?>
    <div style="width:220px; text-align:center; padding:0 0px 0 0; ">
        <div class="feature_overlay_img" style="width:74px;">
        {% if property.property_contracts.0 and property.property_contracts.0.name == "Sale" %}
            <img width="64" src="{{ wp.wp_get_attachment_url(8915, 'full') }}">
        {% elseif property.property_contracts.0 and property.property_contracts.0.name == "Rent" %}
            <img width="64" src="{{ wp.wp_get_attachment_url(8914, 'full') }}">
        {% endif %}
        </div>
    </div>
        																										<?php  // end add FMA 01/03/2015 ?>
- template in aviators/plugin/agents/meta.php
	-- added field input language
	<tr>
		<th>
			<label><?php print __( 'Languages', 'aviators' ); ?></label>
		</th>
		<td>
			<?php $mb->the_field( 'language' ); ?>
			<input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>" />
		</td>
	</tr>
- template in aviators/plugin/agents/templates/agents/widget.twig
	-- to show the language of agent
	<div class="sl-language">Languages: {{ agent.meta._agent_language.0 }}</div>
    <!-- /.language -->

- function in aviators/core/helpers.php
	-- remove &nbsp; in property description

	if ( preg_match( '/<!--more(.*?)?-->/', $post->post_content, $matches ) ) {
		$parts = explode( $matches[0], $post->post_content );
                                                                                                                    // added FMA 01/06/2015 str_replace('&nbsp;', '',            
		//return $parts[0];
                return str_replace('&nbsp;', '', $parts[0]);
	} else {
		if (!empty($post->post_content)) {
			return str_replace('&nbsp;', '', substr(strip_tags($post->post_content), 0, 200)) . ' ...';    			// added FMA 01/06/2015  str_replace('&nbsp;', '', 
		}
	}     

- template in realia/templates/helpers/sidebar-top.twig
    -- to make the map smaller {# originally <div class="top-wrapper"> #}                                           // added FMA 01/10/2015 
    <div class="container">

- js in aviators/plugins/properties/assets/js/aviator-maps.js
    // position: google.maps.ControlPosition.LEFT_BOTTOM                     // added FMA 01/10/2015 adjusted to be viewable - line 119
    position: google.maps.ControlPosition.TOP_RIGHT


- new files
	-- page template located in realia
		--- page-properties-grid-comm-buy.php           // located in realia  
		--- page-properties-grid-comm-rent.php          // located in realia  
		--- page-properties-grid-resi-buy.php           // located in realia  
		--- page-properties-grid-reso-buy.php           // located in realia  
        // added 01/11/2015
        --- upload images for all free hold area lists
        --- page-properties-grid-free-hold.php          // located in realia
        --- page-free-area.twig                         // located in realia/templates/
        --- free-area.twig                              // located in realia/aviators/plugins/properties/templates/properties
        --- free-area-box-small.twig                    // located in realia/aviators/plugins/properties/templates/properties
        // added 01/12/2015
        --- page-properties-grid-free-zone.php          // located in realia
    -- style.css added new contents

















Original from public_html/wp-content/themes/realia/aviators/plugins/properties/meta.php -line 287
 <?php $property_media_metabox = new WPAlchemy_MediaAccess(); ?>


		<?php while ( $mb->have_fields_and_multi( 'slides' ) ): ?>
			<?php $mb->the_group_open(); ?>


			<?php $mb->the_field( 'imgurl' ); ?>
			<?php $property_media_metabox->setGroupName( 'img-n' . $mb->get_the_index() )->setInsertButtonLabel( __( 'Insert', 'aviators' ) ); ?>

<?php // added FMA 01/05/2015 , 'style' => 'width:730px;') ?>
			<p>
				<?php echo $property_media_metabox->getField( array( 'name' => $mb->get_the_name(), 'value' => $mb->get_the_value(), 'style' => 'width:730px;') ); ?>
				<?php echo $property_media_metabox->getButton(); ?>
				<a href="#" class="dodelete button"><?php echo __( 'Remove', 'aviators' ); ?></a>
			</p>

			<?php $mb->the_group_close(); ?>
		<?php endwhile; ?>