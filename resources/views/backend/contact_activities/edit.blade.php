@extends ('backend.layouts.app')

@section ('title', __('labels.backend.contact_activities.management') . ' | ' . __('labels.backend.contact_activities.edit'))

@section('breadcrumb-links')
@include('backend.contact_activities.includes.breadcrumb-links')
@endsection
@section('content')
    {{ html()->modelForm($contact_activity, 'PATCH', route('admin.contact_activity.update', $contact_activity->id))->acceptsFiles()->class('form-horizontal')->open() }}
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        {{ __('labels.backend.contact_activities.management') }}
                        <small class="text-muted">{{ __('labels.backend.contact_activities.edit') }}</small>
                    </h4>
                </div><!--col-->
            </div><!--row-->

            <hr />

            @include('backend.contact_activities.fields')

        </div><!--card-body-->

        <div class="card-footer">
            <div class="row">
                <div class="col">
                    {{ form_cancel(route('admin.contact_activity.index'), __('buttons.general.cancel')) }}
                </div><!--col-->

                <div class="col text-right">
                    {{ form_submit(__('buttons.general.crud.update')) }}
                </div><!--row-->
            </div><!--row-->
        </div><!--card-footer-->
    </div><!--card-->
  {{ html()->closeModelForm() }}
@endsection