<?php require_once( 'templates/header.php' ); ?>

    <!-- MAIN CONTENT -->
    <article class="row">
      
      <div class="row inner">
        <!-- CONTACT IMAGE -->
        <?php $html->img( 'img/contact-img.jpg', 'Portfolio Header Image', array( 'class' => 'contact-img show-for-small pad-top' ) ); ?>
        
        <!-- CONTACT FORM -->
        <div class="contact-form columns small-12 large-5 pad-left">
          
            <form action="" method="post">
              
              <p>
                <label for="name">Name</label>
                <input type="text" id="name" name>
                <?php // On Error
                // <small class="error"></small> ?>
              </p>
              <p>
                <label for="email">E-Mail</label>
                <input type="text" id="email" name="email">
                <?php // On Error
                // <small class="error"></small> ?>
              </p>
              <p>
                <label for="message">Message</label>
                <textarea name="message" id="message" cols="30" rows="10" row="6"></textarea>
                <?php // On Error
                // <small class="error"></small> ?>
              </p>
              <p class="right">
                <button type="submit" name="submit">SEND</button>
              </p>
            </form>
              
        </div><!-- .contact-form .columns .small-12 .large-8 .test -->

        <!-- SIDEBAR -->
        <aside class="contact-sidebar columns small-12 large-6 large-offset-1 pad-right">
          
          <!-- CONTACT IMAGE -->
          <?php $html->img( 'img/contact-img.jpg', 'Portfolio Header Image', array( 'class' => 'contact-img hide-for-small right' ) ); ?>
          
          <p class="text-justify">
            If you wish to contact me then you're in the right place. 
            I’ll provide you with any information, quotation and advice you need on graphic design services. 
            My services cover web, print and publishing graphics, branding imagery and corporate Identity solutions. 
            I can work for individuals, small businesses and big companies as part of bigger team as well. 
            I will start from the very beginning, developing an idea, 
            finding the solution to present your ideas in the best possible way and finally, 
            produce unique design, helping you to communicate your ideas and values to grow your business.
          </p>
        </aside><!-- .columns.small-12.large-4 -->
      </div><!-- .row.inner -->
      
      <!-- CONTACT FOOTER -->
      <div class="contact-footer column small-12 large-12 pad-right">
        <p class="right">
          Branding, Website Graphics, Newsletters, Brochures.
        </p>
      </div><!-- .contact-footer.column.small-12.large-12 -->
      
    </article>

<?php require_once( 'templates/footer.php' ); ?>