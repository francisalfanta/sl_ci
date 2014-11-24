<?php // Change the css classes to suit your needs    

$attributes = array('class' => '', 'id' => '');
echo form_open('tt_form', $attributes); ?>

<p>
        <label for="fma_sd">fma sd</label>
        <?php echo form_error('fma_sd'); ?>
        <br /><input id="fma_sd" type="text" name="fma_sd" maxlength="10" value="<?php echo set_value('fma_sd'); ?>"  />
</p>


<p>
        <?php echo form_submit( 'submit', 'Submit'); ?>
</p>

<?php echo form_close(); ?>
