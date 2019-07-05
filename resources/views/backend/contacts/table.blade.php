<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
                
                 <th>{{ __('labels.backend.contacts.table.image') }}</th>
                
                  <th>@sortablelink('name', trans('labels.backend.contacts.table.name')) </th>
                
                 <th>{{ __('labels.backend.contacts.table.customer_id') }}</th>
                
                 <th>{{ __('labels.backend.contacts.table.status_id') }}</th>
                
                  <th>@sortablelink('email', trans('labels.backend.contacts.table.email')) </th>
                
            <th>{{ __('labels.general.actions') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($contacts as $contact)
        <tr>
             
                <td style="width:30px">
                    @if (!empty($contact) && $contact->image)
                       {!! html()->img($contact->image_url)->class('img-fluid')  !!}
                   @else
                       {!! html()->i()->class('fa fa-image fa-3x')  !!}
                   @endif
               </td> 
                <td>{{  $contact->name }}</td>  
                <td>{!! $contact->customer? $contact->customer->name : 'N/A' !!}</td> 
                <td>{!! $contact->status? $contact->status->code : 'N/A' !!}</td> 
                <td>{{  $contact->email }}</td>       
                

               <td>{!! $contact->action_buttons !!}</td>
        </tr>

        @endforeach
        </tbody>
    </table>
</div>