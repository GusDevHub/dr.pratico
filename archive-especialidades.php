<?php
/* Template Name: Especialidades */
 get_header(); ?>

<div id="titulos" class="col-sm-12 col-md-12 col-lg-12 clearfix">
  <div class="col-sm-12 col-md-12 col-lg-12 titulos">
    <h2>Especialidades</h2>
  </div>
</div>

<div class="conteudos">
  <div class="col-sm-4 servicos-nav">
    <div class="mobile">
      <a href="#exibirEspecialidade" class="fullscreen btn-group"><span class="btn btn-default"><i class="fa fa-ellipsis-v" aria-hidden="true"></i></span><span class="btn btn-default">Ver Especialidades</span></a>
      <div id="exibirEspecialidade" class="well hidden">
        <?php listar_especialidades(); ?>
      </div>
    </div>

    <div class="desktop">
      <?php listar_especialidades(); ?>
    </div>
  </div>          
  <div class="col-sm-8 servico-conteudo">
     <?php the_content(); ?>
  </div>
</div>

<?php //include'inc/paginacao-navegacao.php' ?>

<script src="<?=get_template_directory_uri()?>/js/jquery-1.11.2.js"></script><!-- JS Modaal -->
<script src="<?=get_template_directory_uri()?>/js/modaal.js"></script>

<?php get_footer(); ?>

