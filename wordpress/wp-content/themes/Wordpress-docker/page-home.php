<?php get_header(); ?> 

    
    <main>
        <div class="container">

            <h2>Lista de contatos do Post_type Contatos</h2>

            <?php
                // $paged = (isset($_GET['pagina']) ? $_GET['pagina'] : 1 ); //Como foi listado em um carrossel a paginação não é necessária 

                $args = array( 'post_type' => 'contatos',
                    'order' => 'desc',
                    'posts_per_page' => -1,
                    //'paged' => $paged  //Como foi listado em um carrossel a paginação não é necessária 

                );

                $contact_query = new WP_Query( $args );

                if( $contact_query->have_posts() ):  

                    ?>

                    <div class="contact-animals">
                        <?php while ( $contact_query->have_posts() ) : $contact_query->the_post();   ?>

                            <div class="item">  

                                <div class="box">
                                    
                                    <?php
                                        $image = get_field('acf_foto');
                                    ?>

                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                
                                    <div class="box-content">

                                        <h2><a href="<?php echo get_permalink(); ?>"><?php echo get_field('acf_nome'); ?></a></h2>

                                        <a href="<?php echo get_permalink(); ?>">Ver contato</a>
                                    </div>
                            
                            
                                </div>

                            </div>
                    

                        <?php endwhile; ?>

                    </div>

                <?php

                endif;

            ?>
            

            <!-- <div class="barradenavegacao">
                <?php 
                    
                    ## DECIDI DEIXAR UM CARROSSEL , ENTÃO NÃO E NECESSÁRIO  A PAGINAÇÃO

                    // echo paginate_links( array(
                    //     'format' => '?pagina=%#%',
                    //     'show_all'  => false,
                    //     'current' => max( 1, $paged ),
                    //     'total' => $contact_query->max_num_pages,
                    //     'prev_text' => '<',
                    //     'next_text' => '>',
                    //     'type'      => 'list'
                    // )  );
                ?>
            </div>  -->
        </div> <!-- container -->
    </main> 



<?php get_footer(); ?>