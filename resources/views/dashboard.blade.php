<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Greetings,') }} {{ Auth::user()->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Clients") }}
                    <?php
                    // Fetch client data from the database
                    $clients = App\Models\Client::all();

                    // Loop through each client and display their information
                    foreach ($clients as $client) {
                        echo "<div class='card mt-6'>";
                        echo "<div class='card-header'>";
                        echo "<h2 class='card-title'>" . $client->name . "</h2>";
                        echo "</div>";
                        echo "<div class='card-body'>";
                        echo "<p>Email: " . $client->email . "</p>";
                        echo "<p>Phone: " . $client->phone . "</p>";
                        echo "<p>Address: " . $client->address . "</p>";
                        echo "</div>";
                        echo "</div>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <style>
    .card {
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 15px;
        margin-bottom: 20px;
        background-color: #2b3856; /* Change this line */
        color: #fff; /* Add this line to change the text color to white */
    }

    .card-header {
        border-bottom: 1px solid #ddd;
        margin-bottom: 15px;
    }

    .card-title {
        font-size: 1.5em;
        font-weight: bold;
    }

    .card-body p {
        margin: 0 0 10px;
    }
</style>
</x-app-layout>