<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
                
                  <th>@sortablelink('code', trans('labels.backend.outcomes.table.code')) </th>
                
                 <th>{{ __('labels.backend.outcomes.table.description') }}</th>
                
            <th>{{ __('labels.general.actions') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($outcomes as $outcome)
        <tr>
             
                <td>{{  $outcome->code }}</td>  
                <td>{{  $outcome->description }}</td>  
                

               <td>{!! $outcome->action_buttons !!}</td>
        </tr>

        @endforeach
        </tbody>
    </table>
</div>