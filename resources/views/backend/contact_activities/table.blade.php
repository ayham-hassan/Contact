<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
                
                 <th>{{ __('labels.backend.contact_activities.table.contact_id') }}</th>
                
                 <th>{{ __('labels.backend.contact_activities.table.type_id') }}</th>
                
                 <th>{{ __('labels.backend.contact_activities.table.outcome_id') }}</th>
                
                  <th>@sortablelink('activity_date', trans('labels.backend.contact_activities.table.activity_date')) </th>
                
                 <th>{{ __('labels.backend.contact_activities.table.details') }}</th>
                
            <th>{{ __('labels.general.actions') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($contact_activities as $contact_activity)
        <tr>
             
                <td>{!! $contact_activity->contact? $contact_activity->contact->name : 'N/A' !!}</td> 
                <td>{!! $contact_activity->type? $contact_activity->type->code : 'N/A' !!}</td> 
                <td>{!! $contact_activity->outcome? $contact_activity->outcome->code : 'N/A' !!}</td> 
                <td>{{  $contact_activity->activity_date }}</td>  
                <td>{{  $contact_activity->details }}</td>  
                

               <td>{!! $contact_activity->action_buttons !!}</td>
        </tr>

        @endforeach
        </tbody>
    </table>
</div>