<?php
 get_header();

 $title = get_field('title');
 $titleColor = get_field('title_color');
 $titleImg = get_field('title_image');
 $homeTextContent = get_field('home_text_content');
 $link = get_field('link');
 $linkText = get_field('link_text');
 $size = 'full';
?>
  <section>
    <div class="container text-center">
      <div class="row">
        <div class="col-12 position-relative">
          <?php if ($titleImg): ?>
            <img style="width: 100%;" src="<?php echo $titleImg; ?>" alt="">
          <?php endif; ?>

          <?php if($title):?>
          <h1 class="title <?php if($titleImg): echo "title-in-img";?><?php endif; ?>" style="color: <?php echo $titleColor; ?>;">
          <?php echo $title; ?>
          </h1>
          <?php endif; ?>
        </div>
        <div class="col-12">
          <?php if ($homeTextContent): ?>
            <p><?php echo $homeTextContent; ?></p>
          <?php endif; ?>
          <?php if ($link): ?>
            <a href="<?php echo $link; ?>"><?php echo $linkText ?></a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>
<?php
 get_footer();
?>