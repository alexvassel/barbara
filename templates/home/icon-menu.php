<?php  
                            $columnsize = 3;

                	?>
                <div class="home-margin home-padding">
                	<div class="rowtight homepromo">
                        <?php $counter = 1;
                $post_type = 'icon';
                //Unlimited count of clients
                $posts_per_page = -1;
                $args = array( 'post_type' => $post_type, 'posts_per_page' => $posts_per_page);
$query = new WP_Query($args);
$icons = $query->get_posts();
            ?>



                            <?php foreach ($icons as $post) : 
                             $target = '_self'; ?>
                            
                                    <div class="<?php echo esc_attr('tcol-lg-4 tcol-md-4 tcol-sm-4 tcol-xs-6 tcol-ss-12');?> home-iconmenu <?php echo 'homeitemcount'.esc_attr($counter);?>">
                                                <div class="home-icon-item"><i class="
                                            <?php 
                                                    the_field("image");?>
"></i><?php
                                                    echo '<h4>'.$post->post_title.'</h4>';
                                                    echo '<p>'.$post->post_content.'</p>';
                                                echo '</div>';
                                             ?>
                                    </div>
                            <?php
                                if ($counter % intval($columnsize) == 0)
                                    echo '</div><div class="rowtight homepromo">';
                                $counter ++
                            ?>
                        <?php endforeach; ?>
                    </div> <!--homepromo -->
                </div>
