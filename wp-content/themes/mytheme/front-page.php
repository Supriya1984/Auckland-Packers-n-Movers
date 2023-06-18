<?php


get_header();?>


<section class="page-wrap">
<div class="container">
    <?php $hero = get_field('background');?>
    <!--middle part starts-->
    <div class="container1">
       
       
        <div class="top-bg">
          
           <div class="text">
           <h1><?php echo $hero['tag_line'];?></h1>
           <p><?php echo $hero['text'];?></p>

           <?php if($hero['link']):?>

           <p class="button">
            <a href="<?php echo $hero['link'];?>">
           <?php echo $hero['link_text'];?>
        </a>
        </p>
           <?php endif;?>
        </div>
              </div>
        <!--Our company-->

        <?php $hero = get_field('our_company');?>
       <div class="text-mid">
                
        <?php if( get_field('image') ): ?>
    <img src="<?php the_field('image'); ?>" />
<?php endif; ?>
        <!--<img src="<?php bloginfo('template_directory');?>/images/moving1.png">-->
      
       <div><h2><?php echo $hero['main_heading'];?></h2><?php echo $hero['text'];?>
    <p class="button"><a href="<?php echo $hero['link'];?>"><?php echo $hero['link_text'];?></a></p></div>

    </div>

            
        <!--Our company ends-->
        <!--Our Projects-->
        <?php $hero = get_field('our_projects');?>
        <div class="project">
            <h2><?php echo $hero['heading'];?></h2>
            <p><?php echo $hero['text'];?></p>
            <!--add foogallery plugin -->
            <?php echo do_shortcode('[foogallery id="323"]') ?>
            <!--add foogallery plugin -->
            <div class="project-flex">
            <div class="project1">
               <h3><?php echo $hero['sub_heading1'];?></h3>
            </div>
            <div class="project2">
                <h3><?php echo $hero['sub_heading2'];?></h3>
            </div>
            <div class="project3">
               <h3><?php echo $hero['sub_heading3'];?></h3>
            </div>

            </div>
            <p class="button"><a href="<?php echo $hero['link'];?>"><?php echo $hero['link_text'];?></a></p>
        </div>
        <!--Our Projects end-->
        <!--Testimonial-->
        <?php $hero = get_field('testimonials_home');?>
        <div class="testimonial">
            <h2><?php echo $hero['main_heading'];?></h2>
            <div class="testimonial-flex">
            <div class="testi1">
                <p><span>&quot;</span> <?php echo $hero['text_home'];?> <span>&quot;</span></p>
                <h3><?php echo $hero['name_home'];?></h3>
            </div>
            <div class="testi2"><p><span>&quot;</span> <?php echo $hero['text_home1'];?> <span>&quot;</span></p>
            <h3><?php echo $hero['name_home1'];?></h3></div>
            <div class="testi3"><p><span>&quot;</span> <?php echo $hero['text_home2'];?> <span>&quot;</span></p>
            <h3><?php echo $hero['name_home2'];?></h3></div>
            
            </div>
            <div class="view"><a href="<?php echo $hero['view_more_link'];?>"><?php echo $hero['view_more'];?></a></div>
        </div>
        <!--Testimonial end-->

        <!--bg-img-->
         <?php $hero = get_field('footer_banner');?>
        <div class="bg-img">
        <div class="bg-img-text"><?php echo $hero['text'];?><p class="button"><a href="<?php echo $hero['link'];?>"><?php echo $hero['link_text'];?></a></p></div>
    </div>
    </div>
    <?php get_template_part('includes/section','content');?>
    <!--Middle part end-->
</div>
<section>

<?php get_footer();?>