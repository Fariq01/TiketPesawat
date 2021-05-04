<?php

namespace App\Models;

use CodeIgniter\Model;
use Exception;

//class model user yang meembuat tabel berisi 
        // 'email',
        // 'password',
        // 'nama',
        // 'telepon',
        // 'alamat',
        // 'tanggal_lahir'
class UserModel extends Model
{
    protected $table = 'user';
    protected $allowedFields = [
        'email',
        'password',
        'nama',
        'telepon',
        'alamat',
        'tanggal_lahir'
    ];

    protected $beforeInsert = ['beforeInsert'];

    //fungsi untuk mengenkripsi password
    protected function beforeInsert(array $data): array
    {
        if (isset($data['data']['password'])) {
            $plaintext = $data['data']['password'];
            $data['data']['password'] = password_hash($plaintext, PASSWORD_BCRYPT);
        }
        
        return $data;
    }
    
    //fungsi untuk mencari data email dari input user pada database
    public function findUserByEmail(string $email)
    {
        $user = $this
            ->where(['email' => $email])
            ->first();

        return $user;
    }

    
}