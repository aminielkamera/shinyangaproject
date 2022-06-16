<?php

namespace App\Http\Controllers;

use App\Models\AboutUs_main_content;
use App\Models\AboutUs_mission;
use App\Models\AboutUs_vission;
use App\Models\Environmental_management;
use App\Models\Exploration_operation;
use App\Models\Export_of_Gold;
use App\Models\Export_ofGold;
use App\Models\Gold_mining_operation;
use App\Models\Gold_processing_operation;
use App\Models\Health_safety;
use App\Models\Home_about;
use App\Models\Home_our_team;
use App\Models\Home_process;
use App\Models\Home_sustanability;
use App\Models\Rehabilitation_operation;
use App\Models\Responsible_mining;
use App\Models\Social_performance;
use Illuminate\Http\Request;
use Auth;
use Session;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');

    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
    }
    public  function submitHomeAboutImage(Request $request)
    {
        $validation = Validator::make($request->all(), [
            $home_aboutImage         = 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            $home_aboutDescriptions  = 'required|string',
        ]);

        $home_aboutImage                      = $request->file('home_aboutImage');
        $home_aboutDescriptions               = $request->input('home_aboutDescriptions');



        if ($request->hasFile('home_aboutImage')) {
            foreach ($home_aboutImage as $index => $file) {
                $filename =  time() . '.' . $file->getClientOriginalName();
                $filesName[] = $filename;
                $destination = public_path() . '/assets/images/resource';
                $image_path  = 'assets/images/resource';
                $file->move($destination, $filename);
            }
            if (!empty($home_aboutDescriptions)) {
                Home_about::create([
                    'image_name'   => $filename,
                    'image_path'   => $image_path,
                    'descriptions' => $home_aboutDescriptions,
                ]);
            }
        }

        return back()->with('success',  "Home about section has been uploaded");
    }

    public  function submitHomeProcessImages(Request $request)
    {
        $validation = Validator::make($request->all(), [
            $home_processImages         = 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            $titles                     = 'required|string',
            $descriptions               = 'required|string',
        ]);

        $home_processImages                   = $request->file('home_processImages');
        $titles                               = $request->input('titles');
        $descriptions                         = $request->input('descriptions');



        if ($request->hasFile('home_processImages')) {
            foreach ($home_processImages as $index => $file) {
                $filename =  time() . '.' . $file->getClientOriginalName();
                $filesName[] = $filename;
                $destination = public_path() . '/assets/images/resource';
                $image_path  = 'assets/images/resource';
                $file->move($destination, $filename);
            }
            // dd($filesName);
            if (!empty($descriptions && $titles)) {
                Home_process::create([
                    'image_names'   => serialize($filesName),
                    'image_path'    => $image_path,
                    'titles'        => serialize($titles),
                    'descriptions'  => serialize($descriptions),
                ]);
            }
        }

        return back()->with('success',  "Home process section has been uploaded");
    }


    public  function submitHomeSustanabilityImages(Request $request)
    {
        $validation = Validator::make($request->all(), [
            $home_sustanabilityImages         = 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            $titles                     = 'required|string',
            $descriptions               = 'required|string',
        ]);

        $home_sustanabilityImages                   = $request->file('home_sustanabilityImages');
        $titles                               = $request->input('titles');
        $descriptions                         = $request->input('descriptions');



        if ($request->hasFile('home_sustanabilityImages')) {
            foreach ($home_sustanabilityImages as $index => $file) {
                $filename =  time() . '.' . $file->getClientOriginalName();
                $filesName[] = $filename;
                $destination = public_path() . '/assets/images/gallery';
                $image_path  = 'assets/images/gallery';
                $file->move($destination, $filename);
            }
            // dd($filesName);
            if (!empty($descriptions && $titles)) {
                Home_sustanability::create([
                    'image_names'   => serialize($filesName),
                    'image_path'    => $image_path,
                    'titles'        => serialize($titles),
                    'descriptions'  => serialize($descriptions),
                ]);
            }
        }

        return back()->with('success',  "Home sustanability section has been uploaded");
    }

    public  function submitHomeOurTeamImages(Request $request)
    {
        $validation = Validator::make($request->all(), [
            $home_ourTeamImages     = 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            $titles                 = 'required|string',
            $position               = 'required|string',
        ]);

        $home_ourTeamImages         = $request->file('home_ourTeamImages');
        $titles                     = $request->input('titles');
        $position                   = $request->input('position');



        if ($request->hasFile('home_ourTeamImages')) {
            foreach ($home_ourTeamImages as $index => $file) {
                $filename =  time() . '.' . $file->getClientOriginalName();
                $filesName[] = $filename;
                $destination = public_path() . '/assets/images/resource';
                $image_path  = 'assets/images/resource';
                $file->move($destination, $filename);
            }
            // dd($filesName);
            if (!empty($position && $titles)) {
                Home_our_team::create([
                    'image_name'    => serialize($filesName),
                    'titles'        => serialize($titles),
                    'image_path'    => $image_path,
                    'position'      => serialize($position),
                ]);
            }
        }

        return back()->with('success',  "Home our team section has been uploaded");
    }

    public  function submitAboutUsMainContent(Request $request)
    {
        $validation = Validator::make($request->all(), [
            $image_Name              = 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            $titles                  = 'required|string',
            $text                    = 'required|string',
            $videoLink               = 'required|string',
            $descriptions            = 'required|string',
        ]);

        $image_Name                      = $request->file('image_Name');
        $titles                          = $request->input('titles');
        $text                            = $request->input('text');
        $videoLink                       = $request->input('videoLink');
        $descriptions                    = $request->input('descriptions');



        if ($request->hasFile('image_Name')) {
            foreach ($image_Name as $index => $file) {
                $filename =  time() . '.' . $file->getClientOriginalName();
                $filesName[] = $filename;
                $destination = public_path() . '/assets/images/resource';
                $image_path  = 'assets/images/resource';
                $file->move($destination, $filename);
            }
            if (!empty($descriptions)) {
                AboutUs_main_content::create([
                    'image_name'   => $filename,
                    'image_path'   => $image_path,
                    'titles'       => $titles,
                    'text'         => $text,
                    'videoLink'    => $videoLink,
                    'descriptions' => $descriptions,
                ]);
            }
        }

        return back()->with('success',  "About us section has been uploaded");
    }

    public  function submitAboutUsMission(Request $request)
    {
        $validation = Validator::make($request->all(), [
            $image_Name              = 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            $titles                  = 'required|string',
            $descriptions            = 'required|string',
        ]);

        $image_Name                      = $request->file('image_Name');
        $titles                          = $request->input('titles');
        $descriptions                    = $request->input('descriptions');



        if ($request->hasFile('image_Name')) {
            foreach ($image_Name as $index => $file) {
                $filename =  time() . '.' . $file->getClientOriginalName();
                $filesName[] = $filename;
                $destination = public_path() . '/assets/images/resource';
                $image_path  = 'assets/images/resource';
                $file->move($destination, $filename);
            }
            if (!empty($descriptions)) {
                AboutUs_mission::create([
                    'image_name'   => $filename,
                    'image_path'   => $image_path,
                    'titles'       => $titles,
                    'descriptions' => $descriptions,
                ]);
            }
        }

        return back()->with('success',  "About us mission section has been uploaded");
    }

    public  function submitAboutUsVission(Request $request)
    {
        $validation = Validator::make($request->all(), [
            $image_Name              = 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            $titles                  = 'required|string',
            $descriptions            = 'required|string',
        ]);

        $image_Name                      = $request->file('image_Name');
        $titles                          = $request->input('titles');
        $descriptions                    = $request->input('descriptions');



        if ($request->hasFile('image_Name')) {
            foreach ($image_Name as $index => $file) {
                $filename =  time() . '.' . $file->getClientOriginalName();
                $filesName[] = $filename;
                $destination = public_path() . '/assets/images/resource';
                $image_path  = 'assets/images/resource';
                $file->move($destination, $filename);
            }
            if (!empty($descriptions)) {
                AboutUs_vission::create([
                    'image_name'   => $filename,
                    'image_path'   => $image_path,
                    'titles'       => $titles,
                    'descriptions' => $descriptions,
                ]);
            }
        }

        return back()->with('success',  "About us vission section has been uploaded");
    }
    public  function submitExplorationOp(Request $request)
    {
        $validation = Validator::make($request->all(), [
            $image_Name              = 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            $titles                  = 'required|string',
            $descriptions            = 'required|string',
        ]);

        $image_Name                      = $request->file('image_Name');
        $titles                          = $request->input('titles');
        $descriptions                    = $request->input('descriptions');



        if ($request->hasFile('image_Name')) {
            foreach ($image_Name as $index => $file) {
                $filename =  time() . '.' . $file->getClientOriginalName();
                $filesName[] = $filename;
                $destination = public_path() . '/assets/images/resource';
                $image_path  = 'assets/images/resource';
                $file->move($destination, $filename);
            }
            if (!empty($descriptions)) {
                Exploration_operation::create([
                    'image_name'   => serialize($filesName),
                    'image_path'   => $image_path,
                    'titles'       => serialize($titles),
                    'descriptions' => serialize($descriptions),
                ]);
            }
        }

        return back()->with('success',  "Exploration Operation has been uploaded");
    }

    public function submitGoldMiningOp(Request $request)
    {
        $validation = Validator::make($request->all(), [
            $image_Name              = 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            $titles                  = 'required|string',
            $descriptions            = 'required|string',
        ]);

        $image_Name                      = $request->file('image_Name');
        $titles                          = $request->input('titles');
        $descriptions                    = $request->input('descriptions');



        if ($request->hasFile('image_Name')) {
            foreach ($image_Name as $index => $file) {
                $filename =  time() . '.' . $file->getClientOriginalName();
                $filesName[] = $filename;
                $destination = public_path() . '/assets/images/resource';
                $image_path  = 'assets/images/resource';
                $file->move($destination, $filename);
            }
            if (!empty($descriptions)) {
                Gold_mining_operation::create([
                    'image_name'   => serialize($filesName),
                    'image_path'   => $image_path,
                    'titles'       => serialize($titles),
                    'descriptions' => serialize($descriptions),
                ]);
            }
        }

        return back()->with('success',  "Gold Mining Operation has been uploaded");
    }

    public function submitProcessingOp(Request $request)
    {
        $validation = Validator::make($request->all(), [
            $image_Name              = 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            $titles                  = 'required|string',
            $descriptions            = 'required|string',
        ]);

        $image_Name                      = $request->file('image_Name');
        $titles                          = $request->input('titles');
        $descriptions                    = $request->input('descriptions');



        if ($request->hasFile('image_Name')) {
            foreach ($image_Name as $index => $file) {
                $filename =  time() . '.' . $file->getClientOriginalName();
                $filesName[] = $filename;
                $destination = public_path() . '/assets/images/resource';
                $image_path  = 'assets/images/resource';
                $file->move($destination, $filename);
            }
            if (!empty($descriptions)) {
                Gold_processing_operation::create([
                    'image_name'   => serialize($filesName),
                    'image_path'   => $image_path,
                    'titles'       => serialize($titles),
                    'descriptions' => serialize($descriptions),
                ]);
            }
        }

        return back()->with('success',  "Gold Processing Operation has been uploaded");
    }

    public function submitRehabilitationOp(Request $request)
    {
        $validation = Validator::make($request->all(), [
            $image_Name              = 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            $titles                  = 'required|string',
            $descriptions            = 'required|string',
        ]);

        $image_Name                      = $request->file('image_Name');
        $titles                          = $request->input('titles');
        $descriptions                    = $request->input('descriptions');



        if ($request->hasFile('image_Name')) {
            foreach ($image_Name as $index => $file) {
                $filename =  time() . '.' . $file->getClientOriginalName();
                $filesName[] = $filename;
                $destination = public_path() . '/assets/images/resource';
                $image_path  = 'assets/images/resource';
                $file->move($destination, $filename);
            }
            if (!empty($descriptions)) {
                Rehabilitation_operation::create([
                    'image_name'   => serialize($filesName),
                    'image_path'   => $image_path,
                    'titles'       => serialize($titles),
                    'descriptions' => serialize($descriptions),
                ]);
            }
        }

        return back()->with('success',  "Rehabilitation Operation has been uploaded");
    }

    public function submitExportofGoldOp(Request $request)
    {
        $validation = Validator::make($request->all(), [
            $image_Name              = 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            $titles                  = 'required|string',
            $descriptions            = 'required|string',
        ]);

        $image_Name                      = $request->file('image_Name');
        $titles                          = $request->input('titles');
        $descriptions                    = $request->input('descriptions');



        if ($request->hasFile('image_Name')) {
            foreach ($image_Name as $index => $file) {
                $filename =  time() . '.' . $file->getClientOriginalName();
                $filesName[] = $filename;
                $destination = public_path() . '/assets/images/resource';
                $image_path  = 'assets/images/resource';
                $file->move($destination, $filename);
            }
            if (!empty($descriptions)) {
                Export_ofGold::create([
                    'image_name'   => serialize($filesName),
                    'image_path'   => $image_path,
                    'titles'       => serialize($titles),
                    'descriptions' => serialize($descriptions),
                ]);
            }
        }

        return back()->with('success',  "Export of Gold has been uploaded");
    }

    public function submitResponsibleMining(Request $request)
    {
        $validation = Validator::make($request->all(), [
            $image_Name              = 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            $titles                  = 'required|string',
            $descriptions            = 'required|string',
        ]);

        $image_Name                      = $request->file('image_Name');
        $titles                          = $request->input('titles');
        $descriptions                    = $request->input('descriptions');



        if ($request->hasFile('image_Name')) {
            foreach ($image_Name as $index => $file) {
                $filename =  time() . '.' . $file->getClientOriginalName();
                $filesName[] = $filename;
                $destination = public_path() . '/assets/images/resource';
                $image_path  = 'assets/images/resource';
                $file->move($destination, $filename);
            }
            if (!empty($descriptions)) {
                Responsible_mining::create([
                    'image_name'   => serialize($filesName),
                    'image_path'   => $image_path,
                    'titles'       => serialize($titles),
                    'descriptions' => serialize($descriptions),
                ]);
            }
        }

        return back()->with('success',  "Responsible Mining image and descriptions has been uploaded");
    }

    public function submitHealthandSafety(Request $request)
    {
        $validation = Validator::make($request->all(), [
            $image_Name              = 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            $titles                  = 'required|string',
            $descriptions            = 'required|string',
        ]);

        $image_Name                      = $request->file('image_Name');
        $titles                          = $request->input('titles');
        $descriptions                    = $request->input('descriptions');



        if ($request->hasFile('image_Name')) {
            foreach ($image_Name as $index => $file) {
                $filename =  time() . '.' . $file->getClientOriginalName();
                $filesName[] = $filename;
                $destination = public_path() . '/assets/images/resource';
                $image_path  = 'assets/images/resource';
                $file->move($destination, $filename);
            }
            if (!empty($descriptions)) {
                Health_safety::create([
                    'image_name'   => serialize($filesName),
                    'image_path'   => $image_path,
                    'titles'       => serialize($titles),
                    'descriptions' => serialize($descriptions),
                ]);
            }
        }

        return back()->with('success',  "Health and Safety image and descriptions has been uploaded");
    }

    public function submitEnvronmentManagement(Request $request)
    {
        $validation = Validator::make($request->all(), [
            $image_Name              = 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            $titles                  = 'required|string',
            $descriptions            = 'required|string',
        ]);

        $image_Name                      = $request->file('image_Name');
        $titles                          = $request->input('titles');
        $descriptions                    = $request->input('descriptions');



        if ($request->hasFile('image_Name')) {
            foreach ($image_Name as $index => $file) {
                $filename =  time() . '.' . $file->getClientOriginalName();
                $filesName[] = $filename;
                $destination = public_path() . '/assets/images/resource';
                $image_path  = 'assets/images/resource';
                $file->move($destination, $filename);
            }
            if (!empty($descriptions)) {
                Environmental_management::create([
                    'image_name'   => serialize($filesName),
                    'image_path'   => $image_path,
                    'titles'       => serialize($titles),
                    'descriptions' => serialize($descriptions),
                ]);
            }
        }

        return back()->with('success',  "Environmental Management image and descriptions has been uploaded");
    }

    public function submitSocialPerformance(Request $request)
    {
        $validation = Validator::make($request->all(), [
            $image_Name              = 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            $titles                  = 'required|string',
            $descriptions            = 'required|string',
        ]);

        $image_Name                      = $request->file('image_Name');
        $titles                          = $request->input('titles');
        $descriptions                    = $request->input('descriptions');



        if ($request->hasFile('image_Name')) {
            foreach ($image_Name as $index => $file) {
                $filename =  time() . '.' . $file->getClientOriginalName();
                $filesName[] = $filename;
                $destination = public_path() . '/assets/images/resource';
                $image_path  = 'assets/images/resource';
                $file->move($destination, $filename);
            }
            if (!empty($descriptions)) {
                Social_performance::create([
                    'image_name'   => serialize($filesName),
                    'image_path'   => $image_path,
                    'titles'       => serialize($titles),
                    'descriptions' => serialize($descriptions),
                ]);
            }
        }

        return back()->with('success',  "Social Performance image and descriptions has been uploaded");
    }

    public function getHomeAboutdetails()
    {
        $details              =  Home_about::latest()->first();

        $processDetails       = Home_process::latest()->first();

        $sustanabilityDetails = Home_sustanability::latest()->first();

        $ourTeamDetails       = Home_our_team::latest()->first();

        if ($processDetails) {
            $images = unserialize($processDetails->image_names);
            $titles = unserialize($processDetails->titles);
            $descriptions = unserialize($processDetails->descriptions);
        }

        if ($sustanabilityDetails) {
            $imagesSustan = unserialize($sustanabilityDetails->image_names);
            $titlesSustan = unserialize($sustanabilityDetails->titles);
            $descriptionsSustan = unserialize($sustanabilityDetails->descriptions);
        }
        if ($ourTeamDetails) {
            $teamImage    = unserialize($ourTeamDetails->image_name);
            $teamTitles   = unserialize($ourTeamDetails->titles);
            $teamPosition = unserialize($ourTeamDetails->position);
        }
        // dd($ourTeamDetails);
        return view('home', ['details' => $details, 'titles' => $titles, 'images' => $images, 'descriptions' => $descriptions, 'imagesSustan' => $imagesSustan, 'titlesSustan' => $titlesSustan, 'descriptionsSustan' => $descriptionsSustan, 'teamImage' => $teamImage, 'teamTitles' => $teamTitles, 'teamPosition' => $teamPosition]);
    }

    public function aboutUsdetails()
    {

        $aboutData        = AboutUs_main_content::latest()->first();

        $aboutMissionData = AboutUs_mission::latest()->first();

        $aboutVissionData = AboutUs_vission::latest()->first();

        return view('about', ['aboutData' => $aboutData, 'aboutMissionData' => $aboutMissionData, 'aboutVissionData' => $aboutVissionData]);
    }

    public function getOperationDatas()
    {
        $operationData       = Home_process::latest()->first();

        if ($operationData) {
            $images = unserialize($operationData->image_names);
            $titles = unserialize($operationData->titles);
            $descriptions = unserialize($operationData->descriptions);
        }
        return view('operations', ['images' => $images, 'titles' => $titles, 'descriptions' => $descriptions]);
    }

    public function getSustanabilityDatas()
    {
        $sustanabilityDetails = Home_sustanability::latest()->first();

        if ($sustanabilityDetails) {
            $imagesSustan = unserialize($sustanabilityDetails->image_names);
            $titlesSustan = unserialize($sustanabilityDetails->titles);
            $descriptionsSustan = unserialize($sustanabilityDetails->descriptions);
        }
        return view('sustainability', ['imagesSustan' => $imagesSustan, 'titlesSustan' => $titlesSustan, 'descriptionsSustan' => $descriptionsSustan]);
    }
    public function getExplorationOpDatas()
    {
        $explorationData       = Exploration_operation::latest()->first();

        if ($explorationData) {
            $image = unserialize($explorationData->image_name);
            $titles = unserialize($explorationData->titles);
            $descriptions = unserialize($explorationData->descriptions);
        }
        return view('exploration', ['image' => $image, 'titles' => $titles, 'descriptions' => $descriptions]);
    }

    public function getGoldMiningOpDatas()
    {
        $explorationData       = Gold_mining_operation::latest()->first();

        if ($explorationData) {
            $image = unserialize($explorationData->image_name);
            $titles = unserialize($explorationData->titles);
            $descriptions = unserialize($explorationData->descriptions);
        }
        return view('gold-mining', ['image' => $image, 'titles' => $titles, 'descriptions' => $descriptions]);
    }

    public function getGoldProcessingOpDatas()
    {
        $explorationData       = Gold_processing_operation::latest()->first();

        if ($explorationData) {
            $image = unserialize($explorationData->image_name);
            $titles = unserialize($explorationData->titles);
            $descriptions = unserialize($explorationData->descriptions);
        }
        return view('processing', ['image' => $image, 'titles' => $titles, 'descriptions' => $descriptions]);
    }

    public function getRehabilitationOpDatas()
    {
        $explorationData       = Rehabilitation_operation::latest()->first();

        if ($explorationData) {
            $image = unserialize($explorationData->image_name);
            $titles = unserialize($explorationData->titles);
            $descriptions = unserialize($explorationData->descriptions);
        }
        return view('rehabilitation', ['image' => $image, 'titles' => $titles, 'descriptions' => $descriptions]);
    }

    public function getExportofGoldOpDatas()
    {
        $explorationData       = Export_ofGold::latest()->first();

        if ($explorationData) {
            $image = unserialize($explorationData->image_name);
            $titles = unserialize($explorationData->titles);
            $descriptions = unserialize($explorationData->descriptions);
        }
        return view('export_gold', ['image' => $image, 'titles' => $titles, 'descriptions' => $descriptions]);
    }
    public function getResponsibleMiningDatas()
    {
        $responsibleMiningData       = Responsible_mining::latest()->first();
        //  dd($responsibleMiningData);
        if ($responsibleMiningData) {
            $image = unserialize($responsibleMiningData->image_name);
            $titles = unserialize($responsibleMiningData->titles);
            $descriptions = unserialize($responsibleMiningData->descriptions);
        }
        // dd($image);
        return view('sustainability_one', ['image' => $image, 'titles' => $titles, 'descriptions' => $descriptions]);
    }

    public function getHealthSafetyDatas()
    {
        $healthSafetyData       = Health_safety::latest()->first();
        //  dd($healthSafetyData);
        if ($healthSafetyData) {
            $image = unserialize($healthSafetyData->image_name);
            $titles = unserialize($healthSafetyData->titles);
            $descriptions = unserialize($healthSafetyData->descriptions);
        }
        // dd($image);
        return view('sustainability_two', ['image' => $image, 'titles' => $titles, 'descriptions' => $descriptions]);
    }

    public function getEnvroManagementDatas()
    {
        $enviroManagementData       = Environmental_management::latest()->first();
        //  dd($enviroManagementData);
        if ($enviroManagementData) {
            $image = unserialize($enviroManagementData->image_name);
            $titles = unserialize($enviroManagementData->titles);
            $descriptions = unserialize($enviroManagementData->descriptions);
        }
        // dd($image);
        return view('sustainability_three', ['image' => $image, 'titles' => $titles, 'descriptions' => $descriptions]);
    }

    public function getSocialPerformanceDatas()
    {
        $socialPerformanceData       = Social_performance::latest()->first();
        //  dd($socialPerformanceData);
        if ($socialPerformanceData) {
            $image = unserialize($socialPerformanceData->image_name);
            $titles = unserialize($socialPerformanceData->titles);
            $descriptions = unserialize($socialPerformanceData->descriptions);
        }
        // dd($image);
        return view('sustainability_four', ['image' => $image, 'titles' => $titles, 'descriptions' => $descriptions]);
    }
}
