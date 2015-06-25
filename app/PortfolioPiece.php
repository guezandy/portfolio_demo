<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class PortfolioPiece extends Model {
    protected $table = 'portfolio_piece';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user', 'title', 'text_1', 'text_2', 'text_3',
                        'extra_1', 'extra_2'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['id'];
}
