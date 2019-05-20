<?php namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
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
        $urls = $this->url->getAllPaginate($request->get('perpage', 100));

        return response()->json($urls);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), ['reference_url' => 'required|url']);

        if ($validator->fails())
            return response()->json(['errors' => $validator->errors()], 400);

        $token = $this->url->generateToken(8);

        return response()->json(['token' => $token], 200);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\URLs  $uRLs
     * @return Response
     */
    public function show(URLs $uRLs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\URLs  $uRLs
     * @return Response
     */
    public function update(Request $request, URLs $uRLs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\URLs  $uRLs
     * @return Response
     */
    public function destroy(URLs $uRLs)
    {
        //
    }
}
