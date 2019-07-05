<div class="row mt-4 mb-4">
    <div class="col">
         
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.addresses.build_num'))->class('col-md-2 form-control-label')->for('build_num') }}
            <div class="col-md-10">
                
                        {{ html()->text('build_num')
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.addresses.build_num'))
                        
                        
                      
                            ->required() 
                         }}
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.addresses.street'))->class('col-md-2 form-control-label')->for('street') }}
            <div class="col-md-10">
                
                        {{ html()->text('street')
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.addresses.street'))
                        
                        
                      
                            ->required() 
                         }}
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.addresses.area'))->class('col-md-2 form-control-label')->for('area') }}
            <div class="col-md-10">
                
                        {{ html()->text('area')
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.addresses.area'))
                        
                        
                      
                            ->required() 
                         }}
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.addresses.city'))->class('col-md-2 form-control-label')->for('city') }}
            <div class="col-md-10">
                
                        {{ html()->text('city')
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.addresses.city'))
                        
                        
                      
                            ->required() 
                         }}
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.addresses.zipcode'))->class('col-md-2 form-control-label')->for('zipcode') }}
            <div class="col-md-10">
                
                        {{ html()->text('zipcode')
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.addresses.zipcode'))
                        
                        
                      
                            ->required() 
                         }}
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.addresses.country'))->class('col-md-2 form-control-label')->for('country') }}
            <div class="col-md-10">
                
                        {{ html()->text('country')
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.addresses.country'))
                        
                        
                      
                            ->required() 
                         }}
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.addresses.details'))->class('col-md-2 form-control-label')->for('details') }}
            <div class="col-md-10">
                
                        {{ html()->textarea('details')
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.addresses.details'))
                        
                        
                      
                         }}
                

            </div><!--col-->
        </div><!--form-group-->
        

        <!--end-columns-->
              



    </div><!--col-->
</div><!--row-->