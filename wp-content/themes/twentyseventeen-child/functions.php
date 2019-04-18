<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array(
        'parent-style'
    ));
}


/* Cust sidebar for footer */
function my_custom_sidebar()
{
    register_sidebar(array(
        'name' => __('Footer 3', 'twentyseventeen'),
        'id' => 'custom-side-bar3',
        'description' => __('Custom Sidebar', 'twentyseventeen'),
        'before_widget' => '<div class="widget-content">',
        'after_widget' => "</div>",
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));
    
    register_sidebar(array(
        'name' => __('Footer 4', 'twentyseventeen'),
        'id' => 'custom-side-bar4',
        'description' => __('Custom Sidebar', 'twentyseventeen'),
        'before_widget' => '<div class="widget-content">',
        'after_widget' => "</div>",
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));
    register_sidebar(array(
        'name' => __('Copyrights', 'twentyseventeen'),
        'id' => 'custom-side-bar5',
        'description' => __('Custom Sidebar', 'twentyseventeen'),
        'before_widget' => '<div class="widget-content">',
        'after_widget' => "</div>",
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));
    register_sidebar(array(
        'name' => __('Social-links', 'twentyseventeen'),
        'id' => 'custom-side-bar6',
        'description' => __('Custom Sidebar', 'twentyseventeen'),
        'before_widget' => '<div class="widget-content">',
        'after_widget' => "</div>",
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));
    register_sidebar(array(
        'name' => __('Banner blog', 'twentyseventeen'),
        'id' => 'custom-side-bar7',
        'description' => __('Custom Sidebar', 'twentyseventeen'),
        'before_widget' => '<div class="widget-content">',
        'after_widget' => "</div>",
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));
    register_sidebar(array(
        'name' => __('News blog', 'twentyseventeen'),
        'id' => 'custom-side-bar8',
        'description' => __('Custom Sidebar', 'twentyseventeen'),
        'before_widget' => '<div class="widget-content">',
        'after_widget' => "</div>",
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));
    register_sidebar(array(
        'name' => __('Review', 'twentyseventeen'),
        'id' => 'custom-side-bar9',
        'description' => __('Custom Sidebar', 'twentyseventeen'),
        'before_widget' => '<div class="widget-content">',
        'after_widget' => "</div>",
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));
    register_sidebar(array(
        'name' => __('Tips & Hacks', 'twentyseventeen'),
        'id' => 'custom-side-bar10',
        'description' => __('Custom Sidebar', 'twentyseventeen'),
        'before_widget' => '<div class="widget-content">',
        'after_widget' => "</div>",
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));
    register_sidebar(array(
        'name' => __('Best Mortgage Rate', 'twentyseventeen'),
        'id' => 'custom-side-bar11',
        'description' => __('Custom Sidebar', 'twentyseventeen'),
        'before_widget' => '<div class="widget-content">',
        'after_widget' => "</div>",
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));
    register_sidebar(array(
        'name' => __('Search box', 'twentyseventeen'),
        'id' => 'custom-side-bar12',
        'description' => __('Custom Sidebar', 'twentyseventeen'),
        'before_widget' => '<div class="widget-content">',
        'after_widget' => "</div>",
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));
    register_sidebar(array(
        'name' => __('social widget', 'twentyseventeen'),
        'id' => 'custom-side-bar13',
        'description' => __('Custom Sidebar', 'twentyseventeen'),
        'before_widget' => '<div class="widget-content">',
        'after_widget' => "</div>",
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));
    
    register_sidebar(array(
        'name' => __('Share Post', 'twentyseventeen'),
        'id' => 'custom-side-bar14',
        'description' => __('Custom Sidebar', 'twentyseventeen'),
        'before_widget' => '<div class="widget-content">',
        'after_widget' => "</div>",
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));
    
    
    register_sidebar(array(
        'name' => __('mortgage-sidebar1', 'twentyseventeen'),
        'id' => 'custom-side-bar15',
        'description' => __('Custom Sidebar', 'twentyseventeen'),
        'before_widget' => '<div class="widget-content">',
        'after_widget' => "</div>",
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));
    
    
    register_sidebar(array(
        'name' => __('mortgage-sidebar2', 'twentyseventeen'),
        'id' => 'custom-side-bar16',
        'description' => __('Custom Sidebar', 'twentyseventeen'),
        'before_widget' => '<div class="widget-content">',
        'after_widget' => "</div>",
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));
    
    register_sidebar(array(
        'name' => __('gloss-cat', 'twentyseventeen'),
        'id' => 'custom-side-bar17',
        'description' => __('Custom Sidebar', 'twentyseventeen'),
        'before_widget' => '<div class="widget-content">',
        'after_widget' => "</div>",
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));
    
    register_sidebar(array(
        'name' => __('gloss-alphaindex', 'twentyseventeen'),
        'id' => 'custom-side-bar18',
        'description' => __('Custom Sidebar', 'twentyseventeen'),
        'before_widget' => '<div class="widget-content">',
        'after_widget' => "</div>",
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));
    
    register_sidebar(array(
        'name' => __('gloss-search', 'twentyseventeen'),
        'id' => 'custom-side-bar19',
        'description' => __('Custom Sidebar', 'twentyseventeen'),
        'before_widget' => '<div class="widget-content">',
        'after_widget' => "</div>",
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));
    register_sidebar(array(
        'name' => __('favourite', 'twentyseventeen'),
        'id' => 'custom-side-bar20',
        'description' => __('Custom Sidebar', 'twentyseventeen'),
        'before_widget' => '<div class="widget-content">',
        'after_widget' => "</div>",
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));
    
}

add_action('widgets_init', 'my_custom_sidebar');

// Theme setting option page
if (function_exists('acf_add_options_page')) {
    
    acf_add_options_page(array(
        'page_title' => 'Theme General Settings',
        'menu_title' => 'Theme Settings',
        'menu_slug' => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect' => false
    ));
    
    acf_add_options_sub_page(array(
        'page_title' => 'Theme Header Settings',
        'menu_title' => 'Header',
        'parent_slug' => 'theme-general-settings'
    ));
    acf_add_options_sub_page(array(
        'page_title' => 'Theme Content Settings',
        'menu_title' => 'Content',
        'parent_slug' => 'theme-general-settings'
    ));
    
    acf_add_options_sub_page(array(
        'page_title' => 'Theme Footer Settings',
        'menu_title' => 'Footer',
        'parent_slug' => 'theme-general-settings'
    ));
    
}




add_filter('nav_menu_css_class', 'special_nav_class', 10, 2);

function special_nav_class($classes, $item)
{
    if (in_array('current-menu-item', $classes)) {
        $classes[] = 'active ';
    }
    return $classes;
}

//load more post


add_action('wp_ajax_load_posts_by_ajax', 'load_posts_by_ajax_callback');

add_action('wp_ajax_nopriv_load_posts_by_ajax', 'load_posts_by_ajax_callback');

function load_posts_by_ajax_callback()
{
    
    check_ajax_referer('load_more_posts', 'security');
    
    $paged   = $_POST['page'];
    $term_id = $_POST['term_id'];
    
    
    
    $args = array(
        'post_type' => 'post',
        'cat' => $term_id,
        
        'posts_per_page' => '4',
        
        'paged' => $paged
        
        
    );
    
    
    $my_posts = new WP_Query($args);
    
    if ($my_posts->have_posts()) {
        
?>

            <div class="my-posts">

                <?php
        while ($my_posts->have_posts()):
            $my_posts->the_post();
?>
                   <div class="news_Section1 wow fadeInUp">
                      <h3 class="title_News"><a href="<?php
                echo the_permalink();
    ?>"><?php
                the_title();
    ?></a></h3>
    <?php
            $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'masonry_thumb_large');
?>
                         <img src="<?php
            echo $image[0];
?>" alt="" class="blog-img"/>
                        <?php
            the_excerpt();
?>
                       <a href="<?php
            echo the_permalink();
?>" class="click-more">read more</a>
                       <div class="newsseprater">
                            <img src="/wp-content/themes/twentyseventeen-child/images/sepImg.jpg" />
                        </div>
                    </div>
                <?php
        endwhile;
?>

            </div>

        <?php
    } else {
?>
       
        <script type="text/javascript">
            $('.loadmore').hide();
            $('.nopost').show();
            
            
        </script>
            
          <?php
    }
?>

    
       <?php
    wp_die();
}

// create custom post type

function create_posttype()
{
    
    register_post_type('Glossary', 
    // CPT Options
        array(
        'labels' => array(
            'name' => __('Glossary'),
            'singular_name' => __('Glossary')
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array(
            'slug' => 'Glossary'
        ),
        
        'publicly_queryable' => true
    ));
}
add_action('init', 'create_posttype');

//Property tax

function create_posttypetax()
{
    
    register_post_type('Property Tax', 
    // CPT Options
        array(
        'labels' => array(
            'name' => __('Property Tax'),
            'singular_name' => __('tax')
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array(
            'slug' => 'property_tax'
        ),
        
        'publicly_queryable' => true
    ));
}

add_action('init', 'create_posttypetax');

// Hooking up our function to theme setup


function tr_create_my_taxonomy()
{
    
    register_taxonomy('glossary-category', 'glossary', array(
        'label' => __('glossary-category'),
        'rewrite' => array(
            'slug' => 'glossary-category'
        ),
        'hierarchical' => true
    ));
}
add_action('init', 'tr_create_my_taxonomy');



//glossary load posts



add_action('wp_ajax_load-filter', 'prefix_load_cat_posts');
add_action('wp_ajax_nopriv_load-filter', 'prefix_load_cat_posts');

function prefix_load_cat_posts()
{
    
    global $post;
    
    $keyword                = $_POST['key'];
    $ourteam_category_check = $_POST['cat'];
    
    
    
    
    if ($keyword != '') {
        
        
        
        if ($ourteam_category_check) {
            $niche_ourteam = new WP_Query(array(
                'post_type' => 'glossary',
                's' => $keyword,
                'posts_per_page' => -1,
                // 'taxonomy' => 'glossary-category',
                // 'term' => $ourteam_category_check 
                'tax_query' => array(
                    array(
                        'taxonomy' => 'glossary-category',
                        'field' => 'term_id',
                        'terms' => $ourteam_category_check
                    )
                )
            ));
        } else {
            $niche_ourteam = new WP_Query(array(
                'post_type' => 'glossary',
                's' => $keyword,
                'posts_per_page' => -1
            ));
        }
        
?>

<input type="hidden" id="hidden_id" value="<?php
        echo $ourteam_category_check;
?>">
        <?php
        if ($niche_ourteam->have_posts()) {
            
?>
   

      <?php
            while ($niche_ourteam->have_posts()):
                $niche_ourteam->the_post();
?>
       
        
            <tr>
                               <td class="tdata"> <h2><?php
                the_title();
?></h2></td>
                               <td>
                                   <?php
                the_content();
?>
                              </td>
                        
             </tr>

      <?php
            endwhile;
?>
 
<?php
        } else {
?>
<input type="hidden" id="hidden_id" value="<?php
            echo $ourteam_category_check;
?>">
     <tr>
                               <td class="tdata"></td>
                               <td>
                                  <h4>No terms available</h4>
                               </td>
                           </tr>
<?php
        }
    } else {
        
        if ($ourteam_category_check) {
            $niche_ourteam_args = array(
                'post_type' => 'glossary',
                // 'cat'   => $ourteam_category_check,                
                'orderby' => 'post_date',
                'order' => 'ASC',
                'post_status' => 'publish',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'glossary-category',
                        'field' => 'term_id',
                        'terms' => $ourteam_category_check
                    )
                )
            );
        } else {
            $niche_ourteam_args = array(
                'post_type' => 'glossary',
                // 'cat'   => $ourteam_category_check,                
                'orderby' => 'post_date',
                'order' => 'ASC',
                'post_status' => 'publish'
            );
        }
        
        
        
        
        $niche_ourteam = new WP_Query($niche_ourteam_args);
?>

         <input type="hidden" id="hidden_id" value="<?php
        echo $ourteam_category_check;
?>">

        <?php
        if ($niche_ourteam->have_posts()) {
?>

        

          <?php
            
            while ($niche_ourteam->have_posts()):
                $niche_ourteam->the_post();
?>

  
                     <tr>
                               <td class="tdata"> <h2><?php
                the_title();
?></h2></td>
                               <td>
                                   <?php
                the_content();
?>
                              </td>
                           </tr>
                      

<?php
            endwhile;
        } else {
?>
<input type="hidden" id="hidden_id" value="<?php
            echo $ourteam_category_check;
?>">
     <tr>
                               <td class="tdata"></td>
                               <td>
                                  <h4>No terms available</h4>
                               </td>
                           </tr>
<?php
        }
    }
    
    
    
    
    
    
    wp_reset_postdata();
    
    wp_die();
    
}


//load all post 
add_action('wp_ajax_load-all-posts', 'prefix_load_allcat_posts');
add_action('wp_ajax_nopriv_load-all-posts', 'prefix_load_allcat_posts');

function prefix_load_allcat_posts()
{
    
    $niche_ourteam_args = array(
        'post_type' => 'glossary',
        'order' => 'ASC'
        
    );
    
    $niche_ourteam = new WP_Query($niche_ourteam_args);
    
    while ($niche_ourteam->have_posts()):
        $niche_ourteam->the_post();
?>

            <tr>
                               <td class="tdata"> <h2><?php
        the_title();
?></h2></td>
                               <td>
                                   <?php
        the_content();
?>
                              </td>
                           </tr>

      <?php
    endwhile;
    
    wp_reset_postdata();
    
    wp_die();
    
}

//load all post 
add_action('wp_ajax_load-all-alph', 'prefix_load_allcat_alph');
add_action('wp_ajax_nopriv_load-all-alph', 'prefix_load_allcat_alph');

function prefix_load_allcat_alph()
{
    
    global $post;
    
    global $wpdb;
    
    $alphabet = $_POST['alph'];
    $cat_id   = $_POST['cat'];
    
    $niche_ourteam_args = array(
        'post_type' => 'glossary',
        'order' => 'ASC',
        ' tax_query' => array(
            array(
                'taxonomy' => 'glossary-category',
                'field' => 'term_id',
                'terms' => $cat_id
            )
        )
        
    );
    
    $niche_ourteam = new WP_Query($niche_ourteam_args);
    
    while ($niche_ourteam->have_posts()):
        $niche_ourteam->the_post();
?>

            <tr>
                               <td class="tdata"> <h2><?php
        the_title();
?></h2></td>
                               <td>
                                   <?php
        the_content();
?>
                              </td>
                           </tr>

      <?php
    endwhile;
    
    wp_reset_postdata();
    
    wp_die();
    
}

//on alphabet click//
add_action('wp_ajax_alp_search-posts', 'prefix_load_alp_cat_posts');
add_action('wp_ajax_nopriv_alp_search-posts', 'prefix_load_alp_cat_posts');

function prefix_load_alp_cat_posts()
{
    
    global $post;
    
    global $wpdb;
    
    $alphabet = $_POST['alph'];
    $cat_id   = $_POST['cat'];
    
    //get all post IDs for posts beginning with cap B, in title order,
    //display posts
    
    
    $postids = $wpdb->get_col($wpdb->prepare("
SELECT      ID
FROM        $wpdb->posts
WHERE       SUBSTR($wpdb->posts.post_title,1,1) = %s
ORDER BY    $wpdb->posts.post_title", $alphabet));
    
    if ($postids) {
        
        if ($cat_id) {
            $args = array(
                'post__in' => $postids,
                'post_type' => 'glossary',
                'post_status' => 'publish',
                'posts_per_page' => -1,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'glossary-category',
                        'field' => 'term_id',
                        'terms' => $cat_id
                    )
                )
            );
        } else {
            $args = array(
                'post__in' => $postids,
                'post_type' => 'glossary',
                'post_status' => 'publish',
                'posts_per_page' => -1
            );
        }
        
        
        $my_query = null;
        $my_query = new WP_Query($args);
?>
 <input type="hidden" id="hidden_id" value="<?php
        echo $cat_id;
?>">
<?php
        if ($my_query->have_posts()) {
            
            while ($my_query->have_posts()):
                $my_query->the_post();
?>
   <tr>
                               <td class="tdata"> <h2><?php
                the_title();
?></h2></td>
                               <td>
                                   <?php
                the_content();
?>
                              </td>
                        
             </tr>
    <?php
            endwhile;
        } else {
?>
    <tr>
                               <td class="tdata"></td>
                               <td>
                                  <h4>No terms available</h4>
                               </td>
                           </tr>
<?php
        }
        ;
    }
    ;
    
    wp_reset_query(); // Restore global post data stomped by the_post().
    
    wp_die();
    
}
;


//store id in usermeta//
add_action('wp_ajax_store_data', 'prefix_store_data');
add_action('wp_ajax_nopriv_store_data', 'prefix_store_data');

function prefix_store_data()
{
    
    
    global $post;
  
    $cat_id  = $_POST['cat'];
    $user_id = get_current_user_id();
    
 
    update_user_meta($user_id, 'check_category', $cat_id);
    
   exit;
    
}
;

add_action('wp_ajax_block_news', 'prefix_block_news');
add_action('wp_ajax_nopriv_block_news', 'prefix_block_news');

function prefix_block_news()
{
    
    
    
    
    if (is_user_logged_in()) {
        global $current_user;
        wp_get_current_user();
        $username = $current_user->display_name;
        $usermail = $current_user->user_email;
        
        
        
        global $wpdb;
        
        
        
        
        $result = $wpdb->get_row($wpdb->prepare("SELECT * FROM `wp_es_emaillist` WHERE `es_email_mail`='" . $usermail . "' and `es_email_group`='Newsletter' "));
        
        $num_rows = count($result);
        
        
        if ($num_rows > 0) {
            $wpdb->delete("wp_es_emaillist", array(
                'es_email_group' => 'Newsletter',
                'es_email_mail' => $usermail
            ));
        } else {
            $wpdb->insert("wp_es_emaillist", array(
                'es_email_name' => $username,
                'es_email_mail' => $usermail,
                'es_email_status' => 'confirmed',
                'es_email_group' => 'Newsletter'
            ));
        }
        
        
        wp_die();
        
    }
    ;
}


add_action('wp_ajax_block_news_cat', 'prefix_block_news_cat');
add_action('wp_ajax_nopriv_block_news_cat', 'prefix_block_news_cat');

function prefix_block_news_cat()
{
    
    
    
    
    if (is_user_logged_in()) {
        global $current_user;
        wp_get_current_user();
        $username = $current_user->display_name;
        $usermail = $current_user->user_email;
        
        
        global $wpdb;
        $result = $wpdb->get_row($wpdb->prepare("SELECT * FROM `wp_es_emaillist` WHERE `es_email_mail`='" . $usermail . "' and `es_email_group`='News' "));
        
        $num_rows = count($result);
        
        
        
        if ($num_rows > 0) {
            $wpdb->delete("wp_es_emaillist", array(
                'es_email_group' => 'News',
                'es_email_mail' => $usermail
            ));
        } else {
            $wpdb->insert("wp_es_emaillist", array(
                'es_email_name' => $username,
                'es_email_mail' => $usermail,
                'es_email_status' => 'confirmed',
                'es_email_group' => 'News'
            ));
        }
        
        wp_die();
        
    }
    ;
}

//block reviews
add_action('wp_ajax_block_review_cat', 'prefix_block_review_cat');
add_action('wp_ajax_nopriv_block_review_cat', 'prefix_block_review_cat');

function prefix_block_review_cat()
{
  
    if (is_user_logged_in()) {
        global $current_user;
        wp_get_current_user();
        $username = $current_user->display_name;
        $usermail = $current_user->user_email;
        
        
        global $wpdb;
        $result = $wpdb->get_row($wpdb->prepare("SELECT * FROM `wp_es_emaillist` WHERE `es_email_mail`='" . $usermail . "' and `es_email_group`='Reviews' "));
        
        $num_rows = count($result);
       
        if ($num_rows > 0) {
            $wpdb->delete("wp_es_emaillist", array(
                'es_email_group' => 'Reviews',
                'es_email_mail' => $usermail
            ));
        } else {
            $wpdb->insert("wp_es_emaillist", array(
                'es_email_name' => $username,
                'es_email_mail' => $usermail,
                'es_email_status' => 'confirmed',
                'es_email_group' => 'Reviews'
            ));
        }
       
        wp_die();
       
    };
}

//block tips
add_action('wp_ajax_block_tips_cat', 'prefix_block_tips_cat');
add_action('wp_ajax_nopriv_block_tips_cat', 'prefix_block_tips_cat');

function prefix_block_tips_cat()
{
 
    if (is_user_logged_in()) {
        global $current_user;
        wp_get_current_user();
        $username = $current_user->display_name;
        $usermail = $current_user->user_email;
        
        
        global $wpdb;
        $result = $wpdb->get_row($wpdb->prepare("SELECT * FROM `wp_es_emaillist` WHERE `es_email_mail`='" . $usermail . "' and `es_email_group`='Tips&Hacks' "));
        
        $num_rows = count($result);
        
        
        
        if ($num_rows > 0) {
            $wpdb->delete("wp_es_emaillist", array(
                'es_email_group' => 'Tips&Hacks',
                'es_email_mail' => $usermail
            ));
        } else {
            $wpdb->insert("wp_es_emaillist", array(
                'es_email_name' => $username,
                'es_email_mail' => $usermail,
                'es_email_status' => 'confirmed',
                'es_email_group' => 'Tips&Hacks'
            ));
        }
        
        wp_die();
        
    }
    ;
}

//block mortgage related posts
add_action('wp_ajax_block_mort_cat', 'prefix_block_mort_cat');
add_action('wp_ajax_nopriv_block_mort_cat', 'prefix_block_mort_cat');

function prefix_block_mort_cat()
{
  
    if (is_user_logged_in()) {
        global $current_user;
        wp_get_current_user();
        $username = $current_user->display_name;
        $usermail = $current_user->user_email;

        global $wpdb;
        $result = $wpdb->get_row($wpdb->prepare("SELECT * FROM `wp_es_emaillist` WHERE `es_email_mail`='" . $usermail . "' and `es_email_group`='Mortgages' "));
        
        $num_rows = count($result);
        if ($num_rows > 0) {
            $wpdb->delete("wp_es_emaillist", array(
                'es_email_group' => 'Mortgages',
                'es_email_mail' => $usermail
            ));
        } else {
            $wpdb->insert("wp_es_emaillist", array(
                'es_email_name' => $username,
                'es_email_mail' => $usermail,
                'es_email_status' => 'confirmed',
                'es_email_group' => 'Mortgages'
            ));
        }
        
        wp_die();
        
    };
}


add_action('user_register', 'myplugin_registration_save', 10, 1);
function myplugin_registration_save($user_id)
{
    
    $user     = get_user_by('id', $user_id);
    $username = $user->display_name;
    $usermail = $user->user_email;
    
    global $wpdb;
    $wpdb->insert("wp_es_emaillist", array(
        'es_email_name' => $username,
        'es_email_mail' => $usermail,
        'es_email_status' => 'confirmed',
        'es_email_group' => 'Newsletter'
    ));
    $wpdb->insert("wp_es_emaillist", array(
        'es_email_name' => $username,
        'es_email_mail' => $usermail,
        'es_email_status' => 'confirmed',
        'es_email_group' => 'Reviews'
    ));
    $wpdb->insert("wp_es_emaillist", array(
        'es_email_name' => $username,
        'es_email_mail' => $usermail,
        'es_email_status' => 'confirmed',
        'es_email_group' => 'News'
    ));
    $wpdb->insert("wp_es_emaillist", array(
        'es_email_name' => $username,
        'es_email_mail' => $usermail,
        'es_email_status' => 'confirmed',
        'es_email_group' => 'Tips&Hacks'
    ));
    $wpdb->insert("wp_es_emaillist", array(
        'es_email_name' => $username,
        'es_email_mail' => $usermail,
        'es_email_status' => 'confirmed',
        'es_email_group' => 'Mortgages'
    ));
        
}

add_action('wp_ajax_mortgage_cal', 'prefix_mortgage_cal');
add_action('wp_ajax_nopriv_mortgage_cal', 'prefix_mortgage_cal');

function prefix_mortgage_cal()
{
    global $post, $wpdb;

    $location = $_POST['keyword']; 

    $home_price=(int) str_replace(",","", $home_price);
  
       $locationsData=$wpdb->get_results("select ws.name as state_name, cps.city_name as city_name,  cps.id
       from wp_states ws JOIN wp_city_state_property_texes cps ON
      ws.id=cps.state_id where cps.city_name like '%".$location."%' OR ws.name like '%".$location."%' LIMIT 150" );
   //echo "<pre>"; print_r($locationsData); echo "</pre>"; exit;  '%".$location."%'
?>
  
        <?php if ($locationsData){
            $val_data = array();
             // $path = array();
            foreach($locationsData as $data):
            
         $val_data[] =   array(
        'value' => $data->city_name.', '.$data->state_name,
        'label' => $data->city_name.', '.$data->state_name,
         'desc'=> $data->id
    );
        ?> 
        <?php  
            endforeach;
        }echo json_encode($val_data); ?>
   
        <?php
    wp_die();
}

add_action('wp_ajax_getPropertyTax', 'prefix_getPropertyTax');
add_action('wp_ajax_nopriv_getPropertyTax', 'prefix_getPropertyTax');
function prefix_getPropertyTax()
{
      global $post,$wpdb; 
      $loc_tax  = $_POST['keyword']; 
      $property  = $_POST['keyword2']; 
      $property_tax=(int) str_replace(",","", $property);
      $locationsData=$wpdb->get_row("select average_percentage,state_id from wp_city_state_property_texes where id= '".$loc_tax."'",ARRAY_A );
      $average_percentage = $locationsData['average_percentage']; 
      $vrs=round($average_percentage, 4); 
      $location_tax = ($property_tax * $vrs)/12; 
      $state_id = $locationsData['state_id'];
     //print_r( $state_id); echo "hiii";
        $homeowner_insurance=$wpdb->get_results("select * from wp_home_value_ranges",ARRAY_A ); 
       //foreach ($homeowner_insurance as $key => $value) {
        for($i=0;$i<10;$i++){
       //echo $property_tax .'   '. $homeowner_insurance[$i]['min_price_range']. '     '.$homeowner_insurance[$i]['max_price_range']; echo "</br>";
        if(($property_tax >= $homeowner_insurance[$i]['min_price_range']) && ($property_tax <= $homeowner_insurance[$i]['max_price_range'])) {
           $res = $homeowner_insurance[$i]['id'];
         } elseif ($property_tax >= '500000' ) {
            $res =11;
        } 
   //   $i++; 
    }  
       $locationsDatas=$wpdb->get_row("select percentage from wp_home_value_range_states where home_value_range_id= '".$res."' AND state_id='".$state_id."'",ARRAY_A ); 
          $percentage = $locationsDatas['percentage'];
          $percentage_vrs=round($percentage, 4); 
          $home_Insurance_amount =  ($property_tax * $percentage_vrs)/12;
          //array("data1"=>"value1","data2"=>"value2");
          $returnArr = ["data1"=>$home_Insurance_amount,"data2"=>$location_tax];  
         echo json_encode($returnArr);
     exit;
}

add_action('wp_ajax_load_tax', 'prefix_load_tax');
add_action('wp_ajax_nopriv_load_tax', 'prefix_load_tax');
function prefix_load_tax()
{
    global $post;
    $loc_tax  = $_POST['loc_tax'];
    $location = $_POST['location'];
    $justify  = $_POST['justify'];
    $post    = get_page_by_title($justify, OBJECT, 'propertytax');
    $post_id = $post->ID;
    $custom = get_post_custom($post_id);
    echo $custom['tax'][0];
    wp_die();
}



add_action('wp_ajax_load_ins', 'prefix_load_ins');
add_action('wp_ajax_nopriv_load_ins', 'prefix_load_ins');

function prefix_load_ins()
{
    
    global $post;
    
    $loc_ins = $_POST['loc_ins'];
    
    $justify = $_POST['justify'];
    
    $price = $_POST['price'];
   
    $post    = get_page_by_title($justify, OBJECT, 'propertytax');
    $post_id = $post->ID;
    
    $custom = get_post_custom($post_id);
    
    // print_r($custom['insurance_0_value']);
    if ($price = range(0, 49999)) {
        
        echo $custom['insurance_0_value'][0];
    } elseif ($price = range(50000, 74999)) {
        
        echo $custom['insurance_1_value'][0];
    } elseif ($price = range(75000, 99999)) {
        
        echo $custom['insurance_2_value'][0];
    } elseif ($price = range(100000, 124999)) {
        
        echo $custom['insurance_3_value'][0];
    } elseif ($price = range(125000, 149000)) {
        
        echo $custom['insurance_4_value'][0];
    } elseif ($price = range(150000, 174999)) {
        
        echo $custom['insurance_5_value'][0];
    } elseif ($price = range(175000, 199999)) {
        
        echo $custom['insurance_6_value'][0];
    } elseif ($price = range(200000, 299999)) {
        
        echo $custom['insurance_7_value'][0];
    } elseif ($price = range(300000, 399999)) {
        
        echo $custom['insurance_8_value'][0];
    } elseif ($price = range(400000, 499999)) {
        
        echo $custom['insurance_9_value'][0];
    } elseif ($price > 500000) {
        
        echo $custom['insurance_10_value'][0];
    }
  
    wp_die();
 
}

add_action('wp_ajax_mortgage_price_action', 'mortgage_price');
add_action('wp_ajax_nopriv_mortgage_price_action', 'mortgage_price');

function mortgage_price()
{ 
    global $post;
    
    $price = $_POST['price'];
    
    echo '<p>Based on a <span class="js-mortgage-calc-mortgage-amount"></span>$' . number_format($price) . ' mortgage</p> ';
    
    wp_die();
}

add_action('wp_ajax_save_mortage', 'save_mortage');
add_action('wp_ajax_nopriv_save_mortage', 'save_mortage');



function save_mortage()
{ 
    global $post;
 echo   $user_id=get_current_user_id();
$mortage_data = array();
   foreach ($_POST as $key => $value) {
  $mortage_data[$key] = $value;
}
$mor_seril=serialize($mortage_data); print_r($mor_seril);
add_user_meta( $user_id, 'mortage_data', "dars" );
 exit;
}


add_action('wp_ajax_rent_buy_cal', 'prefix_rent_buy_cal');
add_action('wp_ajax_nopriv_rent_buy_cal', 'prefix_rent_buy_cal');
function prefix_rent_buy_cal(){
    global $post, $wpdb;

    $location = $_POST['keyword']; 
      $locationsData=$wpdb->get_results("SELECT name FROM wp_states WHERE code='AL'");
      echo "<pre>"; print_r($locationsData); echo "</pre>"; 
}
?>

