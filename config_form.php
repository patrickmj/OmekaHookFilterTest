
<div class="field">
    <div class="two columns alpha">
        <label>Use Lorem Ipsum?</label>    
    </div>    
    <div class="inputs five columns omega">
        <p class="explanation">Check this to add a paragraph of lorem to all the hook outputs</p>
        <div class="input-block">        
            <?php
                $checked = ( get_option('hook_filter_test_lorem') == 'on') ? true : false;
            ?>
            <input name="hook_filter_test_lorem" type="checkbox" <?php if($checked) {echo "checked='checked'"; } ?>  />                
        </div>
    </div>
</div>