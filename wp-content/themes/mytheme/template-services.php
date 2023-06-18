<?php
/*
Template Name: Services

*/
?>
<?php 
get_header();
?>

<section class="page-wrap">
<div class="container">
<div class="container1">
 <?php $hero = get_field('services');?>      
<h1><?php echo $hero['main_heading'];?></h1>
<div class="service_main">

<div class="main_left">
      <?php kdmfi_the_featured_image( 'featured-image-2', 'full' ); ?>
     <h2><?php echo $hero['heading_left'];?></h2>
     <p><?php echo $hero['text_left'];?></p></div>
<div class="main_right">
     <?php kdmfi_the_featured_image( 'featured-image-3', 'full' ); ?>
      <h2><?php echo $hero['heading_right'];?></h2>
      <p><?php echo $hero['text_right'];?></p></div>
</div>

<div class="service_main">
    
<div class="main_left">
     <?php kdmfi_the_featured_image( 'featured-image-4', 'full' ); ?>
     <h2><?php echo $hero['heading_left_1'];?></h2>
     <p><?php echo $hero['text_left_1'];?></p></div>
<div class="main_right">
     <?php kdmfi_the_featured_image( 'featured-image-5', 'full' ); ?>
      <h2><?php echo $hero['heading_right_1'];?></h2>
      <p><?php echo $hero['text_right_1'];?></p></div>
</div>
<div class="service_main">
<div class="main_left">
      <?php kdmfi_the_featured_image( 'featured-image-6', 'full' ); ?>
     <h2><?php echo $hero['heading_left_2'];?></h2>
     <p><?php echo $hero['text_left_2'];?></p></div>
<div class="main_right">
     <?php kdmfi_the_featured_image( 'featured-image-7', 'full' ); ?>
      <h2><?php echo $hero['heading_right_2'];?></h2>
      <p><?php echo $hero['text_right_2'];?></p></div>
</div>
<!--Testimonial-->
        <?php $hero = get_field('testimonials');?>
        <div class="testimonial">
            <h2><?php echo $hero['heading'];?></h2>
            <div class="testimonial-flex">
            <div class="testi1">
                <p><span>&quot;</span> <?php echo $hero['text_1'];?> <span>&quot;</span></p>
                <h3><?php echo $hero['name_1'];?></h3>
            </div>
            <div class="testi2"><p><span>&quot;</span> <?php echo $hero['text_2'];?> <span>&quot;</span></p>
            <h3><?php echo $hero['name_2'];?></h3></div>
            <div class="testi3"><p><span>&quot;</span> <?php echo $hero['text_3'];?> <span>&quot;</span></p>
            <h3><?php echo $hero['name_3'];?></h3></div>
            </div>
        </div>
<!--Testimonial end-->

</div>


</div>
</section>

<?php get_footer();?>