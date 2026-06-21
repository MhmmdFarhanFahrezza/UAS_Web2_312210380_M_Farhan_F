<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Auth extends ResourceController
{
    protected $modelName = 'App\Models\UserModel';
    protected $format    = 'json';

    public function login()
    {
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $user = $this->model->where('username', $username)->first();

        if (!$user || !password_verify($password, $user['password'])) {
            return $this->failUnauthorized('Invalid username or password');
        }

        $token = bin2hex(random_bytes(32));
        $this->model->update($user['id'], ['token' => $token]);

        return $this->respond([
            'status' => true,
            'message' => 'Login successful',
            'data' => [
                'name' => $user['name'],
                'username' => $user['username'],
                'token' => $token
            ]
        ]);
    }

    public function logout()
    {
        $token = $this->request->getServer('HTTP_AUTHORIZATION');
        if ($token) {
            $token = str_replace('Bearer ', '', $token);
            $user = $this->model->where('token', $token)->first();
            if ($user) {
                $this->model->update($user['id'], ['token' => null]);
            }
        }
        return $this->respond(['status' => true, 'message' => 'Logged out']);
    }
}
