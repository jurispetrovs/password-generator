<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <title>Password Generator</title>
    </head>
    <body>
        <div>
            <div class="relative flex h-screen bg-blue-50">
                <div class="relative flex flex-col flex-1 h-full max-h-full overflow-y-scroll">
                    <div class="flex flex-col flex-1 max-h-full pl-2 pr-2 rounded-md xl:pr-4">
                        <main class="flex-1 pt-2">

                            <div class="p-4">
                                <div >
                                    <a href="/"
                                       class="border-2 border-black rounded-full font-bold text-back px-4 py-3
                                       transition duration-300 ease-in-out hover:bg-black hover:text-white mr-6"
                                    >
                                        Go Back
                                    </a>
                                </div>
                            </div>

                            <div class="flex flex-col items-center justify-center p-4 mt-4 bg-white rounded-md shadow-md">
                                <span class="text-xl tracking-wider text-gray-500 uppercase">Numbers List</span>
                                <span class="flex justify-center pt-4 w-2/3 tracking-wider text-gray-500">
                                    <?php echo implode(', ', $numbersList); ?>
                                </span>
                            </div>

                            <div class="grid grid-cols-1 gap-6 mt-4 md:grid-cols-2">

                                <div class="flex flex-col items-center justify-center p-4 w-full bg-white rounded-md shadow-md">
                                    <span class="text-xl tracking-wider text-gray-500 uppercase">Prime Numbers</span>
                                    <span class="flex justify-center pt-4 w-2/3 tracking-wider text-gray-500">
                                        <?php echo implode(', ', $primeNumbers); ?>
                                    </span>
                                </div>

                                <div class="flex flex-col items-center justify-center p-4 w-full bg-white rounded-md shadow-md">
                                    <span class="text-xl tracking-wider text-gray-500 uppercase">Palindrome Numbers</span>
                                    <span class="flex justify-center pt-4 w-2/3 tracking-wider text-gray-500">
                                        <?php echo implode(', ', $palindromeNumbers); ?>
                                    </span>
                                </div>

                            </div>

                            <div class="grid grid-cols-1 gap-6 my-4 mt-4">
                                <div class="flex flex-col items-center justify-center p-4 w-full bg-white rounded-md shadow-md">
                                    <span class="text-xl tracking-wider text-gray-500 uppercase">Password</span>
                                    <span class="flex justify-center pt-4 w-2/3 tracking-wider text-gray-500">
                                        <?php echo $password; ?>
                                    </span>
                                </div>
                            </div>
                        </main>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>