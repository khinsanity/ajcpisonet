{{-- Embed image to email --}}
<img style="width: 500px" height="150px" src="{{ $message->embed(public_path().'/assets/ajcofclogo.jpg')}}">


<p>Hi, my name is {{$inquire_client_name}}, and my email/contact is {{$inquire_client_email}},
    {{$inquire_client_message}}
</p>

<h3>Regards</h3>
