<?php

namespace App\Http\Traits\Backend\__System\Controllers\Datatable\Extension\Custom;

use Illuminate\Http\Request;
use Redirect, Response;

trait SelectedInactiveController {

  /**
  **************************************************
  * @return SELECTED-INACTIVE
  **************************************************
  **/

  public function selected_inactive(Request $request) {
    $data = $request->EXILEDNONAME;
    $this->model::whereIn('id',explode(",",$data))->update(['active' => 0]);
    return Response::json($data);
  }

}
