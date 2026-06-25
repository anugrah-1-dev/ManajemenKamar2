<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Sewa;
use Illuminate\Support\Facades\Storage;
use App\Models\Payment;

class PaymentsController extends Controller
{
    public function show($id)
    {
        $sewa = Sewa::findOrFail($id);
    
        // Struktur harga berdasarkan jenis program dan durasi
        $harga = [
            'BIE+ VVIP Camp' => [
                1 => 150000,
                7 => 350000,
                14 => 500000,
                30 => 900000,
                60 => 1600000,
                90 => 2100000,
            ],
            'BIE+ VIP Camp' => [
                1 => 125000,
                7 => 300000,
                14 => 450000,
                30 => 800000,
                60 => 1500000,
                90 => 2000000,
            ],
            'BIE+ Barack' => [
                1 => 100000,
                7 => 250000,
                14 => 350000,
                30 => 600000,
                60 => 1200000,
                90 => 1800000,
            ],
        ];
    
        $jenis = $sewa->jenis_program;
        $durasi = $sewa->lama_menginap;
    
        // Ambil harga berdasarkan jenis program dan durasi
        $harga_selected = $harga[$jenis][$durasi] ?? 0;
    
        $biaya_admin = 48;
        $harga_total = $harga_selected + $biaya_admin;
    
        return view('payment', compact(
            'sewa',
            'harga_selected',
            'biaya_admin',
            'harga_total'
        ));
    }
    

    // Menyimpan bukti pembayaran dan detail harga
    public function storePayment(Request $request, $id)
{
    $sewa = Sewa::findOrFail($id);

    // Validasi input
    $validated = $request->validate([
        'harga_selected' => 'required|numeric',
        'biaya_admin' => 'required|numeric',
        'harga_total' => 'required|numeric',
        'bukti_pembayaran' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
    ]);

    // Simpan file ke storage
    if ($request->hasFile('bukti_pembayaran')) {
        $path = $request->file('bukti_pembayaran')->store('bukti_pembayaran', 'public');
        $validated['bukti_pembayaran'] = $path;
    }

    // Simpan data ke tabel payments
    Payment::create([
        'sewa_id' => $sewa->id,
        'harga_selected' => $validated['harga_selected'],
        'biaya_admin' => $validated['biaya_admin'],
        'harga_total' => $validated['harga_total'],
        'bukti_pembayaran' => $validated['bukti_pembayaran'],
    ]);

    return back()->with('upload_success', true);
}
}
