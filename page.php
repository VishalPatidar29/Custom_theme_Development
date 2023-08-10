<?php
 get_header();
the_post();
?>

<div class="w3-container" style="padding:128px 16px" id="about">
  <h2 class="w3-center"><?php the_title(); ?></h2>

  
 <h2 class="w3-center"><?php  the_post_thumbnail(array(600,1000)); ?></h2>
 
  <div class="gallerys" >
<?php the_content(); ?>

</div>
</div>




<?php
 get_footer();

?>