<?php
$page = 'Home';
$pageDesc = '""';
include 'includes/header1.php';
$page = 'home';
?>

<style>
    .form-step-1 {
        display: none;
    }
</style>



<section class="step-form">
    <div class="container">
        <div class="form-step-1 step active_step">
            <div class="row">
                <div class="col-md-6">
                    <div class="step-left">
                        <span>Step 1 to 5</span>
                        <h2>
                            Let's start with a some basic information.
                        </h2>
                        <p>
                            This helps your job post stand out to the right candidates. It's the first thing they'll
                            see, so make it count!
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="step-right">
                        <form action="javascript:;">
                            <div class="d-flex flex-column form-item">
                                <label for="">
                                    <h3>Write a title for your job post</h3>
                                </label>
                                <input type="text">
                            </div>
                            <div>
                                <ul>
                                    <p>Examples</p>
                                    <li><span>•</span> Fashion designer required for an urban clothing brand.</li>
                                    <li><span>•</span> Video editor needed to create whiteboard explainer video</li>
                                    <li><span>•</span> UX designer with e-commerce experience to support app development
                                    </li>
                                </ul>
                            </div>
                            <div class="d-flex flex-column form-item">
                                <label for="">
                                    <h3>Which option best describes this job's location?</h3>
                                </label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected></option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="d-flex flex-column form-item">
                                <label for="">
                                    <h3>Choose country</h3>
                                </label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected></option>
                                    <option value="1">United States</option>
                                    <option value="2">United Kingdom</option>
                                    <option value="3">Australia</option>
                                </select>
                            </div>
                            <div class="d-flex flex-column form-item">
                                <label for="">
                                    <h3>Choose state</h3>
                                </label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected></option>
                                    <option value="1">United States</option>
                                    <option value="2">United Kingdom</option>
                                    <option value="3">Australia</option>
                                </select>
                            </div>
                            <div class="d-flex justify-content-between">
                                <button class="theme-btn8 step-btn next">Cancel</button>
                                <button class="theme-btn3 step-btn next" type="submit">Continue</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-step-2 step">
            <div class="row">
                <div class="col-12 col-lg-6 ">
                    <div class="step-left">
                        <span>Step 2 to 5</span>
                        <h2>
                            Screening Questions
                        </h2>
                        <p>
                            Adding screening questions will help you to get deeper understanding of job seekers
                            qualification
                        </p>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="step-right">
                        <div class="expe-box">
                            <div>
                                <h1>How many years of experience do you have (skill)?</h1>
                                <i class="fas fa-times-circle"></i>
                            </div>
                            <form action="">
                                <ul>
                                    <li>
                                        <label for="skill">skill</label>
                                        <input type="text" id="skill">
                                    </li>
                                    <li>
                                        <label for="Ideal-Answer">Ideal Answer</label>
                                        <input type="text" id="Ideal-Answer">
                                    </li>
                                    <li>
                                        <h2>
                                            Must have qualification
                                        </h2>
                                    </li>
                                </ul>
                            </form>
                        </div>
                        <div class="expe-box">
                            <div>
                                <h1>How many years of experience do you have (skill)?</h1>
                                <i class="fas fa-times-circle"></i>
                            </div>
                            <form action="">
                                <ul>
                                    <li>
                                        <label for="skill">skill</label>
                                        <input type="text" id="skill">
                                    </li>
                                    <li>
                                        <label for="Ideal-Answer">Ideal Answer</label>
                                        <input type="text" id="Ideal-Answer">
                                    </li>
                                    <li>
                                        <h2>
                                            Must have qualification
                                        </h2>
                                    </li>
                                </ul>
                            </form>
                        </div>
                        <div class="expe-box">
                            <div>
                                <h1>How many years of experience do you have (skill)?</h1>
                                <i class="fas fa-times-circle"></i>
                            </div>
                            <form action="">
                                <ul>
                                    <li>
                                        <label for="skill">skill</label>
                                        <input type="text" id="skill">
                                    </li>
                                    <li>
                                        <label for="Ideal-Answer">Ideal Answer</label>
                                        <input type="text" id="Ideal-Answer">
                                    </li>
                                    <li>
                                        <h2>
                                            Must have qualification
                                        </h2>
                                    </li>
                                </ul>
                            </form>
                        </div>
                        <div class="expe-box-form">
                            <div data-bs-toggle="modal" data-bs-target="#AddQuestions">
                                <i class="fas fa-plus-circle"></i>
                                <h2>Add your question</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="step-left">
                        <h2>
                            Add job details...
                        </h2>
                        <p>
                            This helps your job post stand out to the right candidates. It's the first thing they'll
                            see, so make it count!
                        </p>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="step-right">
                        <form action="javascript:;">
                            <div class="d-flex flex-column form-item">
                                <h3>Job type</h3>
                                <div class="job-type row">
                                    <div class="col-md-4 my-2">
                                        <div class="job-type-item select1 ">
                                            <input type="checkbox" id="fullTime1_alt">
                                            <label for="fullTime1_alt">
                                                <i class="fa-solid fa-plus"></i>
                                                Full time
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4 my-2">
                                        <div class="job-type-item select1 ">
                                            <input type="checkbox" id="fullTime2_alt">
                                            <label for="fullTime2_alt">
                                                <i class="fa-solid fa-plus"></i>
                                                Part Time
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4 my-2">
                                        <div class="job-type-item select1 ">
                                            <input type="checkbox" id="fullTime3_alt">
                                            <label for="fullTime3_alt">
                                                <i class="fa-solid fa-plus"></i>
                                                Contract
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4 my-2">
                                        <div class="job-type-item select1 ">
                                            <input type="checkbox" id="fullTime4_alt">
                                            <label for="fullTime4_alt">
                                                <i class="fa-solid fa-plus"></i>
                                                Temporary
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4 my-2">
                                        <div class="job-type-item select1 ">
                                            <input type="checkbox" id="fullTime5_alt">
                                            <label for="fullTime5_alt">
                                                <i class="fa-solid fa-plus"></i>
                                                Internship
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4 my-2">
                                        <div class="job-type-item select1 ">
                                            <input type="checkbox" id="c2c_alt">
                                            <label for="c2c_alt">
                                                <i class="fa-solid fa-plus"></i>
                                                C 2 C
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-column form-item">
                                <label for="">
                                    <h3>What is your authorization requirement?</h3>
                                </label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected></option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="d-flex flex-column form-item">
                                <h3>Expected hours per week</h3>
                                <div class="d-flex align-items-center justify-content-between gap-3">
                                    <label for="">From</label>
                                    <input type="text" name="radio-group">
                                    <label for="">To</label>
                                    <input type="text" id="" name="radio-group">
                                </div>
                            </div>
                            <div class="d-flex flex-column form-item">
                                <h3>Schedule</h3>
                                <div class="job-type row">
                                    <div class="col-md-4 my-2">
                                        <div class="job-type-item select2">
                                            <input type="checkbox" id="fullTime1">
                                            <label for="fullTime1">
                                                <i class="fa-solid fa-plus"></i>
                                                8 hour shift
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4 my-2">
                                        <div class="job-type-item select2">
                                            <input type="checkbox" id="fullTime2">
                                            <label for="fullTime2">
                                                <i class="fa-solid fa-plus"></i>
                                                4 hour shift
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-5 my-2">
                                        <div class="job-type-item select2 ">
                                            <input type="checkbox" id="fullTime4">
                                            <label for="fullTime4">
                                                <i class="fa-solid fa-plus"></i>
                                                Monday to Friday
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 my-2">
                                        <div class="job-type-item select2 ">
                                            <input type="checkbox" id="fullTime5">
                                            <label for="fullTime5">
                                                <i class="fa-solid fa-plus"></i>
                                                12 hour shift
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 d-flex justify-content-between">
                                <button class="theme-btn8 step-btn prev" type="submit">Previews</button>
                                <button class="theme-btn3 step-btn next" type="submit">Continue</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-step-3 step">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="step-left">
                        <span>Step 3 to 5</span>
                        <h2>
                            Add pay and benefits...
                        </h2>
                        <p>
                            This helps your job post stand out to the right candidates. It's the first thing they'll
                            see, so make it count!
                        </p>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="step-right">
                        <form action="javascript:;">
                            <div class="d-flex flex-column form-item">
                                <h3>Pay</h3>
                                <p>This helps your job post stand out to the right candidates. It's the first thing
                                    they'll see, so make it count! </p>
                                <div class="row">
                                    <div class="col-12 col-lg-6 d-flex align-items-center gap-3">
                                        <label for="">Rate</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>per hour</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-lg-6"></div>
                                </div>
                                <div class="min-max">
                                    <label for="">Minimum</label>
                                    <input type="text" name="radio-group">
                                    <label for="">Maximum</label>
                                    <input type="text" id="" name="radio-group">
                                </div>
                            </div>
                            <div class="d-flex flex-column form-item mb-3">
                                <h3>Benefits</h3>
                                <p>This helps your job post stand out to the right candidates. It's the first thing
                                    they'll see, so make it count! </p>
                                <div class="job-type row">
                                    <div class="col-md-5 my-2">
                                        <div class="job-type-item select3 ">
                                            <input type="checkbox" id="health1_alt">
                                            <label for="health1_alt">
                                                <i class="fa-solid fa-plus"></i>
                                                Health insurance
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-5 my-2">
                                        <div class="job-type-item select3 ">
                                            <input type="checkbox" id="health2_alt">
                                            <label for="health2_alt">
                                                <i class="fa-solid fa-plus"></i>
                                                Paid time off
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-5 my-2">
                                        <div class="job-type-item select3 ">
                                            <input type="checkbox" id="health3_alt">
                                            <label for="health3_alt">
                                                <i class="fa-solid fa-plus"></i>
                                                Dental insurance
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-5 my-2">
                                        <div class="job-type-item select3 ">
                                            <input type="checkbox" id="health4_alt">
                                            <label for="health4_alt">
                                                <i class="fa-solid fa-plus"></i>
                                                Vision insurance
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 my-2">
                                        <div class="job-type-item select3 ">
                                            <input type="checkbox" id="health5_alt">
                                            <label for="health5_alt">
                                                <i class="fa-solid fa-plus"></i>
                                                Add you own benefits
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12 col-lg-6">
                    <div class="step-left">
                        <h2>
                            Describe the job....
                        </h2>
                        <p>
                            This helps your job post stand out to the right candidates. It's the first thing they'll
                            see, so make it count!
                        </p>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="step-right">
                        <form action="javascript:;">
                            <div class="d-flex flex-column form-item">
                                <h3>Job discription</h3>
                                <p>This helps your job post stand out to the right candidates. It's the first thing
                                    they'll see, so make it count! </p>
                                <div class="row">
                                    <div class="col-12">
                                        <div id="editor">
                                            <p>This is some sample content.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-column form-item">
                                <div class="col-8">
                                    <label for="imgUpload">
                                        <div class="imgUpload" id="imgUpload">
                                            <input type="file" id="fileInput" onchange="previewImage()"
                                                class="upload" />
                                            <i class="fa-regular fa-upload"></i>
                                            <span>Upload a PDF or document</span>
                                        </div>
                                    </label>
                                    <div id="imagePreview" class="position-relative">
                                        <img id="preview" src="#" alt="Image Preview">
                                        <span class="cross" id="cross">x</span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <p class="big-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia illo sed
                                    delectus praesentium quae accusamus modi magni doloremque recusandae voluptas?</p>
                                <div class="mt-4 d-flex justify-content-between">
                                    <button class="theme-btn8 step-btn prev" type="submit">Previews</button>
                                    <button class="theme-btn3 step-btn next" type="submit">Continue</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-step-4 step">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="step-left">
                        <span>Step 4 to 5</span>
                        <h2>
                            Set preferences
                        </h2>
                        <p>
                            This helps your job post stand out to the right candidates. It's the first thing they'll
                            see, so make it count!
                        </p>
                    </div>
                </div>
                <div class="col-12  col-lg-6">
                    <div class="step-right">
                        <form action="javascript:;">
                            <div class="d-flex flex-column form-item">
                                <h3>Communication preferences</h3>
                                <p>This helps your job post stand out to the right candidates. It's the first thing
                                    they'll see, so make it count! </p>
                            </div>
                            <div class="d-flex flex-column form-item">
                                <label for="">
                                    <h3>Send daily updates to</h3>
                                </label>
                                <input type="text">
                                <div class="mt-3 ">

                                    <button class="theme-btn3 step-btn next1" type="submit"><i
                                            class="fa-solid fa-plus"></i>Add email</button>
                                </div>
                                <div class="mt-4 custom-checkbox">
                                    <input type="checkbox" class="form-check-input" id="Java">
                                    <label class="form-check-label" for="Java">
                                        <span class="cust-checkbox"></span>
                                        <p>
                                            Get an new email when an application is received.</p>
                                    </label>
                                </div>
                            </div>
                            <div class="d-flex flex-column form-item">
                                <label for="">
                                    <h3>Let potential candidates contact you through</h3>
                                </label>
                                <div class="radio-container step5">
                                    <div class="d-flex gap-5">
                                        <input type="radio" id="radio3" name="radio-group">
                                        <label for="radio3">Email</label>
                                        <input type="radio" id="radio4" name="radio-group">
                                        <label for="radio4">Phone</label>
                                    </div>
                                    <br>
                                    <div>
                                        <input type="radio" id="radio5" name="radio-group">
                                        <label for="radio5">Dont Show my Information</label>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-column form-item">
                                <label for="">
                                    <h3>Hiring timeline</h3>
                                </label>
                                <p>This helps your job post stand out to the right candidates. It's the first thing
                                    they'll see, so make it count! </p>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>1 - 2 weeks</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="d-flex flex-column form-item">
                                <label for="">
                                    <h3>Rejection notification to the applicant</h3>
                                </label>
                                <textarea id="w3review" name="w3review" rows="6"></textarea>

                            </div>
                            <div class="mt-4 d-flex justify-content-between">
                                <button class="theme-btn8 step-btn prev" type="submit">Previews</button>
                                <button class="theme-btn3 step-btn next" type="submit">Continue</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-step-6 step executive-pg">
            <div class="row">
                <div class="col col-md-12">
                    <div class="step-left">
                        <span>Step 5 to 5</span>
                        <h2>
                            Review
                        </h2>
                        <p>
                            Please review your job post details before you post it.
                        </p>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Job title</td>
                                    <td>Data Scientist</td>
                                    <td><i class="fa-light fa-pen"></i></td>
                                </tr>
                                <tr>
                                    <td>Which option best describes this job's position?</td>
                                    <td>Onsite</td>
                                    <td><i class="fa-light fa-pen"></i></td>
                                </tr>
                                <tr>
                                    <td>Location?</td>
                                    <td>USA, New York, Manhattan</td>
                                    <td><i class="fa-light fa-pen"></i></td>
                                </tr>
                                <tr>
                                    <td>How many years of experience do you have (skill)?</td>
                                    <td>XXXXX XXX</td>
                                    <td><i class="fa-light fa-pen"></i></td>
                                </tr>
                                <tr>
                                    <td>How many years of experience do you have (skill 2)?</td>
                                    <td>XXXXX XXX</td>
                                    <td><i class="fa-light fa-pen"></i></td>
                                </tr>
                                <tr>
                                    <td>How many years of experience do you have (skill 3)?</td>
                                    <td>XXXXX XXX</td>
                                    <td><i class="fa-light fa-pen"></i></td>
                                </tr>
                                <tr>
                                    <td>Job type</td>
                                    <td>US citizen</td>
                                    <td><i class="fa-light fa-pen"></i></td>
                                </tr>
                                <tr>
                                    <td>What is your authorization requirement?</td>
                                    <td>XXXXX XXX</td>
                                    <td><i class="fa-light fa-pen"></i></td>
                                </tr>
                                <tr>
                                    <td>Expected hours per week</td>
                                    <td>XXXXX XXX</td>
                                    <td><i class="fa-light fa-pen"></i></td>
                                </tr>
                                <tr>
                                    <td>Schedule</td>
                                    <td>XXXXX XXX</td>
                                    <td><i class="fa-light fa-pen"></i></td>
                                </tr>
                                <tr>
                                    <td>Pay (per hour)</td>
                                    <td>$25 - $30</td>
                                    <td><i class="fa-light fa-pen"></i></td>
                                </tr>
                                <tr>
                                    <td>Benefits</td>
                                    <td>Dental insurance, Vision insurance</td>
                                    <td><i class="fa-light fa-pen"></i></td>
                                </tr>
                                <tr>
                                    <td>Job description</td>
                                    <td><a href="javascript:;">view</a></td>
                                    <td><i class="fa-light fa-pen"></i></td>
                                </tr>
                                <tr>
                                    <td>Application collection</td>
                                    <td>Talenttube Dashboard</td>
                                    <td><i class="fa-light fa-pen"></i></td>
                                </tr>
                                <tr>
                                    <td>Send daily updates to</td>
                                    <td>Email</td>
                                    <td><i class="fa-light fa-pen"></i></td>
                                </tr>
                                <tr>
                                    <td>Would you like the candidates to contact you through messages?</td>
                                    <td>Yes</td>
                                    <td><i class="fa-light fa-pen"></i></td>
                                </tr>
                                <tr>
                                    <td>Rejection notification to the applicant</td>
                                    <td><a href="javascript:;">view</a></td>
                                    <td><i class="fa-light fa-pen"></i></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="mt-4 d-flex justify-content-end gap-4">
                            <button class="theme-btn8 step-btn prev" type="submit">Save Draft</button>
                            <button class="theme-btn3 step-btn" type="submit" data-bs-target="#success-post"
                                data-bs-toggle="modal">Post job</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include 'includes/footer.php';
$page = 'home';
?>