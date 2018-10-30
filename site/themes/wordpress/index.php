    <?php get_header(); ?>
    <div class="container-fluid">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <menu class="menu-secundario">
                <ul>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">PROMOÇÕES</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">CASA</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">KIDS</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">MASCULINO</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">FEMININO</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">CAMPANHAS</a>
                    </li>
                </ul>
            </menu>
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="<?php bloginfo('template_directory'); ?>/banner01.png" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="<?php bloginfo('template_directory'); ?>/banner02.png" alt="Second slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <?php get_sidebar(); ?>
        
        <div class="row">
            <div class="offset-md-1 col-md-10 col-xs-12 imgs-dinamicas">
                <div class="row-img-main">
                    <img src="<?php bloginfo('template_directory'); ?>/img01.jpg">
                </div>
                <div class="row-img-1">
                    <img src="<?php bloginfo('template_directory'); ?>/img02.jpg">
                    <img src="<?php bloginfo('template_directory'); ?>/img03.jpg">
                    <br>

                    <img src="<?php bloginfo('template_directory'); ?>/img04.jpg">
                    <img src="<?php bloginfo('template_directory'); ?>/img05.jpg">
                </div>
            </div>
        </div>
		
		<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
		  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="post-header">
			   <div class="date"><?php the_time( 'M j y' ); ?></div>
			   <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
			   <div class="author"><?php the_author(); ?></div>
			</div><!--end post header-->
			<div class="entry clear">
			   <?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail(); ?>
			   <?php the_content(); ?>
			   <?php edit_post_link(); ?>
			   <?php wp_link_pages(); ?> </div>
			<!--end entry-->
			<div class="post-footer">
			   <div class="comments"><?php comments_popup_link( 'Leave a Comment', '1 Comment', '% Comments' ); ?></div>
			</div><!--end post footer-->
			</div><!--end post-->
		<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
			<div class="navigation index">
			   <div class="alignleft"><?php next_posts_link( 'Older Entries' ); ?></div>
			   <div class="alignright"><?php previous_posts_link( 'Newer Entries' ); ?></div>
			</div><!--end navigation-->
		<?php else : ?>
		<?php endif; ?>

		
        <div class="row maps">
            <div class="col-md-12">
                <div class="mascara_maps"></div>
                <div class="dados_mapa">
                    <div class="col-md-2 btn_achar_minha_localizacao_automaticamente">
                        <a href="#">
                            <img src="<?php bloginfo('template_directory'); ?>/btn-localizacao-por-endereco.jpg">
                        </a>
                    </div>
                    <div class="col-md-1 linha_separador_localizacao">
                        <img src="<?php bloginfo('template_directory'); ?>/linha-separador-localizacao.jpg">
                    </div>
                    <div class="col-md-5 busca_por_cep">
                        <label class="label_cep">DIGITE O CEP DE ONDE VOCÊ ESTÁ</label>
                        <div class="caixa_campo_cep">
                            <input type="text" name="cep" placeholder="CEP">
                            <button type="button" name="btn_buscar_cep">PROCURAR</button>
                        </div>
                    </div>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3643.0077936923904!2d-46.566084584672275!3d-24.066030086308032!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce20faa8fff8d1%3A0xc19255471ff841c3!2sJardim+Real%2C+Praia+Grande+-+State+of+S%C3%A3o+Paulo!5e0!3m2!1sen!2sbr!4v1540898001056"
                    width="100%" height="355" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
        <div class="row news_letter">
            <div class="offset-md-2 col-md-5 col-xs-12 news_letter">
                <form action="/news_letter" method="post">
                    <label class="news_letter">ASSINE A NEWSLETTER DO LOGO</label>
                    <br/>
                    <div class="caixa_campo">
                        <input type="email" name="email_newsletter" placeholder="Seu e-mail">
                        <button type="submit" name="btn_newsletter">ENVIAR</button>
                    </div>
                </form>
            </div>
            <div class="col-md-4 col-xs-12 redes_sociais">
                <span>SIGA LOJAS LOGO NAS REDES SOCIAIS</span>
                <br/>
                <ul>
                    <li>
                        <img src="<?php bloginfo('template_directory'); ?>/icon-facebook.jpg">
                    </li>
                    <li>
                        <img src="<?php bloginfo('template_directory'); ?>/icon-youtube.jpg">
                    </li>
                    <li>
                        <img src="<?php bloginfo('template_directory'); ?>/icon-instagram.jpg">
                    </li>
                </ul>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
    <?php get_footer(); ?>