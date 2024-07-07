<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Crypt;

class Transaction extends Model
{
    public function setSiteNameAttribute($value)
    {
        $this->attributes['site_name'] = Crypt::encryptString($value);
    }

    public function setNoPoAttribute($value)
    {
        $this->attributes['no_po'] = Crypt::encryptString($value);
    }


    public function setLattitudeAttribute($value)
    {
        $this->attributes['lattitude'] = Crypt::encryptString($value);
    }

    public function setLongtitudeAttribute($value)
    {
        $this->attributes['longtitude'] = Crypt::encryptString($value);
    }

    public function setJenisTowerAttribute($value)
    {
        $this->attributes['jenis_tower'] = Crypt::encryptString($value);
    }

    public function setTinggiTowerAttribute($value)
    {
        $this->attributes['tinggi_tower'] = Crypt::encryptString($value);
    }


    public function getSiteNameAttribute($value)
    {
        try {
            return Crypt::decryptString($value);
        } catch (\Exception $e) {
            return $value;
        }
    }

    public function getNoPoAttribute($value)
    {
        try {
            return Crypt::decryptString($value);
        } catch (\Exception $e) {
            return $value;
        }
    }

    public function getLattitudeAttribute($value)
    {
        try {
            return Crypt::decryptString($value);
        } catch (\Exception $e) {
            return $value;
        }
    }

    public function getLongtitudeAttribute($value)
    {
        try {
            return Crypt::decryptString($value);
        } catch (\Exception $e) {
            return $value;
        }
    }

    public function getJenisTowerAttribute($value)
    {
        try {
            return Crypt::decryptString($value);
        } catch (\Exception $e) {
            return $value;
        }
    }

    public function getTinggiTowerAttribute($value)
    {
        try {
            return Crypt::decryptString($value);
        } catch (\Exception $e) {
            return $value;
        }
    }
}
