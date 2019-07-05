@extends ('backend.layouts.app')

@section ('title', __('labels.backend.contact_activities.management') . ' | ' . __('labels.backend.contact_activities.view'))

@section('breadcrumb-links')
@include('backend.contact_activities.includes.breadcrumb-links')
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        {{ __('labels.backend.contact_activities.management') }}
                        <small class="text-muted">{{ __('labels.backend.contact_activities.view') }}</small>
                    </h4>
                </div><!--col-->
            </div><!--row-->

            <div class="row mt-4 mb-4">
                <div class="col">
                    @include('backend.contact_activities.view')
                </div><!--col-->
            </div><!--row-->
        </div><!--card-body-->

        <div class="card-footer">
            <div class="row">
                <div class="col">
                    <small class="float-right text-muted">
                {{--       <strong>{{ __('labels.backend.contact_activities.content.created_at') }}:</strong> {{ $contact_activity->updated_at->timezone(get_user_timezone()) }} ({{ $contact_activity->created_at->diffForHumans() }}),--}}
                {{--       <strong>{{__('labels.backend.contact_activities.content.last_updated') }}:</strong> {{ $contact_activity->created_at->timezone(get_user_timezone()) }} ({{$contact_activity->updated_at->diffForHumans() }})--}}
                        @if ($contact_activity->trashed())
                            <strong>{{ __('labels.backend.contact_activities.content.deleted_at') }}:</strong> $contact_activity->deleted_at->timezone(get_user_timezone())  ($contact_activity->deleted_at->diffForHumans() )
                        @endif
                    </small>
                </div><!--col-->
            </div><!--row-->
        </div><!--card-footer-->
    </div><!--card-->
@endsection