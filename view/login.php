

<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-4">
        <form class=" p-4 fondo_formulario">
          <div class="container">
            <div class="row mt-4">
              <div class="col-lg-12 text-center">
              <img src="raw/img/cruz.png" id="icon" alt="User Icon"/>
                <h5>Iniciar Seción<h5>
              </div>
            </div>
            <hr class="linea">
            <div class="row">
              <div class="col-lg-12">
                   <div class="form-group">
                        <label for="usuario"><i class="fas fa-user-alt mr-2"></i>Usuario</label>
                        <input type="text" class="form-control form-control-sm rounded-pill" id="usuario" placeholder="Ingrese usuario">
                   </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                  <div class="form-group">
                      <label for="contrasenia"><i class="fas fa-lock mr-2"></i>Contraseña</label>
                      <input type="password" class="form-control form-control-sm rounded-pill" id="contrasenia" placeholder="Ingrese contraseña">
                  </div>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-lg-12 text-center">
              <a href="principal" class="btn btn-primary"><i class="fas fa-user-alt mr-2"></i>Entrar</a>  
              </div>
            </div>
            <div class="row mt-4">
                        <div class="col-lg-12 text-right text-muted">
                          <a href="registro" class="links">¿No tienes cuenta?</a>
                        </div>
                      </div>
            <div class="row mt-3">
            </div>
          </div>
        </form>
    </div>
  </div>
</div>
<script>
  $(document).ready(function(){
  //? funcion para que al dar clik en el boton  lea los datos
  $('#boton_ingresar').click(function(){
      if($('#usuario').val()==''){
          Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'No. Empleado vacio',
          })
      }else{
          if($('#contrasenia').val()==''){
              Swal.fire({
                  icon: 'error',
                  title: 'Oops...',
                  text: 'Contraseña;a vacio',
              })
          }else{
              //? se leen los datos para inicar sesion
              let usuario= $('#usuario').val()
              let contrasenia=$('#contrasenia').val()
              if(usuario=='1234' && contrasenia=='12345678'){
                  //? redirige a otra (url) vista
                  //! prguntar como hacer para regresar al login y no volver a entrar
                  //! hasta colocar los datos
                  window.location.href ='view/principal.php'
              } else if(usuario=='12345' && contrasenia=='12345678'){
                  window.location.href ='view/principal.php'
              }
          }
      }





       
  })

  
  
})
</script>
