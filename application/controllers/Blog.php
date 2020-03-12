<?php


class Blog extends CI_Controller
{
    public function view()
    {
        $this->output->cache(1);
        $this->output->enable_profiler(TRUE);
        $data = array(
            'title' => 'This is my blog.',
            'header' => '我是丑小鸭',
            'todo_list' => array('Clean House', 'Call Mom', 'Run Errands')
        );
        return $this->load->view('home/blog_view', $data);
    }
}