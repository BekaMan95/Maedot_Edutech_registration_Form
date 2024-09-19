<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Multi-step Form</title>
        <link href="./assets/css/output.css" rel="stylesheet">
        <script type="text/javascript" src="./assets/js/script.js"></script>
    </head>
    <body>
        <div class="flex flex-col items-center justify-center w-full p-8 gap-8">
            <div id="progress">
                Step <span id="current-step">1</span> of 4
            </div>
            <form id="multi-step-form" novalidate>
                <!-- Step 1: Personal Info -->
                <div id="step-1" class="active">
                    <h2 class="text-xl font-semibold mb-4">Personal Info</h2>
                    <div class="progress-bar mb-4 flex space-x-2">
                        <div class="step-indicator bg-blue-600 text-white py-2 px-4 rounded-lg">Step 1</div>
                        <div class="step-indicator bg-gray-300 text-gray-700 py-2 px-4 rounded-lg">Step 2</div>
                        <div class="step-indicator bg-gray-300 text-gray-700 py-2 px-4 rounded-lg">Step 3</div>
                        <div class="step-indicator bg-gray-300 text-gray-700 py-2 px-4 rounded-lg">Step 4</div>
                    </div>
                    <form id="personal-info-form">
                        <div class="mb-4">
                            <label for="first-name" class="block mb-2 text-sm font-medium text-gray-700">First name*</label>
                            <input type="text" id="first-name" name="first-name" class="w-full border border-gray-300 rounded-md p-2" placeholder="First name" required>
                            <span class="error" id="error-first-name"></span>
                        </div>
    
                        <div class="mb-4">
                            <label for="middle-name" class="block mb-2 text-sm font-medium text-gray-700">Middle name</label>
                            <input type="text" id="middle-name" name="middle-name" class="w-full border border-gray-300 rounded-md p-2" placeholder="Middle name">
                            <span class="error" id="error-middle-name"></span>
                        </div>
    
                        <div class="mb-4">
                            <label for="last-name" class="block mb-2 text-sm font-medium text-gray-700">Last name*</label>
                            <input type="text" id="last-name" name="last-name" class="w-full border border-gray-300 rounded-md p-2" placeholder="Last name" required>
                            <span class="error" id="error-last-name"></span>
                        </div>
    
                        <div class="mb-4">
                            <label for="profile-image" class="block mb-2 text-sm font-medium text-gray-700">Upload Image*</label>
                            <input type="file" id="profile-image" name="profile-image" class="w-full border border-gray-300 rounded-md p-2" accept=".jpg, .jpeg, .png" required>
                            <span class="error" id="error-profile-image"></span>
                        </div>
    
                        <div class="mb-6">
                            <label for="email" class="block mb-2">Email*</label>
                            <input type="email" id="email" name="email" class="w-full border border-gray-300 rounded-md p-2" required>
                            <span class="error" id="error-email"></span>
                        </div>
    
                        <div class="mb-4">
                            <label for="username" class="block mb-2 text-sm font-medium text-gray-700">Username*</label>
                            <input type="text" id="username" name="username" class="w-full border border-gray-300 rounded-md p-2" placeholder="Username" required>
                            <span class="error" id="error-username"></span>
                        </div>
    
                        <div class="mb-4">
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-700">Password*</label>
                            <input type="password" id="password" name="password" class="w-full border border-gray-300 rounded-md p-2" placeholder="Password" required>
                            <span class="error" id="error-password"></span>
                        </div>
    
                        <div class="mb-4">
                            <label for="phone-number" class="block mb-2 text-sm font-medium text-gray-700">Phone Number*</label>
                            <input type="text" id="phone-number" name="phone-number" class="w-full border border-gray-300 rounded-md p-2" placeholder="Phone number" required pattern="\d{10}">
                            <span class="error" id="error-phone-number"></span>
                        </div>
    
                        <div class="mb-4">
                            <label for="gender" class="block mb-2 text-sm font-medium text-gray-700">Gender*</label>
                            <div class="flex space-x-4">
                                <label for="male" class="inline-flex items-center">
                                    <input type="radio" id="male" name="gender" value="male" class="form-radio" required> Male
                                </label>
                                <label for="female" class="inline-flex items-center">
                                    <input type="radio" id="female" name="gender" value="female" class="form-radio" required> Female
                                </label>
                            </div>
                            <span class="error" id="error-gender"></span>
                        </div>
    
                        <div class="mb-4">
                            <label for="birthdate" class="block mb-2 text-gray-700">Birthdate*</label>
                            <input type="date" id="birthdate" name="birthdate" class="w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                            <span class="error" id="error-birthdate"></span>
                        </div>
    
                        <div class="mb-4">
                            <label for="country" class="block mb-2 text-sm font-medium text-gray-700">Country*</label>
                            <input type="text" id="country" name="country" class="w-full border border-gray-300 rounded-md p-2" placeholder="Country" required>
                            <span class="error" id="error-country"></span>
                        </div>
    
                        <div class="button-container mt-6 flex justify-between">
                            <button type="button" id="next-to-step2" class="bg-blue-600 text-white py-2 px-4 rounded-md" onclick="nextStep()">Next</button>
                        </div>
                    </form>
                </div>
    
                <!-- Step 2: Educational Background -->
                <div id="step-2" class="form-step">
                    <h2 class="text-xl font-semibold mb-4">Educational Background</h2>
                    <div class="progress-bar mb-4 flex space-x-2">
                        <div class="step-indicator bg-blue-600 text-white py-2 px-4 rounded-lg">Step 1</div>
                        <div class="step-indicator bg-blue-600 text-white py-2 px-4 rounded-lg">Step 2</div>
                        <div class="step-indicator bg-gray-300 text-gray-700 py-2 px-4 rounded-lg">Step 3</div>
                        <div class="step-indicator bg-gray-300 text-gray-700 py-2 px-4 rounded-lg">Step 4</div>
                    </div>
                    <form id="education-info-form">
                        <div class="mb-4">
                            <label for="education-level" class="block mb-2 text-sm font-medium text-gray-700">Highest level of Education completed*</label>
                            <select id="education-level" name="education-level" class="w-full border border-gray-300 rounded-md p-2" required>
                                <option value="">Select</option>
                                <option value="high-school">High School</option>
                                <option value="bachelor">Bachelor's Degree</option>
                                <option value="master">Master's Degree</option>
                                <option value="phd">PhD</option>
                            </select>
                            <span class="error" id="error-education-level"></span>
                        </div>
    
                        <div class="mb-4">
                            <label for="cgpa" class="block mb-2 text-sm font-medium text-gray-700">CGPA*</label>
                            <input type="number" id="cgpa" name="cgpa" class="w-full border border-gray-300 rounded-md p-2" placeholder="CGPA" step="0.01" required>
                            <span class="error" id="error-cgpa"></span>
                        </div>
    
                        <div class="mb-4">
                            <label for="institution" class="block mb-2 text-sm font-medium text-gray-700">Institution Name*</label>
                            <input type="text" id="institution" name="institution" class="w-full border border-gray-300 rounded-md p-2" placeholder="Institution Name" required>
                            <span class="error" id="error-institution"></span>
                        </div>
    
                        <div class="button-container mt-6 flex justify-between">
                            <button type="button" id="prev-to-step1" class="bg-gray-500 text-white py-2 px-4 rounded-md" onclick="prevStep()">Back</button>
                            <button type="button" id="next-to-step3" class="bg-blue-600 text-white py-2 px-4 rounded-md" onclick="nextStep()">Next</button>
                        </div>
                    </form>
                </div>
    
                <!-- Step 3: Desired Field of Study -->
                <div id="step-3" class="form-step">
                    <h2>Desired Field of Study</h2>
                    <div class="progress-bar">
                        <div class="step-indicator">Step 1</div>
                        <div class="step-indicator">Step 2</div>
                        <div class="step-indicator active">Step 3</div>
                        <div class="step-indicator">Step 4</div>
                    </div>
                    <form id="desired-field-form">
                        <div class="mb-4">
                            <label for="program-mode">Program Mode*</label>
                            <select id="program-mode" name="program-mode" required>
                                <option value="">Select</option>
                                <option value="full-time">Full-Time</option>
                                <option value="part-time">Part-Time</option>
                            </select>
                            <span class="error" id="error-program-mode"></span>
                        </div>
                        
                        <div class="mb-4">
                            <label for="campus">Campus*</label>
                            <select id="campus" name="campus" required>
                                <option value="">Select</option>
                                <option value="main-campus">Main Campus</option>
                                <option value="satellite-campus">Satellite Campus</option>
                            </select>
                            <span class="error" id="error-campus"></span>
                        </div>
    
                        <div class="mb-4">
                            <label for="entry-year">Entry Year:</label>
                            <input type="text" id="entry-year" name="entry-year" placeholder="Entry Year" required>
                            <span class="error" id="error-entry-year"></span>
                        </div>
                        
                        <div class="mb-4">
                            <label for="field-of-study">Field of Study*</label>
                            <select id="field-of-study" name="field-of-study" required>
                                <option value="">Select</option>
                                <option value="engineering">Engineering</option>
                                <option value="medicine">Medicine</option>
                                <option value="business">Business</option>
                            </select>
                            <span class="error" id="error-field-of-study"></span>
                        </div>
    
                        <div class="mb-4">
                            <label for="gat-id">GAT ID (for master's program)</label>
                            <input type="text" id="gat-id" name="gat-id" placeholder="GAT ID (for master's program)">
                            <span class="error" id="error-gat-id"></span>
                        </div>
    
                        <div class="button-container mt-6 flex justify-between">
                            <button type="button" id="back-to-step2" onclick="prevStep()">Back</button>
                            <button type="button" id="next-to-step4" onclick="nextStep()">Next</button>
                        </div>
                    </form>
                </div>
    
                <!-- Step 4: Emergency Contact -->
                <div id="step-4" class="form-step">
                    <h2>Emergency Contact</h2>
                    <div class="progress-bar">
                        <div class="step-indicator">Step 1</div>
                        <div class="step-indicator">Step 2</div>
                        <div class="step-indicator">Step 3</div>
                        <div class="step-indicator active">Step 4</div>
                    </div>
                    <form id="emergency-contact-form">
                        <div class="mb-4">
                            <label for="emergency-contact-name">Emergency Contact Name*</label>
                            <input type="text" id="emergency-contact-name" name="emergency-contact-name" placeholder="Emergency Contact Name" required>
                        </div>
                        
                        <div class="mb-4">
                            <label for="emergency-contact-mobile">Emergency Contact Mobile*</label>
                            <input type="text" id="emergency-contact-mobile" name="emergency-contact-mobile"placeholder="Emergency Contact Mobile" required>
                        </div>
                        
                        <div class="mb-4">
                            <label for="emergency-contact-email">Emergency Contact Email*</label>
                            <input type="email" id="emergency-contact-email" name="emergency-contact-email" placeholder="Emergency Contact Email" required>
                        </div>
                        
                        <div class="mb-4">
                            <label for="physically-challenged">Are you physically challenged? (disabled)*</label>
                            <input type="radio" id="physically-challenged-yes" name="physically-challenged" value="yes" required> Yes
                            <input type="radio" id="physically-challenged-no" name="physically-challenged" value="no" required> No
                        </div>
    
                        <div class="mb-4">
                            <label for="challenged-status">If yes, please describe the nature of your status*</label>
                            <textarea type="text" id="challenged-status" name="challenged-status" placeholder="If yes, please describe the nature of your status"></textarea>
                        </div>
    
                        <div class="button-container mt-6 flex justify-between">
                            <button type="button" id="back-to-step3" onclick="prevStep()">Back</button>
                            <a href="succesful.html"><button type="button" onclick="displayConfirmation()">Finish</button></a>
                        </div>
                    </form>
                </div>
            </form>
        </div>
    </body>
    <style>
        .active {
            display: block;
        }

        .form-step {
            display: none;
        }
    </style>
</html>
