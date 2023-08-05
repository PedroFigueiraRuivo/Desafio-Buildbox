<footer id="main-footer" class="footer">
    <div class="footer__container container">
      <div class="footer__logo">
        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/imgs/Grupo 1.png" alt="Logo Play">
      </div>
      <p class="footer__copy">© 2020 — Play — Todos os direitos reservados.</p>
    </div>
  </footer>

  <script type="module" src="<?php echo get_stylesheet_directory_uri();?>/assets/js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
  <script>
    const listCategorys = document.querySelectorAll('.list-categorys-posts section');

    if (listCategorys.length) {
      listCategorys.forEach((categoryItem, index) => {

        const screenWidth = window.innerWidth;

        let bound, rewind;
        const lis = categoryItem.querySelectorAll('li');

        function ajustConfig(value, limit) {
          return value < limit ? [true, true] : [true, false];
        }

        if (screenWidth > 900) [bound, rewind] = ajustConfig(lis.length, 6);
        else if (screenWidth > 600 && screenWidth <= 900) [bound, rewind] = ajustConfig(lis.length, 3);
        else [bound, rewind] = ajustConfig(lis.length, 2);

        const parentSelector = `glide-${index}`;
        categoryItem.classList.add(parentSelector);

        if (typeof Glide !== 'undefined') {
          const glide = new Glide(`.${parentSelector} .glide`, {
            type: 'slider',
            perView: 5.5,
            bound,
            rewind,
            animationDuration: 200,
            gap: 20,
            perTouch: 5,
            breakpoints: {
              900: {
                perView: 3.3,
              },
              600: {
                perView: 2.2,
              },
            },
          });

          glide.mount();
        }
      });
    }
  </script> 

  <?php wp_footer();?>
</body>
</html>