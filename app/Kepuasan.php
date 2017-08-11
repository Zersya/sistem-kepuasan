<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kepuasan extends Model
{
  protected $table = 'kepuasans';
  protected $filltable = ['no', 'pendapat', 'status', 'tanggal', 'waktu'];
}
