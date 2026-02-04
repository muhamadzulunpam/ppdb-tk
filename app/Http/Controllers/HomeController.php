<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UpdateBookRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function Dashboard()
    {
        $title = '';
    
        return view('pendaftaran', [
            "step1" => 1,
            'step2' => 2,
            'step3' => 3,
        ]);
    }
    // BookController.php
    public function getBooksByCategory($category)
    {
        // Mendapatkan kategori berdasarkan nama
        $category = Category::where('name', $category)->first();

        // Cek jika kategori ditemukan
        if (!$category) {
            abort(404, 'Category not found');
        }

        // Mengambil buku berdasarkan kategori
        $books = $category->books()->paginate(7);

        // Mengirim data ke view
        return view('Dashboard', [
            'title' => $category->name,
            'books' => $books,
            'category' => $category
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        return view('admin.create',[
            'active' => 'create'
        ]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validasi input
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'author' => 'required|string|max:255',
        'publisher' => 'required|string|max:255',
        'year' => 'required|integer|min:1000|max:' . date('Y'),
        'isbn' => 'required|string|unique:books,isbn',
        'location' => 'required|string|max:255',
        'category_id' => 'required|exists:categories,id',
        'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048', // Validasi untuk gambar
    ]);

    // Proses upload gambar jika ada
    $imageName = null; // Default jika tidak ada gambar
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '_' . $image->getClientOriginalName();
        $image->move(public_path('assets/img'), $imageName); // Simpan gambar di folder public/assets/img
    }

    // Simpan data ke database
    Book::create([
        'title' => $validated['title'],
        'author' => $validated['author'],
        'publisher' => $validated['publisher'],
        'year' => $validated['year'],
        'isbn' => $validated['isbn'],
        'location' => $validated['location'],
        'category_id' => $validated['category_id'],
        'image' => $imageName, // Simpan nama file gambar
    ]);

    // Redirect ke halaman index dengan pesan sukses
    return redirect()->route('books.index')->with('success', 'Buku berhasil ditambahkan!');
}

    /**
     * Display the specified resource.
     */
    // public function show(Book $book)
    // {
    //     $user = Auth::user();
    //     return view('bookshow', [
    //         'book' => $book,
    //         'user' => $user,
    //         'active' => 'book'
    //     ]);
    // }
    

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(Book $book)
    // {
    //     $categories = Category::all(); // Ambil semua kategori untuk dropdown
    //     return view('admin.update',[
    //         "categories" => $categories,
    //         'active' => 'create',
            
    //     ]);
    // }   

    /**
     * Update the specified resource in storage.
     */
    // public function update(UpdateBookRequest $request, Book $book)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(Book $book)
    // {
    //     //
    // }
}
