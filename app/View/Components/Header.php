<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Department;

class Header extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $rootDepartments = Department::select('id', 'name')->where('parent_department_id', 0)->get();

        return view('components.header', [
            'rootDepartments' => $rootDepartments,
        ]);
    }
}
