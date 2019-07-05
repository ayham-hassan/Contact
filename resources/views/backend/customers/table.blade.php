<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
                
                  <th>@sortablelink('name', trans('labels.backend.customers.table.name')) </th>
                
                  <th>@sortablelink('coming_date', trans('labels.backend.customers.table.coming_date')) </th>
                
                 <th>{{ __('labels.backend.customers.table.details') }}</th>
                
            <th>{{ __('labels.general.actions') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($customers as $customer)
        <tr>
             
                <td>{{  $customer->name }}</td>  
                <td>{{  $customer->coming_date }}</td>  
                <td>{{  $customer->details }}</td>  
                

               <td>{!! $customer->action_buttons !!}</td>
        </tr>

        @endforeach
        </tbody>
    </table>
</div>