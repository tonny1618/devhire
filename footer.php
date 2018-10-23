  <footer class="container-fluid">
  <div class="row">
    <div class="col-md-5">
      <h2> Liens utiles </h2>
      <p><a href="#">Liens 1</a></p>
      <p><a href="#">Liens 2</a></p>
      <p><a href="#">Liens 1</a></p>
    </div>
  </div>
  <div class="row">
    <p class="text-center"> © Dev'Hire</p>
  </div>
    </footer>
<script>
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
});

$("#").click(function () {
  $("#nouvellediv").append('#blocexperience');
});

$("add").click(function(){
    $("p").append("<b>Appended text</b>");
});