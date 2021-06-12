<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Order extends Model
{
    const STATUS_NEW = 1;
    const STATUS_PENDDING = 2;
    const STATUS_PAID = 3;
    const STATUS_CLOSE = 4;
    const STATUS_SUCCESS = 5;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'message', 'value', 'view', 'click', 'status'
    ];

    public static $getStatuses = [
        self::STATUS_NEW => ['Новая заявка', 'info'],
        self::STATUS_PENDDING => ['В обработке', 'warning'],
        self::STATUS_PAID => ['Ожидает оплаты', 'primary'],
        self::STATUS_CLOSE => ['Отменена', 'danger'],
        self::STATUS_SUCCESS => ['Закрытая', 'success'],
    ];

    public function getStatusUIAttribute()
    {
        return '<span class="label label-'.self::$getStatuses[$this->status][1].'">'.self::$getStatuses[$this->status][0].'</span>';
    }
}
