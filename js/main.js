$(document).ready(function(){
        $(document).delegate
        (
                '.btn_accion','click',function(e)
                {
                        e.stopPropagation();
                        var elem=$(this);
                        var data=$(this).data('accion');
                        eval(data.funcion+'('+JSON.stringify(data)+');');
                }
        );

});


// FUNCIONES NAVEGADOR PRINCIPAL
    function abrir_menu()
    {
            $('#nav_principal .abrir').fadeOut();
            $('#nav_principal .cerrar').fadeIn();
            $('#nav_principal').animate({'height':'100vh'},300,function(){
                    $('#nav_principal ul').animate({'width':'100vw'});
            });
    }
    function cerrar_menu()
    {
            $('#nav_principal .abrir').fadeIn();
            $('#nav_principal .cerrar').fadeOut();
            $('#nav_principal ul').animate({'width':'0vw'},300,function(){

                    $('#nav_principal').animate({'height':'70px'});
            });
    }
// FIN FUNCIONES NAVEGADOR PRINCIPAL

// FUNCIONES HEADER Y NAVEGADOR PRINCIPALES
{
    $(window).scroll(function(){
      var scroll=$(window).scrollTop();
      if($(window).width()<=600)
      {
          // if(scroll>=100)
          // {
          //   $('#logo').fadeOut('slow');
          //   $('#logoMovil').fadeIn('slow');
          //   $('#menuPrincipal').css({'background':'rgba(243,193,97,0.9)','padding-left':'54vw'});
          // }
          // else
          // {
          //   $('#logo').fadeIn('slow');
          //   $('#logoMovil').fadeOut('slow');
          //     $('#menuPrincipal').css({'background':'rgba(0,0,0,.6)','padding-left':'4vw'});
          // }
      }
      else
      {
        if(scroll>=100)
        {
          $('#nav_principal').css({'background':'rgba(0,0,0,0.4)','padding':'0vw 0 1vw 0','color':'#fff'});
          $('#nav_principal').find('.logo_principal').css({'width':'40px','top':'1vw'});
          $('#nav_principal li a').css({'color':'#fff'});
          // $('#nav_principal').css({'top':'2vw','right':'3vw'});
        }
        else
        {
          $('#nav_principal').css({'background':'rgba(255,225,255,0)','padding':'2vw 0 3vw 0','color':'#54524f'});
          $('#nav_principal').find('.logo_principal').css({'width':'70px','top':'2vw'});
          $('#nav_principal li a').css({'color':'#7f7770'});
        }
      }

    });
}
// FIN FUNCIONES HEADER Y NAVEGADOR PRINCIPALES


// FUNCIONES POPUP GENERAL

// data requerida :
// contenido->ruta completa al archivo que se cargara en el popup
// ancho->ancho con medida y unidad que se aplicara al popup
// top->margen superior del popup con relacion a la pantalla

function abrir_popup_general(data)
{
        if($('#pu1_popup')[0])
        {
          $('#pu1_popup').remove();
        }
        $.ajax({
          type:'POST',
          data:data,
          url:www_enlace+'constructores/popup_general.php',
          success:function(html){
                  $('body').append(html);
                  $('#pu1_popup').fadeIn(300,function()
                  {
                          $.ajax({
                                  type:'POST',
                                  data:data,
                                  url:www_enlace+data.contenido,
                                  success:function(html)
                                  {
                                          $('#pu1_popup .contenedor .contenido').html(html);
                                          $('#pu1_popup .contenedor').css({'width':data.ancho,'margin-top':data.top});
                                          $('#pu1_popup .contenedor').fadeIn(500);
                                  }
                          });
                  });
          }
        });

}

function cerrar_popup_general()
{
        $('#pu1_popup .contenedor').fadeOut(500,function()
        {
                $('#pu1_popup .contenedor').html('');
                $('#pu1_popup').fadeOut(300,function(){
                  $('#pu1_popup').remove()
                });
        });
}


// FIN FUNCIONES POPUP GENERAL
