<div class="row mt-4 mb-4">
    <div class="col">

       
            <div class="form-group row">
            {{ html()->label(__('labels.backend.contacts.table.id'))->class('col-md-2 form-control-label')->for('id') }}
            <div class="col-md-10">
       

                {{ $contact->id }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('labels.backend.contacts.table.image'))->class('col-md-2 form-control-label')->for('image') }}
            <div class="col-md-10">
       
               @if (!empty($contact) && $contact->image)
                    <div>{!! html()->img($contact->image_url)->class('img-thumbnail')  !!}</div>
                @else
                    <div>{!! html()->i()->class('fa fa-image fa-9x')  !!}</div>
               @endif
       </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('labels.backend.contacts.table.name'))->class('col-md-2 form-control-label')->for('name') }}
            <div class="col-md-10">
       

                {{ $contact->name }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('labels.backend.contacts.table.customer_id'))->class('col-md-2 form-control-label')->for('customer_id') }}
            <div class="col-md-10">
       
           {{ $contact->customer? $contact->customer->name : 'N/A' }}

        </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('labels.backend.contacts.table.status_id'))->class('col-md-2 form-control-label')->for('status_id') }}
            <div class="col-md-10">
       
           {{ $contact->status? $contact->status->code : 'N/A' }}

        </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('labels.backend.contacts.table.email'))->class('col-md-2 form-control-label')->for('email') }}
            <div class="col-md-10">
       

                {{ $contact->email }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('labels.backend.contacts.table.web_sit'))->class('col-md-2 form-control-label')->for('web_sit') }}
            <div class="col-md-10">
       

                {{ $contact->web_sit }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('labels.backend.contacts.table.phone'))->class('col-md-2 form-control-label')->for('phone') }}
            <div class="col-md-10">
       

                {{ $contact->phone }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('labels.backend.contacts.table.mobile'))->class('col-md-2 form-control-label')->for('mobile') }}
            <div class="col-md-10">
       

                {{ $contact->mobile }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('labels.backend.contacts.table.fax'))->class('col-md-2 form-control-label')->for('fax') }}
            <div class="col-md-10">
       

                {{ $contact->fax }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('labels.backend.contacts.table.details'))->class('col-md-2 form-control-label')->for('details') }}
            <div class="col-md-10">
       

                {{ $contact->details }}

            </div><!--col-->
         </div><!--form-group-->
         

        <!--end-columns-->
      
        <div class="form-group row">
           {{html()->label(__('ContactActivitys'))->class('col-md-2 form-control-label')->for('contact_activities') }}
            <div class="col-md-10">
                  @if  ( isset($contact->getContactActivities)&&$contact->getContactActivities->count())
                    @foreach($contact->getContactActivities as $temp)
                        {{$temp->details }},
                    @endforeach
                @endif
            </div><!--col-->
        </div><!--form-group-->
        


    </div><!--col-->
</div><!--row-->