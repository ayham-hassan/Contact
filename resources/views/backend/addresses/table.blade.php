<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
                
                  <th>@sortablelink('build_num', trans('labels.backend.addresses.table.build_num')) </th>
                
                  <th>@sortablelink('street', trans('labels.backend.addresses.table.street')) </th>
                
                 <th>{{ __('labels.backend.addresses.table.area') }}</th>
                
                 <th>{{ __('labels.backend.addresses.table.city') }}</th>
                
                 <th>{{ __('labels.backend.addresses.table.zipcode') }}</th>
                
                  <th>@sortablelink('country', trans('labels.backend.addresses.table.country')) </th>
                
                 <th>{{ __('labels.backend.addresses.table.details') }}</th>
                
            <th>{{ __('labels.general.actions') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($addresses as $address)
        <tr>
             
                <td>{{  $address->build_num }}</td>  
                <td>{{  $address->street }}</td>  
                <td>{{  $address->area }}</td>  
                <td>{{  $address->city }}</td>  
                <td>{{  $address->zipcode }}</td>  
                <td>{{  $address->country }}</td>  
                <td>{{  $address->details }}</td>  
                

               <td>{!! $address->action_buttons !!}</td>
        </tr>

        @endforeach
        </tbody>
    </table>
</div>