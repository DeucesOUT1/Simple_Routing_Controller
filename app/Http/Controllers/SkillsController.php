<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function skillsFunc()
    {
        $skillsData = array(
            'coding_languages' => 'PHP, JSX',
            'frameworks' => 'Vite(React)',
            'tools' => 'Git, Firebase',
            'soft_skills' => 'Public Speaking, Problem Solving',
        );
        return view("skills", $skillsData);
    }
}
