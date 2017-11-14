<?php
namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

/**
 *
 */
class PostController extends Controller
{
  public function daftar()
  {
    return Post::all();
  }

  public function tambah(Request $request)
  {
    //validasi
    $this->validate($request, [
      'title' => 'required',
      'body' => 'required',
    ]);
    //masukkan ke db
    return Post::create($request->all());
  }
  public function detail($id)
  {
    //Ambil datanya
    $post = Post::find($id);
    return $post;
  }
  public function ubah(Request $request, $id)
  {
    //Cari yang akan diubah
    $post = Post::find($id);
    $post->update($request->all());
    return $post;
  }
  public function delete($id)
  {
    Post::find($id)->delete();
    return response()->json([
      'Message' => 'Post has been deleted'
    ]);
  }
}

 ?>
