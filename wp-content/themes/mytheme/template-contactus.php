<?php
/*
Template Name: Contact Us

*/
?>
<?php get_header();?>

<section class="page-wrap">
<div class="container">
    <?php $hero = get_field('form');?>
<div class="container1">
       
       <h1><?php echo $hero['contact_us'];?></h1>
       <div class="map">
      <div class="form"> <?php echo do_shortcode('[contact-form-7 id="19" title="Contact form 1"]') ?>
       </div>

<!--map start-->
            <div class="modal-content_map">
               
            <div id='map'></div>
            </div>
       </div>
        <!--map end-->
</div></div>
</section>

<?php get_footer();?>