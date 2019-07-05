@extends ('backend.layouts.app')

@section ('title', __('labels.backend.outcomes.management') . ' | ' . __('labels.backend.outcomes.view'))

@section('breadcrumb-links')
@include('backend.outcomes.includes.breadcrumb-links')
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        {{ __('labels.backend.outcomes.management') }}
                        <small class="text-muted">{{ __('labels.backend.outcomes.view') }}</small>
                    </h4>
                </div><!--col-->
            </div><!--row-->

            <div class="row mt-4 mb-4">
                <div class="col">
                    @include('backend.outcomes.view')
                </div><!--col-->
            </div><!--row-->
        </div><!--card-body-->

        <div class="card-footer">
            <div class="row">
                <div class="col">
                    <small class="float-right text-muted">
                {{--       <strong>{{ __('labels.backend.outcomes.content.created_at') }}:</strong> {{ $outcome->updated_at->timezone(get_user_timezone()) }} ({{ $outcome->created_at->diffForHumans() }}),--}}
                {{--       <strong>{{__('labels.backend.outcomes.content.last_updated') }}:</strong> {{ $outcome->created_at->timezone(get_user_timezone()) }} ({{$outcome->updated_at->diffForHumans() }})--}}
                        @if ($outcome->trashed())
                            <strong>{{ __('labels.backend.outcomes.content.deleted_at') }}:</strong> $outcome->deleted_at->timezone(get_user_timezone())  ($outcome->deleted_at->diffForHumans() )
                        @endif
                    </small>
                </div><!--col-->
            </div><!--row-->
        </div><!--card-footer-->
    </div><!--card-->
@endsection