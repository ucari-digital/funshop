<?php

namespace App\Http\Composer\View;

use Illuminate\View\View;
use App\Repositories\UserRepository;

class GlobalViewComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('layout', 'layout');
    }
}