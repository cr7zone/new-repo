<?php
namespace App\model;
use Illuminate\Database\Eloquent\model;

class Service extends model {
    protected $table = "services";
    protected $primaryKey = "service_id";
    
    protected $fillable = [
        'service_name', 'description', 'pricing', 'created_at','updated_at'
    ];
}