<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
                
                 <th>{{ __('labels.backend.customer_addresses.table.customer_id') }}</th>
                
                 <th>{{ __('labels.backend.customer_addresses.table.address_id') }}</th>
                
                 <th>{{ __('labels.backend.customer_addresses.table.rec_date') }}</th>
                
                 <th>{{ __('labels.backend.customer_addresses.table.details') }}</th>
                
            <th>{{ __('labels.general.actions') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($customer_addresses as $customer_address)
        <tr>
             
                <td>{!! $customer_address->customer? $customer_address->customer->name : 'N/A' !!}</td> 
                <td>{!! $customer_address->address? $customer_address->address->city : 'N/A' !!}</td> 
                <td>{{  $customer_address->rec_date }}</td>  
                <td>{{  $customer_address->details }}</td>  
                

               <td>{!! $customer_address->action_buttons !!}</td>
        </tr>

        @endforeach
        </tbody>
    </table>
</div>