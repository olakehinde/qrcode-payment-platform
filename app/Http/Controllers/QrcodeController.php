<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateQrcodeRequest;
use App\Http\Requests\UpdateQrcodeRequest;
use App\Repositories\QrcodeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Auth;
use SimpleSoftwareIO\QrCode;
use App\Models\Qrcode as QrCodeModel;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class QrcodeController extends AppBaseController
{
    /** @var  QrcodeRepository */
    private $qrcodeRepository;

    public function __construct(QrcodeRepository $qrcodeRepo)
    {
        $this->qrcodeRepository = $qrcodeRepo;
    }

    /**
     * Display a listing of the Qrcode.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->qrcodeRepository->pushCriteria(new RequestCriteria($request));
        $qrcodes = $this->qrcodeRepository->all();

        return view('qrcodes.index')
            ->with('qrcodes', $qrcodes);
    }

    /**
     * Show the form for creating a new Qrcode.
     *
     * @return Response
     */
    public function create()
    {
        return view('qrcodes.create');
    }

    /**
     * Store a newly created Qrcode in storage.
     *
     * @param CreateQrcodeRequest $request
     *
     * @return Response
     */
    public function store(CreateQrcodeRequest $request) {
        $input = $request->all();

        // save qrcode data to database
        $qrcode = $this->qrcodeRepository->create($input); 

        // file path to save qrcode image
        $file = 'qrcodes_img/' .$qrcode->id. '.png';
        
        // generate qrcode and save qrcode image in a folder
        $generate_qrcode =   \QrCode::size(100)
                            ->format('png')
                            ->size(150)
                            ->margin(5)
                            ->generate('hello, world', public_path($file));
        
        if ($generate_qrcode) { 
            // update qrcode record in the database
            QrCodeModel::where('id', $qrcode->id)->update(['qrcode_path' => $file]);
            Flash::success('Qrcode saved successfully.') ;
        }
        else { 
            Flash::error('Error!! Cannot save. Try again');
        }

        return redirect(route('qrcodes.show', ['qrcode' => $qrcode]));
    }

    /**
     * Display the specified Qrcode.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $qrcode = $this->qrcodeRepository->findWithoutFail($id);

        if (empty($qrcode)) {
            Flash::error('Qrcode not found');

            return redirect(route('qrcodes.index'));
        }

        return view('qrcodes.show')->with('qrcode', $qrcode);
    }

    /**
     * Show the form for editing the specified Qrcode.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $qrcode = $this->qrcodeRepository->findWithoutFail($id);

        if (empty($qrcode)) {
            Flash::error('Qrcode not found');

            return redirect(route('qrcodes.index'));
        }

        return view('qrcodes.edit')->with('qrcode', $qrcode);
    }

    /**
     * Update the specified Qrcode in storage.
     *
     * @param  int              $id
     * @param UpdateQrcodeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateQrcodeRequest $request)
    {
        $qrcode = $this->qrcodeRepository->findWithoutFail($id);

        if (empty($qrcode)) {
            Flash::error('Qrcode not found');

            return redirect(route('qrcodes.index'));
        }

        $qrcode = $this->qrcodeRepository->update($request->all(), $id);

        Flash::success('Qrcode updated successfully.');

        return redirect(route('qrcodes.show', ['qrcode' => $qrcode]));
    }

    /**
     * Remove the specified Qrcode from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $qrcode = $this->qrcodeRepository->findWithoutFail($id);

        if (empty($qrcode)) {
            Flash::error('Qrcode not found');

            return redirect(route('qrcodes.index'));
        }

        $this->qrcodeRepository->delete($id);

        Flash::success('Qrcode deleted successfully.');

        return redirect(route('qrcodes.index'));
    }
}
