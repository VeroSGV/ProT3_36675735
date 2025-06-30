
    <div class="bg-white p-5 rounded-3 text-secondary">
      <section>
        <div class="d-flex justify-content-center">
          <img src="./assets/img/login_imagen.png" style="height: 7rem" />
        </div>
        <div class="text-center">
          <h2>Iniciar Sesion</h2>
        </div>
        <!--Mensaje de error-->
            <?php if(session()->getFlashdata('msg')):?>
                        <div class="alert alert-warnin">
                                <?=session()->getFlashdata('msg')?>
                        </div>
            <?php endif;?>            
        <div>
          <form method="post" action="<?php echo base_url('/enviarlogin') ?>">
            <p>
              <input type="text" placeholder="Usuario" class="form-control" />
            </p>
            <p>
              <input
                type="email"
                placeholder="Contraseña"
                class="form-control"
              />
            </p>
            <p>
              <input type="submit" value="Enviar" class="btn btn-info w-100" />
            </p>
          </form>
        </div>
      </section>
    </div>
        

          