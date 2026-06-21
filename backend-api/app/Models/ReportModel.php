<?php

namespace App\Models;

use CodeIgniter\Model;

class ReportModel extends Model
{
    protected $table            = 'reports';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $protectFields    = true;
    protected $allowedFields    = ['reporter_name', 'category_id', 'content', 'evidence_image', 'status'];

    protected $validationRules      = [
        'reporter_name' => 'required|min_length[3]',
        'category_id'   => 'required|numeric',
        'content'       => 'required',
    ];

    public function getReportsWithCategory()
    {
        return $this->select('reports.*, categories.name as category_name')
                    ->join('categories', 'categories.id = reports.category_id', 'left')
                    ->orderBy('reports.created_at', 'DESC')
                    ->findAll();
    }
}
