<?php


namespace App\Http\Controllers;

use App\Mail\ArticleMail;
use App\Mail\ContactMail;
use App\Mail\ContactUsMail;
use App\Mail\JoinMail;
use App\Models\Article;
use App\Models\IndexBody;
use App\Models\Journal;
use App\Models\Journal_settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class MainController extends Controller
{

    public function index()
    {
        $journals = Journal::all();
        return view('user.pages.index', compact('journals'));
    }

    public function journal()
    {
        $journals = Journal::all();
        $indexing_bodies = IndexBody::all();
        return view('user.pages.journal', compact('journals', 'indexing_bodies'));
    }

    public function journal_details($journal_name)
    {
        $journal = Journal::with(['journal_overview', 'journal_matrix', 'volume' => function ($q) {
            $q->OrderByDesc('id')->whereNot('is_active', false);
        }, 'volume.issue' => function ($q) {
            $q->OrderByDesc('id')->whereNot('is_active', false);
        }])->where('acronym', $journal_name)->first();
        // dd($journal->toArray());
        return view('user.pages.journal-details', compact('journal'));
    }

    public function article($id, $code)
    {
        $journal = Journal::where('acronym', $id)->first();
        $article = Article::with('volume', 'issue', 'article_details', 'journal')->where('article_code', $code)->first();
        return view('user.pages.article', compact('journal', 'article'));
    }

    public function sendEmail(Request $req)
    {

        $datas = [
            'name' => $req->name,
            'email' => $req->email,
            'number' => $req->number,
            'query_type' => $req->query_type,
            'message' => $req->contact_msgbox,
            'thankyou_msg' => 'Thank you for reaching out to us! Your message has been received. Our team will review your inquiry and get back to you shortly. If you have any urgent matters, feel free to contact us directly at submission@guinnesspress.org.'
        ];
        $data = DB::table('categories')
            ->select('*')
            ->join('category_settings', 'category_settings.category_id', '=', 'categories.category_id')
            ->where(['parent_id' => null, 'setting_name' => 'title'])
            ->orderBy('categories.category_id', 'desc')
            ->limit(6)
            ->get();
        $subcategories = DB::table('categories')
            ->select('*')
            ->join('category_settings', 'category_settings.category_id', '=', 'categories.category_id')
            ->orderBy('categories.category_id', 'desc')
            ->get();
        // Mail::to('submission@guinnesspress.org')->send(new ContactMail($data));
        return view('front-end/thanku', 'datas', 'data', 'subcategories');
    }

    public function sendArticleEmail(Request $req)
    {

        // dd($req->file('article_fileattachment'));


        //  if ($fileattachment->getError() == 1) {
        //         $max_size = $data['fileattachment']->getMaxFileSize() / 1024 / 1024;  // Get size in Mb
        //         $error = 'The document size must be less than ' . $max_size . 'Mb.';
        //         return redirect()->back()->with('flash_danger', $error);
        //     }
        $fileattachment = array();
        $files = $req->file('article_fileattachment');
        foreach ($files as $file) {
            $fileattachment[] = $file->store('public/article-files');
        }

        $datas = [

            'manuscript_title' => $req->manuscript_title,
            'journal' => $req->journal,
            'fileattachment' => $fileattachment,
            'author_name' => $req->author_name,
            'author_number' => $req->author_number,
            'author_email' => $req->author_email,
            'author_country' => $req->author_country,
            'affiliation' => $req->affiliation,
            'thankyou_msg' => 'Thank you for submitting your article to Guinness Press! Your contribution is important to us. Our team will carefully review your work, and we will be in touch shortly. If you have any urgent inquiries, feel free to contact us at info@guinnesspress.org. We appreciate your interest in Guinness Press!'

        ];


        $data = DB::table('categories')
            ->select('*')
            ->join('category_settings', 'category_settings.category_id', '=', 'categories.category_id')
            ->where(['parent_id' => null, 'setting_name' => 'title'])
            ->orderBy('categories.category_id', 'desc')
            ->limit(6)
            ->get();
        $subcategories = DB::table('categories')
            ->select('*')
            ->join('category_settings', 'category_settings.category_id', '=', 'categories.category_id')
            ->orderBy('categories.category_id', 'desc')
            ->get();
        // Mail::to('submission@guinnesspress.org')->send(new ArticleMail($datas));
        return view('front-end/thanku', compact('datas', 'data', 'subcategories'));
    }

    public function editorial_board($journal_name)
    {
        $journal =  Journal::with('board_member')->where('acronym', $journal_name)->first();
        return view('user.pages.editorial-board', compact('journal'));
    }

    public function article_details()
    {
        $data = DB::table('categories')
            ->select('*')
            ->join('category_settings', 'category_settings.category_id', '=', 'categories.category_id')
            ->where(['parent_id' => null, 'setting_name' => 'title'])
            ->orderBy('categories.category_id', 'desc')
            ->limit(6)
            ->get();
        $subcategories = DB::table('categories')
            ->select('*')
            ->join('category_settings', 'category_settings.category_id', '=', 'categories.category_id')
            ->orderBy('categories.category_id', 'desc')
            ->get();
        return view('front-end/article-details', compact('data', 'subcategories'));
    }

    public function issue_details()
    {
        $data = DB::table('categories')
            ->select('*')
            ->join('category_settings', 'category_settings.category_id', '=', 'categories.category_id')
            ->where(['parent_id' => null, 'setting_name' => 'title'])
            ->orderBy('categories.category_id', 'desc')
            ->limit(6)
            ->get();
        $subcategories = DB::table('categories')
            ->select('*')
            ->join('category_settings', 'category_settings.category_id', '=', 'categories.category_id')
            ->orderBy('categories.category_id', 'desc')
            ->get();
        return view('front-end/issue-details', 'data', 'subcategories');
    }

    public function download_citation()
    {
        $data = DB::table('categories')
            ->select('*')
            ->join('category_settings', 'category_settings.category_id', '=', 'categories.category_id')
            ->where(['parent_id' => null, 'setting_name' => 'title'])
            ->orderBy('categories.category_id', 'desc')
            ->limit(6)
            ->get();
        $subcategories = DB::table('categories')
            ->select('*')
            ->join('category_settings', 'category_settings.category_id', '=', 'categories.category_id')
            ->orderBy('categories.category_id', 'desc')
            ->get();
        return view('front-end/download-citation', 'data', 'subcategories');
    }





    public function article_processing_charges()
    {
        $data = DB::table('categories')
            ->select('*')
            ->join('category_settings', 'category_settings.category_id', '=', 'categories.category_id')
            ->where(['parent_id' => null, 'setting_name' => 'title'])
            ->orderBy('categories.category_id', 'desc')
            ->limit(6)
            ->get();
        $subcategories = DB::table('categories')
            ->select('*')
            ->join('category_settings', 'category_settings.category_id', '=', 'categories.category_id')
            ->orderBy('categories.category_id', 'desc')
            ->get();
        return view('front-end/article-processing-charges', compact('data', 'subcategories'));
    }



    public function refund_policy()
    {
        $data = DB::table('categories')
            ->select('*')
            ->join('category_settings', 'category_settings.category_id', '=', 'categories.category_id')
            ->where(['parent_id' => null, 'setting_name' => 'title'])
            ->orderBy('categories.category_id', 'desc')
            ->limit(6)
            ->get();
        $subcategories = DB::table('categories')
            ->select('*')
            ->join('category_settings', 'category_settings.category_id', '=', 'categories.category_id')
            ->orderBy('categories.category_id', 'desc')
            ->get();
        return view('front-end/refund-policy', compact('data', 'subcategories'));
    }

    public function payment_options()
    {
        $data = DB::table('categories')
            ->select('*')
            ->join('category_settings', 'category_settings.category_id', '=', 'categories.category_id')
            ->where(['parent_id' => null, 'setting_name' => 'title'])
            ->orderBy('categories.category_id', 'desc')
            ->limit(6)
            ->get();
        $subcategories = DB::table('categories')
            ->select('*')
            ->join('category_settings', 'category_settings.category_id', '=', 'categories.category_id')
            ->orderBy('categories.category_id', 'desc')
            ->get();
        return view('front-end/payment-options', compact('data', 'subcategories'));
    }

    public function blogs()
    {
        $data = DB::table('categories')
            ->select('*')
            ->join('category_settings', 'category_settings.category_id', '=', 'categories.category_id')
            ->where(['parent_id' => null, 'setting_name' => 'title'])
            ->orderBy('categories.category_id', 'desc')
            ->limit(6)
            ->get();
        $subcategories = DB::table('categories')
            ->select('*')
            ->join('category_settings', 'category_settings.category_id', '=', 'categories.category_id')
            ->orderBy('categories.category_id', 'desc')
            ->get();
        return view('front-end/blogs', compact('data', 'subcategories'));
    }

    public function user_information()
    {
        $data = DB::table('categories')
            ->select('*')
            ->join('category_settings', 'category_settings.category_id', '=', 'categories.category_id')
            ->where(['parent_id' => null, 'setting_name' => 'title'])
            ->orderBy('categories.category_id', 'desc')
            ->limit(6)
            ->get();
        $subcategories = DB::table('categories')
            ->select('*')
            ->join('category_settings', 'category_settings.category_id', '=', 'categories.category_id')
            ->orderBy('categories.category_id', 'desc')
            ->get();
        return view('front-end/user-information', compact('data', 'subcategories'));
    }

    public function dashboard()
    {
        $data = DB::table('categories')
            ->select('*')
            ->join('category_settings', 'category_settings.category_id', '=', 'categories.category_id')
            ->where(['parent_id' => null, 'setting_name' => 'title'])
            ->orderBy('categories.category_id', 'desc')
            ->limit(6)
            ->get();
        $subcategories = DB::table('categories')
            ->select('*')
            ->join('category_settings', 'category_settings.category_id', '=', 'categories.category_id')
            ->orderBy('categories.category_id', 'desc')
            ->get();
        return view('front-end/dashboard', compact('data', 'subcategories'));
    }

    public function journal_issue($id, $issue, $issue_no)
    {
        $journal = Journal::withWhereHas('volume', function ($q) use ($issue_no) {
            $q->withWhereHas('issue', function ($q) use ($issue_no) {
                $q->where('issue_id', $issue_no);
            });
        })->where('acronym', $id)->first();
        $volume_id = $journal->volume->first()->id;
        $issue_id = $journal->volume->first()->issue->first()->id;
        $articles = Article::with('article_details', 'journal')
            ->where('volume_id', $volume_id)
            ->where('issue_id', $issue_id)
            ->where(
                'journal_id',
                $journal->id
            )->get();
        return view('user.pages.issue', compact('journal', 'articles'));
    }


    public function join_board($journal_name)
    {
        $journal = Journal::where('acronym', $journal_name)->first();
        return view('user.pages.join-board', compact('journal'));
    }

    public function senDBoardEmail(Request $req)
    {

        $fileattachment = array();
        $files = $req->file('picture');
        foreach ($files as $file) {
            $fileattachment[] = $file->store('public/article-files');
        }
        $datas = [
            'name' => $req->name,
            'journal_name' => $req->journal_name,
            'picture' => $fileattachment,
            'email' => $req->email,
            'affiliation' => $req->affiliation,
            'scopus_id' => $req->scopus_id,
            'scholar_id' => $req->scholar_id,
            'biography' => $req->biography,
            'thankyou_msg' => 'Thank you for submitting your article to Guinness Press! Your contribution is important to us. Our team will carefully review your work, and we will be in touch shortly. If you have any urgent inquiries, feel free to contact us at info@guinnesspress.org. We appreciate your interest in Guinness Press!'
        ];
        Mail::to('saifuddin@guinnesspress.org')->send(new JoinMail($datas));
        return view('user.pages.thanku', compact('datas'));
    }

    public function submitContact()
    {
        $data = request()->toArray();

        $message = "
    Hello,
    You have received a new message from the contact form on your website.
    Details are as follows:
    - Name: " . $data['name'] . "
    - Email: " . $data['email'] . "
    - Phone Number: " . $data['number'] . "
    - Source: " . $data['source'] . "
    - Message: " . $data['message'] . "
    
    Best regards,
    Your Website Team
        ";
        $recipientEmail = 'hassanahmed3652@gmail.com';
        Mail::raw($message, function ($mail) use ($data, $recipientEmail) {
            $mail->to($recipientEmail)
                ->subject('New Message from Contact Form')
                ->from($data['email'], $data['name']);
        });
        return redirect('/thank-you');
    }
}
