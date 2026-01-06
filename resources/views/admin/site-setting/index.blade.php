@extends('admin.components.layout')

@push('styles')
@endpush

@section('title', 'Site Setting')

@section('content')
    <div class="page-heading">
        <h3>Site Setting</h3>
    </div>
    <div class="page-content">
        <div class="row p-0 m-0">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Pengaturan Website</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('site_setting.update', $site_setting->id ?? 1) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label class="form-label">No Telepon</label>
                                <input type="text" class="form-control" name="no_telepon" value="{{ $site_setting->no_telepon ?? '' }}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" value="{{ $site_setting->email ?? '' }}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Website</label>
                                <input type="text" class="form-control" name="website_url" value="{{ $site_setting->website_url ?? '' }}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Facebook</label>
                                <input type="text" class="form-control" name="facebook" value="{{ $site_setting->facebook ?? '' }}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Instagram</label>
                                <input type="text" class="form-control" name="instagram" value="{{ $site_setting->instagram ?? '' }}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Linkedin</label>
                                <input type="text" class="form-control" name="linkedin" value="{{ $site_setting->linkedin ?? '' }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Youtube</label>
                                <input type="text" class="form-control" name="youtube" value="{{ $site_setting->youtube ?? '' }}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">alamat</label>
                                <textarea class="form-control" name="alamat" rows="3" required>{{ $site_setting->alamat ?? '' }}</textarea>
                            </div>

                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-success">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
