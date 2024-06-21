<div class="especialidades-container">
  <h2 class="especialidades-titulo">Especialidades</h2>
  <div class="col-xs-12 especialidades">
    <?php $especialidade = new WP_Query( array( 'post_type'=>'especialidade','orderby' => 'date','order' => 'ASC', 'posts_per_page'=>'500' ) ); ?>
    <?php if( $especialidade->have_posts() ) : while( $especialidade->have_posts() ) : $especialidade->the_post(); ?>
    <!-- especialidade -->
    <div class="col-xs-6 col-sm-4 col-md-2 especialidade text-center" data-mh="especialidade">
      <a href="<?php echo esc_url( the_permalink() ); ?>" class="" title="<?php the_title(); ?>"></a>
      <!-- ICONE DO SERVICO -->
      <?php if( get_field('especialidade_icone') ) { ?>          
        <img src="<?php the_field('especialidade_icone'); ?>" alt="<?php the_title(); ?>" class="img-responsive">
      <?php } else { ?>
      <div class="especialidade-icone" style="min-height:55px;text-align:center;padding:15px 0; color:#cecece;border:solid 1px #cecece;border-radius:5px;"><i class="fa fa-spinner fa-pulse fa-fw"></i><br><small style="font-family:'Roboto',sans-serif;font-size:10px;line-height:1px!important;">sem ícone</small></div>
      <?php } ?>
      <!-- TITULO DO SERVICO -->
      <h3 class="especialidade-titulo">
        <?php the_title(); ?>
      </h3>
    </div>
    <?php endwhile; endif; ?>
  </div>
</div>