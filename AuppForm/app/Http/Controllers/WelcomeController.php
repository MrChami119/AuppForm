<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer; // Import the Customer model
use Illuminate\Support\Facades\Storage; // For file storage

class WelcomeController extends Controller
{
    /**
     * Display the welcome page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('welcome'); // Render the welcome.blade.php view
    }

    /**
     * Display the customer form.
     *
     * @return \Illuminate\View\View
     */
    public function showForm()
    {
        return view('form'); // Render the form.blade.php view
    }

    /**
     * Handle form submission.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
{
    // Validate the form data
    $request->validate([
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'address' => 'required|string|max:255',
        'telephone' => 'required|string|max:20|regex:/^[0-9]+$/',
        'email' => 'required|email|unique:customers,email|max:255',
        'bank_account_number' => 'required|string|max:255',
        'ceb_bill_image' => 'required|image|mimes:jpeg,png,jpg|max:2048', // 2MB max
        'id_image' => 'required|image|mimes:jpeg,png,jpg|max:2048', // 2MB max
        'bank_book_image' => 'required|image|mimes:jpeg,png,jpg|max:2048', // 2MB max
    ]);

    // Handle file uploads
    $cebBillPath = $request->file('ceb_bill_image')->store('ceb_bills', 'public');
    $idImagePath = $request->file('id_image')->store('id_images', 'public');
    $bankBookPath = $request->file('bank_book_image')->store('bank_books', 'public');

    // Save the form data to the database
    Customer::create([
        'first_name' => $request->first_name,
        'last_name' => $request->last_name,
        'address' => $request->address,
        'telephone' => $request->telephone,
        'email' => $request->email,
        'bank_account_number' => $request->bank_account_number,
        'ceb_bill_image_path' => $cebBillPath,
        'id_image_path' => $idImagePath,
        'bank_book_image_path' => $bankBookPath,
    ]);

    // Redirect back to the form with a success message
    return redirect()->route('form')->with('success', 'Your details have been submitted successfully!');
}
}