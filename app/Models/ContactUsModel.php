<?php

namespace App\Models;

use CodeIgniter\Model;

class ContactUsModel extends Model
{
    protected $table = 'contact_us';
    protected $primaryKey = 'id';

    protected $allowedFields = ['email', 'subject', 'message'];

    // Additional model configuration goes here...

}
