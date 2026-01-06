<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProgramController extends Controller
{
    public function show($id)
    {
        $program_sidebar = Program::Get();
        $program = Program::findOrFail($id);
        return view('admin.program.index', compact('program', 'program_sidebar'));
    }

    public function update(Request $request, $id)
    {
        $program = Program::findOrFail($id);

        $data = $request->only([
            'nama_program',
            'slug',
            'status',
            'deskripsi',
            'ringkasan',
            'durasi',
            'target_peserta',
            'lokasi',
        ]);

        if ($request->hasFile('thumb_url')) {
            if ($program->thumb_url && Storage::disk('public')->exists($program->thumb_url)) {
                Storage::disk('public')->delete($program->thumb_url);
            }

            $data['thumb_url'] = $request->file('thumb_url')->store('program', 'public');
        }


        $program->update($data);
        return redirect()->route('program.show', $id);
    }
}
