<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="/resources/css/app.css">
        <title>Password Generator</title>
    </head>
    <body>
        <div class="grid min-h-screen place-items-center">
            <div class="w-11/12 p-12 bg-white sm:w-8/12 md:w-1/2 lg:w-5/12">
                <form method="post" action="/result" class="mt-6" name="password-generate">
                    <div class="flex justify-between gap-3">
                        <span class="w-1/2">
                            <label for="maxNumber" class="block text-xs font-semibold text-gray-600 uppercase">
                                Max number
                            </label>
                            <input id="maxNumber" type="text" name="maxNumber" placeholder="e.g. 100"
                                   class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none
                                   focus:outline-none focus:bg-gray-300 focus:shadow-inner"
                            />
                        </span>
                        <span class="w-1/2">
                            <label for="maxPasswordLength" class="block text-xs font-semibold text-gray-600 uppercase">
                                Max password length
                            </label>
                            <input id="maxPasswordLength" type="text" name="maxPasswordLength" placeholder="e.g. 4"
                                   class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none
                                   focus:outline-none focus:bg-gray-300 focus:shadow-inner"
                            />
                        </span>
                    </div>
                    <button type="submit"
                            class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-black shadow-lg
                            focus:outline-none hover:bg-gray-900 hover:shadow-none"
                    >
                        Continue
                    </button>
                </form>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
        <script src="/resources/js/form-validation.js" type="text/javascript"></script>
    </body>
</html>