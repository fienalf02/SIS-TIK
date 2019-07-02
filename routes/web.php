<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});

// Route::resource('/post', 'PostController');

Auth::routes();

// Route::get('/{locale}/form', function($locale) {
//     App::setLocale($locale);
//     return view('biodata');
// });

// Route::get('/uuid', 'UuidController@store');

// Route::post('/contact/kirim', 'ContactController@kirim')->name('mail.kirim');
// Route::get('/contact', 'ContactController@index');

// Route::get('/mahasiswa', 'MahasiswaController@index');
// Route::get('/mahasiswa/export', 'MahasiswaController@excel');
// Route::post('/mahasiswa/import', 'MahasiswaController@import');
// Route::get('/mahasiswa/search', 'MahasiswaController@search');

// Route::get('/liatguru', 'GuruController@index');
// Route::get('/liatguru/hapus/{id}', 'GuruController@hpssementara');
// Route::get('/liatguru/trash', 'Gurucontroller@trash');
// Route::get('/liatguru/kembalikan/{id}', 'GuruController@kembalikan');
// Route::get('/liatguru/kembalisemua', 'GuruController@kembalisemua');
// Route::get('/liatguru/hapusperm/{id}', 'GuruController@hapus');
// Route::get('/liatguru/hapussemua', 'GuruController@hapussemua');

// Route::get('/pesan', 'NotifController@index');
// Route::get('/pesan/sukses', 'NotifController@sukses');
// Route::get('/pesan/peringatan', 'NotifController@peringatan');
// Route::get('/pesan/gagal', 'NotifController@gagal');

// Route::get('/kirimemail', 'EmailController@index');

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/eskul', 'EskulController@index');
// Route::get('/eskul/create', 'EskulController@create');
// Route::get('/data/cetak', 'DataController@print_pdf');
// Route::get('/data', 'DataController@index');
// Route::post('/buat', 'EskulController@store');
// Route::get('/eskul/cari', 'EskulController@cari');

// Route::get('/upload', 'UploadController@upload');
// Route::post('/upload/proses', 'UploadController@proses');
// Route::get('/upload/hapus/{id}', 'UploadController@hapus');

// use App\User;
// use App\Profile;
// use App\Post2;
// use App\Category;

// Route::get('/create_user', function() {
//     $user = User::create([
//         'name' => 'Alexx',
//         'email' => 'mralexx02@gmail.com',
//         'password' => bcrypt('password')
//     ]);
//     return $user;
// });

// Route::get('/create_profile', function() {
//     $profil = Profile::create([
//         'user_id' => 1,
//         'phone' => '+62312451231',
//         'alamat' => 'Jl. jalan cuk'
//     ]);
//     return $profil;
// });

// Route::get('create_user_profile', function() {
//     $user = User::find(3);

//     $profile = new Profile([
//         'phone' => '0231415124',
//         'alamat' => 'Jl. Lebakngok'
//     ]);
//     $user->profile()->save($profile);
//     return $user;
// });


// Route::get('/read_user', function() {
//     $user = User::find(1);

//     $data = [
//         'name' => $user->name,
//         'phone' => $user->profile->phone,
//         'alamat' => $user->profile->alamat
//     ];
//     return $data;
// });

// Route::get('/read_profil', function() {
//     $profil = Profile::where('phone', '+62312451231')->first();

//     $data = [
//         'name' => $profil->user->name,
//         'email' => $profil->user->email,
//         'phone' => $profil->phone,
//         'alamat' => $profil->alamat
//     ];
//     return $data;
// });

// Route::get('/update_profil', function() {
//     $user = User::find(1);

//     $data = [
//         'phone' => '112233',
//         'alamat' => 'Jln.in aja dulu'
//     ];

//     $user->profile()->update($data);
//     return $user;
// });

// Route::get('/delete_profil', function() {
//     $user = User::find(3);

//     $user->profile()->delete();
//     return $user;
// });

// Route::get('/create_post', function() {
//     $user = User::create([
//         'name' => 'TinoS',
//         'email' => 'tinos@gmail.com',
//         'password' => bcrypt('password')
//     ]);

//     $user->post2()->create([
//         'title' => 'isi title',
//         'body' => 'Hello world!'
//     ]);
//     return 'Success';
// });

// Route::get('/read_post', function() {
//     $user = User::find(1);

//     $posts = $user->post2()->get();

//     foreach ($posts as $post ) {
//         $data[] = [
//             'name' => $post->user->name,
//             'title' => $post->title,
//             'body' => $post->body
//         ];
//     }

//     return $data;
// });

// Route::get('/update_post', function() {
//     $user = User::findOrFail(1);

//     $user->post2()->where('id', 1)->update([
//         'title' => 'title update',
//         'body' => 'isi body update'
//     ]);
//     return 'Success Update';
// });

// Route::get('/delete_post', function() {
//     $user = User::findOrFail(1);

//     $user->post2()->where('id', 1)->delete();

//     return 'Success Delete';
// });

// Route::get('/create_categories', function() {
//     /*$post = Post2::findOrFail(1);

//     $post->categories()->create([
//         'slug' => str_slug('PHP', '-'),
//         'category' => 'Belajar PHP'
//     ]);

//     return 'Success create';
//     */
//     $user = User::create([
//         'name' => 'Alexx',
//         'email' =>  'bangalexx@gmail.com',
//         'password' => bcrypt('password')
//     ]);

//     $user->post2()->create([
//         'title' => 'new Title',
//         'body' => 'new Body'
//     ])->categories()->create([
//         'slug' => str_slug('new Category', '-'),
//         'category' => 'new Category'
//     ]);

//     return 'Success!';
// });

// Route::get('/read_categories', function() {
//     /*$post = Post2::find(1);

//     $categories = $post->categories->where('id', 2);
//     foreach ($categories as $c) {
//         echo $c->slug. '</br>';
//     }*/

//     $category = Category::find(2);

//     $posts = $category->post2;

//     foreach ($posts as $post) {
//         echo $post->title. '</br>';
//     }
// });

// Route::get('/attach', function() {
//     $post = Post2::find(3);
//     $post->categories()->attach([1,2,3]);

//     return 'Success Attach!';
// });

// Route::get('/detach', function() {
//     $post = Post2::find(2);
//     $post->categories()->detach(1);

//     return 'Success detach!';
// });

// Route::get('/sync', function() {
//     $post = Post2::find(3);
//     $post->categories()->sync([1]);

//     return 'Success Sync';
// });