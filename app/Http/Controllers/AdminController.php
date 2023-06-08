<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Answer;
use App\Models\Subject;
use App\Models\Question;
use App\Models\AnswerReply;
use Illuminate\Http\Request;
use App\Models\QuestionComment;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create_akun()
    {
        return view('admin.create_akun');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store_akun(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        $new_user = new User;
        $new_user->name = $request->name;
        $new_user->email = $request->email;
        $new_user->password = Hash::make($request->password);

        $new_user->save();

        return redirect('/admin/akun')->with('status', 'Akun berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show_akun()
    {
        $users = User::where('user_role', 'user')->get();
        return view('admin.akun', compact('users'));
    }

    public function edit_akun($id)
    {
        $user = User::find($id);
        return view('admin.edit_akun', compact('user'));
    }

    public function update_akun(Request $request, $id)
    {
        $user = User::find($id);

        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'username' => 'required',
            'user_role' => 'required',

        ]);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->username = $request->username;
        $user->user_role = $request->user_role;

        $user->save();

        return redirect('/admin/akun')->with('update_status', 'Akun berhasil diperbaharui');
    }

    public function delete_akun($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/admin/akun')->with('delete_status', "Akun berhasil dihapus");
    }

    public function show_subject()
    {
        $subjects = Subject::get();
        return view('admin.subject', compact('subjects'));
    }

    public function create_subject()
    {
        return view('admin.create_subject');
    }

    public function store_subject(Request $request)
    {
        $validated = $request->validate([
            'subject' => 'required',
        ]);

        $new_subject = new Subject;
        $new_subject->subject = $request->subject;

        $new_subject->save();

        return redirect('/admin/subject')->with('status', 'Subject berhasil ditambahkan');
    }

    public function edit_subject($id)
    {
        $subject = Subject::find($id);
        return view('admin.edit_subject', compact('subject'));
    }

    public function update_subject(Request $request, $id)
    {
        $subject = Subject::find($id);

        $validated = $request->validate([
            'subject' => 'required',
        ]);

        $subject->subject = $request->subject;

        $subject->save();
        return redirect('admin/subject')->with('update_status', 'Subject berhasil diperbaharui');
    }

    public function delete_subject($id)
    {
        $subject = Subject::find($id);
        $subject->delete();
        return redirect('/admin/subject')->with('delete_status', "Subject berhasil dihapus");
    }

    public function show_question()
    {
        $questions = Question::get();
        return view('admin.question', compact('questions'));
    }

    public function delete_question($id)
    {
        $question = Question::find($id);
        $question->delete();
        return redirect('/admin/question')->with('delete_status', "Question berhasil dihapus");
    }

    public function show_answer()
    {
        $answers = Answer::get();
        return view('admin.answer', compact('answers'));
    }

    public function delete_answer($id)
    {
        $answer = Answer::find($id);
        $answer->delete();
        return redirect('/admin/answer')->with('delete_status', "Answer berhasil dihapus");
    }

    public function show_reply()
    {
        $replies = AnswerReply::get();
        return view('admin.reply', compact('replies'));
    }

    public function delete_reply($id)
    {
        $replies = AnswerReply::find($id);
        $replies->delete();
        return redirect('/admin/reply')->with('delete_status', "Reply berhasil dihapus");
    }

    public function show_comment()
    {
        $comments = QuestionComment::get();
        return view('admin.comment', compact('comments'));
    }

    public function delete_comment($id)
    {
        $comments = QuestionComment::find($id);
        $comments->delete();
        return redirect('/admin/comment')->with('delete_status', "Comment berhasil dihapus");
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
