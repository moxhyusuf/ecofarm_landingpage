<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\SiteSetting;
use Illuminate\Http\Request;

class SiteSettingController extends Controller
{
    public function index()
    {
        $site_setting = SiteSetting::first();
        $program_sidebar = Program::Get();
        return view('admin.site-setting.index', compact('site_setting', 'program_sidebar'));
    }

    public function update(Request $request, $id)
    {
        $site_setting = SiteSetting::findOrFail($id);
        // $data = [
        //     'no_telepon' => $request->no_telepon,
        //     'waktu_operasional' => $request->waktu_operasional,
        //     'email' => $request->email,
        //     'website' => $request->website,
        //     'layanan' => $request->layanan,
        //     'visi' => $request->visi,
        //     'alumni' => $request->alumni,
        //     'mitra' => $request->mitra,
        // ];

        // if ($request->hasFile('foto_struktur')) {
        //     if ($information->foto_struktur && Storage::disk('public')->exists($information->foto_struktur)) {
        //         Storage::disk('public')->delete($information->foto_struktur);
        //     }
        //     $data['foto_struktur'] = $request->file('foto_struktur')->store('information', 'public');
        // }

        // if ($request->hasFile('foto_alur_uji')) {
        //     if ($information->foto_alur_uji && Storage::disk('public')->exists($information->foto_alur_uji)) {
        //         Storage::disk('public')->delete($information->foto_alur_uji);
        //     }
        //     $data['foto_alur_uji'] = $request->file('foto_alur_uji')->store('information', 'public');
        // }

        $site_setting->update($request->all());
        return redirect()->route('site_setting.index');
    }
}
