<div class="row mt-4 mb-4">
    <div class="col">
         
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.customer_addresses.customer_id'))->class('col-md-2 form-control-label')->for('customer_id') }}
            <div class="col-md-10">
                
                    <select class="form-control m-bot15" name="customer_id"  required  >
                         <option value="">select...</option>
                        @if  ($customers->count())
                        @foreach($customers as $temp)
                                <option value="{{ $temp->id }}" {{ isset($customer_address->customer_id)&& $customer_address->customer_id == $temp->id ? 'selected="selected"' : '' }}>{{ $temp->name }}</option>
                        @endforeach
                        @endif
                    </select>
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.customer_addresses.address_id'))->class('col-md-2 form-control-label')->for('address_id') }}
            <div class="col-md-10">
                
                    <select class="form-control m-bot15" name="address_id"  required  >
                         <option value="">select...</option>
                        @if  ($addresses->count())
                        @foreach($addresses as $temp)
                                <option value="{{ $temp->id }}" {{ isset($customer_address->address_id)&& $customer_address->address_id == $temp->id ? 'selected="selected"' : '' }}>{{ $temp->city }}</option>
                        @endforeach
                        @endif
                    </select>
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.customer_addresses.rec_date'))->class('col-md-2 form-control-label')->for('rec_date') }}
            <div class="col-md-10">
                
                        @php
                                $current_date=null;
                                if (isset($customer_address->rec_date)){
                                $current_date=$customer_address->rec_date->toDateString();
                                }

                            @endphp

                       {{ html()->date('rec_date',$current_date)
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.customer_addresses.rec_date'))
                        
                        
                      
                            ->required() 
                         }}

                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.customer_addresses.details'))->class('col-md-2 form-control-label')->for('details') }}
            <div class="col-md-10">
                
                        {{ html()->textarea('details')
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.customer_addresses.details'))
                        
                        
                      
                         }}
                

            </div><!--col-->
        </div><!--form-group-->
        

        <!--end-columns-->
             



    </div><!--col-->
</div><!--row-->