<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;
    protected $fillable = [
        'brand', 'model', 'fiscalPower', 'equipment',
        'price', 'releaseYear', 'energy', 'mileage',
        'gearbox', 'description', 'image'
    ];

    public function vehicleIMG($request)
    {
        $image = $request->file('image');
        $name = $image->hashName();
        $destination = public_path('/vehicles_images');
        $image->move($destination, $name);
        return $name;
    }
}
