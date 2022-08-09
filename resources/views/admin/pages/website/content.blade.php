@extends('admin.master.app')
@section('content')
    <div class="main-body">
        <div class="conatiner">
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Website</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body" style="display: block;">

                            <div class="form-group">
                                <label for="inputSlogan">Slogan</label>
                                <textarea id="inputSlogan" name="inputSlogan" class="form-control" rows="2" value="">
                                {{ $content->slogan }}
                                </textarea>
                            </div>
                            <div class="form-group">
                                <label for="inputAbout">About</label>
                                <textarea id="inputAbout" name="inputAbout" class="form-control" rows="2">
                                    {{ $content->about }}
                                </textarea>

                            </div>
                            <div class="form-group">
                                <label for="inputPhone">Phone</label>
                                <input id="inputPhone" name="inputPhone" class="form-control" value="{{ $content->phone }}">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Address</label>
                                <textarea id="inputAddress" name="inputAddress" class="form-control" rows="2">{{ $content->address }}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Logo</label>
                                <img src="{{ $content->logo }}" height="100" width="100" alt="">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="image" id="image">
                                    <label class="custom-file-label" for="image">Choose file</label>
                                </div>

                            </div>
                            <div class="form-group">
                                <label for="inputFacebook">Facebook</label>
                                <input id="inputFacebook" name="inputFacebook" class="form-control"
                                    value="{{ $content->facebook }}">
                            </div>
                            <div class="form-group">
                                <label for="inputTwitter">Twitter</label>
                                <input id="inputTwitter" name="inputTwitter" class="form-control"
                                    value="{{ $content->twitter }}">
                            </div>
                            <div class="form-group">
                                <label for="inputLinkedin">Linkedin</label>
                                <input id="inputLinkedin" name="inputLinkedin" class="form-control"
                                    value="{{ $content->linkedin }}">
                            </div>
                            <div class="form-group">
                                <label for="inputYoutube">Youtube</label>
                                <input id="inputYoutube" name="inputYoutube" class="form-control"
                                    value="{{ $content->youtube }}">
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
