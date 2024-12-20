<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Faker\Provider\Barcode;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'email',
        'username',
        'role',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function getAuthIdentifierName()
    {
        return 'email';  // Gunakan 'email' sebagai default untuk autentikasi
    }

    public function isAdmin()
    {
        return $this->role === 'admin';
    }

    public function isSuperAdmin()
    {
        return $this->role === 'super_admin';
    }

    public function messages()
    {
        return $this->hasMany(Messages::class);
    }

    // Relasi dengan tabel contacts
    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }

    // Relasi dengan tabel pages
    public function pages()
    {
        return $this->hasMany(Page::class);
    }

    // Relasi dengan tabel news
    public function news()
    {
        return $this->hasMany(News::class);
    }

    // Relasi dengan tabel services
    public function services()
    {
        return $this->hasMany(Service::class);
    }

    // Relasi dengan tabel members
    public function members()
    {
        return $this->hasMany(Member::class);
    }

    // Relasi dengan tabel barcodes
    public function barcodes()
    {
        return $this->hasMany(Barcode::class);
    }
}
