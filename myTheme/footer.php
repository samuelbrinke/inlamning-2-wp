  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  
  <footer class="footer container-fluid">
    <div class="footer-content row">
      <div class="col-12">
        <h3>Contact me!</h3>
        <span>mysite@mail.com</span>
      </div>
    </div>
    <p class="footer-copyright">&copy;
      <?php
        echo date_i18n(
          /* translators: Copyright date format, see https://www.php.net/manual/datetime.format.php */
          _x( 'Y', 'copyright date format', 'myTheme' )
        );
      ?>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
    </p>
  </footer>
</body>
</html>