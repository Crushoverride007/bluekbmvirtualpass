@extends('admin.setting.index')

@section('admin.setting.breadcrumbs')
    {{ Breadcrumbs::render('front-end-setting') }}
@endsection

@section('admin.setting.layout')
    <div class="col-md-9">
        <div class="card">
            <div class="card-body">
                <form class="form-horizontal" role="form" method="POST" action="{{ route('admin.setting.homepage-update') }}">
                    @csrf
                    <fieldset class="setting-fieldset">
                        <legend class="setting-legend">{{ __('Welcome Screen Setting') }}</legend>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="summernote" name="welcome_screen" id="comment">{{setting('welcome_screen')}}</textarea>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    

                    <div class="row">
                        <div class="form-group col-md-6">
                            <button type="submit" class="btn btn-primary">
                                <span>{{ __('Update Front-end Setting') }}</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
