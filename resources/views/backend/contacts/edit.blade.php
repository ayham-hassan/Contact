@extends ('backend.layouts.app')

@section ('title', __('labels.backend.contacts.management') . ' | ' . __('labels.backend.contacts.edit'))

@section('breadcrumb-links')
@include('backend.contacts.includes.breadcrumb-links')
@endsection
@section('content')
    {{ html()->modelForm($contact, 'PATCH', route('admin.contact.update', $contact->id))->acceptsFiles()->class('form-horizontal')->open() }}
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        {{ __('labels.backend.contacts.management') }}
                        <small class="text-muted">{{ __('labels.backend.contacts.edit') }}</small>
                    </h4>
                </div><!--col-->
            </div><!--row-->

            <hr />

            @include('backend.contacts.fields')

        </div><!--card-body-->

        <div class="card-footer">
            <div class="row">
                <div class="col">
                    {{ form_cancel(route('admin.contact.index'), __('buttons.general.cancel')) }}
                </div><!--col-->

                <div class="col text-right">
                    {{ form_submit(__('buttons.general.crud.update')) }}
                </div><!--row-->
            </div><!--row-->
        </div><!--card-footer-->
    </div><!--card-->
  {{ html()->closeModelForm() }}
@endsection