<?php get_header(); ?>

<section class="banner-single" 
    style="height: 60vh; 
    background:url(<?php echo get_the_post_thumbnail_url();?>) no-repeat; 
    background-position: center; background-size: cover;">

    <div class="container">
        <h1><?php the_title(); ?></h1>
    </div>
</section>
<main>
    <div class="container">

        <?php
        $imagem = get_field('acf_foto');
        ?>
        <div class="bloco-content">
            <img class="" src="<?php echo $imagem['url']; ?>" alt="<?php echo $imagem['alt']; ?>">
        
            <div class="info">
                <div class="name"><span>Nome:</span> <?php echo get_field('acf_nome'); ?></div>
                <div class="tell"><span>Telefone:</span> <?php echo get_field('acf_telefone'); ?></div>
                <div class="e-mail"><span>E-mail:</span> <?php echo get_field('acf_e-mail'); ?></div>
            </div>
        </div>
        
    </div>
    

</main>
<?php get_footer(); ?>