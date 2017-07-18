$(document).ready(function () {
  $('.ver').on('click', function(){
    $(this).prev('.maisFotos').slideDown();
  });
  $('.mais').on('click', function(){
    $('#menuMobile').slideToggle();
  });
  $('#anexar').on('click', function(){
    $('#anexo').trigger('click');
  });
});
