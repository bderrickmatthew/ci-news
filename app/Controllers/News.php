<?php

namespace App\Controllers;

use App\Models\NewsModel;
use CodeIgniter\Exceptions\PageNotFoundException;


class News extends BaseController
{
    public function index()
    {
        $model = model(NewsModel::class);
        $data = [
            'news_list' => $model->getNews(),
            'title' => 'News archive',
        ];
        return view('templates/header', $data)
            . view('news/index')
            . view('templates/footer');
    }

    /**
     * Summary of show
     * @param mixed $slug
     * @throws \CodeIgniter\Exceptions\PageNotFoundException
     * @return string
     */
    public function show(?string $slug = null)
    {
        $model = model(NewsModel::class);
        $data['news'] = $model->getNews($slug);

        if ($data['news'] === null) {
            throw new PageNotFoundException('Cannot find the news item: ' . $slug);
        }

        $data['title'] = $data['news']['title'];

        return view('templates/header', $data)
            . view('news/view')
            . view('templates/footer');
    }

    /**
     * Summary of new
     * @return string
     */
    public function new()
    {
        helper('form');

        return view('templates/header', ['title' => 'Create a news item']) . view('news/create') . view('templates/footer');
    }

    /**
     * Summary of create
     * @return string
     */
    public function create()
    {
        helper('form');

        $data = $this->request->getPost(['title', 'body']);

        // checks whether the submitted data passed the validation rules.
        if (
            !$this->validateData($data, [
                'title' => 'required|max_length[255]|min_length[3]',
                'body' => 'required|max_length[5000]|min_length[10]'
            ])
        ) {
            // the validation fails, so returns the form
            return $this->new();
        }

        // gets the validated data
        $post = $this->validator->getValidated();

        $model = model(NewsModel::class);

        $model->save([
            'title' => $post['title'],
            'slug' => url_title($post['title'], '-', true),
            'body' => $post['body'],
        ]);

        return view('templates/header', ['title' => 'Create a news item']) . view('news/success') . view('templates/footer');
    }
}