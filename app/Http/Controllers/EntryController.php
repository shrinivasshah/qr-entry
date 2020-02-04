<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\UserEntry;
use App\User;

class EntryController extends Controller
{
  public function entry($id)
  {
    $user = User::findOrFail($id);
    $entry = new UserEntry();
    $entry->user_id = $id;
    $entry->save();
    return "Ok";
  }
}
