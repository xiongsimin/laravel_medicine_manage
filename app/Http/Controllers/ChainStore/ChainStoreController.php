<?php

namespace App\Http\Controllers\ChainStore;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ChainStoreController extends Controller
{
    //去连锁店页面
    public function goChainStore()
    {
        return view('ChainStore/ChainStore');
    }
}
