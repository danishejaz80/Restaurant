<?php

namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\Complaint;
use App\Models\User;

class ComplaintController extends Controller{

  public function viewComplaints($request, $response){
    if(!$this->auth->check()){
     return $response->withRedirect($this->router->pathFor('home'));
    }

    $complaint = Complaint::all();
    return $this->view->render($response, 'complaints.php', array('complaints' => $complaint));
  }

}
