  <footer>
    <div class="container">
      <div class="footer__top" style="background-image:url('<?=get_template_directory_uri();?>/img/jthecat_bg.png')">
        <div id="footerMenu">
          <?php wp_nav_menu( array( 'theme_location' => 'bottom' ) ); ?> 
        </div>
      </div>
      
      <div class="footer__bottom">
        <div class="footer__bottom__social">
          <ul class="footer__bottom__social__list">
            <li><a href="#" title=""><span class="fab fa-facebook-square"></span></a></li>
            <li><a href="#" title=""><span class="fab fa-viber"></span></a></li>
            <li><a href="#" title=""><span class="fab fa-instagram"></span></a></li>
            <li><a href="#" title=""><span class="fab fa-youtube"></span></a></li>
            <li><a href="#" title=""><span class="fab fa-pinterest-p"></span></a></li>
          </ul>
        </div>
        <div class="footer__bottom__copyright">
          Copyright &copy; <?=date("Y")?> &ndash; Minden jog fenntartva.
        </div>
        <div class="footer__bottom__jlogo">
          <a href="#">
            <img src="<?=get_template_directory_uri();?>/img/jthecat_logo.png" alt=""height="31">
          </a>
        </div>
      </div>
    </div>
  </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="<?= get_template_directory_uri() ?>/js/script.js"></script>
    <?php wp_footer(); ?>
  </body>
</html>