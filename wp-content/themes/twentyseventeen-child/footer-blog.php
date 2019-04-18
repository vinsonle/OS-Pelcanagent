<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
</div><!-- Content close -->


<footer id="colophon" class="site-footer blog-footer" role="contentinfo">

  <div class="main-footer-brdr">
    <div class="foot-main">
      <div class="container">
        <div class="row">
          <div class="main-footer">
            <div class="col-sm-2 col-sm-6 col-xs-12">
                  <?php
                  if ( is_active_sidebar( 'sidebar-2' ) ) { ?>
                    <div class="widget-column footer-widget-1">
                      <?php dynamic_sidebar( 'sidebar-2' ); ?>
                    </div>
                  <?php }?>
            </div>

            <div class="col-sm-3 col-sm-6 col-xs-12">
                      <?php
                      if ( is_active_sidebar( 'sidebar-3' ) ) { ?>
                        <div class="widget-column footer-widget-1">
                          <?php dynamic_sidebar( 'sidebar-3' ); ?>
                        </div>
                      <?php }?>
            </div>

            <div class="col-sm-3 col-sm-6 col-xs-12">
                      <?php
                      if ( is_active_sidebar( 'custom-side-bar3' ) ) { ?>
                        <div class="widget-column footer-widget-1">
                          <?php dynamic_sidebar( 'custom-side-bar3' ); ?>
                        </div>
                      <?php }?>
            </div>

            <div class="col-sm-4 col-sm-6 col-xs-12">

                      <?php
                      if ( is_active_sidebar( 'custom-side-bar4' ) ) { ?>
                        <div class="widget-column footer-widget-1">
                          <?php dynamic_sidebar( 'custom-side-bar4' ); ?>
                        </div>
                      <?php }?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="botttomfooter">
    <div class="container">
      <div class="copyright">
          <?php
                  if ( is_active_sidebar( 'custom-side-bar5' ) ) { ?>
                    <div class="widget-column footer-widget-1">
                      <?php dynamic_sidebar( 'custom-side-bar5' ); ?>
                    </div>
          <?php }?>
          
      </div>
    </div>
  </div>
                      
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri();?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri();?>/js/scrolling-nav.js"></script>
<!-- vendors -->
<script src="<?php echo get_stylesheet_directory_uri();?>/js/wow.min.js"></script>  
 <!--    <script src="//cdnjs.cloudflare.com/ajax/libs/wow/0.1.12/wow.min.js"></script> -->
<script src="<?php echo get_stylesheet_directory_uri();?>/js/highlight.js"></script>
<script src="<?php echo get_stylesheet_directory_uri();?>/js/app.js"></script>
<script src="<?php echo get_stylesheet_directory_uri();?>/js/owl.carousel.min.js">
</script>

<script src="<?php echo get_stylesheet_directory_uri();?>/js/homepage.js"></script>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/series-label.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
  <script src="https://github.com/niklasvh/html2canvas/releases/download/0.5.0-alpha1/html2canvas.js"></script>
    <script src="https://github.com/niklasvh/html2canvas/releases/download/0.5.0-alpha1/html2canvas.svg.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"> </script>
<script src="<?php echo get_stylesheet_directory_uri();?>/js/canvas2image.js"> </script>
<!-- <script src="../build/pdf.js"></script>
<script src="viewer.js"></script> -->

<!--load more posts-->
<script type="text/javascript">
   
     var ajaxurl = "<?php echo admin_url( 'admin-ajax.php' ); ?>";
    <?php 
           $category = get_queried_object();
      //echo $category->term_id;

    ?>
    var term_id = "<?php echo  $category->term_id; ?>";
  
    var page = 2;

    jQuery(function($) {

        $('body').on('click', '.loadmore', function() {

            var data = {

                'action': 'load_posts_by_ajax',

                'page': page,
                'term_id': term_id,
                
                'security': '<?php echo wp_create_nonce("load_more_posts"); ?>'

            };

     

            $.post(ajaxurl, data, function(response) {
              // if(data.trim()==''){alert("Nothing Found");}
                $('.my-posts').append(response);
                $('.my-posts:contains("[…]")').each(function(){
    $(this).html($(this).html().split("[…]").join(""));
});
                page++;

                

            });


        });

    });
 
</script>

<!--glossary js-->
<script type="text/javascript">
    $('.js-category-button').on('click', function(e) {

        var catID = $(this).data('slug');

        var ajaxurl = "<?php echo admin_url( 'admin-ajax.php' ); ?>";

        var data = {

            'action': 'load-filter',
            'cat': catID,

        };

        $.post(ajaxurl, data, function(response) {
            // if(data.trim()==''){alert("Nothing Found");}
            $('.the-news').html(response);

        });

    });
</script>

<!--glossary keyword search-->
<script type="text/javascript">
    $('#post-search1').keyup(function() {

        var keyword = $(this).val();
        var cat_search_id = $('#hidden_id').val();

        var ajaxurl = "<?php echo admin_url( 'admin-ajax.php' ); ?>";

        var data = {

            'action': 'load-filter',
            'cat': cat_search_id,
            'key': keyword

        };

        $.post(ajaxurl, data, function(response) {
            
            $('.the-news').html(response);

        });

    });
</script>

<!--glossary all categories -->
<script type="text/javascript">
    $('.all_cat').on('click', function(e) {


        var ajaxurl = "<?php echo admin_url( 'admin-ajax.php' ); ?>";

        var data1 = {

            'action': 'load-all-posts',


        };



        $.post(ajaxurl, data1, function(response) {
            // if(data.trim()==''){alert("Nothing Found");}
            $('.the-news').html(response);

        });



    });
</script>

<!--glossary all aplhabet search-->
<script type="text/javascript">
    $('.all_alph').on('click', function(e) {

        var cat_search_id = $('#hidden_id').val();
        var ajaxurl = "<?php echo admin_url( 'admin-ajax.php' ); ?>";

        var data1 = {

            'action': 'load-all-aplh',
            'cat': cat_search_id

        };

        $.post(ajaxurl, data1, function(response) {
          
            $('.the-news').html(response);

        });

    });
</script>

<!--On alphabet click -->
<script type="text/javascript">

    function myglossary(alphabet) {

        var alphabet = alphabet;
        var cat_search_id = $('#hidden_id').val();


        var ajaxurl = "<?php echo admin_url( 'admin-ajax.php' ); ?>";

        var data = {

            'action': 'alp_search-posts',
            'alph': alphabet,
            'cat': cat_search_id


        };



        $.post(ajaxurl, data, function(response) {
            // if(data.trim()==''){alert("Nothing Found");}
            $('.the-news').html(response);

        });

    }
</script>

<!--more blog js-->
<script type="text/javascript">
    
    var blogone = document.getElementById("cat_name1");
    blogone.insertAdjacentHTML("afterend", "<span class='catarrow1'></span>");

</script>

<!--profile page tabs -->
<script type="text/javascript">
    function openMenu(evt, menuName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(menuName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    document.getElementById("defaultOpen").click();
</script>

<!--profile page tabs -->
<script>
    function openNav() {
        document.getElementById("myNav").style.display = "block";
    }

    function closeNav() {
        document.getElementById("myNav").style.display = "none";
    }
</script>

<!-- Store selected interest in database -->
<script type="text/javascript">

    $('#interest_submit').click(function(event) { 
        var selected_value = []; // initialize empty array 
        $(".messageCheckbox:checked").each(function() {
            selected_value.push($(this).val());
        });
        var ajaxurl = "<?php echo admin_url( 'admin-ajax.php' ); ?>";
        var data = {
            'action': 'store_data',
            'cat': selected_value,
        };
        $.post(ajaxurl, data, function(response) {        

        });
    });

</script>

<!-- Glossary menu styling -->
<script type="text/javascript">

    $(".glossary_cat li").click(function() {
        $('#all_cat_parent').removeClass('active');
        $(this).addClass('active').siblings().removeClass('active');

    });

    $("#all_cat_parent").click(function() {
        $('#all_cat_parent').addClass('active');
        $('.glossary_cat li').removeClass('active');

    });
</script>

<!-- Block newsletter -->
<script type="text/javascript">
    function block_newsletter() {

        var ajaxurl = "<?php echo admin_url( 'admin-ajax.php' ); ?>";

        var data = {
            'action': 'block_news',
        };

        $.post(ajaxurl, data, function(response) {

        });
    }
</script>

<!-- Block news related post -->
<script type="text/javascript">
    function block_news() {

        var ajaxurl = "<?php echo admin_url( 'admin-ajax.php' ); ?>";

        var data = {
            'action': 'block_news_cat',
        };

        $.post(ajaxurl, data, function(response) {

        });
    }
</script>

<!-- Block reviews related post -->
<script type="text/javascript">
    function block_reviews() {

        var ajaxurl = "<?php echo admin_url( 'admin-ajax.php' ); ?>";

        var data = {
            'action': 'block_review_cat',
        };

        $.post(ajaxurl, data, function(response) {

        });
    }
</script>

<!-- Block tips related post -->
<script type="text/javascript">
    function block_tips() {

        var ajaxurl = "<?php echo admin_url( 'admin-ajax.php' ); ?>";

        var data = {
            'action': 'block_tips_cat',
        };

        $.post(ajaxurl, data, function(response) {

        });
    }
</script>

<!-- Block Mortgage related post -->
<script type="text/javascript">
    function block_mort() {

        var ajaxurl = "<?php echo admin_url( 'admin-ajax.php' ); ?>";

        var data = {
            'action': 'block_mort_cat',
        };

        $.post(ajaxurl, data, function(response) {

        });
    }
</script>

<?php wp_footer(); ?> 

</body>
</html>
