<?php get_header(); ?>

    <header>
      <!-- Just an image -->
      <nav class="navbar justify-content-center">
        <a class="navbar-brand" href="#">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/marca/logo.png" width="350" height="70" alt="">
        </a>
      </nav>

      <!-- Full Page Intro -->
      <div class="view jarallax" data-jarallax='{"speed": 0.2}' style="color: white; background-image: url('<?php echo get_template_directory_uri();?>/assets/img/sitio/pizza.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
        <!-- Mask & flexbox options-->
        <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
          <!-- Content -->
          <div class="container">
            <!--Grid row-->
            <div class="row">
              <!--Grid column-->
              <div class="col-md-12 mb-4 white-text text-center">
                <h1 class="h1-reponsive white-text text-uppercase font-weight-bold mb-0 pt-md-5 pt-5 wow fadeInDown"
                  data-wow-delay="0.3s"><strong>La verdadera comida Italiana</strong></h1>
                <hr class="hr-light my-4 wow fadeInDown" data-wow-delay="0.4s">
                <h5 class="text-uppercase mb-4 white-text wow fadeInDown" data-wow-delay="0.4s"><strong>Te invitamos a disfrutar de nuestra cocina.</strong></h5>
                  <button type="button" class="btn btn-outline-light"><a href="#carta" class="inicio">Carta</a></button>
                  <button type="button" class="btn btn-outline-light"><a href="#reserva" class="inicio">Reservaciones</a></button>
              </div>
              <!--Grid column-->
            </div>
            <!--Grid row-->
          </div>
          <!-- Content -->
        </div>
        <!-- Mask & flexbox options-->
      </div>
      <!-- Full Page Intro -->
    </header>
    <!-- Main navigation -->

    <div class="container carta">
      <div class="row">
        <div class="col-md-4 offset-md-4">
          <h1 class="carta-titulo"><?php echo get_field('titulo_de_la_carta'); ?></h1>
        </div>
      </div>
    </div>

    <?php if( have_rows('antipastos') ): ?>
    <div class="jumbotron antipastos">
      <h1>Antipastos</h1>
      <div class="row">
        <?php while( have_rows('antipastos') ): the_row();

    		// vars
        $img_antipastos = get_sub_field('imagen_de_antipasto');
    		$title_antipastos = get_sub_field('nombre_del_antipasto');
    		$content_antipastos = get_sub_field('descripcion_del_antipasto');
    		$price_antipastos = get_sub_field('precio_del_antipasto');

    		?>
        <div class="card">
          <img src="<?php echo $img_antipastos['url']; ?>" class="card-img-top" alt="">
          <div class="card-body">
            <h5 class="card-title"><?php echo $title_antipastos; ?></h5>
            <p class="card-text"><?php echo $content_antipastos; ?></p>
            <p class="card-text"><small class="text-muted"><?php echo $price_antipastos; ?></small></p>
          </div>
        </div>
        <?php endwhile; ?>
      </div>
    </div>
    <?php endif; ?>

    <?php if( have_rows('ensaladas_y_sopas') ): ?>
    <div class="jumbotron ensaladas-sopas">
      <h1>Ensaladas & Sopas</h1>
      <div class="row">
        <?php while( have_rows('ensaladas_y_sopas') ): the_row();

        // vars
        $img_ensaladas_y_sopas = get_sub_field('imagen_de_ensalada_o_sopa');
    		$title_ensaladas_y_sopas = get_sub_field('nombre_de_ensalada_o_sopa');
    		$content_ensaladas_y_sopas = get_sub_field('descripcion_de_ensalada_o_sopa');
    		$price_ensaladas_y_sopas = get_sub_field('precio_de_ensalada_o_sopa');

    		?>
        <div class="card">
          <img src="<?php echo $img_ensaladas_y_sopas['url']; ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?php echo $title_ensaladas_y_sopas; ?></h5>
            <p class="card-text"><?php echo $content_ensaladas_y_sopas; ?></p>
            <p class="card-text"><small class="text-muted"><?php echo $price_ensaladas_y_sopas; ?></small></p>
          </div>
        </div>
        <?php endwhile; ?>
      </div>
    </div>
    <?php endif; ?>

    <?php if( have_rows('pizzas_tradicionales') ): ?>
    <div class="jumbotron pizza-tradicional">
      <h1>Pizzas Tradicional</h1>
      <div class="row">
        <?php while( have_rows('pizzas_tradicionales') ): the_row();

        // vars
        $img_pizzas_tradicionales = get_sub_field('imagen_de_la_pizza_tradicional');
    		$title_pizzas_tradicionales = get_sub_field('nombre_de_la_pizza_tradicional');
    		$content_pizzas_tradicionales = get_sub_field('descripcion_de_la_pizza_tradicional');
    		$price_pizzas_tradicionales = get_sub_field('precio_de_la_pizza_tradicional');

    		?>
        <div class="card">
          <img src="<?php echo $img_pizzas_tradicionales['url']; ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?php echo $title_pizzas_tradicionales; ?></h5>
            <p class="card-text"><?php echo $content_pizzas_tradicionales; ?></p>
            <p class="card-text"><small class="text-muted"><?php echo $price_pizzas_tradicionales; ?></small></p>
          </div>
        </div>
        <?php endwhile; ?>
      </div>
    </div>
    <?php endif; ?>

    <?php if( have_rows('pizzas') ): ?>
    <div class="jumbotron pizzas">
      <h1>Pizzas</h1>
      <div class="row">
        <?php while( have_rows('pizzas') ): the_row();

        // vars
        $img_pizzas = get_sub_field('imagen_de_la_pizza');
    		$title_pizzas = get_sub_field('nombre_de_la_pizza');
    		$content_pizzas = get_sub_field('descripcion_de_la_pizza');
    		$price_pizzas = get_sub_field('precio_de_la_pizza');

    		?>
        <div class="card">
          <img src="<?php echo $img_pizzas['url']; ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?php echo $title_pizzas; ?></h5>
            <p class="card-text"><?php echo $content_pizzas; ?></p>
            <p class="card-text"><small class="text-muted"><?php echo $price_pizzas; ?></small></p>
          </div>
        </div>
        <?php endwhile; ?>
      </div>
    </div>
    <?php endif; ?>

    <?php if( have_rows('postres') ): ?>
    <div class="jumbotron postres">
      <h1>Postres</h1>
      <div class="row">
        <?php while( have_rows('postres') ): the_row();

        // vars
        $img_postres = get_sub_field('imagen_del_postre');
    		$title_postres = get_sub_field('nombre_del_postre');
    		$content_postres = get_sub_field('descripcion_del_postre');
    		$price_postres = get_sub_field('precio_del_postre');

    		?>
        <div class="card">
          <img src="<?php echo $img_postres['url']; ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?php echo $title_postres; ?></h5>
            <p class="card-text"><?php echo $content_postres; ?></p>
            <p class="card-text"><small class="text-muted"><?php echo $price_postres; ?></small></p>
          </div>
        </div>
        <?php endwhile; ?>
      </div>
    </div>
    <?php endif; ?>

    <?php if( have_rows('infusiones_y_bebidas') ): ?>
    <div class="jumbotron infusiones-bebidas">
      <h1>Infusiones & Bebidas</h1>
      <div class="row">
        <?php while( have_rows('infusiones_y_bebidas') ): the_row();

        // vars
        $img_infusiones_y_bebidas = get_sub_field('imagen_de_la_infusion_o_bebida');
        $title_infusiones_y_bebidas = get_sub_field('nombre_de_la_infusion_o_bebida');
        $price_infusiones_y_bebidas = get_sub_field('precio_de_la_infusion_o_bebida');

        ?>
        <div class="card">
          <img src="<?php echo $img_infusiones_y_bebidas['url']; ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?php echo $title_infusiones_y_bebidas; ?></h5>
            <p class="card-text"><small class="text-muted"><?php echo $price_infusiones_y_bebidas; ?></small></p>
          </div>
        </div>
        <?php endwhile; ?>
      </div>
    </div>
    <?php endif; ?>

    <div class="container">
      <div class="row rrss_direccion">
        <div class="col-md-4 col-sm-4 col-xs-4  rrss_direccion-separacion">
          <h2>Redes Sociales</h2>
          <ul>
            <li><a href="#"><i class="fab fa-facebook fa-lg"></i>  /ilfontidimodena</a></li>
            <li><a href="#"><i class="fab fa-instagram fa-lg"></i>  @ilfontidimodena</a></li>
            <li><a href="#"><i class="fab fa-twitter-square fa-lg"></i>  @ilfontidimodena</a></li>
          </ul>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-4 rrss_direccion-separacion">
          <h2>Dirección</h2>
          <p>Dirección: Av. Colón 161, Providencia <br> Teléfono: +56 2 2345 4653</p>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-4">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3330.2408083790033!2d-70.56362048484563!3d-33.41696568078355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662cefaab864c33%3A0xe0f0903e7a8e6fd4!2sAv.+Cristobal+Colon%2C+Las+Condes%2C+Regi%C3%B3n+Metropolitana!5e0!3m2!1ses!2scl!4v1552858586350" width="300" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>
    </div>

    <div class="jumbotron reserva" style="color: white; background-image: url('<?php echo get_template_directory_uri();?>/assets/img/sitio/mesas.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <?php echo do_shortcode("[booking nummonths=2]"); ?>
          </div>
        </div>
      </div>
    </div>

<?php get_footer(); ?>
