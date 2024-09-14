<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Test;
use App\Models\TestApplication;
use App\Http\Requests\StoreTestApplicationRequest;
use App\Http\Requests\UpdateTestApplicationRequest;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class TestApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testApplications = TestApplication::with(['patient', 'test'])->get(); // Carregar pacientes e testes relacionados
        return view('test-applications.index', compact('testApplications'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $patients = Patient::where('is_anonymous', false)->where('user_id', auth()->id())->get(); // Obter todos os pacientes não anônimos do usuário autenticado
        $tests = Test::all(); // Obter todos os testes
        return view('test-applications.create', compact('patients', 'tests'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTestApplicationRequest $request)
    {
        // Criar uma nova aplicação de teste
        $testApplication = new TestApplication();
        $testApplication->fill($request->validated());
        $testApplication->user_id = auth()->id();
        $testApplication->save();

        
        // Gerar o QR Code e salvar no campo correto
        $qrCode = QrCode::size(300)->generate(route('test-applications.show', $testApplication));
        $testApplication->qr_code = $qrCode;
        $testApplication->save();

        return redirect()->route('test-applications.share', $testApplication);
    }

    public function share(TestApplication $testApplication)
    {
        return view('test-applications.share', compact('testApplication'));
    }
    
    public function qrcode(TestApplication $testApplication)
    {
        return view('test-applications.qrcode', compact('testApplication'));
    }

    /**
     * Display the specified resource.
     */
    public function show(TestApplication $testApplication)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TestApplication $testApplication)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTestApplicationRequest $request, TestApplication $testApplication)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TestApplication $testApplication)
    {
        //
    }
}
