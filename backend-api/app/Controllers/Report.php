<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Report extends ResourceController
{
    protected $modelName = 'App\Models\ReportModel';
    protected $format    = 'json';

    public function index()
    {
        return $this->respond($this->model->getReportsWithCategory());
    }

    public function create()
    {
        $img = $this->request->getFile('evidence_image');
        $newName = null;
        
        if ($img && $img->isValid() && !$img->hasMoved()) {
            $newName = $img->getRandomName();
            $img->move(FCPATH . 'uploads', $newName);
        }

        $data = [
            'reporter_name' => $this->request->getPost('reporter_name'),
            'category_id'   => $this->request->getPost('category_id'),
            'content'       => $this->request->getPost('content'),
            'evidence_image' => $newName,
            'status'        => 'pending'
        ];

        if (!$this->model->insert($data)) {
            return $this->fail($this->model->errors());
        }

        return $this->respondCreated(['status' => true, 'message' => 'Report submitted successfully']);
    }

    public function update($id = null)
    {
        $data = $this->request->getJSON(true) ?? $this->request->getRawInput();
        if (isset($data['status'])) {
            if (!$this->model->update($id, ['status' => $data['status']])) {
                return $this->fail($this->model->errors());
            }
            return $this->respond(['status' => true, 'message' => 'Report status updated']);
        }
        return $this->fail('No status provided');
    }

    public function delete($id = null)
    {
        $report = $this->model->find($id);
        if (!$report) return $this->failNotFound('Report not found');
        
        if ($report['evidence_image']) {
            $imagePath = FCPATH . 'uploads/' . $report['evidence_image'];
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $this->model->delete($id);
        return $this->respondDeleted(['status' => true, 'message' => 'Report deleted']);
    }
}
