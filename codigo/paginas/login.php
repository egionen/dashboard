<?php
session_start();
include_once 'cabecalho.php';

 ?>
<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <title>Bem Vindo</title>
  </head>
  <body>
    <div class="layout mdl-layout mdl-js-layout">
    <header class="mdl-layout__header mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">DashBoard</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="mdl-grid">
        <div class="mdl-cell mdl-cell--5-col">
        </div>
        <div class="mdl-cell mdl-cell--6-col">

          <div class="mdl-cell mdl-cell--6-col mdl-cell--1-offset">

            <h4>Login</h4>
            <br>

          </div>


            <form action="../bd/crudlogin.php" method="post" name="entrar">
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" id="user" name="user">
                <label class="mdl-textfield__label" for="user">Usuario</label>
              </div>
              <div class="mdl-cell mdl-cell--5-col">
              </div>
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" id="pass" name="pass">
                <label class="mdl-textfield__label" for="pass">Senha</label>
              </div>

              <div class="mdl-cell mdl-cell--6-col mdl-cell--1-offset">
              <input type="submit" value="Entrar" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" name="entrar" >
              </div>

</form>



        </div>
      </div>



    </main>
  </div>

  </body>
</html>