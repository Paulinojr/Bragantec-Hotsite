<?php   /*Template Name: edicoesAnteriores*/ get_header(); ?>
<section style="margin-bottom: 10px; margin-top: 100px;">
<div class="main">

  <div id="myBtnContainer">
    <button class="btn active" onclick="filterSelection('all')"> Todas as fotos </button>
    <?php
      $tags = get_terms(array(
        'taxonomy' => 'tag'
      ));

      foreach($tags as $single_tag):
    ?>
      <button class="btn" onclick="filterSelection('<?php echo $single_tag->name; ?>')"> <?php echo $single_tag->name; ?> </button>
    <?php endforeach; ?>
  </div>

    <?php
      $args = array(
        'post_type' => 'edicoesAnteriores'
      );
      $the_query = new WP_Query( $args );
    ?>

  <!-- Portfolio Gallery Grid -->
  <div class="galeria row">
    <?php if ( $the_query->have_posts() ) : ?>
    <?php while ( $the_query->have_posts() ) : $the_query->the_post();

      $post_id = get_the_ID();

      $post_tags = get_the_terms($post_id, 'tag');

      foreach($post_tags as $tags){
        $tag .= " ". $tags->name . " ";
      }

    ?>
      <div class="coluna <?php echo $tag ?> one-third column">
        <div class="divImEdicoes">
          <div class="tamImagens">
            <a class="fancy" rel="edicoes" href="<?php echo get_the_post_thumbnail_url(); ?>">
              <div style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)" alt="bragantec <?php echo get_the_tags(); ?>" class="edicoesImagem"> </div>
            </a>
          </div>
          <h4><?php the_title(); ?></h4>
        </div>
      </div>
      <?php $tag = " "; ?>

    <?php endwhile; ?>
    <?php endif; ?>
</div>

  <!-- END GRID -->


<!-- END MAIN -->
</div>
</section>


<script>
   filterSelection("all");
   function filterSelection(c) {
     var x, i;
     x = document.getElementsByClassName("coluna");
     if (c == "all") c = "";
     for (i = 0; i < x.length; i++) {
       RemoveClass(x[i], "show");
       if (x[i].className.indexOf(c) > -1) AddClass(x[i], "show");
     }
   }

   function AddClass(element, name) {
     var i, arr1, arr2;
     arr1 = element.className.split(" ");
     arr2 = name.split(" ");
     for (i = 0; i < arr2.length; i++) {
       if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
     }
   }

   function RemoveClass(element, name) {
     var i, arr1, arr2;
     arr1 = element.className.split(" ");
     arr2 = name.split(" ");
     for (i = 0; i < arr2.length; i++) {
       while (arr1.indexOf(arr2[i]) > -1) {
         arr1.splice(arr1.indexOf(arr2[i]), 1);
       }
     }
     element.className = arr1.join(" ");
   }


   // Add active class to the current button (highlight it)
   var btnContainer = document.getElementById("myBtnContainer");
   var btns = btnContainer.getElementsByClassName("btn");
   for (var i = 0; i < btns.length; i++) {
     btns[i].addEventListener("click", function(){
       var current = document.getElementsByClassName("active");
       current[0].className = current[0].className.replace(" active", "");
       this.className += " active";
     });
   }
</script>

<?php get_footer(); ?>
