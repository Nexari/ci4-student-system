<?php

namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;
use App\Models\StudentModel;

class StudentApi extends ResourceController
{
    protected $modelName = StudentModel::class;
    protected $format    = 'json';

    // GET /api/students
    public function index()
    {
        return $this->respond($this->model->findAll());
    }

    // GET /api/students/{id}
    public function show($id = null)
    {
        $student = $this->model->find($id);
        if (!$student) {
            return $this->failNotFound("Student not found");
        }
        return $this->respond($student);
    }

    // POST /api/students
    public function create()
    {
        $data = $this->request->getJSON(true);
        if (!$this->model->insert($data)) {
            return $this->failValidationErrors($this->model->errors());
        }
        return $this->respondCreated($data);
    }

    // PUT /api/students/{id}
    public function update($id = null)
    {
        $data = $this->request->getJSON(true);
        if (!$this->model->update($id, $data)) {
            return $this->failValidationErrors($this->model->errors());
        }
        return $this->respond($data);
    }

    // DELETE /api/students/{id}
    public function delete($id = null)
    {
        if (!$this->model->delete($id)) {
            return $this->failNotFound("Student not found");
        }
        return $this->respondDeleted(['id' => $id]);
    }
}
