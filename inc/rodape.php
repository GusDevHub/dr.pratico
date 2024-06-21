<!-- rodape -->
<footer id="rodape" class="col-md-12">  
  <div class="rodape">
    <!-- contatos -->
    <?php get_template_part( 'inc/rodape/contatos' ); ?>
    <!-- formulario -->
    <div class="col-xs-12 col-sm-7 col-md-7 rodape-form" id="contato"><?php echo do_shortcode('[contact-form-7 id="30" title="Contato"]'); ?></div>
  </div>
  <!-- botao subir para o topo --> 
  <?php get_template_part( 'inc/rodape/subir' ); ?>  
  </footer>
<!-- /rodape -->