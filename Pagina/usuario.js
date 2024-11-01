var islogin = getCookieValue("login");
var idUser = getCookieValue("idUser");
var statuse = getCookieValue("statuse");
let user= getCookieValue("nombre");
let items= getCookieValue("items");
if(islogin=='true'){
    $('#user').html("Hola, "+user)
    $(".nosesion" ).css("display","none");
    $(".isSesion" ).css("display","contents");
    if(statuse=='admin'){
        $(".reservas" ).css("display","inline");
        console.log('entro login true')
    }else{
        $(".reservas" ).css("display","none");

        console.log('entro login false')
    }

    if(items > 0 ){
      $("#items").html(items)
      $( "#items" ).css("display","block");
    }else{
      $("#items").html(items)
      $( "#items" ).css("display","none");
    }
}else{
    $('#user').html("")
    $(".nosesion" ).css("display","inline");
    $(".isSesion" ).css("display","none");
    console.log('entro login false')
    $(".reservas" ).css("display","none");
}



$( "#cerrarSesion" ).click(function (){
    document.cookie = 'login=false';
   
    $('#user').html("")
    $(".nosesion" ).css("display","inline");
    $(".isSesion" ).css("display","none");
})
function getCookieValue(nombre) {
    var cookies = document.cookie.split(";"); // Divide la cadena de cookies en un array
    for (var i = 0; i < cookies.length; i++) {
        var cookie = cookies[i].trim(); // Elimina los espacios en blanco al principio y al final
        if (cookie.startsWith(nombre + "=")) {
            return cookie.substring(nombre.length + 1); // Retorna el valor de la cookie
        }
    }
    return null; // Si no se encuentra la cookie, retorna null
}

$( ".cancelar" ).click(function (){
    let id =$(this).data('id');
    let oper =$(this).data('oper');
    console.log ("entro");

    // Obten algunos valores de elementos en la página:
      url = "actualizaReserva.php";
   
    // Envía los datos usando post
    
    // Función Ajax para enviar una solicitud get
    $.ajax({
      type: "POST",
      url: url,
      data:{id:id,oper:oper},
      dataType:"json",
      success: function(respuesta){
        console.log ("refreh");
        
        location.reload()
      }
    });
})

$( ".carrito" ).click(function (){
    if(islogin=='true'){
    let id =$(this).data('id');


    console.log ("entro");

    // Obten algunos valores de elementos en la página:
      url = "carrito.php";
   
    // Envía los datos usando post
    
    // Función Ajax para enviar una solicitud get
    $.ajax({
      type: "POST",
      url: url,
      data:{id:id,idUser:idUser},
      dataType:"json",
      success: function(respuesta){
        console.log ("refreh");
        $( "#resultado"+id ).html('')
                //si la solicitud es hecha éxitosamente entonces la respuesta representa los datos
               data = JSON.parse(respuesta);   
               document.cookie = 'items='+data.items; 
              if(data.items > 0){
                $("#items").html(data.items)
                $( "#items" ).css("display","block");
              }else{
                $("#items").html(data.items)
                $( "#items" ).css("display","none");
              }


               $( "#resultado"+id ).empty().append( data.msj )
               $( "#resultado"+id ).css("display","block");
               
               setTimeout(function() {
                    $("#resultado"+id).fadeOut('fast');
                }, 2000);
      }
    });
  }else{
    alert("inicie sesion primero");
  }
})

////$( ".eliminarItem" ).click(function (){
 function eliminar(id,idusuario){
//  let id =$(this).data('id');
 // let oper =$(this).data('oper');
  console.log ("entro eliminar" ,id,idusuario);

  // Obten algunos valores de elementos en la página:
    url = "borrarItems.php";
 
  // Envía los datos usando post
  
  // Función Ajax para enviar una solicitud get
  $.ajax({
    type: "POST",
    url: url,
    data:{id:id,idusuario:idusuario},
    dataType:"json",
    success: function(respuesta){
      console.log ("refreh");
      
     location.reload()
    }
  });
}
//})
function limpiar(idusuario){
   // let oper =$(this).data('oper');
    console.log ("entro eliminar" ,idusuario);
  
    // Obten algunos valores de elementos en la página:
      url = "limpiarCarrito.php";
   
    // Envía los datos usando post
    
    // Función Ajax para enviar una solicitud get
    $.ajax({
      type: "POST",
      url: url,
      data:{idusuario:idusuario},
      dataType:"json",
      success: function(respuesta){
        console.log ("refreh");
        document.cookie = 'items=0';
        location.reload()
      }
    });
  }

  function finalizar(idusuario){
    // let oper =$(this).data('oper');
     console.log ("entro eliminar" ,idusuario);
   
     // Obten algunos valores de elementos en la página:
       url = "finalizarCompra.php";
    
     // Envía los datos usando post
     
     // Función Ajax para enviar una solicitud get
     $.ajax({
       type: "POST",
       url: url,
       data:{idusuario:idusuario},
       dataType:"json",
       success: function(respuesta){
         console.log ("refreh");
         document.cookie = 'items=0';
         location.reload()
       }
     });
   }