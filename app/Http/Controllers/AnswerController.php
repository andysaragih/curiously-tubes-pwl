<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use App\Models\AnswerReply;
use Illuminate\Http\Request;
use App\Models\QuestionComment;
use App\Models\Like;


class AnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user.answer');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create_answer(Question $question)
    {
        return view('user.answer', ['question' => $question]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store_answer(Request $request)
    {
        $validated = $request->validate([
            'answer' => 'required',
            'user_id' => 'required',
            'question_id' => 'required',
            'gambar' => 'image|mimes:jpg,jpeg,png|max:4096'
        ]);

        $new_answer = new Answer;
        $new_answer->answer = $request->answer;
        $new_answer->user_id = $request->user_id;
        $new_answer->question_id = $request->question_id;

        if ($request->hasFile('gambar')) {
            // define image location in local path
            $location = public_path('/img');

            // ambil file img dan simpan ke local server
            $request->file('gambar')->move($location, $request->file('gambar')->getClientOriginalName());

            // simpan nama file di database
            $new_answer->gambar = $request->file('gambar')->getClientOriginalName();
        }

        $new_answer->save();

        return redirect()->route('show.answer', ['question' => $request->question_id])->with('status', 'Jawaban berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Question $question)
    {
        // dd($question);
        // $answers = Answer::where('question_id', $question->id)->orderBy('created_at', 'desc')->get();
        // $comments = QuestionComment::where('question_id', $question->id)->orderBy('created_at', 'asc')->get();
        // $replies = AnswerReply::where('answer_id', $question->answer->id)->get();
        return view('user.question_page', [
            'question' => $question,
            // 'answers' => $answers,
            // 'comments' => $comments,
            // 'replies' => $replies
        ]);
    }

    public function store_comment(Request $request)
    {
        // dd($request);
        $validated = $request->validate([
            'comment' => 'required',
            'user_id' => 'required',
            'question_id' => 'required',
        ]);

        $new_comment = new QuestionComment;
        $new_comment->comment = $request->comment;
        $new_comment->user_id = $request->user_id;
        $new_comment->question_id = $request->question_id;

        $new_comment->save();

        return redirect()->route('show.answer', ['question' => $request->question_id])->with('status_comment', 'Anda berhasil mengirimkan komentar');
    }

    public function store_reply(Request $request)
    {
        // dd($request);
        $validated = $request->validate([
            'reply' => 'required',
            'user_id' => 'required',
            'answer_id' => 'required',
        ]);

        $new_reply = new AnswerReply;
        $new_reply->reply = $request->reply;
        $new_reply->user_id = $request->user_id;
        $new_reply->answer_id = $request->answer_id;

        $new_reply->save();

        return redirect()->route('show.answer', ['question' => $request->question_id])->with('status_reply', 'Anda berhasil me-reply jawaban ini');
    }

    public function store_like(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required',
            'answer_id' => 'required',
        ]);

        $new_like = new Like;
        $new_like->user_id = $request->user_id;
        $new_like->answer_id = $request->answer_id;

        $new_like->save();

        return redirect()->route('show.answer', ['question' => $request->question_id]);
    }

    public function delete_like(Answer $answer)
    {
        $like = Like::where('user_id', auth()->user()->id)
            ->where('answer_id', $answer->id)->first();
        $question = $answer->question;
        $like->delete();
        return redirect()->route('show.answer', ['question' => $question->id]);
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
