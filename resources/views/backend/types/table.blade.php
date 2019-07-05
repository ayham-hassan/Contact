<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
                
                  <th>@sortablelink('code', trans('labels.backend.types.table.code')) </th>
                
                 <th>{{ __('labels.backend.types.table.description') }}</th>
                
            <th>{{ __('labels.general.actions') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($types as $type)
        <tr>
             
                <td>{{  $type->code }}</td>  
                <td>{{  $type->description }}</td>  
                

               <td>{!! $type->action_buttons !!}</td>
        </tr>

        @endforeach
        </tbody>
    </table>
</div>