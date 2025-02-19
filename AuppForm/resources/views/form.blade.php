<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Form</title>
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
</head>
<body class="bg-gray-900 text-white font-sans">
    <div class="min-h-screen flex items-center justify-center p-4">
        <div class="bg-gray-800 p-8 rounded-lg shadow-2xl w-full max-w-2xl">
            <h2 class="text-3xl font-bold mb-6">Customer Information</h2>
            <form action="{{ route('submit') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-gray-400">First Name</label>
                        <input type="text" name="first_name" class="mt-1 block w-full bg-gray-700 border border-gray-600 rounded-md p-2 text-white" required>
                    </div>
                    <div>
                        <label class="block text-gray-400">Last Name</label>
                        <input type="text" name="last_name" class="mt-1 block w-full bg-gray-700 border border-gray-600 rounded-md p-2 text-white" required>
                    </div>
                    <div class="md:col-span-2">
                        <label class="block text-gray-400">Address</label>
                        <input type="text" name="address" class="mt-1 block w-full bg-gray-700 border border-gray-600 rounded-md p-2 text-white" required>
                    </div>
                    <div>
                        <label class="block text-gray-400">Telephone</label>
                        <input type="text" name="telephone" class="mt-1 block w-full bg-gray-700 border border-gray-600 rounded-md p-2 text-white" required>
                    </div>
                    <div>
                        <label class="block text-gray-400">Email</label>
                        <input type="email" name="email" class="mt-1 block w-full bg-gray-700 border border-gray-600 rounded-md p-2 text-white" required>
                    </div>
                    <div class="md:col-span-2">
                        <label class="block text-gray-400">Bank Account Number</label>
                        <input type="text" name="bank_account_number" class="mt-1 block w-full bg-gray-700 border border-gray-600 rounded-md p-2 text-white" required>
                    </div>
                    <div>
                        <label class="block text-gray-400">CEB Bill Image</label>
                        <input type="file" name="ceb_bill_image" class="mt-1 block w-full bg-gray-700 border border-gray-600 rounded-md p-2 text-white" required>
                    </div>
                    <div>
                        <label class="block text-gray-400">ID Image</label>
                        <input type="file" name="id_image" class="mt-1 block w-full bg-gray-700 border border-gray-600 rounded-md p-2 text-white" required>
                    </div>
                    <div>
                        <label class="block text-gray-400">Bank Book Front Page</label>
                        <input type="file" name="bank_book_image" class="mt-1 block w-full bg-gray-700 border border-gray-600 rounded-md p-2 text-white" required>
                    </div>
                </div>
                <div class="mt-6">
                    <button type="submit" class="w-full bg-purple-600 py-2 px-4 rounded-lg hover:bg-purple-700 transition duration-300">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        // Check if there's a success message in the session
        @if(session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: '{{ session('success') }}',
                confirmButtonText: 'OK',
                timer: 3000, // Auto-close after 3 seconds
                timerProgressBar: true, // Show a progress bar
            });
        @endif

        // Check if there are validation errors
        @if($errors->any())
            Swal.fire({
                icon: 'error',
                title: 'Validation Error',
                text: 'Please check the form for errors.',
                confirmButtonText: 'OK',
            });
        @endif
    </script>
</body>
</html>