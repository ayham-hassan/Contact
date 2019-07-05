@extends ('backend.layouts.app')

@section ('title', __('labels.backend.contacts.management') . ' | ' . __('labels.backend.contacts.view'))

@section('breadcrumb-links')
@include('backend.contacts.includes.breadcrumb-links')
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        {{ __('labels.backend.contacts.management') }}
                        <small class="text-muted">{{ __('labels.backend.contacts.view') }}</small>
                    </h4>
                </div><!--col-->
            </div><!--row-->

            <div class="row mt-4 mb-4">
                <div class="col">
                    @include('backend.contacts.view')
                </div><!--col-->
            </div><!--row-->
        </div><!--card-body-->

        <div class="card-footer">
            <div class="row">
                <div class="col">
                    <small class="float-right text-muted">
                {{--       <strong>{{ __('labels.backend.contacts.content.created_at') }}:</strong> {{ $contact->updated_at->timezone(get_user_timezone()) }} ({{ $contact->created_at->diffForHumans() }}),--}}
                {{--       <strong>{{__('labels.backend.contacts.content.last_updated') }}:</strong> {{ $contact->created_at->timezone(get_user_timezone()) }} ({{$contact->updated_at->diffForHumans() }})--}}
                        @if ($contact->trashed())
                            <strong>{{ __('labels.backend.contacts.content.deleted_at') }}:</strong> $contact->deleted_at->timezone(get_user_timezone())  ($contact->deleted_at->diffForHumans() )
                        @endif
                    </small>
                </div><!--col-->
            </div><!--row-->
        </div><!--card-footer-->
    </div><!--card-->
@endsection