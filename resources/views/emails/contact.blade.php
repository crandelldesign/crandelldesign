@component('mail::message')

# You've Been Contacted by {{isset($request->name)?$request->name:'Name'}}

**Name:** {{isset($request->name)?$request->name:''}}

**Email:** {{isset($request->email)?$request->email:''}}

{{isset($request->name)?$request->name:''}} writes... {{isset($request->message_text)?$request->message_text:''}}

@endcomponent
