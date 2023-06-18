<?php
/*
Template Name:Testimonials

*/
?>
<?php get_header();?>
<section class="page-wrap">
<div class="container">
    <?php $hero = get_field('testimonials_page');?>
    <div class="container1">
<div class="testimonial-page">
            <h1><?php echo $hero['top_heading'];?></h1>
            
            <div class="testi1">
                <p><span>&quot;</span> <?php echo $hero['text'];?> <span>&quot;</span></p>
                <h3><?php echo $hero['name'];?></h3>
            </div>
            <div class="testi2"><p><span>&quot;</span> <?php echo $hero['text1'];?>  <span>&quot;</span></p>
            <h3><?php echo $hero['name_1'];?></h3></div>
            <div class="testi3"><p><span>&quot;</span> <?php echo $hero['text_2'];?><span>&quot;</span></p>
            <h3><?php echo $hero['name_2'];?></h3></div>
            
        </div>
</div>
</div>
</section>
<?php get_footer();?>