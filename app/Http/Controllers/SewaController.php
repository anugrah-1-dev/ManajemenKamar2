<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sewa;

class SewaController extends Controller
{
    public function formulir(Request $request)
{
    $jenis = $request->query('jenis'); // terima parameter dari URL
    return view('formulirPendaftaran', compact('jenis'));
}

public function store(Request $request)
{
    $validated = $request->validate([
        'nama_lengkap' => 'required|string|max:255',
        'email' => 'required|email',
        'no_hp' => 'required|string|max:20',
        'asal_kota' => 'required|string|max:100',
        'periode_masuk' => 'required|date',
        'lama_menginap' => 'required|integer',
        'tipe_pembayaran' => 'required|in:dp,full',
        'jenis_program' => 'required|string',
    ]);

    $sewa = Sewa::create($validated);

    // Redirect ke halaman payment yang benar, yaitu dengan ID
    return redirect()->route('payment.show', $sewa->id)->with('success', 'Pendaftaran berhasil!');
}

    public function payment(Request $request)
    {
        $sewa = Sewa::latest()->first(); // atau berdasarkan ID tertentu
        return view('payment', compact('sewa'));
    }
    
    public function submitPayment(Request $request)
    {
        $request->validate([
            'bukti_pembayaran' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
    
        $file = $request->file('bukti_pembayaran');
        $namaFile = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('bukti_pembayaran'), $namaFile);
    
        return redirect('/payment')->with('success', 'Bukti pembayaran berhasil diunggah!');
    }
}
