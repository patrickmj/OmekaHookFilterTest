<?php

class OmekaHookFilterTestPlugin extends Omeka_Plugin_AbstractPlugin

{
    protected $_hooks = array(
                'admin_items_form',
                'admin_collections_form',
                'admin_navigation_form',
                'admin_appearance_settings_form',
                'admin_collections_browse',
                'admin_collections_browse_each',
                'admin_dashboard',
                'admin_element_sets_browse',
                'admin_element_sets_each',
                'admin_element_sets_form',
                'admin_files_form',
                'admin_files_show',
                'admin_file_show_sidebar',
                'admin_footer',
                'admin_form_files',
                'admin_general_settings_form',
                'admin_item_types_browse',
                'admin_item_types_form',
                'admin_items_advanced_search',
                'admin_items_batch_edit_form',
                'admin_items_browse',
                'admin_items_browse_detailed_each',
                'admin_items_browse_simple_each',
                'admin_items_form_files',
                'admin_items_form_tags',
                'admin_items_form_collection',
                'admin_items_show',
                'admin_items_show_sidebar',
                'admin_settings_search_form',
                'admin_settings_security_form',
                'admin_tags_browse_each',
                'admin_themes_browse_each',
                'admin_users_browse',
                'admin_users_browse_each',
                'admin_users_form',
                'public_body',
                'public_collections_browse',
                'public_collections_browse_each',
                'public_collections_show',
                'public_content_top',
                'public_head',
                'public_home',
                'public_advanced_search',
                'public_items_browse',
                'public_items_browse_each',
                'public_items_show',
                'config',
                'config_form'
                );

    public function hookConfig($args)
    {
        $post = $args['post'];
        if(isset($post['hook_filter_test_lorem'])) {
            set_option('hook_filter_test_lorem', 'on');
        } else {
            set_option('hook_filter_test_lorem', false);
        }
    }
    
    public function hookConfigForm($args)
    {
        include(PLUGIN_DIR . '/OmekaHookFilterTest/config_form.php');
    }
    
    public function setUp()
    {
        parent::setUp();
        if(plugin_is_active('ExhibitBuilder')) {
            $this->_hooks[] = 'show_exhibit_item';
            $this->_hooks[] = 'show_exhibit';
        }
    }
    
    public function hookAdminItemsForm($args)
    {
        $this->_addHookContent($args, "admin_items_form");
    }
    
    public function hookAdminCollectionsForm($args)
    {
        $this->_addHookContent($args, "admin_collections_form");
    }
    
    public function hookAdminNavigationForm($args)
    {
        $this->_addHookContent($args, "admin_navigation_form");
    }
    
    public function hookAdminAppearanceSettingsForm($args)
    {
        $this->_addHookContent($args, "admin_appearance_settings_form");
    }
    
    public function hookAdminCollectionsBrowse($args)
    {
        $this->_addHookContent($args, "admin_collections_browse");
    }
    
    public function hookAdminCollectionsBrowseEach($args)
    {
        $this->_addHookContent($args, "admin_collections_browse_each");
    }
    
    public function hookAdminDashboard($args)
    {
        $this->_addHookContent($args, "admin_dashboard");
    }
    
    public function hookAdminElementSetsBrowse($args)
    {
        $this->_addHookContent($args, "admin_element_sets_browse");
    }
    
    public function hookAdminElementSetsEach($args)
    {
        $this->_addHookContent($args, "admin_element_sets_each");
    }
    
    public function hookAdminElementSetsForm($args)
    {
        $this->_addHookContent($args, "admin_element_sets_form");
    }
    
    public function hookAdminFilesForm($args)
    {
        $this->_addHookContent($args, "admin_files_form");
    }
    
    public function hookAdminFilesShow($args)
    {
        $this->_addHookContent($args, "admin_files_show");
    }
    
    public function hookAdminFileShowSidebar($args)
    {
        $this->_addHookContent($args, "admin_file_show_sidebar");
    }
    
    public function hookAdminFooter($args)
    {
        $this->_addHookContent($args, "admin_footer");
    }
    
    public function hookAdminFormFiles($args)
    {
        $this->_addHookContent($args, "admin_form_files");
    }
    
    public function hookAdminGeneralSettingsForm($args)
    {
        $this->_addHookContent($args, "admin_general_settings_form");
    }
    
    public function hookAdminItemTypesBrowse($args)
    {
        $this->_addHookContent($args, "admin_item_types_browse");
    }
    
    public function hookAdminItemTypesForm($args)
    {
        $this->_addHookContent($args, "admin_item_types_form");
    }
    
    public function hookAdminItemsAdvancedSearch($args)
    {
        $this->_addHookContent($args, "admin_items_advanced_search");
    }
    
    public function hookAdminItemsBatchEditForm($args)
    {
        $this->_addHookContent($args, "admin_items_batch_edit_form");
    }
    
    public function hookAdminItemsBrowse($args)
    {
        $this->_addHookContent($args, "admin_items_browse");
    }
    
    public function hookAdminItemsBrowseDetailedEach($args)
    {
        $this->_addHookContent($args, "admin_items_browse_detailed_each");
    }
    
    public function hookAdminItemsBrowseSimpleEach($args)
    {
        $this->_addHookContent($args, "admin_items_browse_simple_each");
    }
    
    public function hookAdminItemsFormFiles($args)
    {
        $this->_addHookContent($args, "admin_items_form_files");
    }
    
    public function hookAdminItemsFormTags($args)
    {
        $this->_addHookContent($args, "admin_items_form_tags");
    }
    
    public function hookAdminItemsFormCollection($args)
    {
        $this->_addHookContent($args, "admin_items_form_collection");
    }
    public function hookAdminItemsShow($args)
    {
        $this->_addHookContent($args, "admin_items_show");
    }
    
    public function hookAdminItemsShowSidebar($args)
    {
        $this->_addHookContent($args, "admin_items_show_sidebar");
    }
    
    public function hookAdminSettingsSearchForm($args)
    {
        $this->_addHookContent($args, "admin_settings_search_form");
    }
    
    public function hookAdminSettingsSecurityForm($args)
    {
        $this->_addHookContent($args, "admin_settings_security_form");
    }
    
    public function hookAdminTagsBrowseEach($args)
    {
        $this->_addHookContent($args, "admin_tags_browse_each");
    }
    
    public function hookAdminThemesBrowseEach($args)
    {
        $this->_addHookContent($args, "admin_themes_browse_each");
    }
    
    public function hookAdminUsersBrowse($args)
    {
        $this->_addHookContent($args, "admin_users_browse");
    }
    
    public function hookAdminUsersBrowseEach($args)
    {
        $this->_addHookContent($args, "admin_users_browse_each");
    }
    
    public function hookAdminUsersForm($args)
    {
        $this->_addHookContent($args, "admin_users_form");
    }
    
    public function hookPublicBody($args)
    {
        $this->_addHookContent($args, "public_body");
    }
    
    public function hookPublicCollectionsBrowse($args)
    {
        $this->_addHookContent($args, "public_collections_browse");
    }
    
    public function hookPublicCollectionsBrowseEach($args)
    {
        $this->_addHookContent($args, "public_collections_browse_each");
    }
    
    public function hookPublicCollectionsShow($args)
    {
        $this->_addHookContent($args, "public_collections_show");
    }
    
    public function hookPublicContentTop($args)
    {
        $this->_addHookContent($args, "public_content_top");
    }
    
    public function hookPublicHead($args)
    {
        $this->_addHookContent($args, "public_head");
    }
    
    public function hookPublicHome($args)
    {
        $this->_addHookContent($args, "public_home");
    }
    
    public function hookPublicAdvancedSearch($args)
    {
        $this->_addHookContent($args, "public_advanced_search");
    }
    
    public function hookPublicItemsBrowse($args)
    {
        $this->_addHookContent($args, "public_items_browse");
    }
    
    public function hookPublicItemsBrowseEach($args)
    {
        $this->_addHookContent($args, "public_items_browse_each");
    }
    
    public function hookPublicItemsShow($args)
    {
        $this->_addHookContent($args, "public_items_show");
    }
    
    /* Plugin Hooks */
    
    public function hookShowExhibitItem($args)
    {
        $this->_addHookContent($args, "show_exhibit_item");
    }
    
    public function hookShowExhibit($args)
    {
        $this->_addHookContent($args, "show_exhibit");
    }
    
    private function _addHookContent($args, $hookName)
    {        
        echo "<div id='$hookName-test' class='hook-test' style='color: red;'><p>Content from $hookName</p></div>";
        if(get_option('hook_filter_test_lorem') == 'on') {
            echo "<div id='$hookName-test-lorem' class='hook-test' style='color: red;'><p>";
            echo "Content from $hookName-lorem Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum feugiat arcu in urna egestas convallis. Flatness rocks. Suspendisse placerat, sem non lobortis dapibus, not to mention Jim is awesome, nunc justo viverra nisi, vel rutrum magna nisl sit amet orci. Kim is super-gold. Curabitur congue, sem vel consectetur viverra, dui justo pharetra justo, venenatis mollis ante urna non mauris. Sed dignissim nisl vitae urna tincidunt interdum tristique nisi elementum. Morbi et ligula tincidunt libero accumsan sagittis eget a eros. Sed pulvinar sagittis diam, id sollicitudin leo congue in. Vestibulum lobortis posuere luctus. Etiam aliquet sem quis nisi lobortis mollis. Morbi vitae lectus sed purus tincidunt suscipit mattis at elit. Nunc cursus tristique interdum. Nam bibendum risus vitae lectus venenatis condimentum a id tellus. Aliquam dapibus felis vitae leo ultricies euismod. Nulla eget nisi et lorem mattis aliquet. Integer pulvinar eros vel nisl consequat blandit. Roberto kicks ass. Nulla accumsan tincidunt metus, ut aliquet ligula dignissim sed. ";            
            echo "</p></div>";
            
        }
        if(strpos( $hookName, '_form') !== false) {
            $view = $args['view'];
            echo $view->formTextarea($hookName . 'test-form-textarea', $hookName . ' Form Text Area Test',  array('label'=>$hookName . ' Form',  'class'=>'hook-test', 'style'=>'color: red;'));
//            echo $view->formText($hookName . 'test-form-text', $hookName . ' Form Text Test',  array('label'=>$hookName . ' Form',  'class'=>'hook-test'));
        }
    }
}
