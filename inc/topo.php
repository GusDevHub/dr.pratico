<!-- topo -->
<header id="topo" class="col-md-12">
  <h1 class="oculto">Dr. Prático &mdash; Clínica Médica</h1>
  <div class="col-md-12 topo">
    <!-- logo -->
    <span class="col-xs-4 col-sm-4 col-md-5" id="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Ir para a p&aacute;gina inicial" class="logo">Dr. Prático &mdash; Clínica Médica</a></span>
    <!-- infos -->
    <div class="topo-infos desktop">
      <div class="col-sm-5 crm"><i class="fa fa-user-md" aria-hidden="true"></i><strong>Diretor Técnico:</strong> Dr. Alexandre Caiado Ferreira Pirez<br>CRM-GO 17981</div>
      <div class="col-sm-4 topo-endereco"><i class="fa fa-map-marker" aria-hidden="true"></i>Av. 4&ordf; Radial, 2032 - 1&ordm; andar<br>St.Pedro Ludovico, Goiânia - Goiás.</div>
      <div class="col-sm-3 topo-fones">
        <a href="tel:+556232463300" title="Telefone" class="topo-tel"><i class="fa fa-volume-control-phone" aria-hidden="true"></i>(62) 3246-3300</a><br>
        <a href="https://api.whatsapp.com/send?phone=5562999884404&text=Ol%C3%A1%20Estou%20vindo%20do%20site%20e%20desejo%20agendar%20uma%20consulta%20" target="_blank" title="WhatsApp" class="topo-whatsapp"><i class="fa fa-whatsapp" aria-hidden="true"></i>(62) 99988-4404</a>
      </div>
    </div>
  
  </div>
  <!-- chamada do menu mobile -->
  <a href="#navegacao" class="mobile fullscreen ic-menu"><span>Abrir Menu Mobile</span></a>
    <!-- navegacao menu -->
  <div class="navegacao" id="navegacao">
    <div class="menu-redes">
      <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'menu_class' => 'lista-menu' ) ); ?>
      <div class="topo-redes desktop">
        <a href="#" target="_blank" title="Dr. Prático no Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
        <a href="#" target="_blank" title="Dr. Prático no Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        <a href="#" target="_blank" title="Dr. Prático no Google+"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
        <a href="#" target="_blank" title="Dr. Prático no Pintrest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
        <a href="#" target="_blank" title="Dr. Prático no LinkedIn"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
        <?php get_search_form(); ?>
      </div>
    </div>     
  </div>
</header>