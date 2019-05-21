<?php namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\UrlCollection;
use App\Services\URLServices;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Validator;

class URLController extends Controller
{
    /**
     * @var URLServices
     */
    private $url;

    /**
     * URLController constructor.
     * @param URLServices $url
     */
    public function __construct(URLServices $url)
    {
        $this->url = $url;
    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        return new UrlCollection($this->url->getAllPaginate($request->get('perpage', 100)));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), ['referrer_url' => 'required|url']);

        if ($validator->fails())
            return response()->json(['errors' => $validator->errors()], 400);


        $url = $this->url->whereReferrerUrl($request->get('referrer_url'))->first();
        if ($url == null)
        {
            $token = $this->url->generateToken(8);
            $url = $this->url->create(['token' => $token, 'referrer_url' => $request->get('referrer_url')]);
        }

        return response()->json([
            'referrer_url' => $url->referrer_url,
            'shortened_url' => $url->shortened_url,
        ], 200);

    }
}
