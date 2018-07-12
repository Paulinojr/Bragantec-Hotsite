<?php   /*Template Name: edicoesAnteriores*/ get_header(); ?>
<section style="margin-bottom: 10px; margin-top: 100px;">
<div class="main">

  <div id="myBtnContainer">
    <button class="btn active" onclick="filterSelection('all')"> Todas as fotos </button>
    <button class="btn" onclick="filterSelection('2011')"> 2011 </button>
    <button class="btn" onclick="filterSelection('2015')"> 2015</button>
    <button class="btn" onclick="filterSelection('2016')"> 2016</button>
    <button class="btn" onclick="filterSelection('2017')"> 2017</button>
  </div>

  <!-- Portfolio Gallery Grid -->
  <div class="galeria row">
    <div class="coluna 2011 one-third column">
      <div class="divImEdicoes">
        <div class="tamImagens">
          <a class="fancy" rel="edicoes" href="<?php echo get_stylesheet_directory_uri(); ?>/img/edicoesAnteriores/2011-bragantec.jpg">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/edicoesAnteriores/2011-bragantec.jpg" alt="bragantec 2011" style="width:100%;">
          </a>
        </div>
        <h4>Primeira Bragantec</h4>
      </div>
    </div>
    <div class="coluna 2017 one-third column">
      <div class="divImEdicoes">
        <div class="tamImagens">
          <a class="fancy" rel="edicoes" href="<?php echo get_stylesheet_directory_uri(); ?>/img/edicoesAnteriores/2017-bragantec.jpg">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/edicoesAnteriores/2017-bragantec.jpg" alt="Feira lotada em 2017" style="width:100%">
          </a>
        </div>
        <h4>Feira lotada</h4>
      </div>
    </div>

    <div class="coluna 2016 one-third column">
      <div class="divImEdicoes">
        <div class="tamImagens">
          <a class="fancy" rel="edicoes" href="<?php echo get_stylesheet_directory_uri(); ?>/img/edicoesAnteriores/bolero2016.jpg">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/edicoesAnteriores/bolero2016.jpg" alt="Abertura em 2016" style="width:100%">
          </a>
        </div>
        <h4>Abertura</h4>
      </div>
    </div>


    <div class="coluna 2016 one-third column" style="margin-left: 0px;">
      <div class="divImEdicoes">
        <div class="tamImagens">
          <a class="fancy" rel="edicoes" href="<?php echo get_stylesheet_directory_uri(); ?>/img/edicoesAnteriores/bragantc2016-Salto.jpg">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/edicoesAnteriores/bragantc2016-Salto.jpg" alt="Estudantes de Salto em 2016" style="width:100%">
          </a>
        </div>
        <h4>Estudantes de Salto</h4>
      </div>
    </div>
    <div class="coluna 2015 one-third column">
      <div class="divImEdicoes">
        <div class="tamImagens">
          <a class="fancy" rel="edicoes" href="<?php echo get_stylesheet_directory_uri(); ?>/img/edicoesAnteriores/2015-bragantec.jpg">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/edicoesAnteriores/2015-bragantec.jpg" alt="bragantec 2015" style="width:100%">
          </a>
        </div>
        <h4>Estantes</h4>
      </div>
    </div>


  <!-- END GRID -->
</div>

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
