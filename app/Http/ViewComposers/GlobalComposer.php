<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

class GlobalComposer {

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $action = app('request')->route()->getAction();

        $controller = class_basename($action['controller']);

        list($controller, $action) = explode('@', $controller);

        $view->with(compact('controller', 'action'));
        
        $view->with('currentUser', Auth::user());
        $view->with('apiKeys',  array(
            "secret_key" => "live_sec_k_23bd85ce1a19f9def60b0",
            "open_key"   => "live_open_k_0f8211db79175cae461a"));
    }

}