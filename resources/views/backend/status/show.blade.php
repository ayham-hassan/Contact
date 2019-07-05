@extends ('backend.layouts.app')

@section ('title', __('labels.backend.status.management') . ' | ' . __('labels.backend.status.view'))

@section('breadcrumb-links')
@include('backend.status.includes.breadcrumb-links')
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        {{ __('labels.backend.status.management') }}
                        <small class="text-muted">{{ __('labels.backend.status.view') }}</small>
                    </h4>
                </div><!--col-->
            </div><!--row-->

            <div class="row mt-4 mb-4">
                <div class="col">
                    @include('backend.status.view')
                </div><!--col-->
            </div><!--row-->
        </div><!--card-body-->

        <div class="card-footer">
            <div class="row">
                <div class="col">
                    <small class="float-right text-muted">
                {{--       <strong>{{ __('labels.backend.status.content.created_at') }}:</strong> {{ $status->updated_at->timezone(get_user_timezone()) }} ({{ $status->created_at->diffForHumans() }}),--}}
                {{--       <strong>{{__('labels.backend.status.content.last_updated') }}:</strong> {{ $status->created_at->timezone(get_user_timezone()) }} ({{$status->updated_at->diffForHumans() }})--}}
                        @if ($status->trashed())
                            <strong>{{ __('labels.backend.status.content.deleted_at') }}:</strong> $status->deleted_at->timezone(get_user_timezone())  ($status->deleted_at->diffForHumans() )
                        @endif
                    </small>
                </div><!--col-->
            </div><!--row-->
        </div><!--card-footer-->
    </div><!--card-->
@endsection