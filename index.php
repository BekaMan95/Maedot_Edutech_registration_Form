<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Registration Form</title>
        <link href="./assets/css/output.css" rel="stylesheet">
        <script src="https://kit.fontawesome.com/248b7d0018.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <!-- Header -->
        <div class="flex items-center justify-center w-full bg-primary-700 text-white px-4 sm:px-8 py-4">
            <div class="flex flex-col sm:flex-row sm:items-center justify-between w-full lg:w-[70%] px-4 sm:px-8">
                <div class="flex items-center gap-4">
                    <span class="flex items-center gap-3">
                        <i class="fas fa-phone-alt"></i>
                        <span>9521</span>
                    </span>
                    <a href="#" class="decoration-none underline">info@selectmail.edu.et</a>
                </div>
                <button class="bg-secondary-500 text-white font-semibold py-2 px-4 flex items-center justify-center rounded-md focus:outline-none w-max mt-3 sm:mt-0">Back to Home</button>
            </div>
        </div>

        <main id="main" class="flex flex-col justify-start">
            <section class="flex flex-col container mx-auto my-12">
                <h2 class="text-2xl font-bold mb-8 ml-12 bg-gray-300 rounded-3xl inline-block p-5 w-max">Registration Steps</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8 m-14">
                    <div class="flex items-center space-x-4 h-full">
                        <div class="flex flex-col justify-start gap-4">
                            <img class="m-auto py-6" src="./assets/images/info.svg" alt="Personal info"/>
                            <div class="bg-blue-600 text-white rounded-full w-10 h-10 flex items-center justify-center">1</div>
                            <h3 class="text-lg font-medium">Step 1: Personal Info</h3>
                            <p class="text-gray-500">Fill in basic details about yourself</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4 h-full">
                        <div class="flex flex-col justify-start gap-4">
                            <img class="m-auto py-6" src="./assets/images/educational background.svg" alt="Educational background" />
                            <div class="bg-blue-600 text-white rounded-full w-10 h-10 flex items-center justify-center">2</div>
                            <h3 class="text-lg font-medium">Step 2: Educational Background</h3>
                            <p class="text-gray-500">Fill in your educational history to proceed</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4 h-full">
                        <div class="flex flex-col justify-start gap-4">
                            <img class="m-auto py-6" src="./assets/images/desired field.svg" alt="desired field" />
                            <div class="bg-blue-600 text-white rounded-full w-10 h-10 flex items-center justify-center">3</div>
                            <h3 class="text-lg font-medium">Step 3: Desired Field of Study</h3>
                            <p class="text-gray-500">What do you want to learn? (in what program)</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4 h-full">
                        <div class="flex flex-col justify-start gap-4">
                            <img class="m-auto py-6" src="./assets/images/emergency contact.svg" alt="emergency contact"/>
                            <div class="bg-blue-600 text-white rounded-full w-10 h-10 flex items-center justify-center">4</div>
                            <h3 class="text-lg font-medium">Step 4: Emergency Contact</h3>
                            <p class="text-gray-500">Fill in contact in case of emergency</p>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-8">
                    <a href="registration.html" class="bg-blue-600 text-white px-6 py-3 rounded-md hover:bg-blue-600">Get started</a>
                </div>
            </section>
        </main>
        <footer id="footer" class="bg-blue-600">
            <div class="container mx-auto flex flex-col md:flex-row items-center justify-between">
                <img src="./assets/images/footer.svg" alt="footer" />
            </div>
        </footer>
    </body>
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
        }

        #main {
            flex: 1;
        }
    </style>
</html>