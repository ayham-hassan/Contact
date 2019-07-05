@extends ('backend.layouts.app')

@section ('title', __('labels.backend.customer_addresses.management') . ' | ' . __('labels.backend.customer_addresses.create'))

@section('breadcrumb-links')
  @include('backend.customer_addresses.includes.breadcrumb-links')
@endsection

@section('content')
    {{ html()->form('POST', route('admin.customer_address.store'))->acceptsFiles()->class('form-horizontal')->open() }}
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        {{ __('labels.backend.customer_addresses.management') }}
                        <small class="text-muted">{{ __('labels.backend.customer_addresses.create') }}</small>
                    </h4>
                </div><!--col-->
            </div><!--row-->

            <hr />
            @include('backend.customer_addresses.fields')
        </div><!--card-body-->

        <div class="card-footer clearfix">
            <div class="row">
                <div class="col">
                    {{ form_cancel(route('admin.customer_address.index'), __('buttons.general.cancel')) }}
                </div><!--col-->
                <div class="col text-right">
                    {{form_submit(__('buttons.general.crud.create')) }}
                </div><!--col-->
            </div><!--row-->
        </div><!--card-footer-->
    </div><!--card-->
{{ html()->form()->close() }}
@endsection