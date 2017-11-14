<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model{
  // nama table di db
  protected $table = 'posts';
  // kolom yang boleh diisi
  protected $fillable = ['title','body'];
}
 ?>
