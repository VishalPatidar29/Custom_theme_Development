<?php

// echo get_template_directory_uri();
// die();
// bloginfo('template_directory');
 get_header();

?>

<div class="w3-container" style="padding:50px 16px" id="about">
<?php 
while(have_posts()){


  the_post(); 
?>
<div class="w3-container" style="padding:0px 16px">
    <div class="leftcolumn">
       <div class="card">
         <h2 ><?php the_title(); ?></h2>
         <h5><?php echo get_the_date(); ?></h5>
          <h2 ><?php  the_post_thumbnail(array(600,1000)); ?></h2>
          <p><?php the_excerpt(); ?></p>
          <a href="<?php the_permalink(); ?>"><button type="button" class="btn">Read More</button></a>
    </div>
    </div>

      <?php  get_sidebar(); ?>
    </div>
    
    <?php  } ?>

<?php echo wp_pagenavi(); ?>

    </div>
 



<?php

get_footer();

?>
