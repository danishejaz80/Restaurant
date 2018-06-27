<?php

namespace App\Controllers;

use App\Controllers\Controller;
use App\Controllers\MenuController;
use App\Models\MenuItem;
use App\Models\Menu;
use App\abeautifulsite\SimpleImage;

class MenuItemController extends Controller{

  public function viewMenuItem($request, $response){
    if(!$this->auth->check()){
      return $response->withRedirect($this->router->pathFor('home'));
    }
    $menu_item = MenuItem::all();
    return $this->view->render($response, 'menuitem.php', array('menu_item' => $menu_item));
  }

  public function addMenuItem($request, $response){
    if(!$this->auth->check()){
      return $response->withRedirect($this->router->pathFor('home'));
    }

    $addMenu = Menu::all();

    if($request->isGet()){
      return $this->view->render($response, 'addmenuitem.php', array('menu' => $addMenu));
    }

    if($request->isPost()){
      $menu_id = $request->getParam('menu_id');
      $item_name = $request->getParam('item_name');
      $description = $request->getParam('description');
      $item_price = $request->getParam('item_price');
      $item_quantity = $request->getParam('item_quantity');
      $item_options = $request->getParam('item_options');
      $status = $request->getParam('status');

      $item_picture = $request->getUploadedFiles();
      if(empty($item_picture['fileToUpload'])){
        throw new Exception('Expected a new file');
      }
      $mUploadedFile = $item_picture['fileToUpload'];
      if($mUploadedFile->getError() === UPLOAD_ERR_OK){
        $filename = $mUploadedFile->getClientFileName();
        $mUploadedFile->moveTo("images/".$filename);

        //insert this information into the database.
        $filePath = "images/".$filename;

        $new_menu_item = new MenuItem(array(
          'menu_id' => $menu_id,
          'item_name' => $item_name,
          'description' => $description,
          'item_picture' => $filePath,
          'item_price' => $item_price,
          'item_quantity' => $item_quantity,
          'item_options' => $item_options,
          'status' => $status
        ));

        $new_menu_item->save();
        return $this->view->render($response, 'addmenuitem.php', array('message' => 'Successfully uploaded to database'));
      }else{
        return $this->view->render($response, 'addmenuitem.php', array('message' => 'Image upload failed with an error'));
      }
    }

  }

  public function editmenuitem($request, $response, $args){

    if(!$this->auth->check()){
     return $response->withRedirect($this->router->pathFor('home'));
   }

   $id = $args['id'];
   $menuItem = MenuItem::where('menu_item_id', $id)->first();

   $menu = Menu::all();

   if($request->isGet()){
     return $this->view->render($response, 'editmenuitem.php', array('menu' => $menu, 'menuItem' => $menuItem));
   }

   if($request->isPost()){
     $menu_id = $request->getParam('menu_id');
     $item_name = $request->getParam('item_name');
     $description = $request->getParam('description');
     $item_price = $request->getParam('item_price');
     $item_quantity = $request->getParam('item_quantity');
     $item_options = $request->getParam('item_options');
     $status = $request->getParam('status');


     $item_picture = $request->getUploadedFiles();
     if(empty($item_picture['fileToUpload'])){
       throw new Exception('Expected a new file');
     }
     $mUploadedFile = $item_picture['fileToUpload'];
     if($mUploadedFile->getError() === UPLOAD_ERR_OK){
       $filename = $mUploadedFile->getClientFileName();
       $mUploadedFile->moveTo("images/".$filename);
     }

     if(!empty($filename)){
       //insert this information into the database.
       $filePath = "images/".$filename;
       MenuItem::where('menu_item_id', $id)->update(['menu_id' => $menu_id, 'item_name' => $item_name, 'item_picture' => $filePath, 'description' => $description, 'item_price' => $item_price, 'item_quantity' => $item_quantity, 'item_options' => $item_options, 'status' => $status ]);
       }else{
         MenuItem::where('menu_item_id', $id)->update(['menu_id' => $menu_id, 'item_name' => $item_name, 'description' => $description, 'item_price' => $item_price, 'item_quantity' => $item_quantity, 'item_options' => $item_options, 'status' => $status]);
       }
         return $this->view->render($response, 'editmenuitem.php', array('message' => 'Successfully uploaded to database'));
    }
  }

  public function deleteMenuItem($request, $response, $args){
    if(!$this->auth->check()){
     return $response->withRedirect($this->router->pathFor('home'));
    }

   $id = $args['id'];
   $menuItem = MenuItem::where('menu_item_id', $id)->first();

   if($request->isGet()){
     return $this->view->render($response, 'deletemenuitem.php', array('menu_item' => $menuItem));
   }

   if($request->isPost()){
     MenuItem::where('menu_item_id', $id)->delete();
     return $this->view->render($response, 'deletemenuitem.php', array('deleted' => '1'));
   }
  }

}
