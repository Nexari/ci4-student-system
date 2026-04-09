<?php

namespace App\Controllers;

use App\Models\StudentModel;

class StudentController extends BaseController
{
    public function index()
    {
        $studentModel = new \App\Models\StudentModel();
        $data['students'] = $studentModel->paginate(5);
        $data['pager'] = $studentModel->pager;

        return view('students/index', $data);
    }

    public function create()
    {
        return view('students/create');
    }

    public function store()
    {
        $studentModel = new StudentModel();
        $studentModel->save([
            'name'   => $this->request->getPost('name'),
            'email'  => $this->request->getPost('email'),
            'course' => $this->request->getPost('course'),
        ]);

        return redirect()->to('/students');
    }

    public function edit($id)
    {
        $studentModel = new StudentModel();
        $data['student'] = $studentModel->find($id);

        return view('students/edit', $data);
    }

    public function update($id)
    {
        $studentModel = new StudentModel();
        $studentModel->update($id, [
            'name'   => $this->request->getPost('name'),
            'email'  => $this->request->getPost('email'),
            'course' => $this->request->getPost('course'),
        ]);

        return redirect()->to('/students');
    }

    public function delete($id)
    {
        $studentModel = new StudentModel();
        $studentModel->delete($id);

        return redirect()->to('/students');
    }
    public function search()
{
    $keyword = $this->request->getGet('keyword'); // get search input
    $studentModel = new \App\Models\StudentModel();

    if ($keyword) {
        $data['students'] = $studentModel
            ->like('name', $keyword)
            ->orLike('email', $keyword)
            ->orLike('course', $keyword)
            ->findAll();
    } else {
        $data['students'] = $studentModel->findAll();
    }

    return view('students/index', $data);
}

}
