<?php

/*  ||  MDP Bulk Category Import / Export / Delete   ||
 *  Style for options page
 * 
*/
?>
<style>
    .mdp_table {
        min-width:800px;
        max-width:1080px;
        border:1px solif #EEEEEE;
        padding: 5px 5px 5px 5px;
        margin: 5px 5px 5px 5px;
    }
    
    .mdp_table tr {
        border: 1px solid #EEEEEE;
    }
    
    
    .mdp_table td {
        padding: 5px 5px 5px 5px;
        margin: 5px 5px 5px 5px;
    }
    
    .mdp_table td.left {
        width:200px;
    }
    
    
    .mdp_form input[type=text] {
        min-width: 400px;
        max-width: 600px;
    }
    
    
    .mdp_inner_table {
        width:600px;
        border:1px solif #EEEEEE;
        padding: 5px 5px 5px 5px;
        margin: 5px 5px 5px 5px;
        border:1px solid #EEEEEE;
    }
    
    .mdp_inner_table tr {
        border: 1px solid #EEEEEE;
    }
    
    .mdp_inner_table td {
        padding: 5px 5px 5px 5px;
        margin: 5px 5px 5px 5px;
    }
    .mdp_report {
        background:#cbdcc5;
        width:780px;
        border:1px solid #EEEEEE;
        padding: 5px 5px 5px 5px;
    }
    textarea    {
        width:800px;
        height: 300px;
    }
    
    .left_block   {
        float:left;
        display:inline-block;
        min-width:50%;
        max-width:70%;
        margin:20px 10px 10px 10px;
    }
    .right_block  {
        float:right;
        display:inline-block;
        width:20%;
        margin:20px 10px 10px 10px;
    }
    
    .mdp    {
        padding: 5px 5px 5px 5px;
    }
    
</style>
<?php screen_icon(); ?>
<div class="mdp">
        <div class="right_block">
                <h2>Contact Information</h2>
                <p>
                        Website: <a href="http://microdatapropject.org">http://microdatapropject.org</a><br>
                        Email: <a href="mailto:contact@microdataproject.org">contact@microdataproject.org</a><br>
                        Phone: 408-754-6000<br>
                        Address: PO Box 640871<br>
                        San Jose, California 95164<br>
                </p>
                <p>
                        Author: Christopher Dubeau<br>
                        Author Website: <a href="http://christopherdubeau.com">http://christopherdubeau.com</a><br>
                        Contributor: Sid Creations<br>
                        Contributor Website: <a href="http://sidcreations.com">http://sidcreations.com</a><br>
                </p>
                <h2>Bulk Category Tools</h2>
                <p>Want help with creating category files for locations?<br>Try our <a href="http://microdataproject.org/city-state-wordpress-bulk-category-generator/">Bulk Category Generator</a></p>
                <p>Need a list of US Citis and States?<br> Download <a href="http://microdataproject.org/city-and-state-list/">City and State Lists</a></p>
                <h2>Other Plugins</h2>
                <p>
                        <a href="http://wordpress.org/plugins/mdp-local-business-seo/">Local Business SEO</a><br>
                </p>
        </div>
        <div class="left_block">
                <h2>MDP Bulk Category Import / Export / Delete</h2>
                <p>This plugin is intended for somewhat skilled developers. If you do not have access to the database, I recommend backing up your database before doing any modification. You may use the export button to back up the list of categories you presently have. </p>
                <p>Any defect in your file of categories can cause issues with category hierarchy that you were not planning. It might take a few times to get it right, so better to be safe than sorry.</p>
                <p>CSV file line example:</p>
                <p>parent::name::description::slug</p>
                <p>Uncategorized::New Category::This category is new::new-category</p>
                <p>This example uses the :: as the deliminator, because a description or name can have a (,) comma in it. You may use any delimiter you want. The parent is the actual name of the parent category not the id.</p>
    
<?php
/*  ||  MDP Bulk Category Import / Export  / Delete ||
 *  Check if the delimiter is included
 *  before adding or deleting categories
 *  from the uploaded file.
 *  
*/
if($_POST['delimiter']){
    
    /*  assign to memory the file contents  */
    if($file = file_get_contents( $_FILES['file']['tmp_name'], 'r' )){ 
    
        /*  place contents of file into an array    */    
        $file_array = explode("\n", $file);
        
        /*  assign to memory and array for category slugs */
        $ids = array();
        
        /*  textarea for reporting   */
        echo '<textarea>---- Categories ----'."\n";
        
        /*  itterate through the array line by line */
        foreach($file_array as $line){
                
            /*  place content of the line into an array serpeated by the delimiter  */
            $data = explode($_POST['delimiter'], $line);
            
            if( (count($data)) > 1 ){
                
                /*  ||  MDP Bulk Category Import / Export   ||
                 *  Check if the user is adding
                 *  Begin to add categories
                */
                if($_POST['add']){
                
                    /*  check to see if there is a parent category  */
                    if(get_cat_ID( $data[0] )){
                        
                        /*  assign to memory the id of the parent   */
                        $parent = get_cat_ID( $data[0] );
                        
                        /*asign array values for the wp_insert_term array */
                        $args = array(
                            'description'   =>  $data[2],
                            'slug'          =>  $data[3],
                            'parent'        =>  $parent
                        );
                        
                        
                        /*  insert categories using the wp_insert_term  */
                        wp_insert_term($data[1], 'category', $args);
                        
                        echo 'Adding Category: '.$data[1].' | parent: '.$data[0]."\n";
                        
                        /*  add slugs to the the slug array */
                        array_push($ids, $data[3]);
                        
                    /*  if there is no parrent use the first category   */
                    }else{
                        
                        /*  set the parent to 1 */
                        $parent = 1;
                        
                        /*asign array values for the wp_insert_term array */
                        $args = array(
                            'description'   =>  $data[2],
                            'slug'          =>  $data[3],
                            'parent'        =>  $parent
                        );
                        
                        /*  insert categories using the wp_insert_term  */
                        wp_insert_term($data[1], 'category', $args);
                        
                        echo 'Adding Category: '.$data[1].' no parent'."\n";
                        
                        /*  add slug to the the slug array */
                        array_push($ids, $data[3]);
                    }
                    
                    /*  check to see if the user would like to add relationships of a post to all categories    */
                    if($_POST['insert_post']){
                        
                        wp_set_object_terms( $_POST['post'], $ids , 'category', true );
                        
                    }
                    
                /*  ||  MDP Bulk Category Import / Export  / Delete ||
                 *  Check if the user is deleting
                 *  Begin to delete categories
                */
                
                }elseif($_POST['delete_from_file']){
                    
                    echo 'Deleting: '.$data[1]."\n";
                    
                    /*  check to see if there is category with the name */
                    if($cat_id = get_cat_ID( $data[1] ) ){
                        
                        /*  assign to memory the category id from the category name in the file */
                        //$cat_id = get_cat_ID( $data[1] );
                        
                        /*  report deleting the category   */
                        echo 'Deleting: '.$data[1]."\n";
                        
                        /*  delete the category */
                        wp_delete_term( $cat_id, 'category' );
                        
                    }else{
                        
                        /*  report unable to find category   */
                        echo "No category found with name: ".$data[1]."\n";
                    }
                    
                }//close delete
                
            } //close count data
            
        }//close foreach loop
    
    /* close textarea   */
    echo '</textarea>';
    
    /*  delete the cache table category_children     */
    delete_option('category_children');
    wp_cache_flush();
    
    }else{
        
        echo 'Error: unable to open file';
        
    }
}

/*  check if the user is deleting all categories    */
if($_POST['delete_all']){
    
    /*  assign to memory and array of categories  */   
    $categories = get_categories(array('hide_empty' => 0));
    
    /*  textarea for reporting   */
    echo '<textarea>---- Categories deleted ----'."\n";
    
    /*  itterate through the array line by line */
    foreach($categories as $category){
        
        /*  assign to memory the id, name of the category */
        $del_cat_id = $category->cat_ID;
        $del_cat_name = $category->name;
        
        
        /*  delete the category  */
        if($del_cat_id > 1){
            
            wp_delete_term( $del_cat_id,  'category');
            
            echo 'Deleteing: '.$del_cat_name."\n";
        }
        
    }
    
    /* close textarea   */
    echo '</textarea>';
    
    /*  delete the cache table category_children     */
    delete_option('category_children');
    wp_cache_flush();
}


/*  check if the user is exporting all categories    */
if($_POST['export_all']){
    
    $file_name = strtolower(str_replace(' ', '-', $_POST['file_name']) ).'.csv';
    $delimiter = '::';
    
    /*  assign to memory and array of categories  */   
    $categories = get_categories();
    
    /*  textarea for reporting   */
    echo '<textarea>---- Categories exported ----'."\n";
    
    /*  itterate through the array line by line */
    foreach($categories as $category){
        
        /*  assign to memory the id of the category */
        $export_category_id = $category->cat_ID;
        
        /*  assign to memory the name of the category */
        $export_category_name = $category->name;
        
        /*  assign to memory the description of the category */
        $export_category_description = $category->description;
        
        /*  get the parent name from the parent id  */
        $export_category_parent_id = $category->parent;
        
        /* asign to memory the array of the parent category */
        $export_parent_category = get_category($export_category_parent_id);
        
        /* assign to memory the name of the parent  */
        $export_parent_name  = $export_parent_category->name;
        
        /* assign to memory the category slug  */
        $export_category_slug = $category->slug;
        
        /* assign to memory the category with delimiter  */
        $category_line .= $export_parent_name.$delimiter.$export_category_name.$delimiter.$export_category_description.$delimiter.$export_category_slug."\n";
        
        /*  echo the category name  */
        echo $export_category_name."\n";
        
    }
    
    /* close textarea   */
    echo '</textarea>';
    
    /*  Check if we can put contents in a new file and then put the categories in the file  */
    if(file_put_contents(plugin_dir_path( __FILE__ ).$file_name, $category_line)){
        
        /* echo location and link to download the file  */
        echo '  <div class="mdp_report">
                <p> Your file is now located in the plugin directory here '.plugin_dir_path( __FILE__ ).'</p>
                <h3><a href="'.plugin_dir_url( __FILE__ ).$file_name.'" type="application/octet-stream" />Download File</a></h3s>
                </div>
        ';
        
    }else{
        /* echo error if unable to write file  */
        echo    '<div class="mdp_report">
                <p>Error: Unable to create file, check with your systems admin or hosting provide to see if you have writes to write a file.</p>
                </div>';
    }
}

/*  check if the user is reseting the relationships */
if($_POST['reset']){
    
    /*  reset the relations ship of the selected post   */
    wp_set_object_terms( $_POST['post'], NULL , 'category' );
}

?>
    <form action="" method="post" enctype="multipart/form-data" class="mdp_form">
    <table class="mdp_table">
        <tr><td colspan="2"><h3>Select File</h3></td></tr>
        <tr><td>File:</td><td><input type="file" name="file"/></td></tr>
        <tr><td>Delimiter:</td><td><input type="text" name="delimiter" placeholder="The seperator of the csv / text file"/></td></tr>
        <tr><td colspan="2"><h3>Assign relationship of a post to all categories.</h3></td></tr>
        <tr><td>Insert Post:</td><td><input type="checkbox" name="insert_post"/></td></tr>
        <tr><td colspan="2">Using the insert post option can take a while if you have a lot of categories. (Very useful with Yoast SEO since they create sitemaps from taxonomy and not categories.)</td></tr>
        <tr><td>Select Post:</td><td>
        <select name="post">
            <option value="">Select</option>
            <?php
                /* retrieve all posts   */
                $posts = get_posts();
                
                /*  add all posts to post options   */
                foreach( $posts as $post ) {
                    echo    '<option value="'.$post->ID.'">'.$post->post_title.'</option>';
                }
            ?>
        </select>
        </td></tr>
        <tr><td colspan="2"><h3>Choose your action.</h3></td></tr>
        <tr><td colspan="2">If you are adding hundereds or thousands of categories it can take some time, if you are on a shared host you might have to change the max_execution_time in your php.ini file depending on the amount of categories.</td></tr>
        <tr><td colspan="2">
                <table class="mdp_inner_table">
                        <tr><td colspan="2">This will add all categories from the list in your file.</td></tr>
                        <tr><td colspan="2"><input type="submit" value="Add Categories" name="add" class="button"></td></tr>
                </table>
        </td></tr>
        <tr><td colspan="2">
                <table class="mdp_inner_table">
                        <tr><td colspan="2">This will the relationship of the post with all categories.</td></tr>
                        <tr><td colspan="2"><input type="submit" value="Reset Post Relationship" name="reset" class="button"></td></tr>
                </table>
        </td></tr>
        <tr><td colspan="2">
                <table class="mdp_inner_table">
                        <tr><td colspan="2">This will delete all categories from the list in your file.</td></tr>
                        <tr><td colspan="2"><input type="submit" value="Delete Categories" name="delete_from_file" class="button"></td></tr>
                </table>
        </td></tr>
        <tr><td colspan="2">
                <table class="mdp_inner_table">
                        <tr><td colspan="2">This will delete all categories except the undeletable first category.</td></tr>
                        <tr><td colspan="2">If you have thousands of categories it is best to reset the relationships first, this will a lot of time.</td></tr>
                        <tr><td colspan="2"><input type="submit" value="Delete All Categories" name="delete_all" class="button"></td></tr>
                </table>
        </td></tr>
        <tr><td colspan="2">
                <table class="mdp_inner_table">
                        <tr><td colspan="2">This will overwrite any file that you previously created. Be sure to use different names if you want to keep older files.</td></tr>
                        <tr><td>Name of file:</td><td><input type="text" name="file_name" placeholder="all-categories"/></td></tr>
                        <tr><td colspan="2">This will export all categories to a csv file with a :: delimiter. We use the :: because descriptions and names can have (,) comas in them.</td></tr>
                        <tr><td colspan="2"><input type="submit" value="Export All Categories" name="export_all" class="button"></td></tr>
                </table>
        </td></tr>
    </table>
    </form>
    </div>
</div>