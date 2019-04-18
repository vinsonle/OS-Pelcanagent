<?php
echo "<ul>";
if ($favorite_post_ids):
	$c = 0;
	$favorite_post_ids = array_reverse($favorite_post_ids);
    foreach ($favorite_post_ids as $post_id) {
    	if ($c++ == $limit) break;
        $p = get_post($post_id);
        $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $p -> ID ), 'full' );
        $url = $thumb['0'];

        echo "
                <div class='col-sm-4'>
                   <div class='info_Block_inner'>
                        <div class='info_img'>
                       <img src ='".$url."' alt = 'Image'>
                        </div>
                        <div class='infoContent'>
                            <h5><a href='".get_permalink($post_id)."' title='". $p->post_title ."'>" . $p->post_title . "</a></h5>
                        </div>
                    </div>
                </div>
             ";

        


    }
else:
    echo "<li>";
    echo "Your favorites will be here.";
    echo "</li>";
endif;
echo "</ul>";
?>
