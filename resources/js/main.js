var url = "http://localhost/evaluacion-laravel/evaluacion/public/";

$('#buscador').submit(function(e){
  
    $(this).attr('action',url+'/gente/'+$('#search').val());
    
});