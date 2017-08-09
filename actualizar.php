<?php

    require_once __DIR__.'/common/user/user.php';
    require_once __DIR__.'/common/session/session.php';
    require_once __DIR__.'/common/articulo/articulo.php';
//    }',CABECERA='{}',PORTADA= '{',CONTENIDO='{}' WHERE ID_NOTICIA='{}'"
      $user = session::currentUser();
      if($user!=null) {
          if ($user->validateAdminPermission() || $user->validateEditPermission()) {
              $articulo = new articulo($_POST['article']);
              $articulo->setTitulo($_POST['titulo']);
              $articulo->setAutor($_POST['autor']);
              $articulo->setCargo($_POST['cargo']);
              $articulo->setCabecera($_POST['cabecera']);
              $articulo->setPortada($_POST['portada']);
              $articulo->setContenido($_POST['text']);
              $articulo->update();
              header("Location: index.php");
              die();
          }
      }
