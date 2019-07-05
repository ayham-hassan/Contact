<div class="row mt-4 mb-4">
    <div class="col">
         
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.types.code'))->class('col-md-2 form-control-label')->for('code') }}
            <div class="col-md-10">
                
                        {{ html()->text('code')
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.types.code'))
                        
                        
                      
                            ->required() 
                         }}
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.types.description'))->class('col-md-2 form-control-label')->for('description') }}
            <div class="col-md-10">
                
                        {{ html()->textarea('description')
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.types.description'))
                        
                        
                      
                         }}
                

            </div><!--col-->
        </div><!--form-group-->
        

        <!--end-columns-->
             



    </div><!--col-->
</div><!--row-->