<div class="row mt-4 mb-4">
    <div class="col">
         
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.contact_activities.contact_id'))->class('col-md-2 form-control-label')->for('contact_id') }}
            <div class="col-md-10">
                
                    <select class="form-control m-bot15" name="contact_id"  required  >
                         <option value="">select...</option>
                        @if  ($contacts->count())
                        @foreach($contacts as $temp)
                                <option value="{{ $temp->id }}" {{ isset($contact_activity->contact_id)&& $contact_activity->contact_id == $temp->id ? 'selected="selected"' : '' }}>{{ $temp->name }}</option>
                        @endforeach
                        @endif
                    </select>
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.contact_activities.type_id'))->class('col-md-2 form-control-label')->for('type_id') }}
            <div class="col-md-10">
                
                    <select class="form-control m-bot15" name="type_id"  required  >
                         <option value="">select...</option>
                        @if  ($types->count())
                        @foreach($types as $temp)
                                <option value="{{ $temp->id }}" {{ isset($contact_activity->type_id)&& $contact_activity->type_id == $temp->id ? 'selected="selected"' : '' }}>{{ $temp->code }}</option>
                        @endforeach
                        @endif
                    </select>
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.contact_activities.outcome_id'))->class('col-md-2 form-control-label')->for('outcome_id') }}
            <div class="col-md-10">
                
                    <select class="form-control m-bot15" name="outcome_id"  required  >
                         <option value="">select...</option>
                        @if  ($outcomes->count())
                        @foreach($outcomes as $temp)
                                <option value="{{ $temp->id }}" {{ isset($contact_activity->outcome_id)&& $contact_activity->outcome_id == $temp->id ? 'selected="selected"' : '' }}>{{ $temp->code }}</option>
                        @endforeach
                        @endif
                    </select>
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.contact_activities.activity_date'))->class('col-md-2 form-control-label')->for('activity_date') }}
            <div class="col-md-10">
                
                        @php
                                $current_date=null;
                                if (isset($contact_activity->activity_date)){
                                $current_date=$contact_activity->activity_date->toDateString();
                                }

                            @endphp

                       {{ html()->date('activity_date',$current_date)
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.contact_activities.activity_date'))
                        
                        
                      
                            ->required() 
                         }}

                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.contact_activities.details'))->class('col-md-2 form-control-label')->for('details') }}
            <div class="col-md-10">
                
                        {{ html()->textarea('details')
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.contact_activities.details'))
                        
                        
                      
                         }}
                

            </div><!--col-->
        </div><!--form-group-->
        

        <!--end-columns-->
             



    </div><!--col-->
</div><!--row-->