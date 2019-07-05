@extends ('backend.layouts.app')

@section ('title', __('labels.backend.customers.management') . ' | ' . __('labels.backend.customers.view'))

@section('breadcrumb-links')
@include('backend.customers.includes.breadcrumb-links')
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        {{ __('labels.backend.customers.management') }}
                        <small class="text-muted">{{ __('labels.backend.customers.view') }}</small>
                    </h4>
                </div><!--col-->
            </div><!--row-->

            <div class="row mt-4 mb-4">
                <div class="col">
                    @include('backend.customers.view')
                </div><!--col-->
            </div><!--row-->
        </div><!--card-body-->

        <div class="card-footer">
            <div class="row">
                <div class="col">
                    <small class="float-right text-muted">
                {{--       <strong>{{ __('labels.backend.customers.content.created_at') }}:</strong> {{ $customer->updated_at->timezone(get_user_timezone()) }} ({{ $customer->created_at->diffForHumans() }}),--}}
                {{--       <strong>{{__('labels.backend.customers.content.last_updated') }}:</strong> {{ $customer->created_at->timezone(get_user_timezone()) }} ({{$customer->updated_at->diffForHumans() }})--}}
                        @if ($customer->trashed())
                            <strong>{{ __('labels.backend.customers.content.deleted_at') }}:</strong> $customer->deleted_at->timezone(get_user_timezone())  ($customer->deleted_at->diffForHumans() )
                        @endif
                    </small>
                </div><!--col-->
            </div><!--row-->
        </div><!--card-footer-->
    </div><!--card-->
@endsection