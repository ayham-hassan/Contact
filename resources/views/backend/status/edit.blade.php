@extends ('backend.layouts.app')

@section ('title', __('labels.backend.status.management') . ' | ' . __('labels.backend.status.edit'))

@section('breadcrumb-links')
@include('backend.status.includes.breadcrumb-links')
@endsection
@section('content')
    {{ html()->modelForm($status, 'PATCH', route('admin.status.update', $status->id))->acceptsFiles()->class('form-horizontal')->open() }}
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        {{ __('labels.backend.status.management') }}
                        <small class="text-muted">{{ __('labels.backend.status.edit') }}</small>
                    </h4>
                </div><!--col-->
            </div><!--row-->

            <hr />

            @include('backend.status.fields')

        </div><!--card-body-->

        <div class="card-footer">
            <div class="row">
                <div class="col">
                    {{ form_cancel(route('admin.status.index'), __('buttons.general.cancel')) }}
                </div><!--col-->

                <div class="col text-right">
                    {{ form_submit(__('buttons.general.crud.update')) }}
                </div><!--row-->
            </div><!--row-->
        </div><!--card-footer-->
    </div><!--card-->
  {{ html()->closeModelForm() }}
@endsection