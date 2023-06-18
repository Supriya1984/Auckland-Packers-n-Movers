<?php get_header();?>

<section class="page-wrap">
<div class="container">
    <?php get_template_part('includes/section','content');?>
    <div class="container1">
     <?php $hero = get_field('about_us');?>        
    
    <h1><?php echo $hero['heading'];?></h1>
       <div class="text-about">
        
       <div><p><?php echo $hero['text'];?></p>
    <p><?php echo $hero['test_bottom'];?></p></div>
    <div>
      <!--  <?php if( get_field('image') ): ?>
            <img src="<?php the_field('image'); ?>" />
        <?php endif; ?>-->
        <?php kdmfi_the_featured_image( 'featured-image-2', 'full' ); ?>
      

    <!--     <?php if( get_field('image') ): ?>
            <img src="<?php the_field('image'); ?>" />
        <?php endif; ?>
        
   <img style="margin-top:20%;" src="<?php bloginfo('template_directory');?>/images/aboutus2.png">
    -->
    <div style="margin-top:20%;"> <?php kdmfi_the_featured_image( 'featured-image-3', 'full' ); ?></div>
    
    </div>
    </div>

     
        

        
    </div>
</div>
</section>

<?php get_footer();?>