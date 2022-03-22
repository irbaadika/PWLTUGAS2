<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class biodata extends Model
{
    private static $nama = "Irba Adika Jaya";
    public static function getNama(){
        return self::$nama;
    }

    private static $ttl = "Malang, 12 Agustus 2002";
    public static function getTtl(){
        return self::$ttl;
    }

    private static $jenkel = "Laki-laki";
    public static function getJenkel(){
        return self::$jenkel;
    }

    private static $agama = "Islam";
    public static function getAgama(){
        return self::$agama;
    }

    private static $alamat = "Jalan Ki Ageng Gribig I/37A";
    public static function getAlamat(){
        return self::$alamat;
    }

    public static function getTelepon(){
        $telepon = collect(['081217537602','0822222222222']);
        return $telepon->first();
    }
    
    private static $email = "irbaadika123@gmail.com";
    public static function getEmail(){
        return self::$email;
    }

    private static $status = "Mahasiswa";
    public static function getStatus(){
        return self::$status;
    }
}
