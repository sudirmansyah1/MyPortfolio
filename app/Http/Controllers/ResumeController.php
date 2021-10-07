<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Hash;
use Session;
use File;
use App\Models\EducationModel;
use App\Models\ExperienceModel;
use App\Models\SkillsModel;

class ResumeController extends Controller
{
    public function index() {
        $education = EducationModel::get();
        $experience = ExperienceModel::get();
        $skills = SkillsModel::get();
        return view('resume', ['education' => $education, 'experience' => $experience, 'skills' => $skills]);
    }

    // Admin Education
    public function adminEducation() {
        $education = EducationModel::get();
        return view('admin.education.list', ['educationlist'=>$education]);
    }

    public function showAddEducationForm() {
        return view('admin.education.add');
    }

    public function AddEducationProcess(Request $req) {
        $rules = [
            'institute' => 'required',
            'from_date' => 'required|min:4|max:4|numeric',
            'end_date' => 'required|min:4|max:4|numeric',
        ];

        $validator = Validator::make($req->all(), $rules);

        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($req->all);
        }

        EducationModel::insert([
            'from_date' => $req->from_date,
            'end_date' => $req->end_date,
            'institute' => $req->institute,
        ]);

        return redirect('/admin/education');
    }

    public function showEditEducationForm($id) {
        $educations = EducationModel::where('id', $id)->get();
        return view('admin.education.edit',['educationdata'=>$educations]);
    }

    public function EditEducationProcess(Request $req) {
        $rules = [
            'institute' => 'required',
            'from_date' => 'required|min:4|max:4|numeric',
            'end_date' => 'required|min:4|max:4|numeric',
        ];

        $validator = Validator::make($req->all(), $rules);

        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($req->all);
        }

        EducationModel::where('id', $req->id)->update([
            'from_date' => $req->from_date,
            'end_date' => $req->end_date,
            'institute' => $req->institute,
        ]);

        return redirect('/admin/education');
    }

    public function DeleteEducationProcess($id) {

        EducationModel::where('id', $id)->delete();

        return redirect('/admin/education');
    }

    // Admin Experience
    public function adminExperience() {
        $experience = ExperienceModel::get();
        return view('admin.experience.list', ['experience'=>$experience]);
    }

    public function showAddExperienceForm() {
        return view('admin.experience.add');
    }

    public function AddExperienceProcess(Request $req) {
        $rules = [
            'company' => 'required',
            'position' => 'required',
            'from_date' => 'required',
            'end_date' => 'required',
            'description' => 'required|min:0|max:150',
        ];

        $validator = Validator::make($req->all(), $rules);

        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($req->all);
        }

        ExperienceModel::insert([
            'from_date' => $req->from_date,
            'end_date' => $req->end_date,
            'company' => $req->company,
            'position' => $req->position,
            'description' => $req->description,
        ]);

        return redirect('/admin/experience');
    }

    public function showEditExperienceForm($id) {
        $experience = ExperienceModel::where('id', $id)->get();
        return view('admin.experience.edit',['experiencedata'=>$experience]);
    }

    public function EditExperienceProcess(Request $req) {
        $rules = [
            'company' => 'required',
            'position' => 'required',
            'from_date' => 'required',
            'end_date' => 'required',
            'description' => 'required|min:0|max:150',
        ];

        $validator = Validator::make($req->all(), $rules);

        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($req->all);
        }

        ExperienceModel::where('id', $req->id)->update([
            'from_date' => $req->from_date,
            'end_date' => $req->end_date,
            'company' => $req->company,
            'position' => $req->position,
            'description' => $req->description,
        ]);

        return redirect('/admin/experience');
    }

    public function DeleteExperienceProcess($id) {

        ExperienceModel::where('id', $id)->delete();

        return redirect('/admin/experience');
    }

    // Admin Skills
    public function adminSkills() {
        $skills = SkillsModel::get();
        return view('admin.skills.list', ['skills'=>$skills]);
    }

    public function showAddSkillsForm() {
        return view('admin.skills.add');
    }

    public function AddSkillsProcess(Request $req) {
        $rules = [
            'skill_name' => 'required',
            'color' => 'required',
            'percent' => 'required|numeric|max:3',
        ];

        $validator = Validator::make($req->all(), $rules);

        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($req->all);
        }

        SkillsModel::insert([
            'skill_name' => $req->skill_name,
            'color' => $req->color,
            'percent' => $req->percent,
        ]);

        return redirect('/admin/skills');
    }

    public function showEditSkillsForm($id) {
        $skills = SkillsModel::where('sid', $id)->get();
        return view('admin.skills.edit',['skillsdata'=>$skills]);
    }

    public function EditSkillsProcess(Request $req) {
        $rules = [
            'skill_name' => 'required',
            'color' => 'required',
            'percent' => 'required|numeric|max:3',
        ];

        $validator = Validator::make($req->all(), $rules);

        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($req->all);
        }

        SkillsModel::where('sid', $req->sid)->update([
            'skill_name' => $req->skill_name,
            'color' => $req->color,
            'percent' => $req->percent,
        ]);

        return redirect('/admin/skills');
    }

    public function DeleteSkillsProcess($id) {

        SkillsModel::where('sid', $id)->delete();

        return redirect('/admin/skills');
    }
    
}
