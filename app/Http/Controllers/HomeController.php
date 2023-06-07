<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\User;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::id()) {
            $user_role = Auth()->user()->user_role;

            if ($user_role == 'admin') {
                return view('admin.index');
            } else if ($user_role == 'user') {
                $questions = Question::orderBy('created_at', 'desc')->paginate(10);
                $subject = Subject::get();
                return view('user.question', [
                    'questions' => $questions,
                    'subjects' => $subject
                ]);
            } else {
                return redirect()->back();
            }
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store_question(Request $request)
    {
        $validated = $request->validate([
            'question' => 'required',
            'user_id' => 'required',
            'subject' => 'required',
            'gambar' => 'image|mimes:jpg,jpeg,png|max:4096'
        ]);

        $new_question = new Question;
        $new_question->question = $request->question;
        $new_question->user_id = $request->user_id;
        $new_question->subject_id = $request->subject;

        if ($request->hasFile('gambar')) {
            // define image location in local path
            $location = public_path('/img');

            // ambil file img dan simpan ke local server
            $request->file('gambar')->move($location, $request->file('gambar')->getClientOriginalName());

            // simpan nama file di database
            $new_question->gambar = $request->file('gambar')->getClientOriginalName();
        }

        $new_question->save();

        return redirect('/home')->with('status', 'Pertanyaan berhasil ditambahkan');
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $questions = Question::where('question', 'like', '%' . $search . '%')->orderBy('created_at', 'desc')->paginate(10);
        $subject = Subject::get();

        return view('user.question', [
            'questions' => $questions,
            'subjects' => $subject
        ]);
    }

    public function filter(Request $request)
    {
        $subject = $request->query('subject');
        $subjects = Subject::get();

        $questions = Question::select('questions.*')
            ->join('subjects', 'questions.subject_id', '=', 'subjects.id')
            ->where('subjects.subject', $subject)
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('user.question', compact('questions', 'subject', 'subjects'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
