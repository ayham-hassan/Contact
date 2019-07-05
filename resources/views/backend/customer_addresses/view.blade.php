<div class="row mt-4 mb-4">
    <div class="col">

       
            <div class="form-group row">
            {{ html()->label(__('labels.backend.customer_addresses.table.id'))->class('col-md-2 form-control-label')->for('id') }}
            <div class="col-md-10">
       

                {{ $customer_address->id }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('labels.backend.customer_addresses.table.customer_id'))->class('col-md-2 form-control-label')->for('customer_id') }}
            <div class="col-md-10">
       
           {{ $customer_address->customer? $customer_address->customer->name : 'N/A' }}

        </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('labels.backend.customer_addresses.table.address_id'))->class('col-md-2 form-control-label')->for('address_id') }}
            <div class="col-md-10">
       
           {{ $customer_address->address? $customer_address->address->city : 'N/A' }}

        </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('labels.backend.customer_addresses.table.rec_date'))->class('col-md-2 form-control-label')->for('rec_date') }}
            <div class="col-md-10">
       

                {{ $customer_address->rec_date }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('labels.backend.customer_addresses.table.details'))->class('col-md-2 form-control-label')->for('details') }}
            <div class="col-md-10">
       

                {{ $customer_address->details }}

            </div><!--col-->
         </div><!--form-group-->
         

        <!--end-columns-->
      


    </div><!--col-->
</div><!--row-->