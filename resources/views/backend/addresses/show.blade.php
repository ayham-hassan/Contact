@extends ('backend.layouts.app')

@section ('title', __('labels.backend.addresses.management') . ' | ' . __('labels.backend.addresses.view'))

@section('breadcrumb-links')
@include('backend.addresses.includes.breadcrumb-links')
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        {{ __('labels.backend.addresses.management') }}
                        <small class="text-muted">{{ __('labels.backend.addresses.view') }}</small>
                    </h4>
                </div><!--col-->
            </div><!--row-->

            <div class="row mt-4 mb-4">
                <div class="col">
                    @include('backend.addresses.view')
                </div><!--col-->
            </div><!--row-->
        </div><!--card-body-->

        <div class="card-footer">
            <div class="row">
                <div class="col">
                    <small class="float-right text-muted">
                {{--       <strong>{{ __('labels.backend.addresses.content.created_at') }}:</strong> {{ $address->updated_at->timezone(get_user_timezone()) }} ({{ $address->created_at->diffForHumans() }}),--}}
                {{--       <strong>{{__('labels.backend.addresses.content.last_updated') }}:</strong> {{ $address->created_at->timezone(get_user_timezone()) }} ({{$address->updated_at->diffForHumans() }})--}}
                        @if ($address->trashed())
                            <strong>{{ __('labels.backend.addresses.content.deleted_at') }}:</strong> $address->deleted_at->timezone(get_user_timezone())  ($address->deleted_at->diffForHumans() )
                        @endif
                    </small>
                </div><!--col-->
            </div><!--row-->
        </div><!--card-footer-->
    </div><!--card-->
@endsection