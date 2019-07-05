<div class="row mt-4 mb-4">
    <div class="col">
         
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.contacts.image'))->class('col-md-2 form-control-label')->for('image') }}
            <div class="col-md-10">
                
                        {{ html()->text('image_file')
                          ->class('form-control-file')
                          ->type("file")
                            ->placeholder(__('validation.attributes.backend.contacts.image'))
                       }}


                    @if (!empty($contact) && $contact->image)
                        <div>{!! html()->img($contact->image_url)->class('img-thumbnail')  !!}</div>
                    @endif


                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.contacts.name'))->class('col-md-2 form-control-label')->for('name') }}
            <div class="col-md-10">
                
                        {{ html()->text('name')
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.contacts.name'))
                        
                        
                      
                            ->required() 
                         }}
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.contacts.customer_id'))->class('col-md-2 form-control-label')->for('customer_id') }}
            <div class="col-md-10">
                
                    <select class="form-control m-bot15" name="customer_id"  required  >
                         <option value="">select...</option>
                        @if  ($customers->count())
                        @foreach($customers as $temp)
                                <option value="{{ $temp->id }}" {{ isset($contact->customer_id)&& $contact->customer_id == $temp->id ? 'selected="selected"' : '' }}>{{ $temp->name }}</option>
                        @endforeach
                        @endif
                    </select>
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.contacts.status_id'))->class('col-md-2 form-control-label')->for('status_id') }}
            <div class="col-md-10">
                
                    <select class="form-control m-bot15" name="status_id"  required  >
                         <option value="">select...</option>
                        @if  ($statuses->count())
                        @foreach($statuses as $temp)
                                <option value="{{ $temp->id }}" {{ isset($contact->status_id)&& $contact->status_id == $temp->id ? 'selected="selected"' : '' }}>{{ $temp->code }}</option>
                        @endforeach
                        @endif
                    </select>
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.contacts.email'))->class('col-md-2 form-control-label')->for('email') }}
            <div class="col-md-10">
                
                        {{ html()->email('email')
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.contacts.email'))
                        
                        
                      
                            ->required() 
                         }}
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.contacts.web_sit'))->class('col-md-2 form-control-label')->for('web_sit') }}
            <div class="col-md-10">
                
                        {{ html()->text('web_sit')
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.contacts.web_sit'))
                        
                        
                      
                         }}
                

            </div><!--col-->
        </div><!--form-group-->
         
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.contacts.mobile'))->class('col-md-2 form-control-label')->for('mobile') }}
            <div class="col-md-10">
                
                        {{ html()->text('mobile')
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.contacts.mobile'))
                        
                        
                      
                         }}
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.contacts.fax'))->class('col-md-2 form-control-label')->for('fax') }}
            <div class="col-md-10">
                
                        {{ html()->text('fax')
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.contacts.fax'))
                        
                        
                      
                         }}
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.contacts.details'))->class('col-md-2 form-control-label')->for('details') }}
            <div class="col-md-10">
                
                        {{ html()->textarea('details')
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.contacts.details'))
                        
                        
                      
                         }}
                

            </div><!--col-->
        </div><!--form-group-->
        

        <!--end-columns-->
             



    </div><!--col-->
</div><!--row-->