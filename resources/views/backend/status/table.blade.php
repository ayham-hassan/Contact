<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
                
                  <th>@sortablelink('code', trans('labels.backend.status.table.code')) </th>
                
                 <th>{{ __('labels.backend.status.table.description') }}</th>
                
            <th>{{ __('labels.general.actions') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($status as $status)
        <tr>
             
                <td>{{  $status->code }}</td>  
                <td>{{  $status->description }}</td>  
                

               <td>{!! $status->action_buttons !!}</td>
        </tr>

        @endforeach
        </tbody>
    </table>
</div>