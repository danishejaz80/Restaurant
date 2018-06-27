<?php

namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\Menu;
use App\abeautifulsite\SimpleImage;

class MenuController extends Controller{

public function viewMenu($request, $response){

  if(!$this->auth->check()){
    return $response->withRedirect($this->router->pathFor('home'));
  }
  $menu = Menu::all();
  return $this->view->render($response, 'menu.php', array('menus' => $menu));
}

public function addMenu($request, $response){
  if(!$this->auth->check()){
    return $response->withRedirect($this->router->pathFor('home'));
  }

  if($request->isGet()){
    return $this->view->render($response, 'addmenu.php');
	}

  if($request->isPost()){
      $menu_name = $request->getParam('menu');
      $status = $request->getParam('status');
      $menu_image = $request->getUploadedFiles();
      if(empty($menu_image['fileToUpload'])){
        throw new Exception('Expected a new file');
      }
      $mUploadedFile = $menu_image['fileToUpload'];
      if($mUploadedFile->getError() === UPLOAD_ERR_OK){
        $filename = $mUploadedFile->getClientFileName();
        $mUploadedFile->moveTo("images/".$filename);

        //insert this information into the database.
        $filePath = "images/".$filename;

        $menu = new Menu(array(
          'menu_name' => $menu_name,
          'menu_image' =>  $filePath,
          'status' => $status
        ));
        $menu->save();
        return $this->view->render($response, 'addmenu.php', array('message' => 'Successfully uploaded to database'));
      }else{
        return $this->view->render($response, 'addmenu.php', array('message' => 'Image upload failed with an error'));
      }
  }
}

public function editMenu($request, $response, $args){

  if(!$this->auth->check()){
      return $response->withRedirect($this->router->pathFor('home'));
  }

  $id = $args['id'];
  $menu = Menu::where('menu_id', $id)->first();

  if($request->isGet()){
		return $this->view->render($response, 'editmenu.php', array('category' => $menu));
	}

  if($request->isPost()){
    $menu_name = $request->getParam('menu');
    $status = $request->getParam('status');
    $image_src=$request->getParam('image_src');
    $filePath=$image_src;

    $menu_image = $request->getUploadedFiles();
    if(empty($menu_image['fileToUpload'])){
      //throw new Exception('Expected a new file');
      Menu::where('menu_id', $id)->update(['menu_name' => $menu_name, 'menu_image' => $filePath, 'status' => $status]);
      return $this->view->render($response, 'editmenu.php', array('message' => 'Successfully uploaded to database'));
    }

    $mUploadedFile = $menu_image['fileToUpload'];

    if($mUploadedFile->getError() === UPLOAD_ERR_OK){
      $filename = $mUploadedFile->getClientFileName();
      $mUploadedFile->moveTo("images/".$filename);

      //insert this information into the database.
      $filePath = "images/".$filename;

      Menu::where('menu_id', $id)->update(['menu_name' => $menu_name, 'menu_image' => $filePath, 'status' => $status]);
      return $this->view->render($response, 'editmenu.php', array('message' => 'Successfully uploaded to database'));
    }else{
      return $this->view->render($response, 'editmenu.php', array('message' => 'Image upload failed with an error'));
    }
  }
 }

 public function deleteMenu($request, $response, $args){
   if(!$this->auth->check()){
    return $response->withRedirect($this->router->pathFor('home'));
  }

  $id = $args['id'];
  $deleteMenu = Menu::where('menu_id', $id)->first();

  if($request->isGet()){
    return $this->view->render($response, 'deletemenu.php', array('menu' => $deleteMenu));
  }

  if($request->isPost()){
    Menu::where('menu_id', $id)->delete();
    return $this->view->render($response, 'deletemenu.php', array('deleted' => '1'));
  }

 }
 
}
 ?>
