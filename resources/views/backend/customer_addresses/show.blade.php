@extends ('backend.layouts.app')

@section ('title', __('labels.backend.customer_addresses.management') . ' | ' . __('labels.backend.customer_addresses.view'))

@section('breadcrumb-links')
@include('backend.customer_addresses.includes.breadcrumb-links')
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        {{ __('labels.backend.customer_addresses.management') }}
                        <small class="text-muted">{{ __('labels.backend.customer_addresses.view') }}</small>
                    </h4>
                </div><!--col-->
            </div><!--row-->

            <div class="row mt-4 mb-4">
                <div class="col">
                    @include('backend.customer_addresses.view')
                </div><!--col-->
            </div><!--row-->
        </div><!--card-body-->

        <div class="card-footer">
            <div class="row">
                <div class="col">
                    <small class="float-right text-muted">
                {{--       <strong>{{ __('labels.backend.customer_addresses.content.created_at') }}:</strong> {{ $customer_address->updated_at->timezone(get_user_timezone()) }} ({{ $customer_address->created_at->diffForHumans() }}),--}}
                {{--       <strong>{{__('labels.backend.customer_addresses.content.last_updated') }}:</strong> {{ $customer_address->created_at->timezone(get_user_timezone()) }} ({{$customer_address->updated_at->diffForHumans() }})--}}
                        @if ($customer_address->trashed())
                            <strong>{{ __('labels.backend.customer_addresses.content.deleted_at') }}:</strong> $customer_address->deleted_at->timezone(get_user_timezone())  ($customer_address->deleted_at->diffForHumans() )
                        @endif
                    </small>
                </div><!--col-->
            </div><!--row-->
        </div><!--card-footer-->
    </div><!--card-->
@endsection