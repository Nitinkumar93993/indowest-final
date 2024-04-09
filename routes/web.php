<?php


use Illuminate\Support\Facades\Route;
use App\Models\sub_admin;
use App\Http\Controllers\create_set_authority;
use App\Http\Controllers\Update_text;
use App\Models\TeamMember;
use App\Models\Updated;
use App\Http\Controllers\Teams;
use App\Http\Controllers\Testimonial;
use App\Models\TestimonialData;
use App\Http\Controllers\EventManagerController;
use App\Models\EventManager;
use App\Http\Controllers\CourseController;
use App\Models\Courses;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the 'web' middleware group. Make something great!
|
*/

Route::get('/', function () {

    $teamMembers = TeamMember::all();
    $testimonialIndex = TestimonialData::all();
    $eventIndex = EventManager::all();
    $courseIndexView = Courses::all();

    return view('index', [
        'teamMembers' =>  $teamMembers,
        'testimonialIndex' => $testimonialIndex,
        'eventIndex' => $eventIndex,
        'courseIndexView' => $courseIndexView,
    ]);
});


Route::get('/189-Invitation-Round', function () {
    return view('Invitation-Round');
});
Route::get('/about-our-courses-CAEL', function () {
    return view('about-our-courses-CAEL');
});
Route::get('/about-our-courses-CD-IELTS', function () {
    return view('about-our-courses-CD-IELTS');
});
Route::get('/about-our-courses-CELPIP', function () {
    return view('about-our-courses-CELPIP');
});
Route::get('/about-our-courses-DUOLINGO', function () {
    return view('about-our-courses-DUOLINGO');
});
Route::get('/about-our-courses-French', function () {
    return view('about-our-courses-French');
});
Route::get('/about-our-courses-German', function () {
    return view('about-our-courses-German');
});
Route::get('/about-our-courses-IELTS', function () {
    return view('about-our-courses-IELTS');
});
Route::get('/about-our-courses-OET', function () {
    return view('about-our-courses-OET');
});
Route::get('/about-our-courses-PTE', function () {
    return view('about-our-courses-PTE');
});
Route::get('/about-our-courses-Spanish', function () {
    return view('about-our-courses-Spanish');
});
Route::get('/about-our-courses-Spoken-English', function () {
    return view('about-our-courses-Spoken-English');
});
Route::get('/about-our-courses-TOEFL', function () {
    return view('about-our-courses-TOEFL');
});
Route::get('/about-our-courses-UKVI-IELTS', function () {
    return view('about-our-courses-UKVI-IELTS');
});
Route::get('/about-our-courses', function () {
    return view('about-our-courses');
});
Route::get('/about-reality-test', function () {
    return view('about-reality-test');
});
Route::get('/about-us', function () {
    return view('about-us');
});
Route::get('/aus', function () {
    return view('aus');
});
Route::get('/blog-grid-2', function () {
    return view('blog-grid-2');
});
Route::get('/blog-grid', function () {
    return view('blog-grid');
});
Route::get('/blog-single', function () {
    return view('blog-single');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/book-reality-test', function () {
    return view('book-reality-test');
});
Route::get('/bookcounselling', function () {
    return view('bookcounselling');
});
Route::get('/Bridging-Visa-Australia', function () {
    return view('Bridging-Visa-Australia');
});
Route::get('/Change-Course-Australia', function () {
    return view('Change-Course-Australia');
});
Route::get('/Citizenship-Program', function () {
    return view('Citizenship-Program');
});
Route::get('/contact-experts', function () {
    return view('contact-experts');
});
Route::get('/contact-us', function () {
    return view('contact-us');
});
Route::get('/CRS-Calculator', function () {
    return view('CRS-Calculator');
});
Route::get('/dependent-visa-Australia', function () {
    return view('dependent-visa-Australia');
});
Route::get('/dependent-visa-Canada', function () {
    return view('dependent-visa-Canada');
});
Route::get('/dependent-visa-New-Zealand', function () {
    return view('dependent-visa-New-Zealand');
});
Route::get('/dependent-visa-United-Kingdom', function () {
    return view('dependent-visa-United-Kingdom');
});
Route::get('/dependent-visa-United-States', function () {
    return view('dependent-visa-United-States');
});
Route::get('/dependent-visa', function () {
    return view('dependent-visa');
});
Route::get('/diplomatic-Offical-visa', function () {
    return view('diplomatic-Offical-visa');
});
Route::get('/e-ticketing', function () {
    return view('e-ticketing');
});
Route::get('/Employer-Sponsored-Visa', function () {
    return view('Employer-Sponsored-Visa');
});
Route::get('/English-Language-Assessment', function () {
    return view('English-Language-Assessment');
});
Route::get('/error', function () {
    return view('error');
});

Route::get('/exam-booking', function () {
    return view('exam-booking');
});
Route::get('/EXPRESS-ENTRY', function () {
    return view('EXPRESS-ENTRY');
});
Route::get('/FAMILY-SPOUSAL-SPONSORSHIP-(AUS)', function () {
    return view('FAMILY-SPOUSAL-SPONSORSHIP-(AUS)');
});
Route::get('/FAMILY-SPOUSAL-SPONSORSHIP', function () {
    return view('FAMILY-SPOUSAL-SPONSORSHIP');
});
Route::get('/family-visa', function () {
    return view('family-visa');
});
Route::get('/faq', function () {
    return view('faq');
});
Route::get('/forex', function () {
    return view('forex');
});
Route::get('/General-Skilled-Migration', function () {
    return view('General-Skilled-Migration');
});
Route::get('/ger', function () {
    return view('ger');
});
Route::get('/gmat', function () {
    return view('gmat');
});
Route::get('/gre', function () {
    return view('gre');
});




Route::get('/team-details/{id}', [Teams::class, 'showMemberDetails']);
Route::get('/indowest-career-counsel', function () {
    return view('indowest-career-counsel');
});
Route::get('/inhouse-courses', function () {
    return view('inhouse-courses');
});
Route::get('/international-english-language-telent-hunt', function () {
    return view('international-english-language-telent-hunt');
});
Route::get('/INVESTOR-ENTREPRENEUR-VISA', function () {
    return view('INVESTOR-ENTREPRENEUR-VISA');
});
Route::get('/LMIA', function () {
    return view('LMIA');
});
Route::get('/master-classes', function () {
    return view('master-classes');
});
Route::get('/MELBOURNE', function () {
    return view('MELBOURNE');
});
Route::get('/news-article', function () {
    return view('news-article');
});
Route::get('/NOVA-SCOTIA', function () {
    return view('NOVA-SCOTIA');
});
Route::get('/nz', function () {
    return view('nz');
});
Route::get('/online-coaching', function () {
    return view('online-coaching');
});
Route::get('/ONTARIO', function () {
    return view('ONTARIO');
});
Route::get('/our-branch-ambala-cantt', function () {
    return view('our-branch-ambala-cantt');
});
Route::get('/our-branch-ambala-city', function () {
    return view('our-branch-ambala-city');
});
Route::get('/Parent-VISA', function () {
    return view('Parent-VISA');
});
Route::get('/Partner-VISA', function () {
    return view('Partner-VISA');
});
Route::get('/permanent-resi-Australia', function () {
    return view('permanent-resi-Australia');
});
Route::get('/permanent-resi-Canada', function () {
    return view('permanent-resi-Canada');
});
Route::get('/permanent-resi', function () {
    return view('permanent-resi');
});
Route::get('/POST-GRADUATION-WORK-PERMIT', function () {
    return view('POST-GRADUATION-WORK-PERMIT');
});
Route::get('/posts-article', function () {
    return view('posts-article');
});
Route::get('/practic-packs', function () {
    return view('practic-packs');
});
Route::get('/pte', function () {
    return view('pte');
});
Route::get('/sat', function () {
    return view('sat');
});
Route::get('/Score-Converter', function () {
    return view('Score-Converter');
});
Route::get('/Skill-Assessment-Australia', function () {
    return view('Skill-Assessment-Australia');
});
Route::get('/SPOUSAL-OPEN-WORK-PERMIT', function () {
    return view('SPOUSAL-OPEN-WORK-PERMIT');
});
Route::get('/spouse-visa-Australia', function () {
    return view('spouse-visa-Australia');
});
Route::get('/spouse-visa-Canada', function () {
    return view('spouse-visa-Canada');
});
Route::get('/spouse-visa-New-Zealand', function () {
    return view('spouse-visa-New-Zealand');
});
Route::get('/spouse-visa-United-Kingdom', function () {
    return view('spouse-visa-United-Kingdom');
});
Route::get('/spouse-visa-United-States', function () {
    return view('spouse-visa-United-States');
});
Route::get('/spouse-visa', function () {
    return view('spouse-visa');
});
Route::get('/Student-Visa-Australia', function () {
    return view('Student-Visa-Australia');
});
Route::get('/student-visa', function () {
    return view('student-visa');
});
Route::get('/STUDY-PERMIT-EXTENSION', function () {
    return view('STUDY-PERMIT-EXTENSION');
});
Route::get('/study-visa-Australia', function () {
    return view('study-visa-Australia');
});
Route::get('/study-visa-canada', function () {
    return view('study-visa-canada');
});
Route::get('/study-visa-Cyprus', function () {
    return view('study-visa-Cyprus');
});
Route::get('/study-visa-Czech-Republic', function () {
    return view('study-visa-Czech-Republic');
});
Route::get('/study-visa-Denmark', function () {
    return view('study-visa-Denmark');
});
Route::get('/study-visa-eliglibity', function () {
    return view('study-visa-eliglibity');
});
Route::get('/study-visa-France', function () {
    return view('study-visa-France');
});
Route::get('/study-visa-Germany', function () {
    return view('study-visa-Germany');
});
Route::get('/study-visa-Greece', function () {
    return view('study-visa-Greece');
});
Route::get('/study-visa-Hungary', function () {
    return view('study-visa-Hungary');
});
Route::get('/study-visa-Ireland', function () {
    return view('study-visa-Ireland');
});
Route::get('/study-visa-Italy', function () {
    return view('study-visa-Italy');
});
Route::get('/study-visa-Latvia', function () {
    return view('study-visa-Latvia');
});
Route::get('/study-visa-Lithuania', function () {
    return view('study-visa-Lithuania');
});
Route::get('/study-visa-Malta', function () {
    return view('study-visa-Malta');
});
Route::get('/study-visa-Netherlands', function () {
    return view('study-visa-Netherlands');
});
Route::get('/study-visa-New-Zealand', function () {
    return view('study-visa-New-Zealand');
});
Route::get('/study-visa-Poland', function () {
    return view('study-visa-Poland');
});
Route::get('/study-visa-Singapore', function () {
    return view('study-visa-Singapore');
});
Route::get('/study-visa-South-Korea', function () {
    return view('study-visa-South-Korea');
});
Route::get('/study-visa-Switzerland', function () {
    return view('study-visa-Switzerland');
});
Route::get('/study-visa-United-Kingdom', function () {
    return view('study-visa-United-Kingdom');
});
Route::get('/study-visa-United-States', function () {
    return view('study-visa-United-States');
});
Route::get('/studyvisa', function () {
    return view('studyvisa');
});
Route::get('/SUPER-VISA-VISITOR-VISA', function () {
    return view('SUPER-VISA-VISITOR-VISA');
});
// Route::get('/team-details', function(){ return view('team-details');});

Route::get('/team', function () {
    return view('team');
});
Route::get('/temporary-Work-visa', function () {
    return view('temporary-Work-visa');
});
Route::get('/term-condition', function () {
    return view('term-condition');
});
Route::get('/test-prep-materials', function () {
    return view('test-prep-materials');
});
Route::get('/testimonials', function () {
    return view('testimonials');
});
Route::get('/toefl', function () {
    return view('toefl');
});
Route::get('/Tourist-Visa-Australia', function () {
    return view('Tourist-Visa-Australia');
});
Route::get('/uk', function () {
    return view('uk');
});
Route::get('/usa', function () {
    return view('usa');
});
Route::get('/visitor-visa-Australia', function () {
    return view('visitor-visa-Australia');
});
Route::get('/visitor-visa-Canada', function () {
    return view('visitor-visa-Canada');
});
Route::get('/visitor-visa-Dubai', function () {
    return view('visitor-visa-Dubai');
});
Route::get('/visitor-visa-Germany', function () {
    return view('visitor-visa-Germany');
});
Route::get('/visitor-visa-New-Zealand', function () {
    return view('visitor-visa-New-Zealand');
});
Route::get('/visitor-visa-United-Kingdom', function () {
    return view('visitor-visa-United-Kingdom');
});
Route::get('/visitor-visa-United-States', function () {
    return view('visitor-visa-United-States');
});
Route::get('/visitor-visa', function () {
    return view('visitor-visa');
});
Route::get('/web-media-gallery', function () {
    return view('web-media-gallery');
});
Route::get('/work-visa-Australia', function () {
    return view('work-visa-Australia');
});
Route::get('/work-visa-Canada', function () {
    return view('work-visa-Canada');
});
Route::get('/work-visa', function () {
    return view('work-visa');
});


// admin


// user dashboard
Route::get('/dashboard', function () {
    return view('/Dashboard/user_dashboard');
});
Route::get('/Admin/dashboard', function () {
    return view('/Admin/dashboard');
});

Route::get('/Admin/sub-admin/create', [create_set_authority::class, 'create']);


Route::post('/Admin/sub-admin/create', [create_set_authority::class, 'put_data']);



Route::get('/Admin/view-all-sub-admin', [create_set_authority::class, 'view_sub_admin']);
Route::get('/Admin/login', function () {
    return view('/Admin/login');
});
Route::get("/Sub-admin/sa-header", function () {
    return view("/Sub-admin/sa-header");
});

Route::get("/Admin/delete/{id}", [create_set_authority::class, 'delete_data']);
Route::get("/Admin/edit/{id}", [create_set_authority::class, 'edit']);
Route::post("/Admin/update/{id}", [create_set_authority::class, 'update']);
// Route::get('/admin/teams', function () {
//     return view("/Admin/team-member");
// });


Route::get('/Admin/TeamMember', [Teams::class, 'creating']);
Route::post('/Admin/TeamMember', [Teams::class, 'fillTeamMember']);
Route::get('/Admin/view-team', [Teams::class, 'viewTeam']);

Route::get('/Admin/testimonial', [Testimonial::class, 'create_test']);
Route::post('/Admin/testimonial', [Testimonial::class, 'add_test']);
Route::get('/Admin/view_testimonial', [Testimonial::class, 'view_testimonial']);

Route::get('/Admin/event_manage', [EventManagerController::class, 'create_event']);
Route::post('/Admin/event_manage', [EventManagerController::class, 'insert_event']);
Route::get('/Admin/all-event', [EventManagerController::class, 'view_all_event']);

Route::get('/events', [EventManagerController::class, 'view_Every_Events']);

Route::get('/Admin/all-courses', [CourseController::class, 'displayIndex']);
Route::post('/Admin/create-course', [CourseController::class, 'createIndex']);
Route::get('/Admin/create-course', [CourseController::class, 'courseView']);

Route::get('/Admin/edit-course/{course_id}', [CourseController::class, 'editCourse']);
Route::post('/Admin/update-course/{course_id}', [CourseController::class, 'updateCourse']);


// nitin
Route::get('/Indo-west-ca', function () {
    return view('Indo-west-ca');
});
Route::get('//about-our-courses-IELTS-GT-90', function () {
    return view('about-our-courses-IELTS-GT-90');
});
Route::get('//book-now-reality-test', function () {
    return view('book-now-reality-test');
});
Route::get('//feedback-page', function () {
    return view('feedback-page');
});
Route::get('//Complaint-page', function () {
    return view('Complaint-page');
});
